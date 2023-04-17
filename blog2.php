

<?php
include"header.php";



$img=trim($_FILES['mm']['name']);

$image="bimage/";

if(move_uploaded_file($_FILES['mm']['tmp_name'],$image.$img))
{

   echo"<h1>Upload";
}
else
{
  echo"<h1>Didi not  upload";
}


$user1=$_POST["b1"];
$title=$_POST["t2"];
$comment=$_POST["t3"];

$date=$_POST['t4'];


include("dbconnect.php");

$qry = "insert into blog(username,title,comment,date,image) values('$user1','$title','$comment','$date','$img')";
$result = mysql_query($qry);

echo mysql_error();

echo "comment sent successfully";


?>








