<?php
class Vehicle
{
    private $vehicle_id;
	private $vehicle_no;
	private $vehicle_type;
	private $vehicle_rate;
	private $vehicle_seat;
	private $photo;


	
	function set_vehicle_id($vehicle_id){
		$this->vehicle_id=$vehicle_id;
    }
	function set_vehicle_no($vehicle_no){
		$this->vehicle_no=$vehicle_no;
    }
	function set_vehicle_type($vehicle_type){
		$this->vehicle_type=$vehicle_type;
    }
	function set_vehicle_rate($vehicle_rate){
		$this->vehicle_rate=$vehicle_rate;
    }
	function set_vehicle_seat($vehicle_seat){
		$this->vehicle_seat=$vehicle_seat;
	}
	function set_photo($photo){
		$this->photo=$photo;
    }
	
 
	function insert_vehicle(){
		include("../dbcon/dbcon.php"); //database connection function
		$sql= "INSERT INTO vehicle(vehicle_no, vehicle_type, vehicle_rate,vehicle_seat, photo) 
				VALUES ('$this->vehicle_no', '$this->vehicle_type','$this->vehicle_rate','$this->vehicle_seat','$this->photo')";
		$result = mysqli_query($link,$sql);
				if(!$result) 
				{
					$error = ""; // Initialize error as blank
					$error = mysqli_error($link);
					print $error;
					exit;
				}
					$mess = "<font color='blue'>Vehicle Successfully Created</font>";
					echo $mess;
	}
 
	 public function get_details() {
		include("../dbcon/dbcon.php"); //database connection function
		$sql= "SELECT vehicle_id, vehicle_no FROM vehicle";
		$result = mysqli_query($link,$sql);
		$myrow=mysqli_fetch_row($result);
		
        $this->vehicle_id = $myrow[0];
        $this->vehicle_no = $myrow[1];
               
    }
	
	public function get_field($field) {
		$this->get_details();	
        return $this->$field;
    }
	
	
	
	
	
 }
   
?>