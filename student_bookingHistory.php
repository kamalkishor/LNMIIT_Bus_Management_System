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
<link rel="stylesheet" type="text/css" href="CSS/spr.css">
<script>
function searchRecord()
{
			var obj1=document.forms["spr"]["userid"].value;
			
			if(obj1==''){
			alert('Incomplete form input');
			return;
			}
			
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("spr").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","search3.php?userid="+obj1,true);
			xmlhttp.send();
	
}
</script>

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
    <h1>Search Student Booking  </h1>
	<ul id="submenu">
	<li>
	  <ul>
	  <form name="spr">
<table border="0">
<tr>
<td>Roll No.: <input type="text" name="userid" /></td>

</tr>

<tr>
<td><input type="button" value="Submit" onclick="searchRecord()"/></td>
</tr>
</table>
</form> 

	    <li> <a href="logout.php">Log Out</a> </li>
	    
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
     <h2 class="style3">Welcome to Travel Triangle</h2>
      <p class="style2">Planning your travels across the globe.</p>
      
      <p class="wrapper style2">Travel ch. </p>
	  <div id="spr" align="center"></div>
  </div>
    <!-- end:mainContent --> 
    
    
    
<br class="clearfloat">

<div id="footer">
    <<p>© 2013 - LBMS </p>
</div>
</div>
<!-- end:container -->


</body>
</html>
