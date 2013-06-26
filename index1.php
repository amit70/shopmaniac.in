<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="themes/4/js-image-slider.js" type="text/javascript"></script>
<title>Untitled Document</title>
<script type="text/javascript" language="javascript">
		sfHover = function() {
   		var sfEls = document.getElementById("navbar").getElementsByTagName("li");
   		for (var i=0; i<sfEls.length; i++) {
      		sfEls[i].onmouseover=function() {
         	this.className+=" hover";
      	}
      	sfEls[i].onmouseout=function() {
         this.className=this.className.replace(new RegExp(" hover\\b"), "");
      	}
   		}
		}
		if (window.attachEvent) window.attachEvent("onload", sfHover);
		
//----------------------------------------------------------------------------------------
		function logtr() {
			document.getElementById('logdiv').style.visibility='visible';
			document.getElementById('trans').style.visibility='visible';
			document.getElementById('logdiv').style.opacity=100;
		}
		function ilogtr() {
			window.location="http://localhost/shopmaniac/index.php";
			
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
  	alert("Username must be filled out");
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

//------------------------------------------------------------------------
function myaccount(nam)
{
    document.forms[nam].submit();
}		
		</script>
<style type="text/css">
body {
				padding: 50px;
			}
			/* The CSS Code for the menu starts here */
			#menu {
				font-family: Arial, sans-serif;
				font-weight: bold;
				text-transform: uppercase;
				margin:2% -0.5%;
				padding: 0 0 0 10px;
				list-style-type: none;
				font-size: 13px;
				background: #eee;
				height: 40px;
				-moz-border-radius: 10px;
				-webkit-border-radius: 10px;
				border-top: 2px solid #eee;
				border-left: 2px solid #eee;
				border-bottom: 2px solid #ccc;
				border-right: 2px solid #ccc;
				
				
			}
			#menu li {
				float: left;
				
				list-style: none;
			}
			#menu li ul {
   				display: none; 
  				 width: 10em; /* Width to help Opera out */
   				background-color:#111;
				font-size:16px;
				z-index:10;}
			#menu li a {
				text-decoration: none;
				display: block;
				padding: 0 20px;
				line-height: 40px;
				color: #666;
				
			}
			#menu li:hover li, #menu li.hover li { float: none; }
			#menu li a:hover, #menu li.active a {
				background-color:#444;
				border-bottom: 2px solid #DDD;
				color: #F66;
			}
			
			#menu li:hover ul, #menu li.hover ul {
   				display: block;
   				position: absolute;
   				margin: 0;
   				padding: 0; }
			
			#menu li:hover li, #navbar li.hover li {
   				float: none; }
			#menu li:hover li a, #menu li.hover li a {
   				background-color:#111;
   				/*border-bottom: 1px solid #fff;*/
   				color: #CCC; }
			#menu li li a:hover {
   				background-color:#111; }	
   
			/* Black Menu */
			#menu.black {
				border-top: 2px solid #333;
				border-left: 2px solid #333;
				border-bottom: 2px solid #000;
				border-right: 2px solid #000;
				background:#111;}
			#menu.black a {color:#CCC;}
			#menu.black li a:hover, #menu.black li.active a {color: #999; background:#444; border-bottom: 2px solid #444;}	
		
			
			#trans {
				
				position:fixed;
				left:0%;
				top:0%;
				width:100%;
				height:100%;
				z-index:1000;
				background:#000;
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
	font:Verdana, Geneva, sans-serif;
	font-size:13px;
	}
