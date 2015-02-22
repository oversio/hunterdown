
	jQuery(function($){
		$('#top-link').click(function(){
			$.scrollTo( 0, 400);
			return false;
		});
	});

	jQuery.fn.topLink = function(settings) {
		settings = jQuery.extend({
			min: 1,
			fadeSpeed: 200,
			ieOffset: 50
		}, settings);
		return this.each(function() {
			var el = $(this);
			el.css('display','none');
			$(window).scroll(function() {
				if(!jQuery.support.hrefNormalized) {
					el.css({
						'position': 'absolute',
						'top': $(window).scrollTop() + $(window).height() - settings.ieOffset
					});
				}
				if($(window).scrollTop() >= settings.min)
				{
					el.fadeIn(settings.fadeSpeed);
				}
				else
				{
					el.fadeOut(settings.fadeSpeed);
				}
			});
		});
	};
	
	$(document).ready(function() {
		$('#top-link').topLink({
			min: 600,
			fadeSpeed: 500
		});
	});