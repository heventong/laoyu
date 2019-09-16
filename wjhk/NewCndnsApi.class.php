
<?php

class NewCndnsApi
{
	public $user_name;
	public $user_email;
	public $api_password;
	public $api_url;
	public $otime;
	public $checksum;
	public $pageNum = '12';
	public $wangdian_id = '61';

	public function __construct(){
		$this->user_name = 'reic';
		$this->user_email = 'reric@126.com';
		$this->api_password = 'F27FD0D549514720';
//		$this->api_url = 'http://api.cndns.com/';
		$this->api_url = 'http://www.16show.net/';
		$this->otime = date('YmdHis');
		$this->checksum = md5($this->user_name.md5($this->api_password).$this->otime.$this->user_email);
	}
	public function getURL($template_api_url,$params){
		if(empty($template_api_url) || empty($params)){
			return false;
		}
		return $this->api_url.$template_api_url.'?'.http_build_query($params);
	}
	public function curl_request_bb($url,$post){
		return file_get_contents($url);
	}
	public function curl_request($url,$post='',$cookie='', $returnCookie=0){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);

		curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)');
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
		curl_setopt($curl, CURLOPT_REFERER, "http://XXX");
		if($post) {
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));
		}
		if($cookie) {
			curl_setopt($curl, CURLOPT_COOKIE, $cookie);
		}
		curl_setopt($curl, CURLOPT_HEADER, $returnCookie);
		curl_setopt($curl, CURLOPT_TIMEOUT, 60);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 2);
		$data = curl_exec($curl);
		if (curl_errno($curl)) {
			return curl_error($curl);
		}
		curl_close($curl);
		if($returnCookie){
			list($header, $body) = explode("\r\n\r\n", $data, 2);
			preg_match_all("/Set\-Cookie:([^;]*);/", $header, $matches);
			$info['cookie']  = substr($matches[1][0], 1);
			$info['content'] = $body;
			return $info;
		}else{
			return $data;
		}
	}

	public function getCataList($type='', $refinement=0){
		$params = array();
		$params['username']=$this->user_name;
		$params['otime']=$this->otime;
		$params['checksum']=$this->checksum;
		$params['type']=$type;
		$params['refinement']=$this->refinement;
//		$url = $this->getURL('sitestarpro/getCataList.aspx',$params);
		$url = $this->getURL('site/get-cate',$params);
		$data = $this->curl_request($url,'get');
		return json_decode($data,TRUE);
	}
	public function getTemplateByClassId($classid,$Mobile,$refinement,$category_type=''){
		$params = array();
		$params['username']=$this->user_name;
		$params['otime']=$this->otime;
		$params['checksum']=$this->checksum;
		if(!empty($classid)){
			$params['category_type']=$classid;
		}else{
			if(!empty($category_type)){
				$params['category_type'] = $category_type;
			}
		}
		$params['template_type']=$Mobile;
		$params['refinement']=$refinement;
//		$url = $this->getURL('sitestarpro/getTemplate.aspx',$params);
		$url = $this->getURL('site/get-data',$params);
//		$data = $this->curl_request('http://bs.16show.net/sssss.txt','get');var_dump($data);echo $url;exit();
		$data = $this->curl_request($url,'post');
//		var_dump($data);
//		$data = $this->curl_request('http://www.baidu.com','get');
//		var_dump($data);
		return json_decode($data,TRUE);
	}

	public function getHtml($data,$ismob=0){
		if(empty($data) || !is_array($data)){
			return '';
		}
		if($ismob==1){
			$str = '<div class="pcwap_o wxb"><div class="wap_wx"><a href="'.$data['tpl_domain'].'" target="_blank"><div class="palte-img"><img class="pc_img wx" src="'.$data['tpl_pic_screenshot'].'"></div><div class="pc_bg" style="display: none;"></div><i></i> <div class="pc_p" style="display: none;"><span class="fl">设计师：<em>建站之星</em></span><b class="fr">￥'.$data['tpl_price'].'元</b><div class="clear"></div></div><div class="pc_log" style="display: none;"><img src="images/tem_16.png"><p>编号：'.$data['tpl_id'].'</p></div> </div></a><div style="margin-top:-17px;text-align: center;">编号：'.$data['tpl_id'].'</div></div>';
		}else{
			$str = '<div class="pcwap_o"><div class="pc_m"> <a href="'.$data['tpl_domain'].'" target="_blank"><img class="pc_img" src="'.$data['tpl_pic_screenshot'].'"><div class="pc_bg" style="display: none;"></div><i></i> <div class="pc_p" style="display: none;"><span class="fl">设计师：<em>建站之星</em></span><b class="fr">￥'.$data['tpl_price'].'元</b><div class="clear"></div></div><div class="pc_log" style="display: none;"><img src="images/tem_16.png"><p>编号：'.$data['tpl_id'].'</p> </div></div> </a><div class="wap_m"> <a href="'.getMobileDomain($data['tpl_domain']).'" target="_blank"><img class="wap_img" src="'.str_replace("-a.jpg","-pm.jpg",$data['tpl_pic_screenshot']).'"><div class="wap_bg" style="display: none;"></div><img class="wap_log" src="images/tem_17.png" style="display: none;"></a> </div><div style="margin-top:5px;margin-left:10px;text-align: center;">编号：'.$data['tpl_id'].'</div></div>';
		}
		return $str;
	}

	public function getPageHtml($pageNum,$page){
		$pageNum = intval($pageNum);
		$page = intval($page);
		if(empty($pageNum) || $pageNum<='1'){
			return '';
		}
		if(empty($page)){
			$page=1;
		}
		$return_str = '<div class="clearfix" ></div><ul class="pagination">';
		if($pageNum>10){
			$end_num = $pageNum - 5;
			if($page<=5){
				for($i=1;$i<6;$i++){
					if($i==$page){
						$return_str .= '<li class="active"><a href="javascript:void(0)">'.$i.'</a></li>';
					}else{
						$return_str .= '<li class="pageclick" page="'.$i.'"><a href="javascript:void(0)">'.$i.'</a></li>';
					}
				}
				$return_str .= '<li class="pageclick" page="6"><a href="javascript:void(0)">6</a></li>';
				$return_str .= '<li><a href="javascript:void(0)">...</a></li>';
				$return_str .= '<li class="pageclick" page="'.($pageNum-1).'"><a href="javascript:void(0)">'.($pageNum-1).'</a></li>';
				$return_str .= '<li class="pageclick" page="'.($pageNum-1).'"><a href="javascript:void(0)">'.($pageNum-2).'</a></li>';
			}else if(5<$page && $page<$end_num){
				$return_str .= '<li class="pageclick" page="1"><a href="javascript:void(0)">1</a></li>';
				$return_str .= '<li class="pageclick" page="2"><a href="javascript:void(0)">2</a></li>';
				$return_str .= '<li><a href="javascript:void(0)">...</a></li>';
				$return_str .= '<li class="pageclick" page="'.($page-2).'"><a href="javascript:void(0)">'.($page-2).'</a></li>';
				$return_str .= '<li class="pageclick" page="'.($page-1).'"><a href="javascript:void(0)">'.($page-1).'</a></li>';
				$return_str .= '<li class="active"><a href="javascript:void(0)">'.$page.'</a></li>';
				$return_str .= '<li class="pageclick" page="'.($page+1).'"><a href="javascript:void(0)">'.($page+1).'</a></li>';
				$return_str .= '<li class="pageclick" page="'.($page+2).'"><a href="javascript:void(0)">'.($page+2).'</a></li>';
				$return_str .= '<li><a href="javascript:void(0)">...</a></li>';
				$return_str .= '<li class="pageclick" page="'.($pageNum-1).'"><a href="javascript:void(0)">'.($pageNum-1).'</a></li>';
				$return_str .= '<li class="pageclick" page="'.($pageNum-1).'"><a href="javascript:void(0)">'.($pageNum-2).'</a></li>';
			}else{
				$return_str .= '<li class="pageclick" page="1"><a href="javascript:void(0)">1</a></li>';
				$return_str .= '<li class="pageclick" page="2"><a href="javascript:void(0)">2</a></li>';
				$return_str .= '<li><a href="javascript:void(0)">...</a></li>';
				$return_str .= '<li class="pageclick" page="'.($pageNum-6).'"><a href="javascript:void(0)">'.($pageNum-6).'</a></li>';
				for($i=$end_num;$i<=$pageNum;$i++){
					if($i==$page){
						$return_str .= '<li class="active"><a href="javascript:void(0)">'.$i.'</a></li>';
					}else{
						$return_str .= '<li class="pageclick" page="'.$i.'"><a href="javascript:void(0)">'.$i.'</a></li>';
					}
				}
			}
		}else{
			for($i=1;$i<=$pageNum;$i++){
				if($i==$page){
					$return_str .= '<li class="active"><a href="javascript:void(0)">'.$i.'</a></li>';
				}else{
					$return_str .= '<li class="pageclick" page="'.$i.'"><a href="javascript:void(0)">'.$i.'</a></li>';
				}
			}
		}
		if($page==$pageNum){
			$return_str .= '<li><a href="javascript:void(0)">»</a></li>';
		}else{
			$return_str .= '<li class="pageclick" page="'.($page+1).'"><a href="javascript:void(0)">»</a></li>';
		}
		$return_str .= '</ul>';
		return $return_str;
	}
}
function getMobileDomain($data){
	if($data == ''){
		return '';
	}
	$domain = '';
	$domain_d = explode('.',$data);
	$domain_num = count($domain_d);
	for($x = 0;$x<$domain_num;$x++){
		if($x=='0'){
			$domain = $domain_d[$x];
		}elseif($x=='1'){
			$domain = $domain .'-m.'.$domain_d[$x];
		}else{
			$domain = $domain .'.'.$domain_d[$x];
		}
	}
	return $domain;
}



?>