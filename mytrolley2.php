<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="prodimg/title123.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="navbar.css" rel="stylesheet" type="text/css" />
<title>Mytrolley | Shopmaniac.in</title>

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
		
		
function homes()
{ 
    document.forms["home"].submit();
}	

function website()
{
	document.forms["website1"].submit();
}

function myaccount()
{
    document.forms["acc"].submit();
}


function homes()
{ 
    document.forms["home"].submit();
}

function shop()
{
	document.forms["back"].submit();
}

function pay()
{
	document.forms["pay1"].submit();
}
function removeaaa(x)
{
	document.forms[x].submit();
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

function submitform(h,k,l,m,n,r,o,p)
{	
	var a=m-1;
	var quant=new Array();
	for(var x22=0; x22<a; x22++)
	{
		var k12="quant123";
	   var k32=k12+x22;
		var x32=document.getElementById(k32).value;
		quant[x22]=x32;		
	}
	document.getElementById("quant").value=quant;
	
	var d=n;
    var x1=m-1;
	var total=0;
	var total1=0;
	var flag=p;
	
	if(flag==1)
	{
    var z=document.getElementById(h).value;
	var z1=k;
	var z2=z*z1;
	document.getElementById(l).innerHTML=z2;
	}
	else
	{
	var z=document.getElementById(h).value;
	var z1=k;
	var z2=z*z1;
	var z3=r;
	var z4=z*z3;
	document.getElementById(l).innerHTML=z2;
	document.getElementById(o).innerHTML=z4;
	}
	
	for(var x2=0; x2<x1; x2++)
	{
		var k1="price";
	    var k3=k1+x2;
		var x3=document.getElementById(k3).textContent;
		total=Number(total) + Number(x3);
		
	}
	
		if(d<200)
		{
		if(total<200)
		{
		total1=Number(total)+30;
		document.getElementById("total3").innerHTML="Total:-";
		document.getElementById("total2").innerHTML=total+" + 30(Shipping)=";
		document.getElementById("total1").innerHTML="Total:-"+total1;
		}
	else
	{
	document.getElementById("total2").innerHTML="";
	document.getElementById("total3").innerHTML="";
	document.getElementById("total1").innerHTML="Total:-"+total;
	}
		}
		else
		{
			document.getElementById("total").innerHTML=total;
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
			
    height:0px;
        }
			/* The CSS Code for the menu starts here */
			#menu {
				font-family: Arial, sans-serif;
				font-weight: bold;
				text-transform: uppercase;
				margin: 50px 0;
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







p.a
{
	
	position:absolute;
	top:3px;
	right:32px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.c
{
	position:absolute;
	top:-5px;
	right:115px;
	width: 309px;
	height: 28px;
	font:Verdana, Geneva, sans-serif;
	font-size:13px;
	color:#666;
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
	width:195%;
	height:400px;
	z-index:12;
	left: -200px;
	
background-color:#FCFCFC;
	border-top-style:solid;
	border-top-width:medium;
	border-color:#C1C1C1;
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



#apDiv28 {
	position:absolute;
	width:121px;
	height:121px;
	z-index:13;
	left: 28px;
	top: 52px;
}
#apDiv29 {
	position:absolute;
	width:95%;
	height:255px;
	z-index:13;
	left: 3%;
	top: 107%;
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
	width:95%;
	height:255px;
	z-index:13;
	left: 3%;
	top: 155%;
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
	width:95%;
	height:255px;
	z-index:13;
	left:3%;
	top: 203%;
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
	width:20%;
	height:390px;
	z-index:14;
	left: 3%;
	top: 251%;
	border-style:double;
	border-width:thick;
	background-color:#BEBEBE;
}
#apDiv36 {
	position:absolute;
	width:49%;
	height:390px;
	z-index:15;
	left: 25%;
	top: 251%;
	border-style:double;
	border-width:thick;
}
#apDiv37 {
	position:absolute;
	width:20%;
	height:390px;
	z-index:14;
	right:3%;
	top: 251%;
	border-style:double;
	border-width:thick;
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
#apDiv19 {
	position:relative;
	width:196%;
	height:400px;
	z-index:13;
	left: -200px;
	top: -140px;
    background-color:#fff;
	border-style:solid;
	border-color:#fff;
	
}
#apDiv41 {
	position:relative;
	width:196%;
	height:30px;
	z-index:13;
	left: -200px;
	top:-580px;
	background-color:#F6F6F6;
	color:#111;
	
}

