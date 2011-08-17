<?php
/** 
 * Thin PHP Framework (TPF) 2011 http://thinphp.com
 *
 * Licensed under TPF License at http://bit.ly/TPFLicense
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2011, Thin PHP Framework Team
 * @link          http://thinphp.com
 * @package       app
 * @license       TPF License http://bit.ly/TPFLicense
 */
	define('BASE', dirname(__FILE__));
	
	require_once BASE.'/conf/app_config.php';
	
	require_once BASE.'/server/core/log/Logger.php';
	require_once BASE.'/server/model/RetCode.php';
	//date_default_timezone_set($app_i['timezone']);
