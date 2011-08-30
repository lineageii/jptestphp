<?php
require_once '../../../includes.php';
require_once('yeepaycommon.php');
require_once '../../../server/model/Userinfo.php';
require_once '../../../server/model/base/DAO.php';
	
$p1_MerId = $yeepay_i['mid'];
$merchantKey = $yeepay_i['sec'];

$return = getCallBackValue($r0_Cmd,$r1_Code,$r2_TrxId,$r3_Amt,$r4_Cur,$r5_Pid,$r6_Order,$r7_Uid,$r8_MP,$r9_BType,$hmac);

$bRet = CheckHmac($r0_Cmd,$p1_MerId,$r1_Code,$r2_TrxId,$r3_Amt,$r4_Cur,$r5_Pid,$r6_Order,$r7_Uid,$r8_MP,$r9_BType,$hmac,$merchantKey);
$userinfoDao = DAO::getDAO('UserinfoDAO');
$userinfoDao->paySuccess('1', '100');
header("Location:../../getPwd.php");
/*
if($bRet){
	if($r1_Code=="1"){
		//list($_, $order_id, $city_id, $_) = explode('-', $r6_Order, 4);

		if($r9_BType=="1"){
			$currency = 'CNY';
			$service = 'yeepay';
			$bank ='易宝';
			
			$userinfoDao->paySuccess($r6_Order, $r3_Amt);
			//ZOrder::OnlineIt($order_id, $r6_Order, $r3_Amt, $currency, $service, $bank);
			header("Location:" . BASE . "/index.php");

		}
		else if ($r9_BType=="2") {

			//如果需要应答机制则必须回写流,以success开头,大小写不敏感.

			$currency = 'CNY';
			$service = 'yeepay';
			$bank = '易宝';

			//ZOrder::OnlineIt($order_id, $r6_Order, $r3_Amt, $currency, $service, $bank);
			//redirect(WEB_ROOT . "/order/pay.php?id={$order_id}");
			ob_end_clean();
			die('SUCCESS');
		}
	}

}

die('ILLEGAL ORDER INFOMATION');
*/