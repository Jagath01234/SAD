<?php

include '../classes/autoload.php';

if (isset($_POST['submit']))
 { // check if the form is submitted

    $room=new Room();
	
    $room->set_room_name	( $_POST['room_name']);
  	$room->set_room_type	( $_POST['room_type']);   
	$room->set_room_rate	( $_POST['room_rate']);
    //$room->set_photo	    ( $_POST['image']);    
	
	if (!isset($_FILES['image']['tmp_name'])) {
echo "jjjjj";
}else{
	
	$file=$_FILES['image']['tmp_name'];

$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));

$image_name= addslashes($_FILES['image']['name']);
move_uploaded_file($_FILES["image"]["tmp_name"],"photos/"
. $_FILES["image"]["name"]);
$room->set_photo	="photos/" . $_FILES["image"]["name"];


}
	
	
	
   
	$room->insert_room();
}
?>
			

<html>
<head>
	<title>Room details</title>
</head>
<body>
	<h1 align=center>ROOM DETAILS</h1>
	<form name="room" action="" method="post" >
		<div style=" border: 1px; border-style: solid; border-color: #FC0; -moz-border-radius: 15px; border-radius: 15px; padding: 5px; margin: 5px">
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td> ROOM NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><input type="text"  name="room_name"  value="" required></td>
				</tr>
				<tr>
					<td> ROOM TYPE </td>
					<td><input type="text"  name="room_type"  value="" required></td>
				</tr>
				<tr>
					<td> ROOM RATE </td>
					<td><input type="text"  name="room_rate"  value=""  required></td>
				</tr>
				<tr>
					<td> PHOTO </td>
					<td><input type="file" name="image"  required></td>
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