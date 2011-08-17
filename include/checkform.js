String.prototype.trim = function () {
    return this.replace(/(^\s*)|(\s*$)/g, "")
};

function regeditClick(c) {
    c.ksCsrq.value = c.year.value + "-" + c.month.value + "-" + c.day.value;
    puredigit = new RegExp("[０-９Ａ-Ｚａ-ｚ，。？＠　－＿＋－＊＼／［］｛｝；：＂＇︿“～！＃％”]");
    if ((puredigit.test(c.ksPXing.value)) || (puredigit.test(c.ksPMing.value)) || (puredigit.test(c.ksIDNO.value)) || (puredigit.test(c.year.value)) || (puredigit.test(c.ksPwd.value)) || (puredigit.test(c.ksEmail.value))) {
        alert("不要输入全角字符,请把您的输入法换成半角模式。");
        return false
    }
    puredigit = new RegExp("[^\u4e00-\u9fa5]");
    if (!c.onlyOne.checked) {
        if (puredigit.test(c.ksXing.value)) {
            alert("中文姓请输入中文.");
            c.ksXing.focus();
            return false
        }
        if (puredigit.test(c.ksMing.value)) {
            alert("中文名请输入中文.");
            c.ksMing.focus();
            return false
        }
        if (c.ksXing.value == "") {
            alert('请输入中文姓，如果您只有姓或名，请选中"我只有姓或名"');
            c.ksXing.focus();
            return false
        }
        if (c.ksMing.value == "") {
            alert('请输入中文名，如果您只有姓或名，请选中"我只有姓或名"');
            c.ksMing.focus();
            return false
        }
        if (c.ksXing.value.indexOf(c.ksMing.value) >= 0 || c.ksMing.value.indexOf(c.ksXing.value) >= 0) {
            if (!confirm("输入的中文姓或中文名可能有误，不要在中文名中输入完整姓名，例如姓名为王小刚则应该分别输入王和小刚,请检查!\n点击【确定】忽略错误提示并提交.\n点击【取消】重新填写.")) {
                c.ksXing.focus();
                return false
            }
        }
    } else {
        if (c.ksXing.value != "" && c.ksMing.value != "") {
            alert('请确保您只有姓或名，若不是，请不要选择"我只有姓或名"');
            c.onlyOne.focus();
            return false
        }
        if ((c.ksXing.value != "") && (puredigit.test(c.ksXing.value))) {
            alert("中文姓请输入中文或不输入.");
            c.ksXing.focus();
            return false
        }
        if ((c.ksMing.value != "") && (puredigit.test(c.ksMing.value))) {
            alert("中文名请输入中文或不输入.");
            c.ksMing.focus();
            return false
        }
        if ((c.ksXing.value == "") && (c.ksMing.value == "")) {
            alert("请输入中文姓或中文名.");
            c.ksXing.focus();
            return false
        }
    }
    puredigit = new RegExp("[^A-Za-z]");
    if (!c.onlyOne.checked) {
        if ((c.ksPXing.value == "") || (puredigit.test(c.ksPXing.value.trim()))) {
            alert("拼音姓请输入字母并不要输入空格.");
            c.ksPXing.focus();
            return false
        }
        if ((c.ksPMing.value == "") || (puredigit.test(c.ksPMing.value.trim()))) {
            alert("拼音名请输入字母并不要输入空格.");
            c.ksPMing.focus();
            return false
        }
    } else {
        if ((c.ksPXing.value != "") && (puredigit.test(c.ksPXing.value.trim()))) {
            alert("拼音姓请输入字母或不输入并不要输入空格.");
            c.ksPXing.focus();
            return false
        }
        if ((c.ksPMing.value != "") && (puredigit.test(c.ksPMing.value.trim()))) {
            alert("拼音名请输入字母或不输入并不要输入空格.");
            c.ksPMing.focus();
            return false
        }
        if ((c.ksPXing.value == "") && (c.ksPMing.value == "")) {
            alert("请输入拼音姓或拼音名.");
            c.ksPXing.focus();
            return false
        }
    }
    if (!((c.ksXB[0].checked) || (c.ksXB[1].checked))) {
        alert("请输入性别.");
        c.ksXB[0].focus();
        return false
    }
    if (c.ksIDType.value == "") {
        return false
    }
    var d = false;
    for (var a = c.ksIDType.length - 1; a >= 0; --a) {
        if (c.ksIDType[a].checked) {
            d = true;
            break
        }
    }
    if (!d) {
        alert("请选择您的证件类型.");
        c.ksIDType[0].focus();
        return false
    }
    if (c.ksIDNO.value == "") {
        alert("请输入证件号.");
        c.ksIDNO.focus();
        return false
    }
    if (c.year.value == "") {
        alert("请输入出生年份.");
        c.year.focus();
        return false
    }
    if ((c.ksPwd.value.length < 4) || (c.ksPwd.value.length > 16)) {
        alert("密码长度应该在4位~16位之间.");
        c.ksPwd.focus();
        return false
    }
    if (c.ksPwd.value != c.reformpwd.value) {
        alert("两次输入的密码不一致.");
        c.ksPwd.focus();
        return false
    }
    if (c.ksRemindAnswer.value == "") {
        alert("请输入密码提示问题答案");
        c.ksRemindAnswer.focus();
        return false
    }
    if (c.year.value != "") {
        puredigit = new RegExp("[^0-9]");
        if (puredigit.test(c.year.value)) {
            alert("出生年份请输入数字.");
            c.year.focus();
            return false
        }
    } else {
        alert("出生年份请输入数字.");
        c.year.focus();
        return false
    }
    var b = c.year.value;
    if ((parseInt(b, 10) < 1900) || (parseInt(b, 10) > 2020)) {
        alert("出生年份输入错误.");
        c.year.focus();
        return false
    }
    if (!checkIsValidDate(c.ksCsrq.value)) {
        alert("请输入正确的出生日期.");
        c.year.focus();
        return false
    }
    if (c.userqh.value == "") {
        alert("请输入区号.");
        c.userqh.focus();
        return false
    }
    if (c.usertel.value == "") {
        alert("请输入电话号码.");
        c.usertel.focus();
        return false
    }
    puredigit = new RegExp("[^0-9]");
    if (puredigit.test(c.userqh.value)) {
        alert("区号请输入数字.");
        c.userqh.focus();
        return false
    }
    if (c.userqh.value.length > 4) {
        alert("区号长度应小于5位.");
        c.userqh.focus();
        return false
    }
    puredigit = new RegExp("[^0-9]");
    if (puredigit.test(c.usertel.value)) {
        alert("电话号码请输入数字.");
        c.usertel.focus();
        return false
    }
    c.ksTel.value = c.userqh.value + "-" + c.usertel.value;
    puredigit = new RegExp("[^0-9]");
    if (c.ksMobile.value == "" || puredigit.test(c.ksMobile.value)) {
        alert("手机号码请输入数字.");
        c.ksMobile.focus();
        return false
    }
    if (c.ksMobile.value.length != 11) {
        alert("请输入11位手机号码.");
        c.ksMobile.focus();
        return false
    }
    if (c.ksEmail.value == "") {
        alert("EMail不能为空，请重新输入.");
        c.ksEmail.focus();
        return false
    }
    if (!checkEmail(c.ksEmail.value)) {
        alert("EMail输入错误，请重新输入.");
        c.ksEmail.focus();
        return false
    }
    if (c.wishjb.value == "") {
        alert("请输入您的报考意向:考试级别");
        c.wishjb.focus();
        return false
    }
    if (c.wishProvince.value == "") {
        alert("请输入您的报考意向:考点所在的省份");
        c.selectProvince.focus();
        return false
    }
    if (c.wishCity.value == "") {
        alert("请输入您的报考意向:考点所在的城市");
        c.selectCity.focus();
        return false
    }
    if (c.ksJzProvice.value == "") {
        alert("请输入您的报考意向:现居住省份");
        c.ksJzProvice.focus();
        return false
    }
    if (c.ksJzCity.value == "") {
        alert("请输入您的报考意向:现居住城市");
        c.ksJzCity.focus();
        return false
    }
    if (!c.guarantee.checked) {
        alert("您必须保证信息的真实和准确.");
        c.guarantee.focus();
        return false
    }
    if (c.ksIDType[0].checked) {
        Retsfz = issfzok(c.ksIDNO.value);
        if (Retsfz != "") {
            alert("身份证检查如下错误:\n  " + Retsfz);
            c.ksIDNO.focus();
            return false
        }
        sb = isbirthdayok(c);
        if (sb != "") {
            alert("身份证的出生日期和实际填写的出生日期不符：" + sb + ",请检查!");
            c.ksIDNO.focus();
            return false
        }
    } else {
        Retsfz = issfzok(c.ksIDNO.value);
        if (Retsfz == "") {
            alert("您填写的号码为身份证，请选择证件类型为中华人民共和国居民身份证！");
            c.ksIDNO.focus();
            return false
        }
    }
    if (confirm(getAllMSG(c))) {
        c.ksPXing.value = c.ksPXing.value.trim();
        c.ksPMing.value = c.ksPMing.value.trim();
        c.ksIDNO.value = c.ksIDNO.value.replace("(", "（");
        c.ksIDNO.value = c.ksIDNO.value.replace(")", "）");
        return true
    }
}
function checkIsValidDate(c) {
    if (c == "") {
        return false
    }
    var b = /^((\d{4})|(\d{2}))-(\d{1,2})-(\d{1,2})$/;
    if ((b.exec(c)) == null) {
        return false
    }
    var d = c.split("-");
    if (parseInt(d[0], 10) < 100) {
        d[0] = 2000 + parseInt(d[0], 10) + ""
    }
    var a = new Date(d[0], (parseInt(d[1], 10) - 1) + "", d[2]);
    if ((a.getFullYear() == parseInt(d[0], 10)) && (a.getMonth() == (parseInt(d[1], 10) - 1)) && (a.getDate() == (parseInt(d[2], 10)))) {
        return true
    } else {
        return false
    }
}
function checkEmail(a) {
    var b = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
    return b.exec(a)
}
function issfzok(f) {
    var e = "11,12,13,14,15,21,22,23,31,32,33,34,35,36,37,41,42,43,44,45,46,50,51,52,53,54,61,62,63,64,65,71,81,82,91,";
    var c = 0;
    var g = "";
    var a = "";
    if (f.length == 15) {
        a = f.substr(0, 6) + "19" + f.substr(6, 9) + "0"
    } else {
        if (f.length == 18) {
            a = f
        } else {
            return "身份证位数不对."
        }
    }
    xb = Number(a.substr(16, 1)) % 2;
    if (!/^\d{17}(\d|x)$/i.test(a)) {
        return "身份证中有非法字符."
    }
    a = a.replace(/x$/i, "a");
    if (e.indexOf(a.substr(0, 2)) == -1) {
        return "非法地区."
    }
    sBirthday = a.substr(6, 4) + "-" + Number(a.substr(10, 2)) + "-" + Number(a.substr(12, 2));
    var h = new Date(sBirthday.replace(/-/g, "/"));
    if (sBirthday != (h.getFullYear() + "-" + (h.getMonth() + 1) + "-" + h.getDate())) {
        return "身份证错误：非法生日."
    }
    if (f.length == 18) {
        for (var b = 17; b >= 0; b--) {
            c += (Math.pow(2, b) % 11) * parseInt(a.charAt(17 - b), 11)
        }
        if (c % 11 != 1) {
            return "校验错误."
        }
    }
    return ""
}
function isbirthdayok(a) {
    if (a.ksIDNO.value.length == 15) {
        s = a.ksIDNO.value.substr(0, 6) + "19" + a.ksIDNO.value.substr(6, 9) + "0"
    } else {
        s = a.ksIDNO.value
    }
    months = a.month.value;
    days = a.day.value;
    if (months.length < 2) {
        months = "0" + months
    }
    if (days.length < 2) {
        days = "0" + days
    }
    if (s.substr(6, 4) != a.year.value) {
        return "年份不符"
    } else {
        if (s.substr(10, 2) != months) {
            return "月份不符"
        } else {
            if (s.substr(12, 2) != days) {
                return "日期不符"
            } else {
                return ""
            }
        }
    }
}
function getAllMSG(a) {
    var b;
    b = "**************************************************************\n";
    b += "\t中文姓名:\t" + a.ksXing.value + a.ksMing.value + "\t*(请仔细核对)\n";
    b += "\t拼音姓名:\t" + a.ksPXing.value + "\t" + a.ksPMing.value + "\n";
    for (i = 0; i < a.ksXB.length; i++) {
        if (a.ksXB[i].checked) {
            b += "\t性        别:\t" + a.ksXB[i].value + "\n"
        }
    }
    for (j = 0; j < a.ksIDType.length; j++) {
        if (a.ksIDType[j].checked) {
            if (j == 0) {
                b += "\t证件类型:\t中华人民共和国居民身份证\n"
            } else {
                if (j == 1) {
                    b += "\t证件类型:\t台湾居民往来大陆通行证\n"
                } else {
                    if (j == 2) {
                        b += "\t证件类型:\t港澳居民身份证/往来内地通行证\n"
                    } else {
                        if (j == 3) {
                            b += "\t证件类型:\t护照\n"
                        } else {
                            if (j == 4) {
                                b += "\t证件类型:\t军人证件\n"
                            }
                        }
                    }
                }
            }
        }
    }
    b += "\t证  件 号:\t" + a.ksIDNO.value.toUpperCase() + "\t*(作为登录ID)\n";
    b += "\t出生日期:\t" + a.ksCsrq.value + "\n";
    b += "\t密码提示问题:\t" + a.ksRemind.value + "\n";
    b += "\t提示问题答案:\t" + a.ksRemindAnswer.value + "\n";
    b += "\t电话号码:\t" + a.ksTel.value + "\n";
    b += "\t手机号码:\t" + a.ksMobile.value + "\n";
    if (a.ksEmail.value != "") {
        b += "\tEMail:\t\t" + a.ksEmail.value + "\n"
    }
    b += "\t首选考试级别:\t" + LevelName[a.wishjb.value] + "\n";
    b += "\t首选考点城市:\t" + a.wishProvince.value + "-" + a.wishCity.value + "\n";
    b += "\t现居住省份：\t" + a.ksJzProvice.value + "\n";
    b += "\t现居住城市：\t" + a.ksJzCity.value + "\n";
    b += "**************************************************************\n\n";
    b += "以上是你填写的注册信息.\n请仔细核对,确认无误后,点击【确定】提交,点击【取消】修改.\n";
    return b
};