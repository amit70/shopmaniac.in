	<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="prodimg/title123.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="navbar.css" rel="stylesheet" type="text/css" />
<title>Payment & Shipping : Shopmaniac.in</title>
<script type="text/javascript" language="javascript">
function website()
{
	document.forms["website1"].submit();
}

function logtr() {
			document.getElementById('logdiv').style.visibility='visible';
			document.getElementById('trans').style.visibility='visible';
			document.getElementById('logdiv').style.opacity=100;
		}
		function ilogtr() {
			document.getElementById('logdiv').style.visibility='hidden';
			document.getElementById('trans').style.visibility='hidden';
		}
		function login() {
			document.getElementById('logdiv1').style.opacity=255;
			document.getElementById('logdiv2').style.opacity=0.3;
		}
		function reg() {
			document.getElementById('logdiv2').style.opacity=255;
			document.getElementById('logdiv1').style.opacity=0.3;
		}
//----------------------------------------------------------------------------------------

function reg1()
{
  var x=document.forms["register"]["name123"].value;
  if (x==null || x=="")
  {
  	alert("Name must be filled out");
  	return false;
  }
var z=document.forms["register"]["address2"].value;
if (z==null || z=="")
  {
  	alert("Address must be filled out");
 	return false;
  }


var x=document.forms["register"]["contact2"].value;
if (x==null || x=="")
  {
  	alert("Contact must be filled out");
  	return false;
  }
  if(isNaN(x))
 {
	 alert("Contact Must be Numerical");
	 return false;
 }
var x=document.forms["register"]["email"].value;
if(x==null || x=="")
{
	alert("Please Enter E-Mail Address");
	return false;
}
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  	alert("Not a valid E-Mail address");
  	return false;
  }
document.forms["register"].submit();
}		

function mytrol()
{
	document.forms["trol"].submit();
}

		function myaccount()
{
    document.forms["acc"].submit();
}
function homes()
{ 
    document.forms["home"].submit();
}
function aaa(amit)
{
	var x=document.getElementById('srch').value;
	if(x=="" || x==null || x=="search for your favourite brand and products")
	{
		alert("Please Enter Your Search");
		return false;
	}
    document.forms[amit].submit();
}		

