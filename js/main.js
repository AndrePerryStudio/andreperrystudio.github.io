$(document).ready(function(){
	if($('body').is('.home')){
		if($('body').is('.full')){
			$('h2').animate({opacity: 1}, 1000, function(){
				$('h1').animate({opacity: 1}, 1000);
			});
		} else {
			$('h2').fadeIn(1000, function(){
				$('h1').fadeIn(1000);
			});
		}
	}

	if($('body').is('.full')){
		$.supersized({
			slides  :  	[ {image : 'images/bg-index.jpg'} ]
		});
	}
});