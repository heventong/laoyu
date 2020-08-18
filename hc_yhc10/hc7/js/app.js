var mySwiper = new Swiper('#case .swiper-container', {
    noSwiping: true,
    noSwipingClass: 'notmove',
});

var mySecSwiper = new Swiper('#thumb .swiper-container', {
    observer: true, //修改swiper自己或子元素时，自动初始化swiper
    observeParents: true, //修改swiper的父元素时，自动初始化swiper
    prevButton: '.swiper-button-prev',
    nextButton: '.swiper-button-next',
    initialSlide: 0,
});

$(function(){
	// 答案数据

        var json = [
            "18岁以下10斤以下试过祛斑，但体重反弹",
            "18岁以下10斤以下一直想祛斑，但没有行动",
            "18岁以下10斤以下成功了，还想再瘦",
            "18岁以下10-20斤试过祛斑，但体重反弹",
            "18岁以下10-20斤一直想祛斑，但没有行动",
            "18岁以下10-20斤成功了，还想再瘦",
            "18岁以下20斤以上试过祛斑，但体重反弹",
            "18岁以下20斤以上一直想祛斑，但没有行动",
            "18岁以下20斤以上成功了，还想再瘦",
            "18岁-25岁10斤以下试过祛斑，但体重反弹",
            "18岁-25岁10斤以下一直想祛斑，但没有行动",
            "18岁-25岁10斤以下成功了，还想再瘦",
            "18岁-25岁10-20斤试过祛斑，但体重反弹",
            "18岁-25岁10-20斤一直想祛斑，但没有行动",
            "18岁-25岁10-20斤成功了，还想再瘦",
            "18岁-25岁20斤以上试过祛斑，但体重反弹",
            "18岁-25岁20斤以上一直想祛斑，但没有行动",
            "18岁-25岁20斤以上成功了，还想再瘦",
            "25岁以上10斤以下试过祛斑，但体重反弹",
            "25岁以上10斤以下一直想祛斑，但没有行动",
            "25岁以上10斤以下成功了，还想再瘦",
            "25岁以上10-20斤试过祛斑，但体重反弹",
            "25岁以上10-20斤一直想祛斑，但没有行动",
            "25岁以上10-20斤成功了，还想再瘦",
            "25岁以上20斤以上试过祛斑，但体重反弹",
            "25岁以上20斤以上一直想祛斑，但没有行动",
            "25岁以上20斤以上成功了，还想再瘦"
        ];
        // 第一题
        
        $("#first li").on("click", function() {
            $(this).addClass("on").siblings().removeClass("on");
            mySwiper.slideNext();
        });

        // 第二题
        $("#second li").on("click", function() {
            $(this).addClass("on").siblings().removeClass("on");
            mySwiper.slideNext();
        });

        // 第三题
        $("#third li").on("click", function() {
            $(this).addClass("on").siblings().removeClass("on");
        });
        // 点击提交弹出对应编号
        $("#submit_btn").on("click", function() {
            $("#csbt").html("测试结果");
            $("#comment1").hide();
            $("#comment").fadeIn(400);
            $("#case").fadeOut(400);
        });


        // 点击上一题
        $(".prev").on("click", function() {
            mySwiper.slidePrev();
        });
 
})


! function(win) {
        function resize() {
            var domWidth = domEle.getBoundingClientRect().width;
            if (domWidth / v > 540) {
                domWidth = 540 * v;
            }
            win.rem = domWidth / 16;
            domEle.style.fontSize = win.rem + "px";
        }

        var v, initial_scale, timeCode, dom = win.document,
            domEle = dom.documentElement,
            viewport = dom.querySelector('meta[name="viewport"]'),
            flexible = dom.querySelector('meta[name="flexible"]');
        if (viewport) {
            var o = viewport.getAttribute("content").match(/initial-scale=(["']?)([d.]+)1?/);
            if (o) {
                initial_scale = parseFloat(o[2]);
                v = parseInt(1 / initial_scale);
            }
        } else if (flexible) {
            var o = flexible.getAttribute("content").match(/initial-dpr=(["']?)([d.]+)1?/);
            if (o) {
                v = parseFloat(o[2]);
                initial_scale = parseFloat((1 / v).toFixed(2))
            }
        }
        if (!v && !initial_scale) {
            var n = (win.navigator.appVersion.match(/android/gi), win.navigator.appVersion.match(/iphone/gi));
            v = win.devicePixelRatio;
            v = n ? v >= 3 ? 3 : v >= 2 ? 2 : 1 : 1, initial_scale = 1 / v
        }
        //没有viewport标签的情况下
        if (domEle.setAttribute("data-dpr", v), !viewport) {
            if (viewport = dom.createElement_x("meta"), viewport.setAttribute("name", "viewport"), viewport.setAttribute("content", "initial-scale=" + initial_scale + ", maximum-scale=" + initial_scale + ", minimum-scale=" + initial_scale + ", user-scalable=no"), domEle.firstElementChild) {
                domEle.firstElementChild.appendChild(viewport)
            } else {
                var m = dom.createElement_x("div");
                m.appendChild(viewport), dom.write(m.innerHTML)
            }
        }
        win.dpr = v;
        win.addEventListener("resize", function() {
            clearTimeout(timeCode), timeCode = setTimeout(resize, 300)
        }, false);
        win.addEventListener("pageshow", function(b) {
            b.persisted && (clearTimeout(timeCode), timeCode = setTimeout(resize, 300))
        }, false);
        resize();
    }(window);