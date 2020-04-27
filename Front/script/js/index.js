// @codekit-prepend 'common.js'
$(window).on('load', function() {


	$('.section-cover .container-comp .container-input input').focusin(function(){
		$('.section-cover .container-comp').addClass('style-open');
	})
	$('.section-cover .container-comp .container-input input').focusout(function(){
		$('.section-cover .container-comp').removeClass('style-open');
	})


	function common_navCarousel1(sectioName){

		var section = sectioName;

		var containerEl = section + ' .container-el';
		var el = section + ' .container-el .el';

		var width_containerEl = $(containerEl).width();
		var width_el = $(el+':nth-child(2)').width();

		var margin_el = parseInt($(el+':nth-child(2)').css('marginRight'));

		var num_el = $(el).length - 3;
		
		var nav = section + ' .container-nav .nav';

		var count = 0;

		var slideData;

		$(nav).click(function(){
			
			if ($(this).is(':nth-child(1)') && count > 0) {
				count = count - 2;
			} else if ($(this).is(':nth-child(2)') && count < num_el) {
				count = count + 2;
			}

			if (count === num_el) {
				$(nav + ':nth-child(2)').addClass('style-disable');
			} else if (count === 0) {
				$(nav + ':nth-child(1)').addClass('style-disable');
			} else {
				$(nav).removeClass('style-disable');
			}

			slideData = count * (width_el + margin_el);

			$(containerEl).css({
				'-webkit-transform' : 'translateX(-' + slideData + 'px' + ') translateZ(0)',
				'-moz-transform'    : 'translateX(-' + slideData + 'px' + ') translateZ(0)',
				'-ms-transform'     : 'translateX(-' + slideData + 'px' + ') translateZ(0)',
				'-o-transform'      : 'translateX(-' + slideData + 'px' + ') translateZ(0)',
				'transform'         : 'translateX(-' + slideData + 'px' + ') translateZ(0)'
			});
		})

	};
	


	function common_navCarousel2(sectionName){
		var section = sectionName;

		var containerEl = section + ' .container-el';
		var el =  containerEl + ' .el';
		var nav = section + ' .container-nav .nav';

		var num_el = $(el).length;

		var step_el = 3;

		var count = 3;

		$(el + ':nth-child(-n+' + step_el + ')').addClass('style-active displayBlock');

		$(nav).click(function(){
			
			if ($(this).is(':nth-child(1)') && count > 0) {
				count = count - step_el;
			} else if ($(this).is(':nth-child(2)') && count < num_el) {
				count = count + step_el;
			}

			var first_el = count - step_el + 1;
			var last_el = count;


			if (count >= num_el) {
				$(nav + ':nth-child(2)').addClass('style-disable');
			} else if (count <= (step_el + 1)) {
				$(nav + ':nth-child(1)').addClass('style-disable');
			} else {
				$(nav).removeClass('style-disable');
			}

			$(el).removeClass('style-active displayBlock');
			$(el + ':nth-child(n' + first_el + '):nth-child(-n+' + last_el + ')').addClass('displayBlock');
			setTimeout(function(){
				$(el + ':nth-child(n' + first_el + '):nth-child(-n+' + last_el + ')').addClass('style-active');
			}, 50);
			

		})

	};

	

	function common_horizontalScroll(sectionName){
		var section = sectionName;
		var slider = section + ' .container-slider';
		var sliderWidth = $(slider).width();
		var progressbar = section + ' .container-line .line';
			if ( section.length){
			    function initHeight() {
					let a = ($(window).width() - 1200);
					$(section).height(sliderWidth - a);
				};

				initHeight();

				$window.scroll(function() {

					let a = $(section).offset();
					let b = ($window.height() / 100) * 25; 
					let c = $(section).height();


					let scrollTop = $window.scrollTop() - a.top + b;

					$(slider).css({
					  '-webkit-transform' : 'translateX(-' + scrollTop + 'px' + ')',
					  '-moz-transform'    : 'translateX(-' + scrollTop + 'px' + ')',
					  '-ms-transform'     : 'translateX(-' + scrollTop + 'px' + ')',
					  '-o-transform'      : 'translateX(-' + scrollTop + 'px' + ')',
					  'transform'         : 'translateX(-' + scrollTop + 'px' + ')'
					});

					let progressbarData = scrollTop * 100 / sliderWidth;
					
					$(progressbar).css({
					  '-webkit-transform' : 'translateX(calc(-100% + ' + progressbarData + '%))',
					  '-moz-transform'    : 'translateX(calc(-100% + ' + progressbarData + '%))',
					  '-ms-transform'     : 'translateX(calc(-100% + ' + progressbarData + '%))',
					  '-o-transform'      : 'translateX(calc(-100% + ' + progressbarData + '%))',
					  'transform'         : 'translateX(calc(-100% + ' + progressbarData + '%))'
					});

					console.log(sliderWidth, progressbarData);

					d = $(section).next().offset();
					e = d.top - a.top - ($window.height() * 1.25);

					if (scrollTop >= e) {
						if (!$(section).hasClass('active')) {
							$(section).addClass('active');
						}
					} else {
						if ($(section).hasClass('active')) {
							$(section).removeClass('active');
						}
					}
				    
				});
			}
	};

	common_horizontalScroll('.common-section_sousmetiers');



	function sectionCoverInput_scroll(){
		var el = '.section-cover .container-comp';
		var elPosition = $(el).offset();
		$window.scroll(function() {
			

			if ($window.scrollTop() > (elPosition.top - 16)) {
				if (!$(el).hasClass('style-sticky')) {
					$(el).addClass('style-sticky');
					$('.common-header_desktop').addClass('style-scrollCover');
				};
				
			} else {
				$(el).removeClass('style-sticky');
				$('.common-header_desktop').removeClass('style-scrollCover');
			}
		});
	};

	


	if (window.matchMedia('(min-width:' + $breakPoint_tablet + 'px)').matches) {
		common_navCarousel1('.common-section_actu');
		common_navCarousel1('.common-section_trustpilot');
		common_navCarousel2('.common-section_quotes');
		sectionCoverInput_scroll();
	} else {
	  /* the view port is less than 400 pixels wide */
	}
	

})