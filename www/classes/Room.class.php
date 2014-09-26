<?php
class Room
{
    private $room_id;
	private $room_name;
	private $room_type;
	private $room_rate;
	private $photo;


	
	function set_room_id($room_id){
		$this->room_id=$room_id;
    }
	
	function set_room_name($room_name){
		$this->room_name=$room_name;
    }
	function set_room_type($room_type){
		$this->room_type=$room_type;
    }
	function set_room_rate($room_rate){
		$this->room_rate=$room_rate;
    }
	function set_photo($photo){
		$this->photo=$photo;
    }
	
 
	function insert_room(){
		include("../dbcon/dbcon.php"); //database connection function
		$sql= "INSERT INTO room(room_name, room_type, room_rate, photo) 
				VALUES ('$this->room_name', '$this->room_type','$this->room_rate','$this->photo')";
		$result = mysqli_query($link,$sql);
				if(!$result) 
				{
					$error = ""; // Initialize error as blank
					$error = mysqli_error($link);
					print $error;
					exit;
				}
					$mess = "<font color='blue'>Room Successfully Created</font>";
					echo $mess;
	}
 
    public function get_details() {
		include("../dbcon/dbcon.php"); //database connection function
		$sql= "SELECT room_id, room_name FROM room";
		$result = mysqli_query($link,$sql);
		$myrow=mysqli_fetch_row($result);
		
        $this->room_id = $myrow[0];
        $this->room_name = $myrow[1];
               
    }
	
	public function get_field($field) {
		$this->get_details();	
        return $this->$field;
    }
	
	
	
	
	
 }
   
?>