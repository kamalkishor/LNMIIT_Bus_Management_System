<!<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LNMIIT Bus Managment</title>
<meta name="Description" content="Model blog" />
<meta name="#" content="#" />

<style type="text/css"> 
<!-- 
@import"style.css";
--> 
</style>

</head>

<body class="wrapper">

<!-- container -->
<div id="container">
   
    <!-- header -->
    <div id="header">
    <p class="tollfree">LBMS</p>
    </div>
    <!-- end:header -->

    <!-- sidebar1 --> 
     <div id="sidebar1">
    <div class="topbox">
    <div class="contbox">
    <div class="cont">
    <h1>&nbsp;</h1>
	<ul id="submenu">
	<li>
	  <ul>
	    <li><a href="booking_history.php">Booking History</a></li> 
		<li><a href="view_profile.php">My Profile</a></li>
		    <li><a href="seat_book.php">Reserve a Seat</a></li>
			<li><a href="SsendMsgToAdmin.php"> Message to Admin</a></li>
			<li><a href="displayMsgStudent.php"> Display Message</a></li>
			<li><a href="view_tt.php">View Bus Time Table</a></li>
			<li><a href="index.php">Logout</a></li>
	    
	  </ul>
	</li>
	</ul>
    </div>
    
    </div></div>
    <div class="fotbox"></div>
    
  </div>
    <!-- end:sidebar1 -->
  
 
    <?php
// establishing the sql connection
$SQL = mysqli_connect("127.0.0.1","root","","lbms");
	if(mysqli_connect_errno())
	{
		printf("connection error!!!...plz try again later");
		exit();
	}
	
	// getting the course instructor id from the session created there
session_start();
$userid=$_SESSION['name'];
// query to get the name of the course instructor 

	
?>
    <!-- mainContent --> 
    <div id="mainContent">
   
    <div class="pic"></div>
     <h2>Welcome 
	 <?php //if ($sex=="male") echo "Mr. "; else echo "Miss. "; echo "$name" ?> </h2>
  </div>
    <!-- end:mainContent --> 
    
<body style="text-align: center; font-family: Calibri; font-size: 20px; color: #003; font-weight: bold;">
 <p style="color: #000">Your Reservation is Successfull</p>
 <?php

$userid=$_SESSION['name'];
// query to get the name of the course instructor 

mysqli_query($SQL,"UPDATE student_details SET trips_left=trips_left-1
WHERE userid = '$userid'");

$date = date("Y/m/d");

	
 //echo $_POST['abc']; 
 $bus = $_POST['abc'];
 //echo $bus;
 
 $time = substr($bus,0,8);
 echo 'Bus Time:  ';
 echo $time;
echo "   And"; 
echo ' Source:  ';
 $sourceid = substr($bus,8,9);
 if($sourceid == "I")
 $source = 'Institute';
 else
 $source = 'Ajmeri_gate';
 echo $source;
 
 mysqli_query($SQL,"INSERT INTO booking_history (userid,source,date,time_booking,time_journey)
VALUES ('$userid','$source','$date',Now(),'$time')");
 
 $SQL = mysqli_connect("127.0.0.1","root","","lbms");
	if(mysqli_connect_errno())
	{
		printf("connection error!!!...plz try again later");
		exit();
	}
	
	// getting the course instructor id from the session created there

$userid=$_SESSION['name'];
// query to get the name of the course instructor 
$query = "SELECT * FROM bus_details WHERE source = '$source' AND date = '$date' AND time = '$time';";

$res = mysqli_query($SQL,$query);
// to get one row into the varible $e
	$e = mysqli_fetch_array($res);
	// saving all the values into variables 
	if($e==NULL)
	mysqli_query($SQL,"INSERT INTO bus_details (date,time,source,seat_vacant)
VALUES ('$date','$time','$source',30)");
	else
	mysqli_query($SQL,"UPDATE bus_details SET seat_vacant=seat_vacant-1
WHERE source = '$source' AND date = '$date' AND time = '$time'");
	
 

?>	 
<br class="clearfloat">

<div id="footer">
    <p> 
	 <a href="student_homepage.php">Home</a>
	
	</br> © 2013 - LBMS </p>
</div>
</div>
<!-- end:container -->


</body>
</html>