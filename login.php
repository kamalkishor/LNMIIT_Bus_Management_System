<?php

	$con = mysql_connect("localhost","root","");
	
	if(!$con)
	{
		die('could not connect: ' . mysql_error());
	}
			
	mysql_select_db("lbms",$con);

	$userid = $_GET["usr"];	
	$password = $_GET["pwd"];
	$category = $_GET["userCategory"];	
	
	$sql = "select * FROM login WHERE userid='$userid' and password='$password' and category='$category'";	
	
	$result = mysql_query($sql,$con);

	$obj = mysql_fetch_object($result) ;	
	
	if(!$obj)
	{
		header("location:unknown.html");
	}
	else if($category=="student")
	{
		$flag="false";
		//For student....
		session_start();
		$_SESSION['flag']=0;
		$_SESSION['category']=$category;	
			$_SESSION['name']=$userid;	
		header("Location:student_homepage.php");
	}
	else if($category=="admin")
	{
		//For Admin..
		session_start();
		$_SESSION['category']=$category;
			$_SESSION['name']=$userid;	
		header("Location:admin_homepage.php");
	}
	else if($category=="gate_staff")
	{
		//For Admin..
		session_start();
		$_SESSION['category']=$category;	$_SESSION['name']=$userid;	
		header("Location:gate_staff_homepage.php");
	}
	else
	{
		
	}
?>