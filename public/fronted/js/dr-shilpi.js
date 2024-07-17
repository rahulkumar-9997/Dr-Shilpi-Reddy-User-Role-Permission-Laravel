$(function() {
    $(this).removeClass('disabled');
  // Owl Carousel
  $('.owl-carousel').owlCarousel({
  loop: true,
  margin: 5,
  nav: true,
  navText: ['<span class="fas fa-chevron-left fa-2x"></span>','<span class="fas fa-chevron-right fa-2x"></span>'],
  autoplay: true,
  dots: false,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})


 
});

$(window).on('load', function () {
    var $container = $('.grid-services');
    $container.isotope({
	filter: '*',
    });
    $('.portfolio_filter a').on('click', function() {
	$('.portfolio_filter .active').removeClass('active');
	$(this).addClass('active');
	var selector = $(this).attr('data-filter');
	$container.isotope({
	    filter: selector,
	    animationOptions: {
		duration: 500,
		animationEngine : "jquery"
	    }
	});
	return false;
    });
}); 


$(document).ready(function(){
  
  $('#toast').delay(10000).fadeOut('slow');
});