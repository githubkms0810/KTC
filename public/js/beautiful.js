// author: BEAUTIFUL CSS

$(document).ready(function(){
  
  $(".home-nav").on("mouseenter", function() {
    $(".home-header__logo").addClass("home-header__logo_remove");
  });
  
  $(".home-nav").on("mouseleave", function() {
    $(".home-header__logo").removeClass("home-header__logo_remove");
  });
  
  $('.home-nav--btn').on('click',function(){
    $('.home-nav').toggle();
  });


  // 로고 슬라이더 시간 단위는 밀리세컨드 입니다. 1000ms = 1초
  var duration = 8000;

  var home_logo = $('.home-logo--list');

  function logo_slide() {
    home_logo.animate({
      left: '-='+1225
    }, duration, 'linear', function(){
      home_logo.find('div').eq(0).clone().appendTo(home_logo);
      home_logo.find('div').eq(0).remove();
      home_logo.css({
        left: 0
      })
    });
  }

  setInterval(function(){
    logo_slide()
  }, 300);
  
});