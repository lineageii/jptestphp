/**
 * 如何操作cookie
 * 本类是用来封装操作cookie的方法
 */
 
var cookie=new Object();

cookie.getCookie=function(cookieName,defaultValue){
    var lowerCookieName = cookieName.toLowerCase();
    var cookieStr = document.cookie;    
    if (cookieStr == "")
    {
        return defaultValue;
    }
    var cookieArr = cookieStr.split("; ");
    var pos = -1;
    for (var i=0; i<cookieArr.length; i++)
    {
        pos = cookieArr[i].indexOf("=");
        if (pos > 0)
        {
            if (cookieArr[i].substring(0, pos).toLowerCase() == lowerCookieName)
            {
                return decodeURIComponent(cookieArr[i].substring(pos+1, cookieArr[i].length));
				//return unescape(cookieArr[i].substring(pos+1, cookieArr[i].length));
				//return cookieArr[i].substring(pos+1, cookieArr[i].length);
            }
        }
    }    
    return defaultValue;    
}

cookie.writeCookie=function(cookieName, cookieValue, expires){
    if (expires)
    {        //指定了 expires
        document.cookie = cookieName + "=" + encodeURIComponent(cookieValue) + "; expires=" + expires.toGMTString();
    }
    else
    {
        document.cookie = cookieName + "=" + encodeURIComponent(cookieValue);
    }   
}