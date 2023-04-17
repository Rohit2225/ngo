<?php 
$a=$_REQUEST["username"];
$b=$_REQUEST["password"];
include 'dbconnect.php';

  $result=mysqli_query ($dbc,"select * from login where username='$a' and password='$b'");
if(!($row=mysqli_fetch_row($result)))
  {
   include 'invalid.php';

}
else
{
$type=$row[3];
$_SESSION["uname"]=$a;
if($type=='admin')
  {

include 'admin/admin_main.php';

}

else if($type=='donator')
  {

include 'donator/payee.php';

}
else if($type=='guest')
  {

include 'guest/guest.php';

}
 


}
mysqli_close($dbc);

?>

