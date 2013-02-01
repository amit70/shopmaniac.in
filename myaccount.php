<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="navbar.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="themes/4/js-image-slider.js" type="text/javascript"></script>
<title>Untitled Document</title>
<script type="text/javascript" language="javascript">
		
function aaa123(amit)
{
    document.forms[amit].submit();
}	

function website()
{
	document.forms["website1"].submit();
}
		
function homes()
{ 
    document.forms["home"].submit();
}
		
		function aaa(a,b,c,d,e,f)
		{ 
		 	 document.getElementById(a).style.visibility='visible';
		 	 document.getElementById(b).style.visibility='hidden';
			 document.getElementById(c).style.visibility='hidden';
			 document.getElementById(d).style.visibility='hidden';
			 document.getElementById(e).style.visibility='hidden';
			 document.getElementById(f).style.visibility='hidden';
		}
		
		function mytrol()
		{
			document.forms["trol"].submit();
		}
		function pass()
		{
			document.getElementById('pass1').disabled=false;
			document.getElementById('pass2').disabled=false;
			return false;
		}

function feedback()
{
	var x=document.forms["feedback1"]["fd"].value;
	if(x=="" || x==null)
	{
	alert("Please Enter Your Feedback ");
	return false;
	}
	document.forms["feedback1"].submit();
}
			function returnsaaa()
		{
			document.forms["returns"].submit();
		}
		function rid(p,q,r,s,t,u,v,w,x)
		{
			document.getElementById('rid').style.visibility='visible';
			document.getElementById('trans').style.visibility='visible';
			document.getElementById('rid').style.opacity=100;
			document.getElementById('rid').innerHTML="";			
			document.getElementById('rid').innerHTML='<a href="#"><img src="close.png" alt="Close" style="height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10" onclick="irid()" /> </a> <img src="prodimg/'+t+'" width=20% height=100% style="left:0%; top:0%;"/><p style="position:absolute; left:39.5%; top:-5%;" >Order Id: '+x+'</p> <p style="position:absolute; left:40%; top:22%;" >Product Id: '+p+'</p> <p style="position:absolute; left:40%; top:35%;" >Product Name: '+q+'</p> <p style="position:absolute; left:40%; top:49%;" >Size: '+r+'</p> <p style="position:absolute; left:40%; top:65%;" >Price: '+s+'</p> <p style="position:absolute; left:40%; top:8%;" >Return Id: '+u+'</p> <form method="post" action="http://localhost/shopmaniac/return.php" name="returns"><input type="hidden" name="oidaaa" value="'+x+'"><input type="hidden" name="pidaaa" value="'+p+'"><input type="hidden" name="pnameaaa" value="'+q+'" ><input type="hidden" name="sizeaaa" value="'+r+'" ><input type="hidden" name="priceaaa" value="'+s+'"><input type="hidden" name="imageaaa" value="'+t+'"><input type="hidden" name="ridaaa" value="'+u+'" ><a href="#"  onclick="returnsaaa()"><img src="prodimg/confirmreturn.png" width="25%;" height="20%;" onmousedown="this.src=prodimg/confirmreturn1.png" onmouseup="this.src=prodimg/confirmreturn.png" style="position:absolute; left:70%; top:73%;" /></form>';
	     }
		
		function irid() {
			document.getElementById('rid').style.visibility='hidden';
			document.getElementById('trans').style.visibility='hidden';
		}
		
function updateprofile()
		{
		var x=document.forms["up1"]["name1"].value;
if (x==null || x=="")
  {
  	alert("Fullname must be filled out");
  	return false;
  }
  var x=document.forms["up1"]["Addr"].value;
if (x==null || x=="")
  {
  	alert("Please enter Address");
 	 return false;
  }
	
  var x=document.forms["up1"]["Telephone"].value;
  if (x==null || x=="")
  {
  	alert("Contact No. must be filled out");
  	return false;
  }
if(isNaN(x))
 {
	 alert("Contact Must be Numerical");
	 return false;
 }

var x=document.forms["up1"]["email"].value;
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
	document.forms["up1"].submit();

}
	
function updatepass()
{
	var x=document.forms["updpwd"]["pass1"].value;
	if(x=="" || x==null)
	{
	alert("Password Should be filled");
	return false;
	}
	var y=document.forms["updpwd"]["pass2"].value;
	if(y=="" || y==null)
	{
		alert("Confrim Password Should Be filled");
	     return false;
	}
	if(x!=y)
	{
		alert("Password And Confirm Password does Not match");
		return false;
	}
	document.forms["updpwd"].submit();
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
				margin: -5% -5%;
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
				z-index:15;}
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





