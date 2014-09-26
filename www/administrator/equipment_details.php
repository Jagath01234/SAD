<?php

include '../classes/autoload.php';

if (isset($_POST['submit']))
 { // check if the form is submitted

    $equipment=new Equipment();
	

  	$equipment->set_equipment_type	( $_POST['equipment_type']);   
	$equipment->set_equipment_rate	( $_POST['equipment_rate']);
	$equipment->set_photo	        ( $_POST['photo']);    
   
	$equipment->insert_equipment();
}
?>
			
	
<html>
<head>
	<title>Equipment details</title>
</head>
<body>
	<h1 align=center>EQUIPMENT DETAILS</h1>
	<form name="equipment" action="" method="post" >
		<div style=" border: 1px; border-style: solid; border-color: #FC0; -moz-border-radius: 15px; border-radius: 15px; padding: 5px; margin: 5px">
			<table cellpadding="5" cellspacing="5">
				
				<tr>
					<td> EQUIPMENT TYPE </td>
					<td><input type="text"  name="equipment_type"  value="" required></td>
				</tr>
				<tr>
					<td> EQUIPMENT RATE </td>
					<td><input type="text"  name="equipment_rate"  value=""  required></td>
				</tr>
				<tr>
					<td> PHOTO </td>
					<td><input type="file" name="photo"  ></td>
				</tr>
				<tr>
					<td colspan=2>
						<input type="reset" name="reset" value="RESET">
						<input type="submit" name="submit" value="ADD NEW"  >
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>