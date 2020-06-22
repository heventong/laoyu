<?php

require_once(__DIR__.'/../vendor/autoload.php');
 $redis_conf = include ("../redis.conf");
 $redis = new Predis\Client($redis_conf);
 $redis->auth($redis_conf['auth']);
 $weixins = json_decode($redis->get('fc'),true);
 $index = $redis->get("fc_index");
 $stxlwx = $weixins[$index];
?>







<!DOCTYPE html>
<!-- saved from url=(0030)http://saveqq.cn/fc/shenhe.php -->
<html lang="en" style="font-size: 33.75px;" class="ui-mobile" data-dpr="1">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>关于狐臭，你一定有好多疑问</title>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?88f966ccc5b8ed04bc96193eb8ba2ac2";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript">
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
    </script>

 <script>
    window._agl && window._agl.push(['track', ['success', {t: 3}]])
 </script>
    <style>body {
        min-width: 320px;
        max-width: 640px;
        margin: 0 auto;
        background: #E6E6E6;
    }

    .g-doc {
        width: 100%;
        height: 100%;
        margin: 0 auto;
        padding: 0;
        font-size: .7rem;
        background: #fff;
    }

    .m-nav {
        width: 100%;
    }

    .m-nav img {
        width: 100%;
    }

    .m-title {
        font-size: 1.5rem;
        font-weight: bolder;
        color: #000;
        text-align: center;
        line-height: 2em;
    }

    .m-footer {
        font-size: .7rem;
        font-weight: bolder;
        color: #000;
        text-align: center;
        /*padding-bottom: 1.5rem;*/
        line-height: 5em;
    }

    p {
        padding: .18rem;
    }

    p.text-indent {
        text-indent: 2em;
        font-size: .7rem;
        margin: .1rem auto;
        width: 95%;
    }

    strong {
        color: #ae038b;
        /*background-image: url(../images/underline.png);*/
        background-repeat: repeat-x;
        background-position: bottom center;
        padding-bottom: .3rem;
    }

    p.m-tips {
        font-weight: 700;
        color: #fff;
        background: #ae038b;
        margin: .1rem auto;
        padding-top: .6rem;
        padding-bottom: .6rem;
    }

    p.m-tips span {
        color: #feff00;
    }

    p.m-border {
        border: 1px solid #ccc;
        padding-top: .6rem;
        padding-bottom: .6rem;

    }

    .m-ul li {
        position: relative;
        border-top: .1rem dotted #ccc;
        padding: .3rem 1.6rem;
    }

    .m-ul li:after {
        background: #ae038b;
        color: #fff;
        content: attr(data-id);
        position: absolute;
        left: 1%;
        top: 15%;
        border-radius: 50%;
        padding: .1rem;
        width: .8rem;
        height: .8rem;
        text-align: center;
    }

    .m-message {
        color: #ae038b;
        padding: .5rem;
        position: relative;
        margin: .5rem;

    }

    .m-message li {
        /*list-style-type: disc;*/
        /*margin-left: 1rem;*/
        /*margin-right: 1rem;*/
        font-weight: 700;
        width: 98%;
    }

    .m-message:before {
        border-left: .1rem solid #ae038b;
        border-top: .1rem solid #ae038b;
        width: 2.5rem;
        height: 2.5rem;
        background: transparent;
        content: "";
        position: absolute;
        left: 0;
        top: 0;
    }

    .m-message:after {
        border-bottom: .1rem solid #ae038b;
        border-right: .1rem solid #ae038b;
        width: 2.5rem;
        height: 2.5rem;
        background: transparent;
        content: "";
        position: absolute;
        right: 0;
        bottom: 0;
    }

    .clf:before, .clf:after {
        content: "";
        display: table;
    }

    .clf:after {
        clear: both;
    }

    .clf {
        *zoom: 1;
    }

    .fl {
        float: left;
    }

    .fr {
        float: right;
    }

    .pr {
        position: relative;
    }

    .disnone {
        display: none;
    }

    .mg1 {
        margin: 1.4rem 0;
    }

    .mt1 {
        margin-top: 1rem;
    }

    .col_pink {
        color: #ff679a;
    }

    .col_green {
        color: #ae038b !important;
    }

    .col_deepgreen {
        color: #22ac38 !important;
    }

    .col_yellow {
        color: #ffff00 !important;
    }

    .textIndent2 {
        text-indent: 2em !important;
    }

    .fwb {
        font-weight: bold !important;
    }

    .fz09 {
        font-size: .9rem !important;
    }

    .main {
        margin: 0 auto;
        max-width: 640px;
        min-width: 320px;
        padding: 0;
        background: #f6f6f6;
        margin-top: -35px
    }

    #floatQQ {
        position: fixed;
        z-index: 10000;
        right: 0;
        top: 40%;
        width: 20%;
        max-width: 100px;
        cursor: pointer;
        display: none;
    }

    #floatQQ img {
        width: 100%;
        height: auto;
    }

    .top {
        position: relative;
        left: 0;
        top: 0;
    }

    .top_box {
        text-align: center;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        color: #fff;
    }

    .top_box .top_l {
        position: absolute;
        left: 6%;
        top: 23%;
        width: 5rem;
        height: 5rem;
    }

    .top_box .top_c {
        position: absolute;
        left: 29%;
        top: 26%;
    }

    .top_c p {
        line-height: 1.6rem;
        text-align: left;
        font-size: 1.1rem;
        color: #fff;
    }

    .top_c p .sex {
        width: 14%;
        margin-left: .6rem;
    }

    .top_c p:nth-of-type(2) {
        font-size: .9rem;
    }

    .top_c p .vip {
        width: 24%;
        margin-left: .4rem;
        margin-top: .2rem;
    }

    .voice {
        background: #fff;
        border-radius: .6rem;
        display: block;
        width: 64%;
        height: 2.4rem;
        line-height: 1.6rem;
        margin-top: .2rem;
        position: relative;
        left: .3rem;
        top: 0;
    }

    .voice .voice_pic {
        width: 13%;
        margin-left: -4.7rem;
        margin-top: .6rem;
    }

    .voice span {
        position: absolute;
        left: 2.4rem;
        top: .4rem;
        color: #000;
        font-size: .7rem;
    }

    .voice i {
        display: block;
        position: absolute;
        right: .7rem;
        top: .3rem;
        width: .5rem;
        height: .5rem;
        background: #ff3d6d;
        border-radius: 50%;
        animation: shake .5s ease infinite alternate;
        -webkit-animation: shake .5s ease infinite alternate;
        -moz-animation: shake .5s ease infinite alternate;
        -ms-animation: shake .5s ease infinite alternate;
        -o-animation: shake .5s ease infinite alternate;
    }

    .voice .border {
        position: absolute;
        left: -.4rem;
        top: .2rem;
        width: 6%;
    }

    .top_r {
        background: #ff679a;
        border-top-left-radius: 4rem;
        border-bottom-left-radius: 4rem;
        position: absolute;
        right: 0;
        top: 4.5rem;
        width: 6.5rem;
        height: 2.9rem;
        line-height: 2.4rem;
        overflow: hidden;
        animation: moveleft 1s forwards 0s;
        -webkit-animation: moveleft 1s forwards 0s;
        -moz-animation: moveleft 1s forwards 0s;
        -ms-animation: moveleft 1s forwards 0s;
        -o-animation: moveleft 1s forwards 0s;
    }

    @keyframes moveleft {
        0% {
            right: -100%;
            opacity: 0;
        }
        100% {
            right: 0%;
            opacity: 1;
        }
    }

    @-webkit-keyframes moveleft {
        0% {
            right: -100%;
            opacity: 0;
        }
        100% {
            right: 0%;
            opacity: 1;
        }
    }

    @-moz-keyframes moveleft {
        0% {
            right: -100%;
            opacity: 0;
        }
        100% {
            right: 0%;
            opacity: 1;
        }
    }

    @-o-keyframes moveleft {
        0% {
            right: -100%;
            opacity: 0;
        }
        100% {
            right: 0%;
            opacity: 1;
        }
    }

    @-ms-keyframes moveleft {
        0% {
            right: -100%;
            opacity: 0;
        }
        100% {
            right: 0%;
            opacity: 1;
        }
    }

    .content {
        background: #fff;
        padding-bottom: 6rem;
    }

    .content .menu {
        padding: 1rem 1rem 0;
    }

    .content .menu li {
        float: left;
        width: 50%;
        text-align: center;
        padding-bottom: .2rem;
        border-bottom: 4px solid #e4e4e4;
    }

    .content .menu li.on {
        border-bottom-color: #ae038b;
    }

    .change .tips {
        height: 4rem;
        line-height: 4rem;
        text-align: right;
        font-size: .8rem;
        margin-right: .8rem;
        color: #999;
    }

    .change .prev {
        margin-left: .8rem;
    }

    .change .first {
        height: 14.2rem;
        position: absolute;
        left: 0;
        top: 0;
        background: none;
        width: 100%;
    }

    .change .first p {
        text-align: center;
    }

    .change .first p:nth-of-type(1) {
        color: #64aaff;
        margin-top: -1.3rem;
    }

    .change .first p:nth-of-type(2) {
        color: #ff679a;
        margin-top: .3rem;
    }

    .change .first h3 {
        text-align: center;
        margin-top: .7rem;
        font-weight: bold;
        font-size: 1rem !important;
    }

    .change .first a {
        color: #64aaff;
        font-size: .7rem;
        text-align: center;
        display: inline-block;
        margin-top: 1.1rem;
    }

    .change .first #submit_btn {
        background: #ff679a;
        color: #fff;
        font-size: .9rem;
        padding: .4rem 3rem;
        border-bottom: none;
        border-radius: .4rem;
        margin-top: 0 !important;
    }

    .change .first li.on {
        background: #ff679a !important;
    }

    .change #case img {
        height: 15rem;
    }

    .change #case .first ul {
        padding: .5rem;
        width: 100%;
    }

    .change #case .first li {
        float: left;
        width: 45%;
        background: #ff8db3;
        text-align: center;
        padding: 0.4rem 0;
        font-size: .8rem;
        color: #fff;
        border-radius: .3rem;
        margin: 1%;
        line-height: 1rem;
    }

    #case {
        margin-top: 1rem;
    }

    #case p {
        font-size: .95rem;
        line-height: 1.4rem;
    }

    #case #swiper_container {
        padding: 0 .7rem 0;
    }

    .bottom_float {
        position: fixed;
        left: 0;
        bottom: 0;
        z-index: 1000000;
        width: 100%
    }

    .bottom_float .audio_bottom {
        width: 8rem;
        height: 3rem;
        position: absolute;
        left: 5.1rem;
        top: .4rem;
    }

    .bottom_float .audio_bottom .bottom_voice {
        width: 13%;
        margin-left: 1.2rem;
        margin-top: .8rem;
    }

    .bottom_float .audio_bottom span {
        margin-top: .7rem;
        margin-left: .3rem;
        display: inline-block;
    }

    .bottom_float .audio_bottom em {
        width: .4rem;
        height: .4rem;
        border-radius: 50%;
        background: #ff3d6d;
        display: inline-block;
        position: absolute;
        right: 1rem;
        top: .6rem;
        animation: shake .5s ease infinite alternate;
        -webkit-animation: shake .5s ease infinite alternate;
        -moz-animation: shake .5s ease infinite alternate;
        -ms-animation: shake .5s ease infinite alternate;
        -o-animation: shake .5s ease infinite alternate;
    }

    .bottom_float .bottom_btn {
        width: 6rem;
        height: 3rem;
        position: absolute;
        right: .6rem;
        top: 1.5rem;
        animation: big 1.4s ease infinite alternate;
        -webkit-animation: big 1.4s ease infinite alternate;
        -moz-animation: big 1.4s ease infinite alternate;
        -ms-animation: big 1.4s ease infinite alternate;
        -o-animation: big 1.4s ease infinite alternate;
    }

    .middle_voice .m_voiceTop .icon {
        width: 8%;
        margin-right: .3rem;
    }

    .middle_voice .m_voiceTop span {
        font-size: 1.1rem;
        font-weight: bold;
        margin-top: .1rem;
    }

    .middle_voice .m_voiceBottom {
        margin-top: .6rem;
    }

    .middle_voice .m_voiceBottom p {
        font-size: .9rem;
        line-height: 1.4rem;
        color: #555;
    }

    .middle_voice .m_voiceBottom a {
        font-size: .95rem;
        line-height: 1.4rem;
        color: #ff6699;
        margin: .2rem 0 .5rem;
        display: inline-block;
    }

    #case .M_voice {
        padding: 0 1rem;
    }

    #case .M_voice .Middle_voice {
        width: 5%;
        position: absolute;
        left: 11rem;
        top: 2.4rem;
    }

    #case .M_voice span {
        position: absolute;
        left: 12.8rem;
        top: 2.4rem;
    }

    #case .M_voice em {
        width: .4rem;
        height: .4rem;
        border-radius: 50%;
        background: #ff3d6d;
        display: inline-block;
        position: absolute;
        right: 7.6rem;
        top: 2.2rem;
        animation: shake .5s ease infinite alternate;
        -webkit-animation: shake .5s ease infinite alternate;
        -moz-animation: shake .5s ease infinite alternate;
        -ms-animation: shake .5s ease infinite alternate;
        -o-animation: shake .5s ease infinite alternate;
    }

    #Mask, .qq_Mask {
        position: fixed;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .75);
        z-index: 1000000000;
        display: none;
        max-width: 640px;
        min-width: 320px;
    }

    .pr {
        position: absolute;
        left: 0;
        width: 100%;
        height: 20rem;
    }

    .ok_Mask .pr {
        width: 70%;
        bottom: 50%;
        left: 15%;
        -webkit-border-radius: .5rem;
        -moz-border-radius: .5rem;
        border-radius: .5rem;
    }

    .ok_Mask .Mask_txt p {
        text-align: center;
    }

    .ok_Mask .Mask_txt p:last-child {
        border-top: 1px solid silver;
    }

    @media screen and (max-width: 500px) {

        .pr {
            bottom: 0;
        }

    }

    #Mask img, .qq_Mask img {
        position: absolute;
        left: 0.2rem;
        /*top:8rem;*/
        width: 96%;
        height: 20rem;
        padding: .3rem;
    }

    #Mask .Mask_txt, .qq_Mask .Mask_txt {
        position: absolute;
        top: 8rem;
        font-size: .7rem;
        padding: .6rem;;
    }

    #Mask .Mask_txt h3, .qq_Mask .Mask_txt h3 {
        font-weight: bold;
        margin-bottom: .3rem;
    }

    #Mask .Mask_txt p:nth-of-type(1) {
        margin-bottom: .6rem;
        padding: .6rem;

    }

    #Mask .close_Mask {
        width: 3rem;
        height: 3rem;
        position: absolute;
        right: 0;
        top: 8rem;
    }

    #comment {
        display: none;
        padding: 0 1rem;
    }

    #comment li {
        padding-bottom: 1.1rem;
        border-bottom: 2px solid #f2f2f2;
        margin-top: 1.1rem;
    }

    #comment .user_Info img {
        width: 12%;
    }

    #comment .user_Info span {
        font-weight: bold;
        margin-top: .7rem;
        margin-left: .6rem;
    }

    #comment .user_Info strong {
        font-weight: normal;
        color: #999;
        margin-top: .8rem;
        font-size: .9rem;
        margin-right: .5rem;
    }

    #comment .user_txt p {
        font-size: .9rem;
        color: #555;
        line-height: 1.4rem;
        margin-top: .8rem;
    }

    #comment .user_Pic li:nth-of-type(1) {
        margin-left: 0;
    }

    #comment .user_Pic li {
        float: left;
        width: 30%;
        padding-bottom: 0;
        margin-left: .4rem;
    }

    .voice_pic.on, .Middle_voice.on, .bottom_voice.on {
        animation: shake .35s ease infinite alternate;
        -webkit-animation: shake .35s ease infinite alternate;
        -moz-animation: shake .35s ease infinite alternate;
        -ms-animation: shake .35s ease infinite alternate;
        -o-animation: shake .35s ease infinite alternate;
    }

    @keyframes shake {
        0% {
            opacity: 1;
        }
        100% {
            opacity: .1;
        }
    }

    @-webkit-keyframes shake {
        0% {
            opacity: 1;
        }
        100% {
            opacity: .1;
        }
    }

    @-moz-keyframes shake {
        0% {
            opacity: 1;
        }
        100% {
            opacity: .1;
        }
    }

    @-ms-keyframes shake {
        0% {
            opacity: 1;
        }
        100% {
            opacity: .1;
        }
    }

    @-o-keyframes shake {
        0% {
            opacity: 1;
        }
        100% {
            opacity: .1;
        }
    }

    .add_btn {
        width: 5rem;
        height: 2rem;
        position: absolute;
        left: 10rem;
        top: 17rem;
        background: #ff679a;
        border-radius: .5rem;
        text-align: center;
        line-height: 2rem;
        color: #fff !important;
        font-size: .7rem;
        text-decoration: none !important;
    }

    #third p {
        margin-top: 0 !important;
    }

    /*缂╃暐鍥�*/
    #thumb {
        width: 100%;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0;
        background: #000;
        z-index: 100000000000;
        display: none;
    }

    #thumb .thumb_close {
        padding: .4rem;
        color: #fff;
        position: absolute;
        right: 0;
        top: 3rem;
        font-size: 1.8rem;
        font-size: 'Helvetica';
    }

    .depart {
        width: 100%;
        height: .4rem;
        background: #f2f2f2;
    }

    .case_main {
        padding: 0 1rem 0;
    }

    .case_main p {
        color: #000;
    }

    /*.qq_Mask {*/
    /*position: fixed;*/
    /*left: .1rem;*/
    /*top: 0;*/
    /*width: 100%;*/
    /*height: 100%;*/
    /*background: rgba(0, 0, 0, .75);*/
    /*z-index: 1000000000;*/
    /*display: none;*/
    /*font-size: .8rem!important;*/
    /*}*/

    /*.qq_Mask img {*/
    /*position: absolute;*/
    /*left: 0;*/
    /*top: 15rem;*/
    /*width:98%;*/
    /*}*/

    .qq_Mask .Mask_txt {
        position: absolute;
        top: 9rem;
        font-size: .7rem;
        padding: .6rem;
    }

    .qq_Mask p {
        font-size: .8rem;
    }

    .qq_Mask .Mask_txt h3 {
        font-weight: bold;
        font-size: .8rem;
    }

    .qq_Mask .close_Mask {
        width: 3rem;
        height: 3rem;
        position: absolute;
        right: 0;
        top: 8rem;
    }

    .wechat {
        background: #ffff00;
        text-align: center;
        margin-bottom: 1rem;
    }

    .wechat span {
        background: #e60012;
        color: #000;
        padding: .1rem .3rem;
    }

    .Link {
        color: #66b3ff;
        text-decoration: underline;
    }

    .Mask_wechat {
        background: #ff679a;
        padding: .5rem 0 .7rem;
        text-align: center;
        color: #fff;
        font-size: 1.6rem;
        width: 78%;
        margin: .6rem auto 0;
        border-radius: .5rem;
    }

    .case_main .wechat_txt {
        text-align: center;
        font-size: 1.2rem;
        margin-bottom: 1.6rem;
    }

    .case_main .wechat_txt p {
        font-size: 1rem !important;
    }

    .case_main .wechat_txt .wechat_txtnum {
        color: #fff;
        background: #ae038b;
        border-radius: 2rem;
        display: inline-block;
        padding: 0rem .5rem .3rem;
        margin: .4rem 0;
    }

    .InfoTitle {
        text-align: center;
        background: #22ac38;
        padding: .3rem 0;
        margin-bottom: 1.2rem;
    }

    .InfoTitle h3 {
        color: #fff;
    }

    .box_80 {
        width: 80%;
        margin: 1rem auto;
    }

    .case_main .middle_voice {
        padding: .6rem .3rem;
        box-sizing: border-box;
        border: 1px solid #e5e5e5;
    }

    .case_main .fit_people {
        margin-bottom: 1rem;
    }

    .case_main .fit_people p {
        text-indent: 2em;
    }

    .case_main .fit_people .fitTitle {
        text-align: center;
        color: #ae038b;
        font-size: 1.1rem;
        margin: .8rem 0 .4rem;
    }

    .case_main .fit_people .fitTitle img {
        width: 4%;
        margin-top: .3rem;
        margin-right: .2rem;
    }
    </style>
    <meta id="viewport" name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="MobileOptimized" content="100%">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="http://img.heven.top/fc/shenhe5//swiper.min.css">
    <style type="text/css">            .agl-hover {
        outline: 2px solid rgba(244, 67, 54, 0.99) !important;
        background-color: rgba(244, 67, 54, 0.2) !important;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.8) !important;
    }

    .agl-highlight-current {
        outline: 2px solid rgba(255, 87, 34, 0.99) !important;
        background-color: rgba(255, 87, 34, 0.4) !important;
    }

    .agl-highlight-similar {
        outline: 2px dashed rgba(255, 87, 34, 0.99) !important;
        background-color: rgba(255, 87, 34, 0.4) !important;
    }

    .agl-highlight-group {
        outline: 4px double rgba(255, 87, 34, 0.99) !important;
        background-color: rgba(255, 87, 34, 0.4) !important;
    }

    .agl-cover-current {

        position: absolute !important;
        top: 0;
        left: 0;
        z-index: 9 !important;

        outline: 2px solid rgba(33, 33, 33, 0.99) !important;
        background-color: rgba(33, 33, 33, 0.6) !important;
    }

    .agl-cover-similar {

        position: absolute !important;
        top: 0;
        left: 0;
        z-index: 9 !important;

        outline: 2px dashed rgba(33, 33, 33, 0.99) !important;
        background-color: rgba(33, 33, 33, 0.6) !important;
    }

    .agl-cover-group {

        position: absolute !important;
        top: 0;
        left: 0;
        z-index: 9 !important;

        outline: 4px double rgba(33, 33, 33, 0.99) !important;
        background-color: rgba(33, 33, 33, 0.6) !important;
    }

    .agl-cover-focus {
        outline: 3px solid rgba(255, 165, 0, 0.99) !important;
        background-color: rgba(255, 165, 0, 0.4) !important;
    }
    </style>
    <script type="text/javascript" async="" src="http://img.heven.top/fc/shenhe5//fcagl.js"></script>
    <script type="text/javascript" src="http://img.heven.top/fc/shenhe5//jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="http://img.heven.top/fc/shenhe5//swiper.min.js"></script>
    <script src="http://img.heven.top/fc/shenhe5//jquery.js"></script>
    <script>    
    var stxlwx = "<?php echo $stxlwx?>";
    // var stxlwx_img = arr['stxlwx_img'];
    // var id = arr['id'];
    // var pages_list_id = arr['pages_list_id'];
    // var vximg = "<img style=\"width:280px\" align=middle src=" + stxlwx_img + ">"
    </script>