function confirm(b,c)
{	

	var z=b;
	
	if(z==70)
	{
	var x1=document.getElementById('address1').value;
	var x2=document.getElementById('landbill').value;
	var x3=document.getElementById('citybill').value;
	var x4=document.getElementById('statebill').value;
	var x5=document.getElementById('pinbill').value;
	var x6=document.getElementById('contact1').value;
	var x7=document.getElementById('nameship').value;
	var x8=document.getElementById('address2').value;
	var x9=document.getElementById('landship').value;
	var x10=document.getElementById('cityship').value;
	var x11=document.getElementById('stateship').value;
	var x12=document.getElementById('pinship').value;
	var x13=document.getElementById('contact2').value;
	var x14=document.getElementById('emailship').value;
	
	
	if(x1==null || x1=="")
		 {
			 alert("Please Enter Address Of Billing Details");
			 return false;
		 }
	if(x2==null || x2=="")
		 {
			 alert("Please Enter LandMark Of Billing Details");
			 return false;
		 }	
	if(x3==null || x3=="")
		 {
			 alert("Please Enter City Of Billing Details");
			 return false;
		 }	
	if(x4=="Select State")
		 {
			 alert("Please Select State Of Billing Details");
			 return false;
		 }
	if(x5==null || x5=="")
		 {
			 alert("Please Enter Pincode Of Billing Details");
			 return false;
		 }
	 if(isNaN(x5))
 		{
	 		alert("Pincode must be Numerical");
	 		return false;
 		}	
	if(x5.length<6 || x5.length>6)
		{
	 		alert("Please Enter valid Pincode");
	 		return false;
		}
	if(x6==null || x6=="")
		 {
			 alert("Please Enter Contact Number Of Billing Details");
			 return false;
		 }
	 if(isNaN(x6))
 		{
	 		alert("Contact Number Must be Numerical");
	 		return false;
 		}
		if(x6.length<10)
		{
			alert("Please Enter Valid Contact Number");
			return false;
		}
	if(x7==null || x7=="")
		{
			alert("Please Enter Full Name Of Shipping details");
			return false;
		}
	if(x8==null || x8=="")
		 {
			 alert("Please Enter Address Of Shipping Details");
			 return false;
		 }
	if(x9==null || x9=="")
		 {
			 alert("Please Enter LandMark Of Shipping Details");
			 return false;
		 }	
	if(x10==null || x10=="")
		 {
			 alert("Please Enter City Of Shipping Details");
			 return false;
		 }	
	if(x11==null || x11=="" || x11=="Select State")
		 {
			 alert("Please Select State Of Shipping Details");
			 return false;
		 }
	if(x12==null || x12=="")
		 {
			 alert("Please Enter Pincode Of Shipping Details");
			 return false;
		 }
	 if(isNaN(x12))
 		{
	 		alert("Pincode must be Numerical");
	 		return false;
 		}	
	if(x12.length<6 || x12.length>6)
		{
	 		alert("Please Enter valid Pincode");
	 		return false;
		}	 
	if(x13==null || x13=="")
		 {
			 alert("Please Enter Contact Number Of Shipping Details");
			 return false;
		 }	
	if(isNaN(x13))
 		{
			 alert("Contact Number Must be Numerical");
			 return false;
 		}
	if(x13.length<10)
		{
	 		alert("Please Enter valid Number");
	 		return false;
		}
 	if(x14==null || x14=="")
		{
			alert("Please Enter E-Mail Address");
			return false;
		}
		var atpos=x14.indexOf("@");
	var dotpos=x14.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x14.length)
  	{
  		alert("Not a valid E-Mail address");
  		return false;
  	}
  
		if(document.getElementById('pay1').checked || document.getElementById('pay2').checked || document.getElementById('pay3').checked || document.getElementById('pay4').checked)
		 {
			 
			var x15=document.getElementById('capt').value
			if(x15==null || x15=="")
			{
				alert("Please Enter Captcha Text");
				return false;
			}
			if(x15 != c)
			{
				alert("PLease Enter Correct Captcha Text");
			}
			else
			{
				document.forms['confirm1'].submit();
			}
		 }
		 else
		 {
			 alert("Select any one payment option");
		 }	
	}
	else
	{
	var x7=document.getElementById('nameship').value;
	var x8=document.getElementById('address2').value;
	var x9=document.getElementById('landship').value;
	var x10=document.getElementById('cityship').value;
	var x11=document.getElementById('stateship').value;
	var x12=document.getElementById('pinship').value;
	var x13=document.getElementById('contact2').value;
	var x14=document.getElementById('emailship').value;
		if(x7==null || x7=="")
		{
			alert("Please Enter Full Name Of Shipping details");
			return false;
		}
	if(x8==null || x8=="")
		 {
			 alert("Please Enter Address Of Shipping Details");
			 return false;
		 }
	if(x9==null || x9=="")
		 {
			 alert("Please Enter LandMark Of Shipping Details");
			 return false;
		 }	
	if(x10==null || x10=="")
		 {
			 alert("Please Enter City Of Shipping Details");
			 return false;
		 }	
	if(x11==null || x11=="" || x11=="Select State")
		 {
			 alert("Please Select State Of Shipping Details");
			 return false;
		 }
	if(x12==null || x12=="")
		 {
			 alert("Please Enter Pincode Of Shipping Details");
			 return false;
		 }
	 if(isNaN(x12))
 		{
	 		alert("Pincode must be Numerical");
	 		return false;
 		}	
	if(x12.length<6 || x12.length>6)
		{
	 		alert("Please Enter valid Pincode");
	 		return false;
		}	 
	if(x13==null || x13=="")
		 {
			 alert("Please Enter Contact Number Of Shipping Details");
			 return false;
		 }	
	if(isNaN(x13))
 		{
			 alert("Contact Number Must be Numerical");
			 return false;
 		}
		if(x13.length<10)
		{
	 		alert("Please Enter valid Contact Number Of Shipping Details");
	 		return false;
		}
 	if(x14==null || x14=="")
		{
			alert("Please Enter E-Mail Address");
			return false;
		}
	var atpos=x14.indexOf("@");
	var dotpos=x14.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x14.length)
  	{
  		alert("Not a valid E-Mail address");
  		return false;
  	}
  
		if(document.getElementById('pay1').checked || document.getElementById('pay2').checked || document.getElementById('pay3').checked || document.getElementById('pay4').checked)
		 {	
			var x15=document.getElementById('capt').value
			if(x15==null || x15=="")
			{
				alert("Please Enter Captcha Text");
				return false;
			}
			if(x15 != c)
			{
				alert("PLease Enter Correct Captcha Text");
			}
			else
			{
				document.forms['confirm1'].submit();
			}
		}

		 else
		 {
			 alert("Select any one payment option");
		 }	
	}
}


