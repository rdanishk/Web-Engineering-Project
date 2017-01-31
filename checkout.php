<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel Agency</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<style>
p
{
	display:inline;
}
</style>
<script type="text/javascript" src="e_atend.js"></script>
</head>
<body>
<div id="header-wrapper">
  <div id="header" class="container">
    <div id="logo">
      <h1><a href="#">GGWP Travel Agency</a></h1>
</div>
    <div id="menuSpecific">
      <h2 style="position:relative; top: 1.2em;">
      <a href="home.html">Home</a>
      </h2>
    </div>
  </div>
</div>

<!-- PHP code here -->

<div id="tripPlan" style="background-image:url(images/banner4.jpg)">
<?php
$startCity = $_POST['origin'];
$endCity = $_POST['destination'];
$depDate = $_POST['departure'];
$arrDate = $_POST['arrival'];
$seat = $_POST['class'];
$booking = isset($_POST['hotel']);
$username = $_POST['username'];
$password = $_POST['pass'];
?>
    <div id="payWithin">
    <h2>Your Booking Details: </h2><br />
    <p>Flight from <p id="from"><?php echo $startCity ?></p> to <p id="to"><?php echo $endCity ?>.</p></p>
    <br />
	<p>Departure on: <p id="departure"><?php echo $depDate ?></p></p>
    <br />
	<p>Arrival on: <p id="arrival"><?php echo $arrDate ?></p></p>
    <br />
	<p>Seat: <p id="seat"><?php echo $seat ?></p></p>
    <br />
	<?php
	if($booking = null)
		echo "<p>You will have to find a hotel.</p>";
	if($booking)
		echo "<p>A hotel will also be booked for you.</p>";
	?>
    <br />
    <p>Your Login Details:</p>
    <br />
    <p>Login: </p><p id="login"><?php echo $username ?></p>
    <br />
	<p>Password: </p><p id="password"><?php echo $password ?></p>
    <br />
    <br />
    <input type="button" onclick="sub_form()" value="Confirm" />
    <div class="row-fluid">
 <div id="mesage" style="border:thick; font-size:12px; color:Black;"></div>
      </div>
    </div>
    
</div>

<!-- till here -->

<div id="copyright" class="container">
  <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>