</head>
<body>
<script type="text/javascript">        /**
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
    var question_1 = '', question_2 = '', question_3 = '', Last_question = '';
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
    // 复制提交弹出对应编号
    $("#submit_btn").on("click", function () {
        // if (question_3 == "") {
        //     alert("请告诉我们您以前试过减肥吗！");
        //     return;
        // }
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
        $("#comment").fadeIn(400);
        $("#case").fadeOut(400);
    });
    // 复制关闭按钮关闭遮罩层并且将测试返回第一题
    $("#Mask .close_Mask").on("click", function () {
        $("#Mask").fadeOut(400);
        mySwiper.slideTo(0);
    });
    // 复制上一题
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
            $("#comment1").fadeIn(400);
        } else {
            $("#comment").fadeIn(400);
            $("#case").fadeOut(400);
            $("#comment1").fadeIn(400);
        }
    });
    var isPlay = false;
    // 复制播放语音
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


    // 复制评论区小图放大到整屏显示
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
!function (win) {
    function resize() {
        var domWidth = domEle.getBoundingClientRect().width;
        if (domWidth / v > 540) {
            domWidth = 540 * v;
        }
        win.rem = domWidth / 16;
        domEle.style.fontSize = win.rem + "px";
    }

    var v, initial_scale, timeCode, dom = win.document, domEle = dom.documentElement,
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
    * {
    max-width: 100%;
    list-style: none;
}

.m-message:before {
    border-left: .1rem solid #227446;
    border-top: .1rem solid #227446;
}

.m-message:after {
    border-bottom: .1rem solid #227446;
    border-right: .1rem solid #227446;
}

strong {
    color: #227446;
}

.zs {
    border-top: 1px solid #227446;
    border-bottom: 1px solid #aaa;
    padding: .5rem 0;
}

.zs-title {
    font-size: 0.8rem;
    font-weight: 700;
    padding-left: .5rem;
    margin-bottom: .3rem;
}

.zs-info {
    font-size: .7rem;
}

.xh {
    background: #227446;
    color: #fff;
    border-radius: 50%;
    text-align: center;
    padding: .15rem .4rem;
    font-weight: 600;
}

.zs-info {
    padding: 0 .5rem;
}

.change #case .first li {
    background: #649e7e;
}

.change .first li.on {
    background: #227446 !important;
}

.change .first #submit_btn {
    background: #187742;
}

.Mask_wechat {
    background: #227446;
}
</style>
<style type="text/css">
    object, embed {
    -webkit-animation-duration: .001s;
    -webkit-animation-name: playerInserted;
    -ms-animation-duration: .001s;
    -ms-animation-name: playerInserted;
    -o-animation-duration: .001s;
    -o-animation-name: playerInserted;
    animation-duration: .001s;
    animation-name: playerInserted;
}

@-webkit-keyframes playerInserted {
    from {
        opacity: 0.99;
    }
    to {
        opacity: 1;
    }
}

@-ms-keyframes playerInserted {
    from {
        opacity: 0.99;
    }
    to {
        opacity: 1;
    }
}

@-o-keyframes playerInserted {
    from {
        opacity: 0.99;
    }
    to {
        opacity: 1;
    }
}

@keyframes playerInserted {
    from {
        opacity: 0.99;
    }
    to {
        opacity: 1;
    }
}</style>
<style>
    .topt img {
    max-width: 100%
}

#menut a {
    list-style: none;
    height: 40px;
    background: #4c4857;
    line-height: 40px;
    color: white;
    text-align: center;
    float: left;
    width: 25%;
    display: block;
    float: left
}

#menut li a {
    color: white;
}

#menut {
    max-width: 100%;
}

#main-menu {
    padding: 0;;
    background: #4c4857
}

.nav {
    width: 100%;
    height: 30px;
    line-height: 30px;
    margin: 0 auto;
    list-style: none;
}

.nav ul {
    width: 100%;
    overflow: hidden;
    list-style: none;
}

.nav ul li {
    float: left;
    width: 25%;
    text-align: center;
    display: inline;
    list-style: none;
}

.nav ul li a {
    color: #ebeaea;
    font-family: "微软雅黑";
    font-size: 12px;
    /*font-weight: bold;*/
    display: block;
    margin-left: 5px;
    text-align: center;
    height: 30px;
    line-height: 30px;
    overflow: hidden;
    list-style: none;
}

