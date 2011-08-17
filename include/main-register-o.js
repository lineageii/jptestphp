var cache=new Object();
var nowShowingDiv;
var user=new userModel();
var layer;
var Provinces;
function init(){
	var stepr=user.get("stepr");
	layer=$("layer");
    var layerLoadingDiv=layer.getElementsBySelector("[name='loadingImgDiv']")[0];
    var layerBtnTable=layer.getElementsBySelector("[name='btnTable']")[0];
    var layerRetryBtn=layerBtnTable.getElementsBySelector("[name='retryBtn']")[0];
    var layerCancelBtn=layerBtnTable.getElementsBySelector("[name='cancelBtn']")[0];
    var layerMsg=layer.getElementsBySelector("[name='msg']")[0];
    var layerTickMsg=layer.getElementsBySelector("[name='tickSpan']")[0];
    var layerTitle=layer.getElementsBySelector("[name='title']")[0];
    layer.setTitle=function(title){
       layerTitle.innerHTML=title;
    };
    layer.setMsg=function(msg){
       layerMsg.innerHTML=msg;
    };
    layer.setTickSpan=function(msg){
       layerTickMsg.innerHTML=msg;
    };
    layer.showLoading=function(){
       layerBtnTable.hide();
       layerLoadingDiv.show();
    };
    layer.showBtn=function(tick,remainAction){
       layerLoadingDiv.hide();
       layerBtnTable.show();
       layerRetryBtn.disabled=true;
       if(!layerRetryBtn.hasClassName("disabled"))             
           layerRetryBtn.addClassName("disabled");
       var gCallCount=0;
       layer.setTickSpan('请等待'+(tick-gCallCount)+'秒后重试...'); 
       layerRetryBtn.value='重试('+(tick-gCallCount)+')';
       cache["pe"]=new PeriodicalExecuter(function(pe) {
       if (++gCallCount >= tick){
          pe.stop();
          layer.setTickSpan('');
          layerRetryBtn.disabled=false;
          layerRetryBtn.removeClassName("disabled");
          layerRetryBtn.value='重试';
          if(remainAction)
             remainAction();
       }else{
          layer.setTickSpan('请等待'+(tick-gCallCount)+'秒后重试...');
          layerRetryBtn.value='重试('+(tick-gCallCount)+')';
       }
    }, 1);
    };
    layer.setTickMsg=function(tick,remainAction,getTickMsg){
       layerLoadingDiv.hide();
       var gCallCount=0;
       if(!getTickMsg)
            getTickMsg=function(gCallCount,tick){
	            return (tick-gCallCount)+"秒钟后进入页面...";
	   };
	   layer.setTickSpan(getTickMsg(gCallCount,tick));
       new PeriodicalExecuter(function(pe) {
       if (++gCallCount >= tick){
          pe.stop();
          layer.setTickSpan('');
          if(remainAction)
             remainAction();
       }else{
          layer.setTickSpan(getTickMsg(gCallCount,tick));
       }
    }, 1);
    };
    nowShowingDiv=$("agreementDiv");
    gotoStep(stepr);
};

function serializeUser(attributes){
   abbributes=$A(attributes);
   var retString="";
   abbributes.each(function(attr){
      retString=retString+"&"+attr+"="+user.get(attr);
   });
   retString=retString.substr(1);
   return retString;
}
function dispatch(){
   if(user.get("bkjb")=="0"){
       gotoStep('selectLevel');
   }else
       if(user.get("bkkd")=="0"){
           gotoStep('chooseaddr');
       }else
          gotoStep('status');
}
function gotoStep(stepr){
   layer.hide();
   var userStepr = user.get("stepr");
   if(nowShowingDiv.id!=stepr+"Div"){
      nowShowingDiv.hide();
      window.scrollTo(0,0);
   }
   var remainAction;
   if(stepr=="login"){
       window.location.href="index.php";
       return;
   }else{
	   if(!stepr || stepr=="agreement"){
	      nowShowingDiv=$("agreementDiv");
	   }else{
	       if(stepr=="register"){
	          nowShowingDiv=$("registerDiv");
	          remainAction=function(){
				  //getChkimgAjax('registerDiv');
	              if(!Provinces){
	                 document.include('include/proviceAndcity.js','provinces',function(){                             
	                     //Provinces2Select('selectProvince','selectCity','wishProvince','wishCity');
	                     jzProvincesToSelect("province");
	                 },cancel);
	              }
	 	          $("registerForm").focusFirstElement();
				  if($("registerForm").guarantee.checked)
				  	$("registerForm").guarantee.checked=false;
	 	      };
	       }else
	           if(stepr=="confirmReg"){
	               if(setRegisterConfirmValues())
	                   nowShowingDiv=$("confirmDiv");
	               else{
	            	   alert("请您重新填写注册信息");
	            	   gotoStep("agreement");
	               }                   
	           }
	   }
    }
    nowShowingDiv.show();
	displayHome(stepr);
    if(remainAction)
       remainAction();
    user.set("stepr",stepr);
}

