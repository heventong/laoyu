
function Sub() {
    var age = $.trim($("#txtAge").val());
    var jswei = $.trim($("#txtwei").val());
    var jsname = $.trim($("#txtname").val());
    var jsphone = $.trim($("#txtphone").val());
    var pro = $("#province").val();
    var city = $("#city").val();
    var area = $("#area").val();
    var address = $("#txtadd").val();
    var rel_address = pro + city + area + address;
    var re_phone = /0?(13|14|15|17|18|19)[0-9]{9}/;
    if (age == "") {
        alert("请输入年龄");
    } else if (jsname.length > 4 || jsname == "") {
        alert("请输入正确的姓名，方便工作人员与您联系");
    } else if (!re_phone.test($("#txtphone").val())) {
        alert("请输入正确的手机号码，方便工作人员与您联系");
    } else if (rel_address == "") {
        alert("请输入收货地址");
    } else {
        var subdata = { "age": age, "jswei": jswei, "jsname": jsname, "jsphone": jsphone, "rel_address": rel_address };
        $.post("/index.ashx", subdata, function (data) {
            if (data == "ok") {
                
                $("#txtAge").val("");
                $("#txtMessage").val("");
                $("#txtphone").val("");
                $("#province").val("");
                $("#city").val("");
                $("#area").val("");
                $("#txtadd").val("");
                $("#txtname").val("");
                $("#txtwei").val("")
				_czc.push(['_trackEvent', '提交','', '电购', 1, '1274150022']);
				alert("提交成功，请保持手机畅通");
            }
            else {
                alert("提交失败");
            }
        });
    }
}