</script>
<style type="text/css">
body {
			 padding: 0; 
            font: 1em "Trebuchet MS", verdana, arial, sans-serif; 
            font-size: 100%;
            background-color: #fff;
            margin: 0;
			}
			img {
   border: 0;
}
a { 
    text-decoration: none; 
    border:0;
    color: #248AC9; 
}
			#container {
            background-color: #fff;
            width: 420px;
            margin: 0px auto;
            padding: 200px;
	
        }
p.guest
{
	position:absolute;

	right:95%;
	top:-50%;
	font-size:90%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.call
{
	position:absolute;
	right:63%;
	top:-50%;
	font-size:85%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.mail
{
	position:absolute;
	right:20%;
	top:-50%;
	font-size:93%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.acc
{
	position:absolute;
	right:0%;
	top:-50%;
	font-size:90%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.aaa
{
	position:absolute;
	top:45%;
	right:0%;
	font:Verdana, Geneva, sans-serif;
	font-size:13px;
	}
#apDiv38 {
	position:absolute;
	width:50%;
	height:50%;
	z-index:1;
	right:12%;
	top: 35%;
	background-color:#D6D6D6;
	border-style:double;
	border-width:medium;
	border-color:#A0A0A0;
}

#apDiv42 {
position:relative;
	width:194%;
	height:80px;
	left:-200px;
	z-index:1;
	top: -200px;
}
#apDiv43 
{
	position:absolute;
	top:0%;
	right:0%;
	width: 45%;
	height: 18%;
	font:Verdana, Geneva, sans-serif;
	font-size:11px;
	color:#666;
	
}
#apDiv1 {
	position:relative;
	width:66%;
	height:570px;
	z-index:2;
	left: -200px;
	top: -165px;
	background-color:#f6f6f6;
	overflow:scroll;
}

#apDiv2 {
	position:relative;
	width:66%;
	height:570px;
	z-index:2;
	left: 85px;
	top: -730px;
	background-color:#f6f6f6;
}
#apDiv3 {
	position:relative;
	width:63%;
	height:570px;
	z-index:2;
	right:-370px;
	top: -1300px;
	background-color:#f6f6f6;
}
#logdiv
{
	position:fixed;
	top:50%;
	left:50%;
	width:45%;
	height:70%;
	margin-top:-35%;
	margin-left:-25%;
	visibility:hidden;
	z-index:10000;
	background-color:#f6f6f6;
	border:thin;
	border-style:solid;
	border-color:#fff;
}

#logdiv2
{
	position:absolute;
	left:2%;
	top:3%;
	width:60%;
	height:98%;
	opacity:100;
}
p.edit
{
	position:absolute;
	left:30%;
	top:85%;
}

#trans {
				visibility:hidden;
				position:fixed;
				left:0%;
				top:0%;
				width:100%;
				height:100%;
				z-index:1000;
				background:#333;
				/* For web browsers who care */
				opacity: 0.7;
				/* For IE 5-7 */
				filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
				/* For IE 8 (and 9, 10, 11?). Don't miss the added quotes */
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";
				}
				#navigation
				{
					position:relative;
					top:-185px;
					left:-200px;
					height:35px;
					width:100%;
					border-style:solid;
					border-color:#fff;
				}
				#bill
				{
					position:relative;
					left:-200px;
					top:-175px;
					width:198%;
					height:40px;
					background-color:#f6f6f6;
				}
				#confirm
				{
					position:relative;
					left:-20px;
					top:-1300px;
					width:70%;
					height:50px;
					
				}
				#payment
				{
					position:relative;
					left:230px;
					top:-1210px;
					width:96%;
					height:150px;
				}
				
