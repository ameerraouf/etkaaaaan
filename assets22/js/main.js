$(function () {
  marqueeInit({
    uniqueid: 'mycrawler',

    style: {
      'padding': '5px',
    },
    inc: 5, //speed - pixel increment for each iteration of this marquee's movement
    mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
    moveatleast: 2,
    neutral: 150,
    savedirection: true,
    direction: 'right',
  });
  // $("#lightgallery").lightGallery();
  $("#lightgallery").lightGallery({
    selector: '.item'
  });
  // Owl carousal
  $('#slider').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    margin: 10,
    autoplayHoverPause: true,
    nav: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
      },
      1000: {
        items: 4,
        nav: true,
      },
    }
  });
  $('#slider2').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    margin: 10,
    autoplayHoverPause: true,
    nav: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
      },
      1000: {
        items: 4,
        nav: true,
      },
    }
  });
  // slider nav buttons 
  $('#slider span[aria-label="Previous"]').html('<i class="icofont-caret-left"></i>');
  $('#slider span[aria-label="Next"]').html('<i class="icofont-caret-right"></i>');


  /* Persent */


  $('.progress-bar').each(function () {
    var valueNow = $(this).attr('aria-valuenow');
    if (valueNow >= 0 &&  valueNow < 50 ) {
      $(this).css('background-color','red')
    }
    else if (valueNow >= 50 && valueNow < 80 ){
      $(this).css('background-color','rgb(255 128 62)')
    }
    else if (valueNow >= 80 && valueNow < 90){
      $(this).css('background-color','rgb(4 180 53)')
    }
    else if (valueNow >= 90  && valueNow <= 100){
      $(this).css('background-color','rgb(5 151 134)')
    }
    else {
      $(this).css('background-color','rgb(255 128 62)')
    }
  })

// hide twitter footer

  
 
});