function changeFacebook() {
	document.getElementById("fbpic").src= "img/facebook.png";
}	

function normFacebook() {
	document.getElementById("fbpic").src= "img/facebook-1.png";
}


$(document).ready(function(){
	$('.container4').hide();
	$('.container5').hide();

	$('.container4').slideDown(800);
	$('.container5').slideDown(800);
	


	$(".create1").click(function(){
		window.location = "createAccount.html";
	});	

	$("#logoSign").click(function(){
		// $('.container4').slideUp(250);
		// $('.container5').slideUp(300);
		window.location = "home.html";
	});	






});