ul {
    list-style-type: none;
}

.nav ul li a span {
    display: block;
    font-family: "微软雅黑";
    vertical-align: middle;
    font-size: 13px;
}

ul#nav {
    height: 25px;
    background: #C0C0C0;
    margin: 0 auto;
    font-size: 8px;
}

ul#nav li {
    float: left;
    height: 25px;
    width: 25%;
}

ul#nav li a {
    display: inline-block;
    width: 100%;
    height: 25px;
    line-height: 25px;
    text-align: center;
    color: #FFF;
    font-family: "\5FAE\8F6F\96C5\9ED1";
    font-size: 10px
}

ul#nav li a:hover {
    background: #0095BB
}

a {
    text-decoration: none;
}
</style>
<div class="g-doc ui-mobile-viewport ui-overlay-a" id="wrapper">
    <!--<header class="header"><h1>广州纤语生物科技有限公司      </h1></header><div class="nav"><ul><li><a href="index.html">网站首页</a></li><li><a href="ab.html">项目介绍</a></li><li><a href="ab.html">公司简介</a></li><li><a href="lx.html">联系我们</a></li></ul></div>-->
    <style>
        .header h1 {

        font-size: 14px;
        font-weight: bold;
        color: #333;
        line-height: 24px;
        text-align: center;
        width: 100%;
        position: static;
    }

    .nav {
        max-width: 640px;
        height: 36px;
        border-left: 1px solid #940A18;
        border-right: 1px solid #940A18;
        background-color: #000;
        margin: 0 auto;
    }

    .nav ul {
        margin: 0;
    }

    .nav ul li {
        box-sizing: border-box;
        float: left;
        width: 18%;
        white-space: nowrap;
        height: 35px;
        overflow: hidden;
    }

    .nav ul li a {
        color: #fff;
        text-align: center;
        line-height: 35px;
        text-overflow: ellipsis;
        overflow: hidden;
        height: 35px;
        display: block;
        font-size: 14px;
    }

    .nav ul li a:hover, .nav ul li a:active {
        opacity: 0.8;
        background-color: rgba(0, 0, 0, 0.2);
    }
    </style>
    <div>
        <div style="height: 45px;background-color: #c1c1c1;width: 100%;">
            <div style="width: 25%;float: left;text-align: center;line-height: 45px;"><a href="#" style="color:black;">首页</a></div>
            <div style="width: 25%;float: left;text-align: center;line-height: 45px;"><a href="#" style="color:black;">关于我们</a></div>
            <div style="width: 25%;float: left;text-align: center;line-height: 45px;"><a href="#" style="color:black;">产品中心</a></div>
            <div style="width: 25%;float: left;text-align: center;line-height: 45px;"><a href="#" style="color:black;">联系我们</a></div>
        </div>
        <img src="http://img.heven.top/fc/shenhe5//product.jpg" alt="">
    </div>
    <div id="web" data-role="page" data-url="web" tabindex="0" class="ui-page ui-page-theme-a ui-page-active"
         style="min-height: 924px;">
        <nav class="m-nav" style="padding-top:.7rem;padding-bottom:.5rem;"><img
                src="http://img.heven.top/fc/shenhe5//O1CN011CrPWrc53xC64JG_!!276530134.png"></nav>
        <div class="g-mm">
            <div class="g-bd">
                <ul class="m-message" style="color:#227446;">
                    <li>人人都有大汗腺，人人都有细菌，为什么只有少数人有狐臭？</li>
                    <li>为什么有的人狐臭容易消失，有的人却像登天一样难？</li>
                </ul>
                <div class="m-img"><img src="http://img.heven.top/fc/shenhe5//O1CN011CrPWswajLKN9jc_!!276530134.png" alt="健康减肥的秘密"></div>
                <div class="m-title" style="    font-size: 1.2rem;"> 如何才能改善狐臭？！
                </div>
                <p class="text-indent"> 因狐臭而困扰，不敢抬头挺胸做人：<strong>让人拒之于千里之外</strong>，不敢穿短袖衣裙，让你<strong>不合群</strong>！
                </p>

                <p class=" text-indent m-tips" style="background:#227446; "> 如果你狐臭了<strong
                        style="color: yellow">第一想法</strong>就是，那将很难做到改善狐臭，大家也可以上网查一下狐臭复发率，同时对身体也会有伤害！换句话说：<strong
                        style="color: yellow">改善狐臭</strong>难！归根结底<strong style="color: yellow">没掌握好办法</strong>。
                </p>

                <div class="m-img"><!--img src="./hc0910/84310334.png" alt=""--></div>
                <p class="text-indent"> 目前各种改善狐臭的办法，各种产品，祛狐产品，甚至各种稀奇古怪的办法都用过，还有人说其他各种各样的产品，买了回来，不仅<strong>不管用，腋下还发红发痒，把人折腾死</strong>。电视购物上，一款很贵的某氏狐臭净，虽然广告打得很多，网上也说的天花乱坠，可用了没多长时间腋下就再一次又痒又疼，真的<strong>心疼狐友们的小腋窝</strong>！用了这么多产品，徒劳无功且使人渐渐灰心了，但想想以后的几十年
                    都得伴随着狐臭谁甘心呢！
                </p>

                <p class=" text-indent m-tips" style="background:#227446; "> 如何才能逐步改善狐臭呢！有什么方法！
                </p>

                <div class="m-img"><img src="http://img.heven.top/fc/shenhe5//O1CN011CrPWt6vCB2FbkL_!!276530134.png" alt=""></div>
                <div class="zs" style="border-bottom:1px dashed #bbb;">
                    <div class="zs-title"><span class="xh" data-id="1">1</span> 什么是狐臭</div>
                    <div class="zs-info" style="text-indent:2em;">
                        狐臭，为腋窝部发出的特殊臭味的一种。又名腋臭、腋气。因湿热郁结于腠理汗孔所致，或因遗传所获。是一种特殊的刺鼻臭味，夏季更明显。少数人的外阴、肛周和乳晕也可散发出此种臭味。多数人的外耳道内有柔软耵聍。往往伴有<strong>色汗</strong>，以<strong>黄色</strong>居多。
                    </div>
                </div>
                <div class="m-img"><img src="http://img.heven.top/fc/shenhe5//O1CN011CrPWrc4rTeG8pD_!!276530134.png" alt=""></div>
                <div class="zs" style="border-bottom:1px solid #227446;margin-bottom:.4rem;">
                    <div class="zs-title"><span class="xh" data-id="1">2</span>狐臭的类型</div>
                    <div class="zs-info" style="text-indent:2em;">狐臭分<strong>遗传的和非遗传</strong>的，严重程度不一样，可分为：<strong>轻度狐臭、中度狐臭、强度狐臭</strong>！
                    </div>
                </div>
                <p class=" text-indent m-tips"
                   style="text-indent: 0;background:#227446; text-align: center;color:#fff;font-size:1rem">
                    <span>改善狐臭</span>可以<span>做到断根</span>吗？<br><span></span></p>

                <div class="m-img" style="text-align: center;"><img src="http://img.heven.top/fc/shenhe5//O1CN011CrPWrkVhuouHMK_!!276530134.jpg"
                                                                    style="width: 95%" alt="改变易胖体质的效果"></div>
            </div>
            <p class="m-border text-indent"> 研究发现，狐臭可以通过<strong>专业改善</strong>从而达到。每个人的<strong>体质及严重程度不同</strong>，改善的方式也尽不同。一些人因为不痛不痒，因此初步得知狐臭时候不重视，不能及时改善，往往错过极佳时间，导致狐臭加重，合理的<strong>改善改善对改善狐臭起关键作用</strong>。有的人已经<strong>改善了狐臭</strong>，原因是他们通过狐臭顾问专业分析和选用合适自己体质和并对皮肤没有什么伤害的产品，因为<strong
                    style="background:yellow;color:red;">只有选择对了，才能更简单的改善狐臭的烦恼!</strong></p>

            <p class="m-border text-indent">如果你发现孩子、家人、自身有以下任何一种情况，那八九不离十就是狐臭啦 </p>

            <p class="m-tips" style="background:#227446; width:96%;">
                <span>1、出现油耳朵（就是耳屎是稀的，发黄的粘稠的，而不是干燥的白粉末状）；</span><br><span>2、 腋窝出汗多，稍微一动或者心情紧张什么的，腋下就湿哒哒的一片；</span><br><span>3、穿过2天的 衣服闻上去有异味，跟汗味不一样的那种；</span><br><span>4、浅色衣服上有 发黄的汗渍；</span><br><span>5、爸爸妈妈、爷爷奶奶、姨舅姑姑等家族亲戚有狐臭的， 遗传概率就非常大。</span><br>
            </p>

            <p class="m-border text-indent">以上这些征兆哪怕有一个出现，就要<strong>及时处理，不然会越来越严重</strong>。
                如果家里有小孩出现以上情况，家长一定要长心啊，要不然真的太伤孩子自尊心和自信心啦！！！ </p>

            <p style="color: #ff3d00">温馨提示：未满18周岁，请在监护人或者父母指导下咨询，不建议单独咨询！</p>

            <p style="font-weight: bold; padding-top: 20px;">如果你有任何狐臭的问题，可以免费微信咨询狐臭顾问，微信号： <span class="wxh" id="open"
                                                                                                 data-clipboard-text=""><script
                    type="text/javascript">document.write(stxlwx);</script></span><span
                    style="background-color:#227446;color:#fff;margin-left:10px;">复制微信添加好友</span></p>
            <div class="m-footer"> 获取狐臭改善法之前，首先做一个狐臭测试
                <div style="    padding: 0;
    margin: 0;
    line-height: 0;
    font-size: .55rem;
    color: #1d1d1d;
    margin-top: -.5rem;
    font-weight: 400;">（测试结果提供狐臭老师一对一免费咨询名额）
                </div>
            </div>
        </div>
        <style>        .content .menu li.on {
            border-bottom-color: #227446;
        }
        </style>
        <div class="content">
            <div class="thame_pic top" id="lazy_img">
                <div class="menu clf">
                    <ul>
                        <li class="on" id="csbt" style="width:100%">狐臭体质测试</li><!--<li class="">粉丝留言</li> --></ul>
                </div>
                <div class="change clf">
                    <div id="case" style="display: block;">
                        <div id="swiper_container">
                            <div class="swiper-container swiper-container-horizontal" style="height: 15rem;">
                                <div class="swiper-wrapper notmove">
                                    <div class="swiper-slide swiper-slide-active" style="width: 592px;"><img
                                            src="http://img.heven.top/fc/shenhe5//O1CN01fsXZ1P1CrPYCQYek6_!!276530134.png">

                                        <div class="first" id="first">
                                            <div class="tips">剩8题</div>
                                            <h3 style="margin-top:0;">1.你的年龄是？</h3>
                                            <ul class="clf">
                                                <li id="a-18">18岁以下</li>
                                                <li class="G-18">18岁-35岁</li>
                                                <li class="G-18">36岁-45岁</li>
                                                <li class="G-18">45岁以上</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" style="width: 592px;"><img
                                            src="http://img.heven.top/fc/shenhe5//O1CN01fsXZ1P1CrPYCQYek6_!!276530134.png">

                                        <div class="first">
                                            <div class="tips clf"><span class="fl prev">上一题</span>剩7题</div>
                                            <h3 style="margin-top:0;">2.父母亲，或者兄弟姐妹有狐臭史？</h3>
                                            <ul class="clf" id="second">
                                                <li>是</li>
                                                <li>否</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 592px;"><img
                                            src="http://img.heven.top/fc/shenhe5//O1CN01fsXZ1P1CrPYCQYek6_!!276530134.png">

                                        <div class="first">
                                            <div class="tips clf"><span class="fl prev">上一题</span>剩6题</div>
                                            <h3 style="margin-top:0;">3.耳朵有“糖油耳？</h3>
                                            <ul class="clf" id="second">
                                                <li>是</li>
                                                <li>否</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 592px;"><img
                                            src="http://img.heven.top/fc/shenhe5//O1CN01fsXZ1P1CrPYCQYek6_!!276530134.png">

                                        <div class="first">
                                            <div class="tips clf"><span class="fl prev">上一题</span>剩5题</div>
                                            <h3 style="margin-top:0;">4.出汗后,一张干净的餐巾纸擦后,是否有异味？</h3>
                                            <ul class="clf" id="second">
                                                <li>是</li>
                                                <li>否</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 592px;"><img
                                            src="http://img.heven.top/fc/shenhe5//O1CN01fsXZ1P1CrPYCQYek6_!!276530134.png">

                                        <div class="first">
                                            <div class="tips clf"><span class="fl prev">上一题</span>剩4题</div>
                                            <h3 style="margin-top:0;">5.内衣腋下部分会有点发黄？</h3>
                                            <ul class="clf" id="second">
                                                <li>是</li>
                                                <li>否</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 592px;"><img
                                            src="http://img.heven.top/fc/shenhe5//O1CN01fsXZ1P1CrPYCQYek6_!!276530134.png">

                                        <div class="first">
                                            <div class="tips clf"><span class="fl prev">上一题</span>剩3题</div>
                                            <h3 style="margin-top:0;">6.喜欢吃酸辣、烧烤等食物？</h3>
                                            <ul class="clf" id="second">
                                                <li>是</li>
                                                <li>否</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 592px;"><img
                                            src="http://img.heven.top/fc/shenhe5//O1CN01fsXZ1P1CrPYCQYek6_!!276530134.png">

                                        <div class="first">
                                            <div class="tips clf"><span class="fl prev">上一题</span>剩2题</div>
                                            <h3 style="margin-top:0;">7.一紧张就出汗？</h3>
                                            <ul class="clf" id="second">
                                                <li>是</li>
                                                <li>否</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 592px;"><img
                                            src="http://img.heven.top/fc/shenhe5//O1CN01fsXZ1P1CrPYCQYek6_!!276530134.png">

                                        <div class="first">
                                            <div class="tips clf"><span class="fl prev">上一题</span>剩1题</div>
                                            <h3 style="margin-top:0;">8.腋毛比较浓厚且分布的范围较广？</h3>
                                            <ul class="clf" id="second">
                                                <li>是</li>
                                                <li>否</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 592px;"><img
                                            src="http://img.heven.top/fc/shenhe5//O1CN01fsXZ1P1CrPYCQYek6_!!276530134.png">

                                        <div class="first" id="third">
                                            <div class="tips clf"><span class="fl prev">上一题</span></div>
                                            <h3 style="margin-top:0;"> 9.只要一进屋别人就可闻到刺鼻的气味？</h3>
                                            <ul class="clf" id="second">
                                                <li>是</li>
                                                <li>否</li>
                                            </ul>
                                            <p><a id="submit_btn" class="ui-link">提交</a></p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="comment" style="display: none;">
                        <ul>
                            <li style="height:500px">
                                <div class="user_txt clf"><font color="#ff5722"><span style="font-weight: 700;
    margin-bottom: .3rem;
    display: block;
    color: #ff3d00;">您有中度以上的狐臭，了解狐臭调理和根除。</span>防止狐臭太加重。只要经过老师专业指导，可通过调理狐臭，达到根除。可添加下面老师微信号，进行一对一免费咨询：</font>

                                    <div class="prx">
                                        <div class="Mask_txtx"><p
                                                style="text-align: center; margin-top: .6rem; font-size: .8rem; color: #9b9b9b;">
                                            点击微信号即可复制，右上角有个"十"的符号，选择"添加朋友"，然后粘贴</p>

                                            <div class="Mask_wechat"><span style="color:#fff; font-weight:bold"><b
                                                    id="No3"><span class="wxh" id="open"><script
                                                    type="text/javascript">document.write(stxlwx);</script></span></b></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <style>        .Mask_txt {
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

        #tc {
            height: 70px;
            position: fixed;
            bottom: 0px;
            max-width: 640px;
            margin: 0 auto;
            width: 100%;
            background-color: #227446;
        }

        #tc > .wechat {
            float: left;
            width: 14%;
            padding-left: 1%;
            height: 70px;
        }

        #tc > .text {
            float: left;
            width: 60%;
            height: 60px;
        }

        #tc > .text > p > span {
            background-color: yellow;
        }

        #tc > .button {
            float: right;
            width: 20%;
            height: 50px;
            margin-right: 3%;
        }

        #tc > .text > p {
            color: #fff;
            margin-top: 2px;
            padding-left: 15px;
            font-size: 14px;
        }

        #tc > .button > button {
            height: 30px;
            margin-top: 20px;
            background-color: #259dab;
            border: none;
            padding: 0px 5px;
            width: 90%;
            border-radius: 3px;
            color: #fff;
            font-size: 14px;
        }

        /*点击弹窗*/
        .zz {
            position: fixed;
            top: 35%;
            width: 70%;
            left: 15%;
            border: 2px solid green;
            border-radius: 10px;
            text-align: center;
            background-color: #fff;
            padding: 40px 0px;
            display: none;
            z-index: 9999;
        }

        .zz_t > p:nth-child(1) {
            font-size: 16px;
            color: red;
            font-weight: 900;
            margin: 0px;
            margin-bottom: 15px;
        }

        .zz_t > p:nth-child(2) {
            font-size: 14px;
            color: red;
            font-weight: 900;
            margin: 0px;
            margin-bottom: 25px;
        }

        #hide {
            background-color: rgb(127, 201, 77);
            color: #fff;
            text-align: center;
            padding: 4px 0px;
            border: none;
            font-size: 20px;
            border-radius: 5px;
            width: 30%;
            font-family: '微软雅黑';
        }

        #wechat {
            background-color: rgb(127, 201, 77);
            color: #fff;
            text-align: center;
            padding: 4px 0px;
            border: none;
            font-size: 20px;
            border-radius: 5px;
            width: 30%;
            font-family: '微软雅黑';
        }

        /*返回浮窗*/
        .z {
            background-color: rgba(0, 0, 0, 0.4);
            display: none;
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 88899;
            top: 0px;
            left: 0px;
        }

        .fix {
            position: fixed;
            top: 20%;
            width: 74%;
            left: 14%;
            display: none;
            z-index: 99999;
        }

        .f_img {
            width: 100%;
        }

        .f_img > img {
            width: 100%;
        }

        .f_text {
            border: 1px solid #ddd;
            border-top: 2px solid #ddd;
            border-radius: 10px;
            text-align: center;
            background-color: rgb(255, 255, 255);
            padding: 20px 0px;
        }

        .f_text > p:nth-child(1) {
            font-weight: 900;
            font-family: '黑体';
            font-size: 17px;
            padding-bottom: 0.5em;
        }

        .f_text > p:nth-child(1) > span {
            color: red;
        }

        .f_text > p:nth-child(2) {
            font-weight: 900;
            color: red;
            font-family: '黑体';
            font-size: 20px;
            padding-bottom: 0.5em;
        }

        .f_text > p:nth-child(3) {
            color: red;
            font-weight: 900;
            padding-bottom: 0.5em;
        }

        .f_text > p:nth-child(4) {
            font-weight: 900;
            color: #000;
            padding-bottom: 0.5em;
        }

        .f_text > p:nth-child(4) > span {
            color: red;
        }
        </style>
    </div>
    <script>    var mySwiper = new Swiper('#case .swiper-container', {
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
    <section class="show_right"
             style="position: fixed;left: 50%;margin-left:380px;bottom: 200px;background: #fff;max-width: 400px;"
             data-id="80066" data-color="rgb(216, 40, 33)" data-custom="rgb(216, 40, 33)">
        <section
                style="padding: 15px; max-width: 100%; box-sizing: border-box; opacity: 0.8; border-width: 2px 2px 8px; border-style: solid; border-color: rgb(216, 40, 33); word-wrap: break-word !important;">
            <section class=""
                     style="max-width: 100%; box-sizing: border-box; border: 0px none; word-wrap: break-word !important;"><!--
            <script>document.write('<img style="width:180px;" src="img/' + wxid + '.jpg" width="120" height="123">');</script>            -->
                <!-- <script>                document.write(vximg) -->
                <!-- </script> -->
                <img style="width:280px" align="middle" src="http://saveqq.cn/fc/shenhe.php"><img style="width:280px"
                                                                                                  align="middle"
                                                                                                  src="http://img.heven.top/fc/shenhe5//hc01">

                <p style="text-align: center;">扫一扫加老师微信:</p>

                <p style="text-align: center;color: #000;">调理狐臭问题，早日自信</p></section>
        </section>
    </section>
    <p style="margin-bottom:80px;text-align:center">版权:鹰潭市天琪电子科技有限公司</p>

    <div id="tc" class="cl">
        <div class="wechat"
             style="background: url(http://oss.youyt.cn/wechat.png) no-repeat; background-position: center center; background-size: contain;"></div>
        <div class="text">
            <p>添加微信: <span class="wxh go-wx" id="open" style="color: red;"><script
                    type="text/javascript">document.write(stxlwx);</script></span></p>
            <p>调理狐臭问题，早日自信。</p></div>
        <div class="button" id="open">
            <button class="go-wx">去微信</button>
        </div>
    </div><!--返回浮窗-->
    <div class="z" id="z"></div>
    <div class="fix" id="fix">
        <div class="f_img"><img src="http://img.heven.top/fc/shenhe5//gx.png" alt=""></div>
        <div class="f_text"><p>恭喜您，获得咨询<span>↓↓↓</span>资格</p>

            <p>祛狐专家-欣欣</p>

            <p class="weixinid" id="open">
                <script type="text/javascript">document.write(stxlwx);</script>
            </p>
            <p style="">每天仅<span>50个</span>名额，错过遗憾一辈子！</p></div>
    </div><!--点击弹窗-->
    <div id="zz" class="zz">
        <div class="zz_t"><p>微信号复制成功</p>

            <p>点击去微信→右上角+号→添加好友→粘贴</p></div>
        <div>
            <button id="hide">取消</button>
            <button id="wechat"><a href="weixin://">去微信</a></button>
        </div>
    </div>
    <script type="text/javascript">    $('#mydel').click(function (event) {
        /* Act on the event */
        $("#myModal").hide();
    });
    </script>
    <div class="ui-loader ui-corner-all ui-body-a ui-loader-default ui-loader-fakefix" style="top: 463px;"><span
            class="ui-icon-loading"></span>

        <h1></h1></div>
</div><!-- <center style="font-size: 12px;">-->
<!--     <div style="text-align:center;font-size:10px;color:#bebebe;margin:20px 0;padding-bottom:100px">-->
<!--南京勰锐化妆品有限公司     <br>  --><!--</div>--><!--   </center>-->
<script src="http://img.heven.top/fc/shenhe5//clipboard.min.js"></script>
<script type="text/javascript" src="http://img.heven.top/fc/shenhe5/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript">    $(document).ready(function () {
    $.ajax({
            url:'http://heven.top:8000/app/log',
            method:'post',
            data:{'type':'load','local_url':window.location.href,'weixin':"<?php echo $stxlwx?>"},
        })
    var clipboard = new Clipboard('#open');

    clipboard.on('success', function (e) {
        copy();
        $("#zz").fadeIn(600);
    });


    $("#open").attr("data-clipboard-text", stxlwx);

    $('.go-wx').click(function () {
        var clipboard = new Clipboard('#open', {
            text: function () {
                return stxlwx; //复制的值
            }
        });
        clipboard.on('success', function (e) {
            copy();
            $("#zz").fadeIn(600);
        });
    });

    $('#hide').click(function () {
        $("#zz").hide();
    });

});
</script>
<script type="text/javascript">
function copy() {
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
        data:{'type':'copy','local_url':window.location.href,'weixin':"<?php echo $stxlwx?>"},
    })

}
$("#wechat").on("click",function(){
    $.ajax({
        url:'http://heven.top:8000/app/log',
        method:'post',
        data:{'type':'gowechat','local_url':window.location.href,'weixin':"<?php echo $stxlwx?>"},
    })
})
</script>
<div style="display:none"><span id="cnzz_stat_icon_"></span>
    <script src="http://img.heven.top/fc/shenhe5//z_stat.php" type="text/javascript"></script>
    <span id="cnzz_stat_icon_"></span>
    <script src="http://img.heven.top/fc/shenhe5//z_stat(1).php" type="text/javascript"></script>
</div>
</body>
</html>