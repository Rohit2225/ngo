<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'../header.php';
?>
<div id="middle_1" style="margin-right:300px">
<br />

<?php
include'dbconnect.php';

	
	$date = $_POST["event_date"];
	$time = $_POST["event_time"];
	$name = $_POST["event_name"];
	$description = $_POST["event_description"];
	$address = $_POST["event_address"];
	$city = $_POST["event_city"];
	$duration = $_POST["event_duration"];
	$image=trim($_FILES['mm']['name']);
$image1="images/";

if(move_uploaded_file($_FILES['mm']['tmp_name'],$image1.$image))
{
  echo"<h1>Image Upload";
}
else
echo"<h1>Not upload";
	$sql = "INSERT INTO event(event_name,event_description,date,time,address,city_id,duration,image) VALUES('".$name."','".$description."','".$date."','".$time."','".$address."','".$city."','".$duration."','$image')";
	$result = mysqli_query($dbc,$sql);
	if($result==1){
		
	}
	else{
		echo "error..".$sql;
	}
?>
<h1 align="center" class="color">Event Added</h1>