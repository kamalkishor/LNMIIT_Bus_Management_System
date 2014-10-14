<?php 
if($_POST['userid']== NULL || $_POST['password']== NULL )
{
echo "<p>"."you have provided insuffcient data"."</p>";
echo "<a href= \"admin_login.php\">Click here to try again</a>";
}
else
{
	$SQL = mysqli_connect("127.0.0.1","root","","lbms");
	if(mysqli_connect_errno())
	{
		printf("Connection error!!!Please try again later");
		exit();
	}
	
	$query = "SELECT userid FROM login WHERE userid = '".$_POST['userid']."' AND password = '".$_POST['password']."';";
	$res = mysqli_query($SQL,$query);
	$e = mysqli_fetch_row($res);
	//echo $e[0];
	if($e[0])
	{	
		session_start();
		//$R = mysqli_fetch_row($res);
		//echo "hiii".session_id();
		$_SESSION['cust_id']=$e[0];
		mysqli_free_result($res);
		mysqli_close($SQL);
		header("Location: admin_homepage.php");
	}
	else
	{	mysqli_free_result($res);
		mysqli_close($SQL);
		echo "wrong username or password \n" ;
		
		echo "<a href = \"admin_login.php\">click to try again</a>";
	}
}
