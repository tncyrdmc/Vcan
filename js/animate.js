$(function(){

	var $window = $(window);
	var $nav = $('.nav-bg');

	var $fullBgMenu = $('.full-bg-menu');
	var $open = $('#open-bt');
	var $close = $('#close-bt');

	$fullBgMenu.hide();
	$open.on('click',function(e){
		e.preventDefault();
		$fullBgMenu.delay(200).slideDown();
	});

	$close.on('click',function(e){
		e.preventDefault();
		$fullBgMenu.delay(200).slideUp();
	});

	var $aboutTxt = $('.abt-bg-white');
	$aboutTxt.hide();

	///show nav on scroll down
	$window.on('scroll',function(){
		var $top = $(this).scrollTop();
		if ($top > 10) {
			$nav.css({
				'background-color': 'white',
				'box-shadow': '0px 2px 5px rgba(0, 0, 0, 0.2)'
			});

		}else{

			$nav.css({
				'background-color': 'rgba(0, 0, 0, 0)',
				'box-shadow': 'none'
			});
		}

		if ($top > 350){
		      $aboutTxt.delay(400).fadeIn();
		}

    });

	//chat form toggle
	var $chatButtonOpen = $('#chat-bt-open');
	var $chatButtonClose = $('#chat-bt-close');
	var $chatForm = $('#chat-form');

	$chatForm.hide();
	$chatButtonClose.parent().hide();

	//open Up chat
	$chatButtonOpen.on('click',function(e){
		e.preventDefault();
		$chatForm.delay(400).slideDown();
		$chatButtonClose.parent().delay(700).fadeIn();


	});
	//close chat
	$chatButtonClose.on('click',function(e){
		e.preventDefault();
		$chatButtonClose.parent().fadeOut();
		$chatForm.delay(400).slideUp();

	});

	var $signUpForm = $('#sign-up');
	var $signUpButtom = $('#sign-bt');

	$signUpForm.hide();

	$signUpButtom.on('click',function(e){
		e.preventDefault();
		$signUpForm.delay(400).slideToggle();
	});


});