#apDiv24 {
	position:absolute;
	width:15%;
	height:390px;
	z-index:1;
	right:3%;
	top: 32%;
	background-color:#333;
	color:#FFF;
}
#apDiv27 {
	position:absolute;
	width:20%;
	height:390px;
	z-index:1;
	left: 3%;
	top: 32%;
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
#apDiv38 {
	position:absolute;
	width:470px;
	height:46px;
	z-index:1;
	left: 410px;
	top: 57px;
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

#apDiv19 {
	position:relative;
	width:196%;
	height:20px;
	z-index:0;
	left: -200px;
	top: -180px;
	background-color:#F6F6F6;
	font-family:"Comic Sans MS", cursive;
	color::#111;
}
#apDiv41 {
	position:relative;
	width:32%;
	height:300px;
	z-index:14;
	left: -200px;
	top: -175px;
	background-color:#F6F6F6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;

}

#profile {
	position:relative;
	width:100%;
	height:340px;
	left: -60px;
	top: -490px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
	visibility:visible;
	
}
#order {
	position:relative;
	width:100%;
	height:340px;
	left: -60px;
	top: -830px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
	visibility:hidden;
	overflow:scroll;
}
#mypoints {
	position:relative;
	width:100%;
	height:340px;
	left: -60px;
	top: -1170px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
	visibility:hidden;
	
}
#mycredits{
	position:relative;
	width:100%;
	height:340px;
	left: -60px;
	top: -2190px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
	visibility:hidden;
	
}
#feedback {
position:relative;
	width:100%;
	height:340px;
	left: -60px;
	top: -1510px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
	visibility:hidden;
	
}
#returns{
position:relative;
	width:100%;
	height:340px;
	left: -60px;
	top: -1850px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
	visibility:hidden;
	overflow:scroll;
	
}

#apDiv47 {
	position:relative;
	width:60%;
	height:340px;
	z-index:14;
	left: 365px;
	top: -2530px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
}
#upper {
position:relative;
	width:194%;
	height:80px;
	left:-200px;
	z-index:1;
	top: -200px;
}
#top 
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
#rid
{
	position:absolute;
	left:50%;
	top:50%;
	margin-left:-25%;
	margin-top:-17.5%;
	width:50%;
	height:35%;
	border-style:solid;
	border-width:thin;
	border-color:#BEBEBE;
	visibility:hidden;
	z-index:10000;
	background-color:#FFF;
}
	#trans {
				visibility:hidden;
				position:fixed;
				left:0%;
				top:0%;
				width:100%;
				height:100%;
				z-index:1000;
				background:#000;
				/* For web browsers who care */
				opacity: 0.6;
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
#apDiv18 {
	position:relative;
	width:195%;
	height:400px;
	z-index:12;
	left: -200px;
	top: -2520px;
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



	$sql=mysql_connect("localhost","root","system");
	mysql_select_db("eshop",$sql);
	$result1= mysql_query("SELECT *  FROM User   WHERE username='".$_SESSION['uname']."'");
	
	while($row1 = mysql_fetch_array($result1))
	{
		$user1= $row1['username'];
		$pass=$row1['password'];
		$fullname= $row1['name'];
		$addr= $row1['address'];
		$cont= $row1['contact'];
		$email= $row1['email'];
	}
?>


<?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from User where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$trolley1=$row['trolley'];
}
$arr=spliti(",",$trolley1);
$no=0;
$no=count($arr);
?>

<div id="upper">

 <a href="home.php"><img src="prodimg/Title.png" width="38%" height="100%" style="position:absolute; left:-2%; top:5%;" /></a>

<div style="position:absolute; left:38.8%; top:50%; width:44%; height:49%; background-color:#DCDCDC; "></div>
<form id="form1" name="src1" method="post" action="http://localhost/shopmaniac/search.php">
    <label>
      <input type="text" name="srch" id="srch"  value="search for your favourite brand and products" style="position:absolute;  width: 33.3%; height: 33%; color:#979797; left:39.4%; top:55.2%; font-family:'Comic Sans MS', cursive"  onfocus="if (this.value == 'search for your favourite brand and products') this.value = '';" onBlur="if (this.value == '') this.value = 'search for your favourite brand and products';">
    </label>
   
  </form>
 <img src="prodimg/Search2.png" width="10%" height="54%" style="position:absolute; left:73%; top:51.2%;"  onmousedown="this.src='prodimg/Search1.png'" onMouseUp="this.src='prodimg/Search2.png'" onClick="aaa123('src1')"/>



