var Province = function (a, c, b) {
    this.name = a;
    this.citys = c;
    this.code = b
};
var City = function (a, b) {
    this.name = a;
    this.code = b
};
var BeiJ = new Province("北京", [new City("北京")]);
var ShangH = new Province("上海", [new City("上海")]);
var TianJ = new Province("天津", [new City("天津")]);
var ChongQ = new Province("重庆", [new City("重庆")]);
var AnH = new Province("安徽", [new City("合肥"), new City("宿州"), new City("淮北"), new City("阜阳"), new City("蚌埠"), new City("淮南"), new City("滁州"), new City("马鞍山"), new City("芜湖"), new City("铜陵"), new City("安庆"), new City("黄山"), new City("六安"), new City("巢湖"), new City("池州"), new City("宣城"), new City("亳州")]);
var FuJ = new Province("福建", [new City("厦门"), new City("福州"), new City("南平"), new City("三明"), new City("莆田"), new City("泉州"), new City("漳州"), new City("龙岩"), new City("宁德")]);
var GanS = new Province("甘肃", [new City("兰州"), new City("嘉峪关"), new City("金昌"), new City("白银"), new City("天水"), new City("酒泉"), new City("张掖"), new City("武威"), new City("庆阳"), new City("平凉"), new City("定西"), new City("陇南")]);
var GuangD = new Province("广东", [new City("广州"), new City("深圳"), new City("清远"), new City("韶关"), new City("河源"), new City("梅州"), new City("潮州"), new City("汕头"), new City("揭阳"), new City("汕尾"), new City("惠州"), new City("东莞"), new City("珠海"), new City("中山"), new City("江门"), new City("佛山"), new City("肇庆"), new City("云浮"), new City("阳江"), new City("茂名"), new City("湛江")]);
var GuiZ = new Province("贵州", [new City("贵阳"), new City("六盘水"), new City("遵义"), new City("安顺")]);
var HeB = new Province("河北", [new City("石家庄"), new City("邯郸"), new City("唐山"), new City("保定"), new City("秦皇岛"), new City("邢台"), new City("张家口"), new City("承德"), new City("沧州"), new City("廊坊"), new City("衡水")]);
var HeiLJ = new Province("黑龙江", [new City("哈尔滨"), new City("齐齐哈尔"), new City("黑河"), new City("大庆"), new City("伊春"), new City("鹤岗"), new City("佳木斯"), new City("双鸭山"), new City("七台河"), new City("鸡西"), new City("牡丹江"), new City("绥化")]);
var HeN = new Province("河南", [new City("郑州"), new City("开封"), new City("洛阳"), new City("平顶山"), new City("安阳"), new City("鹤壁"), new City("新乡"), new City("焦作"), new City("濮阳"), new City("许昌"), new City("漯河"), new City("三门峡"), new City("南阳"), new City("商丘"), new City("周口"), new City("驻马店"), new City("信阳")]);
var HuB = new Province("湖北", [new City("武汉"), new City("十堰"), new City("襄樊"), new City("荆门"), new City("孝感"), new City("黄冈"), new City("鄂州"), new City("黄石"), new City("咸宁"), new City("荆州"), new City("宜昌"), new City("随州")]);
var HuN = new Province("湖南", [new City("长沙"), new City("张家界"), new City("常德"), new City("益阳"), new City("岳阳"), new City("株洲"), new City("湘潭"), new City("衡阳"), new City("郴州"), new City("永州"), new City("邵阳"), new City("怀化"), new City("娄底")]);
var JiL = new Province("吉林", [new City("长春"), new City("吉林市"), new City("白城"), new City("松原"), new City("四平"), new City("辽源"), new City("通化"), new City("白山"), new City("延吉")]);
var JiangX = new Province("江西", [new City("南昌"), new City("九江"), new City("景德镇"), new City("鹰潭"), new City("新余"), new City("萍乡"), new City("赣州"), new City("上饶"), new City("抚州"), new City("宜春"), new City("吉安")]);
var JiangS = new Province("江苏", [new City("南京"), new City("徐州"), new City("连云港"), new City("宿迁"), new City("淮安"), new City("盐城"), new City("扬州"), new City("泰州"), new City("南通"), new City("镇江"), new City("常州"), new City("无锡"), new City("苏州")]);
var LiaoN = new Province("辽宁", [new City("沈阳"), new City("大连"), new City("朝阳"), new City("阜新"), new City("铁岭"), new City("抚顺"), new City("本溪"), new City("辽阳"), new City("鞍山"), new City("丹东"), new City("营口"), new City("盘锦"), new City("锦州"), new City("葫芦岛")]);
var ShanD = new Province("山东", [new City("济南"), new City("青岛"), new City("聊城"), new City("德州"), new City("东营"), new City("淄博"), new City("潍坊"), new City("烟台"), new City("威海"), new City("日照"), new City("临沂"), new City("枣庄"), new City("济宁"), new City("泰安"), new City("莱芜"), new City("滨州"), new City("菏泽")]);
var ShanX = new Province("陕西", [new City("西安"), new City("延安"), new City("铜川"), new City("渭南"), new City("咸阳"), new City("宝鸡"), new City("汉中"), new City("榆林"), new City("商洛"), new City("安康")]);
var ShanXi = new Province("山西", [new City("太原"), new City("大同"), new City("朔州"), new City("阳泉"), new City("长治"), new City("晋城"), new City("忻州"), new City("吕梁"), new City("晋中"), new City("临汾"), new City("运城")]);
var SiC = new Province("四川", [new City("成都"), new City("广元"), new City("绵阳"), new City("德阳"), new City("南充"), new City("广安"), new City("遂宁"), new City("内江"), new City("乐山"), new City("自贡"), new City("泸州"), new City("宜宾"), new City("攀枝花"), new City("巴中"), new City("达州"), new City("资阳"), new City("眉山"), new City("雅安")]);
var YunN = new Province("云南", [new City("昆明"), new City("曲靖"), new City("玉溪"), new City("丽江"), new City("昭通"), new City("思茅"), new City("临沧"), new City("保山")]);
var ZheJ = new Province("浙江", [new City("杭州"), new City("宁波"), new City("湖州"), new City("嘉兴"), new City("舟山"), new City("绍兴"), new City("衢州"), new City("金华"), new City("台州"), new City("温州"), new City("丽水")]);
var QinH = new Province("青海", [new City("西宁")]);
var NeiMG = new Province("内蒙古", [new City("呼和浩特"), new City("包头"), new City("乌海"), new City("赤峰"), new City("呼伦贝尔"), new City("通辽"), new City("乌兰察布"), new City("鄂尔多斯"), new City("巴彦淖尔")]);
var GuangX = new Province("广西壮族自治区", [new City("南宁"), new City("桂林"), new City("柳州"), new City("梧州"), new City("贵港"), new City("玉林"), new City("钦州"), new City("北海"), new City("防城港"), new City("崇左"), new City("百色"), new City("河池"), new City("来宾"), new City("贺州")]);
var NingX = new Province("宁夏回族自治区", [new City("银川"), new City("石嘴山"), new City("吴忠"), new City("中卫"), new City("固原")]);
var XingJ = new Province("新疆", [new City("乌鲁木齐"), new City("克拉玛依")]);
var XiZ = new Province("西藏", [new City("拉萨")]);
var HaiN = new Province("海南", [new City("海口"), new City("三亚")]);
var Provinces = [BeiJ, ShangH, TianJ, ChongQ, AnH, FuJ, GanS, GuangD, GuiZ, HeB, HeiLJ, HeN, HuB, HuN, JiL, JiangX, JiangS, LiaoN, ShanD, ShanX, ShanXi, SiC, YunN, ZheJ, QinH, NeiMG, GuangX, NingX, XingJ, XiZ, HaiN];

