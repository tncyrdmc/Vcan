$(function(){

	var $window = $(window);
	var $nav = $('.nav-bg');

    var $chatButton = $('#chat-bt')
	var $chatForm = $('#chat-form');

	var $aboutTxt = $('.abt-bg-white');
	$aboutTxt.hide();
    
    ///show nav on scroll down
	$window.on('scroll',function(){

		var $top = $(this).scrollTop();

		if ($top > 200) {
			$nav.css({
				'background-color': 'white',
				'box-shadow': '0px 2px 5px rgba(0, 0, 0, 0.2)'
			});
		}else{
			$nav.css({
				'background-color': 'rgba(255, 255, 255, 0.2)',
				'box-shadow': 'none'
			});
		}

		if ($top > 500){
		      $aboutTxt.delay(400).fadeIn();
		}

		// if ($top > 1200){
		// 	 $serviceBoxes.each(function(index){
		//      	$(this).delay(400 * index).fadeIn();
		//     });
		// }
		
    });

    //chat form toggle
	$chatForm.hide();
	$chatButton.on('click',function(e){
		e.preventDefault();
		$chatForm.delay(400).slideToggle();
		
	});

	var $signUpForm = $('#sign-up');
	var $signUpButtom = $('#sign-bt');

	$signUpForm.hide();

	$signUpButtom.on('click',function(e){
		e.preventDefault();
		$signUpForm.delay(400).slideToggle();
	});

	
});