
$(document).ready(function() {
              var owl = $('#carousel');
              owl.owlCarousel({
               animateOut: 'fadeOut',
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                navigation : false,
                slideSpeed : 3000,
                paginationSpeed : 3000,
                singleItem:true,
                stopOnHover : true,
                responsiveClass: true,
                responsiveRefreshRate : 10,
                nav: true,


              });

              var owl1 = $('#carousel1');
              owl1.owlCarousel({
               animateOut: 'fadeOut',
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                navigation : false,
                slideSpeed : 3000,
                paginationSpeed : 3000,
                singleItem:true,
                stopOnHover : true,
                responsiveClass: true,
                responsiveRefreshRate : 10,
                nav: true,
                dots: false,

              });

              var owl2 = $('#carousel2');
              owl2.owlCarousel({
               animateOut: 'fadeOut',
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                navigation : false,
                slideSpeed : 3000,
                paginationSpeed : 3000,
                singleItem:true,
                stopOnHover : true,
                responsiveClass: true,
                responsiveRefreshRate : 10,
                nav: true,
                dots: false,

              });



$('.search-icon').click(function(){
   $(".search").css({"opacity":"1", "z-index": "999"});
   $(".fa-times").css({"opacity":"1", "z-index": "999"});
});

$('.fa-times').click(function(){
  $(this).css({"opacity":"0", "z-index": "-1"});
   $(".search").css({"opacity":"0", "z-index": "-1"});
});

$('.fb-error').click(function () {
  $(".fb-error").css('display', 'none');
  $(".show-fb-error").css('display', 'block');
})


var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  //e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

/*product*/

$('.small-image1').click(function () {
  $(".big-img-black").css('opacity', '0');
  $(".big-img-white").css('opacity', '1');
})
$('.small-image2').click(function () {
  $(".big-img-black").css('opacity', '1');
  $(".big-img-white").css('opacity', '0');
})


/*hamburger-nav*/

$('.fa-bars').click(function(e) {
  $('.hamburger-nav').slideToggle('fast');
  e.stopPropagation();
});
/*closest("li").children("ul").*/


$(".sub_li").click(function (e) {
    $(this).children('i').toggleClass("down");
    $(this).children('ul').slideToggle('fast');
    e.stopPropagation();
});


/*nav scrolling*/



/*$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    $('.nav-bar').addClass('nav-fix');
  } else {
    $('.nav-bar').removeClass('nav-fix');
  }
});*/


})
