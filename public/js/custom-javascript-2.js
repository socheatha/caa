$(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
    arrows: false,
    dots: false,
      pauseOnHover: false,
      responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 2
      }
    }]
  });
});


$(window).bind('scroll', function () {
	var sliderHeight = $('#block-front-slider').height();
	var wScroll = $(this).scrollTop();

	//========= slider Parallax img and caption
	if (wScroll <= sliderHeight) {
		$('.carousel-caption > .caption').css({
			'transform' : 'translate(0px, '+ wScroll/28 +'%)'
		});
		$('.img-fluid').css({
			'transform' : 'translate(0px, -'+ wScroll /30 +'%)'
		});
	}

	if ($(window).scrollTop() > 480) {
		$('#navbar-2').addClass('sticky-top fadeInDown');
		$('#navbar-2 .navbar-brand').removeClass('sr-only');
		$('#navbar-2 .navbar-item-list').addClass('ml-auto').removeClass('mr-auto');
		$('#navbar-2 .navbar-item-list .search').removeClass('sr-only');
		$('#navbar-2 .search-bar-menu-top').addClass('sr-only');
	}else{
		$('#navbar-2').removeClass('sticky-top fadeInDown');
		$('#navbar-2 .navbar-brand').removeClass('sr-only');
		$('#navbar-2 .navbar-brand').addClass('sr-only');
		$('#navbar-2 .navbar-item-list').removeClass('ml-auto').addClass('mr-auto');
		$('#navbar-2 .navbar-item-list .search').addClass('sr-only');
		$('#navbar-2 .search-bar-menu-top').removeClass('sr-only');
	}

});