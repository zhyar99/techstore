$(document).ready(function() {
  var fixHeight = function() {
    $('.navbar-nav').css(
      'max-height',
      document.documentElement.clientHeight - 150
    );
  };
  fixHeight();
  $(window).resize(function() {
    fixHeight();
  });
  $('.navbar .navbar-toggler').on('click', function() {
    fixHeight();
  });
  $('.navbar-toggler, .overlay').on('click', function() {
    $('.mobileMenu, .overlay').toggleClass('open');
  });
});

$(document).ready(function () {
      var onPageLoadScroll = $(window).scrollTop();
      if (onPageLoadScroll > 10)
      {
          $(".navbar").css('box-shadow', '1px 1px 10px rgb(179, 179, 179)');
      }
      else
      {
          $(".navbar").css('box-shadow', 'none');
      }
  $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if (scroll > 10)
      {
          $(".navbar").css('box-shadow', '1px 1px 10px rgb(179, 179, 179)');
      }
      else
      {
          $(".navbar").css('box-shadow', 'none');
      }
  })
})