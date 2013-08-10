<?php
session_start();
//$_SESSION['uname']="";
$hl=$_GET['hl'];

if($hl!="")
{
	$_SESSION['uname']="";
}
else
{
	if($_SESSION['uname']!="")
	{
	header("Location: home.php");
	}
}
//else
//{
//	$_SESSION['uname']="";
///}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="prodimg/title123.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="navbar.css" rel="stylesheet" type="text/css" />
<title>Online Shopping India : Shop Apparels,Footwear,Accessories,Mobiles in India | Shopmaniac.in</title>
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
  var a=x.length;
  if(a<8)
  {
	  alert("Please should be minimum 8 Characters");
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
			img[0]="prodimg/samsungbanner.jpg";
			img[1]="prodimg/nokiabanner.jpg";
			img[2]="prodimg/tab_banner.jpg";
			img[3]="prodimg/codbanner.jpg";
			lnk[0]="samsung.php";
			lnk[1]="nokia.php";
			lnk[2]="samsungtablets.php";
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
    height:0px;
	
	 background-color\9:#fff;
            width\9: 420px;
            margin\9: 0px auto;
            padding\9: 200px;
    height\9:0px;
	
        }
		/*#container a:visited{
				text-decoration:none; color:transparent;
			}
			#container a:active{
				text-decoration: none; color:transparent;
			}
			 The CSS Code for the menu starts here */
			
			
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
				opacity: 0.9;
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
	left: -220px;
	top: -880px;
