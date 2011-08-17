<?php 
$cropX = $_POST['cropX'];
$cropY = $_POST['cropY'];
$cropWidth = $_POST['cropWidth'];
$cropHeight = $_POST['cropHeight'];
$imgFilename = $_POST['imgFilename'];


$source = imagecreatefromjpeg('upload/' .  $imgFilename);
$target = imageCreatetruecolor($cropWidth, $cropHeight);



imagecopyresampled($target, $source, 0, 0, $cropX, $cropY, $cropWidth, $cropHeight, $cropWidth, $cropHeight);
imagejpeg($target, 'source/' . $imgFilename, 100);

imagedestroy($source);
imagedestroy($target);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>确认上传照片 - 教育部考试中心网上报名照片上传系统</title>
<link rel="stylesheet" href="css/content.css" type="text/css"/>
<script type="text/javascript" src="js/cookie.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
	$(function(){
		var finalPicShowUrl = "<?php echo 'source/' . $imgFilename?>";
		$("#finalShow").attr("src",finalPicShowUrl + "?t=" + new Date().getTime());
		var regS = new RegExp("\\+","gi");
		$("#userXM").text(cookie.getCookie("ksCnName","").replace(regS," "));
		$("#userPXM").text(cookie.getCookie("ksEnName","").replace(regS," "));
		$("#userIDNo").text(cookie.getCookie("ksid","").replace(regS," "));
	});
	function doSubmit(form){
		form.submit();
	}
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
	style="padding: 0 5px;"><img
	style="vertical-align: middle; padding-right: 5px;"
	src="images/index_1_grey.gif" />选择照片</span> <img style="vertical-align: middle;"
	src="images/arrow-1.gif" alt="" /> <span style="padding: 0 5px;"> <img style="vertical-align: middle; padding-right: 5px;"
	src="images/index_2_grey.gif" />剪裁照片</span> <img
	style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /> <span
	style="color: #e28e49; font-weight: bold; padding: 0 5px;text-decoration:underline"><img
	style="vertical-align: middle; padding-right: 5px;"
	src="images/index_3.gif" />确认上传</span></div>

      <div class="warn" style="padding-left: 15px;"> <img src="images/info.gif"
		width="16" height="16" alt="提示" />提示：
        <ul>
          <li>点击确定上传按钮，将保存您上传的个人照片并返回报名系统主页面；</li>
          <li>点击重新上传按钮，将返回照片上传页面重新选择照片文件上传。</li>
        </ul>
      </div>
      <div
	style="padding-top: 5px; font-size: 12px; margin: 2px; border: 1px solid #CCC">
        <form  method="post" action="server/uploadPhotoSuccess.php" >
        	<input type="hidden" name="imageFileName" value="<?php echo $imgFilename?>" />
			<
          <table width="100%" border="0" cellpadding="6" cellspacing="1">
            <tr>
              <td nowrap="nowrap" align="center"><img id="finalShow" style="border:2px solid #6666FF;"/></td>
            </tr>
            <tr>
              <td align="center" nowrap="nowrap"><input type="button" value="&nbsp;确&nbsp;定&nbsp;上&nbsp;传&nbsp;" onclick="doSubmit(this.form);" style="width:120px" class="btn3_mouseout" onMouseOver="this.className='btn3_mouseover'" onMouseOut="this.className='btn3_mouseout'" onMouseDown="this.className='btn3_mousedown'" onMouseUp="this.className='btn3_mouseup'"/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="&nbsp;&nbsp;返&nbsp;&nbsp;回&nbsp;" style="width:120px" onclick="window.location.href='upload.do'" class="btn3_mouseout" onMouseOver="this.className='btn3_mouseover'" onMouseOut="this.className='btn3_mouseout'" onMouseDown="this.className='btn3_mousedown'" onMouseUp="this.className='btn3_mouseup'"/></td>
            </tr>

          </table>
        </form>
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
