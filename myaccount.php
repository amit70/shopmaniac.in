<?php
session_start();
date_default_timezone_set('Asia/Calcutta');
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
		function rid(p,q,r,s,t,u,v,w,x,a,b)
		{
			var currentdate = new Date(); 
var datetime = currentdate.getFullYear() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getDay() + " "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes();
		
			document.getElementById('rid').style.visibility='visible';
			document.getElementById('trans').style.visibility='visible';
			document.getElementById('rid').style.opacity=100;
			document.getElementById('rid').innerHTML="";			
			document.getElementById('rid').innerHTML='<a href="#"><img src="prodimg/close.png" alt="Close" style="height:8%;width:4%;position:absolute;left:95.4%;top:0.3%;z-index:10" onclick="irid()" /> </a> <img src="prodimg/'+t+'" width=20% height=100% style="left:0%; top:0%;"/><p style="position:absolute; left:40%; top:-3%;" ><b>Order Id:</b> '+x+'</p> <p style="position:absolute; left:40%; top:15%;" ><b>Product Id:</b> '+p+'</p> <p style="position:absolute; left:40%; top:25%;" ><b>Product Name:</b> '+q+'</p> <p style="position:absolute; left:40%; top:34%;" ><b>Size:</b> '+r+'</p> <p style="position:absolute; left:40%; top:44%;" ><b>Return Price:</b> '+s+'</p> <p style="position:absolute; left:40%; top:6%;" ><b>Return Id:</b> '+u+'</p> <p style="position:absolute; left:40%; top:53%;"><b>Quantity:</b> '+a+' </p> <p style="position:absolute; left:40%; top:63%;"><b>Date Of Order:</b> '+b+' </p> <p style="position:absolute; left:40%; top:73%;"><b>Date Of Return:</b> '+datetime+' </p> <form method="post" action="return.php" name="returns"><input type="hidden" name="oidaaa" value="'+x+'"><input type="hidden" name="pidaaa" value="'+p+'"><input type="hidden" name="pnameaaa" value="'+q+'" ><input type="hidden" name="sizeaaa" value="'+r+'" ><input type="hidden" name="priceaaa" value="'+s+'"><input type="hidden" name="imageaaa" value="'+t+'"><input type="hidden" name="ridaaa" value="'+u+'" ><input type="hidden" name="quantaaa" value="'+a+'" ><input type="hidden" name="dooaaa" value="'+b+'" ><input type="hidden" name="doraaa" value="'+datetime+'" ><a href="#"  onclick="returnsaaa()"><img src="prodimg/confirmreturn.png" width="25%;" height="12%;" onmousedown="this.src=prodimg/confirmreturn1.png" onmouseup="this.src=prodimg/confirmreturn.png" style="position:absolute; left:50%; top:87%;" /></form>';
	     }
		
		function irid() {
			document.getElementById('rid').style.visibility='hidden';
			document.getElementById('trans').style.visibility='hidden';
		}
		
