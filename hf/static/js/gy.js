

function copy(xw, dz) {
    _czc.push(['_trackEvent', xw, dz, stxlwx, 1,'']);
}

//截取微信php的url
function wximg_url() {
    var wholejs = document.getElementsByTagName("script");
    var phpurl = '';
    for (var i = 0; i < wholejs.length; i++) {
        if (wholejs[i].src.indexOf("wechat.php") > 0) {
            phpurl = wholejs[i].src.slice(0, wholejs[i].src.indexOf("wechat.php"));
            return phpurl;
        }
    }
}
var stxlimg = stxlwx.replace(/\s/g, "");
var tupiansrc = wximg_url() + "wximg/" + stxlimg + '.jpg';
//    统计复制事件
var timeOutEvent = 0;
var touchArea = document.getElementsByClassName("ErWeiMa");
for (var i = 0; i < touchArea.length; i++) {
    touchArea[i].setAttribute("src", tupiansrc);
    touchArea[i].addEventListener("touchstart", function (e) {
        timeOutEvent = setTimeout("longPress()", 400);
    });
    touchArea[i].addEventListener("touchmove", function (e) {
        clearTimeout(timeOutEvent);
        timeOutEvent = 0;
    });
    touchArea[i].addEventListener("touchend", function (e) {
        clearTimeout(timeOutEvent);
        if (timeOutEvent != 0) {
            alert("你这是点击，请长按识别图中二维码！");
        }
        return false;
    });
}
function longPress() {
    timeOutEvent = 0;
    _czc.push(["_trackEvent", "长按", "识别二维码", stxlwx, 1]);
}

function gowechat(){
    sh();
}
function sh() {
    $('#myModal').css('display', 'block');
}
$(function () {
    $('#mydel').click(function () {
        $('#myModal').css('display', 'none');
    });
});
// 弹窗
$(function() {
		pushHistory();
		window.addEventListener("popstate",
		function(e) {
			sh();
		},
		false);
		function pushHistory() {
			var state = {
				title: "title",
				url: "#"
			};
			window.history.pushState(state, "title", "");
		}
	});