<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel Agency</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<style type="text/css">
  #xplaces {
    height:400px;
    width: inherit;
    background-position: center;
    background-size: cover;
	background-image:url(images/banner3.jpg);
  }

</style>
</head>
<body>
<div id="header-wrapper">
  <div id="header" class="container">
    <div id="logo">
      <h1><a href="#">GGWP Travel Agency</a></h1>
</div>
    <div id="menu">
      <ul>
        <li>
        <a href="home.html" accesskey="1" title="">Home</a></li>
        <li class="current_page_item"><a href="trips.php" accesskey="2" title="">Trips</a></li>
        <li><a href="about.html" accesskey="3" title="">About Us</a></li>
        <li><a href="clients.html" accesskey="4" title="">Our Clients</a></li>
        <li><a href="contact.html" accesskey="5" title="">Contact Us</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="xplaces">
<div style="padding-top:130px; position:absolute; left:80px;">
    <div style="width:250px; float:left; padding: 10px;"> <!-- FRANCE -->
    <?php
		$con = mysqli_connect("localhost","root","", "agency");
		$qry="select * from images where Id = '4'; ";
		$result = mysqli_query($con, $qry);
		while($row = mysqli_fetch_array($result))
		{
			echo '<img class="flags" width="250px" src="data:image;base64,'.$row[2].' "> ';
		}
		$con -> close();
	?>
    
    <p style="color: White;" align="center">France</p>
	</div>
    
    <div style="width:250px; padding: 10px; float:left;"> <!-- JAPAN -->
    <?php
		$con = mysqli_connect("localhost","root","", "agency");
		$qry="select * from images where Id = '5'; ";
		$result = mysqli_query($con, $qry);
		while($row = mysqli_fetch_array($result))
		{
			echo '<img class="flags" width="250px" src="data:image;base64,'.$row[2].' "> ';
		}
		$con -> close();
	?>
    <p style="color: White;" align="center">Japan</p>
	</div>

    <div style="width:250px; padding: 10px; float:left;"> <!-- Mexico -->
    <?php
		$con = mysqli_connect("localhost","root","", "agency");
		$qry="select * from images where Id = '6'; ";
		$result = mysqli_query($con, $qry);
		while($row = mysqli_fetch_array($result))
		{
			echo '<img class="flags" width="250px" src="data:image;base64,'.$row[2].' "> ';
		}
		$con -> close();
	?>
    <p style="color: White;" align="center">Mexico</p>
	</div>
    
    <div style="width:250px; padding: 10px; float:left;"> <!-- EGYPT -->
    <?php
		$con = mysqli_connect("localhost","root","", "agency");
		$qry="select * from images where Id = '7'; ";
		$result = mysqli_query($con, $qry);
		while($row = mysqli_fetch_array($result))
		{
			echo '<img class="flags" width="250px" src="data:image;base64,'.$row[2].' "> ';
		}
		$con -> close();
	?>
    <p style="color: White;" align="center">Egypt</p>
	</div>
</div>
</div>

<div id="wrapper">
  <div id="featured-wrapper">
    <div id="featured" class="container">
      <div class="column1"> <span class="icon icon-plane"></span>
        <div class="title">
          <h2>Book Air Tickets</h2>
        </div>
        <p>Search among 20.000 flights and more than 800 airlines and book online your next flight - Best available fares - Book Hotel, Rent-a-Car services.</p>
      </div>
      <div class="column2"> <span class="icon icon-legal"></span>
        <div class="title">
          <h2>Travel Insurance</h2>
        </div>
        <p>If you're traveling for business, studying abroad, or going on a trip with friends and family, you need travel insurance.</p>
      </div>
      <div class="column3"> <span class="icon icon-flag"></span>
        <div class="title">
          <h2>Things to do</h2>
        </div>
        <p>Search over a million flights, hotels, packages, and more...</p>
      </div>
      <div class="column4"> <span class="icon icon-wrench"></span>
        <div class="title">
          <h2>Cruise</h2>
        </div>
        <p>Cruise on the world's top cruise lines including Carnival, Royal Caribbean and Norwegian. On Expedia, you're guaranteed to find deals.</p>
      </div>
    </div>
  </div>
  <div id="extra" class="container">
    <h2>We offer a complete travel management !</h2>
    <span>In other words everything from planning to execution of tours.</span> 
    <p>Whether you are a large <strong> corporate client </strong> demanding custom travel services or an individual traveler looking for a weekend getaway, you will always receive our professional and personal attention. </p>

    <a href="trips.php" class="button">Lets GO !</a> </div>
</div>

<div id="copyright" class="container">
  <p>&copy; Danish Khalid. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by Rehan Khan</a>.</p>
</div>
</body>
</html>
