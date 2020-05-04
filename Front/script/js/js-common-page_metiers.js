// @codekit-prepend 'common.js'

window.addEventListener('load', function() {

	document.querySelector('.section-cover .container-comp .container-input input').addEventListener('focusin', function() {
		document.querySelector('.section-cover .container-comp').classList.add('style-open');
		if (window.matchMedia('(max-width:' + breakPoint_tablet + 'px)').matches) {
			window.scrollTo(0, 150);
		}
	})
	document.querySelector('.section-cover .container-comp .container-input input').addEventListener('focusout', function() {
		document.querySelector('.section-cover .container-comp').classList.remove('style-open');
	})


	function sectionCoverInput_scroll(){
		let el = document.querySelector('.section-cover .container-comp');
		let elPositionTop = el.offsetTop;

		window.addEventListener('scroll', function() {

			if (window.scrollY > (elPositionTop - 16)) {
				if (!el.classList.contains('style-sticky')) {
					el.classList.add('style-sticky');
					document.querySelector('.common-header_desktop').classList.add('style-scrollCover');
				};
				
			} else {
				el.classList.remove('style-sticky');
				document.querySelector('.common-header_desktop').classList.remove('style-scrollCover');
			}

		});
	};

	if (window.matchMedia('(min-width:' + breakPoint_tablet + 'px)').matches) {
		common_navCarousel1('.common-section_actu');
		common_navCarousel1('.common-section_trustpilot');
		common_navCarousel2('.common-section_quotes');
		common_horizontalScroll('.common-section_sousmetiers');
	} else {
		common_sectionAutremetiers();
	}
});