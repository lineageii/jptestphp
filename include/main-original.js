var cache = new Object();
var nowShowingDiv;
var user = new userModel();
var layer;
var Provinces;

function indexInit() {
    var f = user.get("step");
    layer = $("layer");
    var b = layer.getElementsBySelector("[name='loadingImgDiv']")[0];
    var c = layer.getElementsBySelector("[name='btnTable']")[0];
    var d = c.getElementsBySelector("[name='retryBtn']")[0];
    var e = c.getElementsBySelector("[name='cancelBtn']")[0];
    var h = layer.getElementsBySelector("[name='msg']")[0];
    var a = layer.getElementsBySelector("[name='tickSpan']")[0];
    var g = layer.getElementsBySelector("[name='title']")[0];
    layer.setTitle = function (i) {
        g.innerHTML = i
    };
    layer.setMsg = function (i) {
        h.innerHTML = i
    };
    layer.setTickSpan = function (i) {
        a.innerHTML = i
    };
    layer.showLoading = function () {
        c.hide();
        b.show()
    };
    layer.showBtn = function (i, k) {
        b.hide();
        c.show();
        d.disabled = true;
        if (!d.hasClassName("disabled")) {
            d.addClassName("disabled")
        }
        var j = 0;
        layer.setTickSpan("请等待" + (i - j) + "秒后重试...");
        d.value = "重试(" + (i - j) + ")";
        cache.pe = new PeriodicalExecuter(function (l) {
            if (++j >= i) {
                l.stop();
                layer.setTickSpan("");
                d.disabled = false;
                d.removeClassName("disabled");
                d.value = "重试";
                if (k) {
                    k()
                }
            } else {
                layer.setTickSpan("请等待" + (i - j) + "秒后重试...");
                d.value = "重试(" + (i - j) + ")"
            }
        }, 1)
    };
    layer.setTickMsg = function (i, k, l) {
        b.hide();
        var j = 0;
        if (!l) {
            l = function (n, m) {
                return (m - n) + "秒钟后进入页面..."
            }
        }
        layer.setTickSpan(l(j, i));
        new PeriodicalExecuter(function (m) {
            if (++j >= i) {
                m.stop();
                layer.setTickSpan("");
                if (k) {
                    k()
                }
            } else {
                layer.setTickSpan(l(j, i))
            }
        }, 1)
    };
    nowShowingDiv = $("loginDiv");
    gotoStep(f)
}
function serializeUser(a) {
    abbributes = $A(a);
    var b = "";
    abbributes.each(function (c) {
        b = b + "&" + c + "=" + user.get(c)
    });
    b = b.substr(1);
    return b
}
function dispatch() {
    if (checkIsNull(user.get("ksImgSrc"))) {
        gotoStep("uploadPic")
    } else {
        if (user.get("bkjb") == "0") {
            gotoStep("selectLevel")
        } else {
            if (user.get("bkkd") == "0") {
                gotoStep("chooseaddr")
            } else {
                gotoStep("status")
            }
        }
    }
}
if (isHomePage) {
    gotoStep = function (b) {
        layer.hide();
        if (nowShowingDiv.id != b + "Div") {
            nowShowingDiv.hide();
            window.scrollTo(0, 0)
        }
        var a;
        if (!b || b == "login") {
            nowShowingDiv = $("loginDiv");
            a = function () {
                $("loginForm").focusFirstElement();
                $("newsFrame").src = "http://news.etest." + GetDomain() + "/JLPT/1/newslist.htm"
            };
            $("logosDiv").show()
        } else {
            $("logosDiv").hide();
            if (b == "uploadPic") {
                nowShowingDiv = $("uploadPicDiv");
                a = function () {
                    outputKSXM("uploadPicDiv");
                    getUploadPicInfo()
                }
            } else {
                if (b == "selectLevel") {
                    if (user.get("isChangeKD")) {
                        gotoStep("chooseaddr")
                    } else {
                        nowShowingDiv = $("selectLevelDiv");
                        a = function () {
                            outputKSXM("selectLevelDiv");
                            getLevelInfo();
                            user.set("bkjb", "0")
                        }
                    }
                } else {
                    if (b == "chooseaddr") {
                        nowShowingDiv = $("chooseaddrDiv");
                        a = function () {
                            outputKSXM("chooseaddrDiv");
                            var c = $("selectLevelSpan");
                            if (user.get("isChangeKD")) {
                                c.hide()
                            } else {
                                c.show()
                            }
                            outputJB("chooseaddrDiv");
                            //getChkimg("chooseaddrDiv");
                            getKDInfo()
                        }
                    } else {
                        if (b == "status") {
                            nowShowingDiv = $("statusDiv");
                            a = function () {
                                outputKSXM("statusDiv");
                                getKsStatus()
                            }
                        }
                    }
                }
            }
        }
        if (nowShowingDiv == null || nowShowingDiv == undefined) {
            nowShowingDiv = $("loginDiv")
        }
        nowShowingDiv.show();
        displayHome(b);
        if (a) {
            a()
        }
        user.set("step", b)
    }
}
getURL = function (b) {
    var a = user.get("ksIdNo");
    if (!a) {
        a = user.get("chkImgFlag")
    }
    if (!a) {
        return b
    }
    return b + "?flag=" + a.substr(a.length - 2, a.length)
};

