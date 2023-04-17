<?php
include"dbconnect.php";

$a=$_POST['username'];

$b=$_POST['age'];

$c=$_POST['s1'];
$d=$_POST['dob'];
$e=$_POST['address'];
$f=$_POST['country'];
$g=$_POST['state'];
$h=$_POST['city'];
$k11=$_POST['k11'];
$image=trim($_FILES['mm']['name']);
$image1="images/";

if(move_uploaded_file($_FILES['mm']['tmp_name'],$image1.$image))
{
  echo"<h1>Image Upload";
}
else
echo"<h1>Not upload";

mysqli_query($dbc,"insert into persons values('$a','$b','$c','$d','$e','$f','$g','$h','$image','$k11')");

echo mysql_error();
echo"<h1>Record Update";
?>
