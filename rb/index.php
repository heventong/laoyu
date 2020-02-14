<?php 
error_reporting(0);
 require_once(__DIR__.'/../vendor/autoload.php');
 $redis_conf = include ("../redis.conf");
 $redis = new Predis\Client($redis_conf);
 $redis->auth($redis_conf['auth']);
 $dirname = end(explode('/',dirname(__FILE__)));
 $weixins = json_decode($redis->get($dirname),true);
 $weixin_index = $redis->get($dirname."_index");
 if(count($weixins)-1 <= $weixin_index){
     $redis->set($dirname."_index",0);
 }else{
    $redis->set($dirname."_index",$weixin_index+1);
 }
$am_time = date("Y-m-d 09:00:00");
$pm_time = date("Y-m-d 19:00:00");
$cur_time = date("Y-m-d H:i:s");
//  var_dump($weixins,$weixin_index);exit;
 $stxlwx = $weixins[$weixin_index];
 $dirview = $module_view = $redis -> get ($dirname."_view");
 if($module_view=='1' || ($cur_time>=$am_time && $cur_time <=$pm_time)){
     $module_view='shenhe.php';
 }else
{
    $module_view = $module_view.'.php';
}
include($module_view); 
