$(function(){
	$('head').append(function(){
		return '<style>' +
				'#news{color:#000;background:#fff;padding:10px 5px;font-size:16px;}'+
				'a.main_box{padding:15px 0;border-bottom:1px solid #ddd;display:block;}'+
				'a.main_box:last-child{border:0}'+
				'.news_header{margin:15px 0;font-size:16px;}'+
				'.news_title{font-size:18px;font-weight:bold;}'+
				'.news_main{margin:10px 0}'+
				'.news_main b{font-weight:normal;margin-left:5px;}' +
				'.vNone{visibility:hidden;}'+
				'#news a{text-decoration:none;color:#000}'+
				'#news  .news_main b{font-size:12px;color:#888}'+
			'</style>'
	});
	var html='<div class="news_header"><b>推荐阅读</b></div>'+
		'<a href="http://mp.weixin.qq.com/s/fkekMfoVbi7LuGiNT4hRkg" class="main_box">'+
			'<div class="news_title">我凭什么要做一个“懂事”的女人？</div>'+
			'<div class="news_main">'+
				'<span title="从医院大楼出来的那一刻，我手里握着已经褶皱的妇科检查证明单，看着落款处的诊断说明，心里是说不上的崩溃与绝望。"></span>'+
				'<b>查看全文 ></b>'+
			'</div>'+
		'</a>'+
		'<a href="https://mp.weixin.qq.com/s/jqT-Rj-Awi3AgIFsjk7b-Q" class="main_box">'+
			'<div class="news_title">“找什么男人结婚都差不多，你就忍忍吧”</div>'+
			'<div class="news_main">'+
				'<span title="以前听人戏称小姨子是姐夫的半个妻，直到婚礼前几天，我在婚房撞见我亲妹妹和未婚夫偷情的画面，我才知道这句戏言发生在了我的身上。"></span>'+
				'<b>查看全文 ></b>'+
			'</div>'+
		'</a>'+
		'<a href="http://mp.weixin.qq.com/s/VcuUiGDlV2K5xlxwd6rpcg" class="main_box">'+
			'<div class="news_title">厉害的女人不哭穷</div>'+
			'<div class="news_main">'+
				'<span title="我高二那年，是我人生的一个转折点。我曾千百次地想过，如果不是那一年里发生的事情，我的命运会不会完全不一样。"></span>'+
				'<b>查看全文 ></b>'+
			'</div>'+
		'</a>';
	$('#news').html(html);

	var title=$('.news_main').length;
	var space="";
	for(var i=0;i<title;i++){
		var span=$('.news_main').eq(i).find('span');
		var _tit=span.attr('title');
		if(_tit.length<=20){
			for(var j=0;j<20-_tit.length;j++){
				space+="空"
			}
		}
		span.html(_tit.substr(0,33)+'...'+'<span class="vNone">'+space+'</span>');
		space=""
	}
});