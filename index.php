<?php
session_start();
$_SESSION['uname']="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="navbar.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<script src="javascript/jquery.js"></script>
<script type="text/javascript" language="javascript">
		
//----------------------------------------------------------------------------------------
function mytrol()
{
	document.forms["trol"].submit();
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

function prod(aaa)
{
	document.forms[aaa].submit();
}

function go(q)
{
    document.forms[q].submit();
}

		function logtr() {
			document.getElementById('logdiv').style.visibility='visible';
			document.getElementById('trans').style.visibility='visible';
			document.getElementById('logdiv').style.opacity=200;
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
function emailcheck()
{
var x=document.forms["login123"]["email123"].value;
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
	
window.location.href = ("recovery.php?email=" + x);
}

function login1()
{
var x=document.forms["login123"]["email123"].value;
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
	
var y=document.forms["login123"]["pwd123"].value;
if (y==null || y=="")
  {
  alert("Please enter password");
  return false;
  }
	document.forms["login123"].submit();
}


function reg1()
{
var x=document.forms["register"]["Username"].value;
if (x==null || x=="")
  {
  	alert("Plese Enter Full Name");
  	return false;
  }

  var x=document.forms["register"]["pwd"].value;
if (x==null || x=="")
  {
  	alert("Please enter password");
 	 return false;
  }
var y=document.forms["register"]["cpwd"].value;
if (y==null || y=="")
  {
  	alert("Please enter confirm password");
  	return false;
  }
if(x!=y)
	{
		alert("Your password and confirmation password do not match");
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
if(document.getElementById('male').checked || document.getElementById('female').checked)
{
	document.forms["register"].submit();
}
else
{
  alert("Plese select Gender");
 }
}	

function contact123()
{
var x=document.forms["contactaaa"]["contact1"].value;
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
if(document.getElementById('male').checked || document.getElementById('female').checked)
{
	document.forms["register"].submit();
}
else
{
  alert("Plese select Gender");
 }
}		


//------------------------------------------------------------------------
function myaccount(nam)
{
    document.forms[nam].submit();
}	

       var i=0;
var img=new Array(4);
var lnk=new Array(4);
	function preload() {
			img[0]="prodimg/slider-1.jpg";
			img[1]="prodimg/slider-2.jpg";
			img[2]="prodimg/slider-3.jpg";
			img[3]="prodimg/slider-4.jpg";
			lnk[0]="#";
			lnk[1]="#";
			lnk[2]="#";
			lnk[3]="#";
		    
			
	}
	function prev()
	{		
		i--;
		if(i>=0)
		{
			$("#banner").fadeOut("slow");		
			window.setTimeout("nx(i)",500);
		}
		else
		{
			i=3;
			$("#banner").fadeOut("slow");
			window.setTimeout("nx(i)",500);
		}
	}
	function nx(i)
	{
		document.getElementById('wid').innerHTML="";
		document.getElementById('wid').innerHTML='<a href="'+lnk[i]+'"><img src="'+img[i]+'" id="banner" style="display:none;position:relative;width:100%;height:100%;left:0;top:0;"></a>';
		$("#banner").fadeIn("slow");
	}
	function next()
	{		
		i++;
		if(i<=3)
		{
			$("#banner").fadeOut("slow");
			window.setTimeout("nx(i)",500);
		}
		else
		{
			i=0;
			$("#banner").fadeOut("slow");
			window.setTimeout("nx(i)",500);
		}
	}
	window.setInterval("next()",5000);

	
		
        </script>
<style type="text/css">
body {
	
					
            padding: 0; 
            font: 1em "Trebuchet MS", verdana, arial, sans-serif; 
            font-size: 100%;
            background-color: #fff;
            margin: 0;
			
			}
			
			#container {
            background-color: #fff;
            width: 420px;
            margin: 0px auto;
            padding: 200px;
    height:0px;
	
	 background-color\9:#fff;
            width\9: 420px;
            margin\9: 0px auto;
            padding\9: 200px;
    height\9:0px;
	
        }
		#container a:visited{
				text-decoration:none; color:transparent;
			}
			#container a:active{
				text-decoration: none; color:transparent;
			}
			/* The CSS Code for the menu starts here */
			
			
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
	
h1{
	
	color:red;
	
}
p.aaa
{
	position:absolute;
	top:45%;
	right:0%;
	font-family:"Comic Sans MS", cursive;
	font-size:13px;
	}
p.a
{
	
	position:absolute;
	right:1%;
	top:-10%;
	font-size:13px;
	font-family:"Comic Sans MS", cursive;
}