</style>
</head>

<body>
<div id="container">
<?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from user where username='$_SESSION[uname]'");
while($row = mysql_fetch_array($qry))
{
	$trolley1=$row['trolley'];
}
$arr=spliti(",",$trolley1);
$no=0;
$no=count($arr);
?>



<?php
include("header.php");
?>

<div id="navigation">
<a href="mytrolley2.php"><img src="prodimg/trolley.png" width="32%" height="100%" style="position:absolute; left:0%; top:0%" /></a>
<a href="payment.php"><img src="prodimg/payment1.png" width="35%" height="100%" style="position:absolute; left:29.5%; top:0%" /></a>
<img src="prodimg/confirmation1.png" width="32%" height="100%" style="position:absolute; left:62%; top:0%" />
<img src="prodimg/forward.png" width="7%" height="90%" style="position:absolute; left:92%; top:5%" />
</div>
<div id="bill">
<p style="position:absolute;top:-50%; left:35%;font-family:'Comic Sans MS', cursive; font-size:150%; font-variant:small-caps;">Billing Counter</p>
</div>


<div id="apDiv1">
<p style="position:absolute;top:-2%;left:28%; font-family:'Comic Sans MS', cursive; color:#111; font-weight:bold;">Order Details</p>
<table align="left" border="0" cols=2 cellspacing="3" style="position:absolute; left:2%; top:7%">
  <tr>
  <th height="40"  width="140"><font color="#666666" face="Comic Sans MS, cursive">Product</font></th>
  <th height="40" width="140" ><font color="#666666" face="Comic Sans MS, cursive">Name</font></th>
  <th height="40" width="140"><font color="#666666" face="Comic Sans MS, cursive">Size</font></th>
  <th height="40" width="140"><font color="#666666" face="Comic Sans MS, cursive">Price</font></th>
  <th height="40" width="140"><font color="#666666" face="Comic Sans MS, cursive">Quantity</font></th>
  <th height="40" width="140"><font color="#666666" face="Comic Sans MS, cursive">Total</font></th>
  </tr>
  
 
  <?php
  $total=0;
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from user where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$trolley1=$row['trolley'];
}
$arr=spliti(",",$trolley1);
$no=count($arr);
$zzz=$_POST["quant"];
if($zzz!=="" || $zzz!==NULL)
{
  $arr123=spliti(",",$zzz);
}
for($i=0;$i<$no-1;$i++)
{
$temp=(int)$arr[$i];
	$qry=mysql_query("select * from products where pid=$temp");
	while($row = mysql_fetch_array($qry))
	{
		$id=$row['pid'];
		$pname= $row['pname'];
		$size= $row['size'];
		$price= $row['discprice'];
		$img1=$row['img1'];
		$brand=$row['brand'];
	}
	if($zzz=="" || $zzz==NULL)
	{
		$finalprice=$price*1;
	}
	else
	{
	$finalprice=$price*$arr123[$i];
	}
  echo "<tr>";
  
 echo "<td width=\"50\" align=\"center\">";
  echo "<img src=\"prodimg/$img1\" width=\"100%\" height=\"13%\">";
  echo "</td>";
  
  echo "<td align=\"center\"><font face=\"Comic Sans MS, cursive\">";
  echo "$pname";
  echo "</font>";
  echo "</td>";
  

  echo "<td align=\"center\"><font face=\"Comic Sans MS, cursive\">";
  echo "$size";
   echo "</font>";
  echo "</td>";
  
  
  echo "<td align=\"center\"> <font face=\"Comic Sans MS, cursive\">";
  echo "$price";
   echo "</font>";
  echo "</td>";
  	
	if($zzz=="" || $zzz==NULL)
	{
  echo "<td align=\"center\"> <font face=\"Comic Sans MS, cursive\">";
  echo "1";
  echo "</font>";
  echo "</td>";
	}
	else
	{
   echo "<td align=\"center\"> <font face=\"Comic Sans MS, cursive\">";
  echo "$arr123[$i]";
   echo "</font>";
  echo "</td>";
	}
  	
    echo "<td align=\"center\"> <font face=\"Comic Sans MS, cursive\">";
  echo "$finalprice";
   echo "</font>";
  echo "</td>";
  
  echo "<tr>";
    $total+=$finalprice;
  }

  ?>
  </table>