#search
{
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
	width: 48%;
	height: 18%;
	font:Verdana, Geneva, sans-serif;
	font-size:11px;
	color:#666;
	
}
p.guest
{
	position:absolute;

	right:100%;
	top:-50%;
	left:4%;
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
p.aaa
{
	position:absolute;
	top:5%;
	right:0%;
	font:Verdana, Geneva, sans-serif;
	font-size:13px;
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
img.resize3
{
	height:100px;
	width:auto;
	text-align:center;
}
img.resize3
{
	height:auto;
	width:100px;
	text-align:center;
}
</style>

</head>

<body>

<div id="container">
<?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from user where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$trolley1=$row['trolley'];
}
$arr=spliti(",",$trolley1);
$no=0;
$no=count($arr);
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
  echo "<input type=\"hidden\" name=\"flag\" value=\"101\" />";
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
  echo "<input type=\"hidden\" name=\"flag\" value=\"101\" />";
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

<div id="apDiv19">

<?php
$tot=0;
if(strcmp($trolley1,"")==0)
{
	echo  "<p style=\"position:relative; left:40%; font-size:150%; color:#111;  font-family:'Comic Sans MS', cursive;\"> Your Trolley is Empty</p>";
	
}
else
{
//$j=0;
$w=0;
$h=2;
$a=0;
$q=0;
$flag=0;

for($i=0;$i<$no-1;$i++)
{
	//$j++;
	if($i==0)
	{
		$h=2;
	}
	else if($i%4==0)
	{
		$h=$h+86;
		$w=0;
		$q=$q+1;
	}
	echo "<div style=\"position:absolute;width:22%;height:83%;z-index:1;left:$w%;top:$h%;background-color:#EBEBEB; \">";
	$temp=(int)$arr[$i];
	$qry=mysql_query("select * from products where pid=$temp");
	while($row = mysql_fetch_array($qry))
	{
		$id=$row['pid'];
		$name= $row['pname'];
		$size= $row['size'];
		$price= $row['price'];
		$price1=$row['discprice'];
		$discount=$row['discountpercent'];
		$img1=$row['img1'];
		$brand=$row['brand'];
		$quant=$row['quant'];
		$subname=$row['subname'];
		}
	if($price==$price1)
	{
		$flag=1;
	}
	else
	{
		$flag=0;
	}



echo "<form action=\"removeprod.php\" method=\"post\" name=\"remove1".$i."\" id=\"remove1\">";
echo "<input type=\"hidden\" value=\"$id\" name=\"hid\">";
echo "</form>";
echo "<div id=\"image_container\" style=\"position:absolute; top:0%; left:0%;width:100%; height:50%;\">";
	 echo "<center><img src=\"prodimg/$img1\" class=\"resize3\"></center>";
	 echo "</div>";
if($flag==1)
{
echo "<table border=\"0\" style=\"position:absolute; left:0%; top:54%; width:100%; height:34%;\">";
echo "<tr>";
echo "<td style=\"text-align:left; position:absolute; top:5%; color:#222;  font-family:'Comic Sans MS', cursive; font-size:15px;\"><b>Name:-</b></td>";
echo "<td style=\"text-align:center; font-size:14px;\">$name</td>";
echo "</tr>";
if($subname!=="mobiles" && $subname!=="tablets")
{
echo "<tr>";
echo "<td style=\"text-align:left;  color:#222;  font-family:'Comic Sans MS', cursive;\"><b>Size:-</b></td>";
echo "<td style=\"text-align:center;\">$size</td>";
echo "</tr>";
}
echo "<tr>";
echo "<td style=\"text-align:left;  color:#222;  font-family:'Comic Sans MS', cursive; font-size:15px;\"><b>Price:-</b></td>";
echo "<td id=\"price".$i."\" style=\"text-align:center; color:#F00;\">$price1</td>";
echo "</tr>";
echo "</table>";
}
else
{
echo "<table border=\"0\" style=\"position:absolute; left:0%; top:54%; width:100%; height:34%;\">";
echo "<tr>";
echo "<td style=\"text-align:left; position:absolute; top:5%; color:#222;  font-family:'Comic Sans MS', cursive; font-size:15px;\"><b>Name:-</b></td>";
echo "<td style=\"text-align:center; font-size:14px;\">$name</td>";
echo "</tr>";
if($subname!=="mobiles" && $subname!=="tablets")
{
echo "<tr>";
echo "<td style=\"text-align:left;  color:#222;  font-family:'Comic Sans MS', cursive;\"><b>Size:-</b></td>";
echo "<td style=\"text-align:center;\">$size</td>";
echo "</tr>";
}
echo "<tr>";
echo "<td style=\"text-align:left;  color:#222;  font-family:'Comic Sans MS', cursive; font-size:15px;\"><b>Price:-</b></td>";
echo "<td id=\"price".$i."\" style=\"position:absolute; left:40%; top:65%;color:#F00;\">$price1 </td><strong  id=\"price2".$i."\" style=\"position:absolute; left:69%; top:78%; text-decoration:line-through; color:#999;\">$price</strong>"; 
//echo "</td>";
echo "<tr>";

echo "<td  style=\"position:absolute; left:50%; color:#777; font-family:'Comic Sans MS', cursive; font-size:75%;\">($discount)</td>";
echo "</table>";
}

echo "<a href=\"#\"><img src=\"prodimg/close.png\" width=\"8%\" height=\"5%\" style=\"position:absolute; right:0%; top:0%; \" onclick=\"removeaaa('remove1".$i."')\" onmousedown=\"this.src='prodimg/close.png'\" onmouseup=\"this.src='prodimg/close.png'\"></a>";

 $actualprice=0;
 for($p=0;$p<$no-1;$p++)
 {
	$temp1=(int)$arr[$p];
	$qry123=mysql_query("select * from products where pid=$temp1");
	while($row = mysql_fetch_array($qry123))
	{
		$price123=$row['discprice'];
	}
	$actualprice=$actualprice+$price123;
 }
	
echo "<p style=\"position:absolute; left:0%; top:86%; color:#222; font-family:'Comic Sans MS', cursive; font-size:15px;\"><b>Quantity:- &nbsp;</b>";
echo "<select name=\"quant123".$i."\" id=\"quant123".$i."\" onChange=\"javascript: submitform('quant123".$i."',$price1,'price".$i."',$no,$actualprice,$price,'price2".$i."',$flag)\" >";
//if($quantselect[$i]==0)
//{
	for($a=1;$a<=$quant;$a++)
	{
		echo "<option>$a</option>";
	}
//}
//else
//{
	//for($a=1;$a<=$quant;$a++)
	//{
		////if($a==$quantselect[$i])
		///{
			//echo "<option selected=\"selected\">$a</option>";
		//}
		//else
		//
		////	echo "<option>$a</option>";
		//}
	//}
//}*/
echo "</select>";
echo "</p>";
echo "</div>";

$tot+=$price1;
$w=$w+26;
}
}
$a=$h;
?>

</div>
<div id="apDiv41">
<p style="position:absolute; left:1%; top:-50%; font-size:90%; font-family:'Comic Sans MS', cursive;"> Hii ,</p>
<?php
$arr1=spliti(" ",$_SESSION['uname']);
if($_SESSION['uname']=="")
echo "<p style=\"position:absolute; left:5%; top:-50%; font-size:90%; color:#717171; font-family:'Comic Sans MS', cursive;\">Guest</p>";
else
echo "<p style=\"position:absolute; left:5%; top:-50%; font-size:90%; color:#717171; font-family:'Comic Sans MS', cursive\"><b>$arr1[0]</b></p>";
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="position:absolute; left:10%; top:-50%; font-size:90%; font-family:'Comic Sans MS', cursive; ">Your Trolley</p>
<?php
$full=0;
if(strcmp($trolley1,"")==0)
{
	echo "<p style=\"position:absolute; left:30%; top:-50%; font-family:'Comic Sans MS', cursive; color:#111;\">Total:- <b>0</b></p>";
}
else
{
if($tot<200)
{
	$full=$tot+30;
echo "<p id=\"total3\" style=\"position:absolute; left:24%; top:-50%;\">Total:-</p>";	
echo "<p id=\"total2\" style=\"position:absolute; left:30%; top:-50%;\">$tot &nbsp;+ 30(Shipping) =</p>";	
echo "<b><p id=\"total1\" style=\"position:absolute; left:48%; top:-50%; font-family:'Comic Sans MS', cursive; color:#111;\">Total:-$full</p></b>";
}
else
{
echo "<p style=\"position:absolute; left:24%; top:-50%;\">Total:-&nbsp;</p>";
echo "<b><p id=\"total\" style=\"position:absolute; left:30%; top:-50%; font-family:'Comic Sans MS', cursive; color:#111;\">$tot</p></b>";
}
}
?>


<?php
if($_SESSION['uname']=="")
{
	echo "<a href=\"index.php\"><img src=\"prodimg/backtoshop.png\" style=\"position:absolute; left:60%; top:-10%;width:18%;height:120%\" onmousedown=\"this.src='prodimg/backtoshop1.png'\" onmouseup=\"this.src='prodimg/backtoshop.png'\"></a>";
}
else
{
	echo "<a href=\"home.php\" ><img src=\"prodimg/backtoshop.png\" style=\"position:absolute; left:60%; top:-10%;width:18%;height:120%\" onmousedown=\"this.src='prodimg/backtoshop1.png'\" onmouseup=\"this.src='prodimg/backtoshop.png'\"></a>";
}
?>

<?php
if(strcmp($trolley1,"")==0)
{
	echo "<a href=\"#\"><img src=\"prodimg/proceedtopay.png\" style=\"position:absolute; left:80%; top:-10%;width:18%;height:120%; visibility:hidden;\" onmousedown=\"this.src='prodimg/proceedtopay1.png'\" onmouseup=\"this.src='prodimg/proceedtopay.png'\"></a>";
}
else
{
  echo "<a href=\"#\" onclick=\"pay()\"><img src=\"prodimg/proceedtopay.png\" style=\"position:absolute; left:80%; top:-10%;width:18%;height:120%;\" onmousedown=\"this.src='prodimg/proceedtopay1.png'\" onmouseup=\"this.src='prodimg/proceedtopay.png'\"></a>";
}
 
 
  ?>

</div>




<?php
echo "<div id=\"apDiv18\" style=\"top:$a%;\">";
?>
<?php
include("footer.php")
?>
</div>

<div id="trans">
</div>

<div id="quant123" style="position:absolute; left:80%; top:80%; width:10%; height:10; visibility:hidden;">
<<form id="pay1" name="pay1" method="post" action="payment.php">
<input type="text" name="quant" id="quant" value="" />
</form>	
</div>

</div>

</body>
</html>