p.call
{
	position:absolute;
	right:70%;
	top:-50%;
	font-size:95%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.mail
{
	position:absolute;
	right:30%;
	top:-50%;
	font-size:95%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.acc
{
	position:absolute;
	right:12%;
	top:-50%;
	font-size:95%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}

p.sign
{
	position:absolute;
	right:0%;
	top:-50%;
	font-size:95%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.f
{
	position:absolute;
	top:28px;
	left:306px;
	width: 628px;
}

ul
{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
}

li
{
float:left;
}




p.b
{
	position:absolute;
	left: 27px;
	top: 4px;
	font-size:13px;
	font-family:"Comic Sans MS", cursive;
}
p.shopmanaic
{
	position:absolute;
	top:-5%;
	left:2%;
	font-size:140%;
	color:#999;
	font-weight:bold;
	font-family:"Comic Sans MS", cursive;
}
p.myaccount
{
	position:absolute;
	left:18%;
	top: -5%;
	font-size:140%;
	font-family:"Comic Sans MS", cursive;
	color:#999;
	font-weight:bold;
	font-family:"Comic Sans MS", cursive;
}
p.help
{
	position:absolute;
	left: 36%;
	top: -5%;
	font-size:140%;
	font-family:"Comic Sans MS", cursive;
	color:#999;
	font-weight:bold;
	font-family:"Comic Sans MS", cursive;
}
p.policies
{
	position:absolute;
	left:49%;
	top: -5%;
	font-size:140%;
	font-family:"Comic Sans MS", cursive;
	color:#999;
	font-weight:bold;
	font-family:"Comic Sans MS", cursive;
}
p.products
{
	position:absolute;
	left: 61%;
	top: -5%;
	font-size:140%;
	font-family:"Comic Sans MS", cursive;
	color:#999;
	font-weight:bold;
}
p.home
{
	position:absolute;
	left: 2%;
	top: 12%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;	
}
p.account
{
	position:absolute;
	left: 19%;
	top: 12%;;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.placeorder
{
	position:absolute;
	left: 36%;
	top: 12%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.returnpolicy
{
	position:absolute;
	left: 49%;
	top: 12%;
	font-size:95%;
font-family:"Comic Sans MS", cursive;
}
p.formal
{
	position:absolute;
	left: 61%;
	top: 12%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.aboutus
{
	position:absolute;
	left: 2%;
	top: 20%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.mytrolly
{
	position:absolute;
	left: 19%;
	top: 20%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.trackorder
{
	position:absolute;
	left: 36%;
	top: 20%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.privacypol
{
	position:absolute;
	left: 49%;
	top: 20%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.trousers
{
	position:absolute;
	left: 61%;
	top: 20%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}

p.contactus
{
	position:absolute;
	left: 2%;
	top: 28%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}

	
p.login
{
	position:absolute;
	left: 19%;
	top: 28%;
	font-size:95%;
	font:Verdana, Geneva, sans-serif;
}
p.returnp
{
	position:absolute;
	left: 36%;
	top:28%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.shipping
{
	position:absolute;
	left: 49%;
	top: 28%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.casual
{
	position:absolute;
	left: 61%;
	top: 28%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.jeans
{
	position:absolute;
	left: 61%;
	top: 36%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive
}
p.footwear
{
	position:absolute;
	left: 61%;
	top: 52%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.tc
{
	position:absolute;
	left: 36%;
	top:35%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.faq
{
	position:absolute;
	left: 36%;
	top: 42%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.kitchen
{
	position:absolute;
	left: 61%;
	top: 60%;
	font-size:95%;
	font-family:"Comic Sans MS", cursive;
}
p.follow
{
	position:absolute;
	left:77%;
	top: -5%;
	font-size:140%;
	font-family:"Comic Sans MS", cursive;
	color:#999;
	font-weight:bold;
}
p.stay
{
	position:absolute;
	left:77%;
	top: 35%;
	font-size:120%;
	font-family:"Comic Sans MS", cursive;
	color:#999;
	font-weight:bold;
}
a.abc
{
	text-decoration:none;
}
#apDiv1 {
	position:absolute;
	width:396px;
	height:35px;
	z-index:1;
	left: 224px;
	top: 38px;
}
p.ppp{
	position:absolute;
	top:32px;
	right:144px;
	width: 77px;
}
	
#apDiv2 {
	position:absolute;
	width:204px;
	height:178px;
	z-index:1;
	left: 11px;
	top: 564px;
}
#apDiv3 {
	position:absolute;
	width:200px;
	height:156px;
	z-index:2;
	left: 241px;
	top: 566px;
}
#apDiv4 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
}
#apDiv5 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 460px;
	top: -114px;
}
#apDiv6 {
	position:absolute;
	width:186px;
	height:101px;
	z-index:3;
	left: 471px;
	top: 282px;
}
#apDiv7 {
	position:absolute;
	width:224px;
	height:90px;
	z-index:3;
	left: 467px;
	top: 565px;
}
#apDiv8 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:4;
	left: 468px;
	top: 660px;
}
#apDiv9 {
	position:absolute;
	width:222px;
	height:337px;
	z-index:5;
	left: 241px;
	top: 765px;
	background-color:#333;
}
#apDiv10 {
	position:absolute;
	width:172px;
	height:66px;
	z-index:6;
	left: 267px;
	top: 489px;
}
#apDiv11 {
	position:absolute;
	width:191px;
	height:93px;
	z-index:6;
	left: 256px;
	top: 777px;
}
#apDiv12 {
	position:absolute;
	width:175px;
	height:90px;
	z-index:7;
	left: 255px;
	top: 875px;
}
#apDiv13 {
	position:absolute;
	width:196px;
	height:97px;
	z-index:8;
	left: 255px;
	top: 984px;
}
#apDiv14 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:9;
	left: 469px;
	top: 763px;
}
#apDiv15 {
	position:absolute;
	width:207px;
	height:187px;
	z-index:10;
	left: 11px;
	top: 766px;
}
#apDiv16 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:11;
	left: 11px;
	top: 982px;
}
#apDiv17 {
	position:absolute;
	width:700px;
	height:182px;
	z-index:12;
	background-color:#CCC;
	left: 15px;
	top: 1182px;
}

