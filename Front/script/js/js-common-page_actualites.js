// @codekit-prepend 'common.js'
window.addEventListener('load', function() {
if (window.matchMedia('(min-width:' + breakPoint_tablet + 'px)').matches) {
		common_navCarousel1('.common-section_actu');
	};
	
});