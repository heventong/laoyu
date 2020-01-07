var strFlag = -1;
var sourceURL = "直接访问or无法获取";
if(document.referrer) var sourceURL = document.referrer;
var search = getDomain(sourceURL);		/*来路域名*/
var source = sourceInfo(sourceURL);		/*搜索词*/
var thisTemplate = template;
 window._agl = window._agl || [];
        (function () {
            _agl.push(
                ['production', '_f7L2XwGXjyszb4d1e2oxPybgD']
            );
            (function () {
                var agl = document.createElement('script');
                agl.type = 'text/javascript';
                agl.async = true;
                agl.src = 'https://fxgate.baidu.com/angelia/fcagl.js?production=_f7L2XwGXjyszb4d1e2oxPybgD';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(agl, s);
            })();
        })();

/**
 * 构造HTML DOM模型执行
 */
$(function(){ 	
	var onWechat = false;
    var keyword =  getRequest(window.location.href,"wd");
	
	$(document).on("tap",".wechatCode",function(){	
        doTraceSubmit(stxlwx,sourceURL,source,"tap",cip,cname,uvKeyt,oKeyt,thisTemplate,strFlag,5);			
		
		if(!onWechat){
			_czc.push(['_trackEvent', "意向",stxlwx,thisTemplate]);			
window._agl && window._agl.push(['track', ['success', {t: 18}]])

		}
		onWechat = true;		
    });
   $(document).on("taphold",".wechatCode",function(){
        doTraceSubmit(stxlwx,sourceURL,source,"taphold",cip,cname,uvKeyt,oKeyt,thisTemplate,strFlag,5);				
		
		if(!onWechat){
			_czc.push(['_trackEvent', "意向",stxlwx,thisTemplate]);			
window._agl && window._agl.push(['track', ['success', {t: 18}]])

		}
		onWechat = true;			
    });
	$(document).on("copy",".wechatCode",function(){
        doTraceSubmit(stxlwx,sourceURL,source,"copy",cip,cname,uvKeyt,oKeyt,thisTemplate,strFlag,5);
		
		if(!onWechat){
			_czc.push(['_trackEvent', "意向",stxlwx,thisTemplate]);			
window._agl && window._agl.push(['track', ['success', {t: 18}]])

		}
		onWechat = true;			
    });
	$(document).on("click",".wechatCode",function(){
        doTraceSubmit(stxlwx,sourceURL,source,"click",cip,cname,uvKeyt,oKeyt,thisTemplate,strFlag,5);
		
		if(!onWechat){
			_czc.push(['_trackEvent', "意向",stxlwx,thisTemplate]);			
window._agl && window._agl.push(['track', ['success', {t: 18}]])

		}
		onWechat = true;	
    });
	$(document).on("touchstart",".wechatCode",function(){
        doTraceSubmit(stxlwx,sourceURL,source,"touchstart",cip,cname,uvKeyt,oKeyt,thisTemplate,strFlag,5);
		
		if(!onWechat){
			_czc.push(['_trackEvent', "意向",stxlwx,thisTemplate]);			
window._agl && window._agl.push(['track', ['success', {t: 18}]])

		}
		onWechat = true;			
    });
	$(document).on("touchend",".wechatCode",function(){
        doTraceSubmit(stxlwx,sourceURL,source,"touchend",cip,cname,uvKeyt,oKeyt,thisTemplate,strFlag,5);
		if(!onWechat){
			_czc.push(['_trackEvent', "意向",stxlwx,thisTemplate]);			
window._agl && window._agl.push(['track', ['success', {t: 18}]])

		}
		onWechat = true;		
    });
	$(document).on("touchmove",".wechatCode",function(){
        doTraceSubmit(stxlwx,sourceURL,source,"touchmove",cip,cname,uvKeyt,oKeyt,thisTemplate,strFlag,5);
		
		if(!onWechat){
			_czc.push(['_trackEvent', "意向",stxlwx,thisTemplate]);			
window._agl && window._agl.push(['track', ['success', {t: 18}]])

		}
		onWechat = true;		
    });
	_czc.push(['_trackEvent', "展现",stxlwx,thisTemplate]);
});
/**
 *
 * @param wurl
 * @param evenName
 * @param pvalue
 */
