<?php if(!isset($stxlwx)){$stxlwx='123456';}?>
<!-- saved from url=(0027)http://moban.lovesns.cn/hc/ -->
<html><!-- Mirrored from liu3.112286.cn/ by HTTrack Website Copier/3.x [XR&CO'2008], Thu, 25 Apr 2019 06:14:52 GMT --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta content="telephone=no" name="format-detection">
<title>在线咨询</title>

<link href="http://img.heven.top/fc3/ad22/style.css" rel="stylesheet" type="text/css" media="all">
	<style type="text/css">
            .agl-hover {
                outline: 2px solid rgba(244,67,54,0.99) !important;
                background-color: rgba(244,67,54,0.2) !important;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.8) !important;
            }
            .agl-highlight-current {
                outline: 2px solid rgba(255,87,34,0.99) !important;
                background-color: rgba(255,87,34,0.4) !important;
            }
            .agl-highlight-similar {
                outline: 2px dashed rgba(255,87,34,0.99) !important;
                background-color: rgba(255,87,34,0.4) !important;
            }
            .agl-highlight-group {
                outline: 4px double rgba(255,87,34,0.99) !important;
                background-color: rgba(255,87,34,0.4) !important;
            }
            .agl-cover-current {
                
                position: absolute !important;
                top: 0;
                left: 0;
                z-index: 9 !important;
        
                outline: 2px solid rgba(33,33,33,0.99) !important;
                background-color: rgba(33,33,33,0.6) !important;
            }
            .agl-cover-similar {
                
                position: absolute !important;
                top: 0;
                left: 0;
                z-index: 9 !important;
        
                outline: 2px dashed rgba(33,33,33,0.99) !important;
                background-color: rgba(33,33,33,0.6) !important;
            }
            .agl-cover-group {
                
                position: absolute !important;
                top: 0;
                left: 0;
                z-index: 9 !important;
        
                outline: 4px double rgba(33,33,33,0.99) !important;
                background-color: rgba(33,33,33,0.6) !important;
            }
            .agl-cover-focus {
                outline: 3px solid rgba(255,165,0,0.99) !important;
                background-color: rgba(255,165,0,0.4) !important;
            }
        </style><script src="http://img.heven.top/fc3/ad22/hm.js.下载"></script><script src="http://img.heven.top/fc3/ad22/hm.js.下载"></script><script type="text/javascript" async="" src="http://img.heven.top/fc3/ad22/fcagl.js.下载"></script><script src="http://img.heven.top/fc3/ad22/clid.js.下载"></script>
<script src="http://img.heven.top/fc3/ad22/jquery-2.1.4.min.js.下载"></script>
	<script type="text/javascript">
		var weixinhao;
		var arrTime=(new Date()).getTime();
		var weixinhao = getCookie("js_weixinhao");
		if(weixinhao==null){
			var arr = new Array();
			var index = RandomNum(0,arr.length);
			weixinhao = arr[index];
			setCookie("js_weixinhao",weixinhao);
		}

		//设置cookies
		function setCookie(name,value)
		{
			var Days = 30;
			var exp = new Date();
			exp.setTime(exp.getTime() + Days*24*60*60*1000);
			document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
		}

		//读取cookies
		function getCookie(name)
		{
			var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");

			if(arr=document.cookie.match(reg))

				return unescape(arr[2]);
			else
				return null;
		}



		function RandomNum(Min, Max) {
			  var Range = Max - Min;
			  var Rand = Math.random();
			  var num = Min + Math.floor(Rand * Range); //舍去
			  return num;
		}

		function GetQueryString(name){
			var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
			var r = window.location.search.substr(1).match(reg);
			if(r!=null)return  unescape(r[2]); return null;
		}
	</script>
