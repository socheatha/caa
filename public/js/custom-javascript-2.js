$(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode: true,
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
  
  $('.block-content').each(function () {
    $(this).find('.title-block').css({ 'border-bottom' : '1px solid '+ $(this).data('color') });

    $(this).find('.title-block .title > div').width('60%');
    var divWidth = $(this).find('.title-block .title > div').width();
    var textWidth = $(this).find('.title > div .text > span').width();
    if (textWidth < divWidth) {
      $(this).find('.title-block .title > div').width(textWidth + 25);
    }

    $(this).find('.title > div .text').css({ 'background' : $(this).data('color')});
    
    $(this).find('.big-article h4').css({ 'background' : $(this).data('color')});
    

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

// ==============Menu=====================
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});