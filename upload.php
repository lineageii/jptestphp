<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>选择照片文件 - 教育部考试中心网上报名照片上传系统</title>
<link rel="stylesheet" href="css/content.css" type="text/css"/>
<script type="text/javascript" src="js/cookie.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		var regS = new RegExp("\\+","gi");
		$("#userXM").text(cookie.getCookie("ksCnName","").replace(regS," "));
		$("#userPXM").text(cookie.getCookie("ksEnName","").replace(regS," "));
		$("#userIDNo").text(cookie.getCookie("ksid","").replace(regS," "));
	});
</script>
</head>
<body>
<div class="container">
  <div class="topper"><span id="etesthomepage"><a
	href="javascript:gotoHomepage();">教育部考试中心海外考试报名信息网</a> &gt;&gt;</span></div>
  <div class="header"><img src="images/banner.jpg" alt="NEEA"
	width="780px" /></div>
  <div class="maincontent">
    <div class="informationContent">
      <div id="ksInfoDiv" style="margin: 0 auto;">
        <table cellpadding="2" style="float: right;">
          <tr>
            <td class="tdname" align="right">姓名: </td>
            <td style="white-space: nowrap"><label id="userXM"></label></td>
          </tr>
          <tr>
            <td class="tdname" align="right">姓名(拼音/英文): </td>
            <td style="white-space: nowrap"><label id="userPXM"></label></td>
          </tr>
          <tr>
            <td class="tdname" align="right">证件号: </td>
            <td><label id="userIDNo"></label></td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;"></div>
    <div class="informationContent">
      <div class="sectiontitle">上传电子照片</div>
      <div class="registerflow"><span
	style="color: #e28e49; font-weight: bold; padding: 0 5px;text-decoration:underline"><img
	style="vertical-align: middle; padding-right: 5px;"
	src="images/index_1.gif" />选择照片</span> <img style="vertical-align: middle;"
	src="images/arrow-1.gif" alt="" /> <span style="padding: 0 5px;"> <img style="vertical-align: middle; padding-right: 5px;"
	src="images/index_2_grey.gif" />剪裁照片</span> <img
	style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /> <span
	style="padding: 0 5px;"><img
	style="vertical-align: middle; padding-right: 5px;"
	src="images/index_3_grey.gif" />确认上传</span></div>
      <div
	style="padding-top: 5px; font-size: 12px; margin: 2px; border: 1px solid #CCC">
        <form  method="post" action="upload1.php" enctype="multipart/form-data" onsubmit="return checkImg()">
          <p>
             <b><font color="red"></font></b> 
          </p>
          <table width="100%" border="0" cellpadding="6" cellspacing="1">
            <tr>
              <td width="40%"  height="40" nowrap="nowrap" align="right">照片地址:</td>
              <td nowrap="nowrap">
                <input type="file" name="file" id="imgFile" size="20"/></td>
            </tr>
            <tr>
              <td colspan="2" align="center" nowrap="nowrap"><input type="submit" id="uploadBtn" value="&nbsp;开&nbsp;始&nbsp;上&nbsp;传&nbsp;" style="width:120px" class="btn3_mouseout" onmouseover="this.className='btn3_mouseover'" onmouseout="this.className='btn3_mouseout'" onmousedown="this.className='btn3_mousedown'" onmouseup="this.className='btn3_mouseup'"/></td>
            </tr>
          </table>
        </form>
      </div>
      <div style="padding: 10px; color: #C30; margin-bottom: 10px;"><img
	src="images/info.gif" width="16" height="16" alt="提示" /><span
	style="font-size: 14px; font-weight: bold; margin-bottom: 10px;">上传的照片要求:</span>
        <ul>
          <li>本人在六个月内的标准护照照照片的电子格式文件</li>
          <li>正面免冠，包括整体头部，确认本人的脸部清晰</li>
          <li>照片规格为宽3CM*高4CM</li>
          <li>白色或浅色背景</li>
          <li>黑白或彩色照片均可</li>
          <li>文件大小100KB以下</li>
          <li>格式为JPEG/JPG</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="footer" id="footer">
  <hr
		style="clear: both; border: none; border-top: 1px solid #CCC; margin-bottom: 2px" align="left"
		size="1px" />
<div><a href="javascript:gotoHomepage();" target="_self">ETEST首页</a>
| <a href="ContactUs.html" target="_blank">联系我们</a></div>
  <div id="copyright">Copyright &copy; 2011
    by NEEA. All Rights Reserved. 教育部考试中心 版权所有</div>
</div>

</body>
</html>