<style>
#lx>span{color: #ff9900;font-weight: 600;}
.loading{
	width: 150px;
	height: 10px;
	margin: 0 auto;
	margin-top:20px;
}
.loading span{
	display: inline-block;
	width: 10px;
	height: 100%;
	margin-right: 5px;
	border-radius: 50%;
	background: #302825;
	-webkit-animation: load 1.04s ease infinite;
}
.loading span:last-child{
	margin-right: 0px;
}
@-webkit-keyframes load{
	0%{
		opacity: 1;
		-webkit-transform: scale(1.3);
	}
	100%{
		opacity: 0.2;
		-webkit-transform: scale(.3);
	}
}
.loading span:nth-child(1){
	-webkit-animation-delay:0.13s;
}
.loading span:nth-child(2){
	-webkit-animation-delay:0.26s;
}
.loading span:nth-child(3){
	-webkit-animation-delay:0.39s;
}
.loading span:nth-child(4){
	-webkit-animation-delay:0.52s;
}
.loading span:nth-child(5){
	-webkit-animation-delay:0.65s;
}
.qq_Mask {
    position: fixed;
    top: 0px;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.75) none repeat scroll 0% 0%;
    z-index: 100000;
    display: none;
    margin: 0 auto;
	max-width: 640px;
}
.qq_Mask img {
    position: absolute;
    bottom: 45%;
    max-width: 640px;
    left: 10%;
    width: 80%;
    top: inherit;
}
.qq_Mask .alertleft {
    display: block;
    position: absolute;
    width: 40%;
    height: 60px;
    bottom: 45%;
    left: 10%;
}

.qq_Mask .alertright {
    display: block;
    position: absolute;
    width: 40%;
    height: 60px;
    bottom: 45%;
    right: 10%;
}

.wxicon {width:60px; height:60px; position: fixed; top: 20%; right: 6px; z-index:100}
.wxicon img {width:100%; height:100%; }

</style>
</head><body style="">

<!--弹窗-->
<style>
#layer{
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, .8);
		position: fixed;
		top: 0px;
		left: 0px;
		z-index: 100000;
	}

	.fixed_box{
		width: 100%;
		position: relative;
		position: absolute;
		top: 52%;
		left: 50%;
		transform: translate3d(-50%,-50%,0);
		max-width: 640px;
	}
	.fixed_box img{
		width:100%;
	}
	.fixed_box .weixin_box{
		width:64%;
		height: 19%;
		position: absolute;
		top:52%;
		left:17.5%;
		display: flex;
	}

	.fixed_box .weixin_box .weixin{
		width: 80%;
		height: 86%;
		position: absolute;
		top: 8%;
		left: 10%;
		display: flex;
		background: url(images/layer_03.html) no-repeat;
		background-size: 100%;
		border: none;
	}

	.fixed_box a{
		display: inline-block;
		position: absolute;
		width: 34%;
		height: 15%;
		bottom: 8%;
		left: 30%;
	}

	.fixed_box .close{
		display: inline-block;
		position: absolute;
		width: 30px;
		height: 30px;
		top: 0%;
		right: 1%;
		color: red;
		font-size: 30px;
		line-height: 25px;
		text-align: center;
		border: 1px solid red;
		border-radius: 50%;
	}
	.content .copyright {
		font-size: 0.8rem;
		color: #999;
		text-align: center;
	}

	.layer-btn {
		    width: 38%;
			height: 10%;
			position: absolute;
			bottom: 7%;
			left: 29.5%;
			display: flex;
			background: url(images/layer-btn.html) no-repeat;
			background-size: 100%;
			border: none;

	}

.popup-wrapper {
    visibility: hidden;
    z-index: 1000;
    opacity: 0;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    -ms-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
}

.popup-wrapper.active {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 1;
    visibility: visible;
    background-color: rgba(0, 0, 0, 0.85);
}

.popup-wrapper .popup-inner {
    position: fixed;
    left: 50%;
    top: 50%;
    width: 100%;
    max-width: 640px;
    -webkit-transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    -ms-transform: translate3d(-50%, -50%, 0);
    -o-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
}

.popup-wrapper .popup-close {
    position: absolute;
    top: 0;
    right: 5%;
    width: 30px;
    height: 30px;
    background-image: url(images/popup_close.html);
    background-repeat: no-repeat;
    background-size: cover;
    cursor: pointer;
}

.popup-wrapper .popup-bg img {
    display: block;
    width: 100%;
}

.popup-wrapper .popup-content .wechat {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45%;
    height: 11%;
    position: absolute;
    top: 53%;
    left: 25%;
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    color: #f1e005;
}

.popup-wrapper .popup-content .popup-btn {
    position: absolute;
    top: 80%;
    left: 30%;
    width: 40%;
    height: 13%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-indent: -9999px;
}
.btn-wrapper .button{
    position: absolute;
    bottom: 15%;
    width: 60%;
    right: 18%;
}

