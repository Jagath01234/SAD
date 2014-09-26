<?php


include '../classes/autoload.php';

if (isset($_POST['submit']))
 { // check if the form is submitted


    $customer=new Customer();
	
    //$customer->set_cus_id		( $_POST['cus_id']);
  	$customer->set_first_name	( $_POST['first_name']);   
	$customer->set_email		( $_POST['email']);
    $customer->set_last_name	( $_POST['last_name']); 
	
   
	$customer->insert_customer();
	
	
}


if (isset($_POST['submit']))
 { // check if the form is submitted

    $roomreservation=new RoomReservation();
	
    $roomreservation->set_cus_id				( $customer->get_last_id());
	//var_dump($customer->get_last_id());
  	$roomreservation->set_room_id				( $_POST['room_id']);
	$roomreservation->set_check_in_date			( $_POST['check_in_date']);
    $roomreservation->set_check_out_date	    ( $_POST['check_out_date']);	
	$roomreservation->set_charge				( $_POST['charge']);
    
	$roomreservation->insert_roomreservation();
}
?>			

<html>
<head>
<script language="JavaScript">
function checkForm() 		
				{					
					var x = document.forms["roomres"]["email"].value;
					var atpos = x.indexOf("@");
					var dotpos = x.lastIndexOf(".");
						if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) 
							{
								alert("Not a valid e-mail address");
								return false;
							}
				}
				
function selectType() 		
				{					
					var room = document.forms["roomres"]["room_type"].value;				
					document.roomres.room_id.value = room;
					return false;
		
				}
				

				
<!--
// slide show the image
var image1=new Image()
	image1.src="../resources/images/1.jpg"
var image2=new Image()
	image2.src="../resources/images/2.jpg"
var image3=new Image()
	image3.src="../resources/images/3.jpg"
var image4=new Image()
	image4.src="../resources/images/4.jpg"
var image5=new Image()
	image5.src="../resources/images/5.jpg"
var image6=new Image()
	image6.src="../resources/images/6.jpg"
//-->
</script>
<script language="javascript" type="text/javascript" src="datetimepicker.js"></script> 
	<title>Room  Reservation</title>
</head>
<body>
	<h1 align=center>ROOM RESERVATION</h1>
	<form name="roomres" action="" method="post" onsubmit= "return checkForm()";>
		<div style=" border: 1px; border-style: solid; border-color: #FC0; -moz-border-radius: 15px; border-radius: 15px; padding: 5px; margin: 5px">
			<table width=100%>
				<tr>
					<td colspan=2>	<p> Please fill in the field below with your details</p>
					</td>
				</tr>
				<tr>
					<td>
						<div>
						
							<table cellpadding="5" cellspacing="5">
								<tr>
									<td> FIRST NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><input type="text"  name="first_name"  value="" required></td>
								</tr>
								<tr>
									<td> LAST NAME </td>
									<td><input type="text"  name="last_name"  value=""   required  ></td>	
								</tr>
								<tr>
									<td> NIC/PASSPORT </td>
									<td><input type="text"  name="nic"   value=""  placeholder="XXXXXXXXXV" required  ></td>
								</tr>								
							</table>
						</div>
					</td>					
					<td>
						<div>
							<table cellpadding="5" cellspacing="5">
								<tr>									
									<td> E-MAIL </td>
									<td><input type="text"  name="email"   value=""  placeholder="abc@example.com" required  ></td>
								</tr>
								<tr>
									<td> MOBILE </td>
									<td><input type="text"  name="mobile"   value=""  placeholder="0XX XXXXXXX" required  ></td>
								</tr>
								<tr>
								</tr>
							</table>
						</div>
					</td>		
				</tr>
			</table>
		</div>
		<br>
		
		<div style=" border: 1px; border-style: solid; border-color: #FC0; -moz-border-radius: 15px; border-radius: 15px; padding: 5px; margin: 5px">
			<table width=100%>
				<tr>
					<td><p> Please select your preferred room from the form below</p></td>
					<td><p> Preview of room(room id)</p></td>
				<tr>
					<td>
						<div>						
							<table cellpadding="5" cellspacing="5">
								<tr>
									<td> SELECT ROOM TYPE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><select name="room_type"  onChange="javascript:selectType()">											
										<option value=""> Select room type </option>
										<option value="Luxury"> Luxury </option>
										<option value="Family Room"> Family Room </option>
										<option value="Couple Room"> Couple Room </option>
										<option value="Middle Level Room"> Middle Level Room </option>
										<option value="Normal Level Room"> Normal Room </option>
										</select>
									</td>
								</tr>
								<tr>
									<td> CHECK IN DATE </td>
									<td> <input id="in_date" type="date" name="check_in_date" required>
									<!--<a href="javascript:NewCal('in_date','ddmmyyyy')">
									<img src="../resources/images/cal.gif" width="20" height="20" border="" alt="Pick a date"></a> </td>-->
								</tr>
								
								<tr>
									<td> CHECK OUT DATE </td>
									<td> <input id="out_date" type="date"  name="check_out_date" required>
									<!--<a href="javascript:NewCal('out_date','ddmmyyyy')">
									<img src="../resources/images/cal.gif" width="20" height="20" border="" alt="Pick a date"></a> </td>-->
								
								</tr>
								<tr>
									<td> ROOM NUMBER </td>
									<td><input type="text"  name="room_id"  value="" required onChange="calc"></td>
								</tr>
								<tr>
									<td> TOTAL STAY CHARGE </td>
									<td><input type="text"  name="charge"  value=""  required></td>
								</tr>
								
							</table>
						</div>
					</td>					
					<td>
						<div>
							<table cellpadding="5" cellspacing="5">
								<tr>
									<td>
										<img src="../resources/images/1.jpg" name="slide" width=100% height=50%>
										
										<script>
											<!--
											//variable that will increment through the images
											var step=1
											function slideit()
												{
													//if browser does not support the image object, exit.
													if (!document.images)
													return
													document.images.slide.src=eval("image"+step+".src")
													if (step<6)
													step++
													else
													step=1
													//call function "slideit()" every 2.5 seconds
													setTimeout("slideit()",2500)
												}
											slideit()
											//-->
											</script>
									</td>														
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
<br>		
		<table width=30% align="right">
			<tr align="right">
				<td colspan=2>
					<input type="reset" name="reset" value="RESET" >
					<input type="submit" name="submit" value="NEXT"  >
				</td>
			</tr>
		</table>	
	</form>		
</body>
</html>