<a href="mytrolley2.php"><img src="prodimg/Trolley11.png" style="position:absolute; left:83%; top:40%;width:6%;height:60%" onmousedown="this.src='prodimg/Trolley12.png'" onmouseup="this.src='prodimg/Trolley11.png'">
<?php
echo "<p style=\"position:absolute; left:85%; top:75%; color:#555; font-size:75%;\">(".($no-1).")</p>";
?>
</a>


<p style="position:absolute; left:61%; top:-16%; font-size:73%; color:#717171; font-family:'Comic Sans MS', cursive">9773436955(24x7)&nbsp;&nbsp;&nbsp;|
</p>  
 <img src="Fullscreen capture 7182012 14722 PM.gif"  style="position:absolute; left:58%; top:1%; height:15%; width:2%;"/> 
 
<p style="position:absolute; left:80%; top:-16%; font-size:70%; color:#717171; font-family:'Comic Sans MS', cursive">amit.rajula@gmail.com |</p>
<img src="Email-Lists-Canada-11.jpg" style="position:absolute; height:15%; width:2%; left:77%; top:1%;"/>


<p style="position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive"><a href="http://localhost/shopmaniac/index.php" onmouseover="this.style.color = '#DF7000'" onmouseout="this.style.color = '#717171'" style="text-decoration:none; color:#717171;">SignOut</a></p>

<a href="#"><img src="prodimg/Account11.png" style="position:absolute; left:94.5%; top:39%;width:6%;height:60%" onmousedown="this.src='prodimg/Account12.png'" onmouseup="this.src='prodimg/Account11.png'"></a>


<a href="home.php"><img src="prodimg/Home1.png" style="position:absolute; left:89.5%; top:40%;width:4.5%;height:60%" onmousedown="this.src='prodimg/Home2.png'" onmouseup="this.src='prodimg/Home1.png'"></a>

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

<div id="apDiv19">

<p style="position:absolute; left:2%; top:-80%; z-index:13" > WELCOME,<?php
echo $_SESSION['uname'];
?></p>
</div>

<div id="apDiv41">
<a href="#" onclick="aaa('profile','order','mypoints','feedback','returns','mycredits')" style="position:absolute; left:10%; top:5%; color:#000; text-decoration:none;" onmouseover="this.style.color='#DF7000'" onmouseout="this.style.color='#000'">My Profile</a>

<hr style="position:absolute; top:16%; width:100%; height:0.1%;" color="#D6D6D6";/>

<a href="#" onclick="aaa('order','profile','mypoints','feedback','returns','mycredits')" style="position:absolute; left:10%; top:22%; color:#000; text-decoration:none;" onmouseover="this.style.color='#DF7000'" onmouseout="this.style.color='#000'">My Order</a>

<hr style="position:absolute; top:32%; width:100%; height:0.1%; " color="#D6D6D6";/>

<a href="#" onclick="aaa('mypoints','profile','order','feedback','returns','mycredits')" style="position:absolute; left:10%; top:39%; color:#000; text-decoration:none" onmouseover="this.style.color='#DF7000'" onmouseout="this.style.color='#000'">My Points</a>

<hr style="position:absolute; top:48%; width:100%; height:0.1%;" color="#D6D6D6";/>
<a href="#" onclick="aaa('feedback','profile','order','mypoints','returns','mycredits')" style="position:absolute; left:10%; top:68%; color:#000; text-decoration:none" onmouseover="this.style.color='#DF7000'" onmouseout="this.style.color='#000'">Feedback</a>

<hr style="position:absolute; top:64%; width:100%; height:0.1%;" color="#D6D6D6";/>
<a href="#" onclick="aaa('returns','profile','order','mypoints','feedback','mycredits')" style="position:absolute; left:10%; top:85%; color:#000; text-decoration:none;" onmouseover="this.style.color='#DF7000'" onmouseout="this.style.color='#000'">Returns</a>

<hr style="position:absolute; top:80%; width:100%; height:0.1%;" color="#D6D6D6";/>

<a href="#" onclick="aaa('mycredits','mypoints','profile','order','feedback','returns')" style="position:absolute; left:10%; top:54%; color:#000; text-decoration:none" onmouseover="this.style.color='#DF7000'" onmouseout="this.style.color='#000'">My Credits</a>

  
</div>