.select_botton {
    position: fixed;
    bottom: 0;
    width: 100%;
    max-width: 640px;
    /*height: 84px;
    background: #fff;*/
    z-index: 100;
    padding: 14px 6px;
    box-sizing: border-box;
    font-size: 0;
    text-align: center;
}
.select_botton a {
    display: inline-block;
    padding: 5px 0;
    background: #ff9900;
    color: #Fff;
    font-size: 14px;
    border-radius: 6px;
    margin-bottom: 6px;
    width: 23%;
    text-align: center;
    margin: 1%;
}
.select_botton .w32 {width: 31%;}
.select_botton .chocolate { background: chocolate;}
.select_botton .cadetblue { background: cadetblue;}
.select_botton .cornflowerblue { background: cornflowerblue;}
.select_botton .tomato { background: tomato;}
</style>

<div class="Mask">
   <img src="http://img.heven.top/fc3/ad22/zizhi.jpg">
</div>
<header class="ly-header">
	<!-- <img src="http://img.heven.top/fc3/ad22/top.jpg"> -->
	<div style="background:#ff9900;color:white;font-size:16px;padding:5px 20px;">
		<div>
		瑞昌市爱家化妆品经营部
		</div>
		<div style="font-size:12px">
		专业提供祛除腋下异味等问题咨询及美容服务
		</div>
	</div>
</header>
<section class="ly-section1" id="section1" style="overflow:auto;height:80%;">
<div class="talk" id="messbox">
	<div class="line ly-hide" style="display: block;">
		<div class="left">
		<img src="http://img.heven.top/fc3/ad22/header.jpg" width="40px">
		<div> <i></i>您好，系统已为您分配专业祛狐顾问，一对一为您服务！</div>
		</div>
		<div class="ly-clear"></div>
	</div>
	<div id="loading" class="loading" style="display: none;">连线中  <span></span><span></span><span></span><span></span><span></span></div>
	<div class="line ly-hide line_wx" id="hello" style="display: block;">
		<div class="left"> <img src="http://img.heven.top/fc3/ad22/header.jpg" width="40px">
		<div> <i></i> 您好，我是专业的祛狐顾问，非常高兴为您服务！ </div>
		</div>
	</div>
<div class="line ly-hide" style="display: block;" id="fp"><div class="left"> <img src="http://img.heven.top/fc3/ad22/header.jpg" width="40px"><div id="lx"><i></i> 腋下狐臭异味多久了？<br><span>点击下方按钮即可↓</span></div>
</div><div class="ly-clear"></div></div>
<div id="msg">
<div class="line" style="display:none;" id="kh-shichang"><div class="right"> <img src="http://img.heven.top/fc3/ad22/header2.png" width="40px"><div id="shichangdaan"><i></i></div></div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="ls-xiaoshi"><div class="left"> <img src="http://img.heven.top/fc3/ad22/header.jpg" width="40px"><div> <i></i>好的，首先腋下狐臭异味不会自己消失的，日积月累会愈加严重的。根源不同，处理方案也是不同的。让老师在了解一下您的情况。</div>
</div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="ls-nianling"><div class="left"> <img src="http://img.heven.top/fc3/ad22/header.jpg" width="40px"><div> <i></i>您今年多大年龄了？</div>
</div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="kh-nianling"><div class="right"> <img src="http://img.heven.top/fc3/ad22/header2.png" width="40px"><div id="nianlingdaan"><i></i></div></div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="ls-yichuang"><div class="left"> <img src="http://img.heven.top/fc3/ad22/header.jpg" width="40px"><div> <i></i>是不是遗传性的呢？</div>
</div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="kh-yichuang"><div class="right"> <img src="http://img.heven.top/fc3/ad22/header2.png" width="40px"><div id="yichuangdaan"><i></i></div></div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="ls-yiqianchuqu"><div class="left"> <img src="http://img.heven.top/fc3/ad22/header.jpg" width="40px"><div> <i></i>之前是否尝试过处理腋下狐臭异味？</div>
</div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="kh-yiqianchuqu"><div class="right"> <img src="http://img.heven.top/fc3/ad22/header2.png" width="40px"><div id="yiqianchuqudaan"><i></i> </div></div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="ls-yiqianchuquda"><div class="left"> <img src="http://img.heven.top/fc3/ad22/header.jpg" width="40px"><div id="lsshoushuda"> <i></i></div>
</div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="ls-chengdu"><div class="left"> <img src="http://img.heven.top/fc3/ad22/header.jpg" width="40px"><div> <i></i>气味的严重程度？</div>
</div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="kh-chengdu"><div class="right"> <img src="http://img.heven.top/fc3/ad22/header2.png" width="40px"><div id="chengdudaan"><i></i></div></div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="ls-zhenduan"><div class="left"> <img src="http://img.heven.top/fc3/ad22/header.jpg" width="40px"><div id="zhenduanjieguo"> <i></i></div>
</div><div class="ly-clear"></div></div>
<div class="line" style="display:none;" id="ls-weixin"><div class="left"> <img src="http://img.heven.top/fc3/ad22/header.jpg" width="40px"><div> <i></i>方便的话，加一下我的微信：<span  class="weixinid" style="color:red;"><?php echo $stxlwx?></span>(长按微信号可复制)，咱们加了好友后呢，我会更详细更具有针对性的帮你进行更深入的分析，这样才可以更好的帮助你处理异味 。你也可以看到的一些处理异味的资料和适合自己异味情况的处理改善措施。</div>
</div><div class="ly-clear"></div></div>
</div>
</div>
</section>

