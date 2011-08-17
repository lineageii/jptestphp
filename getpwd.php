<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>教育部考试中心---日本语能力测试网上报名系统</title>
<link href="include/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="include/prototype.js"></script>
<script type="text/javascript" src="include/common.js"></script>
<script type="text/javascript" src="include/orm.js"></script>
<script type="text/javascript" src="include/main-original.js"></script>
<script type="text/javascript" src="include/cookie.js"></script>
<script type="text/javascript" src="include/errorCode.js"></script>
<script type="text/javascript" src="include/findpwd.js"></script>
<style>
#mainDiv {
	height:400px;
}
</style>
</head>
<body>
<div class="container">
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
        <li><a href="kdinfo.php?kdid=info" target="_blank">考点信息</a></li>
        <li><a href="faq.html" target="_blank">常见问题</a></li>
        <li><a href="ksxz.html" target="_blank">考生须知</a></li>
        <li><a href="bmbz.html" target="_blank">报名步骤</a></li>
        <li><a href="index.php" target="_self" >首页</a></li>
      </ul>
    </div>
  </div>
  <div id="mainDiv">
    <h1>找回密码</h1>
    <table width="750" border="0" align="center" cellpadding="10" cellspacing="0" class="registeInfo">
      <tr>
        <td><table width="95%" cellpadding="5" align="center" border="0">
            <tr>
              <td width="150" align="right">证件号：</td>
              <td ><input type="text" name="idno" id="idno" 

					value="" maxlength="32" onblur="checkUser();" class="longInput"/></td>
            </tr>
            <tr>
              <td align="right">密码提示问题：</td>
              <td ><span id="pwdQues"></span></td>
            </tr>
            <tr>
              <td align="right">密码提示问题答案：</td>
              <td ><input type="text" name="pwdAnswer" value=""

					maxlength="120" id="pwdAnswer" class="longInput"/></td>
            </tr>
            <tr>
              <td align="right">验证码：</td>
              <td><input name="chkImgCode" type="text" size="4"

							maxlength="4" value="" />
                <img name='chkImg' border='1' alt='验证码' width="80" height="25"/>
                <input type="hidden" name="chkImgFlag" />
                请填写左图中4位大写英文字母 <span name="changeMsg">
                <label class="link"

						onclick="getChkimgAjax('mainDiv');" onmouseover="this.className='hover'" onmouseout="this.className=('link')">看不清楚,换一张</label>
                </span></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input class="btn" id="okbtn" type="button" onclick="findPwd()" value="确  定" onmousemove="this.className='btnmouseover'" onmouseout="this.className='btn'" style="width: 80px" /></td>
            </tr>
          </table></td>
      </tr>
    </table>
    <table width="650" border="0" align="center" cellpadding="10" cellspacing="0">
      <tr>
        <td style="line-height: 150%"> 如果您仍然无法获取密码，请填写<a href="tables/jlpt-password-application.doc">该表格</a>并E-MAIL或传真至呼叫中心；<br/>
          再与我方电话联系确认收到后，我们会为您返回密码到您的电子邮箱。 </td>
      </tr>
    </table>
  </div>
  <div class="footer">
    <div><a href="javascript:gotoHomepage();" target="_self">ETEST首页</a> | <a href="contact.html" target="_blank">联系我们</a></div>
    <div id="copyright">Copyright &copy; 2011
      
      by NEEA. All Rights Reserved. 教育部考试中心 版权所有</div>
  </div>
</div>
</body>
</html>
