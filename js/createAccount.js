$(document).ready(function(){
	$('.container4').hide();
	$('.container5').hide();
	$('.container4').slideDown(800);
	$('.container5').slideDown(800);


	$("#submit").click(function(){

		// window.location = "../home.html";
	});	


})








function changeFacebook() {
	document.getElementById("fbpic").src= "../img/facebook.png";
}	

function normFacebook() {
	document.getElementById("fbpic").src= "../img/facebook-1.png";
}








var $password = $("#password");
var $confirmPassword = $("#confirm_password");
var $username = $("#username");
var $email = $("#email");


$("form span").hide();

function isUsernamePresent() {
	return $username.val().length > 0;
}

function isPasswordValid() {
	return $password.val().length > 8;
}

function arePasswordsMatching() {
	return $password.val() === $confirmPassword.val();
}
function isEmail() {
	return $email.val().length > 0;
}


function canSubmit() {
	return isUsernamePresent() && isEmail() && isPasswordValid() && arePasswordsMatching();
}

function passwordEvent(){
    if(isPasswordValid()) {
    	$password.next().hide();
    } else {
    	$password.next().show();
    }
}

function confirmPasswordEvent() {
	if(arePasswordsMatching()) {
    	$confirmPassword.next().hide();
	} else {
		$confirmPassword.next().show();
	}
}

function enableSubmitEvent() {
	$("#submit").prop("disabled", !canSubmit());
}


function usernameEvent() {
	if(isUsernamePresent()) {
		$username.next().hide();
	} else {
		$username.next().show();
	} 
}


$password.focus(passwordEvent).keyup(passwordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

$confirmPassword.focus(confirmPasswordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

$username.keyup(enableSubmitEvent);

$email.keyup(enableSubmitEvent);



enableSubmitEvent();
