setTimeout(function(){
        $('.loader-overlay').fadeOut(4200);
});
// ******************** sticky navbar
$(window).on('scroll', function () {
	var menu_area = $('nav');
	if ($(window).scrollTop() > 130) {
		menu_area.addClass('sticky-nav');
	} else {
		menu_area.removeClass('sticky-nav');
	}
});

$(window).on('scroll', function () {
	var menu_area = $('.list');
	if ($(window).scrollTop() > 130) {
		menu_area.addClass('.list');
	} else {
		menu_area.removeClass('.list');
	}
});

$(window).on('scroll', function () {
	var menu_area = $('.navbar-btn');
	if ($(window).scrollTop() > 130) {
		menu_area.addClass('.sticky-btn');
	} else {
		menu_area.removeClass('.sticky-btn');
	}
});

$(window).on('scroll', function(){
    var scroll_efek = $('.navbar-brand');
    if ($(window).scrollTop() > 130){
        scroll_efek.css({'color' : '#00ccff'});
    }
    else {
        scroll_efek.css({'color' : '#333'});
    }
});

$(window).on('scroll', function(){
    var scroll_efek = $('.back-top');
    if ($(window).scrollTop() > 130){
        scroll_efek.addClass('.btn-sticky');
    }
    else {
        scroll_efek.removeClass('.btn-sticky');
    }
});

// **************** show side-bar
$(document).ready(function () {
    $(".toggle-btn").click(function(){
        $('nav').toggleClass('click');
        $('.toggle-btn').toggleClass('toggle');
    })
});

// ***************** remove box-shadow
$(document).ready(function () {
    $(".toggle-btn").click(function () {
        $('.navbar-btn').toggleClass('navbar-shadow');
    })
});

//***** Skill bar js
var skillbar = $(".skill-box");

skillbar.waypoint(function () {
	skillbar.each(function () {
		$(this).find(".skill-progress").animate({
			width: $(this).data("percent")
		}, 1000);
	});
}, {
	offset: "80%"
});

//*************counter-up js

$('.counter').counterUp({
    delay: 50,
    time: 8000
});

// ***************** owl carousel setting
$(".service-items").owlCarousel({
    autoPlay: 3000,
    items: 4,
    itemsDesktop: [1199, 4],
    itemsDesktopSmall: [979, 4]
});

$(".testimonial-items").owlCarousel({
    autoPlay: 3000,
    items: 1,
    itemsDesktop: [1199, 1],
    itemsDesktopSmall: [979, 1]
});

// ****************** smooth scrolling
$('.list,.down-btn,.btn-contact,.back-top').on("click", function (e) {
	e.preventDefault();
	var anchor = $(this);
	$('html, body').stop().animate({
		scrollTop: $(anchor.attr('href')).offset().top - 50
	}, 1300);
});

// ******************* lightbox
$('.zoom,.zoom1').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});

// set animation on scroll
AOS.init({ duration: 0 });

//*************** Isotope filter

var $Container = $('#img-filter');
if( $Container.length>0 ) {
    $Container.isotope({
        itemSelector: '.single-port',
        transitionDuration: '0.8s'
    });
    $(".img-filter").on("click", function (e){
        $(".img-filter.active").removeClass("active");
        $(this).addClass("active");
        var selector = $(this).attr('data-filter');
        $Container.isotope({
            filter: selector
        });
        return false;
    });

    $(window).resize(function(){
        setTimeout(function(){
            $Container.isotope();
        },1000);
    }).trigger('resize');
};