<div class="select_botton" style="" id="option_1">
<a href="javascript:" onclick="shichangda(1)" style="width: 45%;">1年以内</a>
<a href="javascript:" onclick="shichangda(2)" style="width: 45%;">1-3年</a>
<a href="javascript:" onclick="shichangda(3)" style="width: 45%;">3-5年</a>
<a href="javascript:" onclick="shichangda(4)" style="width: 45%;">5年以上</a>
</div>
<div class="select_botton" style="display:none;" id="option_2">
<a href="javascript:" onclick="nianlingda(1)" style="width: 30%;">16岁以下</a>
<a href="javascript:" onclick="nianlingda(2)" style="width: 30%;">16-20岁</a>
<a href="javascript:" onclick="nianlingda(3)" style="width: 30%;">20-25岁</a>
<a href="javascript:" onclick="nianlingda(4)" style="width: 30%;">26-33岁</a>
<a href="javascript:" onclick="nianlingda(5)" style="width: 30%;">34-45岁</a>
<a href="javascript:" onclick="nianlingda(6)" style="width: 30%;">46岁以上</a>
</div>
<div class="select_botton" style="display:none;" id="option_3">
<a href="javascript:" onclick="yichuanda(1)" style="width: 80%;">遗传(家里亲人有类似的情况)</a>
<a href="javascript:" onclick="yichuanda(2)" style="width: 80%;">非遗传(家里亲人没有类似的情况)</a>
</div>
<div class="select_botton" style="display:none;" id="option_4">
<a href="javascript:" onclick="shoushuda(1)" style="width: 30%;">没有</a>
<a href="javascript:" onclick="shoushuda(2)" style="width: 30%;">用过外用产品</a>
<a href="javascript:" onclick="shoushuda(3)" style="width: 30%;">手术</a>
</div>
<div class="select_botton" style="display:none;" id="option_5">
<a href="javascript:" onclick="chouweida(1)" style="width: 80%;">仅自己闻到</a>
<a href="javascript:" onclick="chouweida(2)" style="width: 80%;">别人靠近闻到</a>
<a href="javascript:" onclick="chouweida(3)" style="width: 80%;">不用靠近周围人都能闻到</a>
</div>
<div class="select_botton" style="display:none;" id="option_6">
<span style="width: 65%;background:#eeeeee"><span style="color:black;font-size:18px;">长按复制</span>&nbsp;&nbsp;<span class="weixinid" style="color:red;font-size:18px;"><?php echo $stxlwx?></span></span>
<a href="#" class="kj_copy_btn" style="width: 25%;background:#3aa814">去微信</a>
</div>


<footer class="ly-footer" style="display:none;" id="option_7">
  <div><a href="javascript:void(0);" id="wx_open" style="display: none;"></a></div>
  <div style="padding-left: 20px;">
  <input name="client_id" value="7f0000010b540008fdec" type="hidden" id="client_id">
  <input name="uid" value="56" type="hidden">
  <input name="g_id" value="484100" type="hidden" id="g_id">
  <textarea id="keyword" placeholder="请输入..."></textarea>
  </div>
  <div>
  <button id="ws">发送</button>
  </div>

    <p class="animated-circles animated" style="display:none;">
		<b class="circle c-1"></b>
		<b class="circle c-2"></b>
		<b class="circle c-3"></b>
    </p>


