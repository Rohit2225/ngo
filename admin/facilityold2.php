<?php
include'dbconnect.php';

	$h=$_POST['t1'];	
	$a=$_POST['t2'];
	$b=$_POST['t3'];

	
	
	
	
	mysqli_query($dbc,"insert into facilityold values('$h','$a','$b')");

echo "<h1> record inserted </h1>";

?>