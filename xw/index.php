<?php 
error_reporting(0);
// echo json_encode(["LDT168668","123","456","789"]);
//  $redis = new Redis();
//  $redis->connect("118.24.150.195","6379");
//  $redis->auth("tong123");
 require_once(__DIR__.'/../vendor/autoload.php');
 $redis = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '118.24.150.195',
    'port'   => 6379,
]);
$redis->auth("tong123");
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
 $module_view = $redis -> get ($dirname."_view");
 if(!$module_view){
     $module_view='shenhe.php';
 }else{
    $module_view = 'ad.php';
 }
include($module_view); 