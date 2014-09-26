<?php
class Staff
{
    private $staff_id;
	private $fname;
	private $laname;
	private $address;
	private $email;
	private $nic;
	private $phone;
    private $uname;
    private $password;
    private $utype;

	
	function set_staff_id($staff_id){
		$this->staff_id=$staff_id;
    }
	
	function set_fname($fname){
		$this->fname=$fname;
    }
	function set_lname($lname){
		$this->lname=$lname;
    }
	function set_address($address){
		$this->address=$address;
    }
	function set_nic($nic){
		$this->nic=$nic;
    }
	function set_email($email){
		$this->email=$email;
    }
	function set_phone($phone){
		$this->phone=$phone;
    }
	function set_uname($uname){
		$this->uname=$uname;
    }
	function set_password($password){
		$this->password=$password;
    }
	function set_utype($utype){
		$this->utype=$utype;
    }
 
	function insert_staff(){
		include("../dbcon/dbcon.php"); //database connection function
		$sql= "INSERT INTO staff(first_name, last_name, address, email, nic, phone, user_name, password, user_type) 
				VALUES ('$this->fname', '$this->lname','$this->address','$this->email','$this->nic','$this->phone','$this->uname', '$this->password', '$this->utype')";
		$result = mysqli_query($link,$sql);
				if(!$result) 
				{
					$error = ""; // Initialize error as blank
					$error = mysqli_error($link);
					print $error;
					exit;
				}
					$mess = "<font color='blue'>User Successfully Created</font>";
					echo $mess;
	}
 
    public function get_details() {
		include("../dbcon/dbcon.php"); //database connection function
		$sql= "SELECT user_name, user_type FROM staff";
		$result = mysqli_query($link,$sql);
		$myrow=mysqli_fetch_row($result);
		
        $this->uname = $myrow[0];
        $this->user_type = $myrow[1];
               
    }
	
	public function get_field($field) {
		$this->get_details();	
        return $this->$field;
    }
	
	
	
	
	
 }
   
?>