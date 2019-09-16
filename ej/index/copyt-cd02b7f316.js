var clipboard = new Clipboard("#btnCode");
function summary(i) {
    var c = new Clipboard(i);
    c.on("success",
    function(i) {
        var c = $('input[name="ajax_url"]').val();
        $(".tip-list-wrapper1").show(),
        $(".close-img").click(function() {
            $(".tip-list-wrapper1").hide()
        }),
        $(".close-confirm").click(function() {
            
        }),
        /*$.ajax({
            type: "post",
            url: c,
            data: {
                wechat: i.text
            },
            dataType: "json",
            success: function(i) {}
        }),*/
        i.clearSelection()
    }),
    c.on("error",
    function(i) {})
}
clipboard.on("success",
function(i) {
    var c = $('input[name="ajax_url"]').val();
    $(".tip-list-wrapper1").show(),
    $(".close-img").click(function() {
        $(".tip-list-wrapper1").hide()
    }),
    $(".close-confirm").click(function() {
        
    }),
    $.ajax({
        type: "post",
        url: c,
        data: {
            wechat: i.text
        },
        dataType: "json",
        success: function(i) {}
    }),
    i.clearSelection()
}),
clipboard.on("error",
function(i) {
    $(".tip-list-wrapper1").show(),
    $(".close-img").click(function() {
        $(".tip-list-wrapper1").hide()
    }),
    $(".close-confirm").click(function() {
        
    }),
    /*$.ajax({
        type: "post",
        url: c,
        data: {
            wechat: i.text
        },
        dataType: "json",
        success: function(i) {}
    }),*/
    i.clearSelection()

});
for (var i = 1; i < 30; i++) summary("#btnCode" + i);
$(".close-cancel").on("click",
function() {
    $(".tip-list-wrapper1").hide()
});
var clipB = new Clipboard(".btnCode");
clipB.on("success",
function(i) {
    var c = $('input[name="ajax_url"]').val();
    $(".tip-list-wrapper1").show(),
    $(".close-img").click(function() {
        $(".tip-list-wrapper1").hide()
    }),
    $(".close-confirm").click(function() {
    }),
    /*$.ajax({
        type: "post",
        url: c,
        data: {
            wechat: i.text
        },
        dataType: "json",
        success: function(i) {}
    }),*/
    i.clearSelection()
}),
clipB.on("error",
function(i) {});