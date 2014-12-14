$(function(){
  (function($){
  $.fn.Slide = function(options){
var defaults = {
scroll_Number: 1,
query:".query span",
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

  function slideNext(){
    if(i==pageNumber)
    {
    i=0;
    }         
    children.hide().eq(i).fadeIn(1000);  
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



var price=298;
var youhui=20;
$("#banner_cont").Slide();
$(".minus").click(function(){
  var num=parseInt($(".pro_number").val());
  if(!num){
    alert("请填写正确的数字");
    return;
  }
  if(num<=1){
    return;
  }else{
    $(".pro_number").val(--num);
    $("#money").text(""+num*price+".00");
    $("#product").text(""+num*price+".00");
    $("#youhui").text(""+youhui+".00");
    $("#end_money").text(""+(num*price-youhui)+".00");
  }
});

$(".add").click(function(){
  var num=parseInt($(".pro_number").val());
  if(!num){
    alert("请填写正确的数字");
    return;
  }
  if(num<1){
    return;
  }else{
    $(".pro_number").val(++num);
    $("#money").text(""+num*price+".00");
    $("#product").text(""+num*price+".00");
    $("#youhui").text(""+youhui+".00");
    $("#end_money").text(""+(num*price-youhui)+".00");
  }
});
$(".slidedown").click(function(){
  if($(this).text()=="-"){
    $(this).text("+");
  }else{
    $(this).text("-");
  }
  $(".dis_cont").toggle();
});


});
function isMobile() {
    regex = new RegExp('(^0?1[3|4|5|8][0-9]{9}$)');
    if (!regex.test($('#mobilephone').val())) {
        return false;
    } else {
        return true;
    }
}

 
function submit(url,jump){
  $.ajax({
            type: 'POST',
            url: url,
            data: {
                number: $(".pro_number").val(),
                money: $("#end_money").text(),
                beizhu:$("#beizhu").val(),
                zone:$('#zone').val(),
                address:$('#address').val(),
                name: $('#name').val(),
                mobilephone: $('#mobilephone').val(),
                postcode:$('#postcode').val(),
                phone:$('#phone').val(),
                csrf_token: $('input[name="csrf_token"]').val()
            },
            success: function(data) {
                var obj = jQuery.parseJSON(data);
                if (obj.code == 0) {
                   window.location.href=jump+"/url/"+obj.data;
                } else {
                   
                }
                
            }
        });
    }  

function submitinfo(url,jump){
  var zone=$.trim($("#zone").val()),
      address=$.trim($("#address").val()),
      name=$.trim($("#name").val()),
      phone=$.trim($("#mobilephone").val());
  if(zone&&address&&name&&phone){
     if(isMobile()){
        submit(url,jump);

     }else{
      alert("请输入正确的手机号码");
     }
  } 
  else{
    alert("红色星号的输入框必须输入信息");
  }   

}
