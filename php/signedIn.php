<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="../css/normalize.css" rel="stylesheet">
	    <link href="../css/signedIn.css" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../js/signedIn.js" type = "text/javascript" charset = "utf-8"></script>
	   
	   

	

	</head>

	<body>
		<div class = "container">
		<?php 
			echo  "<span id='hello'>". 'Hello, '. $_REQUEST["username"].  "</span>";
		?>

		<span id = "signOut">SIGN OUT</span>





		<p>Drag the picture into appropriate location</p>

		<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
		<br>
		<img id="drag1" src="../img/Layer-6.png" draggable="true" ondragstart="drag(event)" width="15%;">

	</div>
	</body>
</html>
