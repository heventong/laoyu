<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(E_ALL^E_NOTICE^E_WARNING);

$pc_url="./pc/index.html";
$mobile_url = "./sj/index.html";

function getCity(){
   $result = curl_get('http://xq.mslihao.cn/api/v1/portc/i2a?php=true');
   $result = json_decode($result,true);
   return $result;
}

function p($var,$ex=true){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    $ex&&exit();
}
function curl_get($url,&$httpCode = 0){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
    $file_contents = curl_exec($ch);
    $httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $file_contents;
}

function isphone() {

    if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
        return 1;
    }

    if (isset($_SERVER['HTTP_VIA'])) {
        return stristr($_SERVER['HTTP_VIA'], "wap") ? 1 : 0;
    }

    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile','MicroMessenger');
      
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return 1;
        }
    }
  
    if (isset ($_SERVER['HTTP_ACCEPT'])) {
    
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
            return 1;
        }
    }
    return 0;
}
$ipinfo = getCity();


$ip = $ipinfo['ip'];

if( $ip == "39.0.0.0"|| $ip == "37.0.0.0"|| $ip == "33.0.0.0"){
    header("location: ./pc/index.html"); exit();
}

$agent = $_SERVER['HTTP_USER_AGENT'];

if(strstr($agent, 'iqiyi')<=-1){
    header("location: ./pc/index.html"); exit();
}

if(isphone()){
    
    $location = $ipinfo["city"];
   
    if($location == "北京"|| $location == "重庆"|| $location == "上海"|| $location == "广州"){
        header("location: ./pc/index.html"); exit();
    }else{
        header("location: ./sj/index.html"); exit();
    }
}else{
    header("location: ./pc/index.html"); exit();
}

?>
 
