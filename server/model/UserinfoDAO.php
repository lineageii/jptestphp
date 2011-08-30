<?php
defined('BASE') or exit('Direct script access is not allowed!');
require_once BASE . '/includes.php';
require_once BASE . '/server/model/base/BaseDAO.php';

class UserinfoDAO extends BaseDAO
{
	public function __construct()
	{
		parent::__construct('userinfo');				
	}	
	
	/**
	 * 判断用户ＩＤ是否存在，存在返回true, 否则返回false
	 * @param $ksIDNO
	 * @return boolean
	 */
	public function isExistedKsIDNO($ksIDNO) {
		global $system_i;
		if ($this->dbh == null) return;
		$sql = "SELECT COUNT(1) CONT FROM userinfo WHERE ksidno = :ksidno and phase = '" . $system_i['phase'] ."'";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':ksidno', $ksIDNO);
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			if($row['CONT'] > 0) {
				$isExisted = true;
			}
		}
		return $isExisted;	
	}
	
	/**
	 * 判断密码是否错误，错误:true,正确:false
	 * @param $ksIDNO
	 * @param $password
	 * @return boolean
	 */
	public function isPasswordWrong($ksIDNO, $ksPwd){
		global $system_i;
		$sql = "SELECT * FROM userinfo WHERE ksidno = :ksidno and kspwd = :kspwd and phase = '" . $system_i['phase'] ."'";
		$paramArr = array(':ksidno'=>$ksIDNO,':kspwd'=>$ksPwd);
		$stmt = $this->prepareExecute($sql, $paramArr);
		if ($stmt && $stmt->rowCount() > 0) {
            return false;
		} else {
			return true;
		}
	}
	
	public function getUserinfo($ksIDNO, $ksPwd) {
		global $system_i;
		$sql = "SELECT * FROM userinfo WHERE ksidno = :ksidno and kspwd = :kspwd and phase = '" . $system_i['phase'] ."'";
		$paramArr = array(':ksidno'=>$ksIDNO,':kspwd'=>$ksPwd);
		$stmt = $this->prepareExecute($sql, $paramArr);
		if ($stmt && $stmt->rowCount() > 0) {
			return $stmt->fetchAll();
		}
		return null;
	}
	
	public function getUserinfoByKsid($ksid) {
		$sql = 'SELECT * FROM userinfo WHERE id = :ksid';
		$paramArr = array(':ksid'=>$ksid);
		$stmt = $this->prepareExecute($sql, $paramArr);
		if ($stmt && $stmt->rowCount() > 0) {
			return $stmt->fetchAll();
		}
		return null;
	}
	
	public function getUserinfoByKsidno($ksidno) {
		global $system_i;
		$sql = "SELECT * FROM userinfo WHERE ksidno = :ksidno and phase = '" . $system_i['phase'] ."'";
		$paramArr = array(':ksidno'=>$ksidno);
		$stmt = $this->prepareExecute($sql, $paramArr);
		if ($stmt && $stmt->rowCount() > 0) {
			return $stmt->fetchAll();
		}
		return null;
	}
	
	
	/**
	 * 
	 * 付款成功，更新用户表字段paymoney
	 * @param  $ksidno, $paymoney
	 */
	public function paySuccess($ksidno, $paymoney) {
		global $system_i;
		$paramArr = array(':ksidno'=>$ksidno, ':paymoney'=>$paymoney);
		return $this->update("paymoney = :paymoney where ksidno = :ksidno and phase = '" . $system_i['phase'] ."'", $paramArr);
	}
}

