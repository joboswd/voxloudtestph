(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away

		$('#nav-lines').click(function () {
			$(this).toggleClass('open');
			$('body').toggleClass('overflow-hidden').toggleClass('w-100');
			$('.header').toggleClass('burger-opened');
			$('.burger-content').toggleClass('burger-opened');
		});

		// to remove drawer menu classes upon 992
		window.addEventListener('resize', () => {
			if (window.innerWidth > 991) {
				$('#nav-lines').removeClass('open');
				$('body').removeClass('overflow-hidden').removeClass('position-fixed').removeClass('w-100');
				$('.header').removeClass('burger-opened');
				$('.burger-content').removeClass('burger-opened');
			}
		});

		
	});

})(jQuery, this);
