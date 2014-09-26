<?php
class RoomReservation
{
    private $reservation_id;
    private $cus_id;
	private $room_id;
	private $check_in_date;
	private $check_out_date;
	private $charge;



	
	function set_cus_id($cus_id){
		$this->cus_id=$cus_id;
    }
	function set_room_id($room_id){
		$this->room_id=$room_id;
    }
	function set_check_in_date($check_in_date){
		$this->check_in_date=$check_in_date;
    }
	function set_check_out_date($check_out_date){
		$this->check_out_date=$check_out_date;
    }
	function set_charge($charge){
		$this->charge=$charge;
    }

	
 
	function insert_roomreservation(){
		include("../dbcon/dbcon.php"); //database connection function
		include '../classes/Autonumber.class.php';
		$autonumber= new Autonumber();
		$this->reservation_id = $autonumber->show();
		
		$sql= "INSERT INTO room_reservation(reservation_id, cus_id, room_id, check_in_date, check_out_date, charge) 
				VALUES ('$this->reservation_id', '$this->cus_id', '$this->room_id','$this->check_in_date','$this->check_out_date','$this->charge')";
		$result = mysqli_query($link,$sql);
				if(!$result) 
				{
					$error = ""; // Initialize error as blank
					$error = mysqli_error($link);
					print $error;
					exit;
				}
					
					$mess = "<font color='blue'>Reservation Successfully Made</font>";
					echo $mess;
	}
	/*
 
	 public function get_details() {
		include("../dbcon/dbcon.php"); //database connection function
		$sql= "SELECT meal_id, meal_name FROM meal";
		$result = mysqli_query($link,$sql);
		$myrow=mysqli_fetch_row($result);
		
        $this->meal_id = $myrow[0];
        $this->meal_name = $myrow[1];
               
    }
	
	public function get_field($field) {
		$this->get_details();	
        return $this->$field;
    }
	*/
	
	
	
	
 }
   
?>