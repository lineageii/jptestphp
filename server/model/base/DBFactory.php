<?php
/**
 * Thin PHP Framework (TPF) 2011 http://thinphp.com
 *
 * Licensed under TPF License at http://bit.ly/TPFLicense
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2011, Thin PHP Framework Team
 * @link          http://thinphp.com
 * @package       app.model.base
 * @license       TPF License http://bit.ly/TPFLicense
 */
defined('BASE') or exit('Direct script access is not allowed!');
require_once BASE.'/server/model/base/driver/DBPdoMysql.php';

abstract class DBFactory {
	// Singleton pattern.
	static $dbh;

	/**
	 * @return Database Handler
	 */
	public static function getDBHandler() {
		global $db_i;

		if ( !isset(self::$dbh) ) {
			$ret = new DBPdoMysql($db_i);
			self::$dbh = $ret->getDBHandler();
			return self::$dbh;
		}
		return self::$dbh;
	}
}
