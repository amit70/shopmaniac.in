<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="prodimg/title123.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="navbar.css" rel="stylesheet" type="text/css" />
<title>Nokia Mobiles : Buy Samsung Mobiles online in India | Shopmaniac.in</title>
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
		
		function mytrol()
{
	document.forms["trol"].submit();
}

function track13()
{
	var x=document.forms["trk"]["oid"].value;
	if(x==null || x=="")
	{
		alert("Please Enter Order Id");
		return false();
	}
	if(isNaN(x))
	{
		alert("Please Enter only Number");
		return false();
	}
	document.forms["trk"].submit();
}
function website()
{
	document.forms["website1"].submit();
}
function homes()
{ 
    document.forms["home"].submit();
}

function myaccount()
{
    document.forms["acc"].submit();
}
function submitform()
{
    document.forms["filter"].submit();
}
function prod1(a)
{
	document.forms[a].submit();
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
  document.forms["contactaaa"].submit();
}		


function go(q)
{
    document.forms[q].submit();
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
		#container {
            background-color: #fff;
            width: 420px;
            margin: 0px auto;
            padding: 200px;
		
    height:0px;
        }
			/* The CSS Code for the menu starts here */
			#menu {
				font-family: Arial, sans-serif;
				font-weight: bold;
				text-transform: uppercase;
				margin:-7% -0.5%;
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
	
h1{
	
	color:red;
	
}
img {
   border: 0;
}
a { 
    text-decoration: none; 
    border:0;
    color: #248AC9; 
}
p.aaa
{
	position:absolute;
	top:35px;
	right:8px;
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
p.call
{
	position:absolute;
	left:2%;
	top:-70%;
	font-size:85%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.mail
{
	position:absolute;
	left:33%;
	top:-100%;
	font-size:100%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.acc
{
	position:absolute;
	left:65%;
	top:-80%;
	font-size:100%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}

p.sign
{
	position:absolute;
	left:85%;
	top:-80%;
	font-size:100%;
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
	top: 52%;
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
	left: 35%;
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
	width: 50%;
	height: 18%;
	font:Verdana, Geneva, sans-serif;
	font-size:11px;
	color:#666;
	
}

	#apDiv44 {
	position:relative;
	width:193.8%;
	height:400px;
	z-index:13;
	left: -200px;
	top: -170px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;

}
#apDiv45 {
	position:absolute;
	width:96%;
	height:92%;
	z-index:14;
	left:2%;
	top: 2%;
	font-family:"Comic Sans MS", cursive;
	text-align:justify;

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
	border-color:#979797;}
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
#apDiv18 {
position:relative;
	width:100%;
	height:400px;
	z-index:12;
	background-color:#FCFCFC;
	border-top-style:solid;
	border-top-width:medium;
	border-color:#C1C1C1;
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
#apDiv21 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:13;
}
.main
{
position:relative;
z-index:100;
width: 870px;
padding-left: 5px;
margin-left: auto;
margin-right: auto;
background-color:black;
border: 2px solid #e0e0e0;
border-width: 0 2px;

}
#apDiv48 {
	position:relative;
	
	left:-200px;
	top:-175px;
	width:196%;
	height:200px;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#f4f4f4	;
}
		#count
{
	position:relative;
	left:-200px;
	top:-160px;
	width:196%;
	height:70px;
	
}
#apDiv1 {
	
	position:relative;
	width:196%;
	height:400px;
	z-index:14;
	left:-200px;
	top:-150px;
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

<body>

<div id="container">

<?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
if($_SESSION['uname']!="")
{
$qry=mysql_query("select * from user where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$trolley1=$row['trolley'];
}
$arr=spliti(",",$trolley1);
$no=0;
$no=count($arr);
}
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
  echo "<input type=\"hidden\" name=\"flag\" value=\"11\" />";
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
  echo "<input type=\"hidden\" name=\"flag\" value=\"11\" />";
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

<div id="apDiv48">
<form action="nokiaresponse.php" method="POST" name="filter" id="filter">

