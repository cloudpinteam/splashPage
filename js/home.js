// var $container = $('<div id = "container4"></div>');
// var $caption = $("<p></p>");
// $container.append($caption);
// $container.append($caption);
// $("body").append($container);






$(document).ready(function(){
	$('.container1').hide();
	$('.container2').hide();
	$('.row').hide();
	$('.container1').fadeIn(600);
	$('.container2').fadeIn(600);
	$('.row').fadeIn(600);
	$("#signIn").click(function(){
			window.location = "php/signIn.php";

// var $container = $('<div id = "container4"></div>');
// var $form = $('<form method = "post"></form>');
// var $input = $('<input type = "text" name = "first name">');
// var $username = $('<p id = "username">USERNAME</p>');
// $form.append($username);
// $form.append($input);
// $container.append($form);
// $("body").append($container);


		// $container.slideDown();
		// $caption.text("hello");

		
		


    
	});

	$("#bkg").click(function(){
		window.location = "php/createAccount.php";
	});	

});


