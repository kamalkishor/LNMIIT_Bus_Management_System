

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
   
   
     <h2 class="style3">Please select your Origin and Destination</h2>
      <p class="style2"></p>
      
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
	
	$flight_query=("SELECT flight.from FROM flight GROUP BY flight.from;");
	$result=mysqli_query($SQL,$flight_query);
	$bc=mysqli_fetch_array($result);
	
?>
<form id="form1" name="form1" method="post" action="flight_details.php">
  <p>
    <label style="color: #000" for="from">From</label> 
	<select name ="from" size="1" id = "from">
	<?php
	do{
	?>
	<option value = "<?php echo $bc['from']?>"><?php echo $bc['from']?></option>
	<?php }while($bc=mysqli_fetch_array($result)) ?></select>
	
  </p>
  
  <?php
  $flight_query=("SELECT flight.to FROM flight GROUP BY flight.to;");
	$result=mysqli_query($SQL,$flight_query);
	$bc=mysqli_fetch_array($result);
	?>
  <p>
     <label style="color: #000" for="to">To</label> 
	<select name ="to" size="1" id = "to">
	<?php
	do{
	?>
	<option value = "<?php echo $bc['to']?>"><?php echo $bc['to']?></option>
	<?php }while($bc=mysqli_fetch_array($result)) ?></select>
  </p>
  <p>
     <input type="submit" name="ci_log_in" id="ci_log_in" value="Submit" />
  </p>
</form>
<p>&nbsp;</p>

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