getURL=function(url){
  var flag=user.get("ksIdNo");
  if(!flag)
    flag=user.get("chkImgFlag");
  if(!flag)
    return url;
  return url+"?flag="+flag.substr(flag.length-2,flag.length);
};

function redo(){
   if(!cache['redo'])
      alert("这里的redo没定义");
   cache['redo']();
}
function cancel(){
   if(!cache['cancel']){
      cache['cancel']=function(){
      layer.hide();
      if(cache["pe"]){
         cache["pe"].stop();
         layer.setTickSpan("");
         cache["pe"]=null;
      }
      };
   }
   cache['cancel']();   
   cache['redo']=null;
}

function checkIsInValid(f_isInValid,element,f_errorHandler){
   var el=$(element);
   if(f_isInValid($F(el))){
      f_errorHandler(el);
      el.focus();
      return true;
   }
   return false;
}
function checkIsNull(value){
   if(value==undefined||value==null||value=="")
       return true;
   return false;
}

function registerComplete(form){
   form=$(form);
   var chkImgCode=form.getElementsBySelector("[name='chkImgCode']")[0];
   //if(checkIsInValid(checkIsNull,chkImgCode,function(){alert('请输入验证码');}))
   //    return;
   if(regeditClick(form)){
       cache['registerInfo']=form.serialize(true);
       gotoStep("confirmReg");	       
   }
}

function setRegisterConfirmValues(){
     if(!cache['registerInfo']){
         return false;
     }
     var regObj=cache['registerInfo'];
     Object.keys(regObj).each(function(key){
          var el=$(key+'Span');
          var oel;
          var isbreak=false;
          var elements=$('registerForm').getElementsBySelector('[name='+key+']');
          for(var i=elements.size()-1;i>=0;--i){
             if(elements[i].value==regObj[key]){
                  oel=elements[i];
                  break;
             }
          }
          if(oel&&el){
            if(oel.alt)
             el.innerHTML=oel.alt;
            else
             el.innerHTML=oel.value;
          }	             
       }
     );
     return true;
}
function agreeProtocol(){
	cache["redo"]=agreeProtocol;
	 //要立即请求验证码
	nowShowingDiv=$("agreementDiv");
    gotoStep("register");
	return;
	new Ajax.Request(
		getURL("checkReg.php"),{
			method: 'post',
			requestHeaders: {'RequestType':'ajax'},
	       onSuccess: function(originalRequest){
	          var ret = originalRequest.responseJSON;
	          if(ret==null){
	             originalRequest.request.options.onFailure();
	             return;
	          }
	          if(ret.retVal==0){
	              processError(ret.errorNum);
	          }else{
	              //要立即请求验证码
	                nowShowingDiv=$("agreementDiv");
    				gotoStep("register");
	          }
           },
           onFailure: function(){
              processError(100);
           }
		}
	);
    
}
function refuseProtocol(){
   alert("您不同意日本语能力测试网上报名协议，将不能进行后续的报名步骤");
   gotoStep("agreement");
}
function confirmreg(){
    cache["redo"]=confirmreg;
    cache['cancel']=modifyreg; 
	layer.setMsg("注册成功,请用您刚才注册的证件号和密码登录");
    layer.setTickMsg(3,function(){window.location.href='index.php';});
	//return;
    new Ajax.Request(
       getURL("server/register.php"),{
           method: 'post',
           requestHeaders: {'RequestType':'ajax'},
           parameters: cache['registerInfo'],
           onCreate: function(){
             layer.show();
             layer.setTitle("注册");
             layer.setMsg("注册请求发送中...");
             layer.showLoading();
           },
	       onSuccess: function(originalRequest){
	          var ret = originalRequest.responseJSON;
	          if(ret==null){
	             originalRequest.request.options.onFailure();
	             return;
	          }
	          clearChkimgCache();
	          if(ret.retVal==0){
	              processError(ret.errorNum);
	          }else{
	              layer.setMsg("注册成功,请用您刚才注册的证件号和密码登录");
                  layer.setTickMsg(3,function(){window.location.href='index.php';});
	          }
           },
           onFailure: function(){
              processError(100);
           }
    });
}
function modifyreg(){
   gotoStep("register");
}
function getChkimgAjax(parent){
    cache["redo"]=null;
    cache['cancel']=function(){
       if(user.get('stepr')=="register"){
          gotoStep('agreement');
       }
    };
    var parentStr = parent;
    setChangeImgLink(parentStr,false);
    parent=$(parent);
    var url=getURL("chkImg.php");
       var chkImgCode=parent.getElementsBySelector("input[name='chkImgCode']")[0];
       var chkimg=parent.getElementsBySelector("[name='chkImg']")[0];
       var chkImgFlag=user.get('chkImgFlag'); 
       if(!chkImgFlag){
          chkImgFlag=generateRandomFlag(18);
          user.set('chkImgFlag',chkImgFlag);
       }
	   return;
       new Ajax.Request(
       url,{
           method: 'post',
           parameters: 'chkImgFlag='+chkImgFlag,
           requestHeaders: {'RequestType':'ajax'},
	       onSuccess: function(originalRequest){
	            var ret = originalRequest.responseJSON;
	            if(ret==null){
	               originalRequest.request.options.onFailure();
	               return;
	            }
	            if(!ret.retVal){
	               processError(ret.errorNum);
	               return;
	            }
	            user.set('chkImgSrc',ret.chkImgFilename);
	            chkImgCode.value='';
	            setChkimg(parent);
	            setChangeImgLink(parentStr,true);
           },
           onFailure: function(originalRequest){
              alert("获取验证码失败，请点击验证码重新获取!");
              setChangeImgLink(parentStr,true);
           }
        });
}

