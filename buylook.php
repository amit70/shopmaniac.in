<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="navbar.css" rel="stylesheet" type="text/css"  />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
		
		function mytrol()
{
	document.forms["trol"].submit();
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

function contact()
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
function show()
{
	document.getElementById('products').style.visibility='visible';
	document.getElementById('minus').style.visibility='visible';
}
function hide()
{
	document.getElementById('products').style.visibility='hidden';
	document.getElementById('minus').style.visibility='hidden';
}
function change(thisImg,x,y,z) 
{
	document.getElementById('apDiv45').innerHTML="";
    document.getElementById('apDiv45').innerHTML='<img src='+thisImg+' id="mn" style="position:absolute;width:100%;height:100%">';
	document.getElementById(x).style.visibility='visible';
	document.getElementById(y).style.visibility='hidden';
	document.getElementById(z).style.visibility='hidden';

}
function showitems1() 
{
			document.getElementById('items1').style.visibility='visible';
			//document.getElementById('trans').style.visibility='visible';
			document.getElementById('items1').style.opacity=50;
}
		
		function showitems2() 
{
			document.getElementById('items2').style.visibility='visible';
			//document.getElementById('trans').style.visibility='visible';
			document.getElementById('items2').style.opacity=100;
}
		function showitems3() 
{
			document.getElementById('items3').style.visibility='visible';
			//document.getElementById('trans').style.visibility='visible';
			document.getElementById('items3').style.opacity=100;
}
function send1()
{
	document.forms['buylook1'].submit();
}
function send2()
{
	document.forms['buylook2'].submit();
}
function send3()
{
	document.forms['buylook3'].submit();
}

function closeitems1()
{
	document.getElementById('items1').style.visibility='hidden';
	document.getElementById('trans').style.visibility='hidden';
}
function closeitems2()
{
	document.getElementById('items2').style.visibility='hidden';
	document.getElementById('trans').style.visibility='hidden';
}
function closeitems3()
{
	document.getElementById('items3').style.visibility='hidden';
	document.getElementById('trans').style.visibility='hidden';
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

#apDiv18 {
	position:relative;
	width:96%;
	height:65%;
	z-index:12;
	left: -200px;
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
	width:195%;
	height:400px;
	z-index:12;
	left: -200px;
	top: -135px;
	background-color:#333;
	border-style:solid;
	border-width:thin;
	border-color:#333;
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
 #container {
            background-color: #fff;
            width: 420px;
            margin: 0px auto;
            padding: 200px;
		
    height:0px;
        }
		
		#apDiv44 {
	position:relative;
	width:196%;
	height:400px;
	z-index:13;
	left: -200px;
	top: -180px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;

}
#apDiv45 {
	position:absolute;
	width:100%;
	height:100%;
	z-index:14;
	left:0%;
	top: 0%;
	font-family:"Comic Sans MS", cursive;	
	border-style:groove;
	border-color:#FFF;
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
$qry=mysql_query("select * from User where username='".$_SESSION['uname']."'");
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
<a href="#"><img src="prodimg/close.png" alt="Close" style="height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10" onClick="ilogtr()" /> </a>

<div id="logdiv1" onMouseOver="login()">
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
  echo "<input type=\"hidden\" name=\"flag\" value=\"1014\" />";
  ?>
 <a href="#" onClick="login1()"><img src="prodimg/Login1.png" width="50%" height="15%" style="position:absolute; left:25%; top:88%;" onMouseDown="this.src='prodimg/Login2.png'" onMouseUp="this.src='prodimg/Login1.png'"/></a>
 <a href="#" onClick="emailcheck()" style="text-decoration:none; position:absolute; left:33%; top:39%; font-size:13px; color:#6D6D6D;" onMouseOver="this.style.color='#DF7000'" onMouseOut="this.style.color='#6D6D6D'">Forgot your Password?</a>

</form>

</div>

<div id="logdiv2" onMouseOver="reg()">
<h3 align="center"><font face="Comic Sans MS, cursive" color="#666666">Register</font></h3>
<h4 align="center"><font face="Comic Sans MS, cursive" color="#666666">For New Users</font></h4>
<form method="POST" action="http://localhost/shopmaniac/Divert.php" name="register" >
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
  echo "<input type=\"hidden\" name=\"flag\" value=\"1014\" />";
  ?>
<a href="#" onClick="reg1()"><img src="prodimg/Register1.png" width="50%" height="15%" style="position:absolute; left:25%; top:85%;" onMouseDown="this.src='prodimg/Register2.png'" onMouseUp="this.src='prodimg/Register1.png'"/></a>
</form>
</div>
</div>


<div id="apDiv42">

<?php
if($_SESSION['uname']=="")
{
echo "<a href=\"http://localhost/shopmaniac/index.php\" ><img src=\"prodimg/Title.png\" width=\"38%\" height=\"100%\" style=\"position:absolute; left:-2%; top:5%;\" /></a>";
}
else
{
	echo "<a href=\"http://localhost/shopmaniac/home.php\"><img src=\"prodimg/Title.png\" width=\"38%\" height=\"100%\" style=\"position:absolute; left:-2%; top:5%;\" /></a>";
}
?>
 <div style="position:absolute; left:38.8%; top:50%; width:44%; height:49%; background-color:#DCDCDC; "></div>
