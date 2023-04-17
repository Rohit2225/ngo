<?php
include'dbconnect.php';

	$h=$_POST['t1'];	
	$a=$_POST['t2'];
	$b=$_POST['t3'];
	$c=$_POST['t4'];
	$d=$_POST['t5'];

	
	
	
	
	mysqli_query($dbc,"insert into facilitychild values('$h','$a','$b','$c','$d')");

echo "<h1> record inserted </h1>";

?>