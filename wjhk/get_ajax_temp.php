<?php

require_once ('NewCndnsApi.class.php');
ini_set('display_errors','^E_NOTICE');//屏蔽掉notice,warning提示

$r_data = array();
$r_data['type']='error';
$attr_id = $_POST['attr_id'];//分类
$color_id = $_POST['color_id'];//颜色
$temID = $_POST['temID'];//模板ID
$pageshu = $_POST['page'];
$ismob = 0;
$mobile = intval($_POST['mobile']) ? intval($_POST['mobile']) : 2;
if($mobile==3){
    $ismob = 1;
}
$type = intval($_POST['type']) ? intval($_POST['type']) : 3;
$pageshu = intval($pageshu);
if(empty($pageshu)){
    $pageshu = 1;
}

$CndnsApi = new NewCndnsApi();
$wangdian_id = $CndnsApi->wangdian_id;
$pageNum = $mobile==3 ? 12 : $CndnsApi->pageNum;

$r_html = '';
$firstnum = ($pageshu-1)*$pageNum;
if($attr_id==$wangdian_id){
    $TemplateData = $CndnsApi->getTemplateByClassId($attr_id);
    $TemplateDataJingmei = $CndnsApi->getTemplateByClassId($attr_id,$mobile,'1');
}else{
    $TemplateData = $CndnsApi->getTemplateByClassId($attr_id,$mobile,'1');
}

if($TemplateData['status']=='success'){
    $AllData = array();
    if($attr_id==$wangdian_id){
        $TemplateData['message'] = array_merge($TemplateDataJingmei['message'],$TemplateData['message']);
    }else{
        foreach($TemplateData['message'] as $k){
            //过滤掉tpl_category_id=61的数据
            if($k['tpl_category_id']!='61'){
                $AllData[] = $k;
            }
        }
        $TemplateData['message'] = $AllData;
    }

    $r_data['type']='ok';
    $c_data=array();
    //根据搜索条件搜索出来对应数据
    if(!empty($color_id) || !empty($temID)){
        if(!empty($color_id)){
            foreach($TemplateData['message'] as $t){
                if(strpos($t['tpl_belong_color'], $color_id) !== false){
                    $c_data[]=$t;
                }
            }
        }
        if(!empty($temID)){
            foreach($TemplateData['message'] as $t){
                if($t['tpl_id']==$temID){
                    $c_data[]=$t;
                }
            }
        }
    }else{
        $c_data = $TemplateData['message'];
    }

    //处理数据
    $count = count($c_data);
    if($count>$pageNum){
        $tData = array_slice($c_data,$firstnum,$pageNum);
    }else{
        $tData = $c_data;
    }
    $pages = ceil($count/$pageNum);
    //分页
    $r_data['pages']=$pages;
    $r_data['page_html']=$CndnsApi->getPageHtml($pages,$pageshu);
    if(count($tData)>0){
        foreach($tData as $key=>$k){
            if($ismob==1){
                $r_html.=$CndnsApi->getHtml($k,1);
            }else{
                if($attr_id==$wangdian_id){
                    $r_html.=$CndnsApi->getHtml($k);
                }else{
                    $r_html.=$CndnsApi->getHtml($k);
                }
            }
        }
    }else{
        $r_html='<font style="margin-left:70px;color:red;">暂无数据！</font>';
    }
    $r_data['html']=$r_html;
    echo json_encode($r_data);exit();

}else{
    $r_data['message']=$TemplateData['message'];
    echo json_encode($r_data);exit();
}

