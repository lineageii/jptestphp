<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>教育部考试中心---日本语能力测试网上报名系统</title>
<link href="include/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">var isHomePage=true;</script>
<script type="text/javascript" src="include/prototype.1.7.js"></script>
<script type="text/javascript" src="include/checkform.js"></script>
<script type="text/javascript" src="include/common.js"></script>
<script type="text/javascript" src="include/cookie.js"></script>
<script type="text/javascript" src="include/orm.js"></script>
<script type="text/javascript" src="include/errorCode.js"></script>
<script type="text/javascript" src="include/const.js"></script>
<script type="text/javascript" src="include/main-register-o.js"></script>
<script type="text/javascript" src="include/kd.js"></script>
</head>
<body onload="init();">
<style>

html,body {

	_height: 100%;

	_width: 100%;

}

#layer {

	width: 100%;

	height: 100%;

	top: 0px;

	left: 0px;

	position: fixed !important;

	_position: absolute;

	z-index: 100;

}

.layer1 {

	width: 100%;

	height: 100%;

	top: 0px;

	left: 0px;

	_top: expression(documentElement . scrollTop);

	position: fixed !important;

	_position: absolute;

	z-index: 10;

}



#layer2 {

	background-color: #777;



	position: relative;

	top: 25%;

	left: 32%;

	width: 500px;

	height: 178px;

	z-index: 12;

	position: absolute;

	filter: alpha(opacity =     80); -moz-opacity: 0.8; opacity: 0.8;

}



#layer3 {

	background-color: #fff;

	height: 164px;

	margin: 6px;

	border: 1px solid #444;

	padding: 20px auto;

}



div.title {

	font-size: 20px;

	color: #FFF;

	background-color: #355582;

	padding: 5px 20px;

	font-weight: bolder;

}



div.content {

	font-size: 14px;

	word-wrap: break-word;

	text-indent: 2em;

	margin-top: 6px;

}



div.plus {

	width: 100%;

	text-align: center;

}

.statusInfo{

	font-weight: bolder;

	margin-bottom: 5px;

}

</style>
<script type="text/javascript">

  window.onscroll=function(){

  };

</script>
<div id="layer">
  <div class="layer1" style="background-color: #deebf3;filter: alpha(opacity =     80); -moz-opacity: 0.8; opacity: 0.8;"></div>
  <div class="layer1">
    <div id="layer2">
      <div id="layer3">
        <div class="title" name="title">&nbsp;</div>
        <div class="content">
          <div class="statusInfo">状态信息:</div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span name="msg" style="color: #0000EE;">页面载入中</span>... <span name="tickSpan" style="color: #0000EE;">请稍候...</span></div>
        <br />
        <div class="plus" name="plus">
          <div

	style="background: url('images/loading.gif') no-repeat center; height: 30px; width: 100%;"

	name="loadingImgDiv"></div>
          <table name="btnTable" style="width: 70%; display: none;" align="center">
            <tr>
              <td><input name="retryBtn" type="button" value="重试" onmousemove="this.className='btnmouseover'"

			onmouseout="this.className='btn'" class="btn" style="width:80px" onclick="redo();" /></td>
              <td><input name="cancelBtn" type="button" value="取消" onmousemove="this.className='btnmouseover'"

			onmouseout="this.className='btn'" class="btn" style="width:80px" onclick="cancel();" /></td>
            </tr>
          </table>
          <div style="height:5px"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="maincontainer">
  <script type="text/javascript">

   function GetDomain() {

	if ((new RegExp("\.net\.cn")).test(window.location.href.toLowerCase())) {

		return "net.cn";

	}

	return "edu.cn";

   }

   