function doTraceSubmit(stxlwx,sourceURL,source,evenName,cip,cname,uvKeyt,oKeyt,thisTemplate,invisitid,stepdesc){
    console.info("doTraceSubmit->evenName="+evenName+"  invisitid="+invisitid+"  stepdesc="+stepdesc);

    var domainName = window.location.host;
    var thisurl =    window.location.href;
	var keyword =  getRequest(window.location.href,"wd");
    var equipment = getOsVersion();	
	var GPU = "Null";	 
	if (canvasApp()){
		var gl = document.createElement('canvas').getContext('webgl');		
		var debugInfo = gl.getExtension('WEBGL_debug_renderer_info');
		var GPU = gl.getParameter(debugInfo.UNMASKED_RENDERER_WEBGL);	
	}

	var other = "";
	other = other + " |>platform:" + navigator.platform;
	other = other + " |>height:" + window.screen.height; 
	other = other + " |>width:" + window.screen.width;
	other = other + " |>cookie:" + navigator.cookieEnabled;
	other = other + " |>GPU:" + GPU;
	
	
	// var ojbData ={operation:"wechatRecipient",wechat:stxlwx,template:thisTemplate,domainName:domainName,thisurl:thisurl,keyword:keyword,search:sourceURL,source:source,wip:cip,region:cname,equipment:equipment,evenName:evenName,userAgent:navigator.userAgent,other:other,uvKeyt:uvKeyt,oKeyt:oKeyt,visitid:invisitid,stepdesc:stepdesc};
	if(evenName =='load'||evenName =='copy'){
	ojbData = {'type':evenName,'local_url':window.location.href,'weixin':stxlwx};
	var curdUrl = "http://heven.top:8000/app/log";
		$.post(curdUrl, ojbData,function (rst){
		var objJson = eval(rst);
		if(objJson.result>'0') strFlag=objJson.result;
		console.info("evenName="+evenName+"  invisitid="+invisitid+"  stepdesc="+stepdesc+" testid="+strFlag);
	});    
	}

	// /*var curdUrl2 = "http://sql.yoranges.com/server_local/index.php";*/

	// /*curAjax(ojbData,curdUrl2);*/
}
/**
**function curAjax(ojbData,curdUrl) jsonp Ajax远程提交
**@param ojbData网址	json数据
**@param curdUrl网址
*/
function curAjax(ojbData,curdUrl){
	$.ajax({  
		type:'get',
		url: curdUrl,
		async : false,
		dataType : 'jsonp',
		jsonp:"jsoncallback",
		data: ojbData, 
		success  : function(data) {
			return true;
		},  
		error : function() {
			return false; 
		}  
	}); 
}

/**
**function getDomain(url) 获取链接URL中的域名部分
**@param url网址
*/
function getDomain(url){
    url = url.replace(/.+[\/](([A-Z0-9a-z]+\.)+[A-Z0-9a-z]+)\/[^\/].+/,"$1");
	if(!url) url = 'Null';
    return url; //返回域名值
}
/**
**function sourceInfo(sourceURL) 获取搜索来源中的搜索词
**@param sourceURL搜索来源网址
*/			
function sourceInfo(sourceURL){
	source = "无法获取";
	if(sourceURL.indexOf("baidu.com") != -1){
		source = getRequest(sourceURL,'word');
		if(!source) source = getRequest(sourceURL,'wd');		
		if(!source) source = getRequest(sourceURL,'oq');		
	}else if(sourceURL.indexOf("sogou.com") != -1){
		source = getRequest(sourceURL,'keyword');
		if(!source) source = getRequest(sourceURL,'query');		
	}else if(sourceURL.indexOf("so.com") != -1){
		source = getRequest(sourceURL,'q');
		if(!source) source = getRequest(sourceURL,'query');		
	}else if(sourceURL.indexOf("sm.cn") != -1){
		source = getRequest(sourceURL,'q');
		if(!source) source = getRequest(sourceURL,'query');		
	}else if(sourceURL.indexOf("google.com") != -1){
		source = getRequest(sourceURL,'q');
		if(!source) source = getRequest(sourceURL,'oq');		
		if(!source) source = getRequest(sourceURL,'query');		
	}else if(sourceURL.indexOf("bing.com") != -1){
		source = getRequest(sourceURL,'q');
		if(!source) source = getRequest(sourceURL,'oq');		
		if(!source) source = getRequest(sourceURL,'query');		
	}
	return source;
}
/**
**function getRequest(url,name) 获取链接URL中的指定参数值
**@param url网址
**@name 参数名
**中文已转码
*/	
function getRequest(url,name){ 
	url = decodeURI(url);
	var keyt = name+'=';
	var parameter = false;
	if(url.indexOf("?") != -1 && url.indexOf(keyt) != -1) {
		var parameterStr = url.split('?')[1];
		var patt = "\/^\s*" + keyt + ".+\/";
		var patt = eval(patt);	
		if(parameterStr.indexOf("&") != -1) {
			parameterArr = parameterStr.split("&");
			for( i in parameterArr){				
				if(patt.test(parameterArr[i])){		
					parameter = parameterArr[i].split(keyt)[1];
				}
			}
		}else{
			parameter = parameterStr.split(keyt)[1];
		}
	}
	if(!parameter) parameter = "Null";
	return parameter;
}
 
