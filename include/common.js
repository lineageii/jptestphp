var gotoStep;
var dispatch;
var cookie;
var isHomePage;
if (gotoStep == undefined) {
    gotoStep = function (b) {
        var b;

        function a(c) {
            if (cookie) {
                cookie.writeCookie("step", c)
            }
            window.location = "index.do"
        }
        if (!b || b == "login") {
            b = "login";
            a(b)
        } else {
            if (b == "status") {
                b = "status";
                a(b)
            }
        }
    }
}
if (dispatch == undefined) {
    dispatch = function () {
        gotoStep("status")
    }
}
var gotoURL;
var getURL;
if (gotoURL == undefined) {
    gotoURL = function (a) {
        var b = document.createElement("form");
        b.action = getURL(a);
        b.method = "post";
        document.body.appendChild(b);
        b.submit()
    }
}
if (getURL == undefined) {
    getURL = function (b) {
        var a = getrequest("flag");
        if (!a) {
            return b
        }
        return b + "?flag=" + a
    }
}
function showkdinfo(a) {
    if (a == "") {
        a = getrequest("kdid")
    }
    window.open("http://jlpt.etest.net.cn/kdinfo.do?kdid=" + a, "detail", "scrollbars=auto,resizable=yes,width=530,height=350")
}
function getrequest(d) {
    var b = window.location.href;
    var f = b.indexOf("?");
    var e = b.substr(f + 1);
    var c = e.split("&");
    for (var a = 0; a < c.length; a++) {
        var g = c[a].split("=");
        if (g[0].toUpperCase() == d.toUpperCase()) {
            return g[1]
        }
    }
    return ""
}
function formSubmitAgent(a) {
    if (!a) {
        return
    }
    a.action = getURL(a.action);
    a.submit()
}
document.include = function (h, j, b, g) {
    var f = document.getElementsByTagName("head")[0];
    var c = f.getElementsByTagName("script");
    for (var d = 0; d < c.length; d++) {
        var a = c[d].src;
        a = a.substr(a.lastIndexOf("/") + 1);
        if (a == h) {
            return false
        }
    }
    var e = document.createElement("script");
    e.language = "javascript";
    e.id = j;
    e.src = h;
    e.defer = true;
    e.onload = b;
    e.onreadystatechange = function () {
        if (this.readyState == "loaded" || this.readyState == "complete") {
            b()
        }
    };
    e.onerror = g;
    f.appendChild(e);
    return true
};

function gotoHomepage() {
    if ((new RegExp(".net.cn")).test(window.location.href.toLowerCase())) {
        window.location.href = "http://www.etest.net.cn";
        return
    }
    window.location.href = "http://www.etest.edu.cn"
};