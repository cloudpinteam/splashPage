<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="../css/normalize.css" rel="stylesheet">
	    <link href="../css/createAccount.css" rel="stylesheet">

	<?php
		if(isset($_REQUEST["username"])){
				echo  "<p id='hello'>". 'Hello!'. $_REQUEST["username"].  "</p>";
		}

	

	?>

	</head>

	<body>
		<form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password">
				<span class = "long">Enter a password longer than 8 characters</span>
			</p>
			<p>
				<label for="confirm_password">Confirm Password</label>
				<input id="confirm_password" name="confirm_password" type="password">
				<span>Please confirm your password</span>
			</p>
			<p>
				<input type="submit" value="SUBMIT" id="submit">
			</p>
		</form>	

		<script src="https://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/createAccount.js" type="text/javascript"></script>
	</body>
</html>