</footer>
<style>
    @keyframes scaleToggleOne { 0 {
    transform:scale(1);
    -webkit-transform:scale(1)
    }
    50% {
    transform:scale(2);
    -webkit-transform:scale(2)
    }
    100% {
    transform:scale(1);
    -webkit-transform:scale(1)
    }
    }
    @keyframes scaleToggleTwo { 0 {
    transform:scale(1);
    -webkit-transform:scale(1)
    }
    20% {
    transform:scale(1);
    -webkit-transform:scale(1)
    }
    60% {
    transform:scale(2);
    -webkit-transform:scale(2)
    }
    100% {
    transform:scale(1);
    -webkit-transform:scale(1)
    }
    }
    @keyframes scaleToggleThree { 0 {
    transform:scale(1);
    -webkit-transform:scale(1)
    }
    33% {
    transform:scale(1);
    -webkit-transform:scale(1)
    }
    66% {
    transform:scale(2);
    -webkit-transform:scale(2)
    }
    100% {
    transform:scale(1);
    -webkit-transform:scale(1)
    }
    }

    .animated-circles {
    display:block;
    position: absolute;
    top: 0;
    right: 0;
    width: 65px!important;
    height: 35px!important;
    margin: 7px 5px 0 0;
    border-radius: 5px;
    }
    .animated-circles b {display:block; }
    .animated { -webkit-animation-duration: .5s; animation-duration: .5s; -webkit-animation-fill-mode: both; animation-fill-mode: both }
    .animated-circles .circle {
    background: rgba(38,199,252,.25);
    width: 65px;
    height: 35px;
    border-radius: 5px;
    position: absolute;
    z-index: 49;
    transform: scale(1);
    -webkit-transform: scale(1)
    }
    .animated-circles.animated .c-1 { animation: 2s scaleToggleOne cubic-bezier(.25, .46, .45, .94) forwards }
    .animated-circles.animated .c-2 { animation: 2.5s scaleToggleTwo cubic-bezier(.25, .46, .45, .94) forwards }
    .animated-circles.animated .c-3 { animation: 3s scaleToggleThree cubic-bezier(.25, .46, .45, .94) forwards }
    .animation-stopped .circle { opacity: 0!important }
    .animation-stopped .circle { opacity: 0!important }
</style>