#apDiv18 {
	position:relative;
	width:196%;
	height:400px;
	z-index:12;
	left: -200px;
	top: -880px;
	background-color:#333;
	border-style:solid;
	border-width:thin;
	border-color:#333;
}
}




#apDiv20 {
	position:absolute;
	width:294px;
	height:190px;
	z-index:13;
	right:9px;
	top: 7px;
	background-color:#AAA;
}
#apDiv21 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:13;
}
#apDiv22 {
	position:absolute;
	width:1305px;
	height:212px;
	z-index:14;
	left: 13px;
	top: 1136px;
	border:double;
	border-color:#BBB;
}
#apDiv21 {
	position:absolute;
	width:97px;
	height:42px;
	z-index:1;
	left: 77%;
	top: 17%;
}
#apDiv23 {
	position:absolute;
	width:61px;
	height:41px;
	z-index:3;
	left: 89%;
	top: 17%;
}

#apDiv25 {
	position:absolute;
	width:39px;
	height:42px;
	z-index:5;
	left: 83%;
	top: 17%;
}
#apDiv26 {
	position:absolute;
	width:78px;
	height:44px;
	z-index:6;
	left: 95%;
	top: 17%;
}


#apDiv24 {
	position:relative;
	width:32%;
	height:370px;
	z-index:1;
	left:489px;
	top:-565px;
	color:#FFF;

}

#apDiv29 {
	position:relative;
	width:196%;
	height:340px;
	z-index:13;
	left: -200px;
	top: -545px;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#fff;
	float:left;

}
#apDiv30 {
	position:absolute;
	width:100%;
	height:37px;
	z-index:1;
	background-color:#EBEBEB;
}
#apDiv31 {
	position:relative;
width:196%;
	height:340px;
	z-index:13;
	left: -200px;
	top: -185px;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#fff;
}
#apDiv32 {
	position:absolute;
	width:100%;
	height:37px;
	z-index:1;
	background-color:#EBEBEB;
}
#apDiv33 {
	position:relative;
	width:196%;
	height:340px;
	z-index:13;
	left:-200px;
	top: -165px;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#fff;
}
#apDiv34 {
	position:absolute;
	width:100%;
	height:37px;
	z-index:1;
	background-color:#EBEBEB;
}
#apDiv35 {
	position:relative;
	width:32%;
	height:382px;
	z-index:14;
	left: -200px;
	top: -140px;
	border-color:#fff;
	border-style:solid;
	border-width:thin;
	
}
#apDiv36 {
	position:relative;
	width:129%;
	height:382px;
	z-index:13;
	left:-60px;
	top: -520px;
	border-style:solid;
	border-width:thin;
	border-color:#EBEBEB;
}
#apDiv37 {
	position:relative;
	width:32%;
	height:382px;
	z-index:14;
	left:486px;
	top: -900px;
	border-style:solid;
	border-width:thin;
	border-color:#EBEBEB;
}
#apDiv38 {
	position:absolute;
	width:32%;
	height:50%;
	z-index:1;
	right:12%;
	top: 35%;
	background-color:#FFF;;
	
	border-width:thin;
	border-color:#A0A0A0;
}

#apDiv39 {
	position:absolute;
	width:146px;
	height:234px;
	z-index:1;
	left: 20px;
	top: 51px;
	border-style:solid;
	border-width:thin;
	border-color:#EEE;
}
#apDiv40 {
	position:absolute;
	width:0.5%;
	height:100%;
	z-index:7;
	left: 75%;
	top: 0%;
	background-color:#999;
}
#apDiv19 {
	position:relative;
	width:196%;
	height:340px;
	z-index:13;
	left:-200px;
	top: -150px;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#fff;
}
#apDiv41 {
	position:absolute;
	width:100%;
	height:37px;
	z-index:1;
	background-color:#EBEBEB;
}
#apDiv42 {
	position:relative;
	width:194%;
	height:80px;
	left:-200px;
	z-index:1;
	top: -200px;
position\9:relative;
	width\9:194%;
	height\9:80px;
	left\9:-200px;s
	z-index\9:1;
	top\9: -200px;
}
	
#apDiv43 
{
	position:absolute;
	top:0%;
	right:0%;
	width: 48%;
	height: 18%;
	font-family:"Comic Sans MS", cursive;
	font-size:11px;
	color:#666;
	
}
#logdiv
{
	position:fixed;
	top:65%;
	left:38%;
	width:80%;
	height:85%;
	margin-top:-35%;
	margin-left:-25%;
	visibility:hidden;
	z-index:10000;
	background-color:#f6f6f6;
	border:thin;
	border-style:solid;
	border-color:#fff;
}
#logdiv1
{
	position:absolute;
	left:0%;
	top:3%;
	width:50.3%;
	height:94%;
	border-right:medium;
	border-right-style:solid;
	border-right-color:#CCC;
}
#logdiv2
{
	position:absolute;
	left:50.5%;
	top:2%;
	width:49.5%;
	height:98%;
	opacity:0.3;
}

