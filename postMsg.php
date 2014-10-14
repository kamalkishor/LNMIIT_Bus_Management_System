<?php

	$con = mysql_connect("localhost","root","");
	
	if(!$con)
	{
		die('could not connect: ' . mysql_error());
	}
			
	mysql_select_db("lbms",$con);

	$sub = $_GET["sub"];	
	$msg = $_GET["msg"];
	$date=date("Y-m-d");
	session_start();
	$category="" . $_SESSION['name'] . "";
	$sql = "insert into message(userid,date,message,subject)values('$category','$date','$msg','$sub')";		
	$result = mysql_query($sql,$con);	 
	header("Location:admin_homepage.php");
?>