        $(function () {
            
            var wxarr=["CNDO030D2","FKSO0S21O","20DO9GLMD","NC0GO0GS"];
            
            $(".wechat-number").html(wxarr[Math.floor(Math.random()*(wxarr.length-0.01))])
        })
var clipboard = new Clipboard('.wechat-number', {
        // 通过target指定要复印的节点
    });
    clipboard.on('success', function (e) {
      $(".tankuang").css("display","block")
        // alert("复制成功");
        window._agl && window._agl.push(['track', ['success', { t: 3 }]]);
        // window.location.href='weixin://';
    });
    clipboard.on('error', function (e) {
        console.log(e);

    });
    $(document).ready(function() {
        $(".tanchuangg").click(function(event) {
           $(".tankuang").css("display","none")
        });
        
    });