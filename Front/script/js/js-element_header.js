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

	[].forEach.call(document.querySelectorAll('.common-header_desktop .head ul li'), function(nav) {
		nav.addEventListener('mouseenter', function() {
			
			let thisIndex = Array.prototype.slice.call(this.parentElement.children).indexOf(this) + 1;
			
			document.querySelector('.common-header_desktop').classList.add('style-open');
			[].forEach.call(document.querySelectorAll('.common-header_desktop .container-el .el:not(:nth-child(' + thisIndex + '))'), function(el) {
				el.classList.remove('show');
			});

			if (!document.querySelector('.common-header_desktop .container-el .el:nth-child(' + thisIndex + ')').classList.contains('show')) {
				document.querySelector('.common-header_desktop .container-el').classList.add('show');
				document.querySelector('.common-header_desktop').classList.remove('style-white');
				document.querySelector('.common-header_desktop .container-el .el:nth-child(' + thisIndex + ')').classList.add('show');
			};

		})
	});

	document.querySelector('.common-header_desktop .container-el').addEventListener('mouseleave', function() {

		document.querySelector('.common-header_desktop').classList.remove('style-open');
		document.querySelector('.common-header_desktop .container-el').classList.remove('show');
		document.querySelector('.common-header_desktop').classList.add('style-white');
		[].forEach.call(document.querySelectorAll('.common-header_desktop .container-el .el'), function(el) {
			el.classList.remove('show');
		});

	});

	document.querySelector('.common-header_mobile .head .action-menu').addEventListener('click', function() {
		document.querySelector('.common-header_mobile .container-sidebar').classList.add('show');
	});
	document.querySelector('.common-header_mobile .container-sidebar .background').addEventListener('click', function() {
		document.querySelector('.common-header_mobile .container-sidebar').classList.remove('show');
	});
	[].forEach.call(document.querySelectorAll('.common-header_mobile .container-sidebar .sidebar .container-link .link'), function(el) {
		el.addEventListener('click', function() {
			[].forEach.call(document.querySelectorAll('.common-header_mobile .container-sidebar .sidebar .container-link .link'), function(link) {
				link.classList.remove('style-open');
			});
			this.classList.toggle('style-open');
		});
	});
}

headerDesktop_nav();