<?php

class AccountAuditHooks {

	/**
	 * Implementation of the hook for onUserLoginComplete.
	 *
	 * Calls AccountAudit::updateLastLogin to update the timestamp of the last
	 * login for the user
	 *
	 * @param User $user
	 * @param $inject_html
	 *
	 * @return bool
	 */
	static function onUserLoginComplete( User &$user, &$inject_html ) {

		AccountAudit::updateLastLogin( $user );

		// Always return true, we should never block execution on failure
		return true;
	}

	/**
	 * Implementation of the hook for loadExtensionSchemaUpdates
	 *
	 * Installs the requisite tables for this extension
	 *
	 * @param DatabaseUpdater $updater
	 *
	 * @return bool
	 */
	static function loadExtensionSchemaUpdates( DatabaseUpdater $updater ) {
		$updater->addExtensionTable( 'accountaudit_login', __DIR__ . '/accountaudit.sql' );
		$updater->addExtensionField( 'accountaudit_login', 'aa_method',
			__DIR__ . '/patches/add_method.sql' );
		return true;
	}

	/**
	 * @param User $oldUser
	 * @param User $newUser
	 * @return bool
	 */
	public static function onMergeAccountFromTo( User &$oldUser, User &$newUser ) {
		$dbr = wfGetDB( DB_SLAVE );
		// Get the last login for both old and new
		$res = $dbr->select(
			'accountaudit_login',
			array( 'aa_user', 'aa_lastlogin' ),
			array( $dbr->makeList( array(
				'aa_user=' . $dbr->addQuotes( $oldUser->getId() ),
				'aa_user=' . $dbr->addQuotes( $newUser->getId() ),
			), LIST_OR ) )
		);

		$greatest = 0;
		foreach ( $res as $row ) {
			if ( $row->aa_lastlogin > $greatest ) {
				$greatest = $row->aa_lastlogin;
			}
		}

		if ( $greatest !== 0 ) {
			// Set the last login for the new account to most recent
			// of both accounts
			AccountAudit::updateLastLogin( $newUser, $greatest );
		}

		return true;
	}

	public static function onDeleteAccount( User &$oldUser ) {
		$dbw = wfGetDB( DB_MASTER ); // Use master to be up to date
		$row = $dbw->selectRow(
			'accountaudit_login',
			array( 'aa_user' ),
			array( 'aa_user' => $oldUser->getId() )
		);
		if ( $row !== false ) {
			$dbw->onTransactionIdle( function() use ( $dbw, $oldUser ) {
				$dbw->delete(
					'accountaudit_login',
					array( 'aa_user' => $oldUser->getId() ),
					'AccountAuditHooks::onDeleteAccount'
				);
			} );
		}
	}
}