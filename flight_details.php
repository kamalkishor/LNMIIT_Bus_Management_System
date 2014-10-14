

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
   
   
<div id="mainContent">
   
    
<?php
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
echo "<p style='text-align: right; font-size: 25px; color: #F00;'><a href='index.php'>Logout</a></p>";
$flightno = "";
$class = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flight Search Results</title>
<style type="text/css">
.brightRed {
	color: #F00;
}
</style>
</head>

<body>




    <?php
	
	
	
	
	
	$i=2;
		
	
	 // establishing connection  
$con = mysql_connect("127.0.0.1","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// selecting the database
mysql_select_db("travel_triangle", $con);


	
	$from=$_POST['from'];
	$to=$_POST['to'];
	
	$result = mysql_query("SELECT * FROM flight WHERE flight.from = '$from' AND flight.to = '$to';");
	$count = mysql_num_rows($result);
	
	if($count=='0')
	echo 'There are no flights';
	else
	{
		echo "<table  border='3'>";
		echo "<td>"."<form id='form1' name='form1' method='post' action='flight_book.php'>".
    "<input name='hiddenField' type='hidden' id='hiddenField' value='flightno' />"."<input name='hiddenField' type='hidden' id='hiddenField' value='hm' />"."<label style='color: #000;'>"."<input type='hidden' name='asd' value='1' id='RadioGroup1_0' />"."</label>"."<br />"."<label style='color: #000;'>"."<input type='hidden' name='asd' value='0' id='RadioGroup1_1' />".""."</label>"."<br />"."<input name='asd1' type='hidden' value='Submit' />"."</form>"."</td>"."<td style='color: #000' width='100px' align='center'>"."Flight No."."</td>"."<td style='color: #000;' width='50px' align='center'>"."Origin"."</td>"."<td  style='color: #000;'width='100px' align='center'>"."Destination"."</td>"."<td style='color: #000' width='10px' align='center'>"."Class"."</td>"."<td style='color: #000' width='100px' align='center'>"."Availability"."</td>"."<td style='color: #000;' width='100px' align='center'>"."Rates/Seat"."</td></tr>";
			
	while($row=mysql_fetch_array($result))
	{
	

	
	
	$flightno=$row["flightno"];
	
	$class=$row["class"];
	
	$to=$row["to"];
	
	$from=$row["from"];
	
	$seats_avail=$row["seats_avail"];
	if($seats_avail==0)
	continue;
	$price=$row["price"];

	
	
	echo "<td>"."<form id='form1' name='form1' method='post' action='flight_book.php'>"."<input name='flightno' type='hidden' id='flightno' value='$flightno' />"."<input name='class' type='hidden' id='class' value='$class' />"."<p>"."<label style='color: #000' for='asdasd'>"."    Please Select No. of Seats."."</label>"."<input type='text' name='seats' id='seats' />"."</p>"."<label style='color: #000;'>"."<input name='asd1' type='submit' value='Book' />"."</form>"."</td>"."<td style='color: #000;' width='100px'align='center'>"."$flightno"."</td>"."<td style='color: #000;'width='100px' align='center'>"."$from"."</td>"."<td style='color: #000;' width='100px' align='center'>"."$to"."</td>"."<td style='color: #000;' width='100px' align='center'>"."$class"."</td>"."<td style='color: #000;' width='100px' align='center'>"."$seats_avail"."</td>"."<td style='color: #000;' width='100px' align='center'>"."$price"."</td></tr>";

}
	
	}
	?>
    </td>
  </tr>

<p style="text-align: left; font-size: 22px; color: #F00;"><a href="Flights.php">Click here to Go Back</a></p>
    <!-- end:mainContent -->
    <div id="footer">
    <p>© 2012 - Travel Triangle </p>
</div>
</div>
<!-- end:container -->


</body>
</html>
