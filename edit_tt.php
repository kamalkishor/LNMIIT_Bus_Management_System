

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
    <p class="tollfree">Travel Triangle</p>
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
		<li><a href="admin_homepage.php">Home</a></li>
	    <li><a href="student_booking.php">Booking History</a></li> 
		<li><a href="bus_details.php">Bus Details</a></li>
		<li><a href="AsendMsg.php">Send Message</a> </li> 
		<li><a href="edit_tt.php">Edit Time Table</a></li>
		<li><a href="displayMsgAdmin.php">Display Message </a> </li>   
		<li><a href="logout.php">Log Out </a> </li> 
	  </ul>
	</li>
	</ul>
    </div>
    
    </div></div>
    <div class="fotbox"></div>
    </div>
    <!-- end:header -->

    <!-- sidebar1 -->
    <!-- end:sidebar1 -->
    <!-- mainContent -->
<div id="mainContent">
   
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking History</title>
</head>

<body style="text-align: center; font-family: Calibri; font-size: 12px; color: #003; font-weight: bold;">
<p style="text-align: right; font-size: 25px; color: #F00;">
<!-- introducing table for the display of welcome statement with the name of student -->
<table width="200" border="0">
  <tr>
  <!-- php script using the value of variable form above and displaying the welcome statement -->
    <td height="97" style="color: #000"><p>Welcome</p></td>
    
  </tr>
</table>
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
$result = mysql_query("SELECT * FROM weekend;"); ?>
<form action="klm.php" method=POST>
<?php
echo "<table  border='3'>";

echo "<tr>"."<td width='50px' style='color: #000'>"."Serial No."."</td>"."<td style='color: #000' width='200px'>"."Institute"."</td>"."<td style='color: #000' width='60px'>"."Ajmeri Gate"."</td>"."</tr>" ;
	
while($row=mysql_fetch_array($result))
{
$S_no=$row["S_no"];
$Institute=$row["Institute"];
$Ajmeri_gate=$row["Ajmeri_gate"];
$timei=$S_no."I";
$timea=$S_no."A";

echo "<tr>"."<td style='color: #000' width='150px'>"."$S_no"."</td>"."<td width='50px' style='color: #000'>"."$Institute"."<input type=text name=$timei value=$Institute></td>"."<td style='color: #000' width='200px'>"."$Ajmeri_gate"."<input type=text value=$Ajmeri_gate name=$timea></td>"."</tr>";

	
	}
	
	

?>
	
	
	
    &nbsp;</p></td>
  </tr>
</table>
<td   ><input type="submit"  align="center" value="Submit"/></td>

</form>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    <!-- end:mainContent --> 
    
    
    
<br class="clearfloat">

<div id="footer">
    <p>© 2013 - LBMS </p>
</div>
</div>
<!-- end:container -->



</body>
</html>