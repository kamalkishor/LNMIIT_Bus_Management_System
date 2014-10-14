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




<body style="text-align: center; font-family: Calibri; font-size: 20px; color: #003; font-weight: bold;">

<!-- introducing table for the display of welcome statement with the name of student -->
<p> </p>
<p> </p>
<p> </p>
<p style="color: #000">Your Booking History:</p>
<!-- table to display the User's Booking History-->

  
   
      <?php
  // establishing connection  
$con = mysql_connect("127.0.0.1","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// selecting the database
mysql_select_db("lbms", $con);
// query to select all the booking history of the user from this database that has all the booking history of LBMS
$result = mysql_query("SELECT * FROM booking_history WHERE userid= '$userid' ;");

echo "<table  border='3'>";

echo "<tr>"."<td width='50px' style='color: #000'>"."Booking ID"."</td>"."<td style='color: #000' width='100px'>"."Date "."</td>"."<td style='color: #000' width='60px'>"."Time of Journey"."</td>"."<td style='color: #000' width='60px'>"."Time of Booking"."<td style='color: #000' width='50px'>"."Select"."</td>"."</tr>" ;
	?>
	<form method=POST action = cancel.php>
	<?php
while($row=mysql_fetch_array($result))
{
$booking_id=$row["booking_id"];
$date=$row["date"];
$time_journey=$row["time_journey"];
$time_booking=$row["time_booking"];


echo "<tr>"."<td style='color: #000' width='150px'>"."$booking_id"."</td>"."<td width='50px' style='color: #000'>"."$date"."</td>"."<td style='color: #000' width='100px'>"."$time_journey"."</td>"."<td style='color: #000' width='100px'>"."$time_booking"."<td style='color: #000' width='50px'>"."<input type=radio name=abcd value=$booking_id>"."</td>"."</tr>" ;

	
	}
	
	

?>
	   
  </tr>
  <td>
     <input type="submit"  align="center" value="Cancel" />
  </td>
</table>
	

</form>
	




<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    <!-- end:mainContent --> 
    
    
    
<br class="clearfloat">

<div id="footer">
     <p> 
	 <a href="student_homepage.php">Home</a>
	
	</br> </br> © 2013 - LBMS </p>
</div>
</div>
<!-- end:container -->



</body>
</html>