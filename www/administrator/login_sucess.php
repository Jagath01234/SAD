<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION["uname"])) {
	header("Location: /content/error.php");
	exit;
	}
?>

<html>
<head>
<title>User Page</title>
</head>
<body>
<center>

<?php
echo "Hello ".$_SESSION ["uname"].". You are successfully logged In.";

/* echo '<pre>';
var_dump($_SESSION);
echo '</pre>'; */
?>

<br><br>
<a href="./logoff.php">Log Out</a>

<a href="javascript:history.go(-2);">Back</a>


</center>
</body>
</html>