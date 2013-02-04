<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="navbar.css" rel="stylesheet" type="text/css" />

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
		
//--------------------------------------------------------------------------------

function review()
{
	document.forms["review1"].submit();
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
function prod1()
{
	document.forms["prod123"].submit();
}
function go()
{
	document.forms["suggested"].submit();
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


//--------------------------------------------------------------------------------

var img=new Array(5);
	function logtr1(img1,img2,img3,img4,img5)
	{
			document.getElementById('zoom').style.visibility='visible';
			document.getElementById('trans').style.visibility='visible';
			document.getElementById('pic').innerHTML='<img src="'+document.getElementById('mn').src+'" style="position:relative;width:100%;height:100%;left:0;top:0;">';
	//		document.getElementById('logdiv').style.opacity=100;
			
			img[0]=img1;
			img[1]=img2;
			img[2]=img3;
			img[3]=img4;
			img[4]=img5;
		}
	var i=4;	
	function prev()
	{		
		if(i!=0)
		{
			document.getElementById('pic').innerHTML="";
			document.getElementById('pic').innerHTML='<img src="'+img[i]+'" style="position:relative;width:100%;height:100%;left:0;top:0;">';
			i--;
		}
		else
		{
			i=4;
			document.getElementById('pic').innerHTML="";
			document.getElementById('pic').innerHTML='<img src="'+img[i]+'" style="position:relative;width:100%;height:100%;left:0;top:0;">';
		}
	}
	function next()
	{
		if(i!=4)
		{
			document.getElementById('pic').innerHTML="";
			document.getElementById('pic').innerHTML='<img src="'+img[i]+'" style="position:relative;width:100%;height:100%;left:0;top:0;">';
			i++;
		}
		else
		{
			i=0;
			document.getElementById('pic').innerHTML="";
			document.getElementById('pic').innerHTML='<img src="'+img[i]+'" style="position:relative;width:100%;height:100%;left:0;top:0;">';
		}
	}
	function zoomclose()
	{
			document.getElementById('zoom').style.visibility='hidden';
			document.getElementById('trans').style.visibility='hidden';
	}
//--------------------------------------------------------------------------------------

function image(thisImg,ob) 
{
	document.getElementById('main').innerHTML="";
    document.getElementById('main').innerHTML='<img src='+thisImg+' id="mn" style="position:relative;width:100%;height:100%" onclick="logtr1()">';


document.getElementById(ob).style.borderBottom="medium inset #090";
}

function nbrdr(ob)
{
	document.getElementById(ob).style.border="none";
}

//---------------------------------------------------------------------------


//--------------------------------------------------------------------------------------
function mytrol()
{
	document.forms["trol"].submit();
}


</script>

<style type="text/css">

.brdr{
	border-style:inset;
	border-color:#090;
	
}

	
.nbrdr{
	border:none;
}

body  {
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
				#trans {
				
				position:fixed;
				left:0%;
				top:0%;
				visibility:hidden;
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
p.shopmanaic
{
	position:absolute;
	left: 26px;
	top: -15px;
	font-size:22px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
	font-weight:bold;
}
p.myaccount
{
	position:absolute;
	left: 210px;
	top: -15px;
	font-size:22px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
	font-weight:bold;
}
p.policies
{
	position:absolute;
	left: 405px;
	top: -15px;
	font-size:22px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
	font-weight:bold;
}
p.help
{
	position:absolute;
	left: 570px;
	top: -15px;
	font-size:22px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
	font-weight:bold;
}
p.products
{
	position:absolute;
	left: 730px;
	top: -15px;
	font-size:22px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
	font-weight:bold;
}
p.home
{
	position:absolute;
	left: 26px;
	top: 49px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;	
}
p.account
{
	position:absolute;
	left: 210px;
	top: 50px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.returnpolicy
{
	position:absolute;
	left: 405px;
	top: 50px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.placeorder
{
	position:absolute;
	left: 570px;
	top: 50px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.formal
{
	position:absolute;
	left: 730px;
	top: 50px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.aboutus
{
	position:absolute;
	left: 26px;
	top: 80px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.mytrolly
{
	position:absolute;
	left: 210px;
	top: 80px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.privacypol
{
	position:absolute;
	left: 405px;
	top: 80px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.trackorder
{
	position:absolute;
	left: 570px;
	top: 80px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.trousers
{
	position:absolute;
	left: 730px;
	top: 80px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}

p.contactus
{
	position:absolute;
	left: 26px;
	top: 110px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.stay
{
	position:absolute;
	left: 920px;
	top: 110px;
	font-size:16px;
	font:Verdana, Geneva, sans-serif;
	color:#999;
}
	
p.login
{
	position:absolute;
	left: 210px;
	top: 110px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.shipping
{
	position:absolute;
	left: 405px;
	top:110px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.returnp
{
	position:absolute;
	left: 570px;
	top: 110px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.casual
{
	position:absolute;
	left: 730px;
	top: 110px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.jeans
{
	position:absolute;
	left: 730px;
	top: 140px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}

p.tc
{
	position:absolute;
	left: 405px;
	top: 140px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}
p.faq
{
	position:absolute;
	left: 570px;
	top: 140px;
	font-size:13px;
	font:Verdana, Geneva, sans-serif;
}

p.follow
{
	position:absolute;
	left: 920px;
	top: -15px;
	font-size:22px;
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

#apDiv19 {
	position:absolute;
	width:294px;
	height:400px;
	z-index:13;
	right:12px;
	top: 159px;
	background-color:#AAA;
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
	left: 907px;
	top: 38px;
}
#apDiv23 {
	position:absolute;
	width:61px;
	height:41px;
	z-index:3;
	left: 1000px;
	top: 39px;
}

#apDiv25 {
	position:absolute;
	width:39px;
	height:42px;
	z-index:5;
	left: 953px;
	top: 39px;
}
#apDiv26 {
	position:absolute;
	width:78px;
	height:44px;
	z-index:6;
	left: 1048px;
	top: 39px;
}
#apDiv19 {
	position:absolute;
	width:2px;
	height:270px;
	z-index:4;
	left: 904px;
	top: 6px;
	background-color: #CCCCCC;
}

#apDiv24 {
	position:absolute;
	width:173px;
	height:390px;
	z-index:1;
	left: 956px;
	top: 322px;
	background-color:#333;
	color:#FFF;
}
#apDiv27 {
	position:absolute;
	width:173px;
	height:390px;
	z-index:1;
	left: 0px;
	top: 322px;
	background-color:#FFF;
	color:#FFF;
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
	width:1137px;
	height:255px;
	z-index:13;
	left: 11px;
	top: 747px;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#ACACAC;
}
#apDiv30 {
	position:absolute;
	width:1137px;
	height:37px;
	z-index:1;
	background-color:#F0F0F0;
}
#apDiv31 {
	position:absolute;
	width:1137px;
	height:255px;
	z-index:13;
	left: 11px;
	top: 1014px;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#ACACAC;
}
#apDiv32 {
	position:absolute;
	width:1137px;
	height:37px;
	z-index:1;
	background-color:#F0F0F0;
}
#apDiv33 {
	position:absolute;
	width:1137px;
	height:255px;
	z-index:13;
	left: 10px;
	top: 1288px;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#ACACAC;
}
#apDiv34 {
	position:absolute;
	width:1137px;
	height:37px;
	z-index:1;
	background-color:#F0F0F0;
}
#apDiv35 {
	position:relative;
	width:37%;
	height:360px;
	z-index:14;
	left:670px;
	top: -720px;
	border-color:#fff;
	border-style:solid;
	border-width:thin;
}
#apDiv36 {
	position:absolute;
	width:730px;
	height:390px;
	z-index:15;
	left: 207px;
	top: 1558px;
	border-style:double;
	border-width:thick;
}
#apDiv37 {
	position:absolute;
	width:170px;
	height:390px;
	z-index:14;
	left: 956px;
	top: 1556px;
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
#apDiv401 {
	position:relative;
	width:100%;
	height:355px;
	z-index:15;
	left:-200px;
	top:-185px;	
	
}
#apdiv41
{
	position:relative;
	width:50%;
	height:360px;
	z-index:15;
	left:450px;
	top:-355px;
	border-style:solid;
	border-width:thin;
	border-color:#fafafa;
	
	
}

#prodinfo {
	position:relative;
	width:85%;
	height:400px;
	z-index:15;
	left:-200px;
	top:-335px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	color:#555555;
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
#zoom
{
	position:fixed;
	top:50%;
	left:50%;
	width:70%;
	height:80%;
	margin-top:-40%;
	margin-left:-35%;
	visibility:hidden;
	z-index:10000;
	background-color:#FFF;
	border:thin;
	border-style:solid;
	border-color:#666;
}

#main
{
	position:relative;width:84%;height:100%;border:none;
	cursor:url('img/zoom.cur'),default;

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
#apDiv18 {
	position:relative;
	width:198%;
	height:400px;
	z-index:12;
	left: -200px;
	top: -750px;
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

</style>

</head>
<body>
<div id="container">
<?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$trolley1="";
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

<div id="apDiv42">
<form method="get" action="http://localhost/shopmaniac/home.php" id="website1" name="website1">

</form>
<?php
if($_SESSION['uname']=="")
{
echo "<a href=\"http://localhost/shopmaniac/index.php\" ><img src=\"prodimg/Title.png\" width=\"38%\" height=\"100%\" style=\"position:absolute; left:-2%; top:5%;\" /></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"website()\"><img src=\"prodimg/Title.png\" width=\"38%\" height=\"100%\" style=\"position:absolute; left:-2%; top:5%;\" /></a>";
}
?>
  <div style="position:absolute; left:38.8%; top:50%; width:44%; height:49%; background-color:#DCDCDC; "></div>
<form id="form1" name="form1" method="post" action="">
    <label>
      <input type="text" name="textfield" id="textfield"  value="search for your favourite brand and products" style="position:absolute;  width: 33.3%; height: 33%; color:#979797; left:39.4%; top:55.2%; font-family:'Comic Sans MS', cursive"  onfocus="if (this.value == 'search for your favourite brand and products') this.value = '';" onblur="if (this.value == '') this.value = 'search for your favourite brand and products';">
    </label>
  </form>
  <img src="prodimg/Search2.png" width="10%" height="54%" style="position:absolute; left:73%; top:51.2%;" onmouseover="this.src='prodimg/Search1.png'" onmouseout="this.src='prodimg/Search2.png'" onmousedown="this.src='prodimg/Search2.png'" onmouseup="this.src='prodimg/Search1.png'"/>


<form method="post" action="http://localhost/shopmaniac/mytrolley2.php" id="trol" name="trol">

</form>
<a href="#" onclick="mytrol()"><img src="prodimg/Trolley11.png" style="position:absolute; left:83%; top:40%;width:6%;height:60%" onmousedown="this.src='prodimg/Trolley12.png'" onmouseup="this.src='prodimg/Trolley11.png'">
 <?php 
if($_SESSION['uname']!="")
{
echo "<p style=\"position:absolute; left:85%; top:75%; color:#555; font-size:75%;\">(".($no-1).")</p>";
}
else
{
	echo "<p style=\"position:absolute; left:85%; top:75%; color:#555; font-size:75%;\">(0)</p>";
}
?>
</a>


<?php
if($_SESSION['uname']=="")
echo "<p style=\"position:absolute; left:50%; top:-16%; font-size:80%; color:#717171; font-family:'Comic Sans MS', cursive\">Hi,Guest|</p>";
else
echo "<p style=\"position:absolute; left:50%; top:-16%; font-size:80%; color:#717171; font-family:'Comic Sans MS', cursive\">Hi,".$_SESSION['uname']."|</p>";
?>

<p style="position:absolute; left:61%; top:-16%; font-size:73%; color:#717171; font-family:'Comic Sans MS', cursive">9773436955(24x7)&nbsp;&nbsp;&nbsp;|
</p>  
 <img src="Fullscreen capture 7182012 14722 PM.gif"  style="position:absolute; left:58%; top:1%; height:15%; width:2%;"/> 
 
<p style="position:absolute; left:80%; top:-16%; font-size:70%; color:#717171; font-family:'Comic Sans MS', cursive">amit.rajula@gmail.com |</p>
<img src="Email-Lists-Canada-11.jpg" style="position:absolute; height:15%; width:2%; left:77%; top:1%;"/>

<form method="post" action="http://localhost/shopmaniac/myaccount.php" id="acc" name="acc">

</form>
<?php
if($_SESSION['uname']=="")
{

echo "<a href=\"#\" onclick=\"logtr()\"><img src=\"prodimg/Account11.png\" style=\"position:absolute; left:94.5%; top:39%;width:6%;height:60%\" onmousedown=\"this.src='prodimg/Account12.png'\" onmouseup=\"this.src='prodimg/Account11.png'\"></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"myaccount()\"><img src=\"prodimg/Account11.png\" style=\"position:absolute; left:94.5%; top:39%;width:6%;height:60%\" onmousedown=\"this.src='prodimg/Account12.png'\" onmouseup=\"this.src='prodimg/Account11.png'\"></a>";
}
?>



<?php
if($_SESSION['uname']=="")
{
echo "<p style=\"position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive\"><a href=\"#\" onmouseover=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#717171'\" onclick=\"logtr()\" style=\"text-decoration:none; color:#717171;\">SignIn</a></p>";
}
else
{
echo "<p style=\"position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive\"><a href=\"http://localhost/shopmaniac/index.php\" onmouseover=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#717171'\" style=\"text-decoration:none; color:#717171;\">SignOut</a></p>";
}
?>

<form method="post" action="http://localhost/shopmaniac/home.php" id="home" name="home">

</form>
<?php
if($_SESSION['uname']=="")
{
	echo "<a href=\"http://localhost/shopmaniac/index.php\"><img src=\"prodimg/Home1.png\" style=\"position:absolute; left:89.5%; top:40%;width:4.5%;height:60%\" onmousedown=\"this.src='prodimg/Home2.png'\" onmouseup=\"this.src='prodimg/Home1.png'\"></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"homes()\"><img src=\"prodimg/Home1.png\" style=\"position:absolute; left:89.5%; top:40%;width:4.5%;height:60%\" onmousedown=\"this.src='prodimg/Home2.png'\" onmouseup=\"this.src='prodimg/Home1.png'\"></a>";
}
?>

</div>



<ul class="nav">
	<li class="dropdown"><a href="mens.php">Men</a>
	<ul>
    
    <li class="dropdown"><a href="apparels.php">Mens Apparels</a>
    <ul>
    <li><a href="formalshirts.php">Formal Shirts</a></li>
    <li><a href="cs.php">Casual Shirts</a></li>
    <li><a href="jeans.php">Jeans</a></li>
    <li><a href="trousers.php">Trousers</a></li>
    <li><a href="t-shirts.php">T-Shirts</a></li>
    </ul>
    </li>
    
    <li class="dropdown"><a href="footwear.php">Mens Footwear</a>
  <ul>
     <li><a href="casualshoes.php">Casual Shoes</a></li>
    <li><a href="formalshoes.php">Formal Shoes</a></li>
    <li><a href="sportsshoes.php">Sports Shoes</a></li>
    <li><a href="sf.php">Slippers n FlipFLop's</a></li>
  </ul>
    </li>
    
   </ul>
	</li>
    
    
    <li class="dropdown"><a href="#">Accessories</a>
	<ul>
    <li><a href="#">Wallets</a></li>
    <li><a href="#">Googles</a></li>
    <li><a href="#">Caps</a></li>
    <li><a href="#">Ties n Couplings</a></li>
    </ul>
	</li>
    
     <li class="dropdown"><a href="homeware.php">Homeware</a>
	<ul>
    <li><a href="#">Microwave</a></li>
    <li><a href="#">Cannisters</a></li>
    </ul>
	</li>
    
    <li class="dropdown"><a href="#">Brand</a>
	<ul>
    <li><a href="#">Levis</a></li>
    <li><a href="#">Pepe Jeans</a></li>
    </ul>
	</li>
</ul>


<div id="apDiv401">
<?php
$id=$_POST['pid1'];
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from products where pid=$id");
	while($row = mysql_fetch_array($qry))
	{
		$id=$row['pid'];
		$name= $row['pname'];
		$size= $row['size'];
		$price= $row['price'];
		$info=$row['info'];
		$img1=$row['img1'];
		$img2=$row['img2'];
		$img3=$row['img3'];
		$img4=$row['img4'];
		$img5=$row['img5'];
		$brand=$row['brand'];
		$dept=$row['dept'];
	}
	echo "<div style=\"position:absolute;left:85%;width:15%;height:100%;border-color:#666;border-width:thin; border-left-style:solid;\">";
	echo "<img src=\"prodimg/$img1\" id=\"img1\" style=\"position:relative;width:90%; height:16%; left:2%;top:2%\" onmouseover=\"image('prodimg/$img1','img1')\" onmouseout=\"nbrdr('img1')\">";
	echo "<hr> <img src=\"prodimg/$img2\" id=\"img2\" style=\"position:relative;width:90%; height:16%; left:2%;top:2%\" onmouseover=\"image('prodimg/$img2','img2')\" onmouseout=\"nbrdr('img2')\">";
    echo "<hr> <img src=\"prodimg/$img3\" id=\"img3\" style=\"position:relative;width:90%; height:16%; left:2%;top:3%\" onmouseover=\"image('prodimg/$img3','img3')\" onmouseout=\"nbrdr('img3')\">";
	echo "<hr> <img src=\"prodimg/$img4\" id=\"img4\" style=\"position:relative;width:90%; height:16%; left:2%;top:3%\" onmouseover=\"image('prodimg/$img4','img4')\" onmouseout=\"nbrdr('img4')\">";
	echo "<hr> <img src=\"prodimg/$img5\" id=\"img5\" style=\"position:relative;width:90%; height:16%; left:2%;top:5%\" onmouseover=\"image('prodimg/$img5','img5')\" onmouseout=\"nbrdr('img5')\">";
	echo "</div>";


echo "<div name=\"main\" id=\"main\" onclick=\"logtr1('prodimg/$img1','prodimg/$img2','prodimg/$img3','prodimg/$img4','prodimg/$img5')\">
	<img src=\"prodimg/$img1\" id=\"mn\" style=\"height:100%;width:100%\">";
	
?>
</div>

<div id="apdiv41">
<?php
echo "<form method=\"post\" action=\"http://localhost/shopmaniac/trolley.php\" id=\"prod123\" name=\"prod123\">";
echo "<input type=\"hidden\" name=\"prodid\" value=\"$id\" />";
echo "<input type=\"hidden\" name=\"cost\" value=\"$price\" />";
echo "<input type=\"hidden\" name=\"name1\" value=\"$name\" />";


echo "<center><font face=\"'Comic Sans MS', cursive\" size=\"+2.7\" color=\"#333333\"><b>$name</b></font></center>";
echo "<center><img src=\"Logo/Nike.jpg\" width=70% height=30%/></center>";

echo "<center><font face=\"Comic Sans MS, cursive\" size=\"+2\" color=\"#990000\"><b>Rs.$price</b></font></center><br><br>";
echo "<center><font face=\"'Comic Sans MS', cursive	\" size=\"4\" color=\"#333333\">Select your Size:</font></center>";
echo "<center><select name=\"size\" id=\"size\" style=\"width:50%; \">";

$qry1=mysql_query("select size from products where pname='$name'");
while($row1 = mysql_fetch_array($qry1))
{
	echo "<option style:\"align:center\">".$row1['size']."</option>";
}
echo "</select></center><br><br>";
echo "</form> ";
if($_SESSION['uname']=="")
{
	echo "<center><a href=\"#\"><img src=\"prodimg/Buy1.png\" width=\"44%\" height=\"14%\" onclick=\"logtr()\" onmousedown=\"this.src='prodimg/Buy2.png'\" onmouseup=\"this.src='prodimg/Buy1.png'\"></a></center>";
}
else
{
echo "<center><a href=\"#\"><img src=\"prodimg/Buy1.png\" width=\"44%\" height=\"14%\"  onclick=\"prod1()\" onmousedown=\"this.src='prodimg/Buy2.png'\" onmouseup=\"this.src='prodimg/Buy1.png'\"></center>";
}
?>


</div>

<div id="apDiv35">
<img src="prodimg/Picture1.png" width="110%" height="30%" style="position:absolute; top:0%; left:0%;"/>
<img src="prodimg/Picture2.png" width="111%" height="30%" style="position:absolute; top:25%; left:-2%;"/>
<img src="prodimg/Picture4.png" width="110%" height="30%" style="position:absolute; top:50%; left:0%;"/>
<img src="prodimg/Picture3.png" width="116%" height="30%" style="position:absolute; top:75%; left:-10%;"/>
</div>

<form method="post" action="http://localhost/shopmaniac/review.php" id="review1" name="review1">
<?php
echo "<input type=\"hidden\" name=\"prodid\" value=\"$id\" />";
?>
</form>

<?php
if($_SESSION['uname']=="")
{
echo "<a href=\"#\" onclick=\"logtr()\" onmouseover=\"this.style.color='#DF7000'\" onmouseout=\"this.style.color='#555555'\" style=\"position:absolute; left:20%; top:105%; text-decoration:none; color:#555555;\"><b>Comment This Product</b></a>";
}
else
{
echo "<a href=\"#\" onclick=\"review()\" onmouseover=\"this.style.color='#DF7000'\" onmouseout=\"this.style.color='#555555'\" style=\"position:absolute; left:20%; top:105%; text-decoration:none; color:#555555;\"><b>Comment This Product</b></a>";
	
}
?>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>&nbsp;</p>
<div id="prodinfo">
<h2 align="center">
Product Information </h2>

<?php
$arr=spliti("-",$info);
for($i=0;$i<count($arr);$i++)
{
	$arrin=spliti(":",$arr[$i]);
	echo "<table style=\"margin-left:10%;\">";
	echo "<tr>";
	echo "<td width=100 height=10 style=\"font-family:'Comic Sans MS', cursive; font-size:90%;\"><b>$arrin[0]:</b></td>";
	echo "<td width=150 height=10 style=\"font-family:'Comic Sans MS', cursive; font-size:90%;\">$arrin[1]</td>";
	echo "<br/></tr>";
	echo "</table>";
}

	
?>
</div>

<div style="position:relative;left:163px;top:-735px;width:113%;height:35px; background-color:#f6f6f6;">
<font face="Comic Sans MS, cursive" color="#555555"><h2 style="position:absolute;top:-70%;left:40%">Brand Information</h2></font>
</div>
<div style="position:relative;left:163px;top:-735px;width:113%;height:150px; background-color:#f6f6f6; ">
<?php
echo "<div style=\"position:absolute;left:0%;top:0%;width:25%;height:96%; \">";
$bname="";
$binfo="";
$bimg="";
$qry=mysql_query("select * from brand where brandname='$brand'");
	while($row = mysql_fetch_array($qry))
	{
		$bname=$row['brandname'];
		$binfo=$row['brandinfo'];
		$bimg=$row['brandimg'];
	}
	echo "<img src=\"Logo/$bimg\" style=\"position:absolute;width:100%;height:92%;top:5%;z-index=1;left:3%;\">";
	echo "<font face=\"'Comic Sans MS', cursive\" color=\"#333333\"><h3 align=\"center\" style=\"position:relative;top:1%;z-index:10\">$bname</h3></font>";
	echo "</div>";
	echo "<div style=\"position:absolute;left:26%;top:5%;width:73%;height:84%;\">";
	echo "<font face=\"'Comic Sans MS', cursive\" color=\"#666666\"><span style=\"position:absolute; float:left;left:2%;top:0%; font-size:65%;\">$binfo</span></font>";
	echo "</div>";
?>
</div>

<div style="position:relative;left:163px;top:-725px;width:113%;height:35px; background-color:#f6f6f6;">
<font face="Comic Sans MS, cursive" color="#555555"><h2 style="position:absolute;top:-70%;left:40%">Suggested Products</h2></font>
</div>
<div style="position:relative;left:163px;top:-725px;width:113%;height:175px; background-color:#f6f6f6; overflow:scroll; z-index:-10;">

<?php
$l=2;
$t=1;
$i=0;	
	$fetch=mysql_query("select * from products where brand='$brand' and dept='$dept' ");
	$count=mysql_num_rows($fetch);
	for($i=0;$i<$count;$i++)
	{
	while($row = mysql_fetch_array($fetch))
	{
		$id2=$row['pid'];
		$name2= $row['pname'];
		$size2= $row['size'];
		$prize2= $row['price'];
		$img2=$row['img1'];
		
		echo "<form method=\"post\" action=\"http://localhost/shopmaniac/prodinfo.php\" id=\"suggested\" name=\"suggested".$i."\">";
		
        echo "<input type=\"hidden\" name=\"pid1\" value=\"$id2\" >";
echo "</form> ";
		
		echo "<a href=\"#\" onclick=\"go('suggested".$i."')\">";
		echo "<div style=\" width:23%;height:97%; background-color:#fafafa; position:absolute; top:".$t."%; left:".$l."%; \">";
	echo "<img src=\"prodimg/p4.jpg\" width=\"96%\" height=\"60%\" style=\"position:absolute; top:1%; left:2%;\">";
	echo "<p style=\"position:absolute; top:56%; left:2%; font-family:'Comic Sans MS', cursive; color:#555; font-size:70%;\"> $name2</p>";
	echo "<p style=\"position:absolute; left:2%; top:72%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:70%;\"> $prize2 </p>";
	
	echo "<a href=\"#\"><img src=\"prodimg/Buy1.png\" width=\"35%\" height=\"15%\" style=\"position:absolute; left:2%; top:87%; \" onclick=\"go('suggested".$i."')\" onmousedown=\"this.src='prodimg/Buy2.png'\" onmouseup=\"this.src='prodimg/Buy1.png'\"></a>";
	echo "</div>";	
	echo "</a>";
	$l=$l+25;
	$i=$i+1;
	}
	}
?>

</div>
<p>&nbsp;</p>

<div style="position:relative;width:198%;height:400px;z-index:12;left: -200px;top: -770px;background-color:#fff;">
<?php
$i=1;
$l=0;
$t=0;
$q=0;
$a=0;
$z=0;
$rev="select * from review where pid='$id'";
$rev1=mysql_query($rev);
$count = @mysql_num_rows($rev1);
if($count > 0)
	{
		
while($row1=mysql_fetch_array($rev1))
{
	
	if($i>1)
		{
			$t=$t+76;
			$l=0;
			$q=$q+1;
			$z=$t-4;
			echo "<hr style=\"position:absolute; left:0%; top:".$z."%; width:100%; border-style:dotted;\"/>";
		}
		
	$name1=$row1['username'];
	$title1=$row1['title'];
	$desc1=$row1['desciption'];
	$rate1=$row1['rating'];
	
	
	echo "<div style=\" width:100%;height:75%; background-color:#f6f6f6; position:absolute; top:".$t."%; left:".$l."%; \">";
    echo "<table border=\"0\" style=\"position:absolute; left:2%; top:4%; width:96%; height:270px;\">";
	echo "<tr style=\"height:10%\">";
	echo "<td style=\"position:absolute; left:4%; top:2%;  font-family:'Comic Sans MS', cursive; color:#555555; font-size:110%;\"><b>$name1</b></td>";
	echo "<td style=\"position:absolute; left:26%; top:2%;  font-family:'Comic Sans MS', cursive; color:#555555;\">$title1</td>";
	echo "</tr>";
	echo "<tr style=\"height:10%\">";
	echo "<td style=\"position:absolute; left:0%; top:12%;  font-family:'Comic Sans MS', cursive; color:#555555;\">";
	if($rate1=="Worst")
	{
	 echo "<img src=\"prodimg/star1.jpg\" width=60% height=8%>";
	}
	elseif($rate1=="Not Bad")
	{
	 echo "<img src=\"prodimg/star2.jpg\" width=60% height=8%>";
	}
	elseif($rate1=="Mediocre")
	{
	 echo "<img src=\"prodimg/star3.jpg\" width=60% height=8%>";
	}
	elseif($rate1=="Pretty Good")
	{
	 echo "<img src=\"prodimg/star4.jpg\" width=60% height=8%>";
	}
	if($rate1=="Excellent")
	{
	 echo "<img src=\"prodimg/star5.jpg\" width=60% height=8%>";
	}

    echo "</td>";
	echo "<td style=\"position:absolute; left:25%; top:12%; width:65%;  font-family:'Comic Sans MS', cursive; color:#555555;\"><hr /></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td style=\"position:absolute; left:26%; top:25%;  font-family:'Comic Sans MS', cursive; color:#555555;\">$desc1</td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";
	
	$i=$i+1;

}
	}
	
	else
	{
		echo "<p style=\"position:absolute; left:30%; top:70%; font:'Comic Sans MS', cursive; font-size:150%; color:#111; font-family:'Comic Sans MS', cursive;\">SORRY NO REVIEW'S FOUND</p>";
	}
	$a=$q*$t+50;
?>
</div>


<?php
echo "<div id=\"apDiv18\" style=\"top:".$a."%;\">";
?>
<p class="shopmanaic"><u>Shopmanaic</u></p>
<p class="myaccount"><u>My Account</u></p>
<p class="policies"><u>Policies</u></p>
<p class="help"><u>Help</u></p>
<p class="products"><u>Products</u></p><br />
<?php
if($_SESSION['uname']=="")
{
	echo "<a href=\"http://localhost/shopmaniac/index.php\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \" ><p class=\"home\">Home</p></a>";
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
<div id="apDiv40"></div>
</div>


<div id="zoom">
<a href="#"><img src="prodimg/close.png" alt="Close" style="height:4.5%;width:2.25%;position:relative;left:97.6%;top:0.3%;z-index:150" onclick="zoomclose()" /> </a>
<a href="#"><img src="img/prev.png" style="position:absolute;left:0;top:50%;width:3%;height:10%;z-index:150;margin-top:-5%;" onclick="prev()"  onmousedown="this.src='img/prev1.png'" onmouseup="this.src='img/prev.png'"/></a>
<a href="#"><img src="img/next.png" style="position:absolute;right:0;top:50%;width:3%;height:10%;z-index:150;margin-top:-5%;" onclick="next()" onmousedown="this.src='img/next1.png'" onmouseup="this.src='img/next.png'"/></a>
<div id="pic" style="position:absolute;left:0;top:0;width:100%;height:100%;z-index:100">
</div>
</div>

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
  echo "<input type=\"hidden\" name=\"flag\" value=\"100\" />";
   echo "<input type=\"hidden\" name=\"pid\" value=\"$id\" />";
  ?>
  
<a href="#" onClick="login1()"><img src="prodimg/Login1.png" width="50%" height="15%" style="position:absolute; left:25%; top:88%;" onMouseDown="this.src='prodimg/Login2.png'" onMouseUp="this.src='prodimg/Login1.png'"/></a>
</form>
</div>

<div id="logdiv2" onMouseOver="reg()">
<h3 align="center"><font face="Comic Sans MS, cursive" color="#666666">Register</font></h3>
<h4 align="center"><font face="Comic Sans MS, cursive" color="#666666">For New Users</font></h4>
<form method="POST" action="http://localhost/shopmaniac/Divert.php" name="register" >
  <table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:10%; top:20%">
  <tr>
  <td height="30"><font color="#666666" face="Comic Sans MS, cursive">Email ID:</font></td>
  <td height="30"><?php
  echo "<input type=\"text\" name=\"email123\" >";
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
  
<a href="#" onClick="reg1()"><img src="prodimg/Register1.png" width="50%" height="15%" style="position:absolute; left:25%; top:85%;" onMouseDown="this.src='prodimg/Register2.png'" onMouseUp="this.src='prodimg/Register1.png'"/></a>
</form>
</div>
</div>

<div id="trans">
</div>
</div>
</body>
</html>
