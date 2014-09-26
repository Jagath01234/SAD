<?php
class User
{
    private $uname;
	private $password;
	private $utype;
	private $error;
	
	function varify_user($user, $pass){
		$this->uname=$user;
		$this->password=$pass;
				
 		include("../dbcon/dbcon.php"); //database connection function

		//retriving data from db
		$query = "SELECT user_name, user_type FROM staff WHERE user_name = '$this->uname' AND password = '$this->password'";
		$result=mysqli_query($link,$query);

		if($result === FALSE) {
			die(mysqli_error($link)); // TODO: better error handling
		}
		while($row=mysqli_fetch_array($result)) {
			$name=$row["0"];
			$utype=$row['1'];
			//var_dump($row);
		}
		if(mysqli_affected_rows($link)==0) {	
			$this->error="Incorrect username or password.<br>Please try again.";
			return false;
			exit;
		} elseif(mysqli_affected_rows($link)>1) {	
			$this->error="More than one users registered with the username you entered. <br> Please contact system administrator to resolve this issue.";
			return false;
			exit;		
		} else {
			$_SESSION["uname"]=$name;
			$_SESSION["utype"]=$utype;			
			return true;
			exit;
		}  	
	}
	
	function printError(){
		return $this->error;
	}
}
?>