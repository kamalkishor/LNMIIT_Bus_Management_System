<?php
$trips=$_POST['tripsleft'];
$student=$_GET['student'];

echo $trips,$student;
?>

<?php
session_start();
$con = mysql_connect("localhost","root","");
	
	if(!$con)
	{
		die('could not connect: ' . mysql_error());
	}
			
	$b = mysql_select_db("lbms",$con);

	$userid = $_GET["student"];	
	if(!$userid)
	{
		die('could not connect: ' . mysql_error());
	}
	$trips=$_POST['tripsleft'];
    $student=$_GET['student'];

    echo $trips.$student;
	$sql2 = "UPDATE student_details SET trips_left = '".$trips."' WHERE userid ='" . $userid . "' ";
	$result2 = mysql_query($sql2,$con);
	header("Location:student_booking.php");

?>