#widget
{
	position:relative;
	left:-200px;
	top:-185px;
	width:197%;
	height:380px;
	z-index:0;
	}

#wid
{
	position:relative;
	left:0;
	top:0;
	width:100%;
	height:100%;
	z-index:0;

}	
</style>

</head>

<body onload="preload()">
<div id="container">




<?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
?>

<div name="transdiv" id="logdiv">
<a href="#"><img src="prodimg/close.png" alt="Close" style="height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10" onclick="ilogtr()" /> </a>

<div id="logdiv1" onmouseover="login()">
<h3 align="center"><font face="Comic Sans MS, cursive" color="#666666">LOGIN</font></h3>
<h4 align="center"><font face="Comic Sans MS, cursive" color="#666666">For Existing Users</font></h4>
<form method="POST" action="check.php"  name="login123">
  <table align="left" border="0" cols=2 cellspacing="3" style="position:absolute; left:10%; top:20%">
  <tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">Email Id:</font></td>
  <td><?php 
  echo "<input type=\"text\" name=\"email123\" id=\"email123\">";
  ?></td>
  </tr>
  <tr>
  <td><label for="Password"><font color="#666666" face="Comic Sans MS, cursive">Password:</font></label></td>
  <td><?php
  echo "<input type=\"password\" name=\"pwd123\" id=\"pwd123\" />";
  ?>
  </td>
  </tr>    
  </table>
  <?php
  echo "<input type=\"hidden\" name=\"flag\" value=\"0\" />";
  ?>
 <a href="#" onclick="login1()"><img src="prodimg/Login1.png" width="45%" height="12%" style="position:absolute; left:25%; top:88%;" onmousedown="this.src='prodimg/Login2.png'" onmouseup="this.src='prodimg/Login1.png'"/></a>
 <a href="#" onclick="emailcheck()" style="text-decoration:none; position:absolute; left:33%; top:39%; font-size:13px; color:#6D6D6D;" onmouseover="this.style.color='#DF7000'" onmouseout="this.style.color='#6D6D6D'">Forgot your Password?</a>

</form>

</div>

<div id="logdiv2" onmouseover="reg()">
<h3 align="center"><font face="Comic Sans MS, cursive" color="#666666">Register</font></h3>
<h4 align="center"><font face="Comic Sans MS, cursive" color="#666666">For New Users</font></h4>
<form method="POST" action="Divert.php" name="register" >
  <table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:10%; top:20%">
  <tr>
  <td height="30"><font color="#666666" face="Comic Sans MS, cursive">Full Name:</font></td>
  <td height="30"><?php
  echo "<input type=\"text\" name=\"Username\" >";
  ?></td>
  </tr>
  <tr>
  <td height="30"><label for="Password"><font color="#666666" face="Comic Sans MS, cursive">Password: </font></label></td>
  <td height="30"><?php
  echo "<input type=\"password\" name=\"pwd\" id=\"pwd\" />";
  ?></td>
  </tr>
  <tr>
   <tr>
  <td height="30"><label for="Password"><font color="#666666" face="Comic Sans MS, cursive">Confirm Password: </font></label></td>
  <td height="30"><?php
  echo "<input type=\"password\" name=\"cpwd\" id=\"cpwd\" />";
  ?></td>
  </tr>
  <tr>
  <td height="30"><label for="E-mail"><font color="#666666" face="Comic Sans MS, cursive">E-mail:</font></label></td>
  <td height="30"><?php
  echo "<input type=\"text\" name=\"email\" id=\"email\" />";
  ?></td>
  </tr>
    <tr>
  <td height="30"><label for="E-mail"><font color="#666666" face="Comic Sans MS, cursive">Gender:</font></label></td>
  <td height="30"><?php
  echo "<input type=\"radio\" name=\"radio\" id=\"male\" value=\"male\"/>Male";
   echo "<input type=\"radio\" name=\"radio\" id=\"female\" value=\"female\"/>Female";
  ?></td>
  </tr>
  </table>
  <?php
  echo "<input type=\"hidden\" name=\"flag\" value=\"0\" />";
  ?>
<a href="#" onclick="reg1()"><img src="prodimg/Register1.png" width="45%" height="12%" style="position:absolute; left:25%; top:85%;" onmousedown="this.src='prodimg/Register2.png'" onmouseup="this.src='prodimg/Register1.png'"/></a>
</form>
</div>
</div>

<div id="apDiv42" >
<a href="#" ><img src="prodimg/Title.png" width="38%" height="100%" style="position:absolute; float:left; left:-2%; top:5%;" /></a>

