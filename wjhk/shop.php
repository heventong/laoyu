<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>建站神器|小程序|网站建设|网页设计神器|网站模板|网页模板-建站通,全网通|</title>
<meta name="Keywords" content="小程序,自助建站,智能建站,网站建设,网站制作,网站设计,网页设计,网站模板,网页模板,企业建站,自助建站,网店,微站,微网站,微店,微网店,手机建站,手机网站" />
<meta name="Description" content="建站通系统功能强大，拥有数千套精美网站模板，用户只需会上网、不需学习编程及任何语言，只要使用该建站平台，即可在线直接完成建站所有工作，也是设计师最得力的建站神器。" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="css/style.min.css" media="screen"/>
<link href="css/animate.css" rel="stylesheet">
<link href="css/public.ken.min.css" rel="stylesheet">

<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/new_temple.js"></script>
<style>
.tem_banner{display:none}
.sea{position: absolute; right: 15px;top: 33px; }
.sea input{padding: 5px; height: 38px; width: 290px;border: 1px solid #f1f1f1;}
.sea .schbtn{position: absolute; right: 0; top: 0; background: #dbdbdb; height: 37px; line-height: 37px; padding: 0 11px; color: #666;text-decoration:none;}
</style>
</head>

<?php
require_once ('CndnsApi.class.php');
$CndnsApi = new CndnsApi();

ini_set('display_errors','^E_NOTICE');//屏蔽掉notice,warning提示

$ismob = 0;
$mobile = intval($_GET['mobile']) ? intval($_GET['mobile']) : 2;
if($mobile==3){
	$ismob = 1;
}
$type = intval($_GET['type']) ? intval($_GET['type']) : 3;

$wangdian_id = $CndnsApi->wangdian_id;

$getTemplateByClassId = $CndnsApi->getTemplateByClassId($wangdian_id);
$getTemplateByClassId_Jingmei = $CndnsApi->getTemplateByClassId($wangdian_id,$mobile,'1');

$pageNum = $mobile==3 ? 12 : $CndnsApi->pageNum;
if($getTemplateByClassId['status']=='success'){
	$getTemplateByClassId['message'] = array_merge($getTemplateByClassId_Jingmei['message'],$getTemplateByClassId['message']);
	$count = count($getTemplateByClassId['message']);
	if($count>$pageNum){
		$tData = array_slice($getTemplateByClassId['message'],0,$pageNum);
	}else{
		$tData = $getTemplateByClassId['message'];
	}
	$pages = ceil($count/$pageNum);
}else{
	echo $getTemplateByClassId['message'];
}

?>
<body>
<div class="tem_banner text-center"><p>海量精美模板<br>
助您创建属于你企业的网站</p></div>
<div class="newcase-meau">
  <div class="w-1200">
    <div class="newcase-meau-all">
      <div class="newcase-meau-o">
        <ul id="isfree" class="list-unstyled">
          <li lang="2" class="on">精美风格</li>
          <!-- <li><a href="web.php">功能优势</a></li>
		   <li><a href="xcx.php"  style=" color:#FF5722;font-weight: 600;">轻推小程序</a></li>
          <li><span class="sups"></span><a href="ytb.php"><b style="color:red">网站推广</b></a></li>-->
          <div class="clear"></div>
        </ul>
        <div class="sea">
          <input id="temID" type="text" placeholder="搜索模板地址或输入模板编号">
          <a class="searchbtn" id="searchbtn" href="javascript:void();"></a>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="newcase-meau-t">
        <dl id="mod-type">
          <dt>模板类型：</dt>
          <dd>
          	<a lang="all" href="./index.php?mobile=2&type=3" <?php if($mobile==2){?>class="on"<?php }?>>PC+手机版</a>
          	<a lang="wechat" href="./index.php?mobile=3&type=4" <?php if($mobile==3){?>class="on"<?php }?>><span class="sups"></span>小程序(PC+手机+小程序)</a>
          	<!--<a href="http://xcx186.cndns.com/template" class="moreBtn" target="_blank"><span class="sups"></span>单版小程序</a>-->
            <div class="clear"></div>
          </dd>
        </dl>
        <dl>
          <dt>功能选择：</dt>
          <dd id="tpl_levels">
	          <!--<a lang="" href="javascript:void()" class="on">全部</a> -->
	          <a lang="3" href="index.php?mobile=<?php echo $mobile?>&type=<?php echo $type?>">营销网站</a>
	          <a lang="4" href="shop.php?mobile=<?php echo $mobile?>&type=<?php echo $type?>" class="on">网上商城 </a>
            <div class="clear"></div>
          </dd>
        </dl>
        <dl id="ind-cla">
          <dt>行业分类：</dt>
          <dd id="creation"> <a lang="" href="javascript:void()" class="AllCla">全部</a> <a href="javascript:void();" id="more-choose" class="on">更多选择+</a>
            <div class="clear"></div>
          </dd>
        </dl>
        <div class="case_fl" style="display: none;">
          <div class="case_fl_m">
            <ul id="categories_all">
              <li class="on"><a href="javascript:void(0);">所有分类</a></li>
				<?php
				$getCataList =  $CndnsApi->getCataList($type);
				if($getCataList['status']=='success'){
					foreach($getCataList['message'] as $c){
						if($c['tpl_category_id']=='61'){continue;}
						?>
						<li id="<?php echo $c['tpl_category_id']?>"><a href="javascript:void(0);" attr_id="<?php echo $c['tpl_category_id']?>"><?php echo $c['tpl_category_name'],'<font color="#f86d0d">(',$c['amount'],')</font>';?></a></li>
						<?php
					}
				}else{
					?>
					<li id="null"><a href="javascript:void(0);"><?php echo $getCataList['message']?></a></li>
				<?php } ?>
              <div class="clear"></div>
            </ul>
          </div>
        </div>
        <dl class="col">
          <dt>颜色：</dt>
          <dd id="code_er">
	         <!-- <i id="all" class="i-all"></i>-->
	          <i id="red" class="i-o"></i>
	          <i id="orange" class="i-t"></i>
	          <i id="yellow" class="i-s"></i>
	          <i id="green" class="i-f"></i>
	          <i id="lightblue" class="i-w"></i>
	          <i id="blue" class="i-l"></i>
	          <i id="light_purple" class="i-q"></i>
	          <i id="purple" class="i-b"></i>
	          <i id="white" class="i-shi"></i>
	          <i id="grey" class="i-sy"></i>
	          <i id="brown" class="i-p"></i>
	          <i id="black" class="i-se"></i>
	          <i id="colorful" class="i-ss"></i>
            <div class="clear"></div>
          </dd>
        </dl>
        <div class="clear"></div>
		<div class="sea">
                        <input type="text" id="temID" placeholder="搜索模板地址或输入模板编号">
                        <a class="schbtn searchbtn" id="searchbtn" href="javascript:void()">搜索</a>
                        <div class="clear">
                        </div>
			<input type="hidden" id="mobile" name="mobile" value="<?php echo $mobile?>">
			<input type="hidden" id="type" name="type" value="<?php echo $type?>">
                    </div>
      </div>
    </div>
  </div>
</div>
<div class="case_main newcase_main">
  <div class="w-1200">
    <div class="case_main_all" lang="all" style="display:block;">
      <div class="tem_main_m" id="tem_main_m">
		<?php foreach($tData as $d){echo $CndnsApi->gethtml($d, $ismob);}?>

      </div>
      <div class="case_main_meau Pagination" style="">
			<?php echo $CndnsApi->getPageHtml($pages,'1');?>
	  </div>
    </div>
  </div>
</div>

<div id="save_data" hiddenid="" hiddencolor=""></div>

<script>
	  $('.wap_wx').hover(function () {
          $(this).find('.pc_bg,.pc_log,.wap_bg,.wap_log').fadeIn(250)
      }, function () {
          $(this).find('.pc_bg,.pc_log,.wap_bg,.wap_log').fadeOut(250)
      })
	  
      $('.pc_m').hover(function () {
          $(this).find('.pc_bg,.pc_log').fadeIn(250)
      }, function () {
          $(this).find('.pc_bg,.pc_log').fadeOut(250)
      })
	  
	  $('.wap_m').hover(function () {
          $(this).find('.wap_bg,.wap_log').fadeIn(250)
      }, function () {
          $(this).find('.wap_bg,.wap_log').fadeOut(250)
      })
	  
      $('.newcase-meau-o ul li').click(function () {
          $(this).addClass('on').siblings().removeClass('on')
      })
      $('.newcase-meau-t dl dd a').click(function () {
          $(this).addClass('on').siblings().removeClass('on')
      })
     
      $('.newcase-meau-t dl#ind-cla dd a').hover(function () {
          $(this).addClass('on').siblings().removeClass('on')
      })
      $('#more-choose,.case_fl').hover(function () {
          $('.case_fl').show();
      }, function () {
          $('.case_fl').hide();
      })

      $save_data = $('#save_data');
      //页数切换
      $(document).on("click", ".pageclick", function() {

	      var $this = $(this);
	      var page = $this.attr("page");
	      var color_id = $save_data.attr("hiddencolor");

	      $.ajax({
		      url: "get_ajax_temp.php",
		      dataType: "json",
		      async: true,
		      data: { "attr_id": <?php echo $wangdian_id?>,"color_id":color_id,"page":page,"mobile":$("#mobile").val(),"sort":1},
		      type: "POST",
		      beforeSend: function() {},
		      success: function(req) {
			      if(req.type=="ok"){
				      location.href = "#pagemaodian";
				      $('#tem_main_m').html(req.html);
				      $('.Pagination').html(req.page_html);
			      }else{
				      alert(req.message);
			      }
		      },
		      complete: function() {},//完成
		      error: function(e) {
			      alert('请重试');
		      }
	      });
      });
      //模板ID搜索
      $('.searchbtn').click(function(){
	      var temID = $(this).prev("input").val();
	      if(temID==''){
			  $(this).prev("input").attr("placeholder","按模板ID检索");$('#temID').focus();return false;
	      }
	      if(isNaN(temID)){
			  $(this).prev("input").attr("placeholder","模板ID只能为数字");$("#temID").val("");$('#temID').focus();return false;
	      }
	      $.ajax({
		      url: "get_ajax_temp.php",
		      dataType: "json",
		      async: true,
		      data: { "attr_id": <?php echo $wangdian_id?>,"temID": temID,"mobile":$("#mobile").val(),"sort":1,type:$("#type").val()},
		      type: "POST",
		      beforeSend: function() {},
		      success: function(req) {
			      if(req.type=="ok"){
				      $('#tem_main_m').html(req.html);
				      $('.Pagination').html(req.page_html);
			      }else{
				      alert(req.message);
			      }
		      },
		      complete: function() {},//完成
		      error: function(e) {
			      alert('请重试');
		      }
	      });
      });

      //颜色搜索
      $('#code_er i').click(function(){
	      var $this = $(this);
	      var color_id = $this.attr("id");
	      $save_data.attr("hiddencolor",color_id);

	      $.ajax({
		      url: "get_ajax_temp.php",
		      async: true,
		      data: { "attr_id": <?php echo $wangdian_id?>,"color_id":color_id,"mobile":$("#mobile").val(),"sort":1},
		      dataType: "json",
		      type: "POST",
		      beforeSend: function() {},
		      success: function(req) {
			      if(req.type=="ok"){
				      $('#tem_main_m').html(req.html);
				      $('.Pagination').html(req.page_html);
			      }else{
				      alert(req.message);
			      }
		      },
		      complete: function() {},//完成
		      error: function(e) {
			      alert('请重试');
		      }
	      });
      });

      //分类搜索
      $('.AllCla,.case_fl li a').click(function () {
	      $save_data.attr("hiddencolor",'');
	      $.ajax({
		      url: "get_ajax_temp.php",
		      dataType: "json",
		      async: true,
		      data: { "attr_id": <?php echo $wangdian_id?>,"mobile":2,"sort":1 },
		      type: "POST",
		      beforeSend: function() {},
		      success: function(req) {
			      if(req.type=="ok"){
				      $('.case_fl').slideToggle(300);
				      $('#tem_main_m').html(req.html);
				      $('.Pagination').html(req.page_html);
			      }else{
				      alert(req.message);
			      }
		      },
		      complete: function(){},//完成
		      error: function(e) {
			      alert('请重试');
		      }
	      });
      });
      $('.tem_main_m dl dt').hover(function () {
	      $(this).find('.dt_s').stop().animate({ top: '140px' })
	      $(this).find('.bg').fadeIn(500)
	      $(this).find('.dt_t').fadeIn(800)
      }, function () {
	      $(this).find('.dt_s').stop().animate({ top: '165px' })
	      $(this).find('.bg').fadeOut(10)
	      $(this).find('.dt_t').fadeOut(10)
      })


</script>
</body>
</html>
