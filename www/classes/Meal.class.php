<?php
class Meal
{
    private $meal_id;
	private $meal_name;
	private $meal_type;
	private $meal_rate;
	private $photo;


	
	function set_meal_id($meal_id){
		$this->meal_id=$meal_id;
    }
	function set_meal_name($meal_name){
		$this->meal_name=$meal_name;
    }
	function set_meal_type($meal_type){
		$this->meal_type=$meal_type;
    }
	function set_meal_rate($meal_rate){
		$this->meal_rate=$meal_rate;
    }
	function set_photo($photo){
		$this->photo=$photo;
    }
	
 
	function insert_meal(){
		include("../dbcon/dbcon.php"); //database connection function
		$sql= "INSERT INTO meal(meal_name, meal_type, meal_rate, photo) 
				VALUES ('$this->meal_name', '$this->meal_type','$this->meal_rate','$this->photo')";
		$result = mysqli_query($link,$sql);
				if(!$result) 
				{
					$error = ""; // Initialize error as blank
					$error = mysqli_error($link);
					print $error;
					exit;
				}
					$mess = "<font color='blue'>Food menu Successfully Created</font>";
					echo $mess;
	}
 
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
	
	
	
	
	
 }
   
?>