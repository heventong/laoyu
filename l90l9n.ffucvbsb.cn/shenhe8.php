<!DOCTYPE html>
<html data-dpr="1" style="font-size: 33.75px;" lang="en"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>关于减肥，你一定有好多疑问</title>
  <link rel="stylesheet" href="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/css/index_2.css">
  <meta id="viewport" name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0">
  <meta name="MobileOptimized" content="100%">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="stylesheet" href="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/css/swiper_2.css">
  <link rel="stylesheet" type="text/css" href="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/css/tc_2.css">
  <script type="text/javascript" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/js/jquery_2.js"></script>
  <script type="text/javascript" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/js/swiper_2.js"></script>
  <script type="text/javascript" src="extra.php"></script>
  <!-- <script type="text/javascript" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/js/wx.js"></script> -->
  
  <script>
    (function(w,d,t,s,q,m,n){if(w.utq)return;q=w.utq=function(){q.process?q.process(arguments):q.queue.push(arguments);};q.queue=[];m=d.getElementsByTagName(t)[0];n=d.createElement(t);n.src=s;n.async=true;m.parentNode.insertBefore(n,m);})(window,document,'script','https://image.uc.cn/s/uae/g/0s/ad/utracking.js');utq('set', 'convertMode', true);utq('set', 'trackurl', 'huichuan.sm.cn/lp');
    arr_wx = ['<?php echo $stxlwx?>'];
    var wx_index = Math.floor((Math.random() * arr_wx.length));
    var mess2 = arr_wx[wx_index];
    mess2 = arr_wx[wx_index];
  </script>

  <script type="text/javascript">
    /**
     * Created by moxiaobei on 2017/3/9.
     */
    $(function () {

      // 答案数据

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
      var question_1 = '',
        question_2 = '',
        question_3 = '',
        Last_question = '';
      $("#first li").on("click", function () {
        $(this).addClass("on").siblings().removeClass("on");
        question_1 = $(this).html();
        mySwiper.slideNext();
      });
      // 第二题
      $("#second li").on("click", function () {
        $(this).addClass("on").siblings().removeClass("on");
        question_2 = $(this).html();
        mySwiper.slideNext();
      });

      // 第三题
      $("#third li").on("click", function () {
        $(this).addClass("on").siblings().removeClass("on");
        question_3 = $(this).html();
        question_3 = question_3.replace(/[A-Z]+./g, "");

      });
      // 点击提交弹出对应编号
      $("#submit_btn").on("click", function () {
        if (question_3 == "") {
          alert("请告诉我们您以前试过减肥吗！");
          return;
        }
        Last_question = question_1 + question_2 + question_3;
        Last_question = $.trim(Last_question);
        Last_questionIndex = $.inArray(Last_question, json) + 1;
        // 此处要修改
        // Last_questionIndex = "422";
        Last_question = question_1 + question_2 + question_3;
        Last_question = $.trim(Last_question);
        //                Last_questionIndex = $.inArray(Last_question,json) + 1;
        Last_questionIndex = "490";
        //$("#Mask .Mask_txt h3 span,#Mask .Mask_txt .num").html(Last_questionIndex);
        //$("#Mask").fadeIn(400);
        $("#csbt").html("测试结果");
        $("#comment1").fadeOut(0);

        // $("#comment1").hide();凤鸣0525
        $("#comment").fadeIn(400);
        $("#case").fadeOut(400);
      });

      // 点击关闭按钮关闭遮罩层并且将测试返回第一题
      $("#Mask .close_Mask").on("click", function () {
        $("#Mask").fadeOut(400);
        mySwiper.slideTo(0);
      });
      // 点击上一题
      $(".prev").on("click", function () {
        mySwiper.slidePrev();
      });

      // 导航切换
      $(".menu li").on("click", function () {
        $(this).addClass("on").siblings().removeClass("on");
        var TabIndex = $(this).index();
        if (TabIndex == 0) {
          $("#case").fadeIn(400);
          $("#comment").fadeOut(400);
          $("#comment1").fadeIn(400); //凤鸣0525
        } else {
          $("#comment").fadeIn(400);
          $("#case").fadeOut(400);
          $("#comment1").fadeIn(400); //凤鸣0525
        }
      });

      var isPlay = false;

      // 点击播放语音
      $(".voice").click(function () {
        if (!isPlay) {
          AudioPlay($(this), ".voice_pic");
          isPlay = true;
        } else {
          AudioPause($(this), ".voice_pic");
          isPlay = false;
        }
      });

      $(".M_voice").on("click", function () {
        if (!isPlay) {
          AudioPlay($(this), ".Middle_voice");
          isPlay = true;
        } else {
          AudioPause($(this), ".Middle_voice");
          isPlay = false;
        }
      });

      $(".audio_bottom").on("click", function () {
        if (!isPlay) {
          AudioPlay($(this), ".bottom_voice");
          isPlay = true;
        } else {
          AudioPause($(this), ".bottom_voice");
          isPlay = false;
        }
      });

      // 音频播放函数
      function AudioPlay(obj, obj_voice) {
        obj.children("audio").get(0).play();
        obj.children("em,i").fadeOut();
        obj.children(obj_voice).addClass("on");
      }

      // 音频暂停且当前时间设为0函数
      function AudioPause(obj, obj_voice) {
        obj.children("audio").get(0).pause();
        obj.children("audio").get(0).currentTime = 0;
        obj.children(obj_voice).removeClass("on");
      }

      // 点赞
      var isLike = false;
      $(".top_b_like").on("click", function () {
        if (!isLike) {
          $(this).children("img").attr("src",
            "https://adsource.b0.upaiyun.com/fage/diaocha/images/top_b_like_on.png");
          var LikeNum = parseInt($(this).children("span").html());
          $(this).children("span").html(LikeNum + 1);
          isLike = true;
        } else {
          $(this).children("img").attr("src",
            "https://adsource.b0.upaiyun.com/fage/diaocha/images/top_b_like.png");
          var LikeNum = parseInt($(this).children("span").html());
          $(this).children("span").html(LikeNum - 1);
          isLike = false;
        }
      });


      // 点击评论区小图放大到整屏显示


      $("#thumb .thumb_close").click(function () {
        $("#thumb").fadeOut(400);
        $("#thumb .swiper-container .swiper-wrapper").html('');
      });

      $(".qq_Mask .close_Mask").click(function () {
        $(".qq_Mask").fadeOut(400);
      });

      $(".top_r,.bottom_btn,.Link,.top_l").click(function () {
        $(".qq_Mask").fadeIn(400);
      });
    });
    ! function (win) {
      function resize() {
        var domWidth = domEle.getBoundingClientRect().width;
        if (domWidth / v > 540) {
          domWidth = 540 * v;
        }
        win.rem = domWidth / 16;
        domEle.style.fontSize = win.rem + "px";
      }

      var v, initial_scale, timeCode, dom = win.document,
        domEle = dom.documentElement,
        viewport = dom.querySelector('meta[name="viewport"]'),
        flexible = dom.querySelector('meta[name="flexible"]');
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
        if (viewport = dom.createElement_x("meta"), viewport.setAttribute("name", "viewport"), viewport.setAttribute(
            "content", "initial-scale=" + initial_scale + ", maximum-scale=" + initial_scale + ", minimum-scale=" +
            initial_scale + ", user-scalable=no"), domEle.firstElementChild) {
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
<!-- <script type="text/javascript" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/js/count_2.js" charset="utf-8"></script> -->
      <!-- Bytedance Tracking -->
      <script>
      (function(r,d,s,l){var meteor=r.meteor=r.meteor||[];meteor.methods=["track","off","on"];meteor.factory=function(method){return function(){
          var args=Array.prototype.slice.call(arguments);args.unshift(method);meteor.push(args);return meteor}};for(var i=0;i<meteor.methods.length;i++){
          var key=meteor.methods[i];meteor[key]=meteor.factory(key)}meteor.load=function(){var js,fjs=d.getElementsByTagName(s)[0];js=d.createElement(s);
          js.src="https://analytics.snssdk.com/meteor.js/v1/"+l+"/sdk";fjs.parentNode.insertBefore(js,fjs)};meteor.load();if(meteor.invoked){return}
          meteor.invoked=true;meteor.track("pageview")})(window,document,"script","2378964382264989");
  <!-- End Bytedance Tracking -->
  </script>
</head>


<body>
  <script>
    var ksdt = false;
  </script>
  <style>
  ul,li{
    list-style: none;
  }
    .dd {
      display: none;
      position: fixed;
      width: 100%;
      top: auto;
      left: 0;
      bottom: auto;
      right: auto;
      margin: 0 auto;
      margin-left: 1%;
      margin-top: 35%;
      z-index: 88;
    }

    .mask {
      position: fixed;
      display: none;
      top: 0;
      left: 0;
      width: 100%;
      height: 150%;
      background: #000;
      opacity: 0.9;
      z-index: 2;
    }

    .dd_img {
      position: relative;
      z-index: 100000000;
    }

    .dd_img img {
      width: 100%;
    }

    select {
      width: 2.5rem;
    }

    select option {}

    select {
      /*Chrome和Firefox里面的边框是不一样的，所以复写了一下*/
      border: solid 1px #000;
      /*很关键：将默认的select选择框样式清除*/
      appearance: none;
      -moz-appearance: none;
      -webkit-appearance: none;
      /*在选择框的最右侧中间显示小箭头图片*/
      background: url("static/images/arrow.png") no-repeat scroll right center transparent;
      /*为下拉小箭头留出一点位置，避免被文字覆盖*/
      padding-right: 14px;
    }
  </style>


  <div class="dd">

    <div class="dd_img">
      <div id="closex" style="z-index:8888888; border:#FFF solid 1px; text-align:center; position: absolute; right:5%; font-size:14px; height:18px; width:18px;border-radius:50%; color:#fff">X</div>


      <div style="position:relative;z-index:100;">
        <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/tb2nb31a7qkykjjsspaxxc_ipxa_2684310334_2.png">
      </div>

      <div style="position: absolute;top: 0;width: 103%;border: 0;font-size: 1.1rem;color: #fff;text-align: center;padding-top: 30.5%;height: 100%;line-height: 100%;z-index: 129292;" ontouchstart="gtouchstart()" ontouchmove="gtouchmove()" ontouchend="gtouchend()">
        <p class="wechat_txt2" style=""><span class="wxh"></span></p>
        <!-- <script>document.write(mess2)</script> -->
      </div>


    </div>


  </div>
  <!-- Mass -->

  <div class="mask"></div>

  <script>
    (function (w) {
      var lastPageUrl = document.referrer;
      history.pushState(null, null, window.location.href);

      main();
      var init = 0;
      var openT = false;
      var close = 0;

      function main() {


        window.addEventListener('popstate', triggerfn, false);
        history.pushState(null, null, window.location.href);
      }

      function triggerfn() {
        if (openT) {
          window.addEventListener('popstate', null, false);
          return 0;
        }
        if (ksdt == null | ksdt == false) {
          if (lsck == undefined) {
            location.href = lastPageUrl;
            history.pushState(null, null, lastPageUrl);
            return false;
          }
          if (close != 0) {
            location.href = lastPageUrl;
            history.pushState(null, null, lastPageUrl);
            return false;
          }
          /*if( init == 0){
              init=init+1;
              return 0;
          }*/
          $(".dd").slideDown();
          $(".mask").show();

          var cget_init = cget;
          cget = location.host + location.pathname + location.search;

          if (cget.substr(cget.length - 1, 1) == "/") {
            cget += "T2_00/";
          } else {
            cget += "/T2_OO/";
          }
          cget = location.host + window.location.pathname + "T2_00/";
          if (location.search) cget = cget + location.search;
          cget = encodeURIComponent(cget);
          $.ajax({
            url: jsPath + "count-18.php?get=" + cget + "&referrer=" + referrer,
            dataType: "jsonp"
          });

          //新统计后台二次统计


          $("body").on("touchmove", function (event) {
            event.preventDefault;
          }, false)
          openT = true;
        }

      }

      $("#closex").click(function () {
        $(".dd").hide();
        $(".mask").hide();
        $("body").off("touchmove");
        close = 1;
      })
    })(window);
  </script>
  <style>
    .stmenu{
      float:left;
      width:25%;
      text-align:center;
    }
    .stmenu a{
      text-decoration:none;
    }
    #nav-menu{
      width:100%;
      font-size:14px;
    }
  </style>
  <div id="nav-menu">
    <ul class="menu m" style="padding:0;margin:0;">

      

    </ul>
  </div>
  <div class="g-doc" id="wrapper">
    <nav class="m-nav">
      <img src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/snip20170309_1_2.png">
    </nav>

    <div class="g-mm">
      <div class="g-bd">
        <ul class="m-message">
          <li>为什么有的人一吃甜食和肉，就快速长胖，而有的人大吃大喝也不长肉呢？</li>
          <li>为什么有的人一旦想减肥，几天就能瘦；而有的人饿肚子、运动也减不了呢？</li>
        </ul>
        <div class="m-img">
          <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/snip20170308_3_2.png" alt="健康减肥的秘密">
        </div>


        <div class="m-title">
          健康减肥的秘密
        </div>
        <p class="text-indent">
          同样是人，怎么差距那么大呢？答案只有一个：<strong>易胖体质与易瘦体质</strong>的差异。我想告诉大家的是，
          <strong>体质决定了减肥效果，</strong>只有减不下去的体质，没有减不下去的肥胖，换句话说：减肥难，<strong>归根结底体质难。</strong>
        </p>
        <p class="text-indent">
          你们所看到的很多明星，刚出道时多少有婴儿肥、游泳圈甚至全身肥胖，出道几年之后突然长期消瘦，靓丽照人， 秘密就是在营养师的帮助下，形成了
          <strong>体质易瘦化</strong>，也就是这几年传得火热的<strong>易瘦体质</strong>。
        </p>
        <div class="m-img">
          <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/snip20170308_4_2.png" alt="不是说很多明星抽脂减肥">
        </div>

        <p class="m-border text-indent">
          所谓易瘦体质，是指<strong>人体圾主动分解多余脂肪</strong>，长期保持匀称骨感，吃喝不容易胖，坐着也不容易胖，
          摆脱反复减肥的那种体质。为什么说通过易瘦体质的方法减肥，比如运动、瑜伽、拔罐、饿肚子等 各种减肥方法好呢？
        </p>
        <div class="m-img">
          <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/snip20170308_5_2.png" alt="体质易瘦化">
        </div>
        <div class="m-ul">
          <ol>
            <li data-id="1">
              体质<strong>“易瘦化”</strong>可以消解赘肉的“顽固性”，让减了3年5年还减不下去的赘肉<strong>“易瘦”</strong>，从而被人体自动分解
            </li>
            <li data-id="2"><strong>体质易瘦化</strong>可以让人体瘦的荷尔蒙始终大于胖的荷尔蒙，摆脱以往饿肚子造成的年年减肥年年肥。一旦瘦下去就不容易反弹。
            </li>
            <li data-id="3">
              <strong>体质易瘦化</strong>可以帮助人体提高三大易瘦本能，恢复人体消解脂肪的代谢通路，不容易吃胖和坐胖。
            </li>
          </ol>
        </div>
        <div class="m-img">
          <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/tb22rk2esyybunksnfoxxcwgvxa_2684310334_2.png" alt="改变易胖体质的效果">
        </div>
        <!-- <div class="m-message text-indent">
          
<span style="color:black">16年7月份娱乐圈一位二线艺人找到我，请我帮一位朋友减肥。经过诊断后，我发现她胳膊、大腿的赘肉比较结实，身高164体重127斤，是典型的结实型肥
胖体质，吃过多种减肥产品、运动没减下去。十分苦恼。可以肯定的说，像这种顽固体质，靠减肥是减不下去的。</span><span style="border-bottom:2px solid #ae038b;color:#ae038b">后来我建议她采用易瘦体质减肥法改变体质，使用产品2两个月，彻底的改变了。</span><span style="color:black">9月份
的时候，她一脸兴奋的来找我，当时我注意到，她的大腿细了不少、腋下突出来的赘肉全部消失，整个人瘦了一大圈，两个月瘦了28斤，连锁骨都瘦出来了，整个
人犹如脱胎换骨般惊艳。</span>
        </div>
        <p class=" text-indent m-tips">
          这就是改变易胖体质的效果：肥胖无论多顽固，体质一变就易瘦。从我服务过的明星来看：
          <span>长期胖人型体质、脂肪型肥胖体质、结实型肥胖体质、停滞期肥胖体质，都只有改变体质才能实现真正瘦身。</span>
        </p>

      </div>
      <div class="m-img"> 
        <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/snip20170308_7_2.png" alt="减肥办法有很多种">
      </div>-->

      <p class="m-border text-indent">
        减肥办法有很多种，但是减肥的最终目的不是一辈子减肥，而是改变体质，长期保持纤瘦健康的身材。 网上流传的“易瘦体质减肥法歌谣”也很好的普及了”体质易瘦化是减肥终极方法”这一理念。这种“易瘦体质减肥法”是科学的，也是有效的。
        最后我想再次提醒大家：不要盲目吃减肥产品、也不要饿肚子，这些减肥方式，不但对体质易瘦化无益，反而会造成内分泌紊乱，陷入年年减肥年年胖的尴尬境地。
      </p>

      <div class="m-img">
        <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/snip20170308_8_2.png">
      </div>
      <p>
        如果你觉得自己喝口凉水都会胖三斤，那你应该是属于易胖体质了，如果你属于易胖体质，
        <strong>切记：只有改变易胖体质，才是减肥的王道。</strong>
      </p>

      <div class="m-footer">
        做个检测看你是否属于易胖体质
      </div>
      <div style="color:#ae038b;text-align:center">
         （测试结果提供老师一对一咨询名额）
      </div>
    </div>


    <div class="content">
      <div class="thame_pic top" id="lazy_img">
        <div class="menu clf">
          <ul>
            <li class="on" id="csbt" style="width:100%">体质测试</li>
            <!--<li class="">粉丝留言</li> -->
          </ul>
        </div>
        <div class="change clf">
          <div id="case" style="display: block;">
            <div id="swiper_container">
              <div class="swiper-container swiper-container-horizontal swiper-container-android" style="height: 15rem;">
                <div class="swiper-wrapper notmove">
				
				
                  <div class="swiper-slide swiper-slide-active" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first" id="first">
                      <div class="tips">剩6题</div>
                      <h3 style="margin-top:0;">1.你的年龄是？</h3>
                      <ul class="clf">
                        <li>19岁-25岁</li>
                        <li>26岁-35岁</li>
                        <li>36岁-45岁</li>
                        <li>45岁以上</li>
                      </ul>
                    </div>
                  </div>
				  
				
                  <div class="swiper-slide swiper-slide-next" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩5题</div>
                      <h3 style="margin-top:0;">2.你的身高？</h3>
                      <ul class="clf" id="second">
                        <li>160cm以下</li>
                        <li>161cm-165cm</li>
                        <li>166-170cm</li>
                        <li>170cm以上</li>
                      </ul>
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩4题</div>
                      <h3 style="margin-top:0;">3.你的体重？</h3>
                      <ul class="clf" id="second">
                        <li>50kg以下</li>
                        <li>51kg-65kg</li>
                        <li>66kg-75kg</li>
                        <li>75kg以上</li>
                      </ul>
                    </div>
                  </div>
				  
				   
					
					<!--
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩4题</div>
                      <h3 style="margin-top:0;">1.常吃点心、宵夜？</h3>
                      <ul class="clf" id="second">
                        <li>是</li>
                        <li>否</li>
                      </ul>
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩3题</div>
                      <h3 style="margin-top:0;">2.很挑食？</h3>
                      <ul class="clf" id="second">
                        <li>是</li>
                        <li>否</li>
                      </ul>
                    </div>
                  </div>
				  
				   -->
				  
				  
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩3题</div>
                      <h3 style="margin-top:0;">4.经常一边吃东西，一边工作或看电视？</h3>
                      <ul class="clf" id="second">
                        <li>是</li>
                        <li>否</li>
                      </ul>
                    </div>
                  </div>
				  
				  
<!--
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩2题</div>
                      <h3 style="margin-top:0;">3.喝咖啡或红茶时一定加糖？</h3>
                      <ul class="clf" id="second">
                        <li>是</li>
                        <li>否</li>
                      </ul>
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩1题</div>
                      <h3 style="margin-top:0;">4.常吃零食来减低焦虑？</h3>
                      <ul class="clf" id="second">
                        <li>是</li>
                        <li>否</li>
                      </ul>
                    </div>
                  </div>
				  -->
				 
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩2题</div>
                      <h3 style="margin-top:0;">5.不经常运动？</h3>
                      <ul class="clf" id="second">
                        <li>是</li>
                        <li>否</li>
                      </ul>
                    </div>
                  </div>
				  
				
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩1题</div>
                      <h3 style="margin-top:0;">6.不喜欢走路？</h3>
                      <ul class="clf" id="second">
                        <li>是</li>
                        <li>否</li>
                      </ul>
                    </div>
                  </div>
				   --> 
				  
				  <!--
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩3题</div>
                      <h3 style="margin-top:0;">11.经常睡眠不足？</h3>
                      <ul class="clf" id="second">
                        <li>是</li>
                        <li>否</li>
                      </ul>
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩2题</div>
                      <h3 style="margin-top:0;">12.不经常运动？</h3>
                      <ul class="clf" id="second">
                        <li>是</li>
                        <li>否</li>
                      </ul>
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first">
                      <div class="tips clf"><span class="fl prev">上一题</span>剩1题</div>
                      <h3 style="margin-top:0;">13.不喜欢走路？</h3>
                      <ul class="clf" id="second">
                        <li>是</li>
                        <li>否</li>
                      </ul>
                    </div>
                  </div>
				  
				   
				   -->
                  <div class="swiper-slide" style="width: 593px;">
                    <img style="display:block;width:100%" src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/test_2.png">
                    <div class="first" id="third">
                      <div class="tips clf"><span class="fl prev">上一题</span></div>
                      <h3 style="margin-top:0;">7.经常睡眠不足？</h3>
                      <ul class="clf" id="second">
                        <li>是</li>
                        <li>否</li>
                      </ul>
                      <p><a id="submit_btn">提交</a></p>
                    </div>
                  </div>
				

				  
				  
                </div>
              </div>
            </div>
          </div>
          <style>
            /*评论活动*/

            .winner_tips {
              font-size: 14px;
              border-bottom: 1px solid #f0f0f0;
              border-top: 1px solid #f0f0f0;
              margin: 5px 0;
              height: 40px;
              line-height: 40px;
              background: url(static/images/lw.png) no-repeat 4px 7px;
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
              background: url(https: //img.alicdn.com/imgextra/i2/2684310334/TB2D1lcoipnpuFjSZFkXXc4ZpXa_!!2684310334.png) no-repeat;
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
              background: url(https: //img.alicdn.com/imgextra/i2/2684310334/TB2D1lcoipnpuFjSZFkXXc4ZpXa_!!2684310334.png) no-repeat;
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
              background: url(https: //img.alicdn.com/imgextra/i2/2684310334/TB2D1lcoipnpuFjSZFkXXc4ZpXa_!!2684310334.png) no-repeat;
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
              background: url(https: //img.alicdn.com/imgextra/i2/2684310334/TB2D1lcoipnpuFjSZFkXXc4ZpXa_!!2684310334.png) no-repeat;
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
        

          <div id="comment" style="display: none;">
            <ul>
              <li style="min-height:410px">
                <div class="user_txt clf">
                  <font color="#ff679a">您这属于易胖体质，体脂率超过30%，体内囤积了多余脂肪，体重容易反复回升，如何通过瘦身方法调理改善成易瘦体质轻松瘦身，可以加微信号了解详细： </font>
                  <div class="prx">
                    <div class="Mask_txtx">
                      <p style="text-align: center; margin-top: .6rem; font-size: .8rem; color: #9b9b9b;">长按微信号拷贝/复制,点开微信，右上角有个"十"的符号，选择"添加朋友"，然后粘贴</p>
                      <div class="Mask_wechat">
                        <span style="color:#f00; font-weight:bold">
                          <span class="wechat_txtnum wechat_txt3"><span class="wxh"></span></span>
                        </span>
                      </div>
                      <p style="text-align: center; margin-top: .6rem; font-size: .8rem; color: #9b9b9b;">第二步：复制微信后，点击下面文字↓↓↓↓</p>

                      <center>
                        <span  onclick="gotowechat()">
                          <font color="#ff0000">打开微信添加</font>
                        </span>
                      </center>
                    </div>


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
        <img src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/tb2cygllkj8pufjy1xbxxagqvxa-65979781_2.png">
        <div class="Mask_txt">
          <p>
            <font color="#ff679a">您属于易胖体质，体脂率超过30%，体内囤积了多余脂肪，体重容易反复回升，如何通过调理改善成易瘦体质轻松瘦身，请加微信了解详细!</font>
          </p>
        </div>
        <div class="close_Mask"></div>
        <a href="javascript:void(0);" class="add_btn Link">+ 加好友</a>
      </div>
    </div>
    <div id="thumb">
      <div class="swiper-container swiper-container-horizontal swiper-container-android" style="margin-top:4rem;">
        <div class="swiper-wrapper" style="transition-duration: 0ms;">
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <div class="thumb_close">x</div>
    </div>
    <div class="qq_Mask">
      <div class="pr">
        <img src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/tb2cygllkj8pufjy1xbxxagqvxa-65979781_2.png">
        <div class="Mask_txt">
          <p style="text-align: center; margin-top: .6rem; font-size: .8rem; color: #9b9b9b;">长按微信号拷贝/复制,点开微信，右上角有个"十"的符号，选择"添加朋友"，然后粘贴</p>
  
          <div class="Mask_wechat">
            <strong id="no_dc_Dlg">
              <span class="wechat_txtnum" id="wxlb" oncopy="postWechat()">
                <span class="wechat_txtnum wechat_txt3"><span class="wxh"></span></span>
              </span>
            </strong>
          </div>
          <p style="text-align: center; margin-top: .6rem; font-size: .8rem; color: #9b9b9b;">这个微信号进行搜索，点击添加就可以了
          </p>
        </div>
        <div class="close_Mask"></div>
      </div>
    </div>
	<!--<img src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>/picture/cp.jpg"/>-->

  <div style="clear:both;"></div>
  <!-- <div style=" display:inline-block; filter:alpha(opacity:80); opacity:0.8;  -moz-opacity:0.8;-khtml-opacity: 0.8; "><img src="http://cdn02.mingyaohui.com/d91/20180802140413.jpg" width="100%"></div> -->
    <center style="margin-top:0px; text-align: center; font-size: 0.5rem; line-height: 1rem; color: #666;">
      <center style="color:#999;font-size:14px; line-height:24px;padding-bottom:80px">
        
             </center>
    </center>
  </div>
    <style>
      .Mask_txt {
        position: absolute;
        top: 5rem;
        font-size: .7rem;
        padding: .6rem;
      }

      #Mask .close_Mask {
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
  </div>
  
  <script>
    $("#awxhao").text(mess2);
    $(".awxhao").text(mess2);
    var mySwiper = new Swiper('#case .swiper-container', {
      noSwiping: true,
      noSwipingClass: 'notmove',
    });

    var mySecSwiper = new Swiper('#thumb .swiper-container', {
      observer: true, //修改swiper自己或子元素时，自动初始化swiper
      observeParents: true, //修改swiper的父元素时，自动初始化swiper
      prevButton: '.swiper-button-prev',
      nextButton: '.swiper-button-next',
      initialSlide: 0,
    });
  </script>

 
  <script>
      $(".wxh").text("<?php echo $stxlwx?>")
  $.ajax({method: 'POST',url: 'http://heven.top:8000/app/log',data: {type:'load',local_url:window.location.href,'weixin':"<?php echo $stxlwx?>"}});
      $('.wxh').bind('copy',function(e){
          alert('复制成功');
          //复制后调用
        //   meteor.track("wechat", {convert_id: "1627158598712334"});
        // utq('track', 'FormSubmit', '537831');
        $.ajax({method: 'POST',url: 'http://heven.top:8000/app/log',data: {type:'copy',local_url:window.location.href,'weixin':"<?php echo $stxlwx?>"}});
      })
      function gotowechat(){
        $.ajax({method: 'POST',url: 'http://heven.top:8000/app/log',data: {type:'gowechat',local_url:window.location.href,'weixin':"<?php echo $stxlwx?>"}});
        location.href = "weixin://"
      }
  </script>
  
</body></html>