<?php
	
	$con = mysql_connect("localhost","root","");
	
	if(!$con)
	{
		die('could not connect: ' . mysql_error());
	}
			
	mysql_select_db("lbms",$con);

	$userid = $_GET["userid"];	
	//$trips=$_POST['tripsleft'];
//	$student=$_GET['student'];

	//echo $trips.$student;

	$sql = "select * FROM booking_history WHERE userid ='" . $userid . "' ";	
	$result = mysql_query($sql,$con);
	$sql2 = "select trips_left FROM student_details WHERE userid ='" . $userid . "' ";
	$result2 = mysql_query($sql2,$con);
?>
		

<html>
	
	<tr>
	<td><FONT SIZE="3" FACE="courier" COLOR=black><b>Trips Left:</b></font></td>
	
	<?php while($obj2 = mysql_fetch_array($result2))
	{ ?>			
		<td>
		<FONT SIZE="3" FACE="courier" COLOR=red><b><?php echo $obj2['trips_left']; ?></b></font>
		
				
	<?php } ?>
	</td>
	</tr>

<tr>
<p>
<td align= "center"><FONT SIZE="3" FACE="courier" COLOR=black> <b>Update Trips Limit:</b></font>
<form  method=POST action=jkl.php?student=<?php echo $userid?> >

<input  type=text name=tripsleft>

<input type=submit value=Submit name=Submit></td>

</form></p>
</tr>
	<table border='5'>
	<tr bgcolor='#00CCFF'>
	 
	<td>
	<?php echo "Booking Id";?>
	</td>
	<td>
	<?php echo "Student Id";?>
	</td>
	<td>
	<?php echo "Date";?>
	</td>
	<td>
	<?php echo "Source";?>
	</td>
	<td>
	<?php echo "Time of Booking";?>
	</td>
	<td>
	<?php echo "Bus Time";?>
	</td>
	</tr>

	<?php while($obj = mysql_fetch_array($result))
	{ ?>

		<tr>
		<td>
		<?php echo $obj['booking_id'];?>
		</td>
		<td>
		<?php echo $obj['userid']; ?>
		</td>
		<td>
		<?php echo $obj['date'];?>
		</td>
		<td>
		<?php echo $obj['source'];?>
		</td>
		
		<td>
		<?php echo $obj['time_booking']; ?>
		</td>
		<td>
		<?php echo $obj['time_journey']; ?>
		</td>
				
	<?php } ?>
	
	</table>
	
</html>


	