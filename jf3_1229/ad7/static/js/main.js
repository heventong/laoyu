  $(function(){ 

     //////////////

     ///myCarousel 
    // 停止轮播    
      $("#myCarousel").carousel('pause'); 
    
    // 循环轮播到下一个项目
    $(".next-slide").click(function(){
      $("#myCarousel").carousel('next');
    });

    ///myCarousel 

     ///myCarousel1 
    // 停止轮播    
      $("#myCarousel1").carousel('pause'); 
    
    // 循环轮播到下一个项目
    $(".next-slide1").click(function(){
      $("#myCarousel1").carousel('next');
    });

    ///myCarousel 

    // 提交答题
    $(".submit_btn").click(function(){
     
     $('#myModal').modal('show');
    });

    //////////

    
  });


