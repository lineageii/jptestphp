<?php 
date_default_timezone_set(PRC);
$path = 'upload/';
// max size
$max_size = 1024*1024*100;

if(empty($_FILES) === false) {
	$file_name = $_FILES['file']['name'];
	$tmp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	if($file_size > $max_size) {
		echo 'image max size is 100k';
	}
	
	$file_ext = strtolower(trim(array_pop(explode(".", $file_name))));
	
	$new_file_name = date("YmdHis") . '_' . rand(10000,99999) .  '.' . $file_ext;
	
	$new_path = $path . $new_file_name;
	if(move_uploaded_file($tmp_name, $new_path) === false){
		echo 'upload image fail';
	}
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>剪裁照片文件 - 教育部考试中心网上报名照片上传系统</title>
<link rel="stylesheet" href="css/content.css" type="text/css"/>
<style type="text/css">
#rRightDown, #rLeftDown, #rLeftUp, #rRightUp, #rRight, #rLeft, #rUp, #rDown {
	position:absolute;
	background:#F00;
	width:5px;
	height:5px;
	z-index:500;
	font-size:0;
}
#dragDiv {
	border:1px solid #000000;
}
</style>
<script type="text/javascript" src="js/cookie.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		var regS = new RegExp("\\+","gi");
		document.getElementById("userXM").innerHTML=cookie.getCookie("ksCnName","").replace(regS," ");
		document.getElementById("userPXM").innerHTML=cookie.getCookie("ksEnName","").replace(regS," ");
		document.getElementById("userIDNo").innerHTML=cookie.getCookie("ksid","").replace(regS," ");
	});
	var jsonFaceStr = {face:1,x:20,y:25,width:249,height:332};
	var cropX=0;
	var cropY=0;
	var cropWidth=0;
	var cropHeight=0;
	var sourcePicShowUrl = "<?php echo $new_path ?>?t="+ new Date().getTime();
	var maxWidth = 367;
	var maxHeight = 550;
	var finalWidth = 150;
	var finalHeight = 200;
	
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
	src="images/arrow-1.gif" alt="" /> <span style="color: #e28e49; font-weight: bold; padding: 0 5px;text-decoration:underline"> <img style="vertical-align: middle; padding-right: 5px;"
	src="images/index_2.gif" />剪裁照片</span> <img
	style="vertical-align: middle;" src="images/arrow-1.gif" alt="" /> <span
	style="padding: 0 5px;"><img
	style="vertical-align: middle; padding-right: 5px;"
	src="images/index_3_grey.gif" />确认上传</span></div>
      <div class="warn" style="padding-left: 15px;"> <img src="images/info.gif"
		width="16" height="16" alt="提示" /> 请按照以下说明剪裁个人电子照片：
        <ul>
          <li>左侧为实际上传电子照片，请调整左侧剪裁框的位置和大小，选择合适的头像部分；</li>
          <li>右侧为预览框，显示剪裁后的效果预览；</li>
          <li>系统具有人脸识别功能，但只会用来记录。系统只会如实的存储您上传的电子照片，如果由于电子照片的问题而影响到您报考相应的考试，本网站不负任何责任。</li>
        </ul>
      </div>
      <div
	style="padding-top: 5px; font-size: 12px; margin: 2px; border: 1px solid #CCC">
        <table width="100%" border="0" cellpadding="6" cellspacing="1">
          <tr>
            <td width="60%" valign="top" nowrap="nowrap" align="center"><div id="bgDiv" style="width:367px; height:550px;">
                <div id="dragDiv">
                  <div id="rRightDown" style="right:0; bottom:0;"> </div>
                  <div id="rLeftDown" style="left:0; bottom:0;"> </div>
                  <div id="rRightUp" style="right:0; top:0;"> </div>
                  <div id="rLeftUp" style="left:0; top:0;"> </div>
                  <div id="rRight" style="right:0; top:50%;"> </div>
                  <div id="rLeft" style="left:0; top:50%;"> </div>
                  <div id="rUp" style="top:0; left:50%;"> </div>
                  <div id="rDown" style="bottom:0;left:50%;"></div>
                </div>
              </div></td>
            <td valign="middle" nowrap="nowrap" align="center"><span class="imgTitle">照片预览</span>
              <div id="viewDiv" style='width:150px; height:200px;border:2px solid #6666FF;'> </div></td>
          </tr>
          <tr><td colspan="2" height="1" align="center"><span id="detecRes">&nbsp;</span></td></tr>
          <tr>
            <td align="center" colspan="2"><form action="cropImage.php" method="post">
                <input type="hidden" name="cropX"/>
                <input type="hidden" name="cropY"/>
                <input type="hidden" name="cropWidth"/>
                <input type="hidden" name="cropHeight"/>
                <input type="hidden" name="imgFilename" value="<?php echo $new_file_name ?>"/>
                <input type="button" value="&nbsp;确&nbsp;认&nbsp;剪&nbsp;裁&nbsp;" name="btnupload" id="btnupload"  style="width:120px" onclick="doCrop(this.form);" class="btn3_mouseout" onmouseover="this.className='btn3_mouseover'" onmouseout="this.className='btn3_mouseout'" onmousedown="this.className='btn3_mousedown'" onmouseup="this.className='btn3_mouseup'"/>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="&nbsp;重&nbsp;新&nbsp;上&nbsp;传&nbsp;" onclick="window.location.href='upload.do'"  style="width:120px" class="btn3_mouseout" onmouseover="this.className='btn3_mouseover'" onmouseout="this.className='btn3_mouseout'" onmousedown="this.className='btn3_mousedown'" onmouseup="this.className='btn3_mouseup'"/>
              </form></td>
          </tr>
        </table>
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

<script type="text/javascript" src="js/imgcutting.js"></script>
</body>
</html>

