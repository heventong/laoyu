<?php 

ini_set('date.timezone','Asia/Shanghai');
$date = date('Y-m-d');
$url = "http://api.goseek.cn/Tools/holiday?date=".$date;
$file = file_get_contents($url);
$json = json_decode($file,true);
$redis = new Redis();
$redis->auth('tong123');
if ($json['data'] ==1)
{
  $redis->set('holiday',0);
  //  echo "周末不能预约";
}elseif ($json['data']==2)
{
  $redis->set('holiday',0);
  //  echo "节假日不能预约";
}elseif ($json['data'] ==0 && time() > mktime(7,0,0,date('m'),date('d'),date('Y')) && time() <  mktime(18,0,0,date('m'),date('d'),date('Y'))) 
{
   $redis->set('holiday',1);
}
