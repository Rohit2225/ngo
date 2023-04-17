<?php
include'dbconnect.php';

	$h=$_POST['t1'];	
	$a=$_POST['t2'];
	$b=$_POST['t3'];
	$c=$_POST['t4'];
	$d=$_POST['t5'];
	$e=$_POST['t6'];
	$f=$_POST['t7'];
	$g=$_POST['t8'];
	
	
	
	
	mysqli_query($dbc,"insert into poorchild values('$h','$a','$b','$c','$d','$e','$f','$g')");

echo "<h1> record inserted </h1>";

?>