<form id="form1" name="src1" method="post" action="http://localhost/shopmaniac/search.php">
    <label>
      <input type="text" name="srch" id="srch"  value="search for your favourite brand and products" style="position:absolute;  width: 33.3%; height: 33%; color:#D6D6D6; left:39.4%; top:55.2%; font-family:'Comic Sans MS', cursive"  onfocus="if (this.value == 'search for your favourite brand and products') this.value = 'search for your favourite brand and products';"
      onkeydown="if(this.value=='search for your favourite brand and products') this.value=''; this.style.color='#000'"  onblur="if (this.value == '') this.value = 'search for your favourite brand and products'; this.style.color='#D6D6D6'">
    </label>
   
  </form>
<img src="prodimg/Search2.png" width="10%" height="54%" style="position:absolute; left:73%; top:51.2%;"  onmousedown="this.src='prodimg/Search1.png'" onMouseUp="this.src='prodimg/Search2.png'" onClick="aaa('src1')"/>

      

<a href="mytrolley2.php"> <img src="prodimg/Trolley11.png" style="position:absolute; left:83%; top:40%;width:6%;height:60%" onMouseDown="this.src='prodimg/Trolley12.png'" onMouseUp="this.src='prodimg/Trolley11.png'">
<?php
if($_SESSION['uname']!=="")
{
echo "<p style=\"position:absolute; left:85%; top:75%; color:#555; font-size:75%;\">(".($no-1).")</p>";
}
else
{
	echo "<p style=\"position:absolute; left:85%; top:75%; color:#555; font-size:75%;\">(0)</p>";
}
?></a>


<?php
$arr1=spliti(" ",$_SESSION['uname']);
if($_SESSION['uname']=="")
echo "<span style=\"float:left; position:absolute; left:45%; top:1%; font-size:75%; color:#717171; font-family:'Comic Sans MS', cursive;\">Hi,Guest &nbsp;&nbsp;&nbsp;| </span>";
else
echo "<span style=\"float:left; position:absolute; left:45%; top:1%; font-size:75%; color:#717171; font-family:'Comic Sans MS', cursive;\">Hi,<b>$arr1[0]</b> &nbsp;&nbsp;&nbsp; | </span>";
?>

<span style=" float:left; position:absolute; left:57.5%; top:1%; font-size:75%; color:#717171; font-family:'Comic Sans MS', cursive">9773436955(24x7)&nbsp;&nbsp;&nbsp;|
</span>  
 <img src="prodimg/Fullscreen capture 7182012 14722 PM.gif"  style="position:absolute; left:54.5%; top:5%; height:15%; width:2%;"/>
 
<span style=" float:left; position:absolute; left:77.5%; top:1%; font-size:75%; color:#717171; font-family:'Comic Sans MS', cursive">support@shopmaniac.in |</span>
<img src="prodimg/Email-Lists-Canada-11.jpg" style="position:absolute; height:18%; width:3%; left:74%; top:3%;"/>





<?php
if($_SESSION['uname']=="")
{

echo "<a href=\"#\" onclick=\"logtr()\"><img src=\"prodimg/Account11.png\" style=\"position:absolute; left:94.5%; top:39%;width:6%;height:60%\" onmousedown=\"this.src='prodimg/Account12.png'\" onmouseup=\"this.src='prodimg/Account11.png'\"></a>";
}
else
{
	echo "<a href=\"myaccount.php\"><img src=\"prodimg/Account11.png\" style=\"position:absolute; left:94.5%; top:39%;width:6%;height:60%\" onmousedown=\"this.src='prodimg/Account12.png'\" onmouseup=\"this.src='prodimg/Account11.png'\"></a>";
}
?>



<?php
if($_SESSION['uname']=="")
{
echo "<p style=\"position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive\"><a href=\"#\" onmouseover=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#717171'\" onclick=\"logtr()\" style=\"text-decoration:none; color:#717171;\">SignIn</a></p>";
}
else
{
echo "<p style=\"position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive\"><a href=\"http://localhost/shopmaniac/index.php\" onmouseover=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#717171'\"  style=\"text-decoration:none; color:#717171;\">SignOut</a></p>";
}
?>

<?php
if($_SESSION['uname']=="")
{
	echo "<a href=\"http://localhost/shopmaniac/index.php\"><img src=\"prodimg/Home1.png\" style=\"position:absolute; left:89.5%; top:40%;width:4.5%;height:60%\" onmousedown=\"this.src='prodimg/Home2.png'\" onmouseup=\"this.src='prodimg/Home1.png'\"></a>";
}
else
{
	echo "<a href=\"home.php\"><img src=\"prodimg/Home1.png\" style=\"position:absolute; left:89.5%; top:40%;width:4.5%;height:60%\" onmousedown=\"this.src='prodimg/Home2.png'\" onmouseup=\"this.src='prodimg/Home1.png'\"></a>";
}
?>
</div>

<div id='cssmenu'>
	<ul>
		<li><a href='#'><span>Men</span></a>
		 <ul>
				<li style="position:absolute; left:0%; top:-5%;"><a href='#'><span><h3 style="height:5%;"><b>Mens Apparels</b></h6></span></a> </li>
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


<?php
$qry=mysql_query("select * from look where lookname='Formal'");
while($row = mysql_fetch_array($qry))
{
	$pid=$row['pid'];
}
$arr=spliti(",",$pid);

