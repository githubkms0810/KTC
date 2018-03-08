// author: BEAUTIFUL CSS

$(document).ready(function(){
  
  $(".home-nav").on("mouseenter", function() {
    $(".home-header__logo").addClass("home-header__logo_remove");
  });
  
  $(".home-nav").on("mouseleave", function() {
    $(".home-header__logo").removeClass("home-header__logo_remove");
  });
  
  
  var $logo_list = $(".home-logo--list"),
    $logo_list_w = $logo_list.width(),
    logo_wrap = $(".home-logo__wrap");
  
  console.log($logo_list_w);
  console.log($logo_list.width());
  
  setTimeout(function() {
    console.log($logo_list_w);
  }, 400);

  $('.home-nav--btn').on('click',function(){
    $('.home-nav').toggle();
  });

});