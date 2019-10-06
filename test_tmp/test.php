<?php 
$start = time();
function get_address_by_ip($ip) {

//        $url = "http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
//        $url = "http://sp0.baidu.com/8aQDcjqpAAV3otqbppnN2DJv/api.php?query=".$ip."&co=&resource_id=6006";
	$key = ['H5ABZ-6D56K-X3PJP-AX2SP-CNMYH-UGBV2','N2WBZ-6C4CU-NZLVK-2L7UQ-PRIOJ-GYBR4'];
	$key = $key[rand(0,1)];
        $url = "http://apis.map.qq.com/ws/location/v1/ip?ip=".$ip."&key=".$key;

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt($curl, CURLOPT_HEADER, 0);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $info = curl_exec($curl);

//        mb_convert_encoding($info, 'utf-8', 'GBK,UTF-8,ASCII');
        curl_close($curl);

        return $info;

    }
echo get_address_by_ip("118.24.150.195");
echo "时间:".time()-$start;