p.a
{
	
	position:absolute;
	right:1%;
	top:-10%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.guest
{
	position:absolute;

	right:100%;
	top:-50%;
	font-size:90%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.call
{
	position:absolute;
	right:70%;
	top:-50%;
	font-size:85%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.mail
{
	position:absolute;
	right:30%;
	top:-50%;
	font-size:90%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.acc
{
	position:absolute;
	right:12%;
	top:-50%;
	font-size:90%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}

p.sign
{
	position:absolute;
	right:0%;
	top:-50%;
	font-size:90%;
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
	font:Verdana, Geneva, sans-serif;
}
p.shopmanaic
{
	position:absolute;
	top:-5%;
	left:2%;
	font-size:22px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
	font-weight:bold;
}
p.myaccount
{
	position:absolute;
	left:18%;
	top: -5%;
	font-size:22px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
	font-weight:bold;
}
p.help
{
	position:absolute;
	left: 35%;
	top: -5%;
	font-size:22px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
	font-weight:bold;
}
p.policies
{
	position:absolute;
	left:49%;
	top: -5%;
	font-size:22px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
	font-weight:bold;
}
p.products
{
	position:absolute;
	left: 61%;
	top: -5%;
	font-size:22px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
	font-weight:bold;
}
p.home
{
	position:absolute;
	left: 2%;
	top: 12%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;	
}
p.account
{
	position:absolute;
	left: 19%;
	top: 12%;;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.placeorder
{
	position:absolute;
	left: 35%;
	top: 12%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.returnpolicy
{
	position:absolute;
	left: 49%;
	top: 12%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.formal
{
	position:absolute;
	left: 61%;
	top: 12%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.aboutus
{
	position:absolute;
	left: 2%;
	top: 20%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.mytrolly
{
	position:absolute;
	left: 19%;
	top: 20%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.trackorder
{
	position:absolute;
	left: 35%;
	top: 20%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.privacypol
{
	position:absolute;
	left: 49%;
	top: 20%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.trousers
{
	position:absolute;
	left: 61%;
	top: 20%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}

p.contactus
{
	position:absolute;
	left: 2%;
	top: 28%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}

	
p.login
{
	position:absolute;
	left: 19%;
	top: 28%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.returnp
{
	position:absolute;
	left: 35%;
	top:28%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.shipping
{
	position:absolute;
	left: 49%;
	top: 28%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.casual
{
	position:absolute;
	left: 61%;
	top: 28%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.jeans
{
	position:absolute;
	left: 61%;
	top: 36%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.footwear
{
	position:absolute;
	left: 61%;
	top: 44%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.tc
{
	position:absolute;
	left: 35%;
	top:35%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.faq
{
	position:absolute;
	left: 35%;
	top: 42%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.kitchen
{
	position:absolute;
	left: 61%;
	top: 52%;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.follow
{
	position:absolute;
	left:77%;
	top: -5%;
	font-size:22px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
	font-weight:bold;
}
p.stay
{
	position:absolute;
	left:77%;
	top: 35%;
	font-size:18px;
	font:Verdana, Geneva, sans-serif;
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
	position:absolute;
	width:96%;
	height:65%;
	z-index:12;
	left: 2%;
	top: 367%;
	background-color:#333;
	border-style:double;
	border-width:medium;
	border-color:#000;
}
}


#navbar {
   margin: 0;
   padding: 0;
   height: 2em; }
#navbar li {
   list-style: none;
   float: left; }
#navbar li a {
   display: block;
   padding: 3px 8px;
   background-color: #5e8ce9;
   color: #fff;
   text-decoration: none; }
#navbar li ul {
   display: none; 
   width: 10em; /* Width to help Opera out */
   background-color: #69f;}
#navbar li:hover ul, #navbar li.hover ul {
   display: block;
   position: absolute;
   margin: 0;
   padding: 0; }
#navbar li:hover li, #navbar li.hover li {
   float: none; }
#navbar li:hover li a, #navbar li.hover li a {
   background-color: #69f;
   border-bottom: 1px solid #fff;
   color: #000; }
#navbar li li a:hover {
   background-color: #8db3ff; }	


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
	position:absolute;
	width:15%;
	height:72%;
	z-index:1;
	right:2%;
	top: 23.5%;
	background-color:#333;
	color:#FFF;
}
#apDiv27 {
	position:absolute;
	width:15%;
	height:72%;
	z-index:1;
	left: 2%;
	top: 23.5%;
	background-color:#FFF;
	color:#FFF;
}
#apDiv28 {
	position:absolute;
	width:95%;
	height:20%;
	z-index:13;
	left: 2.5%;
	top: 105;
	
}
#apDiv29 {
	position:absolute;
	width:96%;
	height:47%;
	z-index:13;
	left: 2%;
	top: 98%;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#ACACAC;
}
#apDiv30 {
	position:absolute;
	width:100%;
	height:37px;
	z-index:1;
	background-color:#F0F0F0;
}
#apDiv31 {
	position:absolute;
	width:96%;
	height:47%;
	z-index:13;
	left: 2%;
	top: 146.5%;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#ACACAC;
}
#apDiv32 {
	position:absolute;
	width:100%;
	height:37px;
	z-index:1;
	background-color:#F0F0F0;
}
#apDiv33 {
	position:absolute;
	width:96%;
	height:47%;
	z-index:13;
	left:2%;
	top: 195%;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#ACACAC;
}
#apDiv34 {
	position:absolute;
	width:100%;
	height:37px;
	z-index:1;
	background-color:#F0F0F0;
}
#apDiv35 {
	position:absolute;
	width:15%;
	height:72%;
	z-index:14;
	left: 2%;
	top: 292%;
	border-style:double;
	border-width:thick;
	background-color:#BEBEBE;
}
#apDiv36 {
	position:absolute;
	width:61%;
	height:72%;
	z-index:15;
	left: 19%;
	top: 292%;
	border-style:double;
	border-width:thick;
}
#apDiv37 {
	position:absolute;
	width:15%;
	height:72%;
	z-index:14;
	right:2%;
	top: 292%;
	border-style:double;
	border-width:thick;
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
	position:absolute;
	width:96%;
	height:47%;
	z-index:13;
	left:2%;
	top: 243.5%;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#ACACAC;
}
#apDiv41 {
	position:absolute;
	width:100%;
	height:37px;
	z-index:1;
	background-color:#F0F0F0;
}
#apDiv42 {
	position:absolute;
	width:96%;
	height:15%;
	left:2%;
	z-index:1;
	top: 0%;
	
	
}
#apDiv43 
{
	position:absolute;
	top:0%;
	right:0%;
	width: 48%;
	height: 18%;
	font:Verdana, Geneva, sans-serif;
	font-size:11px;
	color:#666;
	
}
#logdiv
{
	position:fixed;
	top:42%;
	left:38%;
	width:80%;
	height:85%;
	margin-top:-35%;
	margin-left:-25%;
	
	z-index:10000;
	background-color:#f6f6f6;
	border:thin;
	border-style:solid;
	border-color:#fff
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

</style>

</head>

<body>
<?php
$flag="$_GET[flag]";
?>
<div name="transdiv" id="logdiv">
<?php 
if($flag==0)
{
echo "<a href=\"#\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\" onclick=\"ilogtr()\" /> </a>";
}
else if($flag==1)
{
	echo "<a href=\"http://localhost/shopmaniac/formalshirts.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==2)
{
	echo "<a href=\"http://localhost/shopmaniac/cs.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==3)
{
	echo "<a href=\"http://localhost/shopmaniac/trousers.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==4)
{
	echo "<a href=\"http://localhost/shopmaniac/jeans.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==5)
{
	echo "<a href=\"http://localhost/shopmaniac/t-shirts.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==6)
{
	echo "<a href=\"http://localhost/shopmaniac/sportsshoes.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==7)
{
	echo "<a href=\"http://localhost/shopmaniac/casualshoes.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==8)
{
	echo "<a href=\"http://localhost/shopmaniac/formalshoes.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==9)
{
	echo "<a href=\"http://localhost/shopmaniac/sf.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==100)
{
	$pid="$_GET[pid1]";	 
	echo "<form name=\"prodinfo\" method=\"POST\" action=\"http://localhost/shopmaniac/prodinfo.php\">
	<input type=\"hidden\" name=\"pid1\" value=\"$pid\">
	</form>";
	echo "<a href=\"#\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\" onclick=\"myaccount('prodinfo')\"/> </a>";
}
else if($flag==101)
{
	echo "<a href=\"http://localhost/shopmaniac/mytrolley2.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==102)
{
	echo "<a href=\"http://localhost/shopmaniac/search.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1001)
{
	echo "<a href=\"http://localhost/shopmaniac/returnpolicy.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1002)
{
	echo "<a href=\"http://localhost/shopmaniac/privacypolicy.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1003)
{
	echo "<a href=\"http://localhost/shopmaniac/shippingpolicy.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1004)
{
	echo "<a href=\"http://localhost/shopmaniac/t&c.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1005)
{
	echo "<a href=\"http://localhost/shopmaniac/faq.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1006)
{
	echo "<a href=\"http://localhost/shopmaniac/trackorder.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1007)
{
	echo "<a href=\"http://localhost/shopmaniac/placeorder.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1008)
{
	echo "<a href=\"http://localhost/shopmaniac/returnproduct.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1009)
{
	echo "<a href=\"http://localhost/shopmaniac/mypoints.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1010)
{
	echo "<a href=\"http://localhost/shopmaniac/contactus.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1011)
{
	echo "<a href=\"http://localhost/shopmaniac/aboutus.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==1012)
{
	echo "<a href=\"http://localhost/shopmaniac/mycredits.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==10001)
{
	echo "<a href=\"http://localhost/shopmaniac/mens.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==10002)
{
	echo "<a href=\"http://localhost/shopmaniac/footwear.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
else if($flag==10003)
{
	echo "<a href=\"http://localhost/shopmaniac/homeware.php\"><img src=\"close.png\" alt=\"Close\" style=\"height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10\"/> </a>";
}
?>

<div id="logdiv1" onmouseover="login()">
<h3 align="center"><font face="Comic Sans MS, cursive" color="#666666">LOGIN</font></h3>
<h4 align="center"><font face="Comic Sans MS, cursive" color="#666666">For Existing Users</font></h4>
<form method="POST" action="http://localhost/shopmaniac/check.php"  name="login123">
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
  echo "<input type=\"hidden\" value=\"$flag\" name=\"flag\" />";
  echo "<input type=\"hidden\" value=\"$pid\" name=\"pid\"/>";
  ?>
  
 <p style="position:absolute; left:2%; top:60% ; color:#F00; font-family:'Comic Sans MS', cursive;" >Enter Correct Email Id or Password</p>
 <a href="#" onclick="login1()"><img src="prodimg/Login1.png" width="50%" height="15%" style="position:absolute; left:25%; top:88%;" onmousedown="this.src='prodimg/Login2.png'" onmouseup="this.src='prodimg/Login1.png'"/></a>
</form>
</div>

<div id="logdiv2" onmouseover="reg()">
<h3 align="center"><font face="Comic Sans MS, cursive" color="#666666">Register</font></h3>
<h4 align="center"><font face="Comic Sans MS, cursive" color="#666666">For New Users</font></h4>
<form method="POST" action="http://localhost/shopmaniac/Divert.php" name="register" >
  <table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:10%; top:20%">
  <tr>
  <td height="30"><font color="#666666" face="Comic Sans MS, cursive">Username:</font></td>
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
  <td height="30"><label for="Full Name"><font color="#666666" face="Comic Sans MS, cursive">Full Name:</font></label></td>
  <td height="30"><?php
  echo "<input type=\"text\" name=\"Name\" id=\"Name\" />";
  ?></td>
  </tr>
  <tr>
  <td height="30"><label><font color="#666666">Address:</font face="Comic Sans MS, cursive"></label></td>
  <td height="30"><?php
  echo "<textarea rows=\"4\" cols=\"16\" name=\"address\" id=\"address\"></textarea>";
  ?></td>
  </tr>
  <tr>
  <td height="30"><label for="Telephone"><font color="#666666" face="Comic Sans MS, cursive">Contact No:</font></label></td>
  <td height="30"><?php
  echo "<input type=\"text\" name=\"Telephone\" id=\"Telephone\" />";
  ?></td>
  </tr>
  <tr>
  <td height="30"><label for="E-mail"><font color="#666666" face="Comic Sans MS, cursive">E-mail:</font></label></td>
  <td height="30"><?php
  echo "<input type=\"text\" name=\"email\" id=\"email\" />";
  ?></td>
  </tr>
  </table>
  
<a href="#" onclick="reg1()"><img src="prodimg/Register1.png" width="50%" height="15%" style="position:absolute; left:25%; top:85%;" onmousedown="this.src='prodimg/Register2.png'" onmouseup="this.src='prodimg/Register1.png'"/></a>
</form>
</div>
</div>
</div>

<div id="trans">
</div>


</body>
</html>
