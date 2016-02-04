$(window).on('scroll resize', function() {
  var self = $(this),
    height = self.height(),
    top = self.scrollTop();


// main nav fade in on scroll

    if (($(window).width() >= 550) && ($(this).scrollTop() > 550)) {

      $('nav#menu').fadeIn(500);
    } else if (($(window).width() >= 550) && ($(this).scrollTop() < 550)) {
      $('nav#menu').fadeOut(500);
    } else {
      $('nav#menu').hide();
    }


  });