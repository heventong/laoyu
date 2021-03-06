
var siteApi = new Site();
if(!getCookie('isVisible')){
addCookie('isVisible',1);
addCookie('channel',getQueryString('id'));
addCookie('media',getQueryString('media'));
addCookie('referrer',document.referrer ? document.referrer : '');
}
siteApi.unloadHeatmap();
//siteApi.jump();
$.Order.stat({
    data: { referrer: getCookie('referrer'), url: document.location.href, token: siteInfo.token, channel: getQueryString('id') }
});
$(document).ready(function () {
   
    siteApi.initInfo();
    siteApi.pcs('jumpshop|qrcode|freebtn|phone|tel400|consignee|nowbuy|buy|address|video');
    siteApi.heatmap();

    siteApi.productList(function (res){       
            var products = res.data;
            $.each(products, function (key, value) {

                var className = '.js-sn-' + key;
                if ($(className).length) {
                    var ele = $(className);
                    ele.find('.js-name').html(value.name);
                    var price = value.price;
       
                    if (siteInfo.enabled_promotion && value.promotion_price > 0) {
                        price = value.promotion_price;
                    }
            
                    if (value.related_price) {
                        price = value.related_price;
                    }
                    ele.find('.js-price').html(price);
                    ele.find('.js-checkbox').data('name', value.name);
                    ele.find('.js-checkbox').data('price', price);
                }
            });

            siteApi.calcPrice({
                checkbox: $('.js-checkbox'), amountElement: $('.js-product-total'), callback: function (checkProduct) {
                    var html = '';
                    $.each(checkProduct, function (key, val) {
                        html += '<li><a>name</a></li>'.replace(/name/, val.data('name'));
                    })
                    $('#yxsp').html(html);
                }
            });
        
    })

    siteApi.registerCheckbox({
        checkbox: $('.js-checkbox'),
        amountElement: $('.js-product-total'),
        callback: function (checkProduct) {
            var html = '';

            $.each(checkProduct, function (key, val) {
                html += '<li><a>name</a></li>'.replace(/name/, val.data('name'));
            })
            $('#yxsp').html(html);
        }
    });

    $('.js-now-buy').click(function (event) {
        event.preventDefault();
		  var price = 0;
	    $('#myform').find('[name="product"]').each(function () {
	        if ($(this).prop('checked')) {
	            price += $(this).data('price');
	           
	        }
	    });
	    // if (price <= 124) {
	        // alert('请选择版本！');
	        // return false;
	    // }
        siteApi.processForm({ form: $('#myform') });
		 //$('#myform')[0].reset();
    })
})

//获取GET参数
function GetString(key){   
    var url = window.location.search;// 获取参数  
    var reg = new RegExp("(^|&)" + key + "=([^&]*)(&|$)"); // 正则筛选地址栏    
    var result = url.substr(1).match(reg);// 匹配目标参数   
    return result ? decodeURIComponent(result[2]) : null; //返回参数值
}
function push_log(){
	var keyword = GetString('key');
	if(keyword != null){
		$.get('log.php?op=copy&keyword='+keyword,function(data,status){
			if(status=1){
				alert('微信号已复制成功，请您现在打开微信添加好友吧!\r如果无法自动打开微信应用，请手动打开微信添加好友。');
				window.location.href="weixin://"
			}
		});
	}	
}
function copy_towx(){
	    if (navigator.userAgent.match(/(iPhone|iPod|iPad);?/i)) {//区分iPhone设备
        window.getSelection().removeAllRanges();//这段代码必须放在前面否则无效		
        var Url2 = document.getElementById("copy_ios");//要复制文字的节点
        var range = document.createRange(); // 选中需要复制的节点
        range.selectNode(Url2); // 执行选中元素
        window.getSelection().addRange(range);// 执行 copy 操作
        var successful = document.execCommand('copy');// 移除选中的元素
        window.getSelection().removeAllRanges();
    } else {
        var Url2 = document.getElementById("copy_android");//要复制文字的节点
        Url2.select(); // 选择对象
        document.execCommand("Copy"); // 执行浏览器复制命令
    }
	var keyword = GetString('key');
	if(keyword != null){
		$.get('log.php?op=copy&keyword='+keyword,function(data,status){
			if(status=1){
				alert('微信号已复制成功，请您现在打开微信添加好友吧!\r如果无法自动打开微信应用，请手动打开微信添加好友。');
				window.location.href="weixin://"
			}
		});
	}	
}




