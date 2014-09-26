<?php
class Autonumber {

	function show(){
	
		include("../dbcon/dbcon.php");
		$sql= "INSERT INTO autonumber(id) VALUES (NULL)";
		$result = mysqli_query($link,$sql);

		$autonumber = mysqli_insert_id($link);		//last auto number
		$length = strlen((string) $autonumber);		//lenth of last auto number

		$number = str_repeat("0", (4-$length)).$autonumber;		// number as string
		//echo $number;
		//var_dump($autonumber);

		$year = date("y");
		$month = date("m");
		$day = date("d");
		$letters = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"); 
		$flip = array_flip($letters);
		$rand1 = array_rand($flip);
		$rand2 = array_rand($flip);
		//echo  $rand1 . $rand2."-".$year.$month.$day.$number ;
		return  $rand1 . $rand2."-".$year.$month.$day.$number ;
		
	}
	
}

//$me= new Autonumber();
//echo $me->show();

?>