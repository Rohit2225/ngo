<?php
include"header.php";


include"dbconnect.php";


$a=$_GET['username'];
$b=$_GET['password'];

$c=$_GET['cpassword'];

$d=$_GET['type'];
$e=$_GET['fullname'];
$f=$_GET['dob'];
$g=$_GET['ques'];
$h=$_GET['answer'];
$i=$_GET['email'];
$k=$_GET['address'];
$k1=$_GET['country'];
$k2=$_GET['state'];
$k3=$_GET['city'];

if($b==$c)
{
  mysqli_query($dbc,"insert into login values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$k','$k1','$k2','$k3')");

echo mysql_error();

echo"<h1>Account  created";
}
else
{
  echo"<h1>Account not created";
}
?>

