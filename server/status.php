<?php
require_once '../includes.php';
require_once BASE.'/server/model/Userinfo.php';
require_once BASE.'/server/model/base/DAO.php';


header("Content-type:application/json");	

$ksid = $_COOKIE['ksid'];

//echo '{"canBook":false,"remains":1,"ksTime":"2011年7月3日 下午1点","status":3,"bkkdmc":"大连大学","bkjb":2,"bkkd":23,"retVal":1,"zkz":"11A102040420342"}';
$userinfoDao = DAO::getDAO('UserinfoDAO');
$userinfos = $userinfoDao->getUserinfoByKsid($ksid);
$userinfo = $userinfos[0];

$bkkdmc = $userinfo['wishcity1'];
$bkjb = $userinfo['wishjb'];

$user = array(
	'canBook' => false,
	'remains' => 1,
	'ksTime' => "2011年12月3日 下午1点",
	'status' => 2,
	'bkkdmc' => $bkkdmc,
	'bkjb' => $bkjb,
	'bkkd' => 23,
	'retVal' => 1,
	'zkz' => ''
);


$tmp_user = array();
foreach($user as $key => $value){
	$tmp_user[$key] = urlencode($value);
}

echo urldecode(json_encode($tmp_user));

?>