</div>



<div id="apDiv2">
  <?php
  $aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from user where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$namebill=$row['username'];
	$address=$row['address'];
	$contactbill=$row['contact'];
	$emailbill=$row['email'];
	$arr1=spliti(",",$address);
	
}
  ?>
<p style="position:absolute; left:30%; top:-2%; font-family:'Comic Sans MS', cursive; color:#111; font-weight:bold; ">Billing Details</p>

<form method="POST" action="confirmation.php" name="confirm1" id="confirm1" >
<table border="0"  cellspacing="3" style="position:absolute;left:2%; top:8%;">
<?php
if($address=="" || $address==NULL)
{
	echo "<tr>";
echo "<td height=\"50\" width=\"100\"><font color=\"#666666\" face=\"Comic Sans MS, cursive\">Full Name:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "$namebill";
echo "</font>";
echo " </td>";
echo "</tr>";

 echo "<tr>";
 echo "<td height=\"50\"><font color=\"#666666\" face=\"Comic Sans MS, cursive\">Address:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "<textarea rows=\"4\" cols=\"17\" name=\"address1\" id=\"address1\"></textarea>";
echo "</font>";
echo "</td>";
echo "</tr>";

 echo "<tr>";
 echo "<td height=\"50\"><font color=\"#666666\" face=\"Comic Sans MS, cursive\">Landmark:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "<input type=\"text\" name=\"landbill\" id=\"landbill\">";
echo "</font>";
echo "</td>";
echo "</tr>";

 echo "<tr>";
 echo "<td height=\"50\"><font color=\"#666666\" face=\"Comic Sans MS, cursive\">City:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "<input type=\"text\" name=\"citybill\" id=\"citybill\">";
echo "</font>";
echo "</td>";
echo "</tr>";

 echo "<tr>";
 echo "<td height=\"50\"><font color=\"#666666\" face=\"Comic Sans MS, cursive\">State:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "<select name=\"statebill\" id=\"statebill\">
	<option>Select State</option>
	<option>Maharashtra</option>";
	echo "</select>";
echo "</font>";
echo "</td>";
echo "</tr>";

echo "<tr>";
 echo "<td height=\"50\"><font color=\"#666666\" face=\"Comic Sans MS, cursive\">Pincode:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "<input type=\"text\" name=\"pinbill\" id=\"pinbill\">";
echo "</font>";
echo "</td>";
echo "</tr>";

echo "<tr>";
 echo "<td height=\"50\"><font color=\"#666666\" face=\"Comic Sans MS, cursive\">Country :- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "<input type=\"text\" name=\"country\" id=\"country\" value=\"India\" disabled=\"disable\">";
echo "</font>";
echo "</td>";
echo "</tr>";



echo "<tr>";
 echo "<td height=\"50\"><font color=\"#666666\" face=\"Comic Sans MS, cursive\">Contact Number:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "<input type=\"text\" name=\"contact1\" id=\"contact1\">";
echo "</font>";
echo "</td>";
echo "</tr>";

echo "<tr>";
 echo "<td height=\"50\"><font color=\"#666666\" face=\"Comic Sans MS, cursive\">Email Id:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "$emailbill";
echo "</font>";
echo "</td>";
echo "</tr>";
}
else
{
	 echo "<tr>";
echo "<td height=\"50\" width=\"1\"><font color=\"#666666\" face=\"Comic Sans MS, cursive\">Full Name:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "$namebill";
echo "</font>";
echo " </td>";
echo "</tr>";

echo "<tr> ";
echo "<td ><font color=\"#666666\" face=\"Comic Sans MS, cursive\">Address:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "$address";
echo "</font>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td height=\"50\" ><font color=\"#666666\" face=\"Comic Sans MS, cursive\">Contact Number:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "$contactbill"; 
echo "</font>";
echo " </td>";
echo "</tr>";

echo "<tr>";
echo "<td height=\"50\" width=\"10\"><font color=\"#666666\" face=\"Comic Sans MS, cursive\">Email Id:- </font></td>";
echo "<td><font face=\"Comic Sans MS, cursive\">";
echo "$emailbill";
echo "</font>";
echo " </td>";
echo "</tr>"; 
}
?>
</table>
</div>

