<?php
include'header.php';
include'dbconnect.php';

		
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];
	$g=$_POST['t7'];
	$h=$_POST['t8'];
	
	
	
	
	mysqli_query($dbc,"insert into donator values('$a','$b','$c','$d','$e','$f','$g','$h')");
echo "<center><h1> Payment Done! Thanks </h1>";

?>