<div id="profile">
<p align="left">&nbsp;</p>
<form method="POST" action="http://localhost/shopmaniac/update.php" name="up1" id="up1" >
<?php
echo "<input type=\"hidden\" name=\"flag\" value=\"0\" />";

?>
  <table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:3%; top:2%">
  <tr>
  <td height="33" width="52%"><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">Username:</font></td>
    
    <?php
	echo "<td><font face=\"Comic Sans MS, cursive\" font size=\"4%\" color=\"#555\">$user1</font></td>";
  echo "<td><input type=\"hidden\" name=\"Username\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"Username\"  value=".$user1."></td>";
  ?>
  </tr>
 
  <tr>
  <td height="33"><label for="Full Name"><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">Full Name:</font></label></td>
    <?php
  echo "<td><input type=\"text\" name=\"name1\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"Name\" value=\"$fullname\"></td>";
  ?>
  </tr>
  
  <tr>
  <td height="33"><label><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">Address</font></label></td>
  <?php
  echo "<td><input type=\"textarea\" name=\"Addr\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"Addr\" value=\"$addr\" /></td>";
  ?>
  </tr>
  
  <tr>
  <td height="33"><label for="Telephone"><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">Mobile No:</font></label></td>
   <?php
   echo "<td><input type=\"text\" name=\"Telephone\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"Telephone\" value=".$cont." /></td>";
   ?>
  </tr>
  
  <tr>
  <td height="33"><label for="E-mail"><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">E-mail:</font></label></td>
  <?php
  echo "<td><input type=\"text\" name=\"email\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"email\" value=".$email." /></td>";
  ?>
  </tr>
</table>  
<a href="#" onclick="updateprofile()"><img src="prodimg/updateprofile.png" width="30%" height="10%" style="position:absolute; left:3%; top:89%;" onmousedown="this.src='prodimg/updateprofile1.png'" onmouseup="this.src='prodimg/updateprofile.png'"/></a>
</form>




<div id="updpass" style="visibility:hidden; position:absolute; left:0%;top:60%;height:30%;width:100%;">
<form name="updpwd" id="updpwd"method="post" action="http://localhost/shopmaniac/update.php">  
<?php
echo "<input type=\"hidden\" name=\"flag\" value=\"1\" />  ";
?>
<table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:3%; top:2%" >
<tr>
  <td height="33"><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">Password:</font></td>
    <?php
	echo "<input type=\"hidden\" name=\"Username\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"Username\" readonly=\"readonly\" value=".$user1.">";
  echo "<td><input type=\"password\" name=\"pass1\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"pass1\" value=".$pass."></td>";
   ?>
   </tr>
 
 <tr>
  <td height="33" width="163" ><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">Confirm Password:</font></td>
    
    <?php
  echo "<td><input type=\"password\" name=\"pass2\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"pass2\" value=".$pass."></td>";
  ?>
  <td>
    </tr>
  <a href="#" onclick="updatepass()"><img src="prodimg/updatepassword.png" width="30%" height="30%" style="position:absolute; left:36%; top:99%;" onmousedown="this.src='prodimg/updatepassword1.png'" onmouseup="this.src='prodimg/updatepassword.png'" /></a>	 
</table> 
 </form>
</div>

<a href="#" onclick="document.getElementById('updpass').style.visibility='visible';"><img src="prodimg/editpass.png" width="30%" height="10%" style="position:absolute; left:68%; top:89%;" onmousedown="this.src='prodimg/editpass1.png'" onmouseup="this.src='prodimg/editpass.png'"/></a>
</div>

