// @codekit-prepend 'common.js'

window.addEventListener('load', function() {


	document.querySelector('.section-cover .container-comp .container-input input').addEventListener('focusin', function() {
		document.querySelector('.section-cover .container-comp').classList.add('style-open');
	})
	document.querySelector('.section-cover .container-comp .container-input input').addEventListener('focusout', function() {
		document.querySelector('.section-cover .container-comp').classList.remove('style-open');
	})



	function common_navCarousel1(sectionAll){

		[].forEach.call(document.querySelectorAll(sectionAll), function(section) {

			section = '.' + section.className.split(" ")[0];

			let containerEl = section + ' .container-el';
			let el = section + ' .container-el .el';

			let width_containerEl = document.querySelector(containerEl).clientWidth;
			let width_el = document.querySelector(el+':nth-child(2)').clientWidth;

			let margin_el = document.querySelector(el+':nth-child(2)').style.marginRight;
			margin_el = margin_el ? parseInt(margin_el) : 0;

			let num_el = 0;
			[].forEach.call(document.querySelectorAll(el), function(el) {
				num_el++;
			});
			num_el -= 3;
			
			let nav = section + ' .container-nav .nav';

			let count = 0;

			let slideData;

			[].forEach.call(document.querySelectorAll(nav), function(n) {
				n.addEventListener('click', function() {
					
					let indexNav = Array.prototype.slice.call(this.parentElement.children).indexOf(this) + 1;
					if ( indexNav == 1 && count > 0 ) {
						count = count - 2;
					} else if ( indexNav == 2 && count < num_el ) {
						count = count + 2;
					}

					if (count === num_el) {
						document.querySelector(nav + ':nth-child(2)').classList.add('style-disable');
					} else if (count === 0) {
						document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');
					} else {
						[].forEach.call(document.querySelectorAll(nav), function(remove) {
							remove.classList.remove('style-disable');
						});
					}

					slideData = count * (width_el + margin_el);

					document.querySelector(containerEl).style.webkitTransform = 'translateX(-' + slideData + 'px' + ') translateZ(0)';
					document.querySelector(containerEl).style.MozTransform = 'translateX(-' + slideData + 'px' + ') translateZ(0)';
					document.querySelector(containerEl).style.msTransform = 'translateX(-' + slideData + 'px' + ') translateZ(0)';
					document.querySelector(containerEl).style.OTransform = 'translateX(-' + slideData + 'px' + ') translateZ(0)';
					document.querySelector(containerEl).style.transform = 'translateX(-' + slideData + 'px' + ') translateZ(0)';
				});
			});
		});
	};
	

	function common_navCarousel2(sectionAll){

		[].forEach.call(document.querySelectorAll(sectionAll), function(section) {

			section = '.' + section.className.split(" ")[0];

			let containerEl = section + ' .container-el';
			let el =  containerEl + ' .el';
			let nav = section + ' .container-nav .nav';

			let num_el = 0;
			[].forEach.call(document.querySelectorAll(el), function() {
				num_el++;
			});

			let step_el = 3;

			let count = 3;

			for(let i=1 ; i <= step_el ; i++) {
				document.querySelector(el + ':nth-child(' + i + ')').classList.add('style-active');
				document.querySelector(el + ':nth-child(' + i + ')').classList.add('displayBlock');
			}

			[].forEach.call(document.querySelectorAll(nav), function(n) {
				n.addEventListener('click', function() {

					let indexNav = Array.prototype.slice.call(this.parentElement.children).indexOf(this) + 1;
					if ( indexNav == 1 && count > 0 ) {
						count = count - step_el;
					} else if ( indexNav == 2 && count < num_el ) {
						count = count + step_el;
					}

					let first_el = count - step_el + 1;
					let last_el = count;

					if (count >= num_el) {
						document.querySelector(nav + ':nth-child(2)').classList.add('style-disable');
					} else if (count <= (step_el + 1) ) {
						document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');
					} else {
						[].forEach.call(document.querySelectorAll(nav), function(remove) {
							remove.classList.remove('style-disable');
						});
					}

					[].forEach.call(document.querySelectorAll(el), function(element) {
						element.classList.remove('displayBlock');
						element.classList.remove('style-active');
					});
					[].forEach.call(document.querySelectorAll(el), function(element, i) {
						if( (i+1) >= first_el && (i+1) <= last_el) {
							element.classList.add('displayBlock');
						}
					});
					setTimeout(function(){
						[].forEach.call(document.querySelectorAll(el), function(element, i) {
							if( (i+1) >= first_el && (i+1) <= last_el) {
								element.classList.add('style-active');
							}
						});
					}, 50);

				});
			});
		});
	};


	function common_horizontalScroll(sectionAll){
		
		[].forEach.call(document.querySelectorAll(sectionAll), function(section) {
			section = '.' + section.className.split(" ")[0];
			let slider = section + ' .container-slider';
			let sliderWidth = document.querySelector(slider).clientWidth;
			let progressbar = section + ' .container-line .line';

			if(typeof(section) != 'undefined' && section != null){
				
			    function initHeight() {
					let a = window.innerWidth - 1200;
					document.querySelector(section).style.height = sliderWidth - a + 'px';
				};

				initHeight();
				
				window.addEventListener('scroll', function() {

					let a = document.querySelector(section).offsetTop;
					let b = (window.innerWidth / 100) * 25; 
					let c = document.querySelector(section).clientWidth;

					let scrollTop = window.scrollY - a + b;

					document.querySelector(slider).style.webkitTransform = 'translateX(-' + scrollTop + 'px' + ')';
					document.querySelector(slider).style.MozTransform = 'translateX(-' + scrollTop + 'px' + ')';
					document.querySelector(slider).style.msTransform = 'translateX(-' + scrollTop + 'px' + ')';
					document.querySelector(slider).style.OTransform = 'translateX(-' + scrollTop + 'px' + ')';
					document.querySelector(slider).style.transform = 'translateX(-' + scrollTop + 'px' + ')';

					let lastHeightEl = document.querySelector(section + ' .container-el .el:last-child').clientHeight;
					let progressbarData = scrollTop * 100 / (sliderWidth - lastHeightEl);

					document.querySelector(progressbar).style.webkitTransform = 'translateX(calc(-100% + ' + progressbarData + '%))';
					document.querySelector(progressbar).style.MozTransform = 'translateX(calc(-100% + ' + progressbarData + '%))';
					document.querySelector(progressbar).style.msTransform = 'translateX(calc(-100% + ' + progressbarData + '%))';
					document.querySelector(progressbar).style.OTransform = 'translateX(calc(-100% + ' + progressbarData + '%))';
					document.querySelector(progressbar).style.transform = 'translateX(calc(-100% + ' + progressbarData + '%))';

					d = document.querySelector(section).nextElementSibling.offsetTop;
					e = d - a - (window.innerHeight * 1.25);
					
					if (scrollTop >= e) {
						if (!document.querySelector(section).classList.contains('active')) {
							document.querySelector(section).classList.add('active');
						}
					} else {
						if (document.querySelector(section).classList.contains('active')) {
							document.querySelector(section).classList.remove('active');
						}
					}
				    
				});
			}
		});
	};

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
		sectionCoverInput_scroll();
	} else {
	  /* the view port is less than 400 pixels wide */
	}

	[].forEach.call(document.querySelectorAll('.common-section_autremetiers .container-section .section'), function(section) {
		section.addEventListener('click', function() {
			if (this.classList.contains('style-open')) {
				[].forEach.call(document.querySelectorAll('.common-section_autremetiers .container-section .section'), function(s) {
					s.classList.remove('style-open');
				});
			} else {
				[].forEach.call(document.querySelectorAll('.common-section_autremetiers .container-section .section'), function(s) {
					s.classList.remove('style-open');
				});
				this.classList.add('style-open');
			}

		});
	});
	

});