<div id="apDiv3">
<?php
  $aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from user where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$nameship=$row['username'];
	$addship=$row['address'];
	$contactship=$row['contact'];
	$emailship=$row['email'];
	$mypoints=$row['mypoints'];
}
  ?>

<p style="position:absolute; left:30%; top:-2%; font-family:'Comic Sans MS', cursive; font-weight:bold;">Shipping Details</p>

<table align="left" border="0" cols=2 cellspacing="3" style="position:absolute;left:2%; top:10%">
  <tr>
  <td height="50" width="100"><font color="#666666" face="Comic Sans MS, cursive">Full Name:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "<input type=\"text\" name=\"nameship\" id=\"nameship\">";
?></font>
 </td>
  </tr>
  
  
  <tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">Address:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "<textarea rows=\"4\" cols=\"17\" name=\"address2\" id=\"address2\"></textarea>";
?></font>
 </td>
  </tr>
  
   <tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">LandMark:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "<input type=\"text\" name=\"landship\" id=\"landship\">";
?></font>
 </td>
  </tr>
  
    <tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">City:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "<input type=\"text\" name=\"cityship\" id=\"cityship\">";
?></font>
 </td>
  </tr>
  
    <tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">State:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "<select name=\"stateship\" id=\"stateship\">
<option>Select State</option>
<option>Maharashtra</option>";
echo "</select>";
?></font>
 </td>
  </tr>
  
  <tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">Pincode:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "<input type=\"text\" name=\"pinship\" id=\"pinship\">";
?></font>
 </td>
  </tr>
  
    <tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">Country:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "<input type=\"text\" name=\"country\" id=\"country\" value=\"India\" disabled=\"disable\">";
?></font>
 </td>
  </tr>
  
  <tr>
  <td height="70"><font color="#666666" face="Comic Sans MS, cursive">Contact Number:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "<input type=\"text\" name=\"contact2\" id=\"contact2\">";
?></font>
 </td>
  </tr>
  
   
<tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">Email Id:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "<input type=\"text\" name=\"emailship\" id=\"emailship\">";
?></font>
 </td>
  </tr>
  </table>

<?php
/*if($addship!="")
{
echo "<p class=\"edit\"><a href=\"#\" onmouseover=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#F00'\" onclick=\"logtr()\" style=\"text-decoration:none; color:#F00; text-decoration:underline;\">EDIT</a></p>";
}*/
?>
</div>  


