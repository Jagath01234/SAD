<?php
//error_reporting(0); // Turn off all error reporting

/*connect to mysql database */
include("config.php");


$link = mysqli_connect($host,$dbuser,$dbpassword, $dbase);

if (!$link) {
    die('Database Connection Error..! (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}


/* 
//Connection using my_sql keyword
$con=mysql_connect($host,$dbuser,$dbpassword) or die("Can't connect to server");
mysql_select_db($dbase,$con) or die("can't connect to database"); 
*/
?>




