// @codekit-prepend 'common.js'

window.addEventListener('load', function() {

	[].forEach.call(document.querySelectorAll('.section-cover .container-comp .container-input'), function(section) {
		
		section.querySelector('.input input').addEventListener('focusin', function() {
			this.parentElement.parentElement.classList.add('style-open');

			let indexNav = Array.prototype.slice.call(this.parentElement.parentElement.parentElement.children).indexOf(this.parentElement.parentElement) + 1;
			if(indexNav == 1) {
				document.querySelector('.section-cover .container-comp').classList.add('active');
			}
		});
		
		section.querySelector('.input input').addEventListener('focusout', function() {
			this.parentElement.parentElement.classList.remove('style-open');
			document.querySelector('.section-cover .container-comp').classList.remove('active');
		});
	});

	if (window.matchMedia('(min-width:' + breakPoint_tablet + 'px)').matches) {
		common_navCarousel1('.common-section_actu');
		common_navCarousel1('.common-section_trustpilot');
		common_sectionKnoweverything();
		common_sectionPartenaires();
	} else {
		common_sectionPartenaires();
	}

});