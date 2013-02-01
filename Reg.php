<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["register"]["Username"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out");
  return false;
  }
var x=document.forms["register"]["Name"].value;
if (x==null || x=="")
  {
  alert("Name must be filled out");
  return false;
  }
var z=document.forms["register"]["address"].value;
if (z==null || z=="")
  {
  alert("Address must be filled out");
  return false;
  }


var x=document.forms["register"]["Telephone"].value;
if (x==null || x=="")
  {
  alert("contact must be filled out");
  return false;
  }
var x=document.forms["register"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
var x=document.forms["register"]["pwd"].value;
if (x==null || x=="")
  {
  alert("please enter password");
  return false;
  }
var y=document.forms["register"]["cpwd"].value;
if (y==null || y=="")
  {
  alert("please enter password");
  return false;
  }
if(x!=y)
	{
	alert("Your password and confirmation password do not match");
  	return false;	
	}



}


function validateForm1()
{

var x=document.forms["login"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
var x=document.forms["login"]["pwd"].value;
if (x==null || x=="")
  {
  alert("please enter password");
  return false;
  }

}

</script>

<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	width:600px;
	height:400px;
	z-index:1;
	left: 53px;
	top: 22px;
	border-style:double;
	border-width:thick;
	background-color:#585858;
}

#apDiv3 {
	position:absolute;
	width:2px;
	height:98%;
	z-index:1;
	left: 50%;
	top: 1%;
	
	
	background-color:#FFF;
	
}
#apDiv2 {
	position:absolute;
	width:50%;
	height:100%;
	z-index:2;
	top: 7px;
	left: 5px;
}
#apDiv4 {
	position:absolute;
	width:50%;
	height:100%;
	z-index:3;
	left: 312px;
	top: 1px;
}

-->
</style>
</head>

<body style="background-color:#ffffff;border:1px solid black;opacity:0.6;filter:alpha(opacity=60); >
<div id="apDiv1">
  <div id="apDiv2">
<h1 align="left" style="position:absolute; left:15%; top:5%;">Register <br/>
</h1>
<p align="left">&nbsp;</p>
<form method="POST" action="Divert.php" name="register" onsubmit="return validateForm()">
  <table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:5%; top:30%">
  <tr>
  <td height="25"><font color="#CCCCCC">Username:</font></td>
  <td><input type="text" name="Username" ></td>
  </tr>
  <tr>
  <td><label for="Password"><font color="#CCCCCC">Password: </font></label></td>
  <td><input type="password" name="pwd" id="pwd" /></td>
  </tr>
  <tr>
  <td><label for="Full Name"><font color="#CCCCCC">Full Name:</font></label></td>
  <td><input type="text" name="Name" id="Name" /></td>
  </tr>
  <tr>
  <td><label><font color="#CCCCCC">Address</font></label></td>
  <td><input type="textarea" name="address" id="address" /></td>
  </tr>
  <tr>
  <td><label for="Telephone"><font color="#CCCCCC">Contact:</font></label></td>
  <td><input type="text" name="Telephone" id="Telephone" /></td>
  </tr>
  <tr>
  <td><label for="E-mail"><font color="#CCCCCC">E-mail:</font></label></td>
  <td><input type="text" name="email" id="email" /></td>
  </tr>
  </table>

<p>&nbsp;</p>
  
<input type="submit" name="submit" id="submit" value="Submit" style=" position:absolute; left:50%; top:85%;"/>

</form>
</div>
 
<div id="apDiv3"></div>
 <div id="apDiv4">
 <h1 align="center">SignUp</h1>
<p align="center">&nbsp;</p>
<form method="POST" action="check.php" onsubmit="return validateForm1()">
  <table align="center" border="0" cols=2 cellspacing="3">
  <tr>
  <td height="25"><font color="#CCCCCC">Username:</font></td>
  <td><input type="text" name="Username"></td>
  </tr>
  <tr>
  <td><label for="Password"><font color="#CCCCCC">Password:</font></label></td>
  <td><input type="password" name="pwd" id="pwd" /></td>
  </tr>
  <tr>
 <input type="submit" name="submit" id="submit" value="LOG-IN" style=" position:absolute; left:65%; top:50%;"/>
</form>

 </div>
</div>
</body>
</html>
