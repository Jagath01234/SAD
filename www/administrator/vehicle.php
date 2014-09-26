<?php

include '../classes/autoload.php';

if (isset($_POST['submit']))
 { // check if the form is submitted

    $vehicle=new Vehicle();
	

	$vehicle->set_vehicle_no	( $_POST['vehicle_no']);
  	$vehicle->set_vehicle_type	( $_POST['vehicle_type']);   
	$vehicle->set_vehicle_rate	( $_POST['vehicle_rate']);
	$vehicle->set_vehicle_seat	( $_POST['vehicle_seat']);
    $vehicle->set_photo	        ( $_POST['photo']);    
   
	$vehicle->insert_vehicle();
}
?>
<html>
<head>
    <title>Vehicle Details</title>
</head>
<body>
    <h1 align=center>VEHICLE DETAILS</h1>
	<form name="room" action="" method="post" >
		<div style=" border: 1px; border-style: solid; border-color: #FC0; -moz-border-radius: 15px; border-radius: 15px; padding: 5px; margin: 5px">
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td> VEHICLE NO </td>
					<td><input type="text"  name="vehicle_no"  value="" required></td>
				</tr>
				<tr>
					<td> VEHICLE TYPE </td>
					<td><input type="text"  name="vehicle_type"  value="" required></td>
				</tr>
				<tr>
					<td> VEHICLE RATE </td>
					<td><input type="text"  name="vehicle_rate"  value=""  required></td>
				</tr>
				<tr>
					<td> VEHICLE SEAT </td>
					<td><input type="text"  name="vehicle_seat"  value=""  required></td>
				</tr>
				<tr>
					<td> PHOTO </td>
					<td><input type="file" name="photo"  ></td>
				</tr>
				<tr>
					<td colspan=2>
						<input type="reset" name="reset" value="UPDATE">
						<input type="submit" name="submit" value="ADD NEW"  >
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>