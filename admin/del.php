<?php
include 'dbconnect.php';

$ss=$_GET['user'];
mysqli_query($dbc,"delete from login where username='$ss'");
echo"<h1>$ss delete";

?>