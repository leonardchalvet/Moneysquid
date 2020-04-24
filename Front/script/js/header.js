function headerDesktop_nav(){
	/*
	$('.common-header_desktop ul li').click(function(){
		var thisIndex = $(this).index() + 1;

		$('.common-header_desktop .container-el .el:not(:nth-child(' + thisIndex + '))').removeClass('show');

		if (!$('.common-header_desktop .container-el .el:nth-child(' + thisIndex + ')').hasClass('show')) {
			$('.common-header_desktop .container-el').addClass('show');
			$('.common-header_desktop').removeClass('style-white');
			$('.common-header_desktop .container-el .el:nth-child(' + thisIndex + ')').addClass('show');
		} else {
			$('.common-header_desktop .container-el').removeClass('show');
			$('.common-header_desktop').addClass('style-white');
			$('.common-header_desktop .container-el .el:nth-child(' + thisIndex + ')').removeClass('show');
		}
		
	})*/


	$('.common-header_desktop .head ul li').mouseenter(function(){
		var thisIndex = $(this).index() + 1;
		$('.common-header_desktop').addClass('style-open');
		$('.common-header_desktop .container-el .el:not(:nth-child(' + thisIndex + '))').removeClass('show');
		if (!$('.common-header_desktop .container-el .el:nth-child(' + thisIndex + ')').hasClass('show')) {
			$('.common-header_desktop .container-el').addClass('show');
			$('.common-header_desktop').removeClass('style-white');
			$('.common-header_desktop .container-el .el:nth-child(' + thisIndex + ')').addClass('show');
		};
	})

	$('.common-header_desktop .container-el').mouseleave(function(){
		$('.common-header_desktop').removeClass('style-open');
		$('.common-header_desktop .container-el').removeClass('show');
		$('.common-header_desktop').addClass('style-white');
		$('.common-header_desktop .container-el .el').removeClass('show');
	})

	$('.common-header_mobile .head .action-menu').click(function(){
		$('.common-header_mobile .container-sidebar').addClass('show');
	})
	$('.common-header_mobile .container-sidebar .background').click(function(){
		$('.common-header_mobile .container-sidebar').removeClass('show');
	})
	$('.common-header_mobile .container-sidebar .sidebar .container-link .link').click(function(){
		$('.common-header_mobile .container-sidebar .sidebar .container-link .link').removeClass('style-open');
		$(this).toggleClass('style-open');
	})
}

headerDesktop_nav()