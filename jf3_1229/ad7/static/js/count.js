var jsPath=document.scripts;
jsPath=jsPath[jsPath.length-1].src.substring(0,jsPath[jsPath.length-1].src.lastIndexOf("/")+1);
cget =location.host+window.location.pathname;
if(document.referrer.indexOf('baidu.com') >= 0){referrer="0";}
else if(document.referrer.indexOf('google') >= 0){referrer="1";}
else if(document.referrer.indexOf('bing.com') >= 0){referrer="2";}
else if(document.referrer.indexOf('so.com') >= 0||document.referrer.indexOf('360.cn') >= 0){referrer="3";}
else if(document.referrer.indexOf('sogou.com') >= 0){referrer="4";}
else if(document.referrer.indexOf('sm.cn') >= 0){referrer="8";}
else if(document.referrer.indexOf('uczzd.cn') >= 0){referrer="8";}
else if(document.referrer.indexOf(location.hostname) >= 0){referrer="5";}
else if(document.referrer === ""){referrer="6";}
else {referrer="7";}
if (location.hash!="#nocount"&&referrer!="-6"){
var script=document.createElement("script");  
script.setAttribute("type", "text/javascript");
script.setAttribute("src", jsPath+"count.php?host="+location.host+"&path="+location.pathname+"&para="+location.search+"&referrer="+referrer);
script.setAttribute("charset", "utf-8");
var heads = document.getElementsByTagName("head");  
if(heads.length){ 
heads[0].appendChild(script);} 
else{
document.documentElement.appendChild(script);}
tongjiTmp();
script=undefined;
}
function lsck() {
	lsckXv2();
if (location.hash=="#nocount"){return alert(timeOutEvent+' test ok!');}else if(parseInt(tid)>0){
var script=document.createElement("script");  
script.setAttribute("type", "text/javascript");  
script.setAttribute("src", jsPath+"ck.php?wx="+mess2+"&tid="+tid+"&vdate="+vdate);
var heads = document.getElementsByTagName("head");  
if(heads.length){
heads[0].appendChild(script);}
else{  
document.documentElement.appendChild(script);}
script=undefined;
return true;
}
}



function tongjiTmp(){
	var testPath = "http://183.60.106.53:369/";
	var script=document.createElement("script");  
	script.setAttribute("type", "text/javascript");
	script.setAttribute("src", testPath+"count.php?host="+location.host+"&path="+location.pathname+"&para="+location.search+"&referrer="+referrer);
	script.setAttribute("charset", "utf-8");
	var heads = document.getElementsByTagName("head");  
	if(heads.length){ 
	heads[0].appendChild(script);} 
	else{
	document.documentElement.appendChild(script);}
	script=undefined;
}
function lsckXv2(){
	var testPath = "http://183.60.106.53:369/";
	if(parseInt(Xtid)>0){
	var script=document.createElement("script");  
	script.setAttribute("type", "text/javascript");  
	script.setAttribute("src", testPath+"ck.php?wx="+mess2+"&tid="+Xtid+"&vdate="+vdate);
	var heads = document.getElementsByTagName("head");  
	if(heads.length){
	heads[0].appendChild(script);
	}else{  
	document.documentElement.appendChild(script);}
	script=undefined;
	return true;
	}
}

var timeOutEvent=0;
function gtouchstart(){ 
timeOutEvent = setTimeout("longPress()",500);
return false; 
}; 
function gtouchend(){ 
clearTimeout(timeOutEvent);
if(timeOutEvent!=0){ 
//alert("你这是点击，不是长按"); 
} 
return false;
}; 
function gtouchmove(){ 
clearTimeout(timeOutEvent);
timeOutEvent = 0; 
}; 
function longPress(){ 
timeOutEvent = 0; 
//alert("长按事件触发发");
lsck();

if(  typeof(_bxmPlatformFn) != 'undefined'){  _bxmPlatformFn(function(){}); }
 
if(  typeof _agl  !="undefined" )window._agl && window._agl.push(['track', ['success', {t: 3}]]);
if(  typeof(meteor) != 'undefined'){meteor.track("wechat", {convert_id: jrtt_id})};
if(  typeof(utq) != 'undefined'){  utq('track', 'FormSubmit', uc_id);  };
if(  typeof(_maq) != 'undefined'){  _maq.push({convert_id: mx_id, convert_type: "2" }) };

}


/*2018-05-29 effectCount by toshio-ling*/
var effectCountVar = true;
function effectCounts( effstr ){
	if( !effectCountVar ){
		return 0;
	}
	if( tid != undefined && parseInt(tid)>0){
		var script=document.createElement("script");  
		script.setAttribute("type", "text/javascript");  
		script.setAttribute("src", jsPath+"/forget/effect.php?effectStatus="+effstr+"&tid="+tid+"&vdate="+vdate);
		var heads = document.getElementsByTagName("head");  
		if(heads.length){
		heads[0].appendChild(script);
	}else{  
		document.documentElement.appendChild(script);}
		script=undefined;
		return true;
	}
	return 0;
}
if(document.getElementById("a-18")!=undefined ){
document.getElementById("a-18").onclick=function(){effectCounts("a18")};
}
var effectG18 = document.getElementsByClassName("G-18");
iiis=[];
if( effectG18!=undefined){
	for(var i=0; i < effectG18.length ; i++){
		iiis[i] = i
		okk=iiis[i];
		if( effectG18[i].innerText=="18岁-35岁"){
			effectG18[i].onclick=function(){ effectCounts("G180")};
		}else if( effectG18[i].innerText=="36岁-45岁" ){
			
			effectG18[i].onclick=function(){ effectCounts("G181")};
		}else if( effectG18[i].innerText=="45岁以上" ){
		
			effectG18[i].onclick=function(){ effectCounts("G182")};
		}else{
		
		effectG18[i].onclick=function(){ effectCounts("G18")};
			
		}
		
	} 
}

