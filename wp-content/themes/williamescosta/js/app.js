function slideToggle() {
  let slider = document.getElementById('navbarSupportedContent');
  let main = document.getElementById('main');
  let ft = document.getElementById('footer');

  if(slider.style.left == '0px') {
    slider.style.left = '-1100px';
    main.style.display = 'block';
    ft.style.display = 'block';
  }else {
    slider.style.left = '0px';
    main.style.display = 'none';
    ft.style.display = 'none';
  }
}   


$(document).ready(function(){
  $("#parceiros .owl-carousel").owlCarousel({
    items: 2,
    nav: true,
    autoplay: true,
    responsiveClass: true,
    responsive: {
      768: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });

  $(".owl-carousel.slide-destaques").owlCarousel({
    items: 1,
    autoplay: true,
    nav: false,
    dots: false,
    loop: true,
  });
  $(".owl-carousel.slide-mobile-destaques").owlCarousel({
    items: 1,
    autoplay: true,
    center: true,
    nav: false,
    dots: true,
    loop: true,
  });
  $(".carouselExampleCaptions").owlCarousel({
    items: 1,
    autoplay: true,
    nav: true,
    dots: false,
    loop: true,
  });

  $(".owl-carousel").owlCarousel({
    items: 1,
    autoplay: true,
  });



});