<?php
header("Content-type:application/json");	

//echo '{"canBook":false,"remains":1,"ksTime":"2011年7月3日 下午1点","status":3,"bkkdmc":"大连大学","bkjb":2,"bkkd":23,"retVal":1,"zkz":"11A102040420342"}';

$user = array(
	'canBook' => false,
	'remains' => 1,
	'ksTime' => "2011年7月3日 下午1点",
	'status' => 2,
	'bkkdmc' => "大连大学",
	'bkjb' => 2,
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
