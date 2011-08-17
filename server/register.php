<?php
require_once '../includes.php';
require_once BASE.'/server/model/Userinfo.php';
require_once BASE.'/server/model/base/DAO.php';
// register user info
// get parameter from request
// 
header("Content-type:application/json");
$ksXing = $_POST['ksXing']; 
$ksMing = $_POST['ksMing'];
$ksPXing = $_POST['ksPXing'];
$ksPMing = $_POST['ksPMing'];
$ksXB = $_POST['ksXB'];
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$ksCsrq = $_POST['ksCsrq'];//出生日期
$ksIDType = $_POST['ksIDType'];
$ksIDNO = $_POST['ksIDNO'];
$ksPwd = $_POST['ksPwd'];
$reformpwd = $_POST['reformpwd'];
$ksRemind = $_POST['ksRemind'];
$ksRemindAnswer = $_POST['ksRemindAnswer'];
$userqh = $_POST['userqh'];//
$usertel = $_POST['usertel'];
$ksTel = $_POST['ksTel'];
$ksMobile = $_POST['ksMobile'];
$ksEmail = $_POST['ksEmail'];
$wishjb = $_POST['wishjb'];
$wishProvince = $_POST['province'];
$wishCity1 = $_POST['selectCity1'];
$wishCity2 = $_POST['selectCity2'];
$wishCity3 = $_POST['selectCity3'];
$tiaoji = $_POST['tiaoji'];
$ksqq = $_POST['ksqq'];




try {
	if(isExistedKsIDNO($ksIDNO, $ksIDType, $db_i)){
		$result = array(
			'errorNum' =>203,
			'retVal'=>0
		);
		echo json_encode($result);
		exit;
	}

	$dsn = 'mysql:host=' . $db_i['host'] . ';dbname=' . $db_i['dbname'];
	$db = new PDO($dsn, $db_i['username'], $db_i['password']);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = 'INSERT INTO userinfo(
	ksxing,
	ksming,
	kspxing,
	kspming,
	ksxb,
	year,
	month,
	day,
	ksidtype,
	ksidno,
	kspwd,
	ksremind,
	ksremindanswer,
	userqh,
	usertel,
	kstel,
	ksmobile,
	ksemail,
	wishjb,
	wishprovince,
	wishcity1,
	wishcity2,
	wishcity3,
	tiaoji,
	ksqq
	) values(
	:ksxing,
	:ksming,
	:kspxing,
	:kspming,
	:ksxb,
	:year,
	:month,
	:day,
	:ksidtype,
	:ksidno,
	:kspwd,
	:ksremind,
	:ksremindanswer,
	:userqh,
	:usertel,
	:kstel,
	:ksmobile,
	:ksemail,
	:wishjb,
	:wishprovince,
	:wishcity1,
	:wishcity2,
	:wishcity3,
	:tiaoji,
	:ksqq
	)';
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':ksxing', $ksXing);
	$stmt->bindParam(':ksming', $ksMing);
	$stmt->bindParam(':kspxing', $ksPXing);
	$stmt->bindParam(':kspming', $ksPMing);
	$stmt->bindParam(':ksxb', $ksXB);
	$stmt->bindParam(':year', $year);
	$stmt->bindParam(':month', $month);
	$stmt->bindParam(':day', $day);
	$stmt->bindParam(':ksidtype', $ksIDType);
	$stmt->bindParam(':ksidno', $ksIDNO);
	$stmt->bindParam(':kspwd', $ksPwd);
	$stmt->bindParam(':ksremind', $ksRemind);
	$stmt->bindParam(':ksremindanswer', $ksRemindAnswer);
	$stmt->bindParam(':userqh', $userqh);
	$stmt->bindParam(':usertel', $usertel);
	$stmt->bindParam(':kstel', $ksTel);
	$stmt->bindParam(':ksmobile', $ksMobile);
	$stmt->bindParam(':ksemail', $ksEmail);
	$stmt->bindParam(':wishjb', $wishjb);
	$stmt->bindParam(':wishprovince', $wishProvince);
	$stmt->bindParam(':wishcity1', $wishCity1);
	$stmt->bindParam(':wishcity2', $wishCity2);
	$stmt->bindParam(':wishcity3', $wishCity3);
	$stmt->bindParam(':tiaoji', $tiaoji);
	$stmt->bindParam(':ksqq', $ksqq);
	$db->query("SET NAMES 'utf8'");
	$stmt->execute();
	$result = array(
		'retVal' => 1
	);
} catch (Exception $e) {
	echo 'SQL: ' . $sql;
	echo 'Error: ' . $e->getMessage();
	$result = array(
		'errorNum' =>103,
		'retVal'=>0
	);
}


echo json_encode($result);

// check ksIDNO is existed
function isExistedKsIDNO($ksIDNO, $ksIDType, $db_i) {
	$isExisted = false;
	$dsn = 'mysql:host=' . $db_i['host'] . ';dbname=' . $db_i['dbname'];
	$db = new PDO($dsn, $db_i['username'], $db_i['password']);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$selectUserInfoSql = 'SELECT COUNT(1) CONT FROM userinfo WHERE ksidno = :ksidno and ksidtype = :ksidtype';
	$stmt = $db->prepare($selectUserInfoSql);
	$stmt->bindParam(':ksidno', $ksIDNO);
	$stmt->bindParam(':ksidtype', $ksIDType);
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		if($row['CONT'] > 0) {
			$isExisted = true;
		}
	}
	return $isExisted;		
}
?>
