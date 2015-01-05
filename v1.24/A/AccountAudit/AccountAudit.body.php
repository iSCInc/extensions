<?php

class AccountAudit {

	const ACCESS_METHOD_DEFAULT = 0;
	const ACCESS_METHOD_MOBILE = 1;

	/**
	 * Updates the aa_lastlogin value for the specified user
	 *
	 * @param User $user the user that just logged in
	 * @param int $time timestamp, 0 for current time
	 *
	 * @return bool return True to continue processing hooks
	 */
	static function updateLastLogin( User $user, $time = 0 ) {

		if ( wfReadOnly() ) {
			return true;
		}

		$db = wfGetDB( DB_MASTER );
		$method = __METHOD__;

		$requestMethod = self::ACCESS_METHOD_DEFAULT;
		if ( class_exists( "MobileContext" ) && MobileContext::singleton()->shouldDisplayMobileView() ) {
			$requestMethod = self::ACCESS_METHOD_MOBILE;
		}

		$db->onTransactionIdle( function() use ( $user, $requestMethod, $time, $db, $method ) {
			if ( $db->getType() === 'mysql' ) { // MySQL-specific implementation
				$db->query(
					"INSERT INTO " . $db->tableName( 'accountaudit_login' ) .
						"( aa_user, aa_method, aa_lastlogin ) VALUES (" .
						$db->addQuotes( $user->getId() ) . ", " .
						$db->addQuotes( $requestMethod ) . ", " .
						$db->addQuotes( $db->timestamp( $time ) ) .
						") ON DUPLICATE KEY UPDATE aa_lastlogin = " .
						$db->addQuotes( $db->timestamp( $time ) ),
					$method
				);
			} else {
				$db->update(
					'accountaudit_login',
					array( 'aa_lastlogin' => $db->timestamp( $time ) ),
					array( 'aa_user' => $user->getId(), 'aa_method' => $requestMethod ),
					$method
				);
				if ( $db->affectedRows() == 0 ) { // no row existed for that user, method
					$db->insert(
						'accountaudit_login',
						array(
							 'aa_user' => $user->getId(),
							 'aa_method' => $requestMethod,
							 'aa_lastlogin' =>  $db->timestamp( $time )
						),
						$method,
						array( 'IGNORE', )
					);
				}
			}
		} );
		// always return true, this should be a non-blocking hook on failure
		return true;
	}
}