<table align="left" border="5" cols=2 cellspacing="2" style="position:relative; left:-200px; top:-1210px;">
 <tr>
  <th height="40" width="80"><font color="#666666" face="Comic Sans MS, cursive">Total</font></th>

  <th height="40" width="80"><font color="#666666" face="Comic Sans MS, cursive">MyPoints Discount</font></th>
      <th height="40" width="80"><font color="#666666" face="Comic Sans MS, cursive">Total</font></th>

  <th height="40" width="80"><font color="#666666" face="Comic Sans MS, cursive">Credit</font></th>

  <th height="40" width="80"><font color="#666666" face="Comic Sans MS, cursive">You Pay</font></th>
  </tr>
  
  <tr>
  <td><font face="Comic Sans MS, cursive"><?php
  $full=0;
  if($total<200)
  {
  $full=$total+30;
  echo "$total+30=$full";
  }
  else
  {
	  echo "$total";
  }
  ?></font></td> 
  
   <td><font face="Comic Sans MS, cursive"><?php
  if($mypoints<=4999)
  {
	  echo "0%";
  }
   else if($mypoints>=5000 && $mypoints<=7999)
   {
   echo "3%";
   }
  else if($mypoints>=8000 && $mypoints<=9999)
  {
   echo "5%";
  }
  else if($mypoints>=10000 && $mypoints<=14999)
  {
	  echo "7%";
  }
  else if($mypoints>=15000)
  {
	  echo "10%";
  }
   ?>
 </font></td>
 
  <td><font face="Comic Sans MS, cursive"><?php
  $final=0;
  if($total<200)
  {
	  if($mypoints<=4999)
  {
	  $final=$full-0;
	   $final=round($final);
	  echo "$final";
  }
  else if($mypoints>=5000 && $mypoints<=7999)
  {
	  $discount=($full*3)/100;
	  $final=$full-$discount;
	  $final=round($final);
	  echo "$final";
  }
  else if($mypoints>=8000 && $mypoints<=9999)
  {
	  $discount=($full*5)/100;
	  $final=$full-$discount;
	   $final=round($final);
	  echo "$final";
  }
  else if($mypoints>=10000 && $mypoints<=14999)
  {
	  $discount=($full*7)/100;
	  $final=$full-$discount;
	   $final=round($final);
	  echo "$final";
  }
  else if($mypoints>=15000)
  {
	  $discount=($full*10)/100;
	  $final=$full-$discount;
	   $final=round($final);
	  echo "$final";
  }
  }
  else
  {
   if($mypoints<=4999)
  {
	  $final=$total-0;
	   $final=round($final);
	  echo "$final";
  }
  else if($mypoints>=5000 && $mypoints<=7999)
  {
	  $discount=($total*3)/100;
	  $final=$total-$discount;
	   $final=round($final);
	  echo "$final";
  }
  else if($mypoints>=8000 && $mypoints<=9999)
  {
	  $discount=($total*5)/100;
	  $final=$total-$discount;
	   $final=round($final);
	  echo "$final";
  }
  else if($mypoints>=10000 && $mypoints<=14999)
  {
	  $discount=($total*7)/100;
	  $final=$total-$discount;
	   $final=round($final);
	  echo "$final";
  }
  else if($mypoints>=15000)
  {
	  $discount=($total*10)/100;
	  $final=$total-$discount;
	   $final=round($final);
	  echo "$final";
  }
  }
   ?>
   </font>
   </td>
   
   
  <td><font face="Comic Sans MS, cursive"><?php
  $qry5="select credits from user where username='".$_SESSION['uname']."'";
  $result5=mysql_query($qry5);
  while($row5=mysql_fetch_array($result5))
  {
	  $credits=$row5['credits'];
  }
echo $credits;
    ?></font></td>
    
  <td><font face="Comic Sans MS, cursive"><?php
  $total1=0;
  $leftcredits=0;
  $total1=$final-$credits;
  if($total1<0)
  {
	  $leftcredits=$credits-$final;
	  $total1=0;
  }
  echo "<b>$total1</b>";
  ?>
  </font></td> 
  </table>
  </tr>
  </tr>
  <?php
  if($credits>0)
  {
echo "<p style=\"position:relative; left:-200px; top:-1200px; color:#111;\">Your Credits Left is Rs $leftcredits</p>";
  }
?>
  
      
 
 <div id="payment">
<p style="position:absolute;top:-20%; left:25%;font-family:'Comic Sans MS', cursive; font-size:150%; font-variant:small-caps;">Payment Options	</p>


<input type="radio" name="radio" id="pay1" value="nb"  style="font-family:'Comic Sans MS', cursive; position:absolute; left:5%; top:26%;"><p style="position:absolute; left:12%; top:15%; font-family:'Comic Sans MS', cursive;">Net Banking</p>
<input type="radio" name="radio" id="pay2" value="db"  style="font-family:'Comic Sans MS', cursive; position:absolute; left:5%; top:55%; font-family:'Comic Sans MS', cursive;"><p style="position:absolute; left:12%; top:45%;" >Debit Card</p>

