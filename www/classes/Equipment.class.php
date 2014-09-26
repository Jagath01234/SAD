<?php
class Equipment
{
    private $equipment_id;
	private $Equipment_type;
	private $Equipment_rate;
	private $photo;


	
	function set_equipment_id($equipment_id){
		$this->equipment_id=$equipment_id;
    }
	function set_equipment_type($equipment_type){
		$this->equipment_type=$equipment_type;
    }
	function set_equipment_rate($equipment_rate){
		$this->equipment_rate=$equipment_rate;
    }
	function set_photo($photo){
		$this->photo=$photo;
    }
	
 
	function insert_equipment(){
		include("../dbcon/dbcon.php"); //database connection function
		$sql= "INSERT INTO equipment( equipment_type, equipment_rate, photo) 
				VALUES ( '$this->equipment_type','$this->equipment_rate','$this->photo')";
		$result = mysqli_query($link,$sql);
				if(!$result) 
				{
					$error = ""; // Initialize error as blank
					$error = mysqli_error($link);
					print $error;
					exit;
				}
					$mess = "<font color='blue'>Equipment Successfully Created</font>";
					echo $mess;
	}
 
	 public function get_details() {
		include("../dbcon/dbcon.php"); //database connection function
		$sql= "SELECT equipment_id, equipment_type FROM vehicle";
		$result = mysqli_query($link,$sql);
		$myrow=mysqli_fetch_row($result);
		
        $this->equipment_id = $myrow[0];
        $this->equipment_type = $myrow[1];
               
    }
	
	public function get_field($field) {
		$this->get_details();	
        return $this->$field;
    }
	
	
	
	
	
 }
   
?>