<?php 
error_reporting(0);
 require_once(__DIR__.'/../vendor/autoload.php');
 $redis_conf = include ("../redis.conf");
 $redis = new Predis\Client($redis_conf);
 $redis->auth($redis_conf['auth']);
 $url = $_SERVER['HTTP_HOST'];
 if(strstr($url,'ccricu')){
   header("Location:http://ytnuao.cn/jf13");
}
 $is_url = $redis->lindex('url_list',$url);
 if($is_url){
     
 }
 $dirname = end(explode('/',dirname(__FILE__)));
 $weixins = json_decode($redis->get($dirname),true);
 $weixin_index = $redis->get($dirname."_index");
 if(count($weixins)-1 <= $weixin_index){
     $redis->set($dirname."_index",0);
 }else{
    $redis->set($dirname."_index",$weixin_index+1);
 }
//  var_dump($weixins,$weixin_index);exit;
 $stxlwx = $weixins[$weixin_index];
 $dirview = $module_view = $redis -> get ($dirname."_view");
 if($module_view=='1'){
     $module_view='shenhe.php';
 }else
{
    $module_view = $module_view.'.php';
}
// var_dump($_SERVER['HTTP_HOST']);exit;
include($module_view); 