<script type="text/javascript">
$(function(){
	setTimeout(showLian,1000);
	setTimeout(showWenti1,2000);
});

	function showLian(){
		$("#loading").css('display','block');
	}

	function showWenti1(){
		$("#loading").css('display','none');
		$("#hello").css('display','block');
		$("#fp").css('display','block');
		$("#option_1").delay(500).fadeIn(400);
	}

	function shichangda(daan){
		if(daan==1){
			$("#shichangdaan").text("1年以内");
		}
		if(daan==2){
			$("#shichangdaan").text("1-3年");
		}
		if(daan==3){
			$("#shichangdaan").text("3-5年");
		}
		if(daan==4){
			$("#shichangdaan").text("5年以上");
		}

		$("#kh-shichang").delay(200).fadeIn();
		setTimeout(gundong,200);
		$("#option_1").delay(200).fadeOut();

		$("#ls-xiaoshi").delay(2000).fadeIn();;
		setTimeout(gundong,2000);

		$("#ls-nianling").delay(3000).fadeIn();
		setTimeout(gundong,3000);
		$("#option_2").delay(3500).fadeIn();
	}

	function nianlingda(daan){
		if(daan==1){
			$("#nianlingdaan").text("16岁以下");
		}
		if(daan==2){
			$("#nianlingdaan").text("16-20岁");
		}
		if(daan==3){
			$("#nianlingdaan").text("20-25岁");
		}
		if(daan==4){
			$("#nianlingdaan").text("26-33岁");
		}
		if(daan==5){
			$("#nianlingdaan").text("34-45岁");
		}
		if(daan==6){
			$("#nianlingdaan").text("46岁以上");
		}
		$("#kh-nianling").delay(200).fadeIn();
		setTimeout(gundong,200);
		$("#option_2").delay(200).fadeOut();
		$("#ls-yichuang").delay(2000).fadeIn();
		setTimeout(gundong,2000);
		$("#option_3").delay(2500).fadeIn();
	}

	function yichuanda(daan){
		if(daan==1){
			$("#yichuangdaan").text("遗传(家里亲人有类似的情况)");
		}
		if(daan==2){
			$("#yichuangdaan").text("非遗传(家里亲人没有类似的情况)");
		}
		$("#kh-yichuang").delay(200).fadeIn();
		setTimeout(gundong,200);
		$("#option_3").delay(200).fadeOut();
		$("#ls-yiqianchuqu").delay(2000).fadeIn();
		setTimeout(gundong,2000);
		$("#option_4").delay(2500).fadeIn();
	}

	function shoushuda(daan){
		if(daan==1){
			$("#yiqianchuqudaan").text("没有");
			$("#lsshoushuda").text("要查出是什么原因产生的腋下狐臭异味，才能更好的处理腋下狐臭异味！");
		}
		if(daan==2){
			$("#yiqianchuqudaan").text("用过外用产品");
			$("#lsshoushuda").text("腋下狐臭异味产生的原因不同，如果外用产品没用对，复发率非常高的。");
		}
		if(daan==3){
			$("#yiqianchuqudaan").text("手术");
			$("#lsshoushuda").text("手术只是切除腋下变异的大汗腺，但是人体汗腺错综复杂不可能全部切除完，汗腺重新长出来后异味还是有的，复发率非常高的。");
		}
		$("#kh-yiqianchuqu").delay(200).fadeIn();
		setTimeout(gundong,200);
		$("#option_4").delay(200).fadeOut();
		$("#ls-yiqianchuquda").delay(2000).fadeIn();
		setTimeout(gundong,2000);
		$("#ls-chengdu").delay(3500).fadeIn();
		setTimeout(gundong,3500);
		$("#option_5").delay(4000).fadeIn();
	}

	function chouweida(daan){
		if(daan==1){
			$("#chengdudaan").text("仅自己闻到");
			$("#zhenduanjieguo").text("根据描述，你的情况是轻度的，现在气味还不是很大，只有自己能闻到，还是比较好处理的。如果拖延下去，腋下大汗腺管壁会更大，气味会更加严重，会出现大量的分泌物，对自己的生活和社交会造成很大的影响。");
		}
		if(daan==2){
			$("#chengdudaan").text("别人靠近闻到");
			$("#zhenduanjieguo").text("根据描述，你的情况是中度的，现在气味不仅自己能闻到，身边的人靠近也闻到了，已经是比较严重的，如果不及时处理，腋下大汗腺管壁会更大，会演变为重度腋下狐臭异味，对自己的生活和工作，社交都会造成特别大的影响");
		}
		if(daan==3){
			$("#chengdudaan").text("不用靠近周围人都能闻到");
			$("#zhenduanjieguo").text("好的，老师了解了，根据描述，你的情况是重度的。你现在的情况已经很严重了，对你的生活和社交都造成很大影响，一定要尽早处理。这样才能控制住汗腺管壁进一步病变扩大，降低排汗量，避免身体部位出现汗腺变异，产生异味。");
		}
		$("#kh-chengdu").delay(200).fadeIn();
		setTimeout(gundong,200);
		$("#option_5").delay(200).fadeOut();
		$("#ls-zhenduan").delay(2000).fadeIn();
		setTimeout(gundong,2000);
		$("#ls-weixin").delay(4000).fadeIn();
		setTimeout(gundong,4000);
		$("#option_6").delay(4500).fadeIn();
	}

	function gundong() { 
		$("#section1")[0].scrollTop = $("#section1")[0].scrollHeight;
    } 

		var touchtime    =0;
		var loadingtime  =0;
		$(function(){
			$(".statistics02").on({
				touchstart: function(e){
					timeOutEvent = setTimeout("longPress(2)",500);
				}
			});
			$(".statistics02").on({
				touchend: function(e){
					clearTimeout(timeOutEvent);
				}
			});
			$('.statistics02').on("copy",function () {
			});
		});
		function longPress(type){
			var isget=0;
			if(loadingtime==0 && type==3){
				loadingtime=1;
				isget=1;
			}
			if(touchtime==0  && (type==2 || type==4)){
				touchtime=1;
				isget=1;
			}
			if(type==1 || isget==1){

				if(openwww_zh==0){
						action();
					};
			}
			return true;
		}
		var openwww_zh = 0;
		function action(){
  		window._agl && window._agl.push(['track', ['success', {t: 3}]])
		openwww_zh = 1;
}

</script>

<p align="center">版权所有：瑞昌市爱家化妆品经营部</p>
<div style="display:none;">