<div style="position:absolute; left:38.8%; top:50%; width:44%; height:49%; background-color:#DCDCDC; "></div>
<form id="src1" name="src1" method="post" action="search.php">
     <label>
      <input type="text" name="srch" id="srch"  value="search for your favourite brand and products" style="position:absolute;  width: 33.3%; height: 33%; color:#D6D6D6; left:39.4%; top:55.2%; font-family:'Comic Sans MS', cursive"  onfocus="if (this.value == 'search for your favourite brand and products') this.value = 'search for your favourite brand and products';"
      onkeydown="if(this.value=='search for your favourite brand and products') this.value=''; this.style.color='#000'"  onblur="if (this.value == '') this.value = 'search for your favourite brand and products'; this.style.color='#D6D6D6'">
    </label>
   
  </form>
<img src="prodimg/Search2.png" width="10%" height="54%" style="position:absolute; left:73%; top:51.2%;"  onmousedown="this.src='prodimg/Search1.png'" onmouseup="this.src='prodimg/Search2.png'" onclick="aaa('src1')"/>





<a href="mytrolley2.php"><img src="prodimg/Trolley11.png" style="position:absolute; left:83%; top:40%;width:6%;height:60%" onmousedown="this.src='prodimg/Trolley12.png'" onmouseup="this.src='prodimg/Trolley11.png'">
<?php
echo "<p style=\"position:absolute; left:85%; top:75%; color:#555; font-size:75%;\">(0)</p>";
?>
</a>

<a href="#"><img src="prodimg/Home1.png" style="position:absolute; left:89.5%; top:40%;width:4.5%;height:60%" onmousedown="this.src='prodimg/Home2.png'" onmouseup="this.src='prodimg/Home1.png'"></a>

<a href="#" onclick="logtr()"><img src="prodimg/Account11.png" style="position:absolute; left:94.5%; top:39%;width:6%;height:60%" onmousedown="this.src='prodimg/Account12.png'" onmouseup="this.src='prodimg/Account11.png'"></a>

<span style="float:left; position:absolute; left:47%; top:1%; font-size:75%; color:#717171; font-family:'Comic Sans MS', cursive;">Hi,Guest    | </span>


<span style=" float:left; position:absolute; left:57.5%; top:1%; font-size:75%; color:#717171; font-family:'Comic Sans MS', cursive">9773436955(24x7)&nbsp;&nbsp;&nbsp;|
</span>  
 <img src="prodimg/Fullscreen capture 7182012 14722 PM.gif"  style="position:absolute; left:54.5%; top:5%; height:15%; width:2%;"/>


<span style=" float:left; position:absolute; left:77.5%; top:1%; font-size:75%; color:#717171; font-family:'Comic Sans MS', cursive">support@shopmaniac.in |</span>
<img src="prodimg/Email-Lists-Canada-11.jpg" style="position:absolute; height:18%; width:3%; left:74%; top:3%;"/>

<p style="position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive"><a href="#" onmouseover="this.style.color = '#DF7000'" onmouseout="this.style.color = '#717171'" onclick="logtr()" style="text-decoration:none; color:#717171;">SignIn</a></p>
</div>

<div id='cssmenu'>
	<ul>
		<li><a href='#'><span>Men</span></a>
		 <ul>
				<li style="position:absolute; left:0%; top:-5%;"><a href='#'><span><h3><b>Mens Apparels</b></h6></span></a> </li>
            	<li style="position:absolute; left:0%; top:12%;"><a href='#'><span>Casual Shirt</span></a></li>
             	<li style="position:absolute; left:0%; top:24%;"><a href='formalshirts.php'><span>Formal Shirt</span></a></li>
	            <li style="position:absolute; left:0%; top:36%;"><a href='#'><span>Trousers</span></a></li>
   		        <li style="position:absolute; left:0%; top:48%;"><a href='#'><span>Jeans</span></a></li>
        	    <li style="position:absolute; left:0%; top:60%;" ><a href='#'><span>Tees</span></a></li>
               
          		<li style="position:absolute; left:22%; top:-5%;"><a href='#'><span><h3><b>Mens Footwear</b></h3></span></a></li>
            	<li style="position:absolute; left:22%; top:12%;"><a href='#'><span>Sports Shoes</span></a></li>
             	<li style="position:absolute; left:22%; top:24%;"><a href='#'><span>Formal Shoes</span></a></li>
              	<li style="position:absolute; left:22%; top:36%;"><a href='#'><span>Casual Shoes</span></a></li>
               	<li style="position:absolute; left:22%; top:48%;"><a href='#'><span>Slippers/Flipflops</span></a></li>
                
                <li style="position:absolute; left:44%; top:-5%;"><a href='#'><span><h3><b>Mens Accessories</b></h3></span></a></li>
            	<li style="position:absolute; left:44%; top:12%;"><a href='#'><span>Sports Shoes</span></a></li>
             	<li style="position:absolute; left:44%; top:24%;"><a href='#'><span>Formal Shoes</span></a></li>
              	<li style="position:absolute; left:44%; top:36%;"><a href='#'><span>Casual Shoes</span></a></li>
               	<li style="position:absolute; left:44%; top:48%;"><a href='#'><span>Slippers/Flipflops</span></a></li>
			
            <img src="prodimg/nikeshoes1.jpg" width="20%"  height="80%" style="position:absolute; left:78%; top:5%;"/>
          </ul>
		</li>
        
        <li style="position:absolute; left:10%; top:0%;"><a href='#'><span>Men</span></a>
        	 <ul >
				<li><a href='#'><span><b>Mens Apparels</b></span></a> </li>
             </ul>   
        </li>
    </ul>
