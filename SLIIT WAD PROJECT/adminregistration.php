<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Registration</title>
<link rel="stylesheet" href="css/signup.css">
<script type="text/javascript">
function validateUserName()
{
	var name = document.getElementById("user_name").value;
	if((name == "")||(name == null))
	{
		alert("Please enter your first name");
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

function validateAdminCode()
	{
		var code=document.getElementById("txtcode").value;
		if(code != 6656)
			{
		alert("Please enter the corect admin code");
		return false;
	}
		return true;
	}

function Validate()
{
	if(validateUserName()&& validatePassword() && validateAdminCode())
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
	<h2>ADMIN SIGN UP</h2>
	<form id="form4" name="form-adminregistration" method="post" action="addadmin.php">
		<input type="text" name="user_name" id="user_name" placeholder="User Name" required><br><br>
		<input type="password" name="txtpassword" id="txtpassword" placeholder="Password" required><br><br>
		<input type="password" name="txtconfirmpassword" id="txtconfirmpassword" placeholder="Confirm Password" required><br><br>
		<input type="password" name="txtcode" id="txtcode" placeholder="Confirm admin code" required><br><br>
		
		<input type="submit" name="btnSubmit" id="btnSubmit"  value="Register" class="registerbtn" onclick="Validate()" >
		<input type="reset" name="btnReset" id="btnReset"  class="cancelbtn" value="Reset" />
		</form>
	</div>
	
</body>
</html>