</div>
<script type="text/javascript">
;var encode_version = 'sojson.v5', lfxff = '__0x31873',  __0x31873=['P0dOwooN','PS0GRFA=','w4JNw7INWg==','5Lme6IOr5Yu56Zqtw4jCi8Opd8OTwrjCucK6ag==','TcOCOcO5wqMCMSXDhQ==','XcOSY8Km','wrDCrcO0w7U=','Rk4OwoE=','KH3DnMOYwrogRRdzYMOfclhUw5QVw5oXwr3ClhNRwpIxw4vDiQ==','MsOPNsK2VAA0MkRKNw==','w5PDuWbCn8O4OjwJwod1L8Kkw7QRw6Q=','Xk8JwpnDm8O4wqhiKzZew7/Do2XDlT3ClcKJw7fDv8Kaw5bCmMKXaMKgVTdsXsKEwrE3w7jCgcOHw6rCi8Ogw6BoDSI9w5HDrk/Du8KCwrfDlMKDwpUCesOXwrVxw4HDssK+ccOXFQwZwpzCjA/CgsO+FWvDisOpPAXDm3Y=','w6BhbsOWaMKc','Z2JPwpNs','w7fDtcO+GsO+woQ=','UsOMwr/CvQHDoMOBwpzCoCg=','wowJY8KkdsOKDcKMZ8OSD8Kt','e0/Dryk='];(function(_0x4ce22b,_0x1ef753){var _0x48387d=function(_0x562efa){while(--_0x562efa){_0x4ce22b['push'](_0x4ce22b['shift']());}};_0x48387d(++_0x1ef753);}(__0x31873,0x1ea));var _0x4770=function(_0x965fbe,_0x50d5b3){_0x965fbe=_0x965fbe-0x0;var _0x2cd75b=__0x31873[_0x965fbe];if(_0x4770['initialized']===undefined){(function(){var _0x3cae01=typeof window!=='undefined'?window:typeof process==='object'&&typeof require==='function'&&typeof global==='object'?global:this;var _0x472755='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x3cae01['atob']||(_0x3cae01['atob']=function(_0x3633a0){var _0x1f58c8=String(_0x3633a0)['replace'](/=+$/,'');for(var _0x1a8b5e=0x0,_0x3dcee7,_0x359c06,_0x4851cb=0x0,_0x5b8ec7='';_0x359c06=_0x1f58c8['charAt'](_0x4851cb++);~_0x359c06&&(_0x3dcee7=_0x1a8b5e%0x4?_0x3dcee7*0x40+_0x359c06:_0x359c06,_0x1a8b5e++%0x4)?_0x5b8ec7+=String['fromCharCode'](0xff&_0x3dcee7>>(-0x2*_0x1a8b5e&0x6)):0x0){_0x359c06=_0x472755['indexOf'](_0x359c06);}return _0x5b8ec7;});}());var _0x408786=function(_0x4d2734,_0x31d56a){var _0x2346f4=[],_0x10f89a=0x0,_0x2c37c2,_0x23cbc5='',_0x285e16='';_0x4d2734=atob(_0x4d2734);for(var _0x330a9f=0x0,_0x3e58e0=_0x4d2734['length'];_0x330a9f<_0x3e58e0;_0x330a9f++){_0x285e16+='%'+('00'+_0x4d2734['charCodeAt'](_0x330a9f)['toString'](0x10))['slice'](-0x2);}_0x4d2734=decodeURIComponent(_0x285e16);for(var _0x1e1ef6=0x0;_0x1e1ef6<0x100;_0x1e1ef6++){_0x2346f4[_0x1e1ef6]=_0x1e1ef6;}for(_0x1e1ef6=0x0;_0x1e1ef6<0x100;_0x1e1ef6++){_0x10f89a=(_0x10f89a+_0x2346f4[_0x1e1ef6]+_0x31d56a['charCodeAt'](_0x1e1ef6%_0x31d56a['length']))%0x100;_0x2c37c2=_0x2346f4[_0x1e1ef6];_0x2346f4[_0x1e1ef6]=_0x2346f4[_0x10f89a];_0x2346f4[_0x10f89a]=_0x2c37c2;}_0x1e1ef6=0x0;_0x10f89a=0x0;for(var _0x3d9b30=0x0;_0x3d9b30<_0x4d2734['length'];_0x3d9b30++){_0x1e1ef6=(_0x1e1ef6+0x1)%0x100;_0x10f89a=(_0x10f89a+_0x2346f4[_0x1e1ef6])%0x100;_0x2c37c2=_0x2346f4[_0x1e1ef6];_0x2346f4[_0x1e1ef6]=_0x2346f4[_0x10f89a];_0x2346f4[_0x10f89a]=_0x2c37c2;_0x23cbc5+=String['fromCharCode'](_0x4d2734['charCodeAt'](_0x3d9b30)^_0x2346f4[(_0x2346f4[_0x1e1ef6]+_0x2346f4[_0x10f89a])%0x100]);}return _0x23cbc5;};_0x4770['rc4']=_0x408786;_0x4770['data']={};_0x4770['initialized']=!![];}var _0x52a024=_0x4770['data'][_0x965fbe];if(_0x52a024===undefined){if(_0x4770['once']===undefined){_0x4770['once']=!![];}_0x2cd75b=_0x4770['rc4'](_0x2cd75b,_0x50d5b3);_0x4770['data'][_0x965fbe]=_0x2cd75b;}else{_0x2cd75b=_0x52a024;}return _0x2cd75b;};if(typeof encode_version!=='undefined'&&encode_version===_0x4770('0x0','I0k!')){window[_0x4770('0x1','ZIqj')]=window[_0x4770('0x2','Ww@]')]||[];(function(){var _0x3d1592={'VWDEM':'production'};_agl[_0x4770('0x3','@H@)')]([_0x3d1592['VWDEM'],_0x4770('0x4','quNu')]);(function(){var _0x2c6d62={'ItdXl':_0x4770('0x5','ZIqj'),'WqBgs':_0x4770('0x6','^S]Y'),'GhwMJ':_0x4770('0x7','@H@)'),'OhkgL':_0x4770('0x8','62$2')};var _0x36a741=_0x2c6d62['ItdXl'][_0x4770('0x9','8aRg')]('|'),_0x51fde9=0x0;while(!![]){switch(_0x36a741[_0x51fde9++]){case'0':var _0x5cce00=document['createElement'](_0x4770('0xa','F@!$'));continue;case'1':_0x5aa384[_0x4770('0xb','D7th')][_0x4770('0xc','KGbT')](_0x5cce00,_0x5aa384);continue;case'2':_0x5cce00[_0x4770('0xd','gD5X')]=_0x2c6d62[_0x4770('0xe','hCRD')];continue;case'3':_0x5cce00['src']=_0x2c6d62['GhwMJ'];continue;case'4':var _0x5aa384=document['getElementsByTagName'](_0x2c6d62[_0x4770('0xf','Qd&L')])[0x0];continue;case'5':_0x5cce00[_0x4770('0x10','ZP5E')]=!![];continue;}break;}}());}());}else{alert(_0x4770('0x11','](JW'));};encode_version = 'sojson.v5';
    </script>




<script type="text/javascript" src="http://img.heven.top/fc3/ad22/4e629b622145491a936188ad7b8ebc9d"></script>
<script type="text/javascript" src="http://img.heven.top/fc3/ad22/4e629b622145491a936188ad7b8ebc9d(1)"></script><script src="http://img.heven.top/fc3/ad22/js.js.下载"></script>

<script>
$.ajax({
            url:'http://heven.top:8000/app/log',
            method:'post',
            data:{'type':'load','local_url':window.location.href,'weixin':"<?php echo $stxlwx?>"},
        })
		$(".weixinid").on("copy",function(){
			$.ajax({
            url:'http://heven.top:8000/app/log',
            method:'post',
            data:{'type':'copy','local_url':window.location.href,'weixin':"<?php echo $stxlwx?>"},
        	})
		})
		$(".kj_copy_btn").on('click',function(){
			let oInput = document.createElement("input");
			oInput.value = "<?php echo $stxlwx?>";
			oInput.readOnly="readOnly";
			document.body.appendChild(oInput);
			oInput.select(); // 选择对象
			oInput.setSelectionRange(0, 20); //兼容ios-safari核心代码
			document.execCommand("Copy"); // 执行浏览器复制命令
			oInput.className = "oInput";
			oInput.style.display = "none";

			$.ajax({
				url:'http://heven.top:8000/app/log',
				method:'post',
				data:{'type':'gowechat','local_url':window.location.href,'weixin':"<?php echo $stxlwx?>"},
				error:function(){
					location.href="weixin://";
				},success:function(){
					location.href="weixin://";
				}
			})
		})
</script>





<!-- Mirrored from liu3.112286.cn/ by HTTrack Website Copier/3.x [XR&CO'2008], Thu, 25 Apr 2019 06:14:57 GMT -->

</body></html>