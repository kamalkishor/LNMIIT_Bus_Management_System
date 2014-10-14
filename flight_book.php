

<!<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>travel Site</title>
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
    <!-- end:sidebar1 -->
    <!-- mainContent -->
<div id="mainContent">
   
    
      <p class="style2"><?php
// establishing the sql connection
$SQL = mysqli_connect("127.0.0.1","root","","travel_triangle");
	if(mysqli_connect_errno())
	{
		printf("connection error!!!...plz try again later");
		exit();
	}
	
session_start();
$userid=$_SESSION['cust_id'];
 
$query = "SELECT * FROM customer WHERE userid = '$userid';";

$res = mysqli_query($SQL,$query);
// to get one row into the varible $e
	$e = mysqli_fetch_array($res);
	// saving all the values into variables
	$name = $e["name"];
	$add = $e["add"];
	$sex = $e["sex"];
	$dob = $e["dob"];
	$mobno = $e["mobno"];
	
	
?>

<?php
	 // establishing connection  
$con = mysql_connect("127.0.0.1","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// selecting the database
mysql_select_db("travel_triangle", $con);


	
	$flightno=$_POST['flightno'];
	$class=$_POST['class'];
	$seatsasked=$_POST['seats'];

	
	$result = mysql_query("SELECT * FROM flight WHERE flight.flightno = '$flightno' AND flight.class='$class';");
	
	$row=mysql_fetch_array($result);
	
	$flightno=$row["flightno"];
	
	$class=$row["class"];
	
	$to=$row["to"];
	
	$from=$row["from"];
	
	$seats_avail=$row["seats_avail"];
	
	$price=$row["price"];
	
	if($seatsasked>$seats_avail)
	{
	echo "<br />"."<br />"."The number of seats requested are more than the number of available seats..... "."<br />"." Please select a different Flight or decrease the number of seats...  "."<a href ='Flights.php'>"."Click here to Continue"."</a>"."</p>";
	exit();
	}
	else
	{
	$total=$price*$seatsasked;
	echo "The Details of the Booking are as Follows : <br />"."Flight Number : "."$flightno"."<br />"."Class of Travel : "."$class"."<br />"."Origin : "."$from"."<br />"."Destination : "."$to"."<br />"."<br />"."<br />"."Total Amount to Be Paid : 	"."$total"."<br />"."<br />"."<br />";

echo "The above mentioned ticket has been shipped to the following address......"."<br />"."$name"."<br />"."$add"."<br />";
	$final= $seats_avail-$seatsasked;
	$result = mysql_query("UPDATE flight SET seats_avail=$final WHERE flight.flightno = '$flightno' AND flight.class='$class';");
	
}
	
	
	?>
    </td>
  </tr>
</table>
<p style="text-align: left; font-size: 22px; color: #F00;"><a href="Flights.php">Click here to Go Back</a></p>


<body></p>
      
     
  </div>
    <!-- end:mainContent --> 
    
    
    
<br class="clearfloat">

<div id="footer">
    <p>© 2012 - Travel Triangle </p>
</div>
</div>
<!-- end:container -->




</body>
</html>
