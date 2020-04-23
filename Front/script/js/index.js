// @codekit-prepend 'common.js'
$(window).on('load', function() {


	function common_navCarousel(sectioName){

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
	common_navCarousel('.common-section_actu');
	common_navCarousel('.common-section_trustpilot');

	

})