function clearChkimgCache(){
   user.set('chkImgSrc','');
}

function setChkimg(parent){
   p=$(parent);
   var chkimg=p.getElementsBySelector("[name='chkImg']")[0];
   var chkImgFlag=p.getElementsBySelector("[name='chkImgFlag']")[0];
   chkimg.src=user.get('chkImgSrc');
   chkImgFlag.value=user.get('chkImgFlag');
        
}
function getChkimg(parent){
   var chkImgFlag=user.get('chkImgFlag');
   var chkImgSrc=user.get('chkImgSrc');   
   if(!chkImgFlag||!chkImgSrc){
      getChkimgAjax(parent);
   }else{
      setChkimg(parent);
   }
}
function processError(errorNum){
    var getMsg;
    if(cache['getMsg'+errorNum]){
        getMsg=cache['getMsg'+errorNum];
        cache['getMsg'+errorNum]=null;      
    }
    var remainAction;
    if(cache['remainAction'+errorNum]){
       remainAction=cache['remainAction'+errorNum];   
       cache['remainAction'+errorNum]=null;    
    }
    var getTickMsg;
    if(cache['getTickMsg'+errorNum]){
       getTickMsg=cache['getTickMsg'+errorNum];   
       cache['getTickMsg'+errorNum]=null;    
    } 
    if(!getMsg){
      getMsg=function(){return errorCode[errorNum]};
    }
    if(layer)
        layer.setMsg(getMsg(errorNum));
    if(errorNum==101||errorNum==102||errorNum==303||errorNum==315||errorNum==316||errorNum==310){
       if(!remainAction){
          remainAction=function(){window.location.href='index.php';};
       }
       layer.show();      
       layer.setTickMsg(5,remainAction,getTickMsg);
       return;
    }
    if(errorNum>=200&&errorNum<=206||errorNum>=300&&errorNum<=317){
      if(!remainAction)
         remainAction=function(){cancel();};
      if(layer)  
       layer.hide();
      alert(getMsg());
      remainAction();
      return;
    }
    if(!remainAction)
      remainAction=dispatch;
    if(layer){
      layer.show();    
      layer.showBtn(5); 
    }
}
function generateRandomFlag(length){
  var flag="";
  var a=10;
  var pp=Math.pow(10, a);
  var len=0;  
  for(len=0;len<length;){
     var r=(Math.random()*pp).toString();
     var d=r.indexOf(".");
     len+=d;
     flag+=r.substr(0,d);
  }
  return flag.substr(0,length);
}
function displayHome(stepr){
	var baseLink = "<li><a href=\"kdinfo.php?kdid=info\" target=\"_blank\">考点信息</a></li>"
			+"<li><a href=\"faq.html\" target=\"_blank\">常见问题</a></li>"
			+"<li><a href=\"ksxz.html\" target=\"_blank\">考生须知</a></li>"
			+"<li><a href=\"bmbz.html\" target=\"_blank\">报名步骤</a></li>";
   	if(stepr=="agreement" || stepr=="register" || stepr=="confirmReg"){
   		var homeLink = "<li><a href=\"#\" onclick=\"window.location.href='index.php';\" >首页</a></li>";
   		$("nabBarContent").innerHTML = baseLink + homeLink;
   	}
}

function setChangeImgLink(parent,linkFlag){
	//var changeLink = "<label class=\"link\" onclick=\"getChkimgAjax('"+parent+"');\" onmouseover=\"this.className='hover'\" "
	//								+ "onmouseout=\"this.className='link'\">看不清楚,换一张</label>";
	//var waitMsg = "更换中,请稍候...";
	//var p = $(parent);
	//if(linkFlag){
	//		p.getElementsBySelector("[name='changeMsg']")[0].innerHTML=changeLink;
	//	}
	//else{
	//		p.getElementsBySelector("[name='changeMsg']")[0].innerHTML=waitMsg;
	//}
}
