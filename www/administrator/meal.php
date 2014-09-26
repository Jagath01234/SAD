<?php

include '../classes/autoload.php';

if (isset($_POST['submit']))
 { // check if the form is submitted

    $meal=new Meal();
	

	$meal->set_meal_name	( $_POST['meal_name']);
  	$meal->set_meal_type	( $_POST['meal_type']);   
	$meal->set_meal_rate	( $_POST['meal_rate']);
	$meal->set_photo	    ( $_POST['photo']);    
   
	$meal->insert_meal();
 }
?>
<html>
<head>
    <title>Meal Details</title>
</head>
<body>
    <h1 align=center>MEAL DETAILS</h1>
	<form name="room" action="" method="post" >
		<div style=" border: 1px; border-style: solid; border-color: #FC0; -moz-border-radius: 15px; border-radius: 15px; padding: 5px; margin: 5px">
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td> MEAL NAME </td>
					<td><input type="text"  name="meal_name"  value="" required></td>
				</tr>
				<tr>
					<td> MEAL TYPE </td>
					<td><input type="text"  name="meal_type"  value="" required></td>
				</tr>
				<tr>
					<td> MEAL RATE </td>
					<td><input type="text"  name="meal_rate"  value=""  required></td>
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