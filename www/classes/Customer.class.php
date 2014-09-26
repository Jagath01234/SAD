<?php
class Customer
{
    private $cus_id;
	private $first_name;
	private $email;
	private $last_name;



	
	function set_cus_id($cus_id){
		$this->cus_id=$cus_id;
    }
	function set_first_name($first_name){
		$this->first_name=$first_name;
    }
	function set_email($email){
		$this->email=$email;
    }
	function set_last_name($last_name){
		$this->last_name=$last_name;
    }

	
 
	function insert_customer(){
		include("../dbcon/dbcon.php"); //database connection function
		$sql= "INSERT INTO customer( first_name, email, last_name) 
				VALUES ( '$this->first_name','$this->email','$this->last_name')";
		$result = mysqli_query($link,$sql);
				if(!$result) 
				{
					$error = ""; // Initialize error as blank
					$error = mysqli_error($link);
					print $error;
					exit;
				}
					$this->cus_id = mysqli_insert_id($link);
					$mess = "<font color='blue'>Customer Successfully Created</font>";
					echo $mess;					
					//echo mysqli_insert_id($link);
	}
	
	function get_last_id(){
	//include("../dbcon/dbcon.php"); 
	//$this->cus_id = mysqli_insert_id($link);
	return $this->cus_id ;
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