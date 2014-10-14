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
	    <li><a href="student_booking.php">Booking History</a></li> 
		<li><a href="bus_details.php">Bus Details</a></li>
		<li><a href="AsendMsg.php">Send Message </a> </li> 
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
    <!-- end:sidebar1 -->
    
   
    <!-- mainContent --> 
    <div id="mainContent">
   
    <div class="pic"></div>
     <h2>Welcome 
	 <?php //if ($sex=="male") echo "Mr. "; else echo "Miss. "; echo "$name" ?> </h2>
	 <?php

$timei_1=$_POST['1I'];
$timea_1=$_POST['1A'];
$timei_2=$_POST['2I'];
$timea_2=$_POST['2A'];
$timei_3=$_POST['3I'];
$timea_3=$_POST['3A'];
$timei_4=$_POST['4I'];
$timea_4=$_POST['4A'];
$timei_5=$_POST['5I'];
$timea_5=$_POST['5A'];
$timei_6=$_POST['6I'];
$timea_6=$_POST['6A'];
$timei_7=$_POST['7I'];
$timea_7=$_POST['7A'];


	$con = mysql_connect("localhost","root","");
	
	if(!$con)
	{
		die('could not connect: ' . mysql_error());
	}
			
	mysql_select_db("lbms",$con);
	$i=1;
	for($i=1;$i<=7;$i++)
	{
	
	//$sql = "UPDATE weekday SET Institute = \"".$timei."_".$i."\", Ajmeri_gate = \"".$timea."_".$i."\" WHERE S_no. = ".$i."";	
	
//$sql="UPDATE weekday SET Institute='".${'timei_'.$i}."',Ajmeri_gate='".${'timea_'.$i}."' WHERE S_no=".$i."";		
		
		//	$result = mysql_query($sql,$con);
		if (date("l")== "Monday" || date("l")== "Tuesday" || date("l")== "Wednesday" || date("l")== "Thursday" || date("l")== "Friday")
		{
			$sql="UPDATE weekday SET Institute='".${'timei_'.$i}."',Ajmeri_gate='".${'timea_'.$i}."' WHERE S_no=".$i."";
			$result = mysql_query($sql,$con);
		}
		else
		{
			$sql1="UPDATE weekend SET Institute='".${'timei_'.$i}."',Ajmeri_gate='".${'timea_'.$i}."' WHERE S_no=".$i."";
			$result1 = mysql_query($sql1,$con);
		}
	}
/*
echo $timei_1."_____".$timea_1."<br>";
echo $timei_2."_____".$timea_2."<br>";
echo $timei_3."_____".$timea_3."<br>";
*/

?>
  </div>
    <!-- end:mainContent --> 
    
    
    
<br class="clearfloat">

<div id="footer">
     <p>© 2013 - LBMS </p>
</div>
</div>
<!-- end:container -->


</body>
</html>