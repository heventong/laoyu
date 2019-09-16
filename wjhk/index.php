
</html>

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
<link rel="stylesheet" href="./css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="./css/style.min.css" media="screen"/>
<link href="./css/animate.css" rel="stylesheet">
<link href="./css/public.ken.min.css" rel="stylesheet">

<script src="./js/jquery-1.8.2.min.js"></script>
<!--<script src="js/new_temple.js"></script>-->
<style>
.tem_banner{display:none}
.sea{position: absolute; right: 15px;top: 33px; }
	.sea input{padding: 5px; height: 38px; width: 290px;border: 1px solid #f1f1f1;}
	.sea .schbtn{position: absolute; right: 0; top: 0; background: #dbdbdb; height: 37px; line-height: 37px; padding: 0 11px; color: #666;text-decoration:none;}
</style>

</head>

<?php
require_once ('NewCndnsApi.class.php');
$CndnsApi = new NewCndnsApi();

ini_set('display_errors','^E_NOTICE');//屏蔽掉notice,warning提示

$ismob = 0;
$mobile = intval($_GET['mobile']) ? intval($_GET['mobile']) : 2;
//$attr_id = @$_GET['attr'] ;
$category_type = @$_GET['category_type'] ;
if($mobile==3){
	$ismob = 1;
}
$type = intval($_GET['type']) ? intval($_GET['type']) : 3;
$TemplateData = $CndnsApi->getTemplateByClassId('',$mobile,'1',$category_type);
$pageNum = $mobile==3 ? 12 : $CndnsApi->pageNum;
if($TemplateData['status']=='success'){
	$attr_id = $TemplateData['attr_id'];
	$AllData = array();
	foreach ($TemplateData['message'] as $k) {
		//过滤掉tpl_category_id=61的数据
		if ($category_type=='网店'||$k['tpl_category_id'] != '61') {
			$AllData[] = $k;
		}
	}
	$count = count($AllData);
	if($count>$pageNum){
		$tData = array_slice($AllData,0,$pageNum);
	}else{
		$tData = $AllData;
	}
	$pages = ceil($count/$pageNum);
}else{
	echo $TemplateData['message'];
}
?>
<body>
<style>
	.newcase-meau-t{width:100%}
	.sea{position: absolute; right: 15px;top: 33px; }
	.sea input{padding: 5px; height: 38px; width: 260px;border: 1px solid #f1f1f1;}
	.sea .schbtn{position: absolute; right: 0; top: 0; background: #dbdbdb; height: 37px; line-height: 37px; padding: 0 11px; color: #666;text-decoration:none;}
</style>
<div class="container-fluid" style="background: #f2f2f2;">
	<div class="container" style="width:1226px">
		<div class="news-banner">
			<?php if($ad['header_info']){
				foreach(json_decode($ad['header_info']) as $value){?>
					<a href="<?php echo $value->url?>"><img src="/upload/showuploadfile?id=<?php echo $value->guid?>"></a>
				<?php }}?>
		</div>
		<div class="newcase-meau">

			<div class="newcase-meau-all">
				<div class="newcase-meau-o">
					<ul id="isfree" class="list-unstyled">
						<li lang="2" class="on">精美风格</li>
						<div class="clear"></div>
					</ul>
					<div class="clear"></div>
				</div>
				<div class="newcase-meau-t">
					<dl id="mod-type">
						<dt>模板类型：</dt>
						<dd>
							<a lang="all" href="#" class="on">PC+手机版</a>
							<!--                            <a lang="wechat" href="../index.php?mobile=3&amp;type=4">小程序<span class="sups"></span></a>-->
							<div class="clear"></div>
						</dd>
					</dl>
					<dl>
						<dt>功能选择：</dt>
						<dd id="tpl_levels">
							<!--<a lang="" href="javascript:void()" class="on">全部</a> -->
							<div>
							<a href="./index.php?mobile=2&category_type=" class="<?php echo $mobile!='3'&&$category_type!='网店'?'on':''?>">品牌官网</a>
							<a href="./index.php?mobile=2&category_type=网店" class="<?php echo $category_type=='网店'?'on':''?>">品牌网店</a>
							<a href="./index.php?mobile=3&category_type=" class="<?php echo $mobile=='3'?'on':''?>">小程序</a>
							<div class="clear"></div>
						</dd>
					</dl>
					<dl id="ind-cla">
						<dt>行业分类：</dt>
						<dd id="creation"> <a lang="" href="javascript:void()" class="AllCla">全部</a>
							<?php if($category_type!='网店'){?>
								<a href="javascript:void();" id="more-choose" class="on">更多选择+</a>
							<?php }?>
							<div class="clear"></div>
						</dd>
					</dl>
					<div class="case_fl" style="display: none;">
						<div class="case_fl_m">
							<ul id="categories_all">
								<li class="on"><a attr_id='' href="javascript:void(0);">所有分类</a></li>
								<?php
								$type=($mobile==3?'4':'');
								$getCataList =  $CndnsApi->getCataList($type);
								foreach($getCataList['message'] as $c){
									if($c['tpl_category_id']=='61'){continue;}
									?>
									<li id="<?php echo $c['tpl_category_id']?>" <?php echo $c['tpl_category_name']==$category_type?"class='on'":''?>><a href="./index.php?mobile=<?php echo $mobile?>&category_type=<?php echo $c['tpl_category_name']?>" attr_id="<?php echo $c['tpl_category_id']?>"><?php echo $c['tpl_category_name']?></a></li>
									<?php
								}?>


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
					<!--<dl class="case_meau_m_s">
                        <dt>检索：</dt>
                        <dt class="pull-left" style="line-height:0;"><img id="searchbtn" src="/img/case_3.gif"></dt>
                        <dd class="pull-left">
                            <input type="text" id="temID" placeholder="按模板ID检索" class="yh">
                        </dd>
                        <div class="clear"></div>
                    </dl>-->
					<div class="clear"></div>
					<div class="sea">
						<input type="text" id="temID" placeholder="搜索模板地址或输入模板编号">
						<a class="schbtn searchbtn" id="searchbtn" href="javascript:void()">搜索</a>
						<div class="clear">
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="container case_main newcase_main " style="width:1226px">
		<?php if(@$_GET['mobile']!='3'){?>
			<div class="case_main_all" lang="all" style="display:block;">
				<div id="tem_main_m" class="tem_main_m">
					<?php foreach($tData as $d){echo $CndnsApi->gethtml($d);}?>
				</div>
				<div class="case_main_meau Pagination" style="">
					<div class="clearfix"></div>
					<?php echo $CndnsApi->getPageHtml($pages,'1');?>
				</div>
			</div>
		<?php }else{?>
		<ul id="pc-app" class="inner_content_right-main-ul tem_main_m">
			<?php foreach($tData as $d){?>
				<li lang="app" prc="480" class="json" id="<?php echo $d['tpl_id']?>"> <div class="palte-box"><div class="palte-img"> <img src="<?php echo $d['tpl_pic_big']?>"></div><div class="palte-detail clear">  <img class="tip" src="http://16show.net/images/jzxcx-34.jpg"><img class="tip2" src="http://16show.net/images/jzxcx-36.jpg"> <div class="palte-detail-content fr"><div class="palte-detail-content-top"> <p></p><p>编号： <?php echo $d['tpl_id']?></p> <p> <span class="a1"></span></p><h2></h2> </div><div class="palte-detail-content-bottom clear"><div class="fr"><img src="https://screen.sitestar.cn/screenshots/<?php echo $d['tpl_name']?>-wxc.png"><p>扫码预览小程序</p><a class="pcyl" href="https://<?php echo $d['tpl_name']?>.view.sitestar.cn/wx.shtml" target="_blank" onclick="summithref('http://<?php echo $d['tpl_name']?>.view.sitestar.cn/wx.shtml','<?php echo $d['tpl_id']?>','4','m')">PC预览</a></div></div> </div></div></div> </li>
			<?php }?>
			<div class="case_main_meau Pagination" style="">
				<div class="clearfix"></div>
				<?php echo $CndnsApi->getPageHtml($pages,'1');?>
			</div>
		</ul>
		<?php }?>

	</div>
</div>


<div id="save_data" hiddenid="<?php echo $attr_id?>" hiddencolor=""></div>

<script>
	var api_domain='http://16show.net'
	$("body").on({
		mouseenter:function(){
			$(this).find('.palte-detail').fadeIn( 250 );
			$(this).find('.palte-detail').css( 'z-index','2' );
			$(this).find('.palte-img').css( 'z-index','3' );
		},
		mouseleave:function(){
			$(this).find('.palte-detail').fadeOut( 250 );
			$(this).find('.palte-detail').css( 'z-index','1' );
			$(this).find('.palte-img').css( 'z-index','1' );
		}
	},'.json')
	$( '.wap_wx' ).hover( function () {
		$( this ).find( '.pc_bg,.pc_log,.wap_bg,.wap_log' ).fadeIn( 250 )
	}, function () {
		$( this ).find( '.pc_bg,.pc_log,.wap_bg,.wap_log' ).fadeOut( 250 )
	} );
	$( '.pc_m' ).hover( function () {
		$( this ).find( '.pc_bg,.pc_log' ).fadeIn( 250 )
	}, function () {
		$( this ).find( '.pc_bg,.pc_log' ).fadeOut( 250 )
	} );

	$( '.wap_m' ).hover( function () {
		$( this ).find( '.wap_bg,.wap_log' ).fadeIn( 250 )
	}, function () {
		$( this ).find( '.wap_bg,.wap_log' ).fadeOut( 250 )
	} );

	$( '.newcase-meau-o ul li' ).click( function () {
		$( this ).addClass( 'on' ).siblings().removeClass( 'on' )
	} );
	$( '.newcase-meau-t dl dd a' ).click( function () {
		$( this ).addClass( 'on' ).siblings().removeClass( 'on' )
	} );

	$( '.newcase-meau-t dl#ind-cla dd a' ).hover( function () {
		$( this ).addClass( 'on' ).siblings().removeClass( 'on' )
	} );
	$( '#more-choose,.case_fl' ).hover( function () {
		$( '.case_fl' ).show();
	}, function () {
		$( '.case_fl' ).hide();
	} );

	$save_data = $( '#save_data' );
	//页数切换
	$( document ).on( "click", ".pageclick", function () {

		var $this = $( this );
		var page = $this.attr( "page" );
		var color_id = $save_data.attr( "hiddencolor" );
		var attr_id = $save_data.attr( "hiddenid" );

		$.ajax( {
			url: api_domain+"/site/get-ajax-temp",
			dataType: "json",
			async: true,
			data: {
				"attr_id": attr_id,
				"color_id": color_id,
				"page": page,
				"isMobile": 2,
				"sort": 1,
				"mobile": 2,
				'template_type':"<?php echo $mobile?>",
				'category_type':"<?php echo $category_type;?>"
			},
			type: "POST",
			beforeSend: function () {},
			success: function ( req ) {
				if ( req.type == "ok" ) {
//					location.href = "#pagemaodian";
					$( '.tem_main_m' ).html( req.html );
					$( '.Pagination' ).html( req.page_html );
				} else {
					alert( req.message );
				}
			},
			complete: function () {}, //完成
			error: function ( e ) {
				alert( '请重试' );
			}
		} );
	} );

	//模板ID搜索
	$( '.searchbtn' ).click( function () {
		temID = $($(this).prev());
		var attr_id = $( '#save_data' ).attr( "hiddenid" );
		var temID = temID.val();
		if ( temID == '' ) {
			temID.attr( "placeholder", "按模板ID检索" );
			temID.focus();
			return false;
		}
		if ( isNaN( temID ) ) {
			temID.attr( "placeholder", "模板ID只能为数字" );
			temID.val( "" );
			temID.focus();
			return false;
		}
		$.ajax( {
			url: api_domain+"/site/get-ajax-temp",
			dataType: "json",
			async: true,
			data: {
				"attr_id": attr_id,
				"temID": temID,
				"isMobile": 2,
				"sort": 1,
				'template_type':"<?php echo $mobile?>",
				'category_type':"<?php echo $category_type;?>",
//				"type":"<?php //echo isset($_REQUEST['type'])?$_REQUEST['type']:''?>//"
			},
			type: "POST",
			beforeSend: function () {},
			success: function ( req ) {
				if ( req.type == "ok" ) {
					$( '.tem_main_m' ).html( req.html );
					$( '.Pagination' ).html( req.page_html );
				} else {
					alert( req.message );
				}
			},
			complete: function () {}, //完成
			error: function ( e ) {
				alert( '请重试' );
			}
		} );
	} );

	//颜色搜索
	$( '#code_er i' ).click( function () {
		var $this = $( this );
		var color_id = $this.attr( "id" );
		var attr_id = $( '#save_data' ).attr( "hiddenid" );
//		var attr_id = $save_data.attr( "hiddenid" );
		$save_data.attr( "hiddencolor", color_id );

		$.ajax( {
			url: api_domain+"/site/get-ajax-temp",
			async: true,
			data: {
				"attr_id": attr_id,
				"color_id": color_id,
				"isMobile": 2,
				"sort": 1,
				'template_type':"<?php echo $mobile?>",
			},
			dataType: "json",
			type: "POST",
			beforeSend: function () {},
			success: function ( req ) {
				var req = req;
				if ( req.type == "ok" ) {
					$( '.tem_main_m' ).html( req.html );
					$( '.Pagination' ).html( req.page_html );
				} else {
					alert( req.message );
				}
			},
			complete: function () {}, //完成
			error: function ( e ) {
				alert( '请重试' );
			}
		} );
	} );

	//分类搜索
	/*$( '.AllCla,.case_fl li a' ).click( function () {
		var attr_id = $( this ).attr( "attr_id" );
		$save_data.attr( "hiddenid", attr_id );
		$save_data.attr( "hiddencolor", '' );
		$.ajax( {
			url: api_domain+"/site/get-ajax-temp",
			dataType: "json",
			async: true,
			data: {
				"attr_id": attr_id,
				"isMobile": 2,
				"sort": 1,
				"type":"<?php echo isset($_REQUEST['type'])?$_REQUEST['type']:''?>"
			},
			type: "POST",
			beforeSend: function () {},
			success: function ( req ) {
				if ( req.type == "ok" ) {
					$( '.case_fl' ).slideToggle( 300 );
					$( '#tem_main_m' ).html( req.html );
					$( '.Pagination' ).html( req.page_html );
					$("#categories_all").find('li').removeClass('on')
					$("#categories_all").find('[id='+attr_id+']').addClass('on')
				} else {
					alert( req.message );
				}
			},
			complete: function () {}, //完成
			error: function ( e ) {
				alert( '请重试' );
			}
		} );
	} );*/
	$( '.tem_main_m dl dt' ).hover( function () {
		$( this ).find( '.dt_s' ).stop().animate( {
			top: '140px'
		} );
		$( this ).find( '.bg' ).fadeIn( 500 )
		$( this ).find( '.dt_t' ).fadeIn( 800 )
	}, function () {
		$( this ).find( '.dt_s' ).stop().animate( {
			top: '165px'
		} );
		$( this ).find( '.bg' ).fadeOut( 10 )
		$( this ).find( '.dt_t' ).fadeOut( 10 )
	} );
	function targetSkip(url,className,guid){
		$.ajax({
			url:'/site/read-log',
			data:{className:className,guid:guid},
			type:'post',
			dataType:'json',
			success:function(res){
				if(res.code==1){
				}
			}
		})
	}
	function targetSkipByTplId(className,id){
		$.ajax({
			url:'/site/read-log-by-tpl-id',
			data:{className:className,tpl_id:id},
			type:'post',
			dataType:'json',
			success:function(res){
				if(res.code==1){
				}
			}
		})
	}


</script>
</body>
</html>
