

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
.style3 {font-size: 18px}
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
    <h1>Main Menu</h1>
	<ul id="submenu">
	<li>
	  <ul>
	    <li> <a href="student_login.php">Sign - In (Student) </a> </li> <br />
	    <li><a href="admin_login.php">Sign - In (Admin) </a> </li> 
		<li><a href="cust_signup.php">View Today's Time Table </a> </li>
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
   
    <div class="pic"><img src="images/pic.jpg" width="150" /></div>
     <h2 class="style3">Welcome to LNMIIT Bus Management System </h2>
      
	  <form name="input"  method="get" action="login.php">
<table border="0">

<tr>

<td>Username:</td>
<td>
<input type="text" name="usr" />
</td>
</tr>
<tr>
<td>Password: </td>
<td>
<input type="password" name="pwd" />
</td>
</tr>
<tr>
<td>Category:</td>	<td><input type="radio" name="userCategory" value="student">Student</td>
</tr>
<tr>
<tr>
<td></td>	<td><input type="radio" name="userCategory" value="admin">Administrator</td>
</tr>
<tr>
<td></td>	<td><input type="radio" name="userCategory" value="gate_staff">Gate Staff<td>
</tr>
<tr>

<tr>
<td colspan="2" align="center" class="sbmt" ><input type="submit" value="Submit"/></td>
<td colspan="2" align="center"  ><input type="reset" value="Reset"/></td>
</tr>
</table>
</form> 
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
