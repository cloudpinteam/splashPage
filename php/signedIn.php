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
	   
	   

<script type="text/javascript">
function suggest(strg)
{
if (strg.length==0)
{
document.getElementById("hints").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("hints").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","gethint.php?s="+strg,true);
xmlhttp.send();
}






</script>
</head>


<body>

<div class = "container">

	<?php
		echo  "<span id='hello'>". 'Hello, '. $_REQUEST["username"].  "</span>";
	?>


	<span id = "signOut">Sign Out</span>

	<p><b>Type your name:</b></p>
	<form>
	Your Name: <input type="text" onkeyup="suggest(this.value)" size="20" />
	</form>
	<p><span id="hints"></span></p>




<p>Drag the image into the appropriate box:</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag1" src="../img/Layer-6.png" draggable="true" ondragstart="drag(event)" width:"13%;">

</div>	

</body>
</html>