function updateprofile()
		{
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

function aaa1(amit)
{
	var x=document.getElementById('srch').value;
	if(x=="" || x==null || x=="search for your favourite brand and products")
	{
		alert("Please Enter Your Search");
		return false;
	}
    document.forms[amit].submit();
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
	height:350px;
	z-index:14;
	left: -200px;
	top: -175px;
	background-color:#F6F6F6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;

}

#profile {
	position:relative;
	width:162%;
	height:350px;
	left: -60px;
	top: -540px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
	visibility:visible;
	
}
#order {
	position:relative;
	width:162%;
	height:350px;
	left: -60px;
	top: -890px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
	visibility:hidden;
	overflow:scroll;
}
#mypoints {
	position:relative;
	width:162%;
	height:350px;
	left: -60px;
	top: -1240px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
	visibility:hidden;
	
}
#mycredits{
	position:relative;
	width:162%;
	height:350px;
	left: -60px;
	top: -2290px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
	visibility:hidden;
	
}
#feedback {
position:relative;
	width:162%;
	height:350px;
	left: -60px;
	top: -1590px;
	background-color:#f6f6f6;
	font-family:"Comic Sans MS", cursive;
	font-size:90%;
	visibility:hidden;
	
}
#returns{
position:relative;
	width:162%;
	height:350px;
	left: -60px;
	top: -1940px;
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
	left:45%;
	top:50%;
	margin-left:-25%;
	margin-top:-17.5%;
	width:60%;
	height:60%;
	border-style:solid;
	border-width:thick;
	border-color:#828282;
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
	top: -2120px;
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
	$result1= mysql_query("select * from user where username='".$_SESSION['uname']."'");
	
	while($row1 = mysql_fetch_array($result1))
	{
		$user1= $row1['username'];
		$pass=$row1['password'];
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
<form id="form1" name="src1" method="post" action="search.php">
   <label>
      <input type="text" name="srch" id="srch"  value="search for your favourite brand and products" style="position:absolute;  width: 33.3%; height: 33%; color:#D6D6D6; left:39.4%; top:55.2%; font-family:'Comic Sans MS', cursive"  onfocus="if (this.value == 'search for your favourite brand and products') this.value = 'search for your favourite brand and products';"
      onkeydown="if(this.value=='search for your favourite brand and products') this.value=''; this.style.color='#000'"  onblur="if (this.value == '') this.value = 'search for your favourite brand and products'; this.style.color='#D6D6D6'">
    </label>
    
  </form>
 <img src="prodimg/Search2.png" width="10%" height="54%" style="position:absolute; left:73%; top:51.2%;"  onmousedown="this.src='prodimg/Search1.png'" onmouseup="this.src='prodimg/Search2.png'" onclick="aaa1('src1')"/>



<a href="mytrolley2.php"><img src="prodimg/Trolley11.png" style="position:absolute; left:83%; top:40%;width:6%;height:60%" onmousedown="this.src='prodimg/Trolley12.png'" onmouseup="this.src='prodimg/Trolley11.png'">
<?php
echo "<p style=\"position:absolute; left:85%; top:75%; color:#555; font-size:75%;\">(".($no-1).")</p>";
?>
</a>



<span style=" float:left; position:absolute; left:57.5%; top:1%; font-size:75%; color:#717171; font-family:'Comic Sans MS', cursive">9773436955(24x7)&nbsp;&nbsp;&nbsp;|
</span>  
 <img src="prodimg/Fullscreen capture 7182012 14722 PM.gif"  style="position:absolute; left:54.5%; top:5%; height:15%; width:2%;"/>
 
<span style=" float:left; position:absolute; left:77.5%; top:1%; font-size:75%; color:#717171; font-family:'Comic Sans MS', cursive">support@shopmaniac.in |</span>
<img src="prodimg/Email-Lists-Canada-11.jpg" style="position:absolute; height:18%; width:3%; left:74%; top:3%;"/>


<p style="position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive"><a href="index.php" onmouseover="this.style.color = '#DF7000'" onmouseout="this.style.color = '#717171'"  style="text-decoration:none; color:#717171;">SignOut</a></p>

<a href="#"><img src="prodimg/Account11.png" style="position:absolute; left:94.5%; top:39%;width:6%;height:60%" onmousedown="this.src='prodimg/Account12.png'" onmouseup="this.src='prodimg/Account11.png'"></a>


<a href="home.php"><img src="prodimg/Home1.png" style="position:absolute; left:89.5%; top:40%;width:4.5%;height:60%" onmousedown="this.src='prodimg/Home2.png'" onmouseup="this.src='prodimg/Home1.png'"></a>

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
<form method="POST" action="update.php" name="up1" id="up1" >
<?php
echo "<input type=\"hidden\" name=\"flag\" value=\"0\" />";

?>
  <table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:8%; top:2%;">
  <tr>
  <td height="33" width="55%"><center><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">Full Name:</font></center></td>
    
    <?php
	echo "<td><font face=\"Comic Sans MS, cursive\" font size=\"4%\" color=\"#555\">$user1</font></td>";
  echo "<td><input type=\"hidden\" name=\"Username\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"Username\"  value=\"$user1\"></td>";
  ?>
  </tr>  
  <tr>
  <td height="33"><label><center><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">Address:</font></label></td>
  <?php
  if($addr=="" || $addr=="NULL")
  {
	  echo "<td><textarea rows=\"4\" cols=\"30\" name=\"Addr\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"Addr\"/></textarea></td>";
  }
  else
  {
  echo "<td><textarea rows=\"4\" cols=\"30\" name=\"Addr\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"Addr\"/>$addr</textarea></td>";
  }
  ?>
  </tr>
  
  <tr>
  <td height="33"><label for="Telephone"><center><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">Mobile No:</font></label></td>
   <?php
   if($cont=="" || $cont=="NULL")
   {
	      echo "<td><input type=\"text\" name=\"Telephone\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"Telephone\"></td>";
   }
   else
   {
   echo "<td><input type=\"text\" name=\"Telephone\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"Telephone\" value=\"$cont\" /></td>";
   }
   ?>
  </tr>
  
  <tr>
  <td height="33"><label for="E-mail"><center><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">E-mail:</font></label></td>
  <?php
  echo "<td><input type=\"text\" name=\"email\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"email\" value=".$email." /></td>";
  ?>
  </tr>
</table>  
<a href="#" onclick="updateprofile()"><img src="prodimg/updateprofile.png" width="22%" height="10%" style="position:absolute; left:18%; top:89%;" onmousedown="this.src='prodimg/updateprofile1.png'" onmouseup="this.src='prodimg/updateprofile.png'"/></a>
</form>




<div id="updpass" style="visibility:hidden; position:absolute; left:0%;top:60%;height:30%;width:100%; ">
<form name="updpwd" id="updpwd"method="post" action="update.php">  
<?php
echo "<input type=\"hidden\" name=\"flag\" value=\"1\" />  ";
?>
<table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:8%; top:2%;">
<tr>	
  <td height="33" width="65%"><center><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">Password:</font></td>
    <?php
	echo "<input type=\"hidden\" name=\"Username\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"Username\" readonly=\"readonly\" value=".$user1.">";
  echo "<td><input type=\"password\" name=\"pass1\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"pass1\" value=\"$pass\"></td>";
   ?>
   </tr>
 
 <tr>
  <td height="33" width="65%"><center><font face="Comic Sans MS, cursive"
	font size="4%" color="#555">Confirm Password:</font></td>
    
    <?php
  echo "<td><input type=\"password\" name=\"pass2\" style=\"font-family:'Comic Sans MS', cursive;\" id=\"pass2\" value=\"$pass\"></td>";
  ?>
  <td>
    </tr>
  <a href="#" onclick="updatepass()"><img src="prodimg/updatepassword.png" width="20%" height="33%" style="position:absolute; left:44%; top:97%;" onmousedown="this.src='prodimg/updatepassword1.png'" onmouseup="this.src='prodimg/updatepassword.png'" /></a>	 
</table> 
 </form>
</div>

<a href="#" onclick="document.getElementById('updpass').style.visibility='visible';"><img src="prodimg/editpass.png" width="20%" height="10%" style="position:absolute; left:68%; top:89%;" onmousedown="this.src='prodimg/editpass1.png'" onmouseup="this.src='prodimg/editpass.png'"/></a>
</div>

<div id="order">
   <?php
  $i=1;
  //$id=array();
 $result2= mysql_query("select * from orders where username='".$_SESSION['uname']."' ORDER BY DOO DESC");
//$result5=mysql_query("select * from track where username='".$_SESSION['uname']."'");
 
 $count = @mysql_num_rows($result2);
 if($count > 0)
 {
	echo "<table align=\"left\" border=\"0\" cols=2 cellspacing=\"3\" style=\"position:absolute; left:1%; top:2%;\">";
  echo "<tr>";
    echo "<th  width=\"90\"><font color=\"#555\"></font></th>";
    echo "<th  width=\"90\"><font color=\"#555\">Date Of Order</font></th>";
    echo "<th  width=\"90\"><font color=\"#555\">Order Id</font></th>";
	echo "<th  width=\"90\"><font color=\"#555\">Product Id</font></th>";
  echo "<th width=\"90\"><font color=\"#555\">Name</font></th>";
  echo "<th  width=\"90\"><font color=\"#555\">Size</font></th>";
  echo "<th  width=\"90\"><font color=\"#555\">Price</font></th>";
    echo "<th  width=\"90\"><font color=\"#555\">Quantity</font></th>";
	    echo "<th  width=\"90\"><font color=\"#555\">Shipping</font></th>";
  echo "<th  width=\"90\"><font color=\"#555\">Mypoints Disc</font></th>";
    echo "<th  width=\"90\"><font color=\"#555\">Individual Price</font></th>";
    echo "<th  width=\"90\"><font color=\"#555\">Credits</font></th>";
 echo "<th  width=\"90\"><font color=\"#555\">Final Price</font></th>";
  echo "</tr>";
 while($row2 = mysql_fetch_array($result2))
	{
	 		
	    $pid1=$row2['pid'];
		$pname1=$row2['pname'];
		$size1=$row2['size'];
		$price1=$row2['discountprice'];
		$price=$row2['price'];
		$image=$row2['image'];
		$rid=$row2['returnid'];
		$flag=$row2['flag'];
		$date=$row2['DOO'];
		$totalprod=$row2['totalprod'];
		$oid1=$row2['orderid'];
		$mypointsdisc=$row2['mypointsdisc'];
		$discountprice=$row2['discountprice'];
		$quant=$row2['quantity'];
		$shipping=$row2['shipping'];
		$final=$row2['finalAmt'];
		$credits=$row2['credits'];
		
	if($flag==0)
	{
			echo "<tr>";
		
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
		    echo "<img src='prodimg/$image' width=100% height=100%";
  			echo "</td>";
  
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
  			echo "$price";
  			echo "</td>";
	
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$quant";
  			echo "</td>";
	
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$shipping";
  			echo "</td>";
		
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$mypointsdisc";
  			echo "</td>";	
  				
  			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$discountprice";
  			echo "</td>";	
 						
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$credits";
  			echo "</td>";	
 			
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$final";
  			echo "</td>";
			
			if($credits==0 || $credits==NULL)
			{
			echo "<td>";
			echo "<a href=\"#\" id =\"returnsaaa".$i."\" onclick=\"rid('$pid1','$pname1','$size1','$discountprice','$image','$rid','".$_SESSION['uname']."','returnsaaa".$i."','$oid1','$quant','$date')\" style=\"font-size:80%;\">Return</a>";
  			echo "</td>";
			}
			else
			{
				echo "<td>";
			echo "<a href=\"#\" id =\"returnsaaa".$i."\" onclick=\"rid('$pid1','$pname1','$size1','$final','$image','$rid','".$_SESSION['uname']."','returnsaaa".$i."','$oid1','$quant','$date')\" style=\"font-size:80%;\">Return</a>";
  			echo "</td>";
			}
  			echo "<tr>";
  			  			
	}
	else
	{
		    echo "<tr>";
		
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
		    echo "<img src='prodimg/$image' width=100% height=100%";
  			echo "</td>";
  
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
  			echo "$price";
  			echo "</td>";
	
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$quant";
  			echo "</td>";
	
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$shipping";
  			echo "</td>";
		
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$mypointsdisc";
  			echo "</td>";	
  
  			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$discountprice";
  			echo "</td>";
			
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$credits";
  			echo "</td>";	
 			
			echo "<td height=\"50\" width=\"50\" align=\"center\">";
  			echo "$final";
  			echo "</td>";
 			echo "<td>";
			
  			echo "<tr>";
  			
	}
}
 }
else
{
	echo "<p style=\"position:absolute; left:30%; top:30%;\">Hi ".$_SESSION['uname'].",You Haven't made any Orders Yet.</p>";
}
 
 ?>
 </table>

</div>

<div id="mypoints">
<p style="position:absolute; left:30%; top:1%; font-family:'Comic Sans MS', cursive;">You Have given FREE <b>500</b> SIGNUP POINTS</p>
<table align="left" border="0" cols=2 cellspacing="3" style="position:absolute; left:40%; top:15%">
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
  echo "<b>$mypoints</b>";
  echo "</td>";
  echo "<tr>";
		
	}
		
 ?>
 </table>
 <?php
 if($mypoints>=5000 && $mypoints<=7999)
