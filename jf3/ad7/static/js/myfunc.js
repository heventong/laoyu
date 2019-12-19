
//获取url中的参数sref_substr.asp?ab=22&bc=22
function getUrlParam(name) {
 var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
 var r = window.location.search.substr(1).match(reg); //匹配目标参数
 if (r != null) return unescape(r[2]); return null; //返回参数值
}

//获取上一页面url中的参数sref_substr.asp?ab=22&bc=22
function getUrlParamPre(name) {
 var urlstr=document.referrer;
 var urlstr_Length=urlstr.length;
 var num=urlstr.indexOf('?');
 var pre_str=urlstr.substring(num,urlstr_Length); 
 var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
 var r = pre_str.substr(1).match(reg); //匹配目标参数
 if (r != null) return unescape(r[2]); return null; //返回参数值
}

function getQueryString(name) {  //此函数解决获取参数中文乱码问题   
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");    
    var r = window.location.search.substr(1).match(reg);    
    if (r != null) return decodeURI(r[2]); return null; 
  }
  
//获取随机数
function GetRandomNum(Min,Max)
    {   
      var Range = Max - Min;   
      var Rand = Math.random();   
      return(Min + Math.round(Rand * Range));   
    } 

//获取当天到0的虚拟记录数
function GetMessageNum(nowtime)
    {   
    	var time1=3;//间隔时间
	    var date= new Date();
	    date.setHours(0);
	    date.setMinutes(0);
	    date.setSeconds(0);
	    date.setMilliseconds(0);
	    var timestamp=date.getTime();
	    var unix_timestamp =Math.round(date.getTime()/1000);

	    var marquee_allnum1=Math.round((nowtime-unix_timestamp)/time1);

	    return marquee_allnum1;

      
    } 


//滚动到指定高度显示返回
function gotoTop(min_height){  

$(window).scroll(function(){
        var s = $(window).scrollTop();
        if( s > min_height){
          $("#gotoTop").fadeIn(100);
        }else{
          $("#gotoTop").fadeOut(200);
        };
      });
}


//点击返回顶部
function pageScroll(d){
    window.scrollBy(0,d);
    d=d-15; 
    scrolldelay = setTimeout('pageScroll('+d+')',30);
    var sTop=document.documentElement.scrollTop+document.body.scrollTop;
    if(sTop==0) clearTimeout(scrolldelay);
  }


//点击复制id标签内的文本内容
function copy1(id,url){
        const range = document.createRange();
        range.selectNode(document.getElementById(id));
        const selection = window.getSelection();
        if(selection.rangeCount > 0) selection.removeAllRanges();
        selection.addRange(range);
        document.execCommand('copy');
        alert("已复制好，可打开微信粘贴。"); 
        //window.location.href = url;
}