function updateUser(a) {
    Object.keys(a).each(function (b) {
        user.set(b, a[b])
    })
}
function redo() {
    if (!cache.redo) {
        alert("这里的redo没定义")
    }
    cache.redo()
}
function cancel() {
    if (!cache.cancel) {
        cache.cancel = function () {
            layer.hide();
            if (cache.pe) {
                cache.pe.stop();
                layer.setTickSpan("");
                cache.pe = null
            }
        }
    }
    cache.cancel();
    cache.redo = null
}
function checkIsInValid(c, a, d) {
    var b = $(a);
    if (c($F(b))) {
        d(b);
        b.focus();
        return true
    }
    return false
}
function checkIsNull(a) {
    if (a == undefined || a == null || a == "") {
        return true
    }
    return false
}
function outputKSXM(a) {
    var b = $(a);
    b.getElementsBySelector("[name='ksxm']").each(function (c) {
        c.innerHTML = user.get("ksXing") + user.get("ksMing")
    });
    b.getElementsBySelector("[name='kspxm']").each(function (c) {
        c.innerHTML = user.get("ksPXing") + " " + user.get("ksPMing")
    });
    b.getElementsBySelector("[name='kszjhm']").each(function (c) {
        c.innerHTML = user.get("ksIdNo")
    });
    b.getElementsBySelector("[name='kszjlx']").each(function (c) {
        c.innerHTML = KsIdNoTypeName[user.get("ksIdType")]
    });
    b.getElementsBySelector("[name='ksImgSrc']").each(function (c) {
        c.src = user.get("ksImgSrc") + "?c=" + (new Date().getUTCMilliseconds())
    });
    b.getElementsBySelector("[name='ksxb']").each(function (c) {
        c.innerHTML = user.get("ksXb")
    });
    b.getElementsBySelector("[name='kscsrq']").each(function (c) {
        c.innerHTML = user.get("ksCsrq")
    });
    if (!checkIsNull(user.get("ksImgSrc"))) {
        //getRecutPicInfo()
    }
}
function outputJB(a) {
    var b = $(a);
    b.getElementsBySelector("[name='selectedJB']").each(function (c) {
        c.innerHTML = LevelName[user.get("bkjb")]
    })
}
function getChkimgAjax(c) {
    cache.redo = null;
    cache.cancel = function () {
        if (user.get("step") == "register") {
            gotoStep("agreement")
        }
    };
    var e = c;
    setChangeImgLink(e, false);
    c = $(c);
    var b = getURL("chkImg.php");
    var d = c.getElementsBySelector("input[name='chkImgCode']")[0];
    var f = c.getElementsBySelector("[name='chkImg']")[0];
    var a = user.get("chkImgFlag");
    if (!a) {
        a = generateRandomFlag(18);
        user.set("chkImgFlag", a)
    }
    new Ajax.Request(b, {
        method: "post",
        parameters: "chkImgFlag=" + a,
        requestHeaders: {
            RequestType: "ajax"
        },
        onSuccess: function (g) {
            var h = g.responseJSON;
            if (h == null) {
                g.request.options.onFailure();
                return
            }
            if (!h.retVal) {
                processError(h.errorNum);
                return
            }
            user.set("chkImgSrc", h.chkImgFilename);
            d.value = "";
            setChkimg(c);
            setChangeImgLink(e, true)
        },
        onFailure: function (g) {
            alert("获取验证码失败，请点击验证码重新获取!");
            setChangeImgLink(e, true)
        }
    })
}
function clearChkimgCache() {
    user.set("chkImgSrc", "")
}
function setChkimg(b) {
    p = $(b);
    var c = p.getElementsBySelector("[name='chkImg']")[0];
    var a = p.getElementsBySelector("[name='chkImgFlag']")[0];
    c.src = user.get("chkImgSrc");
    a.value = user.get("chkImgFlag")
}
function getChkimg(c) {
    var b = user.get("chkImgFlag");
    var a = user.get("chkImgSrc");
    if (!b || !a) {
        getChkimgAjax(c)
    } else {
        setChkimg(c)
    }
}
function login(c) {
    c = $(c);
    var b = c.getElementsBySelector("[name=ksIDNO]")[0];
    var a = c.getElementsBySelector("[name=ksPwd]")[0];
    if (checkIsInValid(checkIsNull, b, function () {
        alert("请输入证件号")
    })) {
        return
    }
    if (checkIsInValid(checkIsNull, a, function () {
        alert("请输入密码")
    })) {
        return
    }
    b.value = $F(b).toUpperCase();
    b.value = b.value.replace("(", "（");
    b.value = b.value.replace(")", "）");
    user.set("ksIdNo", $F(b));
    user.set("sFlag", escape(escape($F(b))));
    cache.redo = function () {
        login(c)
    };
    cache.cancel = null;
	
	            clearChkimgCache();
            user.set("chkImgFlag", escape(escape(user.get("ksIdNo"))));
            layer.setMsg("登录成功");
			//dispatch();
    new Ajax.Request(getURL("server/login.php"), {
        method: "post",
        parameters: c.serialize(),
        requestHeaders: {
            RequestType: "ajax"
        },
        onCreate: function () {
            layer.show();
            layer.setTitle("登录");
            layer.setMsg("登录请求发送中...");
            layer.showLoading()
        },
        onSuccess: function (d) {
        	//(d.responseText);
            var e = d.responseJSON;
            if (e == null) {
                d.request.options.onFailure();
                return
            }
            if (e.retVal == 0) {
                processError(e.errorNum);
                return
            }
            updateUser(e);
            clearChkimgCache();
            user.set("chkImgFlag", escape(escape(user.get("ksIdNo"))));
            layer.setMsg("登录成功");
            layer.setTickMsg(3, function () {
                if (e.retVal == 3 || e.retVal == 2) {
                    gotoURL(e.url)
                } else {
                    dispatch()
                }
            })
        },
        onFailure: function () {
            processError(100)
        }
    })
}
function getLevelInfo() {
    cache.redo = getLevelInfo;
    cache.cancel = null;
    new Ajax.Request("selectLevel.php", {
        method: "get",
        requestHeaders: {
            RequestType: "ajax"
        },
        onCreate: function () {
            layer.show();
            layer.setTitle("选择级别");
            layer.setMsg("页面载入中");
            layer.showLoading()
        },
        onSuccess: function (originalRequest) {
            var jsonObj = eval(originalRequest.responseText);
            if (jsonObj == null) {
                originalRequest.request.options.onFailure();
                return
            }
            layer.hide();
            var jbInfo = $A(jsonObj);
            var jbTable = $("jbTable");
            var tbody = jbTable.getElementsByTagName("tbody")[0];
            var selectBtnTemplate = new Template('<input type="button" class="btn" onclick="selectedJB(#{jb})" onmousemove="this.className=\'btnmouseover\'" onmouseout="this.className=\'btn\'" style="width:120px" value="下一步&#13;&#10;(选择考点)"/>');
            var i = 0;
            var trs = $A(jbTable.getElementsByTagName("tr"));
            for (var i = 1; i < trs.size(); ++i) {
                tbody.removeChild(trs[i])
            }
            for (var i = 0; i < jbInfo.size(); ++i) {
                var tr = document.createElement("tr");
                for (var jj = 0; jj < 4; ++jj) {
                    var td = document.createElement("td");
                    td.align = "center";
                    tr.appendChild(td)
                }
                tbody.appendChild(tr);
                var tds = tr.getElementsByTagName("td");
                var jb = jbInfo[i];
                tds[0].innerHTML = LevelName[jb.value];
                tds[1].innerHTML = jb.startTime;
                tds[2].innerHTML = jb.endTime;
                tds[3].innerHTML = jb.isStart ? selectBtnTemplate.evaluate({
                    jb: jb.value
                }) : "否"
            }
        },
        onFailure: function () {
            processError(100)
        }
    })
}
function selectedJB(a) {
    user.set("bkjb", a);
    gotoStep("chooseaddr")
}
function getKDInfo() {
    cache.redo = getKDInfo;
    cache.cancel = null;
    new Ajax.Request("server/chooseAddr.php?bkjb=" + user.get("bkjb"), {
        method: "get",
        requestHeaders: {
            RequestType: "ajax"
        },
        onCreate: function () {
            layer.show();
            layer.setTitle("选择考点");
            layer.setMsg("页面载入中");
            layer.showLoading()
        },
        onSuccess: function (originalRequest) {
            var jsonObj = eval(originalRequest.responseText);
            if (jsonObj == null) {
                originalRequest.request.options.onFailure();
                return
            }
            layer.hide();
            var kdInfo = $A(jsonObj);
            var kdTable = $("kdTable");
            var tbody = kdTable.getElementsByTagName("tbody")[0];
            var kdInfoURLTemplate = new Template("<strong>#{kdmc}</strong>");
            var ySelectBtnTemplate = new Template("<input type='button' class='btn'  onclick=\"bookseat('chooseaddrForm',#{kdid},'#{kdmc}')\" onmousemove=\"this.className='btnmouseover'\" onmouseout=\"this.className='btn'\" style=\"width:60px\" value='预 定'/>");
            var nSelectBtn = '<input type="button" class="btn disabled" disabled="true" style="width:60px" value="预 定"/>';
            var trs = $A(kdTable.getElementsByTagName("tr"));
            for (var i = 2; i < trs.size(); ++i) {
                tbody.removeChild(trs[i])
            }
            var dq;
            var dqTd;
            for (var i = 0; i < kdInfo.size(); ++i) {
                var tr = document.createElement("tr");
                for (var jj = 0; jj < 5; ++jj) {
                    var td = document.createElement("td");
                    tr.appendChild(td)
                }
                tbody.appendChild(tr);
                var tds = tr.getElementsByTagName("td");
                var kd = kdInfo[i];
                var colindex = 0;
                if (dq != kd.dq) {
                    dq = kd.dq;
                    dqTd = tds[colindex++];
                    dqTd.className = "dqcss";
                    dqTd.innerHTML = kd.dq
                } else {
                    dqTd.rowSpan++;
                    tr.removeChild(tds[tds.length - 1])
                }
                tds[colindex].innerHTML = kd.dm;
                tds[++colindex].innerHTML = kdInfoURLTemplate.evaluate({
                    kdid: kd.id,
                    kdmc: kd.mc
                });
                tds[++colindex].innerHTML = IsFull[kd.vacancy];
                if (kd.vacancy) {
                    tds[++colindex].width = 62;
                    tds[colindex].innerHTML = ySelectBtnTemplate.evaluate({
                        kdid: kd.id,
                        kdmc: kd.mc
                    })
                } else {
                    tds[++colindex].width = 73;
                    tds[colindex].width = 66;
                    tds[colindex].innerHTML = nSelectBtn
                }
            }
        },
        onFailure: function (originalRequest) {
            processError(100)
        }
    })
}
function bookseat(c, b, a) {
    c = $(c);
    var d = c.getElementsBySelector("[name='chkImgCode']")[0];
    if (checkIsInValid(checkIsNull, d, function () {
        alert("请输入验证码")
    })) {
        return
    }
    user.set("bkkd", b);
    if (!confirm("您所选择的考试级别为：" + LevelName[user.get("bkjb")] + "，考试地点为：" + a)) {
        return
    }
    cache.redo = function () {
        bookseat(c, b, a)
    };
    cache.cancel = null;
    if (user.get("isChangeKD") == 0) {
        new Ajax.Request(getURL("book.php"), {
            method: "post",
            requestHeaders: {
                RequestType: "ajax"
            },
            parameters: serializeUser(["bkjb", "bkkd", "ksid", "ksIdNo", "chkImgFlag", "ksLoginFlag"]) + "&chkImgCode=" + $F(d),
            onCreate: function () {
                layer.show();
                layer.setTitle("定座");
                layer.setMsg("定座请求发送中...");
                layer.showLoading()
            },
            onSuccess: function (e) {
                var h = e.responseJSON;
                if (h == null) {
                    e.request.options.onFailure();
                    return
                }
                clearChkimgCache();
                if (h.retVal == 0) {
                    cache.remainAction304 = function () {
                        gotoStep("status")
                    };

                    function i() {
                        getChkimg("chooseaddrDiv")
                    }
                    cache.remainAction305 = i;
                    cache.remainAction306 = i;
                    cache.remainAction313 = i;
                    processError(h.errorNum);
                    return
                }
                var g = getURL("queryBook.php");
                var k = serializeUser(["ksid", "ksIdNo", "ksLoginFlag"]);
                var j = 10;
                var f = function () {
                    new Ajax.Request(g, {
                        method: "post",
                        requestHeaders: {
                            RequestType: "ajax"
                        },
                        parameters: k,
                        onCreate: function () {
                            layer.setMsg("定座请求结果查询中...")
                        },
                        onSuccess: function (l) {
                            var m = l.responseJSON;
                            if (m == null) {
                                l.request.options.onFailure();
                                return
                            }
                            if (m.retVal == 0) {
                                cache.getTickMsg310 = function (o, n) {
                                    return ""
                                };
                                cache.remainAction310 = f;
                                cache.remainAction304 = function () {
                                    gotoStep("status")
                                };
                                processError(m.errorNum)
                            } else {
                                updateUser(m);
                                layer.setMsg("预定座位成功");
                                layer.setTickMsg(3, dispatch)
                            }
                        },
                        onFailure: function () {
                            if (--j <= 0) {
                                cache.getMsg317 = function () {
                                    return "查询错误次数过多"
                                };
                                processError(317)
                            } else {
                                cache.getTickMsg316 = function (m, l) {
                                    return (l - m) + "秒后重试..."
                                };
                                cache.remainAction316 = f;
                                j = 10;
                                processError(316)
                            }
                        }
                    })
                };
                f()
            },
            onFailure: function () {
                processError(100)
            }
        })
    } else {
        new Ajax.Request(getURL("changebook.php"), {
            method: "post",
            requestHeaders: {
                RequestType: "ajax"
            },
            parameters: serializeUser(["bkjb", "bkkd", "ksid", "ksIdNo", "chkImgFlag", "ksLoginFlag"]) + "&chkImgCode=" + $F(d),
            onCreate: function () {
                layer.show();
                layer.setTitle("更改考点");
                layer.setMsg("更改考点请求发送中...");
                layer.showLoading()
            },
            onSuccess: function (e) {
                var f = e.responseJSON;
                if (f == null) {
                    e.request.options.onFailure();
                    return
                }
                clearChkimgCache();
                if (f.retVal == 0) {
                    processError(f.errorNum);
                    return
                }
                layer.setMsg("更改考点成功");
                layer.setTickMsg(3, dispatch)
            },
            onFailure: function () {
                processError(100)
            }
        })
    }
}
function getKsStatus() {
    cache.redo = getKsStatus;
    cache.cancel = null;
    var b = layer.getElementsBySelector("[name='msg']")[0];
    var a = new Template("#{kdmc}");
    new Ajax.Request(getURL("server/status.php"), {
        method: "post",
        requestHeaders: {
            RequestType: "ajax"
        },
        parameters: serializeUser(["ksid", "ksIdNo", "ksLoginFlag"]),
        onCreate: function () {},
        onSuccess: function (c) {
            var d = c.responseJSON;
            if (d == null) {
                c.request.options.onFailure();
                return
            }
            if (d.retVal == 0) {
                processError(d.errorNum);
                return
            } else {
                updateUser(d);
                var e = $("statusDiv");
                e.getElementsBySelector("[name='statusInfo']")[0].innerHTML = StatusInfo[d.status];
                e.getElementsBySelector("[name='selectedJB']")[0].innerHTML = LevelName[d.bkjb];
                e.getElementsBySelector("[name='selectedKDMC']")[0].innerHTML = a.evaluate({
                    kdid: d.bkkd,
                    kdmc: d.bkkdmc
                });
                e.getElementsBySelector("[name='ksTime']")[0].innerHTML = d.ksTime;
                $("changeKd").hide();
                $("cancelKd").hide();
                $("zkzShow").hide();
                if ((d.status == 1 || d.status == 2)) {
                    $("cancelKd").show()
                } else {
                    if (d.status == 3) {
                        if (d.remains > 0 && d.zkz == "" && d.canBook == true) {
                            $("changeKd").show()
                        }
                        if (d.zkz != "") {
                            e.getElementsBySelector("[name='zkz']")[0].innerHTML = d.zkz;
                            $("zkzShow").show()
                        }
                    }
                }
                var g = $("noticeList").getElementsBySelector("li");
                g.each(Element.hide);
                if (d.status == 1) {
                    g[0].show()
                } else {
                    if (d.status == 2) {
                        g[1].show();
                        g[2].show();
                        g[3].show()
                    } else {
                        if (d.status == 3) {
                            if (d.zkz == "") {
                                g[4].show()
                            } else {
                                g[5].show()
                            }
                        }
                    }
                }
                var f = $("payTable").getElementsBySelector("tr");
                f.each(Element.hide);
                if (d.zkz == "") {
                    f[d.status - 1].show()
                }
            }
        },
        onFailure: function () {
            processError(100)
        }
    })
}
function cancelYD() {
    if (confirm("是否要取消您预定的考试?")) {
        cache.redo = cancelYD;
        var a = layer.getElementsBySelector("[name='msg']")[0];
        new Ajax.Request(getURL("cancel.php"), {
            method: "post",
            requestHeaders: {
                RequestType: "ajax"
            },
            parameters: serializeUser(["bkjb", "bkkd", "ksid", "ksIdNo", "ksLoginFlag"]),
            onCreate: function () {
                layer.show();
                layer.setTitle("取消预定");
                layer.setMsg("取消预定请求发送中...");
                layer.showLoading()
            },
            onSuccess: function (b) {
                var c = b.responseJSON;
                if (c == null) {
                    b.request.options.onFailure();
                    return
                }
                if (c.retVal == 0) {
                    processError(c.errorNum);
                    return
                } else {
                    user.set("bkjb", 0);
                    user.set("bkkd", 0);
                    layer.setMsg("取消预定成功");
                    layer.setTickMsg(3, dispatch)
                }
            },
            onFailure: function () {
                processError(100)
            }
        })
    }
}
function changeKD() {
    if (user.get("remains")) {
        if (confirm("注意：你只有一次更改考点的机会！\n如果未能成功更改考点，系统仍保留你目前的预定座位和更改考点的机会。\n\n★你真的确定更改考点吗?")) {
            user.set("isChangeKD", 1);
            gotoStep("chooseaddr")
        }
    } else {
        alert("您已经更改过一次考点，不能再更改!")
    }
}
function processError(a) {
    var c;
    if (cache["getMsg" + a]) {
        c = cache["getMsg" + a];
        cache["getMsg" + a] = null
    }
    var b;
    if (cache["remainAction" + a]) {
        b = cache["remainAction" + a];
        cache["remainAction" + a] = null
    }
    var d;
    if (cache["getTickMsg" + a]) {
        d = cache["getTickMsg" + a];
        cache["getTickMsg" + a] = null
    }
    if (!c) {
        c = function () {
            return errorCode[a]
        }
    }
    if (layer) {
        layer.setMsg(c(a))
    }
    if (a == 101 || a == 102 || a == 303 || a == 315 || a == 316 || a == 310) {
        if (!b) {
            b = function () {
                gotoStep("login")
            }
        }
        layer.show();
        layer.setTickMsg(5, b, d);
        return
    }
    if (a >= 200 && a <= 206 || a >= 300 && a <= 317) {
        if (!b) {
            b = function () {
                cancel()
            }
        }
        if (layer) {
            layer.hide()
        }
        alert(c());
        b();
        return
    }
    if (!b) {
        b = dispatch
    }
    if (layer) {
        layer.show();
        layer.showBtn(5)
    }
}
function generateRandomFlag(h) {
    var f = "";
    var e = 10;
    var c = Math.pow(10, e);
    var b = 0;
    for (b = 0; b < h;) {
        var g = (Math.random() * c).toString();
        var i = g.indexOf(".");
        b += i;
        f += g.substr(0, i)
    }
    return f.substr(0, h)
}
function displayHome(c) {
    var d = '<li><a href="kdinfo.php?kdid=info" target="_blank">考点信息</a></li><li><a href="faq.html" target="_blank">常见问题</a></li><li><a href="ksxz.html" target="_blank">考生须知</a></li><li><a href="bmbz.html" target="_blank">报名步骤</a></li>';
    if (c == "login") {
        $("nabBarContent").innerHTML = d
    }
    if (c == "uploadPic" || c == "selectLevel" || c == "chooseaddr" || c == "status") {
        var a = '<li><a href="#" onclick="gotoURL(\'logout.php\');" >退出登录</a></li>';
        var b = '<li><a href="#" onclick="dispatch();" >我的状态</a></li>';
        $("nabBarContent").innerHTML = d + a + b
    }
}
function setChangeImgLink(c, d) {
    var b = '<label class="link" onclick="getChkimgAjax(\'' + c + "');\" onmouseover=\"this.className='hover'\" onmouseout=\"this.className='link'\">看不清楚,换一张</label>";
    var a = "更换中,请稍候...";
    var e = $(c);
    if (d) {
        e.getElementsBySelector("[name='changeMsg']")[0].innerHTML = b
    } else {
        e.getElementsBySelector("[name='changeMsg']")[0].innerHTML = a
    }
}
function getUploadPicInfo() {
    var a = user.get("ksid");
    $("uploadBtn").disable = true;
    cache.redo = getUploadPicInfo;
    cache.cancel = null;
    new Ajax.Request("server/uploadPic.php", {
        method: "post",
        requestHeaders: {
            RequestType: "ajax"
        },
        parameters: serializeUser(["ksid"]),
        onCreate: function () {
            layer.show();
            layer.setTitle("上传照片");
            layer.setMsg("页面载入中");
            layer.showLoading()
        },
        onSuccess: function (c) {
            var d = c.responseJSON;
            if (d == null) {
                c.request.options.onFailure();
                return
            }
            layer.hide();
            var b = 0;
            Object.keys(d).each(function (f) {
                if (f == "formAction") {
                    $("photo_form").action = d[f]
                } else {
                    if (f == "hasPhoto") {
                        b = d[f]
                    } else {
                        var e = "photo_" + f;
                        $(e).value = d[f]
                    }
                }
            });
            if (b == 1) {
                user.set("ksImgSrc", $F("photo_photoSrc"));
                gotoStep("selectLevel")
            }
        },
        onFailure: function () {
            processError(100)
        }
    })
}
function getRecutPicInfo() {
    var a = user.get("ksid");
    cache.redo = getRecutPicInfo;
    cache.cancel = null;
    new Ajax.Request("recutPic.php", {
        method: "post",
        requestHeaders: {
            RequestType: "ajax"
        },
        parameters: serializeUser(["ksid"]),
        onSuccess: function (c) {
            var e = c.responseJson;
            if (e == null) {
                c.request.options.onFailure();
                return
            }
            if (e.retVal == 0) {
                processError(e.errorNum);
                return
            }
            var b = 0;
            var d = user.get("step") + "Div";
            Object.keys(e).each(function (f) {
                if (f == "formAction") {
                    $(d).getElementsBySelector("[name='recutForm']").each(function (g) {
                        g.action = e[f]
                    })
                } else {
                    if (f == "hasPhoto") {
                        b = e[f]
                    } else {
                        outputRecutInfo(d, f, e[f])
                    }
                }
            });
            if (b == 0) {
            	gotoStep("uploadPic")
            } else {
                if (b == 1) {
                    $(d).getElementsBySelector("[name='recutLinkDiv']").each(function (f) {
                        f.style.display = "block"
                    })
                }
            }
        },
        onFailure: function () {
            processError(100)
        }
    })
}
function reCutPic() {
    var a = user.get("step");
    $(a + "Div").getElementsBySelector("[name='recutForm']").each(function (b) {
        b.submit()
    })
}
function outputRecutInfo(b, a, c) {
    var d = $(b);
    d.getElementsBySelector("[name='" + a + "']").each(function (e) {
        e.value = c
    })
}
function registerIndex() {
    user.set("stepr", "agreement");
    window.location.href = "registerIndex.php"
}
function queryPic() {
    var e = "http://up.etest.net.cn/checkUpload.php";
    if ((new RegExp(".edu.cn")).test(window.location.href.toLowerCase())) {
        e = "http://up.etest.edu.cn/checkUpload.php"
    }
    var d = $F("photo_neeaid");
    var c = $F("photo_testid");
    var b = $F("photo_backUrl");
    var a = $F("photo_projectName");
    e = e + "?neeaid=" + d + "&testid=" + c + "&projectName=" + a + "&backUrl=" + b;
    window.location.href = e
};