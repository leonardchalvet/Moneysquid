// @codekit-prepend 'jQuery.3.3.1.js'
// @codekit-prepend 'header.js'

$window = $(window);


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