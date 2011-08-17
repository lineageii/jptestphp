<?php

require_once '../includes.php';
require_once BASE.'/server/model/Userinfo.php';
require_once BASE.'/server/model/base/DAO.php';

$ksid = $_COOKIE['ksid'];

header("Content-type:application/json");

$userinfoDao = DAO::getDAO('UserinfoDAO');

$userinfos = $userinfoDao->getUserinfoByKsid($ksid);
$userinfo = $userinfos[0];


if(isset($userinfo['ksimgsrc'])) {
	$json = array(
	'hasPhoto' => 1,
	'photoSrc' => 'source/'. $userinfo['ksimgsrc']
	);
} else {
	$json = array(
		'formAction' => 'server/beginUpload.php',
		'ksCnName' => $userinfo['ksxing'] . $userinfo['ksming'],
		'hasPhoto' => 0,
		'backUrl' => 'uploadPhotoSuccess.php',
		'ksid' => $userinfo['id'],
		'ksEnName' => $userinfo['kspxing'] . $userinfo['kspming']
	);
}



$tmp_json = array();
foreach($json as $key => $value){
	$tmp_json[$key] = urlencode($value);
}

echo urldecode(json_encode($tmp_json));
?>