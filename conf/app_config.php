<?php
/** 
 * Thin PHP Framework (TPF) 2011 http://thinphp.com
 *
 * Licensed under TPF License at http://bit.ly/TPFLicense
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2011, Thin PHP Framework Team
 * @link          http://thinphp.com
 * @package       app.conf
 * @license       TPF License http://bit.ly/TPFLicense
 */

	// The following parameters must be changed to your settings!

	
	// Database Info
	$db_i = array(
			'host'     => 'localhost',
			'username' => 'root',
			'password' => '',
			'dbname'   => 'phptest'
	);
	
	// yeepay Info
	$yeepay_i = array(
		'mid' => '10011211946',
		'sec' => 'Cu89o8258VjS6496U1e972C52K20a9wmKMd14H7vllz9Jx725K6265902sH3'
	);
	
	$system_i = array(
		'wwwprefix' => 'http://jptest.net'
	);
	
	// Log Info
	$log_i = array(
		'enabled'		=> 1,
		'log_level'		=> LL_ERROR | LL_FATAL,
		'log_to'		=> LG_FILE,
		'log_file'		=> '/server/log/main.txt',
		'log_max_file_size'	=> 512000,	// = 500 KB = 500*1024 bytes
		'log_max_backup_index' => 5,	// max number of log files to keep
		'log_pattern'	=> '{time} {name} [{type_padleft}] - {msg}',
		'log_time_format'	=> 'Y-m-d H:i:s.ms'
	);
