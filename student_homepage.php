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
	
	
session_start();
$userid=$_SESSION['name'];

$query = "SELECT * FROM student_details WHERE userid = '$userid';";

$res = mysqli_query($SQL,$query);
// to get one row into the varible $e
	$e = mysqli_fetch_array($res);
	// saving all the values into variables
	$name = $e["name"];
	$sex = $e["sex"];
	
	
	
?>

    
	<?php
	
	
// establishing the sql connection
$SQL = mysqli_connect("127.0.0.1","root","","lbms");
	if(mysqli_connect_errno())
	{
		printf("connection error!!!...plz try again later");
		exit();
	}
	
	// getting the course instructor id from the session created there

// query to get the name of the course instructor 
$query = "SELECT * FROM student_details WHERE userid = '$userid';";

$res = mysqli_query($SQL,$query);
// to get one row into the varible $e
	$e = mysqli_fetch_array($res);
	// saving all the values into variables
	$name = $e["name"];
	
	$sex = $e["sex"];
	
	
	
?>
    <!-- mainContent --> 
    <div id="mainContent">
   
    <div class="pic"></div>
    
	
  </div>

<body style="text-align: center; font-family: Calibri; font-size: 12px; color: #003; font-weight: bold;">

<!-- introducing table for the display of welcome statement with the name of student -->
<table width="200" border="0">
  <tr>
  <!-- php script using the value of variable form above and displaying the welcome statement -->
    <td height="97" style="color: #000"><p>Welcome  <?php if ($sex=="male") echo "Mr. "; else echo "Miss. "; echo "$name" ?></p></td>
    
  </tr>
</table>   
    <!-- end:mainContent --> 
    
    
   
<br class="clearfloat">

<div id="footer">
   <p>© 2013 - LBMS </p>  
</div>
</div>
<!-- end:container -->


</body>
</html>