<input type="radio" name="radio" id="pay3" value="cc"  style="font-family:'Comic Sans MS', cursive; position:absolute; left:60%; top:25%; font-family:'Comic Sans MS', cursive;"><p style="position:absolute; left:67%; top:15%">Credit Card</p>

<input type="radio" name="radio" id="pay4" value="cod"  style="font-family:'Comic Sans MS', cursive; position:absolute; left:60%; top:58%; font-family:'Comic Sans MS', cursive;"><p style="position:absolute; left:67%; top:48%">Cash On Delivery</p>

</div>

<?php
 echo "<input type=\"hidden\" name=\"id\" value=\"$id\" />";
 echo "<input type=\"hidden\" name=\"namebill\" value=\"$namebill\" />";
 
 if($address!="")
 {
 echo "<input type=\"hidden\" name=\"addressbill\" value=\"$address\" />";
 }
  if($contactbill!="")
 {
 echo "<input type=\"hidden\" name=\"contact1\" value=\"$contactbill\" />";
 }

 echo "<input type=\"hidden\" name=\"emailbill\" value=\"$emailbill\" />";
 echo "<input type=\"hidden\" name=\"final123\" value=\"$total1\" />";
 echo "<input type=\"hidden\" name=\"leftcredits\" value=\"$leftcredits\" />";
 $_SESSION['total']	=$total;
 $_SESSION['quant']=$arr123;
 $_SESSION['credits']=$credits;
 ?>
</form> 


<?php
//if($_SERVER['REQUEST_METHOD']=="POST")
/*if(isset($_POST['capt']))
{

	if($_POST['capt']  == "")
	{
		$capt= rand(0, 99999999999); 
		$error="Please Enter Text";
	}
	else
	{
    if ($_POST['capt']  == $_SESSION['captcha'] )
	{
		
       echo "<script type=\"javascript\">";
	   echo "document.forms['confirm1'].submit()";
	   echo "</script>";
            
    }
	else
	{
	$capt= rand(0, 99999999999);  
       $_SESSION['captcha'] =$capt;
     $error="The Entered Code does not match";
    }
	}
}
else
{
	
     $capt='';  
     $capt= rand(0, 99999999999);  
     $_SESSION['captcha'] =$capt;
}
*/
?>

<div id="captcha" style="position:relative; left:280px; top:-1240px; width:80%; height:140px; border-color:#C1C1C1; border-style:double; ">
	
<form name="captcha" method="post" action="">
<p style="position:absolute; left:5%; top:-12%; font-family:'Comic Sans MS', cursive">Please Enter the Text shown below.</p> 
<img src="prodimg/captcha.jpg" width="30%" style="position:absolute; left:32%; top:20%" />
<?php
$capt='';  
$capt= rand(0, 99999999999);  
$_SESSION['captcha'] =$capt;
echo "<p style=\"position:absolute; left:35%; top:12%  \">$capt</p>";
?>
<input type="text"  id="capt" name="capt" style="position:absolute; left:25%; top:55%;"/>


<?php
/*if ($error!="")
{
echo "<div id=\"error\" style=\"position:absolute; left:0%; top:80%; width:100%; height:20%; background-color:#C00;\">";
echo "<p style=\"position:absolute; left:5%; top:-40%; font-family:'Comic Sans MS', cursive\">! $error</p>";
echo"</div>";
}*/
?>

   </form> 
</div>
 
 
 <div id="confirm">
<?php
if($contactbill=="")
{
	$contactbill="70";
}
echo "<a href=\"#\" onclick=\"confirm($contactbill,$capt)\"> <img src=\"prodimg/confirm.png\" width=\"75%\" height=\"90%\" style=\"position:absolute; left:20%; top:-5%;\" onmousedown=\"this.src='prodimg/confirm1.png'\" onmouseup=\"this.src='prodimg/confirm.png'\"/></a>";
?>
</div>


</div>
</body>
</html>	