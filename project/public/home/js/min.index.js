$(function(){
  (function($){
  $.fn.Slide = function(options){
var defaults = {
scroll_Number: 1,
query:".query a",
speed:5000
}
var options = jQuery.extend(defaults, options);
return this.each(function(){
  var scrollWidth;
  var i=1;
  var wai=$(this);
  var scrollNumber=options.scroll_Number;
  var children=wai.children();
  var length = wai.children().length;
  var pageNumber=Math.ceil(length/scrollNumber);
  var liWidth=$(this).find("li").width();
  var scrollWidth=liWidth*scrollNumber;
      wai.append($(children).slice(0,scrollNumber).clone());

  function slideNext(){
    if(i==pageNumber)
    {
      wai.stop(false,true).animate({left : -i*scrollWidth }, "normal", function(){wai.css({left:0});});
    i=0;
    }      
    else{
     wai.stop(false,true).animate({ left : -i*scrollWidth }, "normal"); 
    } 
    $(options.query).eq(i).addClass("cur").siblings().removeClass("cur");  
    i++;              
  }
  var st=setInterval(function(){
    slideNext();
  },options.speed);
  
  $(options.query).on("click",function(){
     clearInterval(st);
     var index=$(this).index();
     i=index;
     slideNext();
     st=setInterval(function(){
    slideNext();
  },options.speed);
  });


});
};
})(jQuery);

var tab=(function(){
   var $obj=$("#tabHead li"),
       $cont=$(".tab_cont .tc_wrap"),
       $day=$(".date li"),
       distance=$day.width();
       function circleAnimate(obj,index){
          obj.animate({left:index*distance+50},"fast");
       }
    return {
      init:function(){
         this.bindEvent();
      },
      bindEvent:function(){
       $obj.on("click",function(){
        var index=$(this).index();
        $(this).addClass("cur").siblings().removeClass("cur");
        $cont.eq(index).show().siblings().hide();
       });

       $day.on("click",function(){
         var index=$(this).index();
         var obj=$(this).parents(".th").find(".circle");
         $(this).addClass("cur").siblings().removeClass("cur");
         circleAnimate(obj,index);
         $(this).parents(".tc_wrap").find(".tc").children().eq(index).show().siblings().hide();
       });
      }
    }
}())
  tab.init();
 $("#slide").Slide();
 $(".game").hover(function(){
  $(".list").show();
 },function(){
  $(".list").hide();
 })
});
 