/**
**function getOsVersion() 获取访客设备信息
*/	
function getOsVersion(){
	if(navigator.platform == "Mac68K" || navigator.platform == "MacPPC" || navigator.platform == "Macintosh" || navigator.platform == "MacIntel" || navigator.userAgent.toLowerCase().match(/macintosh/i))  return "iMac";	
	if(navigator.userAgent.toLowerCase().match(/windows nt/i))  return "Windows"; 
	if(navigator.userAgent.toLowerCase().match(/windows phone/i))  return "Windows Phone"; 
    if(navigator.userAgent.toLowerCase().match(/android/i)) return "Android";
	if(navigator.userAgent.toLowerCase().match(/iphone/i))  return "iPhone";
	if(navigator.userAgent.toLowerCase().match(/ipad/i))  return "iPad"; 
	if(navigator.userAgent.toLowerCase().match(/ipod/i))  return "iPod"; 	
    return "other";
}

/*
**getBrowser()
**获取所使用浏览器的的名称
*/
function getBrowser() {
    var _userAgent = navigator.userAgent.toLowerCase();
    var browser = null;
    var browserArray = {
	/*IE浏览器*/
	IE: _userAgent.indexOf('msie') > -1,
	/*Chrome浏览器*/
	Chrome: _userAgent.indexOf('chrome') > -1 && _userAgent.indexOf('safari') > -1,
	/*火狐浏览器*/
	Firefox: _userAgent.indexOf('firefox') > -1, 
	/*Opera浏览器*/
	Opera: _userAgent.indexOf('opera') > -1,
	/*safari浏览器*/
	Safari: _userAgent.indexOf('safari') > -1 && _userAgent.indexOf('chrome') == -1, 
	/*Edge浏览器*/
	Edge: _userAgent.indexOf('edge') > -1, 
	/*UC浏览器*/
	UBrowser: /ubrowser/.test(_userAgent), 
	/*360浏览器*/
	_360Browser: /360[s,e]{1}e/.test(_userAgent), 
	/*傲游浏览器*/	
	MaxthonBrowser: /maxthon/.test(_userAgent),  
	/*世界之窗浏览器*/	
	TheworldBrowser: /theworld/.test(_userAgent),  
	/*搜狗浏览器*/	
	MetasrldBrowser: /metasr/.test(_userAgent),  
	/*猎豹浏览器*/
	LBBrowser: /lbbrowser/.test(_userAgent), 
	/*qq浏览器*/
	QQBrowser: /qqbrowser/.test(_userAgent), 	
	/*微信浏览器*/
	WeixinBrowser: /MicroMessenger/i.test(_userAgent) 
    };
    for (var i in browserArray) {
      if (browserArray[i]) {
        browser = i;
      }
    }
    return browser;
}
/*
**getCookie()
**读取cookies
*/
function getCookie(name) {
    var arr, reg = new RegExp('(^| )' + name + '=([^;]*)(;|$)');
    if (arr = document.cookie.match(reg)) {
        return unescape(arr[2]);
    } else {
        return null;
    }
}
/*
**setCookie()
**设置cookies
*/
function setCookie(name, value) {
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
    document.cookie = name + '=' + escape(value) + ';expires=' + exp.toGMTString();
}
/*
**canvasApp()测试浏览器是否支持Canvas
*/
function canvasSupport() {
    return !!document.createElement('canvas').getContext;
}
function canvasApp() {
	if (canvasSupport()) {
		return true;
	}
}