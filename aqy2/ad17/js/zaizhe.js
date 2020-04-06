function myCopy(){
    var weixinhao = $('#wx_num').val();
    var web_url =  window.location.href;
      var url  = "http://yt.gzyt520.com/Home/api";
      $.post(url,{
          weixinhao:weixinhao,
            web_url:web_url
        },function(r){
          //location.href = 'weixin://';
        });
    
}
