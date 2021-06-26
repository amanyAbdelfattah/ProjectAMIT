$(document).ready(function(){
    var swiper = new Swiper(".banner .mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      var swiper = new Swiper(".mySwiper", {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        
      });
      // Hide Menu bar and Show menu icons
    var menuIcon = $('.fashion .container .icons')
    $(menuIcon).click(function(){
        $('nav ul').toggleClass('show-menu');
        $('.overlay').fadeToggle();
        $('.menu-icon').toggle();
        $('.close-icon').toggle();
    })
    // // Show / Hide Overlay 
    $('.overlay').click(function() {
        $('nav ul').removeClass('show-menu');
        $('.overlay').fadeOut();
        $('.menu-icon').show();
        $('.close-icon').hide();
    })

    // Close Menu bar When clicking on Overlay or Close Icon
    $('nav ul li').click(function() {
        if (window.innerWidth < 980) {
            $('nav ul').removeClass('show-menu');
            $('.overlay').fadeOut();
            $('.menu-icon').show();
            $('.close-icon').hide();
        }
    })
});