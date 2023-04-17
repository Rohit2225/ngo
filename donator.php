
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

<body>
<div id="middle_1" style="margin-left:-50px">
<br />
<h1 align="center" class="color">Donator</h1>
<style>
th{width:250px;}</style>
<form action="donator1.php" method="post" name="f" id="f" >
<table   align=center>
<tr>
 <th><input  type=radio  name=s1 id=s1  value="20000" onclick="show(this.form)">Rs. 20,000 can provide Library Kits and reading material to create a reading habit and improve learning levels.</th><th><input type=radio  name=s1 value="50000"  id=s2 onclick="show1(this.form)">Rs 5,000 can provide Sports Kit for children in school wherein children will have access to playing material for their overall development.</th></tr>
</table>






<table align="center" class="color">
<tr>
<td>Support to NGO</td><td><select name="t1"><option>Uddan</option> </select></td></tr>
<tr>
<td>Donation</td><td><input type="radio" name="t2">Credit card<input type="radio" name="t2">Debit Card</td></tr>
<tr>
<td>Amount</td><td><input type="text" name="t3"></td></tr>
<tr>
<td>Card no.</td><td><input type="text" name="t4"></td></tr>
<tr>
<td>Date</td><td><input type="date" name="t5"></td></tr>
<tr>
<td>Contact</td><td><input type="text" name="t6"></td></tr>
<tr>
<td>Name</td><td><input type="text" name="t7"></td></tr>
<tr>
<td>Email</td><td><input type="text" name="t8"></td></tr>
<tr>
<td><input type="submit" value="submit" /></td><td><input type="reset" value="reset" /></td>
</tr>
</table>
</form>
</div>
<hr>
<?php
include'footer.php';
?>