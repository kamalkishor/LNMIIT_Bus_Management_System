<?php
 
?>
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
	    <li><a href="bus_details.php">Bus Details</a></li>
		<li><a href="GsendMsgToAdmin.php">Message to Admin</a></li>
		<li><a href="displayMsg.php">Display Message </a> </li> 
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
     
	 
	 <h2 style="text-align:left" font face= "monotype cursiva" size ="7"> <u>Send Message</u></h2> 

<table border='1'>

<form action="GpostMsg.php" method="get">
<tr>
<td>To:</td> <td><input type="text" name="sub" /></td>
</tr>
<tr>
<td>Message:</td> <td><textarea rows="10" cols="30" name="msg">
Post your message.
</textarea></td>

</tr>
<td><input type="submit" align = "center"  /></td>

</table>

</form>
  </div>
    <!-- end:mainContent --> 
    
    
    
<br class="clearfloat">


<div id="footer">
   <p> 
	 <a href="gate_staff_homepage.php">Home</a>
	
	</br></br> © 2013 - LBMS </p>
</div>
</div>
<!-- end:container -->


</body>
</html>

