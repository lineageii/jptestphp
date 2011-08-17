<?php
defined('BASE') or exit('Direct script access is not allowed!');
require_once BASE.'/server/model/base/BaseDAO.php';

class UserDAO extends BaseDAO
{
	public function __construct()
	{
		parent::__construct('user');				
	}	
	
public function isExistedKsIDNO($ksIDNO) {
		return '22222';	
	}
}

