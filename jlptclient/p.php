<?php
header('Content-type: application/json');
$CLIENT_KEY = "123";
$SERVER_KEY = "456";
$VERSION = "0.1";
$SUCCESS = "success";
$publicKey = $_POST['publicKey'];
$clientEncrypt = $_POST['clientEncrypt'];
$method = $_POST['method'];

if( md5($publicKey . "version" . $CLIENT_KEY) === $method){
	encryptServer($VERSION,$publicKey,$clientEncrypt);
} else if (md5($publicKey . "start" . $CLIENT_KEY) === $method){
	encryptServer($SUCCESS,$publicKey,$clientEncrypt);	
} else if (md5($publicKey . "baomin" . $CLIENT_KEY) === $method){
	encryptServer($SUCCESS,$publicKey,$clientEncrypt);	
}

function encryptServer($param,$publicKey,$clientEncrypt){
	global $CLIENT_KEY,$SERVER_KEY,$VERSION,$SUCCESS;
	if($clientEncrypt === md5($publicKey . $CLIENT_KEY)){
		$serverEncrypt = md5($publicKey . $SERVER_KEY);
		$retcode = md5($param . $publicKey . $SERVER_KEY);
		$arr = array
	       (
	          'serverEncrypt'=>$serverEncrypt,
	          'retcode'=>$retcode
	       );
		echo json_encode($arr);
	}
}

?>