</div>

<div id="widget">
<a href="#"><img src="prodimg/prev.png" style="position:absolute;left:0;top:50%;width:3%;height:10%;z-index:150;margin-top:-5%;" onclick="prev()"  onmousedown="this.src='prodimg/prev1.png'" onmouseup="this.src='prodimg/prev.png'"/></a>
<a href="#"><img src="prodimg/next.png" style="position:absolute;right:0;top:50%;width:3%;height:10%;z-index:150;margin-top:-5%;" onclick="next()" onmousedown="this.src='prodimg/next1.png'" onmouseup="this.src='prodimg/next.png'"/></a>
<div id="wid">
<a href="#"><img src="prodimg/slider-1.jpg" id="banner" style="position:relative;width:100%;height:100%;left:0;top:0;opacity:1"></a>
</div>
</div>




<div id="apDiv24" style="border-style:solid; border-width:thin; border-color:#EBEBEB; z-index:-1000; visibility:hidden;">
<img src="prodimg/tupp.png" width="100%" height="33%" style="position:absolute; left:0%; top:0%;" />
</div>

<div id="apDiv29" >
 <div id="apDiv30">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#111; font-variant:small-caps;">Apparels</p>
  </div>
  <form method="post" action="prodinfo.php" id="a" name="a">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"1\" >";
?>	
</form>
 <a href="#" onclick="prod('a')">
 <div  style="position:absolute; left:2%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%; " />
  <p style="position:absolute; top:75%; left:2%; font-family:'Comic Sans MS', cursive; color:#555; font-size:94%;">Spykar Casual Shirt</p>
  <p style="position:absolute;  left:43%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;   font-size:90%; text-decoration:line-through;">400 </p>
  <p style="position:absolute; left:20%; top:85%; font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">200 </p>
  <p style="position:absolute; left:63%; top:89%; font-family:'Comic Sans MS', cursive; color:#999; font-size:60%;">(50% Off)</p>

  </div></a>
  
<form method="post" action="prodinfo.php" id="b" name="b">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('b')">
<div style="position:absolute; left:22.5%; top:16%;width:19%; height:83%; background-color:#ffff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  <form method="post" action="prodinfo.php" id="c" name="c">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('c')">
<div style="position:absolute; left:42%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>
  </div></a>
  <form method="post" action="prodinfo.php" id="d" name="d">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('d')">
<div style="position:absolute; left:61.5%; top:16%;width:19%; height:83%; background-color:#fff;">
 <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  <form method="post" action="prodinfo.php" id="e" name="e">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('e')">
<div style="position:absolute; left:81%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  </div>

<div id="apDiv31">
  <div id="apDiv32">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#111; font-variant:small-caps;">Accessories</p>
  </div>
   <form method="post" action="prodinfo.php" id="f" name="f">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"1\" >";
?>	
</form>
 <a href="#" onclick="prod('f')">
 <div  style="position:absolute; left:2%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%; " />
  <p style="position:absolute; top:75%; left:2%; font-family:'Comic Sans MS', cursive; color:#555; font-size:94%;">Spykar Casual Shirt</p>
  <p style="position:absolute;  left:43%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;   font-size:90%; text-decoration:line-through;">400 </p>
  <p style="position:absolute; left:20%; top:85%; font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">200 </p>
  <p style="position:absolute; left:63%; top:89%; font-family:'Comic Sans MS', cursive; color:#999; font-size:60%;">(50% Off)</p>

  </div></a>
  
<form method="post" action="prodinfo.php" id="g" name="g">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('g')">
<div style="position:absolute; left:22.5%; top:16%;width:19%; height:83%; background-color:#ffff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  <form method="post" action="prodinfo.php" id="h" name="h">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('h')">
<div style="position:absolute; left:42%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>
  </div></a>
  <form method="post" action="prodinfo.php" id="i" name="i">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('i')">
<div style="position:absolute; left:61.5%; top:16%;width:19%; height:83%; background-color:#fff;">
 <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  <form method="post" action="prodinfo.php" id="j" name="j">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('j')">
<div style="position:absolute; left:81%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  </div>


<div id="apDiv33">
  <div id="apDiv34">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#111; font-variant:small-caps;">Home-Kitchen</p>
</div>
 <form method="post" action="prodinfo.php" id="k" name="k">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"1\" >";
?>	
</form>
 <a href="#" onclick="prod('k')">
 <div  style="position:absolute; left:2%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%; " />
  <p style="position:absolute; top:75%; left:2%; font-family:'Comic Sans MS', cursive; color:#555; font-size:94%;">Spykar Casual Shirt</p>
  <p style="position:absolute;  left:43%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;   font-size:90%; text-decoration:line-through;">400 </p>
  <p style="position:absolute; left:20%; top:85%; font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">200 </p>
  <p style="position:absolute; left:63%; top:89%; font-family:'Comic Sans MS', cursive; color:#999; font-size:60%;">(50% Off)</p>

  </div></a>
  