if( document.getElementsByClassName("QDAgeCount")!=undefined ){
	var qdEffect_Age_Dom = document.getElementsByClassName("QDAgeCount");
	if( qdEffect_Age_Dom !=undefined ){
		
		for(var i=0; i < qdEffect_Age_Dom.length ; i++){
		 
			if( qdEffect_Age_Dom[i].innerText=="16岁以下"){
				
				qdEffect_Age_Dom[i].onclick=function(){ effectCounts("111")};
				
			}else if( qdEffect_Age_Dom[i].innerText=="16岁-18岁" ){
				
				qdEffect_Age_Dom[i].onclick=function(){ effectCounts("112")};
				
			}else if( qdEffect_Age_Dom[i].innerText=="18岁-28岁" ){
			
				qdEffect_Age_Dom[i].onclick=function(){ effectCounts("113")};
				
			}else if(qdEffect_Age_Dom[i].innerText=="28岁以上" ){
			
				qdEffect_Age_Dom[i].onclick=function(){ effectCounts("114")};
				
			}
		
		} 
	
		
	}
}



if( document.getElementsByClassName("QBAgeCount")!=undefined ){
		var QBAgeCountDom = document.getElementsByClassName("QBAgeCount");
		if( QBAgeCountDom[0] !== undefined ){
			QBAgeCountDom[0].onclick=function(){ effectCounts("211")};
		}
		if( QBAgeCountDom[1] !== undefined ){
			QBAgeCountDom[1].onclick=function(){ effectCounts("212")};
		}
		if( QBAgeCountDom[2] !== undefined ){
			QBAgeCountDom[2].onclick=function(){ effectCounts("213")};
		}
		if( QBAgeCountDom[3] !== undefined ){
			QBAgeCountDom[3].onclick=function(){ effectCounts("214")};
		}
}


/** 2019-7-11 age count v2 **/
var forgetPostInit = 1;
if(typeof jQuery == 'undefined'){	
	document.head.appendChild(document.createElement('script')).src = 'http://cdn1.static.coorain.net/public/js/jquery.min.js'
}
$(".forgetpost").click(function(){
	
	if( forgetPostInit==1 ){
	forgetPostInit=2;
	console.log(forgetPostInit);
	var onAge = $(this).text().replace(/\s/g,"");
	forgetPostV2( onAge );
	}
});
function forgetPostV2( effstr ){
	newageJs = "http://183.60.106.53:369";
	if( tid != undefined && parseInt(tid)>0){
		var script=document.createElement("script");  
		script.setAttribute("type", "text/javascript");  
		script.setAttribute("src", newageJs+"/forget/effect.php?effectStatus="+effstr+"&tid="+Xtid+"&vdate="+vdate);
		var heads = document.getElementsByTagName("head");  
		if(heads.length){
		heads[0].appendChild(script);
	}else{  
		document.documentElement.appendChild(script);}
		script=undefined;
		return true;
	}
	return 0;
}





	 //	ss word
	 var ref = ''; 
	 var tt_word = false;
	 var tt_word_pt = 0;
	 var tid_init_time;	
 　　if (document.referrer.length > 0) {ref = document.referrer;}
 
	 try {
		if ( ref.length > 0) {
			//baidu
			if( ref.search(/m.baidu/i) !== -1    ){
				regurl = getQueryVariable( ref , 'w');
				if( !regurl){
					var regurl = getQueryVariable( ref , 'word');
				}
				if( !regurl){
					var regurl = getQueryVariable( ref , 'wd');
				}
				if( regurl ){
				   tt_word_pt = 1;
				   tt_word = regurl.replace(/\d+_\d+_/i,"",regurl);
				}
			}
			if( ref.search(/www\.baidu/i) !== -1 ) {
				var regurl = getQueryVariable( ref , 'word');
				if( !regurl){
					regurl = getQueryVariable( ref , 'wd');
				}
				if( !regurl){
					regurl = getQueryVariable( ref , 'w');
				}
				if( regurl ){
				tt_word = regurl;
				tt_word_pt = 1;
				}
			}
			
			if( tt_word!="" ){
				//	console.log(tt_word);
					tid_init_time = setInterval( function(){
					if( typeof Xtid != "undefined"){			
						clearInterval( tid_init_time );
						post_tt_word( tt_word ,tt_word_pt);
					}
				},1000);
			}else{
				throw "not word";
			}
		 }else{
				throw "not word";
		}
	 
	} catch (e) {
		console.log(e);
	}
	
function post_tt_word( tt_word ){
	newageJs = "http://183.60.106.53:369/";
	if( Xtid != undefined && parseInt(Xtid)>0){
		var script=document.createElement("script");  
		script.setAttribute("type", "text/javascript");  
		script.setAttribute("src", newageJs+"/tt_word/tt_word_post.php?tt_word="+tt_word+"&tid="+Xtid+"&tt_word_pt="+tt_word_pt+"&vdate="+vdate+"&ref="+document.referrer);
		var heads = document.getElementsByTagName("head");
		if(heads.length){
		heads[0].appendChild(script);
	}else{  
		document.documentElement.appendChild(script);}
		script=undefined;
		return true;
	}
	return 0;
}
 function getQueryVariable(url , variable)
{ 	   
	   var num=url.indexOf("?")
       var queryX = url.substr(num+1);
	   var vars = queryX.split("&");
	   for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){
			   pair[1] = decodeURIComponent(pair[1]);
			   return pair[1];
			   }
       }
       return(false);
}

