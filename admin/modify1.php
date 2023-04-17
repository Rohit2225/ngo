<?php
include 'dbconnect.php';

$username=$_GET['t1'];
$password=$_GET['t2']; 
$cpassword=$_GET['t3'];
$type=$_GET['t4'];  
$fullname=$_GET['t5']; 
$dob=$_GET['t6'];  
$email=$_GET['t7'];  
$s_ques=$_GET['t8']; 
$s_ans=$_GET['t9'];  
$address=$_GET['t10'];  
$country=$_GET['t11']; 
$city=$_GET['t12'];
$state=$_GET['t13'];

mysqli_query($dbc,"update login set password='$password',cpassword='$cpassword',type='$type',fullname='$fullname',dob='$dob',email='$email',s_ques='$s_ques',s_ans='$s_ans',address='$address',country='$country',city='$city',state='$state' where username='$username'");
echo"<h1> Record update";


?>

