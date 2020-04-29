// @codekit-prepend 'header.js'

/*===================================
=            BREAK POINT            =
===================================*/

	breakPoint_tablet = 1250;
	breakPoint_mobile = 700;


/*=====  End of BREAK POINT  ======*/


function animScroll() {
	let windowHeight = window.innerHeight / 1.2;
    [].forEach.call(document.getElementsByTagName('section'), function(el) {
        if (window.scrollY >= el.offsetTop - windowHeight + (windowHeight/4)) {
        	if (!el.classList.contains('style-reach')) {
                el.classList.add('style-reach');
            }
        }
    });
};
window.addEventListener('scroll', function() {
    animScroll();
});
animScroll();


/* BTN SCROLL */
window.addEventListener('scroll', function() {
	if ( window.scrollY >= 1 ) {
        document.querySelector('#common-btn_top').classList.add('style-show');
    } else {
    	document.querySelector('#common-btn_top').classList.remove('style-show');
    };
});

document.querySelector("#common-btn_top").addEventListener('click', function() {
	window.scrollTo(0, 0); 
});

/* DETECT BTN TOHREF */
window.addEventListener('load', function() {
    [].forEach.call(document.getElementsByClassName('toHref'), function(toHref) {
        toHref.addEventListener('click', function(el) {
            window.location = this.getAttribute('data-href');
        });
    });
});