<?php 
 
function getIP()
	{	
		if (getenv("HTTP_CLIENT_IP"))
			$ip = getenv("HTTP_CLIENT_IP");
		else if(getenv("HTTP_X_FORWARDED_FOR"))
			$ip = getenv("HTTP_X_FORWARDED_FOR");
		else if(getenv("REMOTE_ADDR"))
			$ip = getenv("REMOTE_ADDR");
		else $ip = "Unknow";
		return $ip;
	}
	/**

	 * 根据 客户端IP 获取到其具体的位置信息

	 * @param unknown $ip

	 * @return string

	 */

	function get_address_by_ip($ip) {

	  $url = "http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;

	  $curl = curl_init();

	  curl_setopt($curl, CURLOPT_URL, $url);

	  curl_setopt($curl, CURLOPT_HEADER, 0);

	  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	  $info = curl_exec($curl);

	  curl_close($curl);

	  return $info;

	}
$clientip = @json_decode(get_address_by_ip(getIP()), true);
var_dump($clientip);exit;
