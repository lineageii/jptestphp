<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>教育部考试中心---日本语能力测试网上报名系统</title>
<link href="../include/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="paytype">
	<form action="pay/pay.php" method="post" class="validator">
		<div class="order-check-form ">

			<div class="order-pay-credit">
				<p>支付金额<strong>100元</strong><br/><br/>请选择支付方式：</p>

			</div>

			<div id="paybank">
				<p>
					<input id="check-cmb" type="radio" name="paytype"
						value="CMBCHINA-NET" /><label for="check-cmb" class="cmb"></label>
				</p>
				<p>
					<input id="check-icbc" type="radio" name="paytype" value="ICBC-NET" /><label
						for="check-icbc" class="icbc"></label>
				</p>

				<p>
					<input id="check-ccb" type="radio" name="paytype" value="CCB-NET" /><label
						for="check-ccb" class="ccb"></label>
				</p>
				<p>
					<input id="check-abc" type="radio" name="paytype" value="ABC-NET" /><label
						for="check-abc" class="abc"></label>
				</p>
				<p>
					<input id="check-comm" type="radio" name="paytype" value="BOCO-NET" /><label
						for="check-comm" class="comm"></label>
				</p>
				<p>
					<input id="check-spdb" type="radio" name="paytype" value="SPDB-NET" /><label
						for="check-spdb" class="spdb"></label>
				</p>
				<p>
					<input id="check-citic" type="radio" name="paytype"
						value="ECITIC-NET" /><label for="check-citic" class="citic"></label>
				</p>
				<p>
					<input id="check-cib" type="radio" name="paytype" value="CIB-NET" /><label
						for="check-cib" class="cib"></label>
				</p>
				<p>
					<input id="check-gdb" type="radio" name="paytype" value="GDB-NET" /><label
						for="check-gdb" class="gdb"></label>
				</p>
				<p>
					<input id="check-sdb" type="radio" name="paytype" value="SDB-NET" /><label
						for="check-sdb" class="sdb"></label>
				</p>
				<p>
					<input id="check-cmbc" type="radio" name="paytype" value="CMBC-NET" /><label
						for="check-cmbc" class="cmbc"></label>
				</p>

				<p>
					<input id="check-bofc" type="radio" name="paytype" value="BOC-NET" /><label
						for="check-bofc" class="bofc"></label>
				</p>
				<p>
					<input id="check-cebb" type="radio" name="paytype" value="CEB-NET" /><label
						for="check-cebb" class="cebb"></label>
				</p>
				<p>
					<input id="check-pingan" type="radio" name="paytype"
						value="PAB-NET" /><label for="check-pingan" class="pingan"></label>
				</p>
				<p>
					<input id="check-bob" type="radio" name="paytype" value="BCCB-NET" /><label
						for="check-bob" class="bob"></label>
				</p>
			</div>


			<div class="clear"></div>
			<p class="check-act">
				<input type="hidden" name="order_id" value="221s" />
				<input type="hidden" name="quantity" value="1" /> 
				<input type="hidden" name="money" value="100"/>
				<input type="submit" value="确认订单，付款" class="formbutton" />

			</p>
		</div>
	</form>
</div>
</body>
</html>