$no=0;
$no=count($arr);

?>
<div id="apDiv44">
<div id="apDiv45">
<img src="prodimg/slider-4.jpg"  width="100%" height="100%"/>
</div>
</div>

<div id="products0" style="position:relative; left:-48%; top:-160px; width:196%; height:110px; background-color:#fff;">
<?php

$w=15;
$h=2;
$a=0;
$q=0;
$l=31;
$flag=0;
$tot=0;
$qry=mysql_query("select * from look where lookname='Casual'");
while($row = mysql_fetch_array($qry))
{
	$pid=$row['pid'];
}
$arr=spliti(",",$pid);

$no=0;
$no=count($arr);
//echo var_export($arr,true);
for($i=0;$i<$no-1;$i++)
{
	if($i==0)
	{
	echo "<div style=\"position:absolute;width:15%;height:95%;z-index:1;left:$w%;top:$h%;background-color:#fff;  \">";
	}
	else
	{
		echo "<div style=\"position:absolute;width:15%;height:95%;z-index:1;left:$l%;top:$h%;background-color:#fff; \">";
	}
	$temp=(int)$arr[$i];
	$qry111=mysql_query("select * from products where pid=$temp");
	while($row1 = mysql_fetch_array($qry111))
	{
		$id=$row1['pid'];
		$name= $row1['pname'];
		$size= $row1['size'];
		$price= $row1['price'];
		$price1=$row1['discprice'];
		$discount=$row1['discountpercent'];
		$img1=$row1['img1'];
		$brand=$row1['brand'];
	}
	if($price==$price1)
	{
		$flag=1;
	}
	else
	{
		$flag=0;
	}
//echo "<form action=\"removeprod.php\" method=\"post\" name=\"remove1".$i."\" id=\"remove1\">";
//echo "<input type=\"hidden\" value=\"$id\" name=\"hid\">";

//echo "</form>";
echo "<center><img src=\"prodimg/$img1\" height=53% width=90% style=\"margin-top:2%\"></center>";
echo "<center><p style=\"position:absolute; left:3%; top:60%; color:#555;  font-family:'Comic Sans MS', cursive; font-size:70%;\">$name</p></center>";

if($flag==1)
{
	echo "<p style=\"position:absolute; left:40%; top:72%; color:#C10000;font-family:'Comic Sans MS', cursive; font-size:80%;\">$price1</p>";
}
else
{

echo "<p style=\"position:absolute; left:25%; top:72%; color:#555;
text-decoration:line-through;font-family:'Comic Sans MS', cursive; font-size:80%;\">$price</p>";
echo "<p style=\"position:absolute; left:55%; top:72%; color:#c10000;  font-family:'Comic Sans MS', cursive;font-size:80%;\">$price1</p>";
}
//echo "<a href=\"#\"><img src=\"prodimg/remove.png\" width=\"48%\" height=\"35%\" style=\"position:absolute; left:18%; top:74%; \" onclick=\"removeaaa('remove1".$i."')\" onmousedown=\"this.src='prodimg/remove.png'\" onmouseup=\"this.src='prodimg/remove.png'\"></a>";
 
echo "</div>";
$tot+=$price1;
if($i>=1)
{
	$l=$l+15+1;
}
}

echo "<p style=\"position:absolute;left:80%; top:10%\">Total:$tot</p>";
echo "<a href=\"#\" onclick=\"showitems1()\"> <img src=\"prodimg/buylook.png\" width=\"20%\"; height=\"30%\"; style=\"position:absolute;left:75%; top:60%\" onMouseDown=\"this.src='prodimg/buylook2.png'\" onMouseUp=\"this.src='prodimg/buylook.png'\"/></a>";
?>
</div>
<div id="products1" style="visibility:hidden; position:relative; left:-48%; top:-285px; width:196%; height:110px; background-color:#fff;">
<?php

$w=15;
$h=2;
$a=0;
$q=0;
$l=31;
$flag=0;
$tot=0;
$qry=mysql_query("select * from look where lookname='Formal'");
while($row = mysql_fetch_array($qry))
{
	$pid=$row['pid'];
}
$arr=spliti(",",$pid);

