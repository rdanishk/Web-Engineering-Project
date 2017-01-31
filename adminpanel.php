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
<script type="text/javascript" src="e_atend.js"></script>
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
  <div id="header" class="container">
    <div id="logo">
      <h1><a href="home.html">GGWP Travel Agency</a></h1>
</div>
    <div id="menu" style="position:absolute; right:120px; top:29px;">
      <h3>Welcome to Admin Panel !</h3>
    </div>
  </div>
</div>

<!--admin work here -->
<div id="header-featured" style="background-image:url(images/chase.jpg);"> 
<div id="payWithin" style="position:relative; width:950px;">
<form method="post" enctype="multipart/form-data">
<br/>
    <input type="file" name="image" />
    <br/><br/>
    <input type="submit" name="sumit" value="Upload" />
</form>
<?php
    if(isset($_POST['sumit']))
    {
        if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
        {
            echo "Please select an image.";
        }
        else
        {
            $image= addslashes($_FILES['image']['tmp_name']);
            $name= addslashes($_FILES['image']['name']);
            $image= file_get_contents($image);
            $image= base64_encode($image);
            saveimage($name,$image);
        }
    }
    function saveimage($name,$image)
    {
//        $con = mysql_connect("localhost","root","");
		$con = mysqli_connect("localhost", "root", "", "agency");
        $qry="insert into images (name,image) values ('$name','$image')";
        $result=mysqli_query($con, $qry);
        if($result)
        {
            echo "<br/>Image uploaded.";
        }
        else
        {
            echo "<br/>Image not uploaded.";
        }
    }
?>
</div>
</div>
<!-- till here -->
<div id="copyright" class="container">
  <p>&copy; Danish Khalid. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by Rehan Khan</a>.</p>
</div>
</body>
</html>