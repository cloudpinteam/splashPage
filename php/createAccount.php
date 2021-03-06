<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Create Account - Cloudpin</title>
	    <link href="../css/normalize.css" rel="stylesheet">
	    <link href="../css/createAccount.css" rel="stylesheet">
	    <link href="../css/responsiveCreateAccount.css" rel="stylesheet">
	    

	</head>

	<body>

		<div class = "container4">
			<a href = "../home.html"><img id = "logoSign" src = "../img/Layer-2 copy 3.png"></a>
			<p id = "create">CREATE ACCOUNT</p>
			<button id = "bfacebook" onmouseover="changeFacebook();" onmouseout="normFacebook();">
					<img id = "fbpic" src = "../img/facebook-1.png">
					<span id = "text">Sign in with Facebook</span>
			</button>
			<div class = "container5">
				<span id = "message">OR</span>

	<button id = "fakeline"></button>			
			</div>
			



			<form method = "post" action = "signedIn.php">
				<p>
					<label id = "username1" for="username">USERNAME</label>
					<input id="username" name="username" type="text" placeholder = "username">
				</p>
				<p>
					<label id = "email1" for="email">EMAIL</label>
					<input value = "<?php echo $_REQUEST["account"]; ?>" id="email" name="email" type="email" placeholder = "you@email.com">
				</p>

				<p>
					<label id = "password1" for="password">PASSWORD</label>
					<input id="password" name="password" type="password" placeholder = "Password">
					<span class = "long">Enter a password longer than 8 characters</span>
				</p>
				<p>
					<label id = "confirm1" for="confirm_password">CONFIRM PASSWORD</label>
					<input id="confirm_password" name="confirm_password" type="password" placeholder = "Password">
					<span>Please confirm your password</span>
				</p>
				<p>
				<!-- 	<input type="button" value="CREATE ACCOUNT" id="submit" onclick="window.location.href = 'signedIn.php'" > -->
				<input type="submit" value="CREATE ACCOUNT" id="submit">
				</p>
			</form>	

			<div class = "bottom">
				<span id = "signIn">Sign In</span>
			</div>	

		</div>	
		<script src="https://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/createAccount.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
