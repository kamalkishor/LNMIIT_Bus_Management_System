<?php
	
	$con = mysql_connect("localhost","root","");
	
	if(!$con)
	{
		die('could not connect: ' . mysql_error());
	}
			
	mysql_select_db("lbms",$con);

	$date = $_GET["date"];	
	$source = $_GET["source"];	
	$time = $_GET["time_journey"];	
	

	$sql = "select userid,booking_id,time_booking FROM booking_history WHERE date ='" . $date . "' and source ='" . $source . "' and time_journey ='" . $time . "' ";	
	$result = mysql_query($sql,$con);
	
	$sql2 = "select seat_vacant FROM bus_details WHERE date='".$date."' and source = '".$source."' and time= '".$time."'";
	$result2 = mysql_query($sql2,$con);
	if(!$result)
	{echo "not working";}

?>
	<html>
	<tr>
	<td><FONT SIZE="3" FACE="courier" COLOR=black><b>Seats Vacant:</b></font></td>
	
	</tr>
	<tr>
	<?php if(mysql_num_rows($result2)>0){while($obj2 = mysql_fetch_array($result2))
	{ ?>			
		<td>
		<FONT SIZE="3" FACE="courier" COLOR=red><b><?php echo $obj2['seat_vacant']; ?></b></font>
		</td>
		</tr>		
	<?php }} ?>
	</table>

	<table border='5'>
	<tr bgcolor='#00CCFF'>
	 <td>
	<?php echo "Student Id"; ?>
	</td>
	<td>
	<?php echo "Booking Id";?>
	</td>
	<td>
	<?php echo "Time of Booking";?>
	</td>
	</tr>

	<?php while($obj = mysql_fetch_array($result))
	{ ?>

		<tr>
		
		<td>
		<?php echo $obj['userid']; ?>
		</td>
		<td>
		<?php echo $obj['booking_id'];?>
		</td>
		<td>
		<?php echo $obj['time_booking']; ?>
		</td>
				
	<?php } ?>
	
	</table>
</html>
