// @codekit-prepend 'common.js'

window.addEventListener('load', function() {

	if (window.matchMedia('(min-width:' + breakPoint_tablet + 'px)').matches) {
		common_navCarousel1('.common-section_actu');
		common_navCarousel1('.common-section_trustpilot');
		common_navCarousel2('.common-section_quotes');
		common_horizontalScroll('.common-section_sousmetiers');
	} else {
		common_sectionAutremetiers();
	}
});