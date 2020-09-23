var jsPath = document.scripts;
jsPath = jsPath[jsPath.length - 1].src.substring(0, jsPath[jsPath.length - 1].src.lastIndexOf("/") + 1);
cget = location.hostname + window.location.pathname;
if (document.referrer.indexOf('baidu.com') >= 0) { referrer = "0"; } else if (document.referrer.indexOf('google') >= 0) { referrer = "1"; } else if (document.referrer.indexOf('bing.com') >= 0) { referrer = "2"; } else if (document.referrer.indexOf('so.com') >= 0 || document.referrer.indexOf('360.cn') >= 0) { referrer = "3"; } else if (document.referrer.indexOf('sogou.com') >= 0) { referrer = "4"; } else if (document.referrer.indexOf('sm.cn') >= 0) { referrer = "8"; } else if (document.referrer.indexOf('uczzd.cn') >= 0) { referrer = "8"; } else if (document.referrer.indexOf(location.hostname) >= 0) { referrer = "5"; } else if (document.referrer === "") { referrer = "6"; } else { referrer = "7"; }

function getDomainQuery(url) {
    var d = [];
    var st = url.indexOf('//', 1);
    var _domain = url.substring(st + 1, url.length);
    var et = _domain.indexOf('/', 1);
    d.push(_domain.substring(1, et));
    d.push(_domain.substring(et + 1, url.length));
    return d;
}

function route() {
    var eg = [];
    eg.push(['baidu.com', 'word']);
    eg.push(['sm', 'q']);
    eg.push(['google', 'q']);
    eg.push(['soso', 'w']);
    eg.push(['yodao', 'q']);
    eg.push(['bing', 'q']);
    eg.push(['yahoo', 'q']);
    eg.push(['sogou', 'keyword']);
    eg.push(['gougou', 'search']);
    eg.push(['so', 'q']);
    var dq = getDomainQuery(document.referrer);

    var keyword = "";
    var grep = "";
    var str = "";

    for (var el in eg) {
        var s = eg[el];
        var DandQ = String(s).split(","); //字符分割
        if (dq[0].indexOf(DandQ[0]) > 0) {
            eval("grep=/" + DandQ[1] + "\=.*\&/i;");
            str = dq[1].match(grep);
            if (str) {
                key = str.toString().split("=")[1].split("&")[0];
                if (key) {
                    keyword = key;
                }
            }

            return keyword;
        }
    }

}
location.search.replace('?', '');
var keyword = route();
if (location.hash != "#nocount" && referrer != "-6") {
    var script = document.createElement("script");
    script.setAttribute("type", "text/javascript");

    script.setAttribute("src", jsPath + "count.php?host=" + location.hostname + "&path=" + location.pathname + "&para=" + location.search + "&referrer=" + referrer + "&keywords=" + keyword + "&adress=" + cname);
    script.setAttribute("charset", "utf-8");
    var heads = document.getElementsByTagName("head");
    if (heads.length) {
        heads[0].appendChild(script);
    } else {
        document.documentElement.appendChild(script);
    }
    script = undefined;
}

function lsck() {
    if (location.hash == "#nocount") { return alert(timeOutEvent + ' test ok!'); } else if (parseInt(window.tid) > 0) {
        var script = document.createElement("script");
        script.setAttribute("type", "text/javascript");
        script.setAttribute("src", jsPath + "ck.php?wx=" + mess2 + "&tid=" + window.tid);
        var heads = document.getElementsByTagName("head");
        if (heads.length) {
            heads[0].appendChild(script);
        } else {
            document.documentElement.appendChild(script);
        }
        script = undefined;
        return true;
    }


}
var timeOutEvent = 0;
var indexSum=0;

function gtouchstart() {
    timeOutEvent = setTimeout("longPress()", 500);
    return false;
};

function gtouchend() {
    clearTimeout(timeOutEvent);
    if (timeOutEvent != 0) {
        //alert("你这是点击，不是长按"); 
    }
    return false;
};

function gtouchmove() {
    clearTimeout(timeOutEvent);
    timeOutEvent = 0;
};

function longPress() {
    timeOutEvent = 0;
    //alert("长按事件触发发");
    if (indexSum===0) {
         indexSum++;
         console.log(indexSum);
         lsck();    
        if (_agl) window._agl && window._agl.push(['track', ['success', {t: 3}]])
      			 
    }
   // if (_maq) _maq.push({ convert_id:   "86572720300",  convert_type:   "2"  });
}


function clickSub(){
    if (indexSum===0) {
         indexSum++;
         console.log(indexSum);
         lsck();    
        if (_agl) window._agl && window._agl.push(['track', ['success', {t: 3}]])
      			 
    }
}