function Provinces2Select(e, f, a, b) {
    e = $(e);
    f = $(f);
    a = $(a);
    b = $(b);
    e.childElements().each(function (h) {
        h.remove()
    });
    var d = document.createElement("option");
    d.innerHTML = "-请选择省份-";
    d.value = "";
    e.appendChild(d);
    Provinces.each(function (h) {
        var i = document.createElement("option");
        i.value = h.name;
        i.innerHTML = h.name;
        i.bzObj = h;
        e.appendChild(i)
    });
    var c = document.createElement("option");
    c.innerHTML = "-请选择城市-";
    c.value = "";
    f.appendChild(c);
    e.onchange = function () {
        a.value = e.value;
        var i = e.options[e.selectedIndex];
        if (i.bzObj != null) {
            Citys2Select(f, i.bzObj.citys);
            if (b.value) {
                var i = f.getElementsBySelector("[value=" + b.value + "]")[0];
                if (i) {
                    i.selected = "selected"
                } else {
                    b.value = ""
                }
            }
        } else {
            f.childElements().each(function (j) {
                j.remove()
            });
            var h = document.createElement("option");
            h.innerHTML = "-请选择城市-";
            h.value = "";
            f.appendChild(h)
        }
    };
    f.onchange = function () {
        b.value = f.value
    };
    if (a.value) {
        var g = e.getElementsBySelector("[value=" + a.value + "]")[0];
        g.selected = "selected";
        e.onchange()
    }
}
function Citys2Select(c, a) {
    c.childElements().each(function (d) {
        d.remove()
    });
    var b = document.createElement("option");
    b.innerHTML = "-请选择城市-";
    b.value = "";
    c.appendChild(b);
    a.each(function (e) {
        var d = document.createElement("option");
        d.value = e.name;
        d.innerHTML = e.name;
        d.bzObj = e;
        c.appendChild(d)
    })
}
function jzProvincesToSelect(b) {
    jzProvinceSelect = $(b);
    jzProvinceSelect.childElements().each(function (c) {
        c.remove()
    });
    var a = document.createElement("option");
    a.innerHTML = "-请选择省份-";
    a.value = "";
    jzProvinceSelect.appendChild(a);
    Provinces.each(function (c) {
        var d = document.createElement("option");
        d.value = c.name;
        d.innerHTML = c.name;
        d.bzObj = c;
        jzProvinceSelect.appendChild(d)
    })
}
function jzProvincesFillValue(c, a) {
    jzProvincesToSelect(c);
    var b = $(c);
    b.value = a;
    $(c).getElementsBySelector("[value=" + a + "]")[0].selected = "selected"
};