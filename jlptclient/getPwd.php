<?php
require_once '../includes.php';
require_once '../server/model/Userinfo.php';
require_once '../server/model/base/DAO.php';
$ksidno = $_REQUEST['ksidno'];
$userinfoDao = DAO::getDAO('UserinfoDAO');

if(!isset($ksidno)){
	echo '缺少用户ID参数';
	exit;
}
// id no exist
if(!$userinfoDao->isExistedKsIDNO($ksidno)){
	echo '用户不存在';
	exit;
}

$userinfos = $userinfoDao->getUserinfoByKsidno($ksidno);
$userinfo = $userinfos[0];

$paymoney = $userinfo['paymoney'];
if($paymoney != '' && $paymoney != NULL){
	echo '用户ID:' . $userinfo['ksidno'] . '<br>' . '密码:' . $userinfo['pwd'];
} else {
	
	echo '用户ID:' . $userinfo['ksidno'] . '未付款。<br>';
	echo '<a href="pay.php">点击付款</a>';
}



?>