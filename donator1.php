
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NGO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0 ;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://localhost:8181/">Logo</a>
</div>

<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li class="active"><a href="/ngo/">Home</a></li>
<li><a href="/ngo/listevents.php">Events</a></li>
<li><a href="/ngo/listdonator.php">Donators</a></li>
<li><a href="/ngo/contact.php">Contact Us</a></li>
<li><a href="/ngo/aboutus.php">About Us</a></li>
<li><a href="/ngo/donator.php">Donate</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">

<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span>&nbsp;Sign UP</a></li>
</ul>
</div>
</div>
</nav>
<hr>
<p>
<p> <p>
<p>
<hr>
<p>
<p> <p>
<p>
<center><h3>Donations</h3>

<?php
include'dbconnect.php';

		
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];
	$g=$_POST['t7'];
	$h=$_POST['t8'];
	
	
	
	
	mysql_query("insert into donator values('$a','$b','$c','$d','$e','$f','$g','$h')");
echo mysql_error();
echo "<h1> Payment Done! </h1>";

?>