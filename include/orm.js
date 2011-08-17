var userModel;
userModel = function () {
    var a = new Object();
    a.ksid = "";
    a.ksIdNo = "";
    a.ksXing = "";
    a.ksMing = "";
    a.ksPXing = "";
    a.ksPMing = "";
    a.ksXb = "";
    a.ksCsrq = "";
    a.bkjb = "";
    a.bkkd = "";
    a.bkkdmc = "";
    a.payed = "";
    a.remains = 1;
    a.isChangeKD = 0;
    a.ksLoginFlag = "";
    a.chkImgFlag = "";
    a.chkImgSrc = "";
    a.step = "login";
    a.sFlag = "";
    a.ksIdType = "";
    a.ksImgSrc = "";
    a.stepr = "";
    this.get = function (b) {
        a[b] = cookie.getCookie(b, a[b]);
        return a[b]
    }, this.set = function (b, c) {
        if (!(a[b] == undefined)) {
            a[b] = c;
            cookie.writeCookie(b, c, null)
        } else {}
    }
};