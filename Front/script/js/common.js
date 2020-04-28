// @codekit-prepend 'jQuery.3.3.1.js'
// @codekit-prepend 'header.js'

$window = $(window);

/*===================================
=            BREAK POINT            =
===================================*/

	$breakPoint_tablet = 1250;
	$breakPoint_mobile = 700;


/*=====  End of BREAK POINT  ======*/


function animScroll() {
	var windowHeight = $window.height() / 1.2;
    $('section').each(function() {
        if ($window.scrollTop() >= $(this).offset().top - windowHeight + (windowHeight/4)) {
        	if (!$(this).hasClass('style-reach')) {
                $(this).addClass('style-reach');
            }
        }
    });
};
$window.scroll(function() {
    animScroll();
});
animScroll();


/* BTN SCROLL */
$window.scroll(function() {
	if ( $window.scrollTop() >= 1 ) {
        $('#common-btn_top').addClass('style-show');
    } else {
    	$('#common-btn_top').removeClass('style-show');
    };
});

$("#common-btn_top").click(function(){
	$(window).scrollTop(0); 
})

/* DETECT BTN TOHREF */
$(window).on('load', function() {
    $('.toHref').click(function(){
        window.location = $(this).attr('data-href');
    })
});