</script>
  <div class="topper"><span id="etesthomepage"><a

	href="javascript:gotoHomepage();">教育部考试中心海外考试报名信息网</a> &gt;&gt;</span><span

	id="dns"> <a href="http://jlpt.etest.edu.cn">教育网用户</a> | <a

	href="http://jlpt.etest.net.cn">公网用户</a> </span></div>
  <div class="header"><img src="images/banner.jpg" alt="NEEA"

	width="780px" /></div>
  <div class="navBar">
    <div class="wrapper">
      <ul id="nabBarContent">
        <li><a href="kdinfo.do?kdid=info" target="_blank">考点信息</a></li>
        <li><a href="faq.html" target="_blank">常见问题</a></li>
        <li><a href="ksxz.html" target="_blank">考生须知</a></li>
        <li><a href="bmbz.html" target="_blank">报名步骤</a></li>
        <li><a href="index.html" target="_self" >首页</a></li>
      </ul>
    </div>
  </div>
  <div id="agreementDiv" style="display: none;">
    <div id="mainContent">
      <div class="registerflow"> <span style="border: 1px solid #e28e49; padding: 5px 8px; margin: 0 8px; background-color: #e28e49; font-weight: bold; color: white;"> 1</span><span style="color: #e28e49; font-weight: bold; padding: 0 5px;text-decoration: underline;">同意报名协议</span> <img style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /><span style="border: 1px solid black; padding: 5px 8px; margin: 0 8px;">2</span><span style="padding: 0 5px;">注册个人信息</span> <img style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /><span style="border: 1px solid black; padding: 5px 8px; margin: 0 8px;">3</span><span style="padding: 0 5px;">注册确认</span> <img style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /> <span style="border: 1px solid black; padding: 5px 8px; margin: 0 8px; background-color: #FF9933"> 完成注册</span></div>
      <h1>报名协议</h1>
      <ol>
        <li>本报名网站系统的所有权及最终解释权归教育部考试中心所有；考生点击“同意”，即表示同意本协议项下的所有条款和本网站所示《报名须知》的全部内容。</li>
        <li>考生须仔细阅读《报名须知》，理解并同意其全部内容。 </li>
        <li>本网站未委托任何第三方提供报名服务，除本网站外任何宣称进行日本语能力测试（JLPT）报名的活动均与本网站无关。</li>
        <li>考生不得以他人身份或委托他人进行报名，否则，需承担由此导致其它考生无法报名或考试的全部责任。</li>
        <li>考生所填写的个人信息资料须真实准确。本网站在考生确认提交个人信息前提供审核更正的机会；一旦注册，任何组织、机构或个人无权更改、注销考生信息；考生确认提交个人信息后，即构成其对所提交内容真实性、准确性、合法性的确认和承诺，考生不得再要求修改证件类型、证件号码、中文姓名、拼音姓名、性别和出生日期。由于考生填写个人信息错误导致报名延误或影响正常参加考试，由考生本人承担全部责任。本网站及教育部考试中心不承担任何责任。</li>
        <li>本网站要求考生以证件号码和考生自定义密码作为登录的依据（密钥）。考生应妥善保管自己的证件和密码，否则，因他人盗用登录密钥造成后果的，本网站及教育部考试中心不承担任何责任。</li>
        <li>日本语能力测试要求考生报名成功后，凭有效身份证件和自行打印的、带有照片的准考证参加考试。考生所携证件类型和证件号码必须与考生网上报名时提交的证件类型和证件号码一致，否则，由此导致不能参加考试的责任由考生本人承担。</li>
        <li>考生理解并同意银行网上支付系统如发生异常情况及由此产生的后果，本网站不承担直接或间接责任。</li>
        <li>考生理解并同意，在报名过程中出现不可抗力所引起的无法正常报名的情况，本网站不承担任何直接或间接的责任。</li>
        <li>考生理解并同意，在报名成功后，由于本网站系统出现问题影响考生本人参加考试，考生提出赔偿的，本网站可能提供的补偿仅限于帮助安排重新报名或全额退还考费，不承担任何其它连带责任。</li>
        <li>考生在本网站报名成功意指考生完成了本网站所有报名步骤并交纳了考费；报名成功后，不得改变考试日期、级别或取消报名；考生因故不参加考试不予退费。</li>
        <li>本网站承诺报名时收集的考生个人信息仅用于日本语能力测试的实施和报告成绩等与考试有关的活动，不将信息透露给与考试无关的任何第三方。</li>
      </ol>
      <table width="95%" border="0" align="center">
        <tr align="center">
          <td width="50%"><input class="btn" type="button" onmousemove="this.className='btnmouseover'"

										onmouseout="this.className='btn'" onclick="agreeProtocol()" value="我 同 意" style="width: 80px"></td>
          <td><input class="btn" type="button" onmousemove="this.className='btnmouseover'"

										onmouseout="this.className='btn'" onclick="refuseProtocol()" value="我不同意" style="width: 80px"/></td>
        </tr>
      </table>
    </div>
  </div>
  <div id="registerDiv" style="display: none;">
    <div id="mainContent">
      <div class="registerflow"><span

	style="border: 1px solid black; padding: 5px 8px; margin: 0 8px;"> 1</span><span style="padding: 0 5px;">同意报名协议</span> <img

	style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /><span

	style="border: 1px solid #e28e49; padding: 5px 8px; margin: 0 8px; background-color: #e28e49; font-weight: bold; color: white;">2</span><span

	style="color: #e28e49; font-weight: bold; padding: 0 5px; text-decoration: underline;">注册个人信息</span> <img style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /><span

	style="border: 1px solid black; padding: 5px 8px; margin: 0 8px;">3</span><span

	style="padding: 0 5px;">注册确认</span> <img

	style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /> <span style="border: 1px solid black; padding: 5px 8px; margin: 0 8px; background-color: #FF9933">完成注册</span></div>
      <h1>用户注册</h1>
      <ul class="warnList">
        <li>注册信息将作为考试的重要依据，请核实无误后再填写</li>
        <li>姓名、姓名拼音、性别、证件号码、证件类型、出生日期提交注册后不能再修改</li>
        <li>您填写的证件号和自定义密码将用于登录系统进行后续的报名流程</li>
      </ul>
      <form id="registerForm">
        <h2>基本信息</h2>
        <hr

		style="clear: both; border: none; border-top: 1px dashed #CCC; margin-bottom: 2px"

		align="left" size="1px" />
        <table width="100%"  cellpadding="2" class="registeInfo">
          <tr>
            <td></td>
            <td><div class="tipSmall">必须输入汉字。名不要包括姓，例如姓名为王小刚则应该分别输入王和小刚。</div></td>
          </tr>
          <tr>
            <td width="120" align="right">中文姓名：</td>
            <td><table width="80%"  align="left">
                <tr>
                  <td width="10%" align="right">姓</td>
                  <td width="40%"><input name="ksXing" type="text" 

						size="18" maxlength="32" /></td>
                  <td width="10%" align="right">名</td>
                  <td  width="40%"><input name="ksMing" type="text"

						size="18" maxlength="32" /></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td ><input type="checkbox" id="onlyOne"  style="margin-left:50px">
              <label

				for="onlyOne" >我只有姓或名</label></td>
          </tr>
          <tr>
            <td></td>
            <td><div class="tipSmall">中国考生请按照《新华字典》的规范输入拼音，系统会自动转化为大写字母形式。使用护照报名的考生，请严格按照护照上的英文姓名填写。</div></td>
          </tr>
          <tr>
            <td  align="right">拼音：</td>
            <td><table width="80%" align="left">
                <tr>
                  <td width="10%" align="right">姓 </td>
                  <td width="40%"><input name="ksPXing" type="text" class="border"

						size="18" maxlength="32" /></td>
                  <td width="10%" align="right">名</td>
                  <td width="40%"><input name="ksPMing" type="text" class="border"

						size="18" maxlength="32" /></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td align="right">性别：</td>
            <td><table>
                <tr>
                  <td><input name="ksXB" id="ksxb1" type="radio" value="男" />
                    <label for="ksxb1">男</label>
                    <input name="ksXB" id="ksxb2"

						type="radio" value="女" />
                    <label for="ksxb2">女</label></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td></td>
            <td><div class="tipSmall">年份4位，如：1978；月份2位，如：05；日期2位，如：22。</div></td>
          </tr>
          <tr>
            <td align="right">生日：</td>
            <td><table>
                <tr>
                  <td><input name="year" type="text" class="border" size="7"

						maxlength="4" />
                    年
                    <input name="month" type="text"

						class="border" size="5" maxlength="2" />
                    月
                    <input name="day"

						type="text" class="border" size="5" maxlength="2" />
                    日
                    <input

						type="hidden" name="ksCsrq" /></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td></td>
            <td><div class="tipSmall">证件类型和证件号码必须相符,并与参加考试时所持有效证件一致,请准确填写!<br />
                <ul>
                  <li>来自中国大陆和香港、澳门地区的中国考生请使用有效的身份证或护照进行注册；</li>
                  <li>来自台湾地区的中国考生请使用台湾居民往来大陆通行证进行注册；</li>
                  <li>外国考生请使用有效的护照进行注册。</li>
                </ul>
              </div></td>
          </tr>
          <tr>
            <td align="right">证件类型：</td>
            <td><input type="radio" name="ksIDType" value="1"

				id="ksIDType1" alt="中华人民共和国居民身份证" />
              <label for="ksIDType1">中华人民共和国居民身份证</label>
              <br />
              <input type="radio" name="ksIDType" value="4" alt="台湾居民往来大陆通行证"

				id="ksIDType4" />
              <label for="ksIDType4"> 台湾居民往来大陆通行证 </label>
              <br />
              <input type="radio" name="ksIDType" value="5"

				alt="港澳居民身份证/往来内地通行证" id="ksIDType5" />
              <label for="ksIDType5">港澳居民身份证/往来内地通行证</label>
              <br />
              <input type="radio" name="ksIDType" value="2" alt="护照"

				id="ksIDType2" />
              <label for="ksIDType2">护照</label>
              <br />
              <input type="radio" name="ksIDType" value="3" alt="军人证件"

				id="ksIDType3" />
              <label for="ksIDType3"> 军人证件</label></td>
          </tr>
          <tr>
            <td></td>
            <td><div class="tipSmall">用来登录系统，且不能修改，请慎重填写。</div></td>
          </tr>
          <tr>
            <td align="right">证件号：</td>
            <td><table>
                <tr>
                  <td><input name="ksIDNO" type="text" 

						maxlength="32" class="longInput"/></td>
                </tr>
              </table></td>
          </tr>
        </table>
        <br />
        <h2>安全信息</h2>
        <hr

		style="clear: both; border: none; border-top: 1px dashed #CCC; margin-bottom: 2px"

		align="left" size="1px" />
        <table width="100%"  cellpadding="2" class="registeInfo">
          <tr>
            <td width="120"></td>
            <td><div class="tipSmall">请输入至少4位字符(例如英文字母或数字)，密码是区分大小写的。<br />
                此密码将用于您登录网站进行后续的报名流程，请妥善保管。</div></td>
          </tr>
          <tr>
            <td align="right">自定义登录密码：</td>
            <td><input name="ksPwd" type="password"

					maxlength="16" class="longInput"/></td>
          </tr>
          <tr>
            <td align="right">登录密码确认：</td>
            <td><input name="reformpwd" type="password" 

					maxlength="16" class="longInput"/></td>
          </tr>
          <tr>
            <td align="right">找回密码提示问题：</td>
            <td><select name="ksRemind" size="1" class="longInput">
                <option value="您的昵称是">您的昵称是？</option>
                <option value="您上的第一座学校的名字是什么">您上的第一座学校的名字是什么？</option>
                <option value="您孩提时的偶像是谁">您孩提时的偶像是谁？</option>
                <option value="您最怀念的时光是">您最怀念的时光是？</option>
                <option value="您是哪支球队的球迷">您是哪支球队的球迷？</option>
                <option value="您母亲的姓是什么">您母亲的姓是什么？</option>
                <option value="您上大学时的吉祥物是什么">您上大学时的吉祥物是什么？</option>
                <option value="您的第一辆车是什么牌子的">您的第一辆车是什么牌子的？</option>
                <option value="您和您配偶第一次见面是什么情况">您和您配偶第一次见面是什么情况？</option>
              </select></td>
          </tr>
          <tr>
            <td align="right">找回密码问题的回答：</td>
            <td><input name="ksRemindAnswer" type="text" 

					maxlength="120" class="longInput"/></td>
          </tr>
        </table>
        <br />
        <h2>联系信息</h2>
        <hr

		style="clear: both; border: none; border-top: 1px dashed #CCC; margin-bottom: 2px"

		align="left" size="1px" />
        <table width="100%"  cellpadding="2" class="registeInfo">
          <tr>
            <td width="120"></td>
            <td><div class="tipSmall">请在您的电话号码前加区号，如：010-65906903。</div></td>
          </tr>
          <tr>
            <td align="right">有效日间联系电话：</td>
            <td><input name="userqh" type="text" 

					maxlength="4" style="width:50px"/>
              -
              <input name="usertel" type="text"

					 maxlength="11" style="width:153px"/>
              <input type="hidden"

					name="ksTel" /></td>
          </tr>
          <tr>
            <td align="right">手机：</td>
            <td><input name="ksMobile" type="text" 

					 maxlength="11" class="longInput"/>
              &nbsp;&nbsp;请输入11位手机号</td>
          </tr>
          <tr>
            <td align="right">Email：</td>
            <td><input name="ksEmail" type="text" 

					 maxlength="128" class="longInput"/></td>
          </tr>
          <tr>
            <td align="right">QQ：</td>
            <td><input name="ksqq" type="text" 

					 maxlength="20" class="longInput"/></td>
          </tr>
        </table>
        <br />
        <h2>选择考试级别和志愿考点</h2>
        <hr

		style="clear: both; border: none; border-top: 1px dashed #CCC; margin-bottom: 2px"

		align="left" size="1px" />
        <table width="100%"  cellpadding="2" class="registeInfo">
          <tr>
            <td width="120" align="right">考试级别：</td>
            <td><select name="wishjb" style="width: 120px" id="wishjb">
                <option value="1">N1</option>
                <option value="2">N2</option>
                <option value="3">N3</option>
                <option value="4">N4</option>
                <option value="5">N5</option>
              </select>
              请选择您所希望报考的考试级别 </td>
          </tr>
          <tr>
            <td align="right">考点省份：</td>
            <td><select id="province" name="province" style="width: 120px" onchange="changelocation('registerForm',province.options[province.selectedIndex].value,wishjb.options[wishjb.selectedIndex].value)">
              </select>
              请您选择考点所在的省份</td>
          </tr>
          <tr>
            <td align="right">第一志愿考点：</td>
            <td><select id="selectCity1" name="selectCity1" style="width: 260px"></select>
              三个志愿考点都有名额的情况下，报考第一志愿考点</td>
          </tr>
          <tr>
            <td align="right">第二志愿考点：</td>
            <td><select id="selectCity2" name="selectCity2" style="width: 260px"></select>
              第一志愿考点无名额的情况下，报考第二志愿考点</td>
          </tr>
          <tr>
            <td align="right">第三志愿考点：</td>
            <td><select id="selectCity3" name="selectCity3" style="width: 260px"></select>
              第一，二志愿考点都无名额的情况下，报考第三志愿考点</td>
          </tr>
          <tr>
          	<td></td>
          	<td><div class="tipSmall">志愿考点紧张的情况下，可以调剂到省内其他考点<br /></div></td>
          </tr>
          <tr>
          	<td align="right">省内调剂：</td>
          	<td>
          		<select id="tiaoji" name="tiaoji" style="width:100px">
          			<option value="y">同意</option>
          			<option value="n">不同意</option>
          		</select>
          	</td>
          </tr>
          <tr>
            <td colspan="3"><input type="checkbox" id="guarantee" style="margin-left: 120px"/>
              <label for="guarantee">我保证以上信息是真实和准确的</label></td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" align="center"><input class="btn" type="button" onmousemove="this.className='btnmouseover'"  style="width: 120px"

					onmouseout="this.className='btn'" onclick="registerComplete('registerForm');" value="提  交"/></td>
          </tr>
        </table>
        <br />
        <!-- 
        <h2>验证信息</h2>
        <hr

		style="clear: both; border: none; border-top: 1px dashed #CCC; margin-bottom: 2px"

		align="left" size="1px" />
        <table width="100%"  cellpadding="2" class="registeInfo">
          <tr>
            <td align="right" width="120">验证码：</td>
            <td><table>
                <tr>
                  <td><input name="chkImgCode" type="text" size="4" maxlength="4" /></td>
                  <td><img id='chkImg' name='chkImg' border='1' alt="验证码" width="80" height="25" />
                    <input type="hidden" name="chkImgFlag" /></td>
                  <td>请填写左图中4位大写英文字母</td>
                  <td style="padding-left:15px"><span name="changeMsg">
                    <label class="link" onclick="getChkimgAjax('registerDiv');" onmouseover="this.className='hover'" 

									onmouseout="this.className='link'">看不清楚,换一张</label>
                    </span></td>
                </tr>
              </table></td>
            <td>&nbsp;</td>
          </tr>
          
        </table>
        -->
      </form>
    </div>
  </div>
  <div id="confirmDiv" style="display: none;">
    <div id="mainContent">
      <div class="registerflow"><span

	style="border: 1px solid black; padding: 5px 8px; margin: 0 8px;"> 1</span><span style="padding: 0 5px;">同意报名协议</span> <img

	style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /><span

	style="border: 1px solid black; padding: 5px 8px; margin: 0 8px;">2</span><span

	style="padding: 0 5px;">注册个人信息</span> <img

	style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /><span

	style="border: 1px solid #e28e49; padding: 5px 8px; margin: 0 8px; background-color: #e28e49; font-weight: bold; color: white;">3</span><span

	style="color: #e28e49; font-weight: bold; padding: 0 5px; text-decoration: underline;">注册确认</span> <img style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /> <span

	style="border: 1px solid black; padding: 5px 8px; margin: 0 8px; background-color: #FF9933">完成注册</span></div>
      <h1>注册确认</h1>
      <ul class="warnList">
        <li>请注意您在此输入的个人信息将会显示在JLPT报名表和准考证上。</li>
        <li>确保这些信息的完整、真实和准确是您的责任。</li>
        <li>请特别注意您的身份证件，如果您的证件在考试前将过期，请申请新的身份证件后再进行注册。</li>
        <li>个人基本信息提交后不可修改。个人基本信息请与您考试时所携带有效证件一致。</li>
      </ul>
      <hr

		style="clear: both; border: none; border-top: 1px dashed #CCC; margin-bottom: 2px"

		align="left" size="1px" />
      <h2>个人基本信息</h2>
      <table width="85%" border="0" cellpadding="0" cellspacing="0"

	align="center" class="registeInfo">
        <tr>
          <td align="right" width="130">中文姓名：</td>
          <td><table>
              <tr>
                <td><span class="redAndBold" id="ksXingSpan"></span>&nbsp;&nbsp;<span class="redAndBold" id="ksMingSpan"></span></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="right">拼音姓名：</td>
          <td><table>
              <tr>
                <td><span class="redAndBold" id="ksPXingSpan"></span>&nbsp;&nbsp;<span class="redAndBold" id="ksPMingSpan"></span></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="right">性别：</td>
          <td><table>
              <tr>
                <td><span class="redAndBold" id="ksXBSpan"></span></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="right">生日：</td>
          <td><table>
              <tr>
                <td><span class="redAndBold" id="ksCsrqSpan"></span></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="right">证件类型：</td>
          <td><table>
              <tr>
                <td><span class="redAndBold" id="ksIDTypeSpan" /></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="right">证件号：</td>
          <td><table>
              <tr>
                <td align="left"><span class="redAndBold" id="ksIDNOSpan" /></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <br/>
      <table align="center">
        <tr>
          <td width="49%" align="center"><input class="btn" type="button" onclick="modifyreg()" 

											onmousemove="this.className='btnmouseover'"  style="width: 220px"

											onmouseout="this.className='btn'"value="个人信息有错误，我要修改"/></td>
          <td width="2%">&nbsp;</td>
          <td width="49%" align="center"><input class="btn" type="button" onclick="confirmreg()" 

											onmousemove="this.className='btnmouseover'"  style="width: 220px"

											onmouseout="this.className='btn'"value="我确认个人信息正确无误"/></td>
        </tr>
      </table>
    </div>
  </div>
  <div class="footer">
    <div><a href="javascript:gotoHomepage();" target="_self">JPTEST首页</a> | <a href="contact.html" target="_blank">联系我们</a></div>
    <div id="copyright">Copyright &copy; 2011
      
      by JPTEST. All Rights Reserved. 日语考试网 版权所有</div>
  </div>
  <div id="debugdiv"></div>
</div>
</body>
</html>
