<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>教育部考试中心---日本语能力测试网上报名系统</title>
<link href="include/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">

function doquery() {

	if (document.form1.zkz.value.length!=15) {		

		alert("准考证号输入错误");

		return;

	}	

	document.form1.submit();

}

</script>
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
        <li><a href="kdinfo.do?kdid=info" target="_blank">考点信息</a></li>
        <li><a href="faq.html" target="_blank">常见问题</a></li>
        <li><a href="ksxz.html" target="_blank">考生须知</a></li>
        <li><a href="bmbz.html" target="_blank">报名步骤</a></li>
        <li><a href="index.html" target="_self" >首页</a></li>
      </ul>
    </div>
  </div>
  <form name="form1" method="post" action="scoreQuery.do">
    <table width="65%" align="center">
      <tr >
        <td colspan="2" height="60" align="center"><h1>日本语能力测试成绩查询</h1></td>
      </tr>
      <tr >
        <td width="120" height="40" align="right" nowrap>准考证号：</td>
        <td align="left"><input type="text" name="zkz" class="longInput"/>
          <span style="padding-left: 15px; font-size:12px;"><a href="queryZKZ.jsp" target="_blank">忘记准考证号?</a></span></td>
      </tr>
      <tr >
        <td height="40" align="right" nowrap>注册证件号：</td>
        <td align="left"><input type="text" name="idno" class="longInput"/></td>
      </tr>
      <tr>
        <td align="center" colspan="2" height="80" valign="middle"><input class="btn" type="button" name="query" value="查询" onclick="doquery()" 

             onmouseout="this.className='btn'" onmousemove="this.className='btnmouseover'"  style="width: 120px"/></td>
      </tr>
    </table>
  </form>
  <br />
  <div class="footer">
    <div><a href="javascript:gotoHomepage();" target="_self">ETEST首页</a> | <a href="contact.html" target="_blank">联系我们</a></div>
    <div id="copyright">Copyright &copy; 2011
      
      by NEEA. All Rights Reserved. 教育部考试中心 版权所有</div>
  </div>
</div>
</body>
</html>
