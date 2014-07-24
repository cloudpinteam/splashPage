<?php
// Array named as x[] for storing suggestions
$x[]="Aiden";
$x[]="Jackson";
$x[]="Ethan";
$x[]="Liam";
$x[]="Mason";
$x[]="Noah";
$x[]="Lucas";
$x[]="Jacob";
$x[]="Jayden";
$x[]="Jack";
$x[]="Logan";
$x[]="Ryan";
$x[]="Caleb";
$x[]="Benjamin";
$x[]="William";
$x[]="Michael";
$x[]="Alexander";
$x[]="Elijah";
$x[]="Matthew";
$x[]="Dylan";
$x[]="James";
$x[]="Owen";
$x[]="Connor";
$x[]="Brayden";
$x[]="Carter";
$x[]="Landon";
$x[]="Joshua";
$x[]="Luke";
$x[]="Daniel";
$x[]="Gabriel";
$x[]="Nicholas";
$x[]="Nathan";
$x[]="Oliver";
$x[]="Henry";
$x[]="Andrew";
$x[]="Gavin";
$x[]="Cameron";
$x[]="Eli";
$x[]="Max";
$x[]="Isaac";
$x[]="Evan";
$x[]="Samuel";
$x[]="Grayson";
$x[]="Tyler";
$x[]="Zachary";
$x[]="Wyatt";
$x[]="Joseph";
$x[]="Charlie";
$x[]="Hunter";
$x[]="David";
$x[]="Anthony";
$x[]="Christian";
$x[]="Colton";
$x[]="Thomas";
$x[]="Dominic";
$x[]="Austin";
$x[]="John";
$x[]="Sebastian";
$x[]="Cooper";
$x[]="Levi";
$x[]="Parker";
$x[]="Isaiah";
$x[]="Chase";
$x[]="Blake";
$x[]="Aaron";
$x[]="Alex";
$x[]="Adam";
$x[]="Tristan";
$x[]="Julian";
$x[]="Jonathan";
$x[]="Christopher";
$x[]="Jace";
$x[]="Nolan";
$x[]="Miles";
$x[]="Jordan";
$x[]="Carson";
$x[]="Colin";
$x[]="Ian";
$x[]="Riley";
$x[]="Xavier";
$x[]="Hudson";
$x[]="Adrian";
$x[]="Cole";
$x[]="Brody";
$x[]="Leo";
$x[]="Jake";
$x[]="Bentley";
$x[]="Sean";
$x[]="Jeremiah";
$x[]="Asher";
$x[]="Nathaniel";
$x[]="Micah";
$x[]="Jason";
$x[]="Ryder";
$x[]="Declan";
$x[]="Hayden";
$x[]="Brandon";
$x[]="Easton";
$x[]="Lincoln";
$x[]="Harrison";

$x[]="Sophia";
$x[]="Emma";
$x[]="Olivia";
$x[]="Isabella";
$x[]="Mia";
$x[]="Ava";
$x[]="Lily";
$x[]="Zoe";
$x[]="Emily";
$x[]="Chloe";
$x[]="Layla";
$x[]="Madison";
$x[]="Madelyn";
$x[]="Abigail";
$x[]="Aubrey";
$x[]="Charlotte";
$x[]="Amelia";
$x[]="Ella";
$x[]="Kaylee";
$x[]="Avery";
$x[]="Aaliyah";
$x[]="Hailey";
$x[]="Hannah";
$x[]="Addison";
$x[]="Riley";
$x[]="Harper";
$x[]="Aria";
$x[]="Arianna";
$x[]="Mackenzie";
$x[]="Lila";
$x[]="Evelyn";
$x[]="Adalyn";
$x[]="Grace";
$x[]="Brooklyn";
$x[]="Ellie";
$x[]="Anna";
$x[]="Kaitlyn";
$x[]="Isabelle";
$x[]="Sophie";
$x[]="Scarlett";
$x[]="Natalie";
$x[]="Leah";
$x[]="Sarah";
$x[]="Nora";
$x[]="Mila";
$x[]="Elizabeth";
$x[]="Lillian";
$x[]="Kylie";
$x[]="Audrey";
$x[]="Lucy";
$x[]="Maya";
$x[]="Annabelle";
$x[]="Makayla";
$x[]="Gabriella";
$x[]="Elena";
$x[]="Victoria";
$x[]="Claire";
$x[]="Savannah";
$x[]="Peyton";
$x[]="Maria";
$x[]="Alaina";
$x[]="Kennedy";
$x[]="Stella";
$x[]="Liliana";
$x[]="Allison";
$x[]="Samantha";
$x[]="Keira";
$x[]="Alyssa";
$x[]="Reagan";
$x[]="Molly";
$x[]="Alexandra";
$x[]="Violet";
$x[]="Charlie";
$x[]="Julia";
$x[]="Sadie";
$x[]="Ruby";
$x[]="Eva";
$x[]="Alice";
$x[]="Eliana";
$x[]="Taylor";
$x[]="Callie";
$x[]="Penelope";
$x[]="Camilla";
$x[]="Bailey";
$x[]="Kaelyn";
$x[]="Alexis";
$x[]="Kayla";
$x[]="Katherine";
$x[]="Sydney";
$x[]="Lauren";
$x[]="Jasmine";
$x[]="London";
$x[]="Bella";
$x[]="Adeline";
$x[]="Caroline";
$x[]="Vivian";
$x[]="Juliana";
$x[]="Gianna";
$x[]="Skyler";
$x[]="Jordyn";






//Fetching varaibale s sent through xmlhttp object 
$s=$_GET["s"];

//if s>0, it will store the hints in the variable suggest
if (strlen($s) > 0)
{
$suggest="";
for($i=0; $i<count($x); $i++)
{
if (strtolower($s)==strtolower(substr($x[$i],0,strlen($s))))
{
if ($suggest=="")
{
$suggest=$x[$i];
}
else
{
$suggest=$suggest." , ".$x[$i];
}
}
}
}

// Show no suggestions,if nothing matches 
// or show the matched names 
if ($suggest == "")
{
$out="no suggestion";
}
else
{
$out=$suggest;
}

//output the response
echo $out;
?>