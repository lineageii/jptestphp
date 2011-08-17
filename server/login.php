<?php
require_once '../includes.php';
require_once BASE.'/server/model/Userinfo.php';
require_once BASE.'/server/model/base/DAO.php';

header("Content-type:application/json");

$ksIDNO = trim($_POST['ksIDNO']);
$ksPwd = trim($_POST['ksPwd']);

$userinfoDao = DAO::getDAO('UserinfoDAO');

// id no exist
if(!$userinfoDao->isExistedKsIDNO($ksIDNO)){
	$retCode = new RetCode(203, 0);
	echo $retCode->json();
	exit;
}

// password wrong
if($userinfoDao->isPasswordWrong($ksIDNO, $ksPwd)){
	$retCode = new RetCode(201, 0);
	echo $retCode->json();
	exit;
} 

$userinfos = $userinfoDao->getUserinfo($ksIDNO, $ksPwd);
$userinfo = $userinfos[0];

$user = array(
	'remains' => 1,
	'payed' => false,
	'ksCsrq' => getCsrq($userinfo),
	'bkjb' => $userinfo['wishjb'],
	'ksXing' => $userinfo['ksxing'],
	'bkkd' => 1,
	'ksImgSrc' => 'source/' . $userinfo['ksimgsrc'],//'http://dp.etest.net.cn/result/JLPT/5/70/MqpCXFbxHYZCXqMyPOJekPbkXjVZWlDY.jpg',
	'ksLoginFlag' => '2fNBvoeDvkXzdkbNqpgDyrYCiElHft0E',
	'ksMing' => $userinfo['ksming'],
	'ksPXing' => $userinfo['kspxing'],
	'ksIdType' => $userinfo['ksidtype'],
	'bkkdmc' => '',
	'ksXb' => $userinfo['ksxb'],
	'ksid' => $userinfo['id'],
	'ksPMing' => $userinfo['kspming']
);


//header("Content-type:application/json");

$tmp_user = array();
foreach($user as $key => $value){
	$tmp_user[$key] = urlencode($value);
}

echo urldecode(json_encode($tmp_user));
//echo '{"remains":1,"payed":false,"ksCsrq":"1983年04月13日","bkjb":0,"ksXing":"胡","bkkd":0,"ksImgSrc":"http://dp.etest.net.cn/result/JLPT/5/70/MqpCXFbxHYZCXqMyPOJekPbkXjVZWlDY.jpg","ksLoginFlag":"1wHT5wdEPY9BGEPtFkwrDnyuSjvmyZxt","ksMing":"佳佳","ksPXing":"HU","ksIdType":1,"bkkdmc":"","ksXb":"男","ksid":41243270,"ksPMing":"JIAJIA"}';



/**
 * 取得出出生日期
 * @param $userinfo
 * @return string
 */
function getCsrq($userinfo) {
	return $userinfo['year'] .'年'. $userinfo['month'] . '月'. $userinfo['day'] . '日';
}
?>