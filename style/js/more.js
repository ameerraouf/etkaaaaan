// Sliders
$(document).ready(function() {
  $("#homeslider").owlCarousel({
    items : 1,
    autoPlay: 5000,
    lazyLoad : true,
    navigation : true,
    itemsDesktop : false,
    itemsDesktopSmall : false
  });
});

// Drop Menu
$(document).ready(function() {
  $( 'nav ul li' ).hover(
    function(){ $(this).children('nav ul li ul').slideDown(200); },
    function(){ $(this).children('nav ul li ul').slideUp(200); }
  );
});

// Marquee
$('.marquee').marquee({
    //speed in milliseconds of the marquee
    duration: 45000,
    //gap in pixels between the tickers
    gap: 50,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
    //'left' or 'right'
    direction: 'right',
    pauseOnHover: true,
    //true or false - should the marquee be duplicated to show an effect of continues flow
    duplicated: true
});

// Type Number
$(".plus").unbind('click').click(function(){
  if($(this).parent().children(".qty").is(':enabled'))
  $(this).parent().children(".qty").val((+$(this).parent().children(".qty").val()+1) || 0);
});
$(".minus").unbind('click').click(function(){
  if($(this).parent().children(".qty").is(':enabled'))
  $(this).parent().children(".qty").val(($(this).parent().children(".qty").val()-1 > 0)?($(this).parent().children(".qty").val() - 1) : 0);
});