<div id="order">
  <?php
  $i=1;
 $result2= mysql_query("select * from orders where username='".$_SESSION['uname']."'");
 $result5=mysql_query("select * from track where username='".$_SESSION['uname']."'");
 
 $count = @mysql_num_rows($result2);
 if($count > 0)
 {
	echo "<table align=\"left\" border=\"0\" cols=2 cellspacing=\"3\" style=\"position:absolute; left:1%; top:2%;\">";
  echo "<tr>";
    echo "<th  width=\"90\"><font color=\"#555\">Date Of Order</font></th>";
    echo "<th  width=\"90\"><font color=\"#555\">Order Id</font></th>";
	echo "<th  width=\"90\"><font color=\"#555\">Product Id</font></th>";
  echo "<th width=\"90\"><font color=\"#555\">Name</font></th>";
  echo "<th  width=\"90\"><font color=\"#555\">Size</font></th>";
  echo "<th  width=\"90\"><font color=\"#555\">Price</font></th>";
  echo "</tr>";
 while($row2 = mysql_fetch_array($result2))
	{
		$row5=mysql_fetch_array($result5);
	    $pid1=$row2['pid'];
		$pname1=$row2['pname'];
		$size1=$row2['size'];
		$price1=$row2['price'];
		$image=$row2['image'];
		$rid=$row2['returnid'];
		$flag=$row2['flag'];
		$date=$row2['DOO'];
		$oid1=$row5['oid'];
	if($flag==0)
	{
		echo "<tr>";
		
		 echo "<td height=\"50\" width=\"50\" align=\"center\">";
  echo "$date";
  echo "</td>";
  
  	 echo "<td height=\"50\" width=\"50\" align=\"center\">";
  echo "$oid1";
  echo "</td>";
  
  echo "<td height=\"50\" width=\"50\" align=\"center\">";
  echo "$pid1";
  echo "</td>";
  
  echo "<td height=\"50\" width=\"50\"align=\"center\" >";
  echo "$pname1";
  echo "</td>";
  

  echo "<td height=\"50\" width=\"50\" align=\"center\">";
  echo "$size1";
  echo "</td>";
  
  
  echo "<td height=\"50\" width=\"50\" align=\"center\">";
  echo "$price1";
  echo "</td>";
		
 echo "<td>";
		
  echo "<a href=\"#\" id =\"returnsaaa".$i."\" onclick=\"rid('$pid1','$pname1','$size1','$price1','$image','$rid','amit','returnsaaa".$i."','$oid1')\" style=\"font-size:80%;\">Return</a>";
  echo "</td>";
  
  echo "<tr>";
  $i=$i+1;
	}
	else
	{
		echo "<tr>";
		
		 echo "<td height=\"50\" width=\"50\" align=\"center\">";
  echo "$date";
  echo "</td>";
  
   echo "<td height=\"50\" width=\"50\" align=\"center\">";
  echo "$oid1";
  echo "</td>";
  
  echo "<td height=\"50\" width=\"50\" align=\"center\">";
  echo "$pid1";
  echo "</td>";
  
  echo "<td height=\"50\" width=\"50\"align=\"center\" >";
  echo "$pname1";
  echo "</td>";
  

  echo "<td height=\"50\" width=\"50\" align=\"center\">";
  echo "$size1";
  echo "</td>";
  
  
  echo "<td height=\"50\" width=\"50\" align=\"center\">";
  echo "$price1";
  echo "</td>";
		
	}
}
 }
else
{
	echo "<p style=\"position:absolute; left:5%; top:10%;\">Hi ".$_SESSION['uname'].",You Haven't made any Orders Yet.</p>";
}
 
 ?>
 </table>

</div>

<div id="mypoints">
<p style="position:absolute; left:10%; top:2%; font-family:'Comic Sans MS', cursive;">You Have given FREE 500 SIGNUP POINTS</p>
<table align="left" border="0" cols=2 cellspacing="3" style="position:absolute; left:30%; top:15%">
<tr>
<th height="20" width="120" align="center"><font color="#555">MyPoints</font></th>
</tr>

 	

<?php
 $result2= mysql_query("select * from user where username='".$_SESSION['uname']."'");
 while($row2 = mysql_fetch_array($result2))
	{
	    $mypoints=$row2['mypoints'];
		
		echo "<tr>";
  
  echo "<td height=\"20\" width=\"50\" align=\"center\">";
  echo "$mypoints";
  echo "</td>";
  echo "<tr>";
		
	}
		
 ?>
 </table>
 <?php
 if($mypoints>=5000 && $mypoints<=7999)
echo "<p style=\"position:absolute; left:2%; top:35%; font-family:'Comic Sans MS', cursive;\">Congratulations ".$_SESSION['uname'].", You Now Have an Additional Discount of 3%.</p>";
if($mypoints>=8000 && $mypoints<=9999)
echo "<p style=\"position:absolute; left:2%; top:35%; font-family:'Comic Sans MS', cursive;\">Congratulations ".$_SESSION['uname'].", You Now Have an Additional Discount of 5%.</p>";
if($mypoints>=10000 && $mypoints<=14999)
echo "<p style=\"position:absolute; left:2%; top:35%; font-family:'Comic Sans MS', cursive;\">Congratulations ".$_SESSION['uname'].", You Now Have an Additional Discount of 7%.</p>";
if($mypoints>=15000)
echo "<p style=\"position:absolute; left:2%; top:35%; font-family:'Comic Sans MS', cursive;\">Congratulations ".$_SESSION['uname'].", You Now Have an Additional Discount of 10%.</p>";
 ?>
