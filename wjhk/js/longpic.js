

 function LongPicShow(options) {
 
	this.config = {
		targetImg     :  '.targetImg',   // ��ǰͼƬ��Ԫ��
		speed         :  120             // Ĭ��Ϊ150 ֵԽС ִ�е�Խ�� time = ͼƬheight/speed
	};

	this.cache = {
		
	};
	this.init(options);
 }

 LongPicShow.prototype = {
	
	init: function(options) {
		var self = this,
			_config = self.config,
			_cache = self.cache;
		
		// ����div
		self._insertDiv();
		
		// ����css��ʽ
		self._setCss();

		// �������ȥ���¼�
		self._hover();
	},
	// ҳ���ʼ�� ����div
	_insertDiv: function(){
		var self = this,
			_config = self.config;

		$(_config.targetImg).each(function(index,item){
			var tagParent = $(item).parent();
			$(tagParent).append('<div class="topDiv"></div><div class="bottomDiv"></div>');
		});
	},
	// �趨css��ʽ
	_setCss: function(){
		var self = this,
			_config = self.config,
			_cache = self.cache;
		$(_config.targetImg).each(function(index,item){
			var tagParent = $(item).parent(),
				parentWidth = $(tagParent).width(),
				parentHeight = $(tagParent).height();
			$(tagParent).css({
				'position':'relative'
			});
			$('.topDiv',tagParent).css({
				'height':parentHeight/2 + 'px',
				'width':parentWidth + 'px',
				'cursor':'pointer',
				'background':'#fff',
				'position':'absolute',
				'filter':'alpha(opacity=0)',
				'top': 0,
				'opacity':0
			});
			$('.bottomDiv',tagParent).css({
				'height':parentHeight/2 + 'px',
				'width':parentWidth + 'px',
				'cursor':'pointer',
				'background':'#fff',
				'position':'absolute',
				'filter':'alpha(opacity=0)',
				'opacity':0,
				'top':parentHeight/2 + 'px'
			});

		});
	},
	/*
	 * ������ϴ������¼�
	 */
	_hover: function(){
		var self = this,
			_config = self.config,
			_cache = self.cache;
		
		
		$(_config.targetImg).each(function(index,item){
			
			var tagParent = $(item).parent();
			// �����ƶ� ����Ƶ��ڶ���div��
			$($(tagParent).find('div')[1]).hover(function(){

				var $imgHeight = $(item).height(),
					topStr= $(item).css("top").split("px")[0],
					$top,
					$time;
				if(topStr.split("-")[1]) {
					$top = parseFloat(topStr.split("-")[1]);
					$time = ($imgHeight-$top)/_config.speed;
				}else {
					$time = $imgHeight/_config.speed;
				}
				$(item).css('position','absolute');
				$(item).animate({top:-$imgHeight + $(tagParent).height()},$time * 1000,"linear");
			},function(){
				$(item).stop();
			});

			// �����ƶ� ����Ƶ���һ��div��
			$($(tagParent).find('div')[0]).hover(function(){

				var $imgHeight = $(item).height(),
					topStr= $(item).css("top").split("px")[0],
					$top,
					$time;

				$top = parseFloat(topStr.split("-")[1]);
				$time = $top/_config.speed;
				$(item).css('position','absolute');
				$(item).animate({top:0},$time * 1000,"linear");
			},function(){
				$(item).stop();
			});
		});
	}
 };
 /* ������������֮�� www.lanrenzhijia.com */