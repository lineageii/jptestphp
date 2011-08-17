//上传照片表单校验
function checkImg(){
	var imgFilename = document.getElementById("imgFile").value;
	if(imgFilename==""){
		alert("请选择一个照片文件");
		document.getElementById("imgFile").focus();
		return false;
	}
	else{
		var length = imgFilename.length;
		var ext = imgFilename.substr(length-3,3);
		if( ext.toUpperCase() != "JPG" ){
			alert("请选择一张格式为JPG的照片文件");
			document.getElementById("imgFile").focus();
			return false;
		}
		document.getElementById("uploadBtn").disabled = true;
		return true;
	}
}

function gotoHomepage() {
	if ((new RegExp("\.net\.cn")).test(window.location.href.toLowerCase())) {
		window.location.href = "http://www.etest.net.cn";
		return;
	}
	window.location.href = "http://www.etest.edu.cn";
}