<p style="position:absolute; left:2%; top:50%; font-family:'Comic Sans MS', cursive;">Description:-</p>
<table align="left" border="1" cols=2 cellspacing="0" style="position:absolute; left:0%; top:60%; border:thin border-color:#999;" >
<tr>
<th height="30" width="280" align="center">MyPoints</th>
<th height="30" width="280" align="center">Discount</th>
</tr>

<tr>
<td align="center">5000</td>
<td  align="center">3%</td>
</tr>
<tr>
<td align="center">8000</td>
<td  align="center">5%</td>
</tr>
<tr>
<td align="center">10000</td>
<td  align="center">7%</td>
</tr>
<tr>
<td align="center">15000</td>
<td  align="center">10%</td>
</tr>
</table>
</div>


<div id="feedback"><br />
<center><h3><font color="#555">Please Enter Your Feedback Here</font> </h3></center>
<br/>
<br />

<form method="post" action="feedback.php" name="feedback1" id="feedback1">
<?php
echo "<center><textarea  name=\"fd\" rows=\"5\" cols=\"37\"></textarea></center>
<br />";


?>
<center><a href="#" onclick="feedback()" ><img src="prodimg/submit.png" width="30%" height="10%" onmousedown="this.src='prodimg/submit1.png'" onmouseup="this.src='prodimg/submit.png'" /></a>
</form>


</div>


<div id="returns">

<?php
 $result2= mysql_query("select * from returns where username='".$_SESSION['uname']."'");
 $count = @mysql_num_rows($result2);
 if($count > 0)
 {
	 echo "<table align=\"left\" border=\"0\" cols=2 cellspacing=\"3\" style=\"position:absolute; left:2%; top:2%;\">";
echo "<tr>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Order Id</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Product Id</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Return Id</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Product Name</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Size</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Price</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Status</font></th>";
echo "</tr>";
 while($row2 = mysql_fetch_array($result2))
	{
	    $productid=$row2['pid'];
		$pname1=$row2['pname'];
		$status=$row2['status'];
		$rid=$row2['returnid'];
		$size123=$row2['size'];
		$price123=$row2['price'];
		$oid1=$row2['oid'];
		echo "<tr>";
		echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$oid1";
  echo "</td>";
		
		echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$productid";
  echo "</td>";
 echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$rid";
  echo "</td>";
   echo "<td height=\"50\" width=\"50\"align=\"center\" style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$pname1";
  echo "</td>";
   echo "<td height=\"50\" width=\"50\"align=\"center\" style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$size123";
  echo "</td>";
   echo "<td height=\"50\" width=\"50\"align=\"center\" style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$price123";
  echo "</td>";
   echo "<td height=\"50\" width=\"50\"align=\"center\" style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$status";
  echo "</td>";
  echo "</td>";
  
  echo "<tr>";
	}
 }
 else
 {
	 echo "Sorry,You havent returned any product";
 }
 ?>
 </table>
</div>

<div id="rid">
<a href="#"><img src="prodimg/close.png" alt="Close" style="height:6%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10" onclick="irid()" /> </a>

</div>

<div id="mycredits">
<?php
 $result5= mysql_query("select * from user where username='".$_SESSION['uname']."'");
 
 while($row333=mysql_fetch_array($result5))
 {
	 $credit=$row333['credits'];
 }
 if($credit==0)
 {
 echo "<p style=\"position:absolute; left:35%; top:40%; font-family:'Comic Sans MS', cursive;\">Hii '".$_SESSION['uname']."' you have 0 credits</p>";
 }
 else
 {
	  echo "<p style=\"position:absolute; left:25%; top:20%; font-family:'Comic Sans MS', cursive;\">Hii '".$_SESSION['uname']."' you have <b>$credit</b> credits</p>";
	   echo "<p style=\"position:absolute; left:15%; top:45%; font-family:'Comic Sans MS', cursive;\">You can now use your credits to buy the product's</p>";
 }
 ?>

</div>

<div id="apDiv47"><p style=" position:absolute; left:1%; top:1%; "> Latest Trends for You

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
	echo "<a href=\"http://localhost/shopmaniac/index.php\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \" ><p class=\"home\">Home</p></a>";
}
else
{
	echo "<a href=\"home.php\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \" ><p class=\"home\">Home</p></a>";
}
?>

<a href="myaccount.php" onmouseover="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; "><p class="account">MyAccount</p></a>";





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

<div id="trans">
</div>

</div>
</body>
</html>
