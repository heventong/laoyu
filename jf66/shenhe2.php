<!DOCTYPE html>
<!-- saved from url=(0021)http://tg11.qvxmb.cn/ -->
<html style="font-size: 100px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>开古茶叶</title>
	<link rel="stylesheet" type="text/css" href="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>//style.css">
		<script src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>//jquery.min.js.下载"></script>
	<script type="text/javascript">
		(function(doc, win) {
			var docEl = doc.documentElement,
				resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
				recalc = function() {
					var clientWidth = docEl.clientWidth > 750 ? 750 : docEl.clientWidth;
					if(!clientWidth) return;
					docEl.style.fontSize = clientWidth / 7.5 + 'px';
				};
			if(!doc.addEventListener) return;
			recalc();
			win.addEventListener(resizeEvt, recalc, false);
			doc.addEventListener('DOMContentLoaded', recalc, false);
		})(document, window);
	</script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.wrap{
			position: relative;
			margin: 0 auto;
			max-width: 640px;
		}
		.wrap img{
			display: block;
			width: 100%;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<img src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>//1.jpg" alt="1">
		<img src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>//2.jpg" alt="1">
		<img src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>//3.jpg" alt="1">
		<img src="http://img.heven.top/<?php echo $dirname.'/'.$dirview ?>//4.png" alt="1">
		<div class="form">
			<div class="title">订单信息</div>
			<form action="http://tg11.qvxmb.cn/" method="post">
				<!-- <div class="form-item">
					<label for="">产品：</label>
					<div style="flex: 1; font-size: .26rem; color: #f00;">
						<p><input type="radio" name="c3" checked="checked" class="auto">艾奇自动机械表499元
					</div>
				</div> 
				<div class="form-item" style=" margin-top: 0;">
					<label for="">颜色：</label>
					<div style="flex: 1; font-size: .26rem; color: #f00;">
						<p>
							<input type="radio" name="c4" checked="checked" class="auto">间金色
							<input type="radio" name="c4" checked="checked" class="auto">白色
							<input type="radio" name="c4" checked="checked" class="auto">金色
							<input type="radio" name="c4" checked="checked" class="auto">黑色
					</div>
				</div> -->
				<div class="form-item">
					<label for=""><i>*</i>姓名：</label>
					<input type="text" id="username" placeholder="请输入姓名">
				</div>
				<div class="form-item">
					<label for=""><i>*</i>手机：</label>
					<input type="text" id="tel" placeholder="请输入手机">
				</div>
				<div class="form-item">
					<label for=""><i>*</i>详细地址：</label>
					<input type="text" id="address" placeholder="请输入详细地址：">
				</div>
				<div class="form-item">
					<label for=""><i>*</i>金额：</label>
					<input type="text" id="address" value="69" disabled="" placeholder="" style="width: 50px; background: #fff; text-align: center;">元
				</div>
				<div class="form-item" style="align-items: flex-start;">
					<label><i>*</i>付款方式：</label>
					<div style="flex: 1; font-size: .26rem;">
						<p><input type="radio" name="c2" checked="checked" class="auto">货到付款</p>
					</div>
				</div>
				<div class="form-item area">
					<label for=""><i></i>留言：</label>
					<textarea placeholder="请输入留言"></textarea>
				</div>
				<input type="submit" value="立即提交订单" class="submit">
			</form>
			<p class="company">常州开古茶叶食品有限公司</p>
			<p class="copyright">苏ICP备18063484号-2</p>
		</div>
	</div>

		<script>
			$(function(){
				var username = $('#username');
				var tel = $('#tel');
				var address = $('#address');
				$('.submit').on('click', function(){
					if(username.val() == ''){
						alert('请填写姓名')
						return false;
					}else if(tel.val() == ''){
						alert('请填写手机号码')
						return false;
					}else if(address.val() == ''){
						alert('请填写地址')
						return false;
					}else{
						alert('订单已提交成功')
						window.location.reload();
						return false;
					}
				})
			})
		</script>

</body></html>