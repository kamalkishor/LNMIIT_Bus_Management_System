

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
.style2 {font-size: 16}
.style3 {font-size: 24px}
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
    <!-- mainContent -->
<div id="mainContent">
   
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking History</title>
</head>


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

<p style="color: #000">Bus Time Table for: <?php echo date("l"); ?></p>  
<!-- table to display the User's Booking History-->

  <tr>
    <td><p>
      <?php
  // establishing connection  
$con = mysql_connect("127.0.0.1","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("lbms", $con);
// selecting the database
// query to select all the booking history of the user from this database that has all the booking history of LBMS
if (date("l")== "Monday" || date("l")== "Tuesday" || date("l")== "Wednesday" || date("l")== "Thursday" || date("l")== "Friday")
$result = mysql_query("SELECT * FROM weekday;");
else
$result = mysql_query("SELECT * FROM weekend;"); 
echo "<table  border='3'>";

echo "<tr>"."<td width='50px' style='color: #000'>"."Serial No."."</td>"."<td style='color: #000' width='200px'>"."Institute"."</td>"."<td style='color: #000' width='60px'>"."Ajmeri Gate"."</td>"."</tr>" ;
	
while($row=mysql_fetch_array($result))
{
$S_no=$row["S_no"];
$Institute=$row["Institute"];
$Ajmeri_gate=$row["Ajmeri_gate"];


echo "<tr>"."<td style='color: #000' width='150px'>"."$S_no"."</td>"."<td width='50px' style='color: #000'>"."$Institute"."</td>"."<td style='color: #000' width='200px'>"."$Ajmeri_gate"."</td>"."</tr>";

	
	}
	
	

?>
	
	
	
    &nbsp;</p></td>
  </tr>
</table>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    <!-- end:mainContent --> 
    
    
    
<br class="clearfloat">

<div id="footer">
    <p> 
	 <a href="student_homepage.php">Home</a>
	
	</br></br> © 2013 - LBMS </p>
</div>
</div>
<!-- end:container -->



</body>
</html>