$no=0;
$no=count($arr);
//echo var_export($arr,true);
for($i=0;$i<$no-1;$i++)
{
	if($i==0)
	{
	echo "<div style=\"position:absolute;width:15%;height:95%;z-index:1;left:$w%;top:$h%;background-color:#fff;  \">";
	}
	else
	{
		echo "<div style=\"position:absolute;width:15%;height:95%;z-index:1;left:$l%;top:$h%;background-color:#fff; \">";
	}
	$temp=(int)$arr[$i];
	$qry111=mysql_query("select * from products where pid=$temp");
	while($row1 = mysql_fetch_array($qry111))
	{
		$id=$row1['pid'];
		$name= $row1['pname'];
		$size= $row1['size'];
		$price= $row1['price'];
		$price1=$row1['discprice'];
		$discount=$row1['discountpercent'];
		$img1=$row1['img1'];
		$brand=$row1['brand'];
	}
	if($price==$price1)
	{
		$flag=1;
	}
	else
	{
		$flag=0;
	}
//echo "<form action=\"removeprod.php\" method=\"post\" name=\"remove1".$i."\" id=\"remove1\">";
//echo "<input type=\"hidden\" value=\"$id\" name=\"hid\">";

//echo "</form>";
echo "<center><img src=\"prodimg/$img1\" height=53% width=90% style=\"margin-top:2%\"></center>";
echo "<center><p style=\"position:absolute; left:3%; top:60%; color:#555;  font-family:'Comic Sans MS', cursive; font-size:70%;\">$name</p></center>";

if($flag==1)
{
	echo "<p style=\"position:absolute; left:40%; top:72%; color:#C10000;font-family:'Comic Sans MS', cursive; font-size:80%;\">$price1</p>";
}
else
{

echo "<p style=\"position:absolute; left:25%; top:72%; color:#555;
text-decoration:line-through;font-family:'Comic Sans MS', cursive; font-size:80%;\">$price</p>";
echo "<p style=\"position:absolute; left:55%; top:72%; color:#c10000;  font-family:'Comic Sans MS', cursive;font-size:80%;\">$price1</p>";
}
//echo "<a href=\"#\"><img src=\"prodimg/remove.png\" width=\"48%\" height=\"35%\" style=\"position:absolute; left:18%; top:74%; \" onclick=\"removeaaa('remove1".$i."')\" onmousedown=\"this.src='prodimg/remove.png'\" onmouseup=\"this.src='prodimg/remove.png'\"></a>";
 
echo "</div>";
$tot+=$price1;
if($i>=1)
{
	$l=$l+15+1;
}
}

echo "<p style=\"position:absolute;left:80%; top:10%\">Total:$tot</p>";
echo "<a href=\"#\" onclick=\"showitems2()\"> <img src=\"prodimg/buylook.png\" width=\"20%\"; height=\"30%\"; style=\"position:absolute;left:75%; top:60%\" onMouseDown=\"this.src='prodimg/buylook2.png'\" onMouseUp=\"this.src='prodimg/buylook.png'\"/></a>";
?>
</div>
<div id="products2" style="visibility:hidden; position:relative; left:-48%; top:-400px; width:196%; height:110px; background-color:#fff;">
<?php

$w=15;
$h=2;
$a=0;
$q=0;
$l=31;
$flag=0;
$tot=0;
$qry=mysql_query("select * from look where lookname='look3'");
while($row = mysql_fetch_array($qry))
{
	$pid=$row['pid'];
}
$arr=spliti(",",$pid);

$no=0;
$no=count($arr);
//echo var_export($arr,true);
for($i=0;$i<$no-1;$i++)
{
	if($i==0)
	{
	echo "<div style=\"position:absolute;width:15%;height:95%;z-index:1;left:$w%;top:$h%;background-color:#fff;  \">";
	}
	else
	{
		echo "<div style=\"position:absolute;width:15%;height:95%;z-index:1;left:$l%;top:$h%;background-color:#fff; \">";
	}
	$temp=(int)$arr[$i];
	$qry111=mysql_query("select * from products where pid=$temp");
	while($row1 = mysql_fetch_array($qry111))
	{
		$id=$row1['pid'];
		$name= $row1['pname'];
		$size= $row1['size'];
		$price= $row1['price'];
		$price1=$row1['discprice'];
		$discount=$row1['discountpercent'];
		$img1=$row1['img1'];
		$brand=$row1['brand'];
	}
	if($price==$price1)
	{
		$flag=1;
	}
	else
	{
		$flag=0;
	}
//echo "<form action=\"removeprod.php\" method=\"post\" name=\"remove1".$i."\" id=\"remove1\">";
//echo "<input type=\"hidden\" value=\"$id\" name=\"hid\">";

//echo "</form>";
echo "<center><img src=\"prodimg/$img1\" height=53% width=90% style=\"margin-top:2%\"></center>";
echo "<center><p style=\"position:absolute; left:3%; top:60%; color:#555;  font-family:'Comic Sans MS', cursive; font-size:70%;\">$name</p></center>";

if($flag==1)
{
	echo "<p style=\"position:absolute; left:40%; top:72%; color:#C10000;font-family:'Comic Sans MS', cursive; font-size:80%;\">$price1</p>";
}
else
{

echo "<p style=\"position:absolute; left:25%; top:72%; color:#555;
text-decoration:line-through;font-family:'Comic Sans MS', cursive; font-size:80%;\">$price</p>";
echo "<p style=\"position:absolute; left:55%; top:72%; color:#c10000;  font-family:'Comic Sans MS', cursive;font-size:80%;\">$price1</p>";
}
//echo "<a href=\"#\"><img src=\"prodimg/remove.png\" width=\"48%\" height=\"35%\" style=\"position:absolute; left:18%; top:74%; \" onclick=\"removeaaa('remove1".$i."')\" onmousedown=\"this.src='prodimg/remove.png'\" onmouseup=\"this.src='prodimg/remove.png'\"></a>";
 
echo "</div>";
$tot+=$price1;
if($i>=1)
{
	$l=$l+15+1;
}
}

echo "<p style=\"position:absolute;left:80%; top:10%\">Total:$tot</p>";
echo "<a href=\"#\" onclick=\"showitems3()\"> <img src=\"prodimg/buylook.png\" width=\"20%\"; height=\"30%\"; style=\"position:absolute;left:75%; top:60%\" onMouseDown=\"this.src='prodimg/buylook2.png'\" onMouseUp=\"this.src='prodimg/buylook.png'\"/></a>";
?>
</div>