echo "<p style=\"position:absolute; left:15%; top:35%; font-family:'Comic Sans MS', cursive;\">Congratulations ".$_SESSION['uname'].", You Now Have an Additional Discount of <b>3%</b>.</p>";
if($mypoints>=8000 && $mypoints<=9999)
echo "<p style=\"position:absolute; left:15%; top:35%; font-family:'Comic Sans MS', cursive;\">Congratulations ".$_SESSION['uname'].", You Now Have an Additional Discount of <b>5%</b>.</p>";
if($mypoints>=10000 && $mypoints<=14999)
echo "<p style=\"position:absolute; left:20%; top:35%; font-family:'Comic Sans MS', cursive;\">Congratulations ".$_SESSION['uname'].", You Now Have an Additional Discount of <b>7%</b>.</p>";
if($mypoints>=15000)
echo "<p style=\"position:absolute; left:20%; top:35%; font-family:'Comic Sans MS', cursive;\">Congratulations ".$_SESSION['uname'].", You Now Have an Additional Discount of <b>10%</b>.</p>";
 ?>
<p style="position:absolute; left:15%; top:50%; font-family:'Comic Sans MS', cursive;">Description:-</p>
<table align="left" border="1" cols=2 cellspacing="0" style="position:absolute; left:15%; top:60%; border:thin border-color:#999;" >
<tr>
<th height="30" width="250" align="center">MyPoints</th>
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
<center><a href="#" onclick="feedback()" ><img src="prodimg/submit.png" width="20%" height="10%" onmousedown="this.src='prodimg/submit1.png'" onmouseup="this.src='prodimg/submit.png'" /></a>
</form>


