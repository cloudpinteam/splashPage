// var $container = $('<div id = "container4"></div>');
// var $caption = $("<p></p>");
// $container.append($caption);
// $container.append($caption);
// $("body").append($container);






$(document).ready(function(){
	$('.container1').hide();
	$('.container2').hide();
	$('.row').hide();
	$('.container1').fadeIn(800);
	$('.container2').fadeIn(800);
	$('.row').fadeIn(800);



	// $("#signIn").click(function(){
	// 		window.location = "createAccount.html";
		
	// });


		
		


    


	$("#bkg").click(function(){
		window.location = "php/createAccount.php";
	});	

});