<form method="post" action="prodinfo.php" id="l" name="l">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('l')">
<div style="position:absolute; left:22.5%; top:16%;width:19%; height:83%; background-color:#ffff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  <form method="post" action="prodinfo.php" id="m" name="m">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('m')">
<div style="position:absolute; left:42%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>
  </div></a>
  <form method="post" action="prodinfo.php" id="n" name="n">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('n')">
<div style="position:absolute; left:61.5%; top:16%;width:19%; height:83%; background-color:#fff;">
 <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  <form method="post" action="prodinfo.php" id="o" name="o">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('o')">
<div style="position:absolute; left:81%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  </div>

<div id="apDiv19">
  <div id="apDiv41">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#111; font-variant:small-caps;">Footwear</p>
</div>
 <form method="post" action="prodinfo.php" id="p" name="p">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"1\" >";
?>	
</form>
 <a href="#" onclick="prod('p')">
 <div  style="position:absolute; left:2%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%; " />
  <p style="position:absolute; top:75%; left:2%; font-family:'Comic Sans MS', cursive; color:#555; font-size:94%;">Spykar Casual Shirt</p>
  <p style="position:absolute;  left:43%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;   font-size:90%; text-decoration:line-through;">400 </p>
  <p style="position:absolute; left:20%; top:85%; font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">200 </p>
  <p style="position:absolute; left:63%; top:89%; font-family:'Comic Sans MS', cursive; color:#999; font-size:60%;">(50% Off)</p>

  </div></a>
  
<form method="post" action="prodinfo.php" id="q" name="q">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('q')">
<div style="position:absolute; left:22.5%; top:16%;width:19%; height:83%; background-color:#ffff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  <form method="post" action="prodinfo.php" id="r" name="r">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('r')">
<div style="position:absolute; left:42%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>
  </div></a>
  <form method="post" action="prodinfo.php" id="s" name="s">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('s')">
<div style="position:absolute; left:61.5%; top:16%;width:19%; height:83%; background-color:#fff;">
 <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  <form method="post" action="prodinfo.php" id="t" name="t">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"7\" >";
?>	
</form>  
<a href="#" onclick="prod('t')">
<div style="position:absolute; left:81%; top:16%;width:19%; height:83%; background-color:#fff;">
  <img src="prodimg/p4.jpg" width="96%" height="75%" style="position:absolute; top:1%; left:2%;" />
<p style="position:absolute; top:75%; left:30%; font-family:'Comic Sans MS', cursive;  color:#555; font-size:100%;">Pepe Jeans</p>
  <p style="position:absolute; left:45%; top:85%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:90%;">800 </p>

  </div></a>
  </div>



<div id="apDiv35">
<img src="prodimg/Picture1.png" width="110%" height="30%" style="position:absolute; top:0%; left:0%;"/>
<img src="prodimg/Picture2.png" width="111%" height="30%" style="position:absolute; top:25%; left:-2%;"/>
<img src="prodimg/Picture4.png" width="110%" height="30%" style="position:absolute; top:50%; left:0%;"/>
<img src="prodimg/Picture3.png" width="116%" height="30%" style="position:absolute; top:75%; left:-10%;"/>
</div>

<div id="apDiv36">
<img src="prodimg/Pepe-Jeans.jpg" width="65%" height="50%" />
<img src="prodimg/tupperware (1).jpg" width="34%" height="50%" />
<img src="prodimg/Hilfiger-Friends-and-Family-2011.jpg" width="33%" height="48%" />
  <img src="prodimg/nov272008_nike_sale.jpg" width="31%" height="48%" />
  <img src="prodimg/SaleHeader.jpg" width="34%" height="48%" />
</div>

<div id="apDiv37" style="border-style:solid; border-width:thin; border-color:#333; background-color:#333;">
<p style="text-align:center; position:relative; top:-16px; color:#999;font-weight:bold; font-family:'Comic Sans MS', cursive;">Feedback</p>
<div style=" width:100%; height:93%;background-color:#FCFCFC; position:absolute; left:-0.5%; top:8%; border-style:double; border-top:thin; border-top-color:#75AEE8;border-width:thin; border-color:#EAEAEA" >
 
 <marquee width="100%"; height="93%" scrollamount="3" bgcolor="" direction="up"  ONMOUSEOVER="this.stop();" ONMOUSEOUT="this.start();"> 
            <?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from feedback");
while($row =mysql_fetch_array($qry))
{
	$res=$row['response'];
	$user=$row['username'];
	echo "$user:$res ";
	echo "<hr/>";
}
?>
        </marquee>
</div>
</div>



<div id="apDiv18">
  <p class="shopmanaic"><u>Shopmaniac</u></p>
<p class="myaccount"><u>My Account<u></p>
<p class="policies"><u>Policies<u></p>
<p class="help"><u>Help<u></p>
<p class="products"><u>Products<u></p><br />
<a href="#" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="home">Home</p></a>
<a href="myaccount.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="account">MyAccount</p></a>

<a href="returnpolicy.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px;" ><p class="returnpolicy">Return Policy</p></a>

<a href="placeorder.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="placeorder">Place Order</p></a>
<a href="formalshirts.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="formal">Formal
Shirts</p></a>
<br />