<div style="position:absolute; left:1%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%; font-family:'Comic Sans MS', cursive; color:#111;"><b>OS</b></p>
   <?php
   $prodname1=array();
   $prodname2=array();
   $i1=0;
   $i2=0;
  $qry1=mysql_query("select * from products where subname='mobiles' and brand='nokia' and category='windows'");
 while($row = mysql_fetch_array($qry1))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname1))
		{
			continue;
		}
		else
		{
			$prodname1[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
$count1=count($prodname1);

$qry1=mysql_query("select * from products where subname='mobiles' and brand='nokia' and category='asha software platform 1.0'");
 while($row = mysql_fetch_array($qry1))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname2))
		{
			continue;
		}
		else
		{
			$prodname2[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
$count2=count($prodname2);
  ?>
  <select name="category" id="category" style="position:absolute; left:2%; top:30%; width:90%; font-family:'Comic Sans MS', cursive; " onChange="javascript: submitform()" >

  <option >Choose OS</option> 
 <?php 
 echo "<option value=\"windows\" >Windows($count1)</option>";
  echo "<option value=\"asha software platform 1.0\" >Asha($count2)</option>";
    ?>
 
   </select>
 
</div>
<div style="position:absolute; left:19.5%; top:2%; height:96%; width:0.3%; background-color:#F1F1F1;">
</div>

<div style="position:absolute; left:19.5%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%; font-family:'Comic Sans MS', cursive;"><b>Screen Size</b></p>
   <?php
   $prodname1=array();
 $prodname2=array();
 $prodname3=array();
 $i1=0;
  $qry4=mysql_query("select * from products where subname='mobiles' and brand='nokia' and size BETWEEN 3 AND 3.9");
  while($row = mysql_fetch_array($qry4))
{
	//$name= $row['pname'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname1))
		{
			continue;
		}
		else
		{
			$prodname1[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count4=count($prodname1);
 

  $qry4=mysql_query("select * from products where subname='mobiles' and brand='nokia' and size Between 4 AND 4.9");
  while($row = mysql_fetch_array($qry4))
{
	//$name= $row['pname'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname2))
		{
			continue;
		}
		else
		{
			$prodname2[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count5=count($prodname2);
 
     $qry4=mysql_query("select * from products where subname='mobiles' and brand='nokia' and size BETWEEN 5 AND 5.9");
  while($row = mysql_fetch_array($qry4))
{
	//$name= $row['pname'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname3))
		{
			continue;
		}
		else
		{
			$prodname3[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count6=count($prodname3);
  ?>
  <select name="size1" id="size1" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Choose Size</option>
 <?php
  echo "<option value=\"3-3.9\">3-3.9($count4)</option>";
 echo "<option value=\"4-4.9\">4-4.9($count5)</option>";
 //echo "<option value=\"5-5.9\">5-5.9($count6)</option>";
  ?>
</select>
 
</div>
<div style="position:absolute; left:39.5%; top:2%; height:96%; width:0.3%; background-color:#F1F1F1;">
</div>
 <?php
 $prodname1=array();
   $prodname2=array();
      $prodname3=array();
   $i1=0;
   $i2=0;
      $i3=0;
  $qry6=mysql_query("select * from products where subname='mobiles' and brand='nokia'");
 while($row = mysql_fetch_array($qry6))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname1))
		{
			continue;
		}
		else
		{
			$prodname1[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count6=count($prodname1);
 
   
  ?>
<div style="position:absolute; left:39.5%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%;font-family:'Comic Sans MS', cursive;"><b>Brand</b></p>
  
  <select name="brand1" id="brand1" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Choose Brand</option>
  <?php
  echo "<option value=\"nokia\">Nokia ($count6)</option>";
  ?>
</select>
 
</div>
<div style="position:absolute; left:58.5%; top:2%; height:96%; width:0.3%; background-color:#F1F1F1;">
</div>


<div style="position:absolute; left:58.5%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%; font-family:'Comic Sans MS', cursive;"><b>Price</b></p>
  <?php
  $prodname1=array();
   $prodname2=array();
   $i1=0;
   $i2=0;
  $qry300=mysql_query("select * from products where subname='mobiles' and brand='nokia' and discprice between 20001 and 30000");
     while($row = mysql_fetch_array($qry300))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname1))
		{
			continue;
		}
		else
		{
			$prodname1[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
$count300=count($prodname1);
 
$qry300=mysql_query("select * from products where subname='mobiles' and brand='nokia' and discprice between 10001 and 20000");
     while($row = mysql_fetch_array($qry300))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname1))
		{
			continue;
		}
		else
		{
			$prodname2[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count3001=count($prodname2);
  
  $qry0=mysql_query("select * from products where subname='mobiles' and brand='nokia' and discprice between 0 and 10000");
     while($row = mysql_fetch_array($qry0))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname1))
		{
			continue;
		}
		else
		{
			$prodname3[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count0=count($prodname3);
  ?>
  <select name="range" id="range" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Price Range</option>
  <?php
  echo "<option value=\"0-10000\">0-10000($count0)</option>";
  echo "<option value=\"10001-20000\">10001-20000($count3001)</option>";
  echo "<option value=\"20001-30000\">20001-30000($count300)</option>";
  ?>
</select>
 
</div>
<div style="position:absolute; left:78.5%; top:2%; height:96%; width:0.3%; background-color:#F1F1F1;">
</div>


<div style="position:absolute; left:79.5%; top:2%; width:19.5%; height:96%; ;">
<p style="position:absolute; left:10%; top:3%; font-family:'Comic Sans MS', cursive;"><b>Color</b></p>
  <?php
 $prodname1=array();
   $prodname2=array();
      $prodname3=array();
	  $prodname4=array();
	  $prodname5=array();
	  	  $prodname6=array();
   $i1=0;
   $i2=0;
      $i3=0;
  $qry8=mysql_query("select * from products where subname='mobiles' and brand='nokia' and color='white'");
   while($row = mysql_fetch_array($qry8))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname1))
		{
			continue;
		}
		else
		{
			$prodname1[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count8=count($prodname1);

$qry8=mysql_query("select * from products where subname='mobiles' and brand='nokia' and color='black'");
   while($row = mysql_fetch_array($qry8))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname2))
		{
			continue;
		}
		else
		{
			$prodname2[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count81=count($prodname2);
 
 $qry8=mysql_query("select * from products where subname='mobiles' and brand='nokia' and color='blue'");
   while($row = mysql_fetch_array($qry8))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname3))
		{
			continue;
		}
		else
		{
			$prodname3[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count82=count($prodname3);
 
 $qry8=mysql_query("select * from products where subname='mobiles' and brand='nokia' and color='red'");
   while($row = mysql_fetch_array($qry8))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname4))
		{
			continue;
		}
		else
		{
			$prodname4[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count83=count($prodname4);
 
 $qry8=mysql_query("select * from products where subname='mobiles' and brand='nokia' and color='yellow'");
   while($row = mysql_fetch_array($qry8))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname5))
		{
			continue;
		}
		else
		{
			$prodname5[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count84=count($prodname5);
 
 $qry8=mysql_query("select * from products where subname='mobiles' and brand='nokia' and color='green'");
   while($row = mysql_fetch_array($qry8))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname6))
		{
			continue;
		}
		else
		{
			$prodname6[$i1]=$name;
			$i1=$i1+1;
		}
	}
	else
	{
		continue;
	}
}
 $count85=count($prodname6);
  ?>
  <select name="color" id="color" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Choose Color</option>
  <?php
  echo "<option value=\"black\">Black($count81)</option>";
  echo "<option value=\"white\">White($count8)</option>";
  echo "<option value=\"blue\">Blue($count82)</option>";
    echo "<option value=\"red\">Red($count83)</option>";
	  echo "<option value=\"yellow\">Yellow($count84)</option>";
	    echo "<option value=\"green\">Green($count85)</option>";
  ?>
</select>
</div>


</form>
</div>

<div id="count">
<?php
$prodname=array();
$i=0;
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from products where subname='mobiles' and brand='nokia'");
while($row = mysql_fetch_array($qry))
{
	//$count=$row['count(*)'];
	$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
	if (in_array($name, $prodname))
		{
			continue;
		}
		else
		{
			$prodname[$i]=$name;
			$i=$i+1;
		}
	}
	else
	{
		continue;
	}
}
$count=count($prodname);
echo "<p style=\"position:absolute; left:0%; top:1%; font-family:'Comic Sans MS', cursive; font-weight:bold; font-size:150%;\">Nokia ($count)</p><hr style=\"position:absolute; left:0%; top:85%; width:96%;\"/>";
?>
</div>

<div id="apDiv1">
<?php
$prodname=array();
$a=0;
$l=0;
$t=0;
$q=0;
$i=0;	
$flag=0;
	$fetch=mysql_query("select * from products where subname='mobiles' and brand='nokia'");
	$count = @mysql_num_rows($fetch);
	if($count > 0)
	{
	while($row = mysql_fetch_array($fetch))
	{
		if($i==0)
		{
			$t=0;
		}
		else if($i%5==0)
		{
			$t=$t+110;
			$l=0;
			$q=$q+1;
		}
		$id=$row['pid'];
		$name= $row['pname'];
		$stock=$row['stock'];
		if($stock=="Out Of Stock")
		{
			continue;
		}
		else
		{
		if (in_array($name, $prodname))
		{
			continue;
		}
		else
		{
		$prodname[$i]=$name;
		$size= $row['size'];
		$prize= $row['price'];
		$prize1=$row['discprice'];
		$discount=$row['discountpercent'];
		$img1=$row['img1'];
		$img2=$row['img2'];
		$img3=$row['img3'];
		$img4=$row['img4'];
		$img5=$row['img5'];
		$info=$row['info'];
		$arr123=spliti("-",$info);
		$delivery=$row['delivery'];
		
		if($prize==$prize1)
		{
			$flag=1;
		}
		else
		{
			$flag=0;
		}
		$qry1=mysql_query("select * from products where pname='$name'");
		$g=0;
		$gg="";
		$sizy=array();
		while($row1 = mysql_fetch_array($qry1))
		{
			$sizeaaa=$row1['size'];
			$stock123=$row1['stock'];
			if($stock123=="In Stock")
			{
			$sizy[$g]=$sizeaaa;
			}
			else
			{
				continue;
			}
			$g=$g+1;
		}
		echo "<form method=\"get\" action=\"prodinfo.php\" id=\"prod123\" name=\"prod123".$i."\">";
        echo "<input type=\"hidden\" name=\"pid1\" value=\"$id\" >";
        echo "</form> ";

		echo "<div style=\" width:19.2%;height:85%; background-color:#fff; position:absolute; top:".$t."%; left:".$l."%; \" onMouseOver=\"quickbuy('quickbuy".$i."')\" onMouseOut=\"quickbuy1('quickbuy".$i."')\">";
		echo "<a href=\"#\" onclick=\"prod1('prod123".$i."')\">";
		
	 echo "<div id=\"image_container\" style=\"position:absolute; top:0%; left:0%;width:100%; height:50%;\">";
	 echo "<center><img src=\"prodimg/$img1\" class=\"resize\"></center>";
	 echo "</div>";
	if($flag==1)
	{
	echo "<table border=\"0\" style=\"position:absolute; left:0%; top:59%; width:100%; \">";
	echo "<tr><td height=\"1\" style=\"text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;\">$name </td></tr>";
	echo "<tr><td style=\"font-family:'Comic Sans MS', cursive; color:#F00;font-size:90%;\">$prize </td>
		</tr>";
		for($d=1;$d<count($arr123);$d++)
		{
			$arrin=spliti(":",$arr123[$d]);
			if($d==1)
			{
				echo "<tr><td height=\"1\" style=\"text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;\">* $arrin[1]' </td></tr>";
			}
			else
			{
			echo "<tr><td height=\"1\" style=\"text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;\">* $arrin[1] </td></tr>";
			}
		}
	echo "</table>";
	}
	else
	{
	echo "<table border=\"0\" style=\"position:absolute; left:0%; top:59%; width:100%; \">";
	echo "<tr><td height=\"1\" style=\"text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;\">$name </td></tr>";
	echo "<tr><td style=\"font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;\">$prize1 &nbsp;<strong style=\"text-decoration:line-through; color:#555;font-weight:lighter;\">$prize</strong></td>
		</tr>";
	echo "<tr><td style=\"font-family:'Comic Sans MS', cursive;   color:#F00; font-size:60%;\">($discount)</td></tr>";
	for($d=1;$d<count($arr123);$d++)
		{
			$arrin=spliti(":",$arr123[$d]);
				if($d==1)
			{
				echo "<tr><td height=\"1\" style=\"text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;\">* $arrin[1]' </td></tr>";
			}
			else
			{
			echo "<tr><td height=\"1\" style=\"text-align:left; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;\">* $arrin[1] </td></tr>";
			}
		}
	echo "</table>";
	}
		echo "</a>";
		
   echo "</div>";
	$l=$l+20.2;
	$i=$i+1;
	}
	}
	}
	}
	else
	{
		echo "<p style=\"position:absolute; left:30%; top:70%; font:'Comic Sans MS', cursive; font-size:150%; color:#111; font-family:'Comic Sans MS', cursive;\">SORRY NO PRODUCT FOUND</p>";
	}
	$a=$t+110;
mysql_close($aaa);
?>



<?php
echo "<div id=\"apDiv18\" style=\"top:$a%;\">";
?>
<?php
include("footer.php");
?>
</div>
</div>
</div>
<div id="trans">
</div>

</div>

</body>
</html>
