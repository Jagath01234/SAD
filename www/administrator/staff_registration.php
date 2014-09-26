<?php

include '../classes/autoload.php';

if (isset($_POST['submit']))
 { // check if the form is submitted

    $staff=new Staff();
	
    $staff->set_fname	( $_POST['first_name']);
  	$staff->set_lname	( $_POST['last_name']);   
	$staff->set_address	( $_POST['address']);
    $staff->set_email	( $_POST['email']);    
    $staff->set_nic 	( $_POST['nic']);
    $staff->set_phone	( $_POST['phone']);
	$staff->set_uname 	( $_POST['user_name']);
	$staff->set_password	( md5($_POST['password']));
	
	$staff->insert_staff();
}
?>

<html>
<head>
	<title>Staff Registration</title>
<script language="javascript">

	
	
	function checkForm() 		
				{					
					var x = document.forms["staffreg"]["email"].value;
					var atpos = x.indexOf("@");
					var dotpos = x.lastIndexOf(".");
						if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) 
							{
								alert("Not a valid e-mail address");
								return false;
							}
							
					var nic_no = document.staffreg.nic.value;
						if(nic_no.length != 10 && nic_no.charAt(9)!='v')
							{						
								alert("NIC number is Invalid");
								document.staffreg.nic.focus();
								return false;
							}
						
					var a = document.staffreg.phone.value;
						if(a.length != 10)
							{
								alert("Enter the valid PHONE NUMBER(Like : 0000000000)");
								document.staffreg.phone.focus();
								return false;
							}
						
					if(staffreg.password.value != "" && staffreg.password.value == staffreg.pass.value) 
						{ 
							if(!checkPassword(staffreg.password.value)) 
								{
									
								} 
						} 
							else 
								{ 
									alert("Error: Please check that you've entered and confirmed your password!"); 
									staffreg.password.focus(); return false; 
								}
				}
</script>
	
	
</head>
<body>
	<h1 align=center>STAFF REGISTRATION</h1>
	<form name="staffreg" action="" method="post"  onSubmit="return checkForm()"  >
		<div style=" border: 1px; border-style: solid; border-color: #FC0; -moz-border-radius: 15px; border-radius: 15px; padding: 5px; margin: 5px">
			<table width=100%>
				<tr>
					<td>
						<div>
							<table cellpadding="5" cellspacing="5">
								<tr>
									<td> FIRST NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><input type="text"  name="first_name"  value="" required pattern="\w+"></td>
								</tr>
								<tr>
									<td> LAST NAME </td>
									<td><input type="text"  name="last_name"  value=""></td>
								</tr>
								<tr>
									<td> ADDRESS </td>
									<td><input type="text"  name="address"  value=""></td>
								</tr>
								<tr>
									<td> EMAIL </td>
									<td><input type="text"  name="email"   value=""  placeholder="abc@abc.com" required  ></td>
								</tr>
								<tr>
									<td> NIC </td>
									<td><input type="text"  name="nic"    value=""   required ></td>
								</tr>
								<tr>
									<td> PHONE NO </td>
									<td><input type="text"  name="phone"   value=""  ></td>
								</tr>
							</table>
						</div>
					</td>					
					<td>
						<div>
							<table cellpadding="5" cellspacing="5">
								<tr>
									<td> USER NAME </td>
									<td><input type="text"  name="user_name"  value=""   required  ></td>
								</tr>
								<tr>
									<td> PASSWORD </td>
									<td><input type="password"  name="password"  value="" title="Password must contain at least 6 characters, including UPPER/lowercase, Characters and numbers" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  onchange=" this.setCustomValidity(this.validity.patternMismatch ? this.title : '')" ></td>
								</tr>
								<tr>
									<td> RE ENTER PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><input type="password"  name="pass"  value="" required    title="Please enter the same Password as above"   onchange=" this.setCustomValidity(this.validity.patternMismatch ? this.title : ''); "></td>
								</tr>
								<tr>
									<td colspan=2  align="right"><input type="submit" name="submit" value="Submit">
									<input type="reset" name="reset" value="Reset"></td>
								</tr>
							</table>
						</div>
					</td>		
				</tr>
			</table>
		</div>	
	</form>		
</body>
</html>