<div id="selection" style="position:relative; left:-48%; top:-350px; width:196%; height:110px; background-color:#EBEBEB;">

<a href="#" onclick="change('prodimg/slider-4.jpg','products0','products1','products2')"><img src="prodimg/slider-4.jpg" width="15%" height="100%" style="position:absolute; left:20%; top:0%;"/></a>
<a href="#" onclick="change('prodimg/slider-1.jpg','products1','products0','products2')"><img src="prodimg/slider-1.jpg" width="15%" height="100%" style="position:absolute; left:40%; top:0%;"/></a>
<a href="#" onclick="change('prodimg/slider-4.jpg','products2','products0','products1')"><img src="prodimg/slider-3.jpg" width="15%" height="100%" style="position:absolute; left:60%; top:0%;"/></a>
</div>

<div id="items1" style="position:fixed; left:20%; top:15%; width:55%; height:80%; background-color:#FFF; z-index:1000; border-style:ridge; visibility:hidden;">
<div id="photo" style="height:100%; width:50%;">
<img src="prodimg/slider-4.jpg" width="100%" height="100%"  />
</div>
<div id="apdiv55" style="position:absolute; left:50%; top:5%; width:50%; height:80%;">
<a href="#"><img src="prodimg/close.png" alt="Close" style="height:4.5%;width:4.3%;position:absolute;right:0%;top:-5%;z-index:10" onClick="closeitems1()" /> </a>
<?php
echo "<form method=\"post\" action=\"buylooknew.php\" name=\"buylook1\" id=\"buylook1\">";
$size=array();
$pname=array();
$t=0;
$h=31;
$a=0;
$q=0;
$t1=35;
$flag=0;
$tot=0;
$qry1=mysql_query("select * from look where lookname='Casual'");
while($row = mysql_fetch_array($qry1))
{
	$pid=$row['pid'];
}
$arr=spliti(",",$pid);

$no=0;
$no=count($arr);
//echo var_export($arr,true);
for($i=0;$i<$no-1;$i++)
{
	if($i==0)
	{
	echo "<div style=\"position:absolute;width:100%;height:30%;z-index:1;left:0%;top:$t%;background-color:#fff; \">";
	}
	else
	{
		echo "<div style=\"position:absolute;width:100%;height:30%;z-index:1;left:0%;top:$t1%;background-color:#fff;\">";
	}
	$temp=(int)$arr[$i];
	$qry111=mysql_query("select * from products where pid=$temp");
	while($row1 = mysql_fetch_array($qry111))
	{
		$id=$row1['pid'];
		$name= $row1['pname'];
		$size= $row1['size'];
		$price= $row1['price'];
		$price1=$row1['discprice'];
		$discount=$row1['discountpercent'];
		$img1=$row1['img1'];
		$brand=$row1['brand'];
	}
	if($price==$price1)
	{
		$flag=1;
	}
	else
	{
		$flag=0;
	}
//echo "<form action=\"removeprod.php\" method=\"post\" name=\"remove1".$i."\" id=\"remove1\">";
//echo "<input type=\"hidden\" value=\"$id\" name=\"hid\">";

//echo "</form>";
echo "<img src=\"prodimg/$img1\" height=80% width=35% style=\"margin-top:3%; margin-left:10%; \">";
echo "<center><p style=\"position:absolute; left:50%; top:-15%; color:#222;  font-family:'Comic Sans MS', cursive; font-size:80%;\"><b>$name</b></p></center>";

echo "<p style=\"position:absolute;left:50%; top:20%; font-size:80%;\"><font face=\"'Comic Sans MS', cursive	\"  color=\"#999\">Select your Size:</font>";
echo "<p style=\"position:absolute;left:50%; top:43%; width:50%;\"><select name=\"size$i\" id=\"size\">";

$qry111=mysql_query("select size from products where pname='$name'");
while($row111 = mysql_fetch_array($qry111))
{
	echo "<option style:\"align:center\">".$row111['size']."</option>";
}
echo "</select>";

if($flag==1)
{
	echo "<p style=\"position:absolute; left:85%; top:55%; color:#C10000;font-family:'Comic Sans MS', cursive; font-size:90%;\">$price1</p>";
}
else
{

echo "<p style=\"position:absolute; left:73%; top:70%; color:#999;
text-decoration:line-through;font-family:'Comic Sans MS', cursive; font-size:90%;\">$price</p>";
echo "<p style=\"position:absolute; left:88%; top:70%; color:#c10000;  font-family:'Comic Sans MS', cursive;font-size:90%;\">$price1</p>";
}
//echo "<a href=\"#\"><img src=\"prodimg/remove.png\" width=\"48%\" height=\"35%\" style=\"position:absolute; left:18%; top:74%; \" onclick=\"removeaaa('remove1".$i."')\" onmousedown=\"this.src='prodimg/remove.png'\" onmouseup=\"this.src='prodimg/remove.png'\"></a>";
 
echo "</div>";
$tot+=$price1;
if($i==0)
	{
	echo "<hr style=\"position:absolute;width:100%;z-index:1;left:0%;top:$h%;\">";
	}
	else
	{
		echo "<hr style=\"position:absolute;width:100%;z-index:1;left:0%;top:$h%;\">";
	}
//$tot+=$price1;
if($i>=0)
{
	$h=$h+35;
}
if($i==1)
{
	$t1=$t1+30+5;
}
$pname[$i]=$name;
}

