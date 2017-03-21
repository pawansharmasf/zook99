(function($){
	var body    = $('body'),
	    _window = $(window);
	$(function(){
		$('.callUs a').on('click', function(){
			if(_window.width() > 768) {
				return false;
			}
		});
		
		
		window.onload = function(){	
			setTimeout(function(){
				$('.facebookIframe').css('display','none');
				$('.facebookIframe2').css('display','none')
				}, 7000);	
		}
		
				
	});
})(jQuery);

