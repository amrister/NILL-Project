$(function(){
  console.log("amr");

  // Adjust Categories choice
  $('.filters li').on("click",function(){
    $(this).addClass("active").siblings().removeClass("active");
  })

  // Adjust Team Hover
  $(".ourTeam .row >div").on({
    'mouseenter' : function(){$(this).addClass("active").siblings().removeClass("active")},
    })



})
