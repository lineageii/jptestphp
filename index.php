<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>教育部考试中心---日本语能力测试网上报名系统</title>
<link href="include/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

	var isHomePage = true;

</script>
<script type="text/javascript" src="include/prototype.1.7.js"></script>
<script type="text/javascript" src="include/checkform.js"></script>
<script type="text/javascript" src="include/common.js"></script>
<script type="text/javascript" src="include/cookie.js"></script>
<script type="text/javascript" src="include/orm.js"></script>
<script type="text/javascript" src="include/errorCode.js"></script>
<script type="text/javascript" src="include/const.js"></script>
<script type="text/javascript" src="include/main-original.js"></script>
</head>
<body onload="indexInit();">
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
        <li><a href="kdinfo.html" target="_blank">考点信息</a></li>
        <li><a href="faq.html" target="_blank">常见问题</a></li>
        <li><a href="ksxz.html" target="_blank">考生须知</a></li>
        <li><a href="bmbz.html" target="_blank">报名步骤</a></li>
        <li><a href="index.html" target="_self" >首页</a></li>
      </ul>
    </div>
  </div>
  <style>

ul li {

	margin: 5px 0px 0px;

}



#loginTable td {

	border-collapse: collapse;

	font-size: 13px;

}

</style>
  <div id="loginDiv">
    <div class="indexleft">
      <div id="registerbox">
        <h1>注册 新用户</h1>
        <div class="leftcontent">请您务必详细阅读 <a target="_blank"

	href="bmbz.html">报名步骤</a> 和 <a target="_blank"

	href="ksxz.html">考生须知</a>。
          <ul>
            <li>历届注册信息不保留，往届考生请重新注册个人信息；</li>
            <li>如果您首次报考日本语能力测试，请注册个人信息。</li>
          </ul>
          <p style="text-align: right">
            <input type="button" class="btn"

	value="注册个人信息" onclick="registerIndex();" style="width: 150px"

	onmousemove="this.className='btnmouseover'"

	onmouseout="this.className='btn'" />
          </p>
        </div>
      </div>
      <div id="loginbox">
        <h1>登录 报名系统</h1>
        <div id="code301" class="errorBlock" style="display: none;">用户名密码错误</div>
        <div id="code302" class="errorBlock" style="display: none;">您取消座位次数太多，账户被锁定，解锁请与呼叫中心联系。</div>
        <div id="code100" class="errorBlock" style="display: none;"></div>
        <form id="loginForm">
          <table align="center" border="0" cellpadding="1" cellspacing="0">
            <tr>
              <td></td>
              <td align="center"></td>
            </tr>
            <tr>
              <td nowrap="nowrap"><div align="right"><span>证件号: </span></div></td>
              <td align="left"><input type="text" name="ksIDNO" maxlength="40"

			size="18" value="" style="height: 18px; width: 160px" /></td>
            </tr>
            <tr>
              <td></td>
              <td align="left"></td>
            </tr>
            <tr>
              <td align="right"><span>密码: </span></td>
              <td align="left"><input type="password" name="ksPwd" maxlength="40"

			 size="18" maxlength="16"

			style="height: 18px; width: 160px" /></td>
            </tr>
            <tr>
              <td></td>
              <td align="left"><input type="hidden" name="clientTime" id="clientTime" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="button" name="btnlogin" class="btn"

			id="btnlogin" style="width: 80px" value="登录"

			onmousemove="this.className='btnmouseover'"

			onmouseout="this.className='btn'" onclick="login(this.form);" /></td>
            </tr>
            <tr>
              <td colspan="2" height="33.0" align="center" valign="bottom"> 如果您忘了密码，请 <strong> <a href="getpwd.jsp">点这里找回密码</a></strong></td>
            </tr>
            <tr>
              <td></td>
              <td><p>请 <strong><a href="qryscore.jsp" class="redAndBold">点这里</a> </strong>进入2010年12月成绩查询</p></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <div class="indexcontent">
      <h1>重要通知</h1>
	  <iframe width="400px" height="360px" frameborder="0" id="newsFrame" src="http://news.etest.net.cn/JLPT/1/newslist.htm" scrolling="no"></iframe>
    </div>
  </div>
  <div id="uploadPicDiv" style="display: none;">
    <div id="personalInfo">
      <div class="sectiontitle"><span

	style="font-size: 12px; float: right; font-weight: normal;">[
        <label onclick="gotoURL('reginfo.php');" class="link" onmouseover="this.className='hover'" onmouseout="this.className='link'">修改个人信息</label>
        ]</span>个人信息</div>
      <div class="profilephoto"> <img name="ksImgSrc" alt="个人照片" src="#" /> </div>
      <div style="font-size: 12px; float: left; font-weight: normal; margin-top:10px; width:280px;">
        <table cellpadding="0">
          <tr>
            <td class="tdname">中文姓名:</td>
            <td><label name="ksxm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">拼音姓名:</td>
            <td><label name="kspxm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">性别:</td>
            <td><label name="ksxb" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">证件类型:</td>
            <td><label name="kszjlx" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">证件号:</td>
            <td><label name="kszjhm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">出生日期:</td>
            <td><label name="kscsrq" style="color: #000;"></label></td>
          </tr>
        </table>
      </div>
      <div style="margin:25px 25px 5px 5px;padding: 15px;border: 1px solid gray;color: #C30;font-size:12px; float:right; width: 230px;">特别提示：基本信息不可修改，如果您填写有误，并且您还未支付考费，请进入修改个人信息页面，删除后重新注册。</div>
      <div name="recutLinkDiv" style="float: left; clear: left; font-size: 12px; width: 170px; text-align: center; color: #369; display:none;"><a href="#" onclick="reCutPic();">剪裁照片</a></div>
      <form method="post" name="recutForm">
        <input type="hidden" name="ksid"/>
        <input type="hidden" name="neeaid"/>
        <input type="hidden" name="projectName"/>
        <input type="hidden" name="testid"/>
        <input type="hidden" name="ksCnName"/>
        <input type="hidden" name="ksEnName"/>
        <input type="hidden" name="postDate"/>
        <input type="hidden" name="controlInfo"/>
        <input type="hidden" name="controlSignStr"/>
        <input type="hidden" name="signStr"/>
        <input type="hidden" name="backUrl"/>
      </form>
      <div style="clear:both;"></div>
    </div>
    <div class="sectiontitle">上传照片</div>
    <table width="780" border="0" cellpadding="10">
      <tr>
        <td valign="top"><table width="580" border="0" cellpadding="3" align="center">
            <tr>
              <td class="redAndBold"><ul>
                  <li>必须上传电子照片，只有上传成功电子照片才可以完成日本语能力测试报考。</li>
                  <li>请准备文件格式为JPG/JPEG，大小在6KB到100KB之间的电子照片。</li>
                  <li>点击 <b>上传电子照片</b> 按钮，进入照片上传系统根据向导上传电子照片。</li>
                  <li>您上传的照片仅用于本届日本语能力测试。</li>
                </ul></td>
            </tr>
          </table>
          <div style="margin-top:20px;"> <span style="float: right; font-size: 14px; color: #69C; text-decoration: underline;"> <a href="#" onclick="queryPic();">我上传了照片，但遇到了问题</a></span>
            <form id="photo_form" action="" method="post">
              <input type="submit" name="btnSubmit" class="btn" id="uploadBtn"

					style="width: 260px; height: 22px;" value="上传电子照片"

					onmousemove="this.className='btnmouseover'"

					onmouseout="this.className='btn'" />
              <input type="hidden" name="ksid" id="photo_ksid" value="" />
              <input type="hidden" name="neeaid" id="photo_neeaid" value="" />
              <input type="hidden" name="projectName" id="photo_projectName" value="" />
              <input type="hidden" name="testid" id="photo_testid" value="" />
              <input type="hidden" name="ksCnName" id="photo_ksCnName" value="" />
              <input type="hidden" name="ksEnName" id="photo_ksEnName" value="" />
              <input type="hidden" name="postDate" id="photo_postDate" value="" />
              <input type="hidden" name="controlInfo" id="photo_controlInfo" value="" />
              <input type="hidden" name="controlSignStr" id="photo_controlSignStr" value="" />
              <input type="hidden" name="signStr" id="photo_signStr" value="" />
              <input type="hidden" name="backUrl" id="photo_backUrl" value="" />
            </form>
            <input type="hidden" name="photoSrc" id="photo_photoSrc" value="" />
          </div></td>
      </tr>
    </table>
    <br/>
    <br/>
    <br/>
    <br/>
  </div>
  <div id="selectLevelDiv" style="display: none;">
    <div id="personalInfo">
      <div class="sectiontitle"><span

	style="font-size: 12px; float: right; font-weight: normal;">[
        <label onclick="gotoURL('reginfo.php');" class="link" onmouseover="this.className='hover'" onmouseout="this.className='link'">修改个人信息</label>
        ]</span>个人信息</div>
      <div class="profilephoto"> <img name="ksImgSrc" alt="个人照片" src="#" /> </div>
      <div style="font-size: 12px; float: left; font-weight: normal; margin-top:10px; width:280px;">
        <table cellpadding="0">
          <tr>
            <td class="tdname">中文姓名:</td>
            <td><label name="ksxm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">拼音姓名:</td>
            <td><label name="kspxm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">性别:</td>
            <td><label name="ksxb" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">证件类型:</td>
            <td><label name="kszjlx" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">证件号:</td>
            <td><label name="kszjhm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">出生日期:</td>
            <td><label name="kscsrq" style="color: #000;"></label></td>
          </tr>
        </table>
      </div>
      <div style="margin:25px 25px 5px 5px;padding: 15px;border: 1px solid gray;color: #C30;font-size:12px; float:right; width: 230px;">特别提示：基本信息不可修改，如果您填写有误，并且您还未支付考费，请进入修改个人信息页面，删除后重新注册。</div>
      <div name="recutLinkDiv" style="float: left; clear: left; font-size: 12px; width: 170px; text-align: center; color: #369; display:none;"><a href="#" onclick="reCutPic();">剪裁照片</a></div>
      <form method="post" name="recutForm">
        <input type="hidden" name="ksid"/>
        <input type="hidden" name="neeaid"/>
        <input type="hidden" name="projectName"/>
        <input type="hidden" name="testid"/>
        <input type="hidden" name="ksCnName"/>
        <input type="hidden" name="ksEnName"/>
        <input type="hidden" name="postDate"/>
        <input type="hidden" name="controlInfo"/>
        <input type="hidden" name="controlSignStr"/>
        <input type="hidden" name="signStr"/>
        <input type="hidden" name="backUrl"/>
      </form>
      <div style="clear:both;"></div>
    </div>
    <div class="sectiontitle">选择级别</div>
    <table width="780" border="0" cellpadding="10">
      <tr>
        <td valign="top"><table width="580" border="0" cellpadding="3" align="center">
            <tr>
              <td class="redAndBold"><ul>
                  <li>请选择您要参加的日本语能力测试级别</li>
                  <li>点击右侧刷新列表可以刷新下面的级别列表</li>
                </ul></td>
            </tr>
            <tr>
              <td align="right"> [
                <label class="link" onclick="getLevelInfo()" onmouseover="this.className='hover'" onmouseout="this.className='link'">刷新级别列表</label>
                ] </td>
            </tr>
          </table>
          <table id="jbTable" width="580" border="0" cellpadding="3" class="datalist">
            <tr>
              <th width="100" align="center" >级别名称</th>
              <th width="150" align="center" >报名开始时间</th>
              <th width="150" align="center" >报名截止时间</th>
              <th width="180" align="center" >开始报名</th>
            </tr>
          </table></td>
      </tr>
    </table>
    <br/>
    <br/>
    <br/>
    <br/>
  </div>
  <div id="chooseaddrDiv" style="display: none;">
    <div id="personalInfo">
      <div class="sectiontitle"><span

	style="font-size: 12px; float: right; font-weight: normal;">[
        <label onclick="gotoURL('reginfo.php');" class="link" onmouseover="this.className='hover'" onmouseout="this.className='link'">修改个人信息</label>
        ]</span>个人信息</div>
      <div class="profilephoto"> <img name="ksImgSrc" alt="个人照片" src="#" /> </div>
      <div style="font-size: 12px; float: left; font-weight: normal; margin-top:10px; width:280px;">
        <table cellpadding="0">
          <tr>
            <td class="tdname">中文姓名:</td>
            <td><label name="ksxm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">拼音姓名:</td>
            <td><label name="kspxm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">性别:</td>
            <td><label name="ksxb" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">证件类型:</td>
            <td><label name="kszjlx" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">证件号:</td>
            <td><label name="kszjhm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">出生日期:</td>
            <td><label name="kscsrq" style="color: #000;"></label></td>
          </tr>
        </table>
      </div>
      <div style="margin:25px 25px 5px 5px;padding: 15px;border: 1px solid gray;color: #C30;font-size:12px; float:right; width: 230px;">特别提示：基本信息不可修改，如果您填写有误，并且您还未支付考费，请进入修改个人信息页面，删除后重新注册。</div>
      <div name="recutLinkDiv" style="float: left; clear: left; font-size: 12px; width: 170px; text-align: center; color: #369; display:none;"><a href="#" onclick="reCutPic();">剪裁照片</a></div>
      <form method="post" name="recutForm">
        <input type="hidden" name="ksid"/>
        <input type="hidden" name="neeaid"/>
        <input type="hidden" name="projectName"/>
        <input type="hidden" name="testid"/>
        <input type="hidden" name="ksCnName"/>
        <input type="hidden" name="ksEnName"/>
        <input type="hidden" name="postDate"/>
        <input type="hidden" name="controlInfo"/>
        <input type="hidden" name="controlSignStr"/>
        <input type="hidden" name="signStr"/>
        <input type="hidden" name="backUrl"/>
      </form>
      <div style="clear:both;"></div>
    </div>
    <div class="sectiontitle">选择考点</div>
    <table width="780" border="0" cellpadding="10">
      <tr>
        <td valign="top"><form id="chooseaddrForm">
            <table width="650" border="0" cellpadding="3" align="center">
              <tr>
                <td colspan="2"  class="redAndBold"><ul>
                    <li>首先请输入验证码，然后选择要参加考试的考点，点预定按钮。</li>
                    <li>点击右侧刷新列表可以刷新下面的考点列表</li>
                  </ul></td>
              </tr>
              <tr>
                <td align="left" width="60%" class="inputChk"> 
                <!-- 请输入下图中显示的验证码(4位大写英文字母) <br/>
                  验证码：
                  <input

					name="chkImgCode" type="text" size="4" maxlength="4"/>
                  <img name='chkImg' border='1' alt='验证码'width="80" height="25" />
                  <input type="hidden" name="chkImgFlag"/>
                  <span name="changeMsg">
                  <label class="link" onclick="getChkimgAjax('chooseaddrDiv');" onmouseover="this.className='hover'" onmouseout="this.className=('link')">看不清楚,换一张</label>
                  </span> --></td>
                <td align="right" valign="bottom"><span id="selectLevelSpan">[
                  <label class="link" onclick="gotoStep('selectLevel')" onmouseover="this.className='hover'" onmouseout="this.className=('link')">返回级别选择</label>
                  ]</span> [
                  <label class="link" onclick="getKDInfo()" onmouseover="this.className='hover'" onmouseout="this.className=('link')">刷新考点列表</label>
                  ] </td>
              </tr>
            </table>
            <table id="kdTable" width="650" border="0" cellpadding="6" cellspacing="1" class="datalist">
              <tr bgcolor="#E7E7E7">
                <th colspan="5"><strong> 级别： <span name="selectedJB" /></strong></th>
              </tr>
              <tr bgcolor="#E7E7E7">
                <th width="42"  valign="middle">地区</th>
                <th width="101" >考点代码</th>
                <th width="181" >考点名称</th>
                <th width="88" >状态</th>
                <th >预定座位</th>
              </tr>
            </table>
          </form></td>
      </tr>
    </table>
  </div>
  <div id="statusDiv" style="display: none;">
    <div id="personalInfo">
      <div class="sectiontitle"><span

	style="font-size: 12px; float: right; font-weight: normal;">[
        <label onclick="gotoURL('reginfo.php');" class="link" onmouseover="this.className='hover'" onmouseout="this.className='link'">修改个人信息</label>
        ]</span>个人信息</div>
      <div class="profilephoto"> <img name="ksImgSrc" alt="个人照片" src="#" /> </div>
      <div style="font-size: 12px; float: left; font-weight: normal; margin-top:10px; width:280px;">
        <table cellpadding="0">
          <tr>
            <td class="tdname">中文姓名:</td>
            <td><label name="ksxm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">拼音姓名:</td>
            <td><label name="kspxm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">性别:</td>
            <td><label name="ksxb" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">证件类型:</td>
            <td><label name="kszjlx" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">证件号:</td>
            <td><label name="kszjhm" style="color: #000;"></label></td>
          </tr>
          <tr>
            <td class="tdname">出生日期:</td>
            <td><label name="kscsrq" style="color: #000;"></label></td>
          </tr>
        </table>
      </div>
      <div style="margin:25px 25px 5px 5px;padding: 15px;border: 1px solid gray;color: #C30;font-size:12px; float:right; width: 230px;">特别提示：基本信息不可修改，如果您填写有误，并且您还未支付考费，请进入修改个人信息页面，删除后重新注册。</div>
      <div name="recutLinkDiv" style="float: left; clear: left; font-size: 12px; width: 170px; text-align: center; color: #369; display:none;"><a href="#" onclick="reCutPic();">剪裁照片</a></div>
      <form method="post" name="recutForm">
        <input type="hidden" name="ksid"/>
        <input type="hidden" name="neeaid"/>
        <input type="hidden" name="projectName"/>
        <input type="hidden" name="testid"/>
        <input type="hidden" name="ksCnName"/>
        <input type="hidden" name="ksEnName"/>
        <input type="hidden" name="postDate"/>
        <input type="hidden" name="controlInfo"/>
        <input type="hidden" name="controlSignStr"/>
        <input type="hidden" name="signStr"/>
        <input type="hidden" name="backUrl"/>
      </form>
      <div style="clear:both;"></div>
    </div>
    <div class="sectiontitle">我的状态</div>
    <table width="780" border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td><table width="100%" border="0" cellpadding="10">
            <tr>
              <td><table width="466" border="0" cellpadding="5">
                  <tr>
                    <td class="redAndBold"><span name="statusInfo" /></td>
                  </tr>
                </table>
                <table width="520" border="1" cellpadding="6" class="datalist">
                  <tr>
                    <th colspan="2">当前考试预定情况表</th>
                  </tr>
                  <tr>
                    <td width="30%" align="center">考试级别</td>
                    <td><span name="selectedJB" /></td>
                  </tr>
                  <tr>
                    <td align="center">考点名称</td>
                    <td ><span name="selectedKDMC" /></td>
                  </tr>
                  <tr>
                    <td align="center">考试时间</td>
                    <td ><span name="ksTime" /></td>
                  </tr>
                  <tr style="display: none; background-color:#f4f9ff" id="zkzShow">
                    <td align="center" >准考证号</td>
                    <td ><span name="zkz" class="zkzDiv"/></td>
                  </tr>
                  <tr align="left" id="changeKd" style="display: none; background-color:#f4f9ff">
                    <td colspan="2" nowrap> 提示：如果未能成功更改考点，系统仍保留您目前的预定座位。
                      <input class="btn" type="button" onclick="changeKD();" value="更改考点" onmousemove="this.className='btnmouseover'" onmouseout="this.className='btn'" style="width: 80px"/>
                  </tr>
                  <tr align="right" id="cancelKd" style="display: none; background-color:#dedefa">
                    <td colspan="2" class="border"><input class="btn" type="button" onclick="cancelYD();" value="取消预定" onmousemove="this.className='btnmouseover'" onmouseout="this.className='btn'" style="width: 80px"/></td>
                  </tr>
                </table>
                <span class="redAndBold"> 重要提示：</span>
                <ul id="noticeList">
                  <li style="display: none;">24小时内您没有填写完整的报名表，您的预定将被取消。</li>
                  <li style="display: none;">72小时内您的付款没有被确认收到，您的预定将被取消。</li>
                  <li style="display: none;">在报名截止日期前2天报名的考生须在24小时之内完成支付。</li>
                  <li style="display: none;">如果您已成功支付，但您的状态仍为未支付，请耐心等待系统自动补账，切勿重复支付。如果12小时后您的状态仍未更新，请与我们联系。</li>
                  <li style="display: none;">报名截止后，请按本网站公布的日期登录网站，自行打印准考证，在考试当天携带准考证参加考试。</li>
                  <li style="display: none;">您已经完成了网上报名，系统已经为您生成了<span

						class="redAndBold">准考证</span>，请自行 <a href="printZKZ.php" target="_blank"><img src="images/printer.png" style="border:0px"/>打印准考证</a></li>
                </ul>
                <table width="520" border="0" cellpadding="6" cellspacing="1">
                  <tr>
                    <td width="423" class="border"><table id="payTable" width="90%" border="0" align="center">
                        <tr style="display: none;">
                          <td><input class="btn" type="button" onclick="gotoURL('info.php')" value="填写报名表并付款" onmousemove="this.className='btnmouseover'" onmouseout="this.className='btn'" style="width: 120px"/></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr style="display: none;">
                          <td><input class="btn" type="button" onclick="gotoURL('info.php')" value="重新填写报名表" onmousemove="this.className='btnmouseover'" onmouseout="this.className='btn'" style="width: 120px"/></td>
                          <td><input class="btn" type="button" onclick="gotoURL('pay.php')" value="付款" onmousemove="this.className='btnmouseover'" onmouseout="this.className='btn'" style="width: 120px"/></td>
                        </tr>
                        <tr style="display: none;">
                          <td><input class="btn" type="button" onclick="gotoURL('info.php')" onmousemove="this.className='btnmouseover'" onmouseout="this.className='btn'" value="重新填写报名表" style="width: 120px"/></td>
                          <td>&nbsp;</td>
                        </tr>
                      </table></td>
                  </tr>
                </table></td>
            </tr>
          </table>
          <p>&nbsp;</p></td>
      </tr>
    </table>
  </div>
  <div class="footer">
    <div><a href="javascript:gotoHomepage();" target="_self">ETEST首页</a> | <a href="contact.html" target="_blank">联系我们</a></div>
    <div id="copyright">Copyright &copy; 2011
      
      by NEEA. All Rights Reserved. 教育部考试中心 版权所有</div>
  </div>
  <div id="logosDiv" style="display: none;">
    <ul>
      <li><a href="http://www.jlpt.jp/" target="_blank"><img

		alt="JLPT" src="images/1.JLPT.gif" /></a></li>
      <li><a href="http://www.jpfbj.cn/" target="_blank"><img

		alt="JF Beijing" src="images/2.JF Beijing.png" height="74" /></a></li>
      <li><a href="http://www.chinacenter.jp/" target="_blank"><img

		alt="Heart to Heart" src="images/3.heart to heart.jpg" height="74" /></a></li>
      <li><a href="https://www.erin.ne.jp/" target="_blank"><img

		alt="Erin" src="images/4.erin.gif" height="74" /></a></li>
      <li><a href="http://anime-manga.jp/" target="_blank"><img

		alt="Anime" src="images/5.anime.manga.jpg" height="74" /></a></li>
    </ul>
  </div>
  <div id="debugdiv"></div>
</div>
</body>
</html>
