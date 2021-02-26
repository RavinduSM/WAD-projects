-<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>signup</title>
<link rel="stylesheet" href="css/signup.css">
<script type="text/javascript">
function validatefirstName()
{
	var name = document.getElementById("txt_f_name").value;
	if((name == "")||(name == null))
	{
		alert("Please enter your first name");
		return false;
	}
	return true;
}
function validateLastName()
{
	var name = document.getElementById("txt_l_name").value;
	if((name == "")||(name == null))
	{
		alert("Please enter a last name");
		return false;
	}
	return true;
}
function validateEmail()
{
	var email = document.getElementById("txt_email").value;
	var at = email.indexOf("@");
	var dt = email.lastIndexOf(".");
	var len = email.length;
	
	if((at < 2)||(dt-at < 2)||(len-dt < 2))
	{
		alert("Please enter a valid email address");
		return false;
	}
	return true;
}
function validatePassword()
{
	var pwd = document.getElementById("txtpassword").value;
	var cpwd = document.getElementById("txtconfirmpassword").value;
	if((pwd.length >= 20)||( pwd != cpwd))
	{
		alert("Please enter a correct Password and renter password  to Confirm password");
		return false;
	}
return true;
}
function validateContact()
{
	var cno = document.getElementById("txt_tele").value;
	if((isNaN(cno))||(cno.length != 10))
	{
		alert("Please enter a valid contact number");
		return false;
	}
	return true;
}
function Validate()
{
	if(validatefirstName()&& validateLastName()&& validateEmail()&&validatePassword() && validateContact())
	{
		alert("Registration is completed");
	}
	else
	{
		event.preventDefault();
	}
}
</script>
</head>

<body>
	
	<div class="container">
	<h2>SIGN UP</h2>
	<form id="form2" name="form-signup" method="post" action="adduser.php">
		<input type="text" name="txt_f_name" id="txt_f_name" placeholder="First Name" required><br><br>
		<input type="text" name="txt_l_name" id="txt_l_name" placeholder="Last Name" required><br><br>
		<input type="number" name="txt_tele" id="txt_tele" placeholder="Phone Number" required><br><br>
		<input type="email" name="txt_email" id="txt_email" placeholder="Email" required><br><br>
		<input type="password" name="txtpassword" id="txtpassword" placeholder="Password" required><br><br>
		<input type="password" name="txtconfirmpassword" id="txtconfirmpassword" placeholder="Confirm Password" required><br><br>
		<input type="file" name="file">
		<br><br>
		<input type="submit" name="btnSubmit" id="btnSubmit"  value="Register" class="registerbtn" onclick="Validate()" >
		<input type="reset" name="btnReset" id="btnReset"  class="cancelbtn" value="Reset" />
		</form>
	</div>
</body>
</html>