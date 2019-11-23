$(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
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

});