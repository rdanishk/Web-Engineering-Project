<?php

$func= $_GET['func']?$_GET['func']:$_POST['func'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "agency";

$conn = new mysqli($servername, $username, $password, $database);
if($conn -> connect_error)
	die("Connection failed: " . $conn->connect_error);
//echo ("Connection Successful");

////////////////////////////////////////////////////////////////////////////////

if($func=="insert")
{
 	$username = $_GET["username"];
 	$password = $_GET["password"];
 	$flyingfrom = $_GET["from"];
	$flyingto = $_GET["to"];
	$departure = $_GET["departure"];
	$arrival = $_GET["arrival"];
	$seat = $_GET["seat"];
	
	$query = "INSERT INTO `bookings`(`Username`, `Password`, `FlyingFrom`, `FlyingTo`, `Departure`, `Arrival`, `Class`) VALUES ('$username', '$password', '$flyingfrom', '$flyingto', '$departure', '$arrival', '$seat')";
		 
	$result = $conn->query($query);
		
	if($result)
		echo "Record has been Succesfully added!";
	else
		echo "Query Incorrect";	
		
	exit;
}
////////////////////////////////////////////////////////////////////////////////

if($func == "comment")
{
	$name = $_GET["name"];
	$comment = $_GET["comment"];
	$query = "INSERT INTO `comments`(`Name`, `Comment`) VALUES ('$name', '$comment');";
	$result = $conn -> query($query);
	if(!$result)
	{
		echo "bad";
	}
	else
	{
		echo "good";
	}
	exit;
}

////////////////////////////////////////////////////////////////////////////////
if($func == "members")
{
	$admin = $_GET["name"];
	$key = $_GET["pass"];
	$query = "SELECT * FROM `admins` WHERE Admin = '$admin' AND Password = '$key';";
	$result = $conn->query($query);
//	$result = mysqli_query($conn, $query, MYSQLI_USE_RESULT);
//	$rows = mysql_num_rows($result);
	$check = $result->fetch_assoc();
	if($check == null)
	{
		echo 'Incorrect Username/Password';
	}
	else
	{
		echo 'Logged In';
	}
	exit;
}
////////////////////////////////////////////////////////////////////////////////
if($func == "search")
{
	$login = $_GET["login"];
	$pass = $_GET["password"];
	$searchQuery = "SELECT `FlyingFrom`, `FlyingTo`, `Departure`, `Arrival`, `Class` FROM `bookings` WHERE Username = '$login' AND Password = '$pass';";
	$result = $conn->query($searchQuery);
//	echo ($result);
	if(!$result)
	{
		echo '<p>No Record Found</p>'; // style="background-color:white"
	}
	else
	{
		echo '<div>'; // style="background-color:white"
		echo '<p>Record Found: </p>'; //style="background-color:white"
		echo '<ul>';
		while ($row = $result->fetch_assoc()) 
		{
     	   echo '<li>' . 'Flying From: ' . $row['FlyingFrom'] . '</li>' . "<br>";
     	   echo '<li>' . 'Flying To: ' . $row['FlyingTo'] . '</li>' . "<br>";
     	   echo '<li>' . 'Departure: ' . $row['Departure'] . '</li>' . "<br>";
     	   echo '<li>' . 'Arrival: ' . $row['Arrival'] . '</li>' . "<br>";
     	   echo '<li>' . 'Seating Arrangement: ' . $row['Class'] . '</li>' . "<br>";
    	}
		echo '</div>';
	}
	exit;
}

//////////////////////////////////////////////////////////////////////////////
if($func=="update")
{
  $e_workshop=$_GET["e_workshop"];
 $date=$_GET["date"];
 $role=$_GET["role"];
 $organized=$_GET["organized"];
 $country=$_GET["country"];
 $at_id=$_GET["at_id"];
 
  $sql = "update `tbl_attend_event` set `e_workshop`='$e_workshop', `date`='$date',`role`='$role' ,`organized`='$organized' ,`country`='$country'  where `at_id`='$at_id'";
mysql_query($sql); 
 //getall();
 echo "Record has been updated ";
 }


//////////////////////////////////////////edit//////////////////////////////////

 

if($func=="getall")
{
	
	print getall($user_id);}
  
function getall($user_id){

$sql="SELECT * FROM tbl_attend_event where user_id='$user_id'";
 	 $qresult = mysql_query($sql);
$count=1;
$rowss=mysql_num_rows($qresult);
	if($rowss==0){
		echo "";
		exit;
	}
	else{

$count=1;


	print '<table class="table table-striped table-bordered bootstrap-datatable datatable">
		   <tr>
	  	   <th style="width: 150px;" aria-label="Actions: activate to sort column ascending">Sr no</th> 
		   
		   <th style="width: 150px;" aria-label="Actions: activate to sort column ascending">Event Workshop/Conference/Training</th>
		   <th style="width: 120px;" aria-label="Actions: activate to sort column ascending">Role (Speaker Attendee e.t.c)</th>
		   <th style="width: 120px;" aria-label="Actions: activate to sort column ascending">Organizing body</th>
		  <th style="width: 120px;" aria-label="Actions: activate to sort column ascending">Date</th>
		  <th style="width: 120px;" aria-label="Actions: activate to sort column ascending">Country</th>
		    <th style="width: 120px;" aria-label="Actions: activate to sort column ascending">Action</th>
  
	 </tr>';
$i=1;
	while($line = mysql_fetch_array( $qresult ))
	{
	
	
	    print '<td>'.$i++.'</td>';
		print '<td>'.$line['e_workshop'].'</td>';
		print '<td> '.$line['role'].' </td>';
		print '<td> '.$line['organized'].' </td>';
		print '<td> '.$line['date'].' </td>';
		print '<td> '.$line['country'].' </td>';
		

	//<a class="btn btn-info" href="#" onclick="get_rec(\''.urldecode($line['c_id']).'\',\''.urldecode($line['item_name']).'\',\''.urldecode($line['quantity']).'\')"><i class="icon-trash icon-white"></i>Edit</a>	
	print '<td align="center">
	
	<a class="btn btn-info" href="#" onclick="edit(\''.urldecode($line['at_id']).'\',\''.urldecode($line['e_workshop']).'\',\''.urldecode($line['role']).'\',\''.urldecode($line['organized']).'\',\''.urldecode($line['date']).'\',\''.urldecode($line['country']).'\')"><i class="icon-trash icon-white"></i>Edit</a>

  </td>';
print '<td>
			<a class="btn btn-danger" href="#" onclick="delete_i(\''.urldecode($line['at_id']).'\')"><i class="icon-trash icon-white"></i>Delete</a> </td>';
			
		print '</tr>';
		
		
		 
	}        
	print '<tr  align="center">
	       <td colspan="2">&nbsp;</td>
		   <td style="width: 300px;" aria-label="Actions: activate to sort column ascending"></td>
		 <td></td> <td></td><td></td><td></td><td></td>
		   </tr>';
}   
		   //echo pagination($statement,$limit,$page);


}

if($func=="delete_item")
{
$at_id=$_GET["at_id"];



$sql = "delete from tbl_attend_event where at_id='$at_id'";
mysql_query($sql);


 echo "sucessfully deleted!";
 } 
//====================================================================================================================







 
  ?>