</div>


<div id="returns">

<?php
 $result2= mysql_query("select * from returns where username='".$_SESSION['uname']."' ORDER BY DOR DESC");
 $count = @mysql_num_rows($result2);
 if($count > 0)
 {
	 echo "<table align=\"left\" border=\"0\" cols=2 cellspacing=\"3\" style=\"position:absolute; left:2%; top:2%;\">";
echo "<tr>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\"></font></th>";

echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Date Of Return</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Return Id</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Order Id</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Product Id</font></th>";

echo "<th height=\"30\" width=\"200\" align=\"center\"><font color=\"#555\">Product Name</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Size</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Price</font></th>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Quantity</font></th>";
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
		$image=$row2['image'];
		$doo=$row2['DOO'];
		$dor=$row2['DOR'];
		$quant=$row2['quantity'];
		echo "<tr>";
		
		echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "<img src='prodimg/$image' width=100% height=100%>";
  echo "</td>";
  
  
  
  echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$dor";
  echo "</td>";
  
  
  echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$rid";
  echo "</td>";
  
		echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$oid1";
  echo "</td>";
		
		 
  
		echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$productid";
  echo "</td>";

   echo "<td height=\"50\" width=\"100\"align=\"center\" style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$pname1";
  echo "</td>";
   echo "<td height=\"50\" width=\"50\"align=\"center\" style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$size123";
  echo "</td>";
   echo "<td height=\"50\" width=\"50\"align=\"center\" style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$price123";
  echo "</td>";
  echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$quant";
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
	 echo "<p style=\"position:absolute; left:30%; top:30%;\">Sorry,You havent returned any product</p>";
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
 
 
 $result2= mysql_query("select * from credits where username='".$_SESSION['uname']."' ORDER BY date DESC");
 $count = @mysql_num_rows($result2);
 if($count > 0)
 {
	  echo "<p style=\"position:absolute; left:25%; top:0%; font-family:'Comic Sans MS', cursive;\">Hii '".$_SESSION['uname']."' you have <b>$credit</b> credits</p>";
	  
	 echo "<table align=\"left\" border=\"0\" cols=2 cellspacing=\"3\" style=\"position:absolute; left:2%; top:10%;\">";
echo "<tr>";
echo "<th height=\"30\" width=\"150\" align=\"center\"><font color=\"#555\">Date</font></th>";
echo "<th height=\"30\" width=\"300\" align=\"center\"><font color=\"#555\">Process</font></th>";
echo "<th height=\"30\" width=\"50\" align=\"center\"><font color=\"#555\">Credit</font></th>";
echo "<th height=\"30\" width=\"50\" align=\"center\"><font color=\"#555\">Debit</font></th>";
echo "<th height=\"30\" width=\"50\" align=\"center\"><font color=\"#555\">Balance</font></th>";
echo "</tr>";
 while($row2 = mysql_fetch_array($result2))
	{
	    $date=$row2['date'];
		$process=$row2['process'];
		$credit=$row2['credit'];
		$debit=$row2['debit'];
		$balance=$row2['balance'];
		
		echo "<tr>";
		  
  echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$date";
  echo "</td>";
  
  
  echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$process";
  echo "</td>";
  
		echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$credit";
  echo "</td>";
		  
		echo "<td height=\"50\" width=\"50\"align=\"center\"  style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$debit";
  echo "</td>";

   echo "<td height=\"50\" width=\"100\"align=\"center\" style=\"font-family:'Comic Sans MS', cursive\">";
  echo "$balance";
  echo "</td>";
  echo "<tr>";
	}
 }
 else
 {
	 echo "<p style=\"position:absolute; left:30%; top:40%; font-family:'Comic Sans MS', cursive;\">Hii '".$_SESSION['uname']."' you have <b>$credit</b> credits</p>";
	 
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
	echo "<a href=\"index.php\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \" ><p class=\"home\">Home</p></a>";
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
echo "<input type=\"text\" name=\"contact1\" id=\"contact1\" style=\"position:absolute; top:59%; left:77%; color:#CCC; width:17%; height:5%; border:#F60\"  value=\"Enter your Email-Id\" onfocus=\"if (this.value == 'search for your favourite brand and products') this.value = 'Enter your Email-Id';\"
      onkeydown=\"if(this.value=='Enter your Email-Id') this.value=''; this.style.color='#000'\"  onblur=\"if (this.value == '') this.value = 'Enter your Email-Id'; this.style.color='#D6D6D6' \" />";

?>
</form>
<a href="#" onClick="contact123()"><img src="prodimg/submit.png" width="10%" height="5%" onMouseDown="this.src='prodimg/submit1.png'" onMouseUp="this.src='prodimg/submit.png'" style="position:absolute; top:58.5%; left:94.5%; color:#CCC; width: 5%; height:6%;"  /></a>


<a href="mypoints.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:19%; top:33%; font-family:'Comic Sans MS', cursive" >MyPoints</a>
<a href="t-shirts.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:61%; top:48%; font-family:'Comic Sans MS', cursive" >T-Shirts</a>


<a href="mycredits.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:19%; top:39%; font-family:'Comic Sans MS', cursive" >MyCredits</a>
<a href="cancelorder.php" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; position:absolute; left:36%; top:53%; font-family:'Comic Sans MS', cursive;" >Cancel Order</a>
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
