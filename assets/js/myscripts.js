
// Landing Page side menu//
(function($) {
  "use strict"; // Start of use strict

  // Closes the sidebar menu
  $(".menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
    $(this).toggleClass("active");
  });

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('#sidebar-wrapper .js-scroll-trigger').click(function() {
    $("#sidebar-wrapper").removeClass("active");
    $(".menu-toggle").removeClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
  });

  // Scroll to top button appear
  $(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn;
    } else {
      $('.scroll-to-top').fadeOut;
    }
  });

})(jQuery); // End of use strict




//hide button jquery old Code//
//$(window).scroll(function () {
  //  if ($(this).scrollTop() > 50) {

    //    $('.navbar').css('background', 'transparent');

    //} else {
      //  $('.navbar').css('background', 'transparent');
    //}
//});


//navbar closemenu colapse show and close and toggler show and close//  
//$(document).ready(function () {
  //  $(".navbar-toggler").click(function () {
    //    $("#navbarSupportedContent").toggle();
   // });

    //$("#closeMenu").click(function () {
      //  $("#navbarSupportedContent").hide();
       // $("#navbutton").show();
    //});
//});

//navbar toggler hide//
//$('#navbutton').click(function () {
   // $('#navbutton').hide(0);
//});





