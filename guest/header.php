
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <a class="navbar-brand" href="#">NGO</a>
</div>

<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li class="active"><a href="http://localhost/ngo/guest/guest.php">Home</a></li>

    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Details <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li> <a href="/ngo/guest/viewdetail.php">View NGO Details</a></li>
               </ul>
      </li>
   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View-Facilities <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li> <a href="/ngo/guest/facilitychild1.php">For Childrens</a></li>
          <li><a href="/ngo/guest/facilityold1.php">For Old Persons</a></li>
          </ul>
      </li>
      <li><a href="/ngo/guest/complain.php">Suggest/Complaints</a></li>
    <li><a href="/ngo/guest/viewperson.php">View-Members</a></li>
   <li><a href="/ngo/guest/listevents.php">Events-List</a></li>

  </ul>
<ul class="nav navbar-nav navbar-right">

<li><a href="http://localhost/ngo"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Logout</a></li>
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


<h1>Welcome </h1>

