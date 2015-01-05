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
}