<a href="aboutus.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="aboutus">About Us</p></a>
<a href="mytrolley2.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="mytrolly">My Trolley</p></a>

<a href="privacypolicy.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="privacypol">Privacy Policy</p></a>

<a href="trackorder.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="trackorder">Track Order</p></a>
<a href="trousers.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="trousers">Trousers</p></a>

<a href="contactus.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="contactus">Contact Us</p></a>

<a href="shippingpolicy.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="shipping">Shipping Policy</p></a>

<a href="returnproduct.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="returnp">Return Product</p></a>
<a href="cs.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="casual">Casual Shirt</p></a><br/>

<a href="t&c.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="tc">Terms & Conditions</p></a>
<a href="jeans.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="jeans">Jeans</p></a>
<a href="footwear.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="footwear">FootWear</p></a>

<a href="faq.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="faq">FAQ's</p></a>

<br/>
<a href="homeware.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="kitchen">Homeware</p></a>

<p class="follow"><u>Follow Us<u></p>
<div id="apDiv21"><a href="www.facebook.com"><img src="prodimg/facebook-logo1.jpg" width="36" height="34" /></a></div>
<div id="apDiv25"><a href="www.twitter.com"><img src="prodimg/twitter_logo.jpg" width="36" height="34" /></a></div>
<div id="apDiv23"><a href="www.google.com"><img src="prodimg/google_plus_logo1.jpg" width="36" height="34" /></a></div> 
<div id="apDiv26"><a href="www.blog.com"><img src="prodimg/blogger_logo.jpg.png" width="36" height="34" /></a></div>
<p class="stay"><u>Stay Connected for Daily Updates</u></p>

<form id="contactaaa" name="contactaaa" method="post" action="contact.php" >
<?php 
echo "<input type=\"text\" name=\"contact1\" id=\"contact1\" style=\"position:absolute; top:59%; left:77%; color:#CCC; width:17%; height:5%; border:#F60\"  value=\"Enter your Email-Id\" onfocus=\"if (this.value == 'Enter your Email-Id') this.value = '';\" onblur=\"if (this.value == '') this.value = 'Enter your Email-Id';\"  />";




?>
</form>
<a href="#" onclick="contact()"><img src="prodimg/submit.png" width="10%" height="5%" onmousedown="this.src='prodimg/submit1.png'" onmouseup="this.src='prodimg/submit.png'" style="position:absolute; top:58.5%; left:94.5%; color:#CCC; width: 5%; height:6%;"  /></a>


<a href="mypoints.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:19%; top:33%; font-family:'Comic Sans MS', cursive" >MyPoints</a>
<a href="t-shirts.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:61%; top:48%; font-family:'Comic Sans MS', cursive" >T-Shirts</a>


<a href="mycredits.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:19%; top:39%; font-family:'Comic Sans MS', cursive" >MyCredits</a>

<a href="cancelorder.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:36%; top:53%; font-family:'Comic Sans MS', cursive" >Cancel Order</a>

<hr style="position:absolute; left:0%; top:78%; border-style:dotted; width:75%; border-color:#575757;"/>
<p style="position:absolute; left:3%; top:79%; font-family:'Comic Sans MS', cursive; font-size:100%; font-weight:bold; color:#818181;">Payment Methods</p>
<img src="prodimg/pm_visa.jpg" width="5%"  style="position:absolute; left:3%; top:90%;" />
<img src="prodimg/pm_mc.jpg" width="5%"  style="position:absolute; left:8.5%; top:90%;" />
<img src="prodimg/pm_ae.jpg" width="5%" height="6%"  style="position:absolute; left:14%; top:90%;" />
<img src="prodimg/pm_a.jpg" width="5%"  style="position:absolute; left:19.5%; top:90%;" />
<img src="prodimg/cod.jpg" width="5%" height="6%" style="position:absolute; left:25%; top:90%;" />
<img src="prodimg/nb.gif" width="6%" height="6%" style="position:absolute; left:31%; top:90%;" />

<p style="position:absolute; left:50%; top:79%; font-family:'Comic Sans MS', cursive; font-size:100%; font-weight:bold; color:#818181;">Secured By</p>
<img src="prodimg/cc_avenue.jpg" width="5%" height="6%"  style="position:absolute; left:50%; top:90%;" />
<img src="prodimg/verisignsecured.jpg" width="5%" height="6%"  style="position:absolute; left:55.5%; top:90%;" />
<img src="prodimg/ssl.jpg" width="5%"  height="6%" style="position:absolute; left:61%; top:90%;" />
<hr width="1" size="500" style="position:absolute; left:75%; top:-2%; height:100%; border-style:dotted; border-color:#575757;"/>

<div id="copyright" style="position:absolute; left:0%; top:100%; width:100%; height:8%;">
<p style="position:absolute; left:35%; top:-25%; font-family:'Comic Sans MS', cursive; font-size:80%; color:#555;"> Copyright <img src="prodimg/copy.jpg" width="5%" style="position:absolute; left:20%; top:8%;"/>&nbsp;&nbsp;&nbsp; Prodigy Infotech. All Rights Reserved</center>
</div>
</div>




<div id="trans">
</div>


</div>

</body>
</html>
