<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/server/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'userinfo' 
 * @author: Thin PHP Framework
 * @date: 2011-08-30 10:56
 */
class Userinfo extends BaseBO
{
	private $fields;
	private $id;
	private $phase;
	private $paymoney;
	private $ksxing;
	private $ksming;
	private $kspxing;
	private $kspming;
	private $ksxb;
	private $year;
	private $month;
	private $day;
	private $ksidtype;
	private $ksidno;
	private $kspwd;
	private $ksremind;
	private $ksremindanswer;
	private $userqh;
	private $usertel;
	private $kstel;
	private $ksmobile;
	private $ksemail;
	private $wishjb;
	private $wishprovince;
	private $wishcity1;
	private $wishcity2;
	private $wishcity3;
	private $tiaoji;
	private $ksqq;
	private $ksimgsrc;
	private $pwd;


	/**
	 * Default constructor
	 * @param value some value
	 */
	function __construct()
	{
		$args = func_get_args();
		if ( func_num_args() == 1 ) {
			$this->init( $args[0] );
		}
	}

	/**
	 * Initialize the business object with data read from the DB.
	 * @param row array containing one read record.
	 */
	private function init($fields)
	{
		$this->fields = $fields;
		if (isset($fields['id'])) $this->id = $fields['id'];
		if (isset($fields['phase'])) $this->phase = $fields['phase'];
		if (isset($fields['paymoney'])) $this->paymoney = $fields['paymoney'];
		if (isset($fields['ksxing'])) $this->ksxing = $fields['ksxing'];
		if (isset($fields['ksming'])) $this->ksming = $fields['ksming'];
		if (isset($fields['kspxing'])) $this->kspxing = $fields['kspxing'];
		if (isset($fields['kspming'])) $this->kspming = $fields['kspming'];
		if (isset($fields['ksxb'])) $this->ksxb = $fields['ksxb'];
		if (isset($fields['year'])) $this->year = $fields['year'];
		if (isset($fields['month'])) $this->month = $fields['month'];
		if (isset($fields['day'])) $this->day = $fields['day'];
		if (isset($fields['ksidtype'])) $this->ksidtype = $fields['ksidtype'];
		if (isset($fields['ksidno'])) $this->ksidno = $fields['ksidno'];
		if (isset($fields['kspwd'])) $this->kspwd = $fields['kspwd'];
		if (isset($fields['ksremind'])) $this->ksremind = $fields['ksremind'];
		if (isset($fields['ksremindanswer'])) $this->ksremindanswer = $fields['ksremindanswer'];
		if (isset($fields['userqh'])) $this->userqh = $fields['userqh'];
		if (isset($fields['usertel'])) $this->usertel = $fields['usertel'];
		if (isset($fields['kstel'])) $this->kstel = $fields['kstel'];
		if (isset($fields['ksmobile'])) $this->ksmobile = $fields['ksmobile'];
		if (isset($fields['ksemail'])) $this->ksemail = $fields['ksemail'];
		if (isset($fields['wishjb'])) $this->wishjb = $fields['wishjb'];
		if (isset($fields['wishprovince'])) $this->wishprovince = $fields['wishprovince'];
		if (isset($fields['wishcity1'])) $this->wishcity1 = $fields['wishcity1'];
		if (isset($fields['wishcity2'])) $this->wishcity2 = $fields['wishcity2'];
		if (isset($fields['wishcity3'])) $this->wishcity3 = $fields['wishcity3'];
		if (isset($fields['tiaoji'])) $this->tiaoji = $fields['tiaoji'];
		if (isset($fields['ksqq'])) $this->ksqq = $fields['ksqq'];
		if (isset($fields['ksimgsrc'])) $this->ksimgsrc = $fields['ksimgsrc'];
		if (isset($fields['pwd'])) $this->pwd = $fields['pwd'];
	
	}

