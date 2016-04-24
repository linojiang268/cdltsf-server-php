$(document).ready(function () {
  $('.banner').bxSlider({
    captions: true,
    controls: false,
    auto: true,
    speed: 300
  });

  $('.products').bxSlider({
    infiniteLoop: false,
    hideControlOnEnd: true,
    slideWidth: 240,
    slideMargin: 18,
    minSlides: 1,
    maxSlides: 5,
    moveSlides: 3,
    pager: false
  });
});