$(document).ready(function(){
	$('#toTop').on('click', function(){
		 $("html, body").animate({ scrollTop: 0 }, 500);
	});
	$(window).on("scroll", function() {
    var scrollPos = $(window).scrollTop();
    if (scrollPos <= 0) {
        $("#toTop").fadeOut();
    } else {
        $("#toTop").fadeIn();
    }
	});
});