$_SESSION['pname']=$pname;
echo "</form>";

?>
</div>
<?php
if($_SESSION['uname']=="")
{
	echo "<a href=\"#\" onclick=\"logtr()\"> <img src=\"prodimg/buylooktrolley.png\" width=\"20%\"; height=\"10%\"; style=\"position:absolute;left:55%; top:89%\" onMouseDown=\"this.src='prodimg/buylooktrolley2.png'\" onMouseUp=\"this.src='prodimg/buylook.png'\"/></a>";
echo "<p style=\"position:absolute;left:85%; top:90%\">Total : <B>$tot</b></p>";
}
else
{
echo "<a href=\"#\" onclick=\"send1()\"> <img src=\"prodimg/buylooktrolley.png\" width=\"20%\"; height=\"10%\"; style=\"position:absolute;left:55%; top:89%\" onMouseDown=\"this.src='prodimg/buylooktrolley2.png'\" onMouseUp=\"this.src='prodimg/buylook.png'\"/></a>";
echo "<p style=\"position:absolute;left:85%; top:90%\">Total : <B>$tot</b></p>";
}
?>

</div>

<div id="items2" style="position:fixed; left:20%; top:15%; width:55%; height:80%; background-color:#FFF; z-index:1000; border-style:ridge; visibility:hidden;">
<div id="photo" style="height:100%; width:50%;">
<img src="prodimg/slider-4.jpg" width="100%" height="100%"  />
</div>
<div id="apdiv55" style="position:absolute; left:50%; top:5%; width:50%; height:80%;">
<a href="#"><img src="prodimg/close.png" alt="Close" style="height:4.5%;width:4.3%;position:absolute;right:0%;top:-5%;z-index:10" onClick="closeitems2()" /> </a>
<?php
echo "<form method=\"post\" action=\"buylooknew.php\" name=\"buylook2\" id=\"buylook2\">";
$size=array();
$pname=array();
$t=0;
$h=31;
$a=0;
$q=0;
$t1=35;
$flag=0;
$tot=0;
$qry1=mysql_query("select * from look where lookname='Formal'");
while($row = mysql_fetch_array($qry1))
{
	$pid=$row['pid'];
}
$arr=spliti(",",$pid);

$no=0;
$no=count($arr);
//echo var_export($arr,true);
for($i=0;$i<$no-1;$i++)
{
	if($i==0)
	{
	echo "<div style=\"position:absolute;width:100%;height:30%;z-index:1;left:0%;top:$t%;background-color:#fff; \">";
	}
	else
	{
		echo "<div style=\"position:absolute;width:100%;height:30%;z-index:1;left:0%;top:$t1%;background-color:#fff;\">";
	}
	$temp=(int)$arr[$i];
	$qry111=mysql_query("select * from products where pid=$temp");
	while($row1 = mysql_fetch_array($qry111))
	{
		$id=$row1['pid'];
		$name= $row1['pname'];
		$size= $row1['size'];
		$price= $row1['price'];
		$price1=$row1['discprice'];
		$discount=$row1['discountpercent'];
		$img1=$row1['img1'];
		$brand=$row1['brand'];
	}
	if($price==$price1)
	{
		$flag=1;
	}
	else
	{
		$flag=0;
	}
//echo "<form action=\"removeprod.php\" method=\"post\" name=\"remove1".$i."\" id=\"remove1\">";
//echo "<input type=\"hidden\" value=\"$id\" name=\"hid\">";

//echo "</form>";
echo "<img src=\"prodimg/$img1\" height=80% width=35% style=\"margin-top:3%; margin-left:10%; \">";
echo "<center><p style=\"position:absolute; left:50%; top:-15%; color:#222;  font-family:'Comic Sans MS', cursive; font-size:80%;\"><b>$name</b></p></center>";

echo "<p style=\"position:absolute;left:50%; top:20%; font-size:80%;\"><font face=\"'Comic Sans MS', cursive	\"  color=\"#999\">Select your Size:</font>";
echo "<p style=\"position:absolute;left:50%; top:43%; width:50%;\"><select name=\"size$i\" id=\"size\">";

$qry111=mysql_query("select size from products where pname='$name'");
while($row111 = mysql_fetch_array($qry111))
{
	echo "<option style:\"align:center\">".$row111['size']."</option>";
}
echo "</select>";

if($flag==1)
{
	echo "<p style=\"position:absolute; left:85%; top:55%; color:#C10000;font-family:'Comic Sans MS', cursive; font-size:90%;\">$price1</p>";
}
else
{

echo "<p style=\"position:absolute; left:73%; top:70%; color:#999;
text-decoration:line-through;font-family:'Comic Sans MS', cursive; font-size:90%;\">$price</p>";
echo "<p style=\"position:absolute; left:88%; top:70%; color:#c10000;  font-family:'Comic Sans MS', cursive;font-size:90%;\">$price1</p>";
}
//echo "<a href=\"#\"><img src=\"prodimg/remove.png\" width=\"48%\" height=\"35%\" style=\"position:absolute; left:18%; top:74%; \" onclick=\"removeaaa('remove1".$i."')\" onmousedown=\"this.src='prodimg/remove.png'\" onmouseup=\"this.src='prodimg/remove.png'\"></a>";
 
echo "</div>";
$tot+=$price1;
if($i==0)
	{
	echo "<hr style=\"position:absolute;width:100%;z-index:1;left:0%;top:$h%;\">";
	}
	else
	{
		echo "<hr style=\"position:absolute;width:100%;z-index:1;left:0%;top:$h%;\">";
	}
//$tot+=$price1;
if($i>=0)
{
	$h=$h+35;
}
if($i==1)
{
	$t1=$t1+30+5;
}
$pname[$i]=$name;
}

