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
				count--;
			} else if ($(this).is(':nth-child(2)') && count < num_el) {
				count++;
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

	}
	common_navCarousel1('.common-section_actu');
	common_navCarousel1('.common-section_trustpilot');


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

	common_navCarousel2('.common-section_quotes');

	

	if (window.matchMedia("(min-width: 1250px)").matches) {
		var $myDiv = $('.common-section_sousmetiers');

		if ( $myDiv.length){
		    function initHeight() {
				let a = ($(window).width() - 1200);
				$('.common-section_sousmetiers').height($('.common-section_sousmetiers .container-slider').width() - a);
			};

			initHeight();

			$window.scroll(function() {

				let a = $('.common-section_sousmetiers').offset();
				let b = ($window.height() / 100) * 25; 
				let c = $('.common-section_sousmetiers').height();


				let scrollTop = $window.scrollTop() - a.top + b;

				$('.common-section_sousmetiers .container-slider').css({
				  '-webkit-transform' : 'translateX(-' + scrollTop + 'px' + ')',
				  '-moz-transform'    : 'translateX(-' + scrollTop + 'px' + ')',
				  '-ms-transform'     : 'translateX(-' + scrollTop + 'px' + ')',
				  '-o-transform'      : 'translateX(-' + scrollTop + 'px' + ')',
				  'transform'         : 'translateX(-' + scrollTop + 'px' + ')'
				});

				d = $('.common-section_sousmetiers').next().offset();
				e = d.top - a.top - ($window.height() * 1.25);

				if (scrollTop >= e) {
					if (!$('.common-section_sousmetiers').hasClass('active')) {
						$('.common-section_sousmetiers').addClass('active');
					}
				} else {
					if ($('.common-section_sousmetiers').hasClass('active')) {
						$('.common-section_sousmetiers').removeClass('active');
					}
				}
			    
			});
		}
	};


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
	}

	sectionCoverInput_scroll();
	

})