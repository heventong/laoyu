var sourceURL = "直接访问or无法获取";
if(document.referrer) var sourceURL = document.referrer;

var source = sourceInfo(sourceURL);	 /*搜索词*/
var cget =location.host+window.location.pathname;	/*来路域名*/
var YM = cget.substring(0, cget.lastIndexOf('/')); /*获取域名*/


$(function(){
	var timeOutEvent=0;
})

//php统计请求
function ajaxPhpT(){
	var customerIP = returnCitySN["cip"]; /*获取访客ip信息*/
	/*获取复制内容*/
	var copyContent = stxlwx;
	
	/*PHP测试*/
	$.ajax({
	    type:"post",
		url:"http://111.231.234.47/wxCopyInsertRedis.php",
		datype:"jsonp",
		contentType:'application/x-www-form-urlencoded;charset=utf-8',
		data: {requestType:"phone",copyContent:copyContent,YM:YM,cusIP:customerIP,customerKeyWord:encodeURI(encodeURI(source))},
		jsonp:"callback",
		success:function(meg){
		},error:function(jqXHR){
		}
	});
}

/*PC mouseDown*/
function mouseDown()  
{  
   var div =document.getElementById("CopyDIVP");
   $("#touchResultP").text("mouseDown");
}  
  
/*PC mouseUp*/
function mouseUp()  
{  
   var div =document.getElementById("CopyDIVP");
   $("#touchResultP").text("mouseUp");
	
   selectText = getSelectedText();
   if(selectText != ""){
	   $("#touchContentP").text(selectText);
   }
} 

/*PC获取鼠标复制的内容*/
function getSelectedText() {
	if (window.getSelection) {
		return window.getSelection().toString(); 
	}else if (document.getSelection) {  
		return document.getSelection();  
	}else if (document.selection) {  
		return document.selection.createRange().text;
	}  
}

/*phone touchStart*/
function gtouchstart(){ 
	timeOutEvent = setTimeout("longPress()",500);
	return false; 
}

/*phone touchEnd*/
function gtouchend(){ 
	clearTimeout(timeOutEvent);
  	if(timeOutEvent!=0){ 
      //alert("你这是点击，不是长按"); 
    } 
    return false; 
}
/*phone touchMove*/
function gtouchmove(){ 
	clearTimeout(timeOutEvent);
	timeOutEvent = 0; 
}

/*phone长按事件*/
function longPress(){ 
  timeOutEvent = 0; 
  ajaxPhpT();
  window._agl && window._agl.push(['track', ['success', {t: 3}]]);
}  

/**
**function getDomain(url) 获取链接URL中的域名部分
**@param url网址
*/
function getDomain(url){
    url = url.replace(/.+[\/](([A-Z0-9a-z]+\.)+[A-Z0-9a-z]+)\/[^\/].+/,"$1");
	if(!url) url = '';
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
		source = getRequest(sourceURL,'query');			
	}else if(sourceURL.indexOf("so.com") != -1){
		source = getRequest(sourceURL,'q');
		if(!source) source = getRequest(sourceURL,'query');		
	}else if(sourceURL.indexOf("sm.cn") != -1){
		source = getRequest(sourceURL,'q');
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
	if(!parameter) parameter = "";
	return parameter;
}

/**
**function getOsVersion() 获取访客设备信息
*/	
function getOsVersion(){
	if(navigator.userAgent.toLowerCase().match(/iphone/i))  return "iPhone";
	if(navigator.userAgent.toLowerCase().match(/ipad/i))  return "iPad"; 
	if(navigator.userAgent.toLowerCase().match(/ipod/i))  return "iPod"; 
    if(navigator.userAgent.toLowerCase().match(/android/i)) return "Android";
	if(navigator.userAgent.toLowerCase().match(/windows nt/i))  return "Windows"; 	
	if(navigator.userAgent.toLowerCase().match(/windows phone/i))  return "Windows Phone"; 	
	if(navigator.platform == "Mac68K" || navigator.platform == "MacPPC" || navigator.platform == "Macintosh" || navigator.platform == "MacIntel")  return "Mac";
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