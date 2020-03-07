!function(t) {
	$.getScript("https://pv.sohu.com/cityjson?ie=utf-8", function () {
		t.annon.city = returnCitySN;
	});
	$.fn.extend({
		longPress: function(fn) {
			var timeout,t = this;
			function settime() { timeout = setTimeout(fn, 500); }
			function cleartime() { clearTimeout(timeout); }
			for (var i = 0; i < t.length; i++) {
				t[i].addEventListener('touchstart', settime, false);
				t[i].addEventListener('touchend', cleartime, false);
			}
			return this;
		},
		copy: function(fn) {
			this.on('copy',function(){
				var cp = JSON.parse(t.localStorage.getItem('_annon_copy')); // {'copyed': true,timeout:12312312312}
				if(cp == null || cp.outtime < Math.round(new Date() / 1000)) { // 没有点击或者超时
					fn();
					t.localStorage.setItem('_annon_copy',JSON.stringify({'copyed':true,'outtime':Math.round(new Date() / 1000) + 30 * 60}));
				}
			});
			return this;
		}
	});
	$.fn.longpress = $.fn.longPress;
}(window)
!function(t,e){
	"object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? exports.annon = e() : t.annon = e()
}(this,function(){
	var t = this;
	var turl = window.location.href;
	var annon = t.annon || {};
	var deviceType = /Android/i.test(navigator.userAgent) ? 0 : (/iPhone|iPad|iPod|iOS/i.test(navigator.userAgent) ? 1 : 2);
	function _sum(arr) {
		var i = 0,nums = 0;
		do{
			nums += arr[i].weight;
			i++;
		}while(i<arr.length)
		return nums;
	}
	function _rand(arr) {
		var i = 0,ran = 0;
		var r = Math.random() * _sum(arr); //生成随机数
		do{
			ran += arr[i].weight;
			if(r<ran) break;
			i++;
		}while(i<arr.length)
		return [i,r];
	}
	
	function save(arr) {
		var kf,kstr = JSON.parse(t.localStorage.getItem(turl+'_annon_kefu')); // 获取客服缓存
		if(kstr == null || kstr.outtime < Math.round(new Date() / 1000)){ // 如果客服缓存不存在或存在但是超时
			if(typeof arr == "undefined" || arr.pages.length <1) { // 如果后台数据为空，设置默认填充字段
			arr = [
				{'name':'{客服姓名}','phone':'{客服手机}','weixin':'{客服微信}','sex':'{客服性别}','qrcode':'{二维码地址}','weight':80}
			];} else {
				arr = arr.pages;
			}
			var index = _rand(arr)[0]; // 获取随机的index值
			kf = arr[index]; // 选中的客服
			t.localStorage.setItem(turl+'_annon_kefu',JSON.stringify({'kefu':kf,'outtime':Math.round(new Date() / 1000) + 30 * 60})); // 将选中的客服设置缓存，超时时间为30min
		}else { // 如果客服缓存存在
			kf = kstr.kefu;
		}
		return kf;
	}
	
	function clip(text, event, yes, err) {
		var cb = new ClipboardJS('.null', { text: function(){ return text }});
		cb.on('success', function() {
			cb.off('error');
			cb.off('success');
			if (typeof yes === "function"){
				yes();
			} else {
				alert('复制成功，马上去微信添加吧');
			}
		});
		cb.on('error', function() {
			cb.off('error');
			cb.off('success');
			if (typeof err === "function"){
				err();
			} else {
				alert('复制失败，请长按复制微信号');
			}
		});
		cb.onClick(event);
		cb.destroy();
	}
	
	function m(options) {
		var html = '';
		html += '<style>';
		html += '#tk{ position: fixed; z-index: 99; transition: all 0.5s; border-radius: 18px; margin: auto; left: 0; right: 0; bottom: -250px; overflow: hidden;  background:#F9F9F9;  width: 90%;}';
		html += '#tk div{ width: 100%; height: 60px ; border-bottom: 1px solid #D1D1D3; text-align: center; font-size: 20px; font-family:微软雅黑; line-height: 60px; color:#0876FB; }';
		html += '#tk div:hover{ background:#eee;}';
		html += '#tk a:last-child div{ border-bottom: none !important; }';
		html += '#closetk{ position: fixed; transition: all 0.5s; z-index: 99; width: 90%; height: 60px ; text-align: center;  margin: auto; left: 0; right: 0; bottom: -300px;font-size: 20px; font-family:微软雅黑; font-weight: bold; line-height: 60px; background: #fff; color:#0876FB;border-radius: 15px; cursor: pointer;}';
		html += '#tck{ position: fixed;top:0px;left:0px; z-index: 90; width: 100%; height: 100%; background: rgba(0,0,0,0.4);transition: all 0.8s;}';
		html += '</style>';
		html += '<div id="tck"></div><div id="tk"><div id="fzwx" style="font-size:15px;color:#4d9dfe">请加微信</div><div class="fzbtn" style="cursor: pointer;">点击复制(<span id="fzzz" style="font-size:17px;cursor: pointer;"></span>)</div><a id="go" href="weixin://"><div style="cursor: pointer;">打开微信<span style="font-size: 14px;">（如无反应，请手动打开）</span></div></a><a id="tel" href="tel:"><div style="cursor: pointer;">拨打电话</div></a></div><div id="closetk">取消</div>';
		$('body').append(html);
		$('#tck').hide();
		$('#closetk,#tck').bind('click', function() {
			$('#tck').css('display', 'none');
			$('#tk').css('bottom', '-290px');
			$('#closetk').css('bottom', '-300px')
		});
		$(options.el).click(function() {
			$('#fzzz').text('');
			$('#fzwx').text('');
			$('#fzzz').text(options.vl);
			if (options.ty == 'phone') {
				$('#fzwx').text(options.vl + '是电话号码和微信号，你可以');
				$('#tel').attr('href', 'tel:' + options.vl).show();
			} else {
				$('#fzwx').text(options.vl + '是微信号，你可以');
				$('#tel').hide()
			}
			$('#tck').show();
			$('#tk').css('bottom', '80px');
			$('#closetk').css('bottom', '10px');
		})
		$('.fzbtn').click(function(e){
			clip(options.vl,e);
			if (typeof options.copy === "function"){
				options.copy();
			}
		})
		$('#tk #go').click(function(){
			if (typeof options.go === "function"){
				options.go();
			}
		})
		$('#tel').click(function(){
			if (typeof options.call === "function"){
				options.call();
			}
		})
	}
	
	function post(datas,callback,type) {
		var url = 'https://leader.anxcn.com/api/index/create';
		$.post(url,datas,function(data,status){
			if(status === 'success') t.localStorage.setItem('_track_'+type,JSON.stringify({'time':(new Date()).getTime(),'kfwx':datas.kfwx}));
			if (typeof callback === "function"){
				var c = 200,s = 'success';
				callback(data,s,c);
			}
		});
	}
	
	function device() {
		var dvinfo = navigator.userAgent;
		if (dvinfo.indexOf("iPhone") != -1 || dvinfo.indexOf("iPad") != -1) {
			return 'ios';
		} else if (dvinfo.indexOf("Android") != -1) {
			return 'android';
		} else {
			return 'pc';
		}
	}
	
	function getUrlParam (name,url) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
		var u = typeof url != 'undefined' && url == 'ref' ? decodeURI(document.referrer) : window.location.search.substr(1);
		var r = u.match(reg);
		if (r != null) return unescape(r[2]);
		return null;
	}
	
	function time() {
        var now = new Date();
        var year = now.getFullYear();       //年
        var month = now.getMonth() + 1;     //月
        var day = now.getDate();            //日
        var hh = now.getHours();            //时
        var mm = now.getMinutes();          //分
        var ss = now.getSeconds();          //秒
        var clock = year + "-";
        if(month < 10) clock += "0";
        clock += month + "-";
        if(day < 10) clock += "0";
        clock += day + " ";
        if(hh < 10) clock += "0";
        clock += hh + ":";
        if (mm < 10) clock += '0';
        clock += mm + ":";
        if (ss < 10) clock += '0';
        clock += ss;
        return clock;
	}
	
	function getweb(ref) {
		if(ref.length < 1) return "直接访问";
		if(/m.baidu.com/i.test(ref)) return "百度移动搜索";
		if(/baidu.com/i.test(ref)) return "百度搜索";
		if(/nativeapp.toutiao.com/i.test(ref)) return "头条APP";
		if(/m.sogou.com/i.test(ref)) return "搜狗移动端";
		if(/sogou.com/i.test(ref)) return "搜狗电脑端";
		if(/m.so.com/i.test(ref)) return "360移动搜索";
		if(/so.com/i.test(ref)) return "360搜索";
		if(/sm.cn/i.test(ref)) return "神马搜索";
		return "其它途径";
	}
	
	function ocpc(token,type,callback) {
		var data = {
			"url": turl,
			"device": deviceType,
			"type": type,
			"ip": returnCitySN.cip || t.annon.city.cip,
			"kfwx": t.annon.kefu.weixin,
			"kfname": t.annon.kefu.name,
			"loc": returnCitySN.cname || t.annon.city.cname,
		}
		$.post('https://form.anxcn.com/ocpc/'+token, data, function(e,status){
			if (typeof callback === "function"){
				var c = 200,s = 'success';
				callback(e,s,c);
			}
		})
	}
	
	function _default(ts) {
		var agent = navigator.userAgent;
		var table = getweb(document.referrer);
		var searchword = "";
		if(table == "搜狗移动端") searchword = getUrlParam('keyword','ref');
		if(table == "搜狗电脑端") searchword = getUrlParam('keyword','ref');
		if(table == "神马搜索") searchword = getUrlParam('q','ref');
		if(table == "360移动搜索") searchword = getUrlParam('q','ref');
		if(table == "360搜索") searchword = getUrlParam('q','ref');
		if(table == "百度移动搜索") searchword = getUrlParam('word','ref');
		if(table == "百度搜索") searchword = getUrlParam('word','ref');
		if(table == "头条APP" || table == "其他途径") searchword = getUrlParam('wd','ref') || getUrlParam('word','ref') || getUrlParam('keyword','ref') || getUrlParam('q','ref');
		//console.warn(searchword);
		return {
			"webtype": table, // 来源平台
			"devices": device(), // 使用设备
			"searchword": searchword, // 搜索词，转化词
			"semword": getUrlParam('keyword'), // 推广词
			"pageid": t.kefu.id, // 落地页唯一标识
			"ip": returnCitySN.cip || t.annon.city.cip, // 用户访问IP
			"loc": returnCitySN.cname || t.annon.city.cname, // 用户所在地区
			"kfwx": t.annon.kefu.weixin, // 客服微信
			"kfname": t.annon.kefu.name, // 客服名称
			"url": window.location.href, // 当前落地页地址
			"referrer": document.referrer, // 落地页来源地址
			"time": time(), // 访问时间
			"agent": /\([^\)]+\)/.exec(agent)[0].slice(1,-1), // 使用设备
			"event": ts, // 转化事件 ps:click,copy,mousemove...
			"token": t.kefu.token,
			"host": document.location.host
		};
	}
	
	annon.kefu = save(t.kefu);
	annon.menu = function(options) {
		var defaults = {'el':'','vl':annon.kefu.phone,'ty':'weixin','copy':function(){},'go':function(){},'call':function(){}};
		options = $.extend({}, defaults, options);
		return m(options);
	};
	annon.track = function(datas,callback,d) {
		var data = JSON.parse(t.localStorage.getItem('_track_'+d)); // 检查同样的事件是否是多次触发
		var defaults = _default(d);
		datas = $.extend({}, defaults, datas);
		if(data != null && data.kfwx == datas.kfwx) {
			if (typeof callback === "function"){
				var c = 400,s = 'resubmit',m;
				callback(m,s,c);
			}
		} else {
			post(datas,callback,d);
		}
	};
	annon.track2 = function(datas,type,callback) { // 缓存信息，只提交一次
		annon.track(datas,callback,type);
	};
	annon.track3 = function(datas,type,callback) { // 不缓存信息，提交多次
		var defaults = _default(type);
		datas = $.extend({}, defaults, datas);
		post(datas,callback,type);
	};
	annon.push = function(datas) { // [上传信息, 操作事件, 成功回调]
		if(typeof datas === 'object' && datas.length > 0) {
			var a = {"event": datas[0]};
			annon.track(a,datas[2],datas[1]);
		}
	}
	annon.clip = function(str,e,yes,err) {
		return clip(str,e,yes,err);
	};
	annon.ocpc = function(token,type,callback) {
		return ocpc(token,type,callback)
	}
	
	return annon;
})