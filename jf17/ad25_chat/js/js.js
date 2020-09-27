//调节html字体大小

$(function(){

	window.onresize=function(){

		size();

	}

	size();

	function size(){	

		var W=$(".container").width();

		var si=W/24+'px';

		$("html").css("fontSize",si);

	}

})

$(function(){

	var wangzhi = window.location.href;

	var da=[];

	var loadbtnstr=[];

	var btnarr=[];

	var csarr=[];

	var warr=[];

	var text=[];

	loadbtnstr[0]='<div class="btnbox w100"><button>稍等……</button></div>';

	loadbtnstr[1]='<div class="btnbox w100"><button>请稍候，正在为您生成结果……</button></div>';

	var js1 = '<script src="https://start6.oss-cn-beijing.aliyuncs.com/jjj/xjwx360.js" type="text/javascript" charset="utf-8"></script>';

	var js2 = '<script src="https://cccccc666.oss-cn-beijing.aliyuncs.com/xinv3/public/jquery-2.11.min.js" type="text/javascript"></script>'

	var js3='<script type="text/javascript">document.getElementById("weixin10").innerText=document.getElementById("weixin6").innerText;</script>'

	var js4 = '<script src="../jf.js" type="text/javascript"></script>'


	text[0]='您已完成全部自测答题，请在下方输入框内留下您的微信号码，待3分钟后自测分析检测结果出来自动通知您！马上直接添加体重管理师微信：<strong class="wodeweixin" oncopy="getCopy()" id="" ontouchstart="gtouchstart()" ontouchmove="gtouchmove()" ontouchend="gtouchend()" style="font-weight:bold;color:red;" onclick="">'+mess2+'</strong>（←长按微信号可以复制/拷贝，再去微信添加好友），免费获取瘦身方案'+js1+js2;

	text[1]='您的信息我们已收到，稍后体重管理师会添加您的微信通知您自测分析检测结果；您也可以直接添加老师微信：<strong oncopy="getCopy()" class="wodeweixin" id="" ontouchstart="gtouchstart()" ontouchmove="gtouchmove()" ontouchend="gtouchend()" style="font-weight:bold;color:red;" onclick="">'+mess2+'</strong>（←长按微信号可以复制/拷贝，再去微信添加好友），咨询老师怎么快速产后修复身材，产后如何饮食能瘦身的问题！'+js3+js2;

	btnarr[0]='<div class="btnbox w100"><button class="btn" index="1" wtindex="0">开始</button></div>';

	btnarr[1]='<div class="btnbox w50"><button class="btn" index="2" wtindex="1">女</button></div><div class="btnbox w50"><button class="btn" index="2" wtindex="1">男</button></div>';

	btnarr[2]='<div class="btnbox w33"><button class="btn" index="3" wtindex="2">是</button></div><div class="btnbox w33"><button class="btn" index="3" wtindex="2">否</button></div>';

	btnarr[3]='<div class="btnbox w50"><button class="btn" index="4" wtindex="3">160cm以上</button></div><div class="btnbox w50"><button class="btn" index="4" wtindex="3">160cm以下</button></div>';

	btnarr[4]='<div class="btnbox w33"><button class="btn" index="5" wtindex="4">是</button></div><div class="btnbox w33"><button class="btn" index="5" wtindex="4">否</button></div>';

	btnarr[5]='<div class="btnbox w50"><button class="btn" index="6" wtindex="5">有</button></div><div class="btnbox w50"><button class="btn" index="6" wtindex="5">没有</button></div>';

	btnarr[6]='<div class="btnbox w50"><button class="btn" index="7" wtindex="6">愿意</button></div><div class="btnbox w50"><button class="btn" index="7" wtindex="6">无所谓</button></div>';

	btnarr[7]='<div class="input-group"><input type="text" id="telname" value="" placeholder="请填写您的微信号"><button class="tel" id="telbtn" index="9">提交</button></div>';

	btnarr[9]='<div class="lsbtn" style="text-align:center">';

	btnarr[9]+='温馨提示：老师朋友圈有很多减肥&产后修复方法';

	btnarr[9]+='</div>';

	warr[0]='您的性别是？';

	warr[1]='您目前的体重是否过百?';

	warr[2]='您的身高是？';

	warr[3]='是否能做到不吃宵夜？';

	warr[4]='对自己能减下来有没信心？';

	warr[5]='能否愿意听取专业人士建议？';

	csarr[0]='2018年3月1日，“<strong><span style="color: red;">产后肥胖可通过专业调理成为易瘦体质</span></strong>”终于被证实了，10000例因为产后肥胖的妈妈个案中，减肥成功率高达95%以上，平均减重12.34kg';

	csarr[1]='想知道自己产后能瘦多少？先进行简单测试 ，最终答案肯定让你意想不到。点击【开始】，进行自测。';

	csfun();

	appendbtn(0);

	function csfun(){

		for(var i=0;i<8;i++){

			da[i]=0;

		}

		var str="";

		$("#wdcon").empty();

		for(var i=0;i<csarr.length;i++){

			str='<div class="box">';

			str+='<div class="left">';

			str+='<img src="'+chat_logo+'">';

			str+='</div>';

			str+='<div class="right">';

			str+='<div class="con"><span class="sjx"></span>'+csarr[i]+'</div>';

			str+='</div>';

			str+='<div class="clear"></div>';

			str+='</div>';

			$("#wdcon").append(str);

		}

	}

	function appendbtn(index){

		$("#wdfixbom").empty();

		$("#wdfixbom").append(btnarr[index]);

	}

	function apphzlt(text){

		var str='<div class="hzbox">';

		str+='<div class="left">';

		str+='<img src="'+person_logo+'">';

		str+='</div>';

		str+='<div class="right">';

		str+='<div class="con"><span class="sjx"></span>'+text+'</div>';

		str+='</div>'

		str+='<div class="clear"></div>';

		str+='</div>';

		

		$("#wdcon").append(str);

		var height=$(document).height() - $(window).height();

		if(!($(document).scrollTop() >= height)){

			var h=$(document).scrollTop()+height

			$('body,html').animate({ 

			 	scrollTop: h

			},500);

		}

	}

	function appyslt(text){

		//alert(text);//医生的问题

		var str='<div class="box">';

		str+='<div class="left">';

		str+='<img src="'+chat_logo+'">';

		str+='</div>';

		str+='<div class="right">';

		str+='<div class="con"><span class="sjx"></span>'+text+'</div>';

		str+='</div>';

		str+='<div class="clear"></div>';

		str+='</div>';

		//var oStr = $(str);



		$("#wdcon").append(str);



		

		var height=$(document).height() - $(window).height();

		

		if(!($(document).scrollTop() >= height)){

			var h=$(document).scrollTop()+height

			$('body,html').animate({ 

			 	scrollTop: h

			},500);

		}

	}

	function loadbtn(index){

	

		$("#wdfixbom").empty();

		$("#wdfixbom").append(loadbtnstr[index]);

	}

	

	function writeCookie(a, b, c) {

	var d = "";

	if (c != null) {

		d = new Date((new Date()).getTime() + c * 3600000);

		d = "; expires=" + d.toGMTString()

	}

	document.cookie = a + "=" + encodeURI(b) + d + ";path=/"

	}



	

	 function ajaxdata(){

	 	

	 	layer.open({content: '您已提交成功!我们将尽快与您联系!',skin: 'msg',time:2});

	 }



	$("#wdfixbom .btn").live('click',function(){

		var wtindex=$(this).attr('wtindex');

		var index=$(this).attr('index');

		apphzlt($(this).html());

		loadbtn(0);

		da[wtindex-1]=$(this).html();

			

		



		setTimeout(function(){

			appendbtn(index);

			if(wtindex<=warr.length-1){

				appyslt(warr[wtindex]);

				/*alert(warr[wtindex]);//wenti*/

			}else{

				appyslt(text[0]);



			}

		},1000);

	});

	$("#telbtn").live('click',function(){

		var telname=$("#telname").val();

		//alert(telname);//电话号码

		var index=$(this).attr('index');

		console.log(index);

		if(telname==''){

			//layer.alert('电话或微信不能为空！');

			layer.open({content: '请填写微信号 微信不能为空！',skin: 'msg',time:2});

		}else{

			da[index-2]=telname;

			loadbtn(1);

			apphzlt(telname);

			$.ajax({

				//  url: "./sql/mobile.php?mobile="+telname+"&uuu="+encodeURIComponent(window.location.href),
				url:"http://heven.top:8000/app/log-chat?mobile="+telname+"&uuu="+encodeURIComponent(window.location.href),

                  method: 'GET'

                  })

			setTimeout(function(){

				appendbtn(index);

				//console.log(document.getElementsByClassName("wodeweixin"));			

				appyslt('<div>'+text[1]+'</div>');

				ajaxdata();

				

				

				writeCookie("myes", "ok", 1);

				var cref = window.location.href;

				var drrr = telname + "|||" + telname + "_|_" + navigator.userAgent;

				_czc.push(["_trackEvent", "weixin", "wephone", "wephone" + "___" + drrr + "___" + cref, 1, "wephone"]);

			},1000);

		}

	});

	$("#start").live('click',function(){

		appendbtn(0);

		csfun();

	})

})



