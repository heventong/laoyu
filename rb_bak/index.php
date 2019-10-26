<?php 

include_once('weixin.php');
?>
<!DOCTYPE html>
<!-- saved from url=(0021)http://bwhjkj.cn/zx1/ -->
<html data-dpr="1" style="font-size: 33.75px;" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">




    <title>关于减肥，你一定有好多疑问</title>
    <link rel="stylesheet" type="text/css" href="http://img.heven.top/rb_bak/index_files/alertbackspace.css">
    <link rel="stylesheet" href="http://img.heven.top/rb_bak/index_files/index2.css">
    <link rel="stylesheet" href="http://img.heven.top/rb_bak/index_files/newalert.css">
    <link rel="stylesheet" href="http://img.heven.top/rb_bak/index_files/cssa.css">
    <meta id="viewport" name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0">
    <meta name="MobileOptimized" content="100%">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="http://img.heven.top/rb_bak/index_files/swiper.css" rel="stylesheet">

    <script src="http://img.heven.top/rb_bak/index_files/jquery-1.js.下载" type="text/javascript"></script>
    <script src="http://img.heven.top/rb_bak/index_files/swiper.js.下载"></script>
	<script type="text/javascript">
    /**
     * Created by moxiaobei on 2017/3/9.
     */

    var ksdt = false;


    $(function(){

        // 答案数据
        //var ksdt=false;

        var json = [
            "18岁以下10斤以下试过减肥，但体重反弹",
            "18岁以下10斤以下一直想减肥，但没有行动",
            "18岁以下10斤以下成功了，还想再瘦",
            "18岁以下10-20斤试过减肥，但体重反弹",
            "18岁以下10-20斤一直想减肥，但没有行动",
            "18岁以下10-20斤成功了，还想再瘦",
            "18岁以下20斤以上试过减肥，但体重反弹",
            "18岁以下20斤以上一直想减肥，但没有行动",
            "18岁以下20斤以上成功了，还想再瘦",
            "18岁-25岁10斤以下试过减肥，但体重反弹",
            "18岁-25岁10斤以下一直想减肥，但没有行动",
            "18岁-25岁10斤以下成功了，还想再瘦",
            "18岁-25岁10-20斤试过减肥，但体重反弹",
            "18岁-25岁10-20斤一直想减肥，但没有行动",
            "18岁-25岁10-20斤成功了，还想再瘦",
            "18岁-25岁20斤以上试过减肥，但体重反弹",
            "18岁-25岁20斤以上一直想减肥，但没有行动",
            "18岁-25岁20斤以上成功了，还想再瘦",
            "25岁以上10斤以下试过减肥，但体重反弹",
            "25岁以上10斤以下一直想减肥，但没有行动",
            "25岁以上10斤以下成功了，还想再瘦",
            "25岁以上10-20斤试过减肥，但体重反弹",
            "25岁以上10-20斤一直想减肥，但没有行动",
            "25岁以上10-20斤成功了，还想再瘦",
            "25岁以上20斤以上试过减肥，但体重反弹",
            "25岁以上20斤以上一直想减肥，但没有行动",
            "25岁以上20斤以上成功了，还想再瘦"
        ];
        // 第一题
        var question_1='',question_2='',question_3='',Last_question='';
        $("#first li").on("click",function(){
            $(this).addClass("on").siblings().removeClass("on");
            question_1 = $(this).html();
            mySwiper.slideNext();
        });

        // 第二题
        $("#second li").on("click",function(){
            $(this).addClass("on").siblings().removeClass("on");
            question_2 = $(this).html();
            mySwiper.slideNext();
        });

        // 第三题
        $("#third li").on("click",function(){
            $(this).addClass("on").siblings().removeClass("on");
            question_3 = $(this).html();
            question_3 = question_3.replace(/[A-Z]+./g,"");

        });

        // 点击提交弹出对应编号
        $("#submit_btn").on("click",function(){


            if(question_3==""){
             //   alert("请告诉我们您以前试过减肥吗！");
             //   return;
            }


            Last_question = question_1+question_2+question_3;
            Last_question = $.trim(Last_question);
            Last_questionIndex = $.inArray(Last_question,json) + 1;
            // 此处要修改
            // Last_questionIndex = "422";
            Last_question = question_1+question_2+question_3;
            Last_question = $.trim(Last_question);
//                Last_questionIndex = $.inArray(Last_question,json) + 1;
            Last_questionIndex = "490";
            //$("#Mask .Mask_txt h3 span,#Mask .Mask_txt .num").html(Last_questionIndex);
            //$("#Mask").fadeIn(400);
            $("#csbt").html("测试结果");
            $("#csbt").css("font-size",".88rem");
            $("#csbt").css("font-weight","bold");
          //  $("#comment2").hide();
			$("#cppic").hide();
            $("#comment").fadeIn(400);
            $('html, body').animate({
                scrollTop: $("#csbt").offset().top
            }, 1000);

            $("#case").fadeOut(400);
        });

        // 点击关闭按钮关闭遮罩层并且将测试返回第一题
        $("#Mask .close_Mask").on("click",function(){
            $("#Mask").fadeOut(400);
            mySwiper.slideTo(0);
        });

        // 点击上一题
        $(".prev").on("click",function(){
            mySwiper.slidePrev();
        });


        // 导航切换
        $(".menu li").on("click",function(){
            $(this).addClass("on").siblings().removeClass("on");
            var TabIndex = $(this).index();
            if(TabIndex == 0){
                $("#case").fadeIn(400);
                $("#comment1").show();
                $("#comment").fadeOut(400);
            }else{
                $("#comment").fadeIn(400);
                $("#case").fadeOut(400);
            }
        });

        var isPlay = false;

        // 点击播放语音
        $(".voice").click(function(){
            if(!isPlay){
                AudioPlay($(this),".voice_pic");
                isPlay = true;
            }else{
                AudioPause($(this),".voice_pic");
                isPlay = false;
            }
        });

        $(".M_voice").on("click",function(){
            if(!isPlay){
                AudioPlay($(this),".Middle_voice");
                isPlay = true;
            }else{
                AudioPause($(this),".Middle_voice");
                isPlay = false;
            }
        });

        $(".audio_bottom").on("click",function(){
            if(!isPlay){
                AudioPlay($(this),".bottom_voice");
                isPlay = true;
            }else{
                AudioPause($(this),".bottom_voice");
                isPlay = false;
            }
        });

        // 音频播放函数
        function AudioPlay(obj,obj_voice){
            obj.children("audio").get(0).play();
            obj.children("em,i").fadeOut();
            obj.children(obj_voice).addClass("on");
        }
        // 音频暂停且当前时间设为0函数
        function AudioPause(obj,obj_voice){
            obj.children("audio").get(0).pause();
            obj.children("audio").get(0).currentTime = 0;
            obj.children(obj_voice).removeClass("on");
        }

        // 点赞
        var isLike = false;
       


        $("#thumb .thumb_close").click(function(){
            $("#thumb").fadeOut(400);
            $("#thumb .swiper-container .swiper-wrapper").html('');
        });

        $(".qq_Mask .close_Mask").click(function(){
            $(".qq_Mask").fadeOut(400);
        });

        $(".top_r,.bottom_btn,.Link,.top_l").click(function(){
            $(".qq_Mask").fadeIn(400);
        });
    });
    !function (win) {
        function resize() {
            var domWidth = domEle.getBoundingClientRect().width;
            if (domWidth / v > 540) {
                domWidth = 540 * v;
            }
            win.rem = domWidth / 16;
            domEle.style.fontSize = win.rem + "px";
        }

        var v, initial_scale, timeCode, dom = win.document, domEle = dom.documentElement, viewport = dom.querySelector('meta[name="viewport"]'), flexible = dom.querySelector('meta[name="flexible"]');
        if (viewport) {
            var o = viewport.getAttribute("content").match(/initial-scale=(["']?)([d.]+)1?/);
            if (o) {
                initial_scale = parseFloat(o[2]);
                v = parseInt(1 / initial_scale);
            }
        } else if (flexible) {
            var o = flexible.getAttribute("content").match(/initial-dpr=(["']?)([d.]+)1?/);
            if (o) {
                v = parseFloat(o[2]);
                initial_scale = parseFloat((1 / v).toFixed(2))
            }
        }
        if (!v && !initial_scale) {
            var n = (win.navigator.appVersion.match(/android/gi), win.navigator.appVersion.match(/iphone/gi));
            v = win.devicePixelRatio;
            v = n ? v >= 3 ? 3 : v >= 2 ? 2 : 1 : 1, initial_scale = 1 / v
        }
        //没有viewport标签的情况下
        if (domEle.setAttribute("data-dpr", v), !viewport) {
            if (viewport = dom.createElement_x("meta"), viewport.setAttribute("name", "viewport"), viewport.setAttribute("content", "initial-scale=" + initial_scale + ", maximum-scale=" + initial_scale + ", minimum-scale=" + initial_scale + ", user-scalable=no"), domEle.firstElementChild) {
                domEle.firstElementChild.appendChild(viewport)
            } else {
                var m = dom.createElement_x("div");
                m.appendChild(viewport), dom.write(m.innerHTML)
            }
        }
        win.dpr = v;
        win.addEventListener("resize", function () {
            clearTimeout(timeCode), timeCode = setTimeout(resize, 300)
        }, false);
        win.addEventListener("pageshow", function (b) {
            b.persisted && (clearTimeout(timeCode), timeCode = setTimeout(resize, 300))
        }, false);
        resize();
    }(window);
</script>
	<style>
    li{list-style:none;}
        #comment li {

            border-bottom: none;

        }
        .m-message:before {
            border-left: .1rem solid #FFA4A4;
            border-top: .1rem solid #FFA4A4;
        }

        .m-message:after {
            border-bottom: .1rem solid #FFA4A4;
            border-right: .1rem solid #FFA4A4;
        }
        strong{
            color:#FFA4A4;
        }
        .zs{
            border-top: 1px solid #FFA4A4;
            border-bottom: 1px solid #aaa;
            padding: .5rem 0;
        }
        .zs-title{

            font-size: 0.8rem;
            font-weight: 700;
            padding-left:.5rem;
            margin-bottom:.3rem;
        }
        .zs-info{

            font-size: .7rem;
        }
        .xh{
            background: #FFA4A4;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            padding: .15rem .4rem;
            font-weight: 600;
        }
        .zs-info{
            padding: 0 .5rem;
        }
        .change #case .first li {
            background: #FFA4A4;
        }

        .change .first li.on {
            background: #FFA4A4 !important;
        }

        .change .first #submit_btn {
            background: #187742;

        }

        .Mask_wechat {
            background: #FFA4A4;

        }
        .change .first li.on {
    background: #f97a7a !important;
}
    </style>
<style type="text/css">

.newt{text-indent:2em;font-size:16px;margin:.1rem auto;width:95%;line-height:29px;text-align:justify;}
.newta{font-size:16px;margin:.1rem auto;width:95%;line-height:29px;text-align:center;}
.h3{text-align:center;font-size:18px;}
.h3c{background:#FFA4A4;color:#fff;padding:0.6rem 0;margin:0 8px;font-weight:700;font-size:0.8rem;}
.timg{text-align:center;}.timg img{width:96%;}
.ph{color:#feff00;font-weight:bold;}
.cnmw{background: #FFA4A4;
    font-size: 24px;
    text-align: center;
    color: #ddf90c;
	margin:0 8px;
	}
.aco{background: #fff;
    color: #097d3c;
    padding: 0 8px;}
.m-message{line-height:1.7;}
.m-message:before {
    border-left: .1rem solid #FFA4A4;
    border-top: .1rem solid #FFA4A4;}
</style>
</head>






<body style="">
<div style="position: fixed;bottom: 0;background: #eee;border-top: 1px solid #ccc;width: 100%;font-size: 16px;padding:5px;left:0px;z-index:999">
  <table>
    <tbody>
      <tr>
        <td style="padding-left: 15px;">加微信：
          <font style="background:#ff0000;color:#fff" id="qb13">
          <?php echo $stxlwx;?></font>
          </td>
        <td style="padding-left:5px;">
          <span style="background: #1356e2;
          color: #fff;
          border-radius: 12px;
          height: 40px;
          line-height: 40px;
          text-align: center;
          box-shadow: 0 1px 3px 0 #000;display:block;width:80px;" class="weixinid public-name gocopy" href="javascript:;" data-clipboard-text="<?php echo $stxlwx?>">去微信</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>




    <style type="text/css">
    button{
        font-size:16px;
        border:0;
        display:inline-block;
    }

    .pbOpacity,.pbOpacityError{
        display:none;
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-color:rgba(0,0,0,.6);
        z-index:999999;
    }
    .pbContent{
        width:300px;
        height:320px;
        background-color:#fff;
        margin:40% auto;
        position:relative;
        border-radius:10px;
        box-shadow:0 0 30px rgba(0,0,0,.6);
        text-align:center;
    }
    .pbCTitle1{
        padding:10px 0;
        text-align:center;
        font-size:18px;
        color:#666;
        border-bottom:2px solid #eee;
    }
    .pbCcloseIcon{
        background:url(index_files/close.jpg) no-repeat center center;
        background-size:100%;
        display:inline-block;
        position:absolute;
        top:0;
        right:0;
        width:31px;
        height:31px;
        border-radius:10px;
    }
    .pbCImg{
        margin-top:12%;
        text-align:center;
    }
    .pbCImg img{
        display:inline-block;
        width:auto !important;
    }
    .pbCTitle2{
        font-size:16px;
        margin-top:10px;
        padding:0 10px;
    }
    .pbCTitle2 .public{
        color:#f54343;
        font-weight:bold;
    }
    .pbCTitle3{
        font-size:14px;
        color:#999;
        margin-top:10px;
        padding:0 10px;
    }
    .pbCTowxBox{
        position:absolute;
        bottom:18px;
        width:100%;
    }
    .pbCTowx{
        width:90%;
        display:block;
        margin:0 auto;
        text-decoration:underline;
        background-color:#f54343;
        border-radius:5px;
        color:#fff;
        font-size:16px;
        padding:10px 0;
        border:1px solid rgba(255,0,0,.5);
        box-shadow:1px 1px 2px rgba(0,0,0,.6);
    }




    </style>

    <!-- popBox right-->
    <button class="addWxIcon public-name" data-clipboard-text=""></button>
    <div class="pbOpacity">
        <div class="pbContent">
            <i class="pbCcloseIcon"></i>
            <p class="pbCTitle1">加微信</p>
            <div class="pbCImg">
                <img src="http://img.heven.top/rb_bak/index_files/righticon.png" alt="">
            </div>
            <p class="pbCTitle2">恭喜您，微信号 <strong class="public-name" style="color: #fff; font-size: 18px; background-color: rgb(255,89,89)" data-clipboard-text="<?php echo $stxlwx?>"><?php echo $stxlwx;?></strong> 已复制成功！</p>
            <p class="pbCTitle3">点击下方按钮打开微信并搜索好友</p>
            <div class="pbCTowxBox">
                <span class="pbCTowx" style="color: #fff" data-setting-click="2" href="#" onclick="go()">打开微信</a>
            </div>
        </div>
    </div>


    <!-- popBox error-->
    <div class="pbOpacityError">
        <div class="pbContent">
            <i class="pbCcloseIcon"></i>
            <p class="pbCTitle1">加微信</p>
            <div class="pbCImg">
                <p class="pbCTitle2">您的浏览器不支持自动复制功能，请手动复制微信</p>
            </div>
            <p class="pbCTitle2">长按复制 <strong class="public-name" style="color: #fff; font-size: 18px; background-color: rgb(255,89,89)" data-clipboard-text=""><?php echo $stxlwx;?></strong> 添加好友</p>
            <p class="pbCTitle3">点击下方按钮打开微信并搜索好友</p>
            <div class="pbCTowxBox">
                <span class="pbCTowx" style="color: #fff" data-setting-click="2"  onclick="go()">打开微信</a>
            </div>
        </div>
    </div>

    
<input id="showWx" class="js-weixinnumber" type="hidden">
<div class="g-doc" id="wrapper">
    <nav class="m-nav" style="padding-top:.7rem;padding-bottom:.5rem;">
        <img src="http://img.heven.top/rb_bak/index_files/1.png">
    </nav>
    <div class="g-mm">
        <div class="g-bd" style="margin-bottom:15px;">
          <div class="m-message">
            <h3 class="h3" style="text-align:center;"><strong>为什么有的人想瘦就能瘦？</strong><br><strong>为什么喝凉水都长肉？</strong><br><strong>30天瘦30斤怎样才能做到？</strong></h3>
          </div>
            <h3 class="h3 h3c">190斤胖妹直播减肥<br><span class="ph">100天</span>暴瘦<span class="ph">100斤</span>！大写的<span class="ph">牛</span>！</h3>
            <p class="newt">互联网时代，每个人都可能成为明星，最近头条媒体报道这样一则消息，惊呆数十万读者！网络主
播"大胃王"小迪（1顿饭可以吃普通人6顿饭的量），严重肥胖体重一度高达197斤！就是这样一个大胖子仅仅100天竟然瘦了100斤！平均每天瘦掉1
斤，让她迅速成为胖友们追捧的瘦身女神。</p>
			<div class="timg"><img src="http://img.heven.top/rb_bak/index_files/o1cn01i0mcmn1pdlzsqq0zm_4269805326.jpg"></div><br>
            <h3 class="h3 h3c"><span class="ph">100天</span>暴瘦<span class="ph">100斤</span>！原来就在生活中！</h3>
            <p class="newt">为了赚钱，本就能吃的小迪每次在镜头前更是卖力的吃，一年下来，粉丝多了，钱也赚了不少，然而
体重却暴涨至197斤。这时候家里人说什么都不让她做"大胃王"直播了，身体垮了什么都没有了！粉丝们更是一连3个月没见到小迪的踪影。当小迪再次走到直
播镜头前时，简直就是脱胎换骨一般暴瘦100斤，粉丝们直呼难以置信！</p>
			<div class="timg"><img src="http://img.heven.top/rb_bak/index_files/o1cn01vrryq01pdlzusfrmx_4269805326.jpg"></div>
            <p class="newt">短短100天的时间，胖的像球一样的胖妹真的爆瘦到100斤！大肚子变成了小蛮腰，大饼脸没了，大象腿变成了小细腿，竟然还露出了深深的锁骨！小迪前后变化之大，实在令人匪夷所思！</p>
			<div class="timg"><img src="http://img.heven.top/rb_bak/index_files/o1cn01vjqbyt1pdlzod8dw8_4269805326.jpg"></div><br>
            <h3 class="h3 h3c"><span class="ph">100天</span>暴瘦<span class="ph">100斤</span>的秘密：<br>把吃进去的油全部<span class="ph">排出来</span>！</h3>
            <p class="newt">小迪为何能做到100天暴瘦100斤？原来小迪的父亲是一位具有丰富教学经验的大学生物老师。正是他，为了让女儿减肥成功，不惜以自己亲身实验，前后经历数千次实验，终于用常见的蔬菜和水果，调试出一种堪称刮油神器的生物"刮油汤"！</p>
            
            <section class="Powered-by-XIUMI V5" powered-by="xiumi.us" style="position: static; box-sizing: border-box;">
                            <section class="" style="position: static; box-sizing: border-box;">
                                <section class="" style="text-align: center; box-sizing: border-box;">
                                    <p style="margin: 0px; padding: 0px; box-sizing: border-box;">
                                        <span style="color: #9e16a2; font-weight: 800; box-sizing: border-box;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">“看，就是这种粉沫”</font></font>
                                        </span>
                                    </p>
                                    
                                </section>
                            </section>
                        </section>
                        <section class="Powered-by-XIUMI V5" powered-by="xiumi.us" style="position: static; box-sizing: border-box;">
                            <section class="" style="text-align: center; margin-top: 10px; margin-bottom: 10px; position: static; box-sizing: border-box;">
                                <img class="lazyload" src="http://img.heven.top/rb_bak/index_files/c422811b-136d-4e68-9c8a-50b3782d516b.jpg" style="max-width: 100%; vertical-align: middle; box-sizing: border-box;">
                            </section>
                        </section>
<p class="newt"><strong>小迪还分享了一段“神奇粉末”的效果视频，看完都惊住了！</strong></p>
            
<iframe frameborder="0" style="width:100%;height:350px;" src="https://v.qq.com/txp/iframe/player.html?vid=c0880fwqt9e" allowfullscreen="true"></iframe>



            <p class="newt" style="font-family:&#39;微软雅黑&#39;;font-weight:700;">（每天的饭菜里面这么多油，吃进肚里不胖才怪啊！这么多油脂不排出去怎么可能瘦身成功呢？用了小迪父亲的方法后，一块块油脂全部被包裹起来，全都排出去了，想胖都难！）</p><br>

            <h3 class="h3 h3c">这种排油减肥方法适用任何人吗？<br>答案是<span style="color:#feff00;">肯定的</span></h3>
            <p class="newt">用生物学的一句话说：大自然万物相生相克，脂肪既然能形成，必然就有一物能将其分解！</p>
            <p class="newt">研究发现凡是吃进身体的脂肪，都能通过后天调理将脂肪分解掉。排油减肥成为目前最有效的减肥方法。如今，本来很多人迷惑的如何快速减肥，保持身材纤瘦的秘密已经被揭开神秘的面纱。</p>
            <p class="newt">如果你觉得自己很容易胖，而且不容易瘦下来，那你应该是体内油脂超标了。 切记：只有排出体内油脂，才是减肥的王道，而不是靠节食排出体内水分。</p><br>
            <p style="text-align:center;font-weight:bold;">（测试结果提供老师免费一对一咨询名额）</p>
    </div>



    <style>
        .content .menu li.on {
            border-bottom-color: #FFA4A4;
        }
    </style>
    <div class="content">
        <div class="thame_pic top" id="lazy_img">
            <div class="menu clf">
                <ul>

                    <li class="on" id="csbt" style="width:100%;color:#1d1d1d;">已有<span style="color:#fd2323;font-weight: 700;">65634</span>人参与，成功瘦身率 <span style="color:#fd2323;font-weight: 700;">99.32%</span></li>
                    <!--<li class="">粉丝留言</li> -->
                </ul>
            </div>
            <div class="change clf">
                <div id="case" style="display: block;">
                    <div id="swiper_container">
                        <div class="swiper-container swiper-container-horizontal" style="height: 13rem;">
                            <div class="swiper-wrapper notmove">
                                <div class="swiper-slide swiper-slide-active" style="width: 592px;">

                                    <div class="first" id="first">
                                        <div class="tips">剩7题</div>
                                        <h3 style="margin-top:0;">1.你的年龄是？</h3>
                                        <ul class="clf">
                                            <li id="a-18">18岁-25岁</li>
                                            <li class="G-18">25岁-35岁</li>
                                            <li class="G-18">36岁-45岁</li>
                                            <li class="G-18">45岁以上</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" style="width: 592px;">

                                    <div class="first">
                                        <div class="tips">剩6题</div>
                                        <h3 style="margin-top:0;">2.你的身高？</h3>
                                        <ul class="clf" id="second">

                                            <li>155cm以下</li>
                                            <li>155cm-165cm</li>
                                            <li>166-175cm</li>
                                            <li>176cm以上</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 592px;">

                                    <div class="first">
                                        <div class="tips">剩5题</div>
                                        <h3 style="margin-top:0;">3.你的体重范围？</h3>
                                        <ul class="clf" id="second">
                                            <li>50kg以下</li>
                                            <li>51kg-65kg</li>
                                            <li>66kg-75kg</li>
                                            <li>75kg以上</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 592px;">

                                    <div class="first">
                                        <div class="tips">剩4题</div>
                                        <h3 style="margin-top:0;">4.小时候就胖吗？</h3>
                                        <ul class="clf" id="second">
                                            <li>是</li>
                                            <li>否</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 592px;">

                                    <div class="first">
                                        <div class="tips">剩3题</div>
                                        <h3 style="margin-top:0;">5.是否经常吃宵夜</h3>
                                        <ul class="clf" id="second">
                                            <li>是</li>
                                            <li>不是</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 592px;">

                                    <div class="first">
                                        <div class="tips">剩2题</div>
                                        <h3 style="margin-top:0;">6.每天睡眠能否控制在7-8小时？</h3>
                                        <ul class="clf" id="second">
                                            <li>能</li>
                                            <li>不能</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="swiper-slide" style="width: 592px;">

                                    <div class="first">
                                        <div class="tips">剩1题</div>
                                        <h3 style="margin-top:0;">7.不经常运动？</h3>
                                        <ul class="clf" id="second">
                                            <li>是</li>
                                            <li>否</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 592px;">

                                    <div class="first">
                                        <div class="tips"></div>
                                        <h3 style="margin-top:0;">8.在家时总是闲着不动？</h3>
                                        <ul class="clf" id="second">
                                            <li>是</li>
                                            <li>否</li>
                                        </ul>
                                        <p><a style="background: #FFA4A4;color:#ffffff;  margin-top: 20px !important;" id="submit_btn">提交</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div id="comment" style="display: none;">
                    <ul>
                        <li style="margin-top:20px;"><div class="user_txt clf" style="  font-size:.8rem;  color: #FFA4A4;">测试已完成，请添加下面微信号，查看更多排油视频，获取适合您的排油方法<span style="color:#6e8e7c;font-size:.59rem;"></span></div>

                            <div style="color:#ff5722;text-align:center;font-weight: bold;margin-top:20px;font-size:.67rem;"> 恭喜！获得了今天VIP指导名额</div>

                            <div style="margin-top:5px;text-align:center;font-weight: bold;color:#ff5722;font-size:.62rem;display:none;">系统为你分配专业瘦身师个人微信号</div>
                            <div class="prx">
                                <div class="Mask_txtx">
                                    <p style="text-align: center; margin-top: .6rem; font-size: .6rem; color: #9b9b9b;">长按微信号拷贝/复制,点开微信，右上角有个"十"的符号，选择"添加朋友"，然后粘贴</p>
                                    <div class="Mask_wechat wechatCode"><?php echo $stxlwx;?></div>
                                    <p style="text-align: center; margin-top: .6rem; font-size: .65rem; color: #9b9b9b;">第二步：复制微信后，点击下面文字↓↓↓↓</p>

                                    <center><span class="weixinid public-name gocopy"  href="javascript:;" data-clipboard-text="">
                                        <font color="#ff0000" onclick="gotocopy()">打开微信添加</font>
      </span></center>

                                  
                                </div>


                            </div>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
    <div id="Mask">
        <div class="pr">
            <!-- <img src="picture/tb2cygllkj8pufjy1xbxxagqvxa-65979781.png"> -->
            <div class="Mask_txt">
                <p><font color="#f44336"><span>您这属于易胖体质</span>，估算减肥空间5-35斤。您目前体质极易因为吸收惯性和脂肪分解缓慢，囤积多余脂肪导致持续性肥胖或反复性肥胖。只要经过老师专业指导，可调理改善为易瘦体质，达到真正轻松瘦身。可添加下面老师微信号，进行一对一咨询：</font></p>
            </div>
            <div class="close_Mask"></div>
            <a href="javascript:void(0);" class="add_btn Link">+ 加好友</a>
        </div>
    </div>
    <div id="thumb">
        <div class="swiper-container swiper-container-horizontal" style="margin-top:4rem;">
            <div class="swiper-wrapper" style="transition-duration: 0ms;">
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="thumb_close">x</div>
    </div>
    <div class="qq_Mask">
        <div class="pr">
            <!-- <img src="picture/tb2cygllkj8pufjy1xbxxagqvxa-65979781.png"> -->
            <div class="Mask_txt">
                <p style="text-align: center; margin-top: .6rem; font-size: .8rem; color: #9b9b9b;">长按微信号拷贝/复制,点开微信，右上角有个"十"的符号，选择"添加朋友"，然后粘贴</p>
                <div class="Mask_wechat"><strong id="no_dc_Dlg"><span class="wechat_txtnum" ontouchstart="gtouchstart()" ontouchmove="gtouchmove()" ontouchend="gtouchend()" id="wxlb"> </span></strong></div>
                <p style="text-align: center; margin-top: .6rem; font-size: .8rem; color: #9b9b9b;">这个微信号进行搜索，点击添加就可以了
                </p>
            </div>
            <div class="close_Mask"></div>
        </div>
    </div>

    <style>
        .Mask_txt {
            position: absolute;
            top: 5rem;
            font-size: .7rem;
            padding: .6rem;
        }#Mask .close_Mask {
             width: 3rem;
             height: 3rem;
             position: absolute;
             right: 0;
             top: 5rem;
         }
        .qq_Mask .Mask_txt {
            position: absolute;
            top: 6rem;
            font-size: .7rem;
            padding: .6rem;
        }
        .qq_Mask .close_Mask {
            width: 3rem;
            height: 3rem;
            position: absolute;
            right: 0;
            top: 5rem;
        }
    </style>




          <style>
            /*评论活动*/

            .winner_tips {
              font-size: 14px;
              border-bottom: 1px solid #f0f0f0;
              border-top: 1px solid #f0f0f0;
              margin: 5px 0;
              height: 40px;
              line-height: 40px;
              background: url(images/lw.png) no-repeat 4px 7px;
              background-size: 24px auto;
              padding-left: 36px
            }

            .winner_tips a {
              color: #3990e6;
            }

            .winner_tips span {
              color: #f22f6d
            }

            .cmnt_op_bottom {
              clear: both;
              font-size: 10px;
              margin-top: 8px;
              margin-bottom: 4px;
              position: relative;
              color: #aaa
            }

            .cmnt_op_bottom_times {
              float: left;
              line-height: 16px;
              font-size: 12px;
            }

            .cmnt_op {
              position: absolute;
              right: 0;
              top: 0;
              display: block;
              height: 16px;
              line-height: 16px;
              text-align: right;
              overflow: visible;
            }

            .cmnt_op_bottom_report {
              float: left;
              line-height: 16px;
              padding-left: 12px;
              color: #aaa;
            }

            .cmnt_op_bottom_report.on {
              color: #d2d2d2;
            }

            /*评论*/

            .cmnt_article {
              clear: both;
              overflow: hidden;
              *zoom: 1;
            }

            .cmnt_title {
              height: 24px;
              position: relative;
              margin: 5px 0;
            }

            .cmnt_title span {
              display: block;
              position: absolute;
              left: -15px;
              top: 0;
              height: 24px;
              width: 72px;
              background: #21acfd;
              line-height: 24px;
              text-align: center;
              font-size: 12px;
              color: #fff;
            }

            .cmnt_item {
              clear: both;
              overflow: hidden;
              *zoom: 1;
              padding: 0 0 12px 38px;
              border-bottom: 1px solid #f0f0f0;
              position: relative;
            }

            .cmnt_item:last-child {
              border-bottom: none;
            }

            .cmnt_top {
              clear: both;
              overflow: hidden;
              height: 30px;
              line-height: 30px;
              font-size: 13px;
              color: #00a0fe;
              margin: 14px 0 -8px -38px;
              position: relative;
            }

            .cmnt_base .cmnt_top {
              height: 40px;
              line-height: 24px;
              font-size: 12px;
              margin: 0 0 2px;
              color: #333;
            }

            .cmnt_top span:first-child {
              display: block;
              color: #3990e6;
              position: relative;
              padding-left: 38px;
              background: url(images/tb2d1lcoipnpufjszfkxxc4zpxa_!!2684310334.png) no-repeat;
              background-size: 100px auto;
              background-position: 0 -336px;
            }

            .cmnt_top .cmnt_source {
              display: block;
              color: #999;
              font-size: 10px;
              height: 16px;
              line-height: 16px;
              white-space: nowrap;
              text-overflow: ellipsis;
              overflow: hidden
            }

            .cmnt_top .cmnt_nick {
              display: block;
              height: 20px;
              line-height: 20px;
              font-style: normal;
              white-space: nowrap;
              text-overflow: ellipsis;
              overflow: hidden
            }

            .cmnt_top .cmnt_nick em {
              display: inline-block;
              font-size: 10px;
              color: #aaa;
              margin-left: 4px;
              font-style: normal
            }

            .phone {
              display: inline-block;
              vertical-align: middle;
              width: 0;
            }

            .cmnt_top .cmnt_time {
              display: block;
              height: 14px;
              line-height: 14px;
              font-size: 10px;
              color: #999;
              font-style: normal;
              white-space: nowrap;
              text-overflow: ellipsis;
              overflow: hidden
            }

            .cmnt_base .cmnt_top span {
              padding-left: 0;
              background: none;
              white-space: nowrap;
              text-overflow: ellipsis;
              overflow: hidden
            }

            .cmnt_top span img {
              position: absolute;
              left: 0;
              top: 0;
              width: 30px;
              height: 30px;
              -moz-border-radius: 15px;
              -webkit-border-radius: 15px;
              border-radius: 15px;
            }

            .cmnt_top code {
              font-size: 10px;
              color: #999;
              position: absolute;
              right: 0;
              top: 0;
              display: block;
              height: 24px;
              line-height: 24px;
              width: 45px;
              text-align: right;
            }

            .cmnt_top .editor {
              font-size: 9px;
              font-style: normal;
              line-height: 19px;
              padding: 0 10px 1px 21px;
              border: 1px solid #fe7358;
              border-radius: 10px;
              color: #fe7358;
              margin-left: 10px;
              background: url(images/tb2d1lcoipnpufjszfkxxc4zpxa_!!2684310334.png) no-repeat;
              background-size: 100px auto;
              background-position: 9px -539px;
            }

            .cmnt_base .cmnt_top code {
              font-size: 12px;
              color: #8b8b7e;
              top: 7px;
              width: 30px;
              text-align: center;
            }

            .cmnt_text {
              font-size: 15px;
              line-height: 20px;
              text-align: justify;
              color: #333;
              padding: 2px 0;
              word-break: break-all;
              word-wrap: break-word;
              margin-top: 2px;
              padding-right: .5rem;
            }

            .cmnt_quote {
              font-size: 12px;
              color: #3990e6;
              padding: 10px 5px;
              text-indent: 2em;
              background: #f2f2f2;
              margin: 10px 0 0 0;
              clear: both;
            }

            .cmnt_text a {
              margin-left: 10px;
              color: #5494EA;
              font-size: 12px;
            }

            .cmnt_op {
              position: absolute;
              right: 0;
              top: 13px;
              display: block;
              height: 16px;
              line-height: 16px;
              text-align: right;
              overflow: visible;
            }

            .cmnt_op_all {
              position: absolute;
              right: -284px;
              top: 0;
              z-index: 9;
              background: rgba(54, 62, 71, 0.95);
              width: 264px;
              text-align: center;
              height: 44px;
              line-height: 44px;
              -moz-border-radius: 4px;
              -webkit-border-radius: 4px;
              border-radius: 4px;
              padding-left: 20px;
            }

            .cmnt_op a,
            .cmnt_op_all a {
              background: url(images/tb2d1lcoipnpufjszfkxxc4zpxa_!!2684310334.png) no-repeat;
              background-size: 100px auto;
              color: #aaa
            }

            .cmnt_op a,
            .cmnt_op_all a {
              display: inline-block;
              vertical-align: middle;
              height: 16px;
              line-height: 16px;
            }

            .cmnt_op_all a.pl {
              background-position: -46px -69px;
              width: 16px;
              padding: 0 16px;
            }

            .cmnt_op_all a {
              border-right: 1px solid #525960;
            }

            .cmnt_op_all a:last-child {
              border: none;
            }

            .cmnt_op_all a.good {
              padding-left: 22px;
              color: #fff;
              background-position: -60px -105px;
              font-size: 12px;
              position: relative;
              padding-right: 16px;
            }

            .cmnt_op_all a.good.on {
              background-position: 0 -136px
            }

            .cmnt_op a.good {
              padding-left: 20px;
              color: #999;
              background-position: 0 -105px;
              font-size: 12px;
              position: relative;
              padding-right: 10px;
            }

            .cmnt_op a.good::after {
              width: 1px;
              content: '';
              display: inline-block;
              height: 14px;
              background: #dfdfdf;
              position: absolute;
              right: -1px;
              top: 1px;
            }

            .cmnt_op a.good.on {
              background-position: 0 -136px
            }

            .cmnt_op a.cmntico {
              padding-left: 22px;
              color: #aaa;
              margin-left: 10px;
              background-position: 0 -69px;
              font-size: 12px;
              position: relative;
              padding-right: 5px;
            }

            .cmnt_op_all a.send {
              background-position: -42px -167px;
              width: 16px;
              padding: 0 20px;
            }

            .cmnt_op_all a.fold {
              background-position: 20px -190px;
              width: 16px;
              padding: 0 20px;
            }

            .cmnt_op a.unfold {
              width: 28px;
              background-position: -50px -190px;
            }

            .cmnt_op .fly,
            .cmnt_op_all .fly {
              position: absolute;
              display: inline-block;
              background-size: 100px auto;
              background-position: 0 -140px;
              width: 16px;
              height: 16px;
              left: 0;
              top: 0;
              opacity: 1;
              animation: flying 0.6s;
              -moz-animation: flying 0.6s;
              /* Firefox */
              -webkit-animation: flying 0.6s;
              /* Safari and Chrome */
              -o-animation: flying 0.6s;
              /* Opera */
              animation-fill-mode: forwards;
              -moz-animation-fill-mode: forwards;
              -webkit-animation-fill-mode: forwards;
              -o-animation-fill-mode: forwards;
            }
          </style>

<div class="input_wrap" id="comment1">
            <div class="cmnt_article">
              <div class="cmnt_list" id="j_newslist">
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/151.jpg">
                      <i class="cmnt_nick">MIN海棠朵朵
                        <em>甘肃兰州</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">全靠老师的帮忙！我终于减到了90了，太给力了。</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">今天</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_0" href="javascript:void(0);" title="赞" class="good j_favor_single">3528</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_0"></a>
                    </span>
                  </div>
                </div>

                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/tb2s0bkybbmpufjszfaxxaq0pxa_2684310334.jpg">
                      <i class="cmnt_nick">小kitt
                        <em>广西桂林</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">我测试到易胖体质，不过我都猜到的了。。幸好得到了老师的咨询名额！</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">今天</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_1" href="javascript:void(0);" title="赞" class="good j_favor_single">1944</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_1"></a>
                    </span>
                  </div>
                </div>

                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/451.jpg">
                      <i class="cmnt_nick">linykn
                        <em>北京东城</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">全靠老师教我怎么正确瘦身，我目前已经减到95了，被肥胖问题煎熬了几年时间，现在才发现原来瘦身原来这么简单！！老师是美丽与智慧的化身！太专业了，如果她不说，自己根本学习不到。~~</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">今天</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_1" href="javascript:void(0);" title="赞" class="good j_favor_single">1944</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_1"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/tb2mcyyxkukykjjy1zjxxx1wfxa_2684310334.jpg">
                      <i class="cmnt_nick">蒙咪
                        <em>广东汕头</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">可能不少人不知道怎么添加老师。大家只要做一下上面的简单测试，测试结束后只要满足条件就能获取老师的微信号，大家不妨试下</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">今天</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_1" href="javascript:void(0);" title="赞" class="good j_favor_single">1944</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_1"></a>
                    </span>
                  </div>
                </div>

                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/651.jpg">
                      <i class="cmnt_nick">与云共舞
                        <em>四川成都</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">老师人真好，昨天帮我彻底的分析了我的肥胖原因，给我提了好多意见， 现在正用老师的方案调理，就几天时间体重已经开始有所下降了~太好了</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">今天</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_2" href="javascript:void(0);" title="赞" class="good j_favor_single">621</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_2"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/561.jpg">
                      <i class="cmnt_nick">Crystal
                        <em>吉林长春</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">从来没想到，我原来胖的原因是因为体质问题。早点看到这个就好了，很幸运获得了老师咨询名额！</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">2天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_3" href="javascript:void(0);" title="赞" class="good j_favor_single">733</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_3"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/751.jpg">
                      <i class="cmnt_nick">你笑起来很美
                        <em>江苏苏州</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">这么多年的肥胖体质谜题终于解开了，终于不用受到肥胖问题困扰了。</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">2天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">423</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/abea0221jw8f4y4fwh45fj20hs0vktdb.jpg" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">Y Jing
                        <em>天津</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">这几天一直坚持用老师建议的方案，最近体重每天都有不同程度的变化，我要坚持 下去，我相信老师。等真的好了我要给老师发红包谢谢她！</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">2天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">1388</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/default_avatar_male_50.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">淡淡的游泳鱼
                        <em>广东潮州</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">我生完宝宝后胖了很多，而且一直减不下来，就是老师帮我成功瘦的，好开心</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">3天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">265</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/1_004.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">甜芦苇M鹿M
                        <em>云南玉溪</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">测试到我是易胖体质，获得了咨询名额！老师的声音很甜，分享的案例很霸道，真的学到很多知识。。。。。</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">3天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">265</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/default_avatar_male_50.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">枫叶一秋
                        <em>江苏南京</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">刚开始用老师的调理方案，本人是顽固性肥胖，使用了15天，明显瘦了一圈，继续中..</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">3天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">916</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>

                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/1_005.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">李果果322
                        <em>北京</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">老师我也加了，后来知道原来是一些明星的私人体重管理顾问，太牛了...虽然这样，平时一点架子都没，很友善。</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">5天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">321</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/default_avatar_male_50.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">MMMP
                        <em>重庆</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">我是一名大学男教师，因为年前时候没怎么饮食问题，还喝酒比较多，从年轻时候120长到150多...最终是老师帮忙瘦到了125！！！！感觉回到了过去~~</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">5天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">411</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/1_002.jpg" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">上善若水627188
                        <em>安徽安庆</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">我也是易胖体质，不怪的吃不多也长胖..幸好有咨询名额

                  </p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">5天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">224</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/0060e7kcjw8f0098j6pupj30ig0ihq4f.jpg" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">小紫羽
                        <em>上海</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">我妹妹，脸蛋不错，就是太胖。后来我坚持让她瘦下来，最终我判断没错。。成功减肥后变成大美女，其他人说瘦了的她比我漂亮。。身材太重要了,弄的我现在有点嫉妒了！</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">6天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">225</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/default_avatar_male_50.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">甄嬛传
                        <em>北京</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">天，原来我一直瘦不下来竟然是这个体质问题啊！！！</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">6天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">1118</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/default_avatar_male_50.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">Yanqing1020
                        <em>浙江杭州</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">重要找到希望了，555555555，已经关注了老师，教了我方案了，希望我也可以快点瘦起来。</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">7天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">268</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/1.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">背黑锅_小怪兽
                        <em>广东广州</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">这位老师真的挺厉害，我自小就比较胖，小时候胖点可爱，长大后才发现可怕，影响到我生活上的一切！后来不知道怎么找到这位美女老师，竟然真帮我瘦下来了，她在我们当地还是很有名气的，现在好像是在广州工作了。</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">7天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">224</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/1.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">gz小米粥
                        <em>浙江杭州</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">我是那种局部性肥胖，就大腿和手臂粗，竟然也可以通过改变体质瘦下来，太厉害了</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">8天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">224</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/005zxomdjw8eomtod1r34j302s02st8j.jpg" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">红彤hello
                        <em>四川广元</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">肥胖真的害处多多，比如影响健康，影响工作，影响找对象，，虽然大家都说内在美最重要，但是现实太残酷！</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">9天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">341</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/default_avatar_male_50.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">平菇test
                        <em>上海</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">上面那位说的太对了，这个社会就这样这样。因为老婆发胖了，出去搞三搞四的人不计其数。女人也好，男人也好，还是要为自己负责，该行动起来就行动起来，拥有好身材就是一个大资本！</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">9天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">371</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/default_avatar_male_50.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">幺儿宝贝
                        <em>山东济南</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">其实谁不想瘦呢。。。。。很多网友推荐的瘦身老师，我也想试试。</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">10天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">571</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/default_avatar_male_50.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">桃花源
                        <em>江西南昌</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">文章写得客观科学，第一次听说易胖体质，就抱着希望关注了看，现在用老师给我推荐的方案有一周多了，体重明显得到控制，我昨天称了大概减了9斤。我还在继续用，如果真瘦到95以下的话我再来跟大家回报。</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">10天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">198</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/1.jpg" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">华水雪
                        <em>河南郑州</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">看了朋友圈，瘦身知识很详细，各种情况的案例分析，我感觉肥胖的自己真有救了！</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">10天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">398</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>

                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/1_002.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">似水风情
                        <em>浙江杭州</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">我是一名空姐，今年已经25了，最近体重有点控制不住的感觉。已经加老师微信了，老师帮我分析了一下，我觉得很有道理。有专业的人帮就是不一样啊！我打算今天开始实践了！</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">11天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">314</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>
                <div class="cmnt_item">
                  <p class="cmnt_top">
                    <span>
                      <img src="http://img.heven.top/rb_bak/index_files/1_003.gif" alt="阿痕OverTheRainbow">
                      <i class="cmnt_nick">不要羡慕我年轻
                        <em>陕西西安</em>
                      </i>
                    </span>
                  </p>
                  <p class="cmnt_text">以前肥时候真的很烦，自己胡乱琢磨各种方案和产品，结果瘦了一点点，教训奉劝大家，要减肥还是要找个老师比较好，，不要自己乱来了，其实方案正确了，减肥很的不难，而且轻松。</p>
                  <div class="cmnt_op_bottom clearfix">
                    <p class="cmnt_op_bottom_times">11天前</p>

                    <span class="cmnt_op">
                      <a data-sudaclick="comment2_4" href="javascript:void(0);" title="赞" class="good j_favor_single">411</a>
                      <a href="javascript:void(0);" title="评论" class="cmntico j_cmnt_single" data-sudaclick="comment1_4"></a>
                    </span>
                  </div>
                </div>


              </div>
            </div>
          </div>

     <center style="font-size: 15px;color:#ccc;"><p>  </p></center>

            <!-- 二维码 -->
            <style>
            @media screen and (max-width:1099px) {
                .fixed {
                    display:none
                }
            }
            .fixed {
                background: #fff;
                border: 1px solid red;
                border-radius: 10px;
                position: fixed;
                right: 5%;
                top: 30%;
                text-align: center;
                padding: 10px;
                box-sizing: border-box;
				font-size:16px;
            }
            .fixed img {
                width: 200px;
                display: flex;
            }
            </style>




</div>
<div class="modal" id="myModal" style="font-size:20px;">
    <div class="tzcover"></div>
    <div class="modal-sm">
        <div class="modal-header">
            <img src="http://img.heven.top/rb_bak/index_files/o1cn01thkrwy1pdlzuxzjfc_4269805326.png" alt="" style="width:28%;">
            <p id="mydel">X</p>
        </div>
        <div class="modal-content">
        	<img src="http://img.heven.top/rb_bak/index_files/o1cn01wby1ei1pdlzsotcmp_4269805326.png">
            <div style="padding:0 8px;">
                <h3 style="color:#FFA4A4;font-weight:bold;">请添加下方微信好友：</h3>
	  <span class="account  click_copy" oncopy="push_log()" pcs="qrcode" style="background:#FFA4A4;font-size:1.3rem;color:#fff;padding:0px 8px 8px 8px;"></span>
                <p style="font-size:0.7rem;padding:8px 0;color:#000;font-family:&#39;微软雅黑&#39;;">每天<span style="color:#FFA4A4;font-weight:bold;">前100名</span>可查看刮油视频！</p>
                <p><a href="weixin://"><img src="http://img.heven.top/rb_bak/index_files/o1cn01eoyeh31pdlzodczut_4269805326.png" style="width:50%;"></a></p>
                <div style="width:85%;padding:8px 0;margin:0 auto;text-align:left;font-size:0.6rem;color:#000;"><span style="color:#000;font-weight:600;font-size:0.8rem;">温馨提示:</span><br>每天查看刮油视频人数太多，好友已达上限，加好友后请立即咨询，不说话者将统一拉黑处理。</div>
            </div>
        </div>
    </div>
</div>
<div style="position: fixed;right: 0;top: 75%;z-index:1000;display:none;"><a><img src="http://img.heven.top/rb_bak/index_files/o1cn01hdv2nt1pdlzod4o8g_4269805326.gif" class="xxw" style="width: 27%;position: fixed;right: -20px;top: 80%;" id="dt"></a></div>
<script type="text/javascript" src="http://img.heven.top/rb_bak/index_files/jquery.js.下载"></script>
<script type="text/javascript" src="http://img.heven.top/rb_bak/index_files/clipboard.js.下载"></script>
<script>


    var mySwiper = new Swiper('#case .swiper-container', {
        noSwiping: true,
        noSwipingClass: 'notmove',
    });

    var mySecSwiper = new Swiper('#thumb .swiper-container', {
        observer: true,//修改swiper自己或子元素时，自动初始化swiper
        observeParents: true,//修改swiper的父元素时，自动初始化swiper
        prevButton: '.swiper-button-prev',
        nextButton: '.swiper-button-next',
        initialSlide: 0,
    });

</script>
<script type="text/javascript">
  function gotocopy(){
    $(".gocopy").click()
  }
    function copyArticle(event) {
      console.log(1)
        const range = document.createRange();
        range.selectNode(document.querySelector("#qb13"));

        const selection = window.getSelection();
        if(selection.rangeCount > 0) selection.removeAllRanges();
        selection.addRange(range);
        document.execCommand('Copy');
        $.ajax({
          url:'http://heven.top:8000/app/log',
          method:'post',
          data:{'type':'copy','local_url':window.location.href,'weixin':"<?php echo $stxlwx?>"},
          
        })
        $(".pbOpacity").fadeIn(600);
        
        // alert("复制成功！");
    }
    document.querySelector(".gocopy").addEventListener('click', copyArticle, false);

        // $(document).ready(function() {  
             
        //     <!-- copy func -->
        //     var clipboard = new Clipboard('.public-name');
            
        //     clipboard.on('success', function(e) {
        //       $.ajax({
        //     url:'http://heven.top:8000/app/log',
        //     method:'post',
        //     data:{'type':'copy','local_url':window.location.href,'weixin':"<?php echo $stxlwx?>"},
            
        //   })
        //         $(".pbOpacity").fadeIn(600);
        //     });
            
        //     clipboard.on('error', function(e) {
        //         console.log(e);
        //         $(".pbOpacityError").fadeIn(600);
        //     });
            
        //     // $(".public-name").attr("data-clipboard-text",znstxlwx);

        //     // $(".pbCcloseIcon").click(function(){
        //     //     $(".pbOpacity,.pbOpacityError").fadeOut(600);
        //     // });
            
        // }); 
    </script>
    <script>
      $.ajax({
            url:'http://heven.top:8000/app/log',
            method:'post',
            data:{'type':'load','local_url':window.location.href,'weixin':"<?php echo $stxlwx?>"},
        })
        /*copyPop*/
        $(document).ready(function() {  
            $(".weixinid").bind({  
                copy : function(){  
                  $.ajax({
            url:'http://heven.top:8000/app/log',
            method:'post',
            data:{'type':'gowechat','local_url':window.location.href,'weixin':"<?php echo $stxlwx?>"},
            success:function(){
              window.location.href='weixin://';
            },
            error:function(){
              window.location.href='weixin://';
            }
          })
                  
                }
            });  
        }); 
        function go(){
          $.ajax({
            url:'http://heven.top:8000/app/log',
            method:'post',
            data:{'type':'gowechat','local_url':window.location.href,'weixin':"<?php echo $stxlwx?>"},
            success:function(){
              window.location.href='weixin://';
            },
            error:function(){
              window.location.href='weixin://';
            }
          })
        }
    </script>
<st-div id="__selection-translator__"> <st-div class="__st-box__" style="display: none; position: fixed; z-index: 99999; left: 0px; top: 0px; transform: translateX(1205px) translateY(394px);"> <st-header> <st-span class="st-icon-pin" title="固定"></st-span> <st-span class="st-icon-down-open" title="展开"></st-span> <st-span class="st-icon-cog" title="设置"></st-span> </st-header> <st-div class="__query-form__" style="display: none;"> <st-div> <textarea placeholder="输入要翻译的句子或单词"></textarea> </st-div> <st-div> <select> <option value="">自动判断</option> <option value="zh">中文</option><option value="zh-CN">中文(简体)</option><option value="zh-HK">中文(香港)</option><option value="zh-TW">中文(繁体)</option><option value="en">英语</option><option value="ja">日语</option><option value="ko">朝鲜语</option><option value="de">德语</option><option value="fr">法语</option><option value="ru">俄语</option><option value="th">泰语</option><option value="af">南非语</option><option value="ar">阿拉伯语</option><option value="az">阿塞拜疆语</option><option value="be">比利时语</option><option value="bg">保加利亚语</option><option value="ca">加泰隆语</option><option value="cs">捷克语</option><option value="cy">威尔士语</option><option value="da">丹麦语</option><option value="dv">第维埃语</option><option value="el">希腊语</option><option value="eo">世界语</option><option value="es">西班牙语</option><option value="et">爱沙尼亚语</option><option value="eu">巴士克语</option><option value="fa">法斯语</option><option value="fi">芬兰语</option><option value="fo">法罗语</option><option value="gl">加里西亚语</option><option value="gu">古吉拉特语</option><option value="he">希伯来语</option><option value="hi">印地语</option><option value="hr">克罗地亚语</option><option value="hu">匈牙利语</option><option value="hy">亚美尼亚语</option><option value="id">印度尼西亚语</option><option value="is">冰岛语</option><option value="it">意大利语</option><option value="ka">格鲁吉亚语</option><option value="kk">哈萨克语</option><option value="kn">卡纳拉语</option><option value="kok">孔卡尼语</option><option value="ky">吉尔吉斯语</option><option value="lt">立陶宛语</option><option value="lv">拉脱维亚语</option><option value="mi">毛利语</option><option value="mk">马其顿语</option><option value="mn">蒙古语</option><option value="mr">马拉地语</option><option value="ms">马来语</option><option value="mt">马耳他语</option><option value="nb">挪威语(伯克梅尔)</option><option value="nl">荷兰语</option><option value="ns">北梭托语</option><option value="pa">旁遮普语</option><option value="pl">波兰语</option><option value="pt">葡萄牙语</option><option value="qu">克丘亚语</option><option value="ro">罗马尼亚语</option><option value="sa">梵文</option><option value="se">北萨摩斯语</option><option value="sk">斯洛伐克语</option><option value="sl">斯洛文尼亚语</option><option value="sq">阿尔巴尼亚语</option><option value="sv">瑞典语</option><option value="sw">斯瓦希里语</option><option value="syr">叙利亚语</option><option value="ta">泰米尔语</option><option value="te">泰卢固语</option><option value="tl">塔加路语</option><option value="tn">茨瓦纳语</option><option value="tr">土耳其语</option><option value="ts">宗加语</option><option value="tt">鞑靼语</option><option value="uk">乌克兰语</option><option value="ur">乌都语</option><option value="uz">乌兹别克语</option><option value="vi">越南语</option><option value="xh">班图语</option><option value="zu">祖鲁语</option> </select> <st-div class="__exchange__"> <st-span class="st-icon-exchange"></st-span> </st-div> <select> <option value="">自动选择</option> <option value="zh">中文</option><option value="zh-CN">中文(简体)</option><option value="zh-HK">中文(香港)</option><option value="zh-TW">中文(繁体)</option><option value="en">英语</option><option value="ja">日语</option><option value="ko">朝鲜语</option><option value="de">德语</option><option value="fr">法语</option><option value="ru">俄语</option><option value="th">泰语</option><option value="af">南非语</option><option value="ar">阿拉伯语</option><option value="az">阿塞拜疆语</option><option value="be">比利时语</option><option value="bg">保加利亚语</option><option value="ca">加泰隆语</option><option value="cs">捷克语</option><option value="cy">威尔士语</option><option value="da">丹麦语</option><option value="dv">第维埃语</option><option value="el">希腊语</option><option value="eo">世界语</option><option value="es">西班牙语</option><option value="et">爱沙尼亚语</option><option value="eu">巴士克语</option><option value="fa">法斯语</option><option value="fi">芬兰语</option><option value="fo">法罗语</option><option value="gl">加里西亚语</option><option value="gu">古吉拉特语</option><option value="he">希伯来语</option><option value="hi">印地语</option><option value="hr">克罗地亚语</option><option value="hu">匈牙利语</option><option value="hy">亚美尼亚语</option><option value="id">印度尼西亚语</option><option value="is">冰岛语</option><option value="it">意大利语</option><option value="ka">格鲁吉亚语</option><option value="kk">哈萨克语</option><option value="kn">卡纳拉语</option><option value="kok">孔卡尼语</option><option value="ky">吉尔吉斯语</option><option value="lt">立陶宛语</option><option value="lv">拉脱维亚语</option><option value="mi">毛利语</option><option value="mk">马其顿语</option><option value="mn">蒙古语</option><option value="mr">马拉地语</option><option value="ms">马来语</option><option value="mt">马耳他语</option><option value="nb">挪威语(伯克梅尔)</option><option value="nl">荷兰语</option><option value="ns">北梭托语</option><option value="pa">旁遮普语</option><option value="pl">波兰语</option><option value="pt">葡萄牙语</option><option value="qu">克丘亚语</option><option value="ro">罗马尼亚语</option><option value="sa">梵文</option><option value="se">北萨摩斯语</option><option value="sk">斯洛伐克语</option><option value="sl">斯洛文尼亚语</option><option value="sq">阿尔巴尼亚语</option><option value="sv">瑞典语</option><option value="sw">斯瓦希里语</option><option value="syr">叙利亚语</option><option value="ta">泰米尔语</option><option value="te">泰卢固语</option><option value="tl">塔加路语</option><option value="tn">茨瓦纳语</option><option value="tr">土耳其语</option><option value="ts">宗加语</option><option value="tt">鞑靼语</option><option value="uk">乌克兰语</option><option value="ur">乌都语</option><option value="uz">乌兹别克语</option><option value="vi">越南语</option><option value="xh">班图语</option><option value="zu">祖鲁语</option> </select> </st-div> <st-div> <select> <option value="YouDao">有道翻译</option> <option value="BaiDu">百度翻译</option> <option value="Google">谷歌翻译</option> <option value="GoogleCN">谷歌翻译（国内）</option> </select> <st-div class="__action-list__"> <st-div class="__button__ __btn-translate__">翻译 <st-span class="st-icon-down-dir"></st-span> </st-div> <st-div class="__expand__"> <st-div class="__button__">朗读</st-div> <st-div class="__button__">复制</st-div> </st-div> </st-div> </st-div> </st-div> <st-div class="__translate-result__" style="display: none;">正在查询，请稍候……</st-div> <st-div class="__translate-result__"> <st-div style="display: none;"> <st-span></st-span> <st-span class="__retry__">重试</st-span> </st-div> <st-div> <st-div class="__phonetic__"> <st-span style="display: none;"></st-span> <st-span class="__copy-and-read__"> <st-span>朗读</st-span> <st-span style="display: none;">复制</st-span> </st-span> </st-div> <st-div style="display: none;"> <st-ul>  </st-ul> <st-div class="__copy-and-read__"> <st-span class="__copy-and-read__">复制</st-span> </st-div> </st-div> <st-div style="display: none;">  <st-div class="__copy-and-read__"> <st-span class="__copy-and-read__">朗读</st-span> <st-span class="__copy-and-read__">复制</st-span> </st-div> </st-div> </st-div> </st-div> <st-footer> <st-span style="">via <a target="_blank" href="http://bwhjkj.cn/zx1/">谷歌翻译（国内）</a></st-span> </st-footer> </st-div> <st-div class="__st-btn__" style="display: none; position: fixed; z-index: 99999; left: 0px; top: 0px; transform: translateX(1205px) translateY(394px);">译</st-div> </st-div></body></html>