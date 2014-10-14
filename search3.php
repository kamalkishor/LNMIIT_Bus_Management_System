<?php
	
	$con = mysql_connect("localhost","root","");
	
	if(!$con)
	{
		die('could not connect: ' . mysql_error());
	}
			
	mysql_select_db("lbms",$con);

	$userid = $_GET["userid"];	
	

	$sql = "select * FROM booking_history WHERE userid ='" . $userid . "' ";	
	$result = mysql_query($sql,$con);
	$sql2 = "select trips_left FROM student_details WHERE userid ='" . $userid . "' ";
	$result2 = mysql_query($sql2,$con);
		
	echo "<table border='1'>";
	echo "<tr bgcolor='#00CCFF'>";
	echo "<td>";
	echo "Trips Left";
	echo "</td>";
	echo "</tr>";
	while($obj2 = mysql_fetch_array($result2))
	{
		echo "<tr>";
		echo "<td>";
		echo $obj2["trips_left"];
		echo "</td>";
		echo "</tr>";
		
	}
	echo "</table>";
	
	echo "<table border='1'>";
	echo "<tr bgcolor='#00CCFF'>";
	echo "<td>";
	echo "Booking Id";
	echo "</td>";
	echo "<td>";
	echo "Student Id";
	echo "</td>";
	echo "<td>";
	echo "Date";
	echo "</td>";
	echo "<td>";
	echo "Source";
	echo "</td>";
	echo "<td>";
	echo "Time of Booking";
	echo "</td>";
	echo "<td>";
	echo "Time of Journey";
	echo "</td>";
	echo "</tr>";

	while($obj = mysql_fetch_array($result))
	{
			

		echo "<tr>";
		echo "<td>";
		echo $obj["booking_id"];
		echo "</td>";
		echo "<td>";
		echo $obj["userid"];
		echo "</td>";
		echo "<td>";
		echo $obj["date"];
		echo "</td>";
		echo "<td>";
		echo $obj["source"];
		echo "</td>";	
		echo "<td>";
		echo $obj["time_booking"];
		echo "</td>";
		echo "<td>";
		echo $obj["time_journey"];
		echo "</td>";
		echo "</tr>";		
	}
	echo "</table>";
?>