<?php
//error_reporting(0); // Turn off all error reporting
include '../classes/autoload.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$message="";
if(isset($_POST["submit"])&&$_POST["submit"]=="Sign in") {
		
		$username=$_POST["username"];
		$password=md5($_POST["password"]);

		$user= new User();
		
		if (($user->varify_user($username,$password))==true){
			$message = 	'You are sucessfully loggedin'.'<br>'.
						'Your user name: '.$_SESSION["uname"].'<br>'.
						'Your user type: '.$_SESSION["utype"];
			//header("Location:./login_sucess.php");
		}
		else{
			$message= '<font color=purple size=2><b>'.$user->printError().'</b></font>';
		}

}

if(isset($_POST["signup"])&&$_POST["signup"]=="Sign up") {
	echo '<script type="text/javascript">
			<!--
			window.location="/user/registration.php";
			// -->
		</script>' ;
}

?>

<html>
<head>
<title>Login Page</title>
</head>

<div>
<center>
<h1 align=center>Staff Login</h1>
<!-- start of user loging part -->
<form name="signin" method="post" action="" >
<div style=" border: 1px; border-style: solid; border-color: #FC0; -moz-border-radius: 15px; border-radius: 15px; padding: 5px; margin: 5px; width:20%">
	<table height="80px" >
		<tr><td>Username:
		<td><input type="text" name="username" value="" required >
		<tr><td>Password:
		<td><input type="password" name="password" value="" required>
	</table>
	<input type="submit" name="submit" value="Sign in">
</div>		
</form>

<?php echo $message."<br>"; ?>

<!-- end of loging part -->
</center>

<!-- start of new user registration link -->
<!--
<center>
	<font size="3">If you are a new user</font><br>
	<a href="/user/registration.php ">Sign up here</a>
</center>
-->
<!-- end of new user registration link -->

</div>
</body>
</html>

