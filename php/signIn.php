<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="../css/normalize.css" rel="stylesheet">
	    <link href="../css/signIn.css" rel="stylesheet">
	    

	   
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../js/signIn.js" type = "text/javascript" charset = "utf-8"></script>
		<link href="../css/responsiveSignIn.css" rel="stylesheet">
		



	</head>
	<body>
		
		<div class = "container4">
		
				<a href = "../home.html"><img id = "logoSign" src = "../img/Layer-2 copy 3.png"></a>
				<p id = "welcome">WELCOME BACK</p>
				<button id = "bfacebook" onmouseover="changeFacebook();" onmouseout="normFacebook();">
					<img id = "fbpic" src = "../img/facebook-1.png">
					<span id = "text">Sign in with Facebook</span>
				</button>

			

				<div class = "container5">

					<span id = "message">OR SIGN IN WITH</span>
				
					
				</div>
			
				<button id = "fakeline"></button>

				<form method = "post" accept-charset="UTF-8">
					<p class = "title">EMAIL</p>
					<input class = "input1" type = "email" name = "first name" placeholder = "Your email" required>
					<p class = "title">PASSWORD</p>
					<input class ="input1" type="password" name="Password" placeholder="Your password" required>
					<br>
					<input type = "button" id = "login" value = "SIGN IN" onclick="window.location.href = 'signedIn.php'">
				</form>	

				<!-- <button id = "login">SIGN IN</button> -->
		
				<div class = "bottom">
					<button class = "forgot1">forgot password?</button>
					<button class = "create1">Create account</button>
				</div>



			
		</div>

		

		

		
		
	</body>
</html>	