$_SESSION['pname']=$pname;
echo "</form>";


?>
</div>
<?php
if($_SESSION['uname']=="")
{
	echo "<a href=\"#\" onclick=\"logtr()\"> <img src=\"prodimg/buylooktrolley.png\" width=\"20%\"; height=\"10%\"; style=\"position:absolute;left:55%; top:89%\" onMouseDown=\"this.src='prodimg/buylooktrolley2.png'\" onMouseUp=\"this.src='prodimg/buylook.png'\"/></a>";
echo "<p style=\"position:absolute;left:85%; top:90%\">Total : <B>$tot</b></p>";
}
else
{
echo "<a href=\"#\" onclick=\"send2()\"> <img src=\"prodimg/buylooktrolley.png\" width=\"20%\"; height=\"10%\"; style=\"position:absolute;left:55%; top:89%\" onMouseDown=\"this.src='prodimg/buylooktrolley2.png'\" onMouseUp=\"this.src='prodimg/buylook.png'\"/></a>";
echo "<p style=\"position:absolute;left:85%; top:90%\">Total : <B>$tot</b></p>";
}

?>

</div>


<div id="items3" style="position:fixed; left:20%; top:15%; width:55%; height:80%; background-color:#FFF; z-index:1000; border-style:ridge; visibility:hidden;">
<div id="photo" style="height:100%; width:50%;">
<img src="prodimg/slider-4.jpg" width="100%" height="100%"  />
</div>
<div id="apdiv55" style="position:absolute; left:50%; top:5%; width:50%; height:80%;">
<a href="#"><img src="prodimg/close.png" alt="Close" style="height:4.5%;width:4.3%;position:absolute;right:0%;top:-5%;z-index:10" onClick="closeitems3()" /> </a>
<?php
echo "<form method=\"post\" action=\"buylooknew.php\" name=\"buylook3\" id=\"buylook3\">";
$size=array();
$pname=array();
$t=0;
$h=31;
$a=0;
$q=0;
$t1=35;
$flag=0;
$tot=0;
$qry1=mysql_query("select * from look where lookname='look3'");
while($row = mysql_fetch_array($qry1))
{
	$pid=$row['pid'];
}
$arr=spliti(",",$pid);

$no=0;
$no=count($arr);
//echo var_export($arr,true);
for($i=0;$i<$no-1;$i++)
{
	if($i==0)
	{
	echo "<div style=\"position:absolute;width:100%;height:30%;z-index:1;left:0%;top:$t%;background-color:#fff; \">";
	}
	else
	{
		echo "<div style=\"position:absolute;width:100%;height:30%;z-index:1;left:0%;top:$t1%;background-color:#fff;\">";
	}
	$temp=(int)$arr[$i];
	$qry111=mysql_query("select * from products where pid=$temp");
	while($row1 = mysql_fetch_array($qry111))
	{
		$id=$row1['pid'];
		$name= $row1['pname'];
		$size= $row1['size'];
		$price= $row1['price'];
		$price1=$row1['discprice'];
		$discount=$row1['discountpercent'];
		$img1=$row1['img1'];
		$brand=$row1['brand'];
	}
	if($price==$price1)
	{
		$flag=1;
	}
	else
	{
		$flag=0;
	}
//echo "<form action=\"removeprod.php\" method=\"post\" name=\"remove1".$i."\" id=\"remove1\">";
//echo "<input type=\"hidden\" value=\"$id\" name=\"hid\">";

//echo "</form>";
echo "<img src=\"prodimg/$img1\" height=80% width=35% style=\"margin-top:3%; margin-left:10%; \">";
echo "<center><p style=\"position:absolute; left:50%; top:-15%; color:#222;  font-family:'Comic Sans MS', cursive; font-size:80%;\"><b>$name</b></p></center>";

echo "<p style=\"position:absolute;left:50%; top:20%; font-size:80%;\"><font face=\"'Comic Sans MS', cursive	\"  color=\"#999\">Select your Size:</font>";
echo "<p style=\"position:absolute;left:50%; top:43%; width:50%;\"><select name=\"size$i\" id=\"size\">";

$qry111=mysql_query("select size from products where pname='$name'");
while($row111 = mysql_fetch_array($qry111))
{
	echo "<option style:\"align:center\">".$row111['size']."</option>";
}
echo "</select>";

if($flag==1)
{
	echo "<p style=\"position:absolute; left:85%; top:55%; color:#C10000;font-family:'Comic Sans MS', cursive; font-size:90%;\">$price1</p>";
}
else
{

echo "<p style=\"position:absolute; left:73%; top:70%; color:#999;
text-decoration:line-through;font-family:'Comic Sans MS', cursive; font-size:90%;\">$price</p>";
echo "<p style=\"position:absolute; left:88%; top:70%; color:#c10000;  font-family:'Comic Sans MS', cursive;font-size:90%;\">$price1</p>";
}
//echo "<a href=\"#\"><img src=\"prodimg/remove.png\" width=\"48%\" height=\"35%\" style=\"position:absolute; left:18%; top:74%; \" onclick=\"removeaaa('remove1".$i."')\" onmousedown=\"this.src='prodimg/remove.png'\" onmouseup=\"this.src='prodimg/remove.png'\"></a>";
 
echo "</div>";
$tot+=$price1;
if($i==0)
	{
	echo "<hr style=\"position:absolute;width:100%;z-index:1;left:0%;top:$h%;\">";
	}
	else
	{
		echo "<hr style=\"position:absolute;width:100%;z-index:1;left:0%;top:$h%;\">";
	}
//$tot+=$price1;
if($i>=0)
{
	$h=$h+35;
}
if($i==1)
{
	$t1=$t1+30+5;
}
$pname[$i]=$name;
}