background-color:#FCFCFC;
	border-top-style:solid;
	border-top-width:medium;
	border-color:#C1C1C1;
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
	top:15%;
	left:11%;
	width:75%;
	height:65%;
	visibility:hidden;
	z-index:10000;
	background-color:#f6f6f6;
	border-style:solid;
	border-color:#979797;
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
img.resize
{
	height:80px;
	width:auto;
	text-align:center;
}
img.resize
{
	height:auto;
	width:80px;
	text-align:center;
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
<a href="#"><img src="prodimg/close.png" alt="Close" style="height:4.5%;width:3%;position:relative;left:96.8%;top:0.3%;z-index:10" onclick="ilogtr()" /> </a>

<div id="logdiv1" onmouseover="login()">
<h3 align="center"><font face="Comic Sans MS, cursive" color="#444">LOGIN</font></h3>
<h4 align="center"><font face="Comic Sans MS, cursive" color="#444">For Existing Users</font></h4>
<form method="POST" action="check.php"  name="login123">
  <table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:10%; top:25%">
  <tr>
  <td height="45" width="90"><font color="#333" face="Comic Sans MS, cursive" >Email Id</font></td>
  <td><?php 
  echo "<input type=\"text\" name=\"email123\" id=\"email123\" style=\"width:140%;height:55%;\">";
  ?></td>
  </tr>
  <tr>
  <td height="45" width="90"><label for="Password"><font color="#333" face="Comic Sans MS, cursive">Password</font></label></td>
  <td><?php
  echo "<input type=\"password\" name=\"pwd123\" id=\"pwd123\" style=\"width:140%;height:55%;\"/>";
  ?>
  </td>
  </tr>    
  </table>
  <?php
  echo "<input type=\"hidden\" name=\"flag\" value=\"0\" />";
  ?>
 <a href="#" onclick="login1()"><img src="prodimg/Login1.png" width="38%" height="15%" style="position:absolute; left:25%; top:85%;" onmousedown="this.src='prodimg/Login2.png'" onmouseup="this.src='prodimg/Login1.png'"/></a>
 <a href="#" onclick="emailcheck()" style="text-decoration:none; position:absolute; left:33%; top:53%; font-size:15px; color:#222;" onmouseover="this.style.color='#DF7000'" onmouseout="this.style.color='#222'">Forgot your Password?</a>

</form>

</div>

<div id="logdiv2" onmouseover="reg()">
<h3 align="center"><font face="Comic Sans MS, cursive" color="#444">Register</font></h3>
<h4 align="center"><font face="Comic Sans MS, cursive" color="#444">For New Users</font></h4>
<form method="POST" action="Divert.php" name="register" >
  <table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:10%; top:25%">
  <tr>
  <td height="35"><font color="#333" face="Comic Sans MS, cursive">Full Name:</font></td>
  <td height="35"><?php
  echo "<input type=\"text\" name=\"Username\" style=\"width:110%;height:75%;\">";
  ?></td>
  </tr>
  <tr>
  <td height="35"><label for="Password"><font color="#333" face="Comic Sans MS, cursive">Password: </font></label></td>
  <td height="35"><?php
  echo "<input type=\"password\" name=\"pwd\" id=\"pwd\" style=\"width:110%;height:75%;\"/>";
  ?></td>
  </tr>
  <tr>
   <tr>
  <td height="35"><label for="Password"><font color="#333" face="Comic Sans MS, cursive">Confirm Password: </font></label></td>
  <td height="35"><?php
  echo "<input type=\"password\" name=\"cpwd\" id=\"cpwd\" style=\"width:110%;height:75%;\"/>";
  ?></td>
  </tr>
  <tr>
  <td height="35"><label for="E-mail"><font color="#333" face="Comic Sans MS, cursive">E-mail:</font></label></td>
  <td height="35"><?php
  echo "<input type=\"text\" name=\"email\" id=\"email\" style=\"width:110%;height:75%;\"/>";
  ?></td>
  </tr>
    <tr>
  <td height="35"><label for="E-mail"><font color="#333" face="Comic Sans MS, cursive">Gender:</font></label></td>
  <td height="35"><?php
  echo "<input type=\"radio\" name=\"radio\" id=\"male\" value=\"male\"/>Male";
   echo "<input type=\"radio\" name=\"radio\" id=\"female\" value=\"female\"/>Female";
  ?></td>
  </tr>
  </table>
  <?php
  echo "<input type=\"hidden\" name=\"flag\" value=\"0\" />";
  ?>
<a href="#" onclick="reg1()"><img src="prodimg/Register1.png" width="38%" height="15%" style="position:absolute; left:25%; top:82%;" onmousedown="this.src='prodimg/Register2.png'" onmouseup="this.src='prodimg/Register1.png'"/></a>
</form>
</div>
</div>

<?php
include("header.php");
?>


<?php
include("menu.php");
?>

<div id="widget">
<a href="#"><img src="prodimg/prev.png" style="position:absolute;left:0;top:50%;width:3%;height:10%;z-index:150;margin-top:-5%;" onclick="prev()"  onmousedown="this.src='prodimg/prev1.png'" onmouseup="this.src='prodimg/prev.png'"/></a>
<a href="#"><img src="prodimg/next.png" style="position:absolute;right:0;top:50%;width:3%;height:10%;z-index:150;margin-top:-5%;" onclick="next()" onmousedown="this.src='prodimg/next1.png'" onmouseup="this.src='prodimg/next.png'"/></a>
<div id="wid">
<a href="#"><img src="prodimg/samsungbanner.jpg" id="banner" style="position:relative;width:100%;height:100%;left:0;top:0;opacity:1"></a>
</div>
</div>




<div id="apDiv24" style="border-style:solid; border-width:thin; border-color:#EBEBEB; z-index:-1000; visibility:hidden;">
<img src="prodimg/tupp.png" width="100%" height="33%" style="position:absolute; left:0%; top:0%;" />
</div>

<div id="apDiv29" >
 <div id="apDiv30">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#111; font-variant:small-caps;">Mobiles</p>
  </div>
  <form method="get" action="prodinfo.php" id="a" name="a">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"1004\" >";
?>	
</form>
 <a href="#" onclick="prod('a')">
 <div  style="position:absolute; left:2%; top:16%;width:19%; height:83%; background-color:#fff;">
 
 <div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/galaxys4whitep1.jpg" class="resize"></center>
</div>
  <table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Sasmung Galaxy S4 White </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">38550 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">40299</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(4%Off)</td></tr>
</table>
  </div></a>
  
<form method="get" action="prodinfo.php" id="b" name="b">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"2005\" >";
?>	
</form>  
<a href="#" onclick="prod('b')">
<div style="position:absolute; left:22.5%; top:16%;width:19%; height:83%; background-color:#ffff;">
  <div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/lumia620blackp1.jpg" class="resize"></center>
</div>
 <table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Nokia Lumia 620 Black </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">13350 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">15999</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(16%Off)</td></tr>
</table>

  </div></a>
  <form method="get" action="prodinfo.php" id="c" name="c">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"3010\" >";
?>	
</form>  
<a href="#" onclick="prod('c')">
<div style="position:absolute; left:42%; top:16%;width:19%; height:83%; background-color:#fff;">
 <div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/canvas4a210whitep1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Micromax Canvas4 A210 White </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">18999 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">19999</strong></td>
		</tr>
        <tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(5%Off)</td></tr>
</table>
  </div></a>
  <form method="get" action="prodinfo.php" id="d" name="d">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"4014\" >";
?>	
</form>  
<a href="#" onclick="prod('d')">
<div style="position:absolute; left:61.5%; top:16%;width:19%; height:83%; background-color:#fff;">
<div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/xperiajblackp1.jpg" class="resize"></center>
</div>
 <table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Sony Xperia J Black </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">12850 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">14499</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(11%Off)</td></tr>
</table>

  </div></a>
  <form method="get" action="prodinfo.php" id="e" name="e">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"6001\" >";
?>	
</form>  
<a href="#" onclick="prod('e')">
<div style="position:absolute; left:81%; top:16%;width:19%; height:83%; background-color:#fff;">
  <div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/bbcurve9320blackp1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">BlackBerry Curve 9320 Black </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">13500 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">15190</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(11%Off)</td></tr>
</table>

  </div></a>
  </div>

<div id="apDiv31">
  <div id="apDiv32">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#111; font-variant:small-caps;">Tablets</p>
  </div>
   <form method="get" action="prodinfo.php" id="f" name="f">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"8001\" >";
?>	
</form>
 <a href="#" onclick="prod('f')">
 <div  style="position:absolute; left:2%; top:16%;width:19%; height:83%; background-color:#fff;">
<div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/tab3t211whitep1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Samsung Tab3 T211 White </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">16999 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">17745</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(4%Off)</td></tr>
</table>

  </div></a>
  
<form method="get" action="prodinfo.php" id="g" name="g">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"8002\" >";
?>	
</form>  
<a href="#" onclick="prod('g')">
<div style="position:absolute; left:22.5%; top:16%;width:19%; height:83%; background-color:#ffff;">
<div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/tab3t311whitep1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Samsung Tab3 T311 White </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">24599 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">25725</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(4%Off)</td></tr>
</table>

  </div></a>
  <form method="get" action="prodinfo.php" id="h" name="h">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"9001\" >";
?>	
</form>  
<a href="#" onclick="prod('h')">
<div style="position:absolute; left:42%; top:16%;width:19%; height:83%; background-color:#fff;">
 <div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/ipadminiw+c16gbwhitep1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Apple Ipad Mini 16GB Wifi+Cellular White </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">28950</td>
		</tr>
</table>
  </div></a>
  <form method="get" action="prodinfo.php" id="i" name="i">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"9004\" >";
?>	
</form>  
<a href="#" onclick="prod('i')">
<div style="position:absolute; left:61.5%; top:16%;width:19%; height:83%; background-color:#fff;">
<div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/ipadminiw+c32gbwhitep1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Apple Ipad Mini 32GB Wifi+Cellular White </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">34750</td>
		</tr>
</table>

  </div></a>
  <form method="get" action="prodinfo.php" id="j" name="j">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"9004\" >";
?>	
</form>  
<a href="#" onclick="prod('j')">
<div style="position:absolute; left:81%; top:16%;width:19%; height:83%; background-color:#fff;">
<div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/ipadrdw+c16gbwhitep1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Apple Ipad 16GB with Retina Dispaly and Wifi+Cellular White (4 th Generation)</td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">38500</td>
		</tr>
</table>

  </div></a>
  </div>


<div id="apDiv33">
  <div id="apDiv34">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#111; font-variant:small-caps;">New Launches</p>
</div>
 <form method="get" action="prodinfo.php" id="k" name="k">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"1007\" >";
?>	
</form>
 <a href="#" onclick="prod('k')">
 <div  style="position:absolute; left:2%; top:16%;width:19%; height:83%; background-color:#fff;">
  <div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/galaxymega6.3whitep1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Samsung Mega 6.3 White  </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">29950 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">30890</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(3%Off)</td></tr>
</table>
  </div></a>
  
<form method="get" action="prodinfo.php" id="l" name="l">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"6005\" >";
?>	
</form>  
<a href="#" onclick="prod('l')">
<div style="position:absolute; left:22.5%; top:16%;width:19%; height:83%; background-color:#ffff;">
 <div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/bbz10blackp1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">BlackBerry Z10 Black </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">35900 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">42499</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(15%Off)</td></tr>
</table>

  </div></a>
  <form method="get" action="prodinfo.php" id="m" name="m">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"5008\" >";
?>	
</form>  
<a href="#" onclick="prod('m')">
<div style="position:absolute; left:42%; top:16%;width:19%; height:83%; background-color:#fff;">
<div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/desire600blackp1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Htc Desire 600 Black  </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">25550 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">27000</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(5%Off)</td></tr>
</table>
  </div></a>
  <form method="get" action="prodinfo.php" id="n" name="n">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"4003\" >";
?>	
</form>  
<a href="#" onclick="prod('n')">
<div style="position:absolute; left:61.5%; top:16%;width:19%; height:83%; background-color:#fff;">
<div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/xperiazrblackp1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Sony Xperia ZR C5502 Black</td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">28800 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">29900</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(3.5%Off)</td></tr>
</table>

  </div></a>
  <form method="get" action="prodinfo.php" id="o" name="o">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"3010\" >";
?>	
</form>  
<a href="#" onclick="prod('o')">
<div style="position:absolute; left:81%; top:16%;width:19%; height:83%; background-color:#fff;">
  <div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/canvas4a210whitep1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Micromax Canvas 4 White A210 White </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">18999 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">19999</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(5%Off)</td></tr>
</table>

  </div></a>
  </div>

<div id="apDiv19">
  <div id="apDiv41">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#111; font-variant:small-caps;">Best Selling</p>
</div>
 <form method="get" action="prodinfo.php" id="p" name="p">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"1002\" >";
?>	
</form>
 <a href="#" onclick="prod('p')">
 <div  style="position:absolute; left:2%; top:16%;width:19%; height:83%; background-color:#fff;">
<div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/galaxygrandquattrowhitep1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Samsung Galaxy Grand Quattro White </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">16250 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">19000</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(14.5%Off)</td></tr>
</table>

  </div></a>
  
<form method="get" action="prodinfo.php" id="q" name="q">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"2002\" >";
?>	
</form>  
<a href="#" onclick="prod('q')">
<div style="position:absolute; left:22.5%; top:16%;width:19%; height:83%; background-color:#ffff;">
<div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/lumia510blackp1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Nokia Lumia 510 Black </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">6950	 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">9500</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(26%Off)</td></tr>
</table>

  </div></a>
  <form method="get" action="prodinfo.php" id="r" name="r">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"8001\" >";
?>	
</form>  
<a href="#" onclick="prod('r')">
<div style="position:absolute; left:42%; top:16%;width:19%; height:83%; background-color:#fff;">
  
<div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/tab3t211whitep1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Samsung Tab3 T211 White </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">16999 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">17745</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(4%Off)</td></tr>
</table>
  </div></a>
  <form method="get" action="prodinfo.php" id="s" name="s">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"5006\" >";
?>	
</form>  
<a href="#" onclick="prod('s')">
<div style="position:absolute; left:61.5%; top:16%;width:19%; height:83%; background-color:#fff;">
<div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/htconevblackp1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Htc One V Black </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">13200 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">19399</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(30%Off)</td></tr>
</table>

  </div></a>
  <form method="get" action="prodinfo.php" id="t" name="t">
<?php
echo "<input type=\"hidden\" name=\"pid1\" value=\"4008\" >";
?>	
</form>  
<a href="#" onclick="prod('t')">
<div style="position:absolute; left:81%; top:16%;width:19%; height:83%; background-color:#fff;">
 <div id="image_container" style="position:absolute; top:0%; left:0%;width:100%; height:50%;">
<center><img src="prodimg/xperiaeblackp1.jpg" class="resize"></center>
</div>
<table border="0" style="position:absolute; left:0%; top:70%; width:100%;">
	<tr><td height="1" style="text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;">Sony Xperia E Black </td></tr>
	<tr><td style="font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;">8350 &nbsp;<strong style="text-decoration:line-through; color:#555;font-weight:lighter;">10049</strong></td>
		</tr>
	<tr><td style="font-family:'Comic Sans MS', cursive;color:#F00; font-size:60%;">(17%Off)</td></tr>
</table>

  </div></a>
  </div>



<div id="apDiv35">
<img src="prodimg/Picture1.png" width="110%" height="30%" style="position:absolute; top:0%; left:0%;"/>
<img src="prodimg/Picture2.png" width="111%" height="30%" style="position:absolute; top:25%; left:-2%;"/>
<img src="prodimg/Picture4.png" width="110%" height="30%" style="position:absolute; top:50%; left:0%;"/>
<img src="prodimg/Picture3.png" width="116%" height="30%" style="position:absolute; top:75%; left:-10%;"/>
</div>

<div id="apDiv36">
<a href="samsung.php"><img src="prodimg/samsung_ad.jpg" width="48%" height="50%" /></a>
<a href="apple.php"><img src="prodimg/apple_ad.png" width="50%" height="50%" /></a>
<a href="micromax.php"><img src="prodimg/micromax_ad.jpg" width="33%" height="48%" /></a>
<a href="sony.php"><img src="prodimg/sony_ad.jpg" width="31%" height="48%" /></a>
  <a href="bb.php"><img src="prodimg/bb_ad.jpg" width="34%" height="48%" /></a>
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
<?php
include("footer.php")
?>
</div>


<div id="trans">
</div>


</div>

</body>
</html>
