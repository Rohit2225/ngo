<?php
include'dbconnect.php';

	$h=$_POST['t1'];	
	$a=$_POST['t2'];
	$b=$_POST['t3'];
	$c=$_POST['t4'];
	

	
	
	
	
	mysqli_query($dbc,"insert into complain values('$h','$a','$b','$c')");

echo "<h1> record inserted </h1>";

?>