$_SESSION['pname']=$pname;
echo "</form>";


?>
</div>
<?php
if($_SESSION['uname']=="")
{
	echo "<a href=\"#\" onclick=\"logtr()\"> <img src=\"prodimg/buylooktrolley.png\" width=\"20%\"; height=\"10%\"; style=\"position:absolute;left:55%; top:89%\" onMouseDown=\"this.src='prodimg/buylooktrolley2.png'\" onMouseUp=\"this.src='prodimg/buylook.png'\"/></a>";
echo "<p style=\"position:absolute;left:85%; top:90%\">Total : <B>$tot</b></p>";
}
else
{
echo "<a href=\"#\" onclick=\"send3()\"> <img src=\"prodimg/buylooktrolley.png\" width=\"20%\"; height=\"10%\"; style=\"position:absolute;left:55%; top:89%\" onMouseDown=\"this.src='prodimg/buylooktrolley2.png'\" onMouseUp=\"this.src='prodimg/buylook.png'\"/></a>";
echo "<p style=\"position:absolute;left:85%; top:90%\">Total : <B>$tot</b></p>";
}
?>

</div>


<div id="apDiv18">
<p class="shopmanaic"><u>Shopmanaic</u></p>
<p class="myaccount"><u>My Account</u></p>
<p class="policies"><u>Policies</u></p>
<p class="help"><u>Help</u></p>
<p class="products"><u>Products</u></p><br />
<?php
if($_SESSION['uname']=="")
{
	echo "<a href=\"http://localhost/shopmaniac/index.php\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \" ><p class=\"home\">Home </p></a>";
}
else
{
	echo "<a href=\"home.php\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \" ><p class=\"home\">Home</p></a>";
}
?>
<?php
if($_SESSION['uname']=="")
{

echo "<a href=\"#\" onclick=\"logtr()\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"account\">MyAccount</p></a>";
}
else
{
	echo "<a href=\"myaccount.php\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"account\">MyAccount</p></a>";
}
?>



<a href="returnpolicy.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px;" ><p class="returnpolicy">Return Policy</p></a>

<a href="placeorder.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="placeorder">Place Order</p></a>
<a href="formalshirts.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="formal">Formal
Shirts</p></a>
<br />

<a href="aboutus.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="aboutus">About Us</p></a>
<a href="mytrolley2.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="mytrolly">My Trolley</p></a>

<a href="privacypolicy.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="privacypol">Privacy Policy</p></a>

<a href="trackorder.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="trackorder">Track Order</p></a>
<a href="trousers.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="trousers">Trousers</p></a>

<a href="contactus.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="contactus">Contact Us</p></a>

<a href="shippingpolicy.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="shipping">Shipping Policy</p></a>

<a href="returnproduct.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="returnp">Return Product</p></a>
<a href="cs.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="casual">Casual Shirt</p></a><br/>

<a href="t&c.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="tc">Terms & Conditions</p></a>
<a href="jeans.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="jeans">Jeans</p></a>
<a href="footwear.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="footwear">FootWear</p></a>

<a href="faq.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="faq">FAQ's</p></a>

<br/>
<a href="homeware.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="kitchen">Homeware</p></a>

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
<a href="#" onClick="contact()"><img src="prodimg/submit.png" width="10%" height="5%" onMouseDown="this.src='prodimg/submit1.png'" onMouseUp="this.src='prodimg/submit.png'" style="position:absolute; top:58.5%; left:94.5%; color:#CCC; width: 5%; height:6%;"  /></a>


<a href="mypoints.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:19%; top:33%; font-family:'Comic Sans MS', cursive" >MyPoints</a>
<a href="t-shirts.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:61%; top:48%; font-family:'Comic Sans MS', cursive" >T-Shirts</a>


<a href="mycredits.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:19%; top:39%; font-family:'Comic Sans MS', cursive" >MyCredits</a>
<a href="cancelorder.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:36%; top:53%; font-family:'Comic Sans MS', cursive;" >Cancel Order</a>
<div id="apDiv40"></div>
</div>

<div id="trans">
</div>
</div>

</body>
</html>
