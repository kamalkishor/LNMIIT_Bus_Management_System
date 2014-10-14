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
			var obj1=document.forms["spr"]["date"].value;
			var obj2=document.forms["spr"]["source"].value;
			var obj3=document.forms["spr"]["time_journey"].value;
			//alert(obj3);
			if(obj1==''|| obj2=='' || obj3==''){
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
			//alert("calling");
			xmlhttp.open("GET","search2.php?date="+obj1+"&source="+obj2+"&time_journey="+obj3,true);
			
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
    <h1>Search Bus Details </h1>
	<ul id="submenu">
	<li>
	  <ul>
	  <form name="spr">
<table border="0">
<tr>
<td>Date: <input type="date" name="date" /></td>
</tr>

<tr>
    <td>Source:	 <select name="source">
				<option>Institute</option>
				<option>Ajmeri_gate</option>
			</select>
	</td>
</tr>

<tr>
<td>Time of Journey: <input type="text" name="time_journey" /></td>
</tr>
<tr>
<td><input type="button" value="Submit" onclick="searchRecord()"/></td>
</tr>
</table>
</form> 
<li><a href="admin_homepage.php">Home</a></li>
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
     <h2 class="style3">Bus Details</h2>
      
	  <div id="spr" align="center"></div>
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
