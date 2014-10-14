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
	 <?php session_start(); echo $_SESSION['name']; ?> </h2>
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