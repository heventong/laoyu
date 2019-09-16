$(function () {
    var currentpage = "";
    var pageSize = 20;


    var pageIndex = 0;

    var ezsite_prd = $("#getfreeORcharge").val();


    //翻页调用  
    function PageCallback(index, jq) {
        InitTable(index);
    }




    ////获取行业大类


    $('.case_meau_m_o').click(function () {

        get_caterions();

        //  $('.case_fl').slideToggle(300);
    })
    $('.case_fl li a').click(function () {
        $('.case_meau_m_o dd').text($(this).text())

    })

    /////   初始化  


    var moudls = $("#model").val();
    if (moudls == "all") {//// pc+手机


        InitTable(0);


    } else if (moudls == "mbl") {// 手机



        InitTable(0);


        $("html,body").animate({ scrollTop: "680px" }, 1000);

    } else if (moudls == "pc") { ///pc

        InitTable(0);

    }


    /////切换标签

    $('.tem_meau_m li').click(function () {
        $("#teme_if").val($(this).attr("lang"));
        if ($(this).attr("lang") == "0") {
            $("#categories").val("");

        }
        InitTable(0);
        var linum = $(this).index();
        $(this).addClass('on').siblings().removeClass('on');
        $('.case_main_all').eq(linum).show().siblings('.case_main_all').hide();
    })
    $('.tem_meau_m li').first().css('marginLeft', '3px');




    //// 切换pc 手机 和套装

    $('#mod-type a').click(function () {
        var linum = $(this).index();
        $('.case_main_all').eq(linum).fadeIn().siblings('.case_main_all').hide();
        var lang = $(this).attr("lang");

        var teme_if = $("#teme_if").val();
        if (teme_if == "1" && lang == "all") {
            $("#teme_if").val("2");

            $("#isfree li").siblings().removeClass("on");
            $("#isfree li:eq(0)").addClass("on");

        }



        $("#model").val(lang);


        InitTable(0);

    })


    //// 精美 还是  普通模板

    $("#isfree li").click(function () {

        var teme_if = $(this).attr("lang");
        var model = $("#model").val();

        if (teme_if == "2") {

            $("#mod-type dd a:eq(0)").show();

        } else if (teme_if == "1") {

            if (model == "all") {////普通的 套餐  隐藏

                $("#mod-type dd a").siblings().removeClass("on");

                $("#mod-type dd a:eq(1)").attr("class", "on");
                $("#model").val("pc");
                $("#mod-type dd a:eq(0)").hide();

            } else {


                $("#mod-type dd a:eq(0)").show();
            }





        }

        $("#teme_if").val(teme_if);




        InitTable(0);

    });

    ///  版本versoin  
    $("#tpl_levels a").click(function () {

        $("#tpl_level").val($(this).attr("lang"));
        InitTable(0);

    });



    /////获取行业详情

    $("#categories_all").find("li a").live("click", function () {
        var id = $(this).attr("id");
        $("#categories").val(id);
        $('.case_fl').slideToggle(300);
        InitTable(0);

    });

    /////颜色类别
    $("#code_er i").click(function () {

        if ($(this).attr("id") == "all") {
            $("#carty_closr").val("");
        } else {
            $("#carty_closr").val($(this).attr("id"));
        }
        InitTable(0);

    });
    ////  ID  搜索

    $("#searchbtn").click(function () {
        var str = $("#temID").val();

        $("#types_id").val(str);
        if (str == "No." || str == "") {

            $("#types_id").val("");
        }

        InitTable(0);

    });


    $("#temID").keypress(function (e) {
        var key = e.which; //e.which是按键的值
        if (key == 13) {
            var str = $("#temID").val();

            $("#types_id").val(str);
            if (str == "No." || str == "") {

                $("#types_id").val("");
            }

            InitTable(0);


        }
    });


    $("#creation").click(function () {


        $("#categories").val($(this).attr("lang"));
        InitTable(0);

    });

    $('.case_meau_m_o').click(function () {
        $('.case_fl').slideToggle(300)
    })
    $('.case_fl li a').click(function () {
        $('.case_meau_m_o dd').text($(this).text())
    })
    $('.tem_main_m dl dt').hover(function () {
        $(this).find('.dt_s').stop().animate({ top: '140px' })
        $(this).find('.bg').fadeIn(500)
        $(this).find('.dt_t').fadeIn(800)
    }, function () {
        $(this).find('.dt_s').stop().animate({ top: '165px' })
        $(this).find('.bg').fadeOut(10)
        $(this).find('.dt_t').fadeOut(10)
    })



    $('.tem_meau_m li').click(function () {

        var linum = $(this).index();
        var model = 3;
        if (linum == "0") {

            model = 3
        } else {

            model = linum;
        }

        //        $("#model").val(model);
        //        InitTable(0);

    });

    $('.tem_meau_m li').hover(function () {
        var linum = $(this).index();
        var model = 3;
        if (linum == "0") {

            model = 3
        } else {

            model = linum;
        }

        $(this).addClass('on').siblings().removeClass('on');
        //   $('.case_main_all').eq(linum).show().siblings('.case_main_all').hide();
        $(this).find('.tem_meau_m_m').stop().slideToggle(300);
        $(this).siblings('li').find('.tem_meau_m_m').hide();


    })





    $('.tem_meau_m li').first().css('marginLeft', '3px');
    $('.tem_meau_m_m p').click(function () {
        $("#model").val($(this).attr("lang"));
        $(this).parent().siblings('b').text($(this).text());
    })









    //请求数据  
    function InitTable(pageIndex) {
        var typeTemple = $("#getfreeORcharge").val();
        var model = $("#model").val();
        var str = $("#carty_closr").val();
        var categories = $("#categories").val();
        var types_id = $("#types_id").val();
        var accesskey = $("#accesskey").val();
        var teme_if = $("#teme_if").val();
        var tpl_level = $("#tpl_level").val();

        $.ajax({
            type: "POST",
            dataType: "text",
            beforeSend: function (xhr) {


                if (model == "all") {
                    $("#tem_main_m").html("<img style=\"margin-left:500px;margin-top:50px;\" src=\"" + imgcndns + "/siteimages/loadingBig.gif\" />");

                } else if (model == "pc") {


                    $("#putong").html("<img style=\"margin-left:500px;margin-top:50px;\" src=\"" + imgcndns + "/siteimages/loadingBig.gif\" />");


                } else if (model == "mbl") {
                    $("#mobl").html("<img style=\"margin-left:10px;margin-top:50px;\" src=\"" + imgcndns + "/siteimages/loadingBig.gif\" />");

                }
                $(".case_main_all").show();

            },
            url: '/cn/webnew/GetTemple.ashx',     //提交到一般处理程序请求数据  
            data: "pageIndex=" + (pageIndex + 1) + "&pageSize=" + pageSize + "&ezsite_prd=" + typeTemple + "&carty_closr=" + str + "&model=" + model + "&categories=" + categories + "&type_code=1&accesskey=" + accesskey + "&types_id=" + types_id + "&teme_if=" + teme_if + "&tpl_level=" + tpl_level + "",          //提交两个参数：pageIndex(页面索引)，pageSize(显示条数)                  
            success: function (data) {



                if (types_id != "") { ////根据id  搜索


                    $("#datacache").html(data);


                    model = $("#datacache").find(".json").attr("lang");
                    var prc = $("#datacache").find(".json").attr("prc");
                    $("#datacache").html("");

                    if (model == "mobile") {
                        model = "mbl";
                    }
                    if (prc == "0") {
                        teme_if = "1";

                        $('#isfree li').siblings().removeClass("on");
                        $('#isfree li:eq(1)').addClass("on");

                    } else {
                        teme_if = "2";
                        $('#isfree li').siblings().removeClass("on");
                        $('#isfree li:eq(0)').addClass("on");
                    }
                    $("#mod-type dd a").siblings().removeClass("on");
                    $("#mod-type dd a[lang='" + model + "']").addClass("on");

                    $("#teme_if").val(teme_if);
                    $("#model").val(model);
                    $("#types_id").val("");

                }

                if (model == "pc" && teme_if == "1") {
                    $("#putong").addClass("pt");

                } else {
                    $("#putong").removeClass("pt");

                }

                if (model == "all") {

                    $("#tem_main_m").html(data);
                } else if (model == "pc") {

                    $("#putong").html(data);

                } else if (model == "mbl") {

                    $("#mobl").html(data);

                }
                if (model == "all") {
                    $("#tem_main_m").show();
                    $("#putong").hide();
                    $(".Pagination").hide();
                    $("#mobl").hide();
                    $("#tem_main_m").parent().find(".Pagination").show();

                } else if (model == "pc") {
                    $("#putong").show();
                    $("#tem_main_m").hide();
                    $(".Pagination").hide();
                    $("#mobl").hide();
                    $("#putong").parent().find(".Pagination").show();

                } else if (model == "mbl") {
                    $("#mobl").show();
                    $("#putong").hide();
                    $(".Pagination").hide();
                    $("#tem_main_m").hide();
                    $("#mobl").parent().find(".Pagination").show();
                }


                $(".wwz_main_s_m dl").hover(function () {

                    $(this).find('dd,.bg').stop().fadeIn(400);
                },
		  function () {
		      $(this).find('dd,.bg').stop().fadeOut(400);
		  }
		)

                /////显示预览的效果

                $('.pcwap_o').hover(function () {
                    $(this).find('.pc_bg,.pc_log,.wap_bg,.wap_log').fadeIn(250)
                }, function () {
                    $(this).find('.pc_bg,.pc_log,.wap_bg,.wap_log').fadeOut(250)
                })
                $('.tem_main_m dl dt').hover(function () {
                    $(this).find('.dt_s').stop().animate({
                        top: '140px'
                    })
                    $(this).find('.bg').fadeIn(500)
                    $(this).find('.dt_t').fadeIn(800)
                }, function () {
                    $(this).find('.dt_s').stop().animate({
                        top: '165px'
                    })
                    $(this).find('.bg').fadeOut(10)
                    $(this).find('.dt_t').fadeOut(10)
                })

                $('.pt.tem_main_m dl dt').hover(function () {
                    $(this).find('.dt_s').stop().animate({
                        top: '165px'
                    })
                    $(this).find('.bg').fadeIn(500)
                    $(this).find('.dt_t').fadeIn(0)
                }, function () {
                    $(this).find('.dt_s').stop().animate({
                        top: '165px'
                    })
                    $(this).find('.bg').fadeOut(10)
                    $(this).find('.dt_t').fadeIn(0)
                })


                $.ajax({
                    type: "POST",
                    dataType: "text",
                    url: '/cn/webnew/GetTemple.ashx',     //提交到一般处理程序请求数据  
                    data: "pageIndex=" + (pageIndex + 1) + "&pageSize=" + pageSize + "&ezsite_prd=" + typeTemple + "&carty_closr=" + str + "&model=" + model + "&categories=" + categories + "&type_code=2&accesskey=" + accesskey + "&types_id=" + types_id + "&teme_if=" + teme_if + "&tpl_level=" + tpl_level + "",          //提交两个参数：pageIndex(页面索引)，pageSize(显示条数)                  //提交两个参数：pageIndex(页面索引)，pageSize(显示条数)                  
                    success: function (result) {
                        if (result == "NO Data") {
                            $(".Pagination").hide();
                            return false;
                        }


                        //分页，PageCount是总条目数，这是必选参数，其它参数都是可选  
                        $(".Pagination").pagination(result, {
                            callback: PageCallback,
                            first_text: '',
                            //  prev_text: '<span class="back"></span>',       //上一页按钮里text  
                            next_text: '<span class="next">></span>',       //下一页按钮里text  
                            last_text: '',
                            ellipse_text: '...',
                            items_per_page: pageSize,  //显示条数  
                            num_display_entries: 6,    //连续分页主体部分分页条目数  
                            current_page: pageIndex,   //当前页索引  
                            num_edge_entries: 2        //两侧首尾分页条目数  
                        });



                    }
                });

                get_caterions();

            }
        });
    }















    function getshow() {

        if ($("#alltemplate").children("li").length > 0) {
            $("#alltemplate").children("li").each(function () {
                $(this).hover(function () {
                    $(this).find("span").css("display", "inline-block");
                    $(this).find(".tempinfo").css("marginTop", "-18px");
                    $(this).find(".temprc").css("marginTop", "-18px");
                }, function () {
                    $(this).find("span").hide();
                    $(this).find(".tempinfo").css("marginTop", "12px");
                    $(this).find(".temprc").css("marginTop", "12px");
                })

            })

        }

    }
});

function get_caterions() {

    var model = $("#model").val();
    var teme_if = $("#teme_if").val();
    var tpl_level = $("#tpl_level").val();
    var type_code = "";
    if (model == "all") {

        type_code = "temp_pc_mobile";
    } else if (model == "pc") {

        type_code = "temple_pc";

    } else if (model == "mbl") {

        type_code = "temp_mobile";
    }

    $.ajax({
        type: "POST",
        dataType: "text",
        url: '/cn/webnew/GetTemple.ashx',     //提交到一般处理程序请求数据  
        data: "type_code=" + type_code + "&model=" + model + "&teme_if=" + teme_if + "&tpl_level=" + tpl_level + "",          //提交两个参数：pageIndex(页面索引)，pageSize(显示条数)                  
        success: function (data) {

            $("#categories_all").html(data);


        }
    });
}


function DivFan(tpl_domain, tpl_id, user_level, tpl_level) {
    window.open("" + wwwsitestar + "/website/choose.aspx?tpl_domain=" + tpl_domain + "&tpl_id=" + tpl_id + "&user_level=" + user_level + "&tpl_level=" + tpl_level);
    return false;
}