	public function getFields() {
		return $this->fields;
	}

	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->fields['id'] = $id;
		$this->id = $id;
	}

	public function getPhase() {
		return $this->phase;
	}
	public function setPhase($phase) {
		$this->fields['phase'] = $phase;
		$this->phase = $phase;
	}

	public function getPaymoney() {
		return $this->paymoney;
	}
	public function setPaymoney($paymoney) {
		$this->fields['paymoney'] = $paymoney;
		$this->paymoney = $paymoney;
	}

	public function getKsxing() {
		return $this->ksxing;
	}
	public function setKsxing($ksxing) {
		$this->fields['ksxing'] = $ksxing;
		$this->ksxing = $ksxing;
	}

	public function getKsming() {
		return $this->ksming;
	}
	public function setKsming($ksming) {
		$this->fields['ksming'] = $ksming;
		$this->ksming = $ksming;
	}

	public function getKspxing() {
		return $this->kspxing;
	}
	public function setKspxing($kspxing) {
		$this->fields['kspxing'] = $kspxing;
		$this->kspxing = $kspxing;
	}

	public function getKspming() {
		return $this->kspming;
	}
	public function setKspming($kspming) {
		$this->fields['kspming'] = $kspming;
		$this->kspming = $kspming;
	}

	public function getKsxb() {
		return $this->ksxb;
	}
	public function setKsxb($ksxb) {
		$this->fields['ksxb'] = $ksxb;
		$this->ksxb = $ksxb;
	}

	public function getYear() {
		return $this->year;
	}
	public function setYear($year) {
		$this->fields['year'] = $year;
		$this->year = $year;
	}

	public function getMonth() {
		return $this->month;
	}
	public function setMonth($month) {
		$this->fields['month'] = $month;
		$this->month = $month;
	}

	public function getDay() {
		return $this->day;
	}
	public function setDay($day) {
		$this->fields['day'] = $day;
		$this->day = $day;
	}

	public function getKsidtype() {
		return $this->ksidtype;
	}
	public function setKsidtype($ksidtype) {
		$this->fields['ksidtype'] = $ksidtype;
		$this->ksidtype = $ksidtype;
	}

	public function getKsidno() {
		return $this->ksidno;
	}
	public function setKsidno($ksidno) {
		$this->fields['ksidno'] = $ksidno;
		$this->ksidno = $ksidno;
	}

	public function getKspwd() {
		return $this->kspwd;
	}
	public function setKspwd($kspwd) {
		$this->fields['kspwd'] = $kspwd;
		$this->kspwd = $kspwd;
	}

	public function getKsremind() {
		return $this->ksremind;
	}
	public function setKsremind($ksremind) {
		$this->fields['ksremind'] = $ksremind;
		$this->ksremind = $ksremind;
	}

	public function getKsremindanswer() {
		return $this->ksremindanswer;
	}
	public function setKsremindanswer($ksremindanswer) {
		$this->fields['ksremindanswer'] = $ksremindanswer;
		$this->ksremindanswer = $ksremindanswer;
	}

	public function getUserqh() {
		return $this->userqh;
	}
	public function setUserqh($userqh) {
		$this->fields['userqh'] = $userqh;
		$this->userqh = $userqh;
	}

	public function getUsertel() {
		return $this->usertel;
	}
	public function setUsertel($usertel) {
		$this->fields['usertel'] = $usertel;
		$this->usertel = $usertel;
	}

	public function getKstel() {
		return $this->kstel;
	}
	public function setKstel($kstel) {
		$this->fields['kstel'] = $kstel;
		$this->kstel = $kstel;
	}

	public function getKsmobile() {
		return $this->ksmobile;
	}
	public function setKsmobile($ksmobile) {
		$this->fields['ksmobile'] = $ksmobile;
		$this->ksmobile = $ksmobile;
	}

	public function getKsemail() {
		return $this->ksemail;
	}
	public function setKsemail($ksemail) {
		$this->fields['ksemail'] = $ksemail;
		$this->ksemail = $ksemail;
	}

	public function getWishjb() {
		return $this->wishjb;
	}
	public function setWishjb($wishjb) {
		$this->fields['wishjb'] = $wishjb;
		$this->wishjb = $wishjb;
	}

	public function getWishprovince() {
		return $this->wishprovince;
	}
	public function setWishprovince($wishprovince) {
		$this->fields['wishprovince'] = $wishprovince;
		$this->wishprovince = $wishprovince;
	}

	public function getWishcity1() {
		return $this->wishcity1;
	}
	public function setWishcity1($wishcity1) {
		$this->fields['wishcity1'] = $wishcity1;
		$this->wishcity1 = $wishcity1;
	}

	public function getWishcity2() {
		return $this->wishcity2;
	}
	public function setWishcity2($wishcity2) {
		$this->fields['wishcity2'] = $wishcity2;
		$this->wishcity2 = $wishcity2;
	}

	public function getWishcity3() {
		return $this->wishcity3;
	}
	public function setWishcity3($wishcity3) {
		$this->fields['wishcity3'] = $wishcity3;
		$this->wishcity3 = $wishcity3;
	}

	public function getTiaoji() {
		return $this->tiaoji;
	}
	public function setTiaoji($tiaoji) {
		$this->fields['tiaoji'] = $tiaoji;
		$this->tiaoji = $tiaoji;
	}

	public function getKsqq() {
		return $this->ksqq;
	}
	public function setKsqq($ksqq) {
		$this->fields['ksqq'] = $ksqq;
		$this->ksqq = $ksqq;
	}

	public function getKsimgsrc() {
		return $this->ksimgsrc;
	}
	public function setKsimgsrc($ksimgsrc) {
		$this->fields['ksimgsrc'] = $ksimgsrc;
		$this->ksimgsrc = $ksimgsrc;
	}

	public function getPwd() {
		return $this->pwd;
	}
	public function setPwd($pwd) {
		$this->fields['pwd'] = $pwd;
		$this->pwd = $pwd;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->phase.':'.$this->paymoney.':'.$this->ksxing.':'.$this->ksming.':'.$this->kspxing.':'.$this->kspming.':'.$this->ksxb.':'.$this->year.':'.$this->month.':'.$this->day.':'.$this->ksidtype.':'.$this->ksidno.':'.$this->kspwd.':'.$this->ksremind.':'.$this->ksremindanswer.':'.$this->userqh.':'.$this->usertel.':'.$this->kstel.':'.$this->ksmobile.':'.$this->ksemail.':'.$this->wishjb.':'.$this->wishprovince.':'.$this->wishcity1.':'.$this->wishcity2.':'.$this->wishcity3.':'.$this->tiaoji.':'.$this->ksqq.':'.$this->ksimgsrc.':'.$this->pwd;
	}
}
