<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
		
//----------------------------------------------------------------------------------------
function mytrol()
{
	document.forms["trol"].submit();
}
			function aaa(amit)
{
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
function validateForm()
{
var x=document.forms["register"]["Username"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out");
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
  alert("contact must be filled out");
  return false;
  }
var x=document.forms["register"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
var x=document.forms["register"]["pwd"].value;
if (x==null || x=="")
  {
  alert("please enter password");
  return false;
  }
var y=document.forms["register"]["cpwd"].value;
if (y==null || y=="")
  {
  alert("please enter password");
  return false;
  }
if(x!=y)
	{
	alert("Your password and confirmation password do not match");
  	return false;	
	}



}


function validateForm1()
{

  var x=document.forms["login123"]["Username"].value;
if (x==null || x=="")
  {
  alert("please enter Username");
  return false;
  }
var y=document.forms["login123"]["pwd123"].value;
if (y==null || y=="")
  {
  alert("please enter password");
  return false;
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
			img[0]="images/slider-1.png";
			img[1]="images/slider-2.jpg";
			img[2]="images/slider-3.jpg";
			img[3]="images/slider-4.jpg";
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
			document.getElementById('wid').innerHTML="";
			document.getElementById('wid').innerHTML='<a href="'+lnk[i]+'"><img src="'+img[i]+'" id="banner" style="position:relative;width:100%;height:100%;left:0;top:0;"></a>';
		}
		else
		{
			i=3;
			document.getElementById('wid').innerHTML="";
			document.getElementById('wid').innerHTML='<a href="'+lnk[i]+'"><img src="'+img[i]+'" id="banner" style="position:relative;width:100%;height:100%;left:0;top:0;"></a>';
		}
	}
	function next()
	{
		
		
		i++;
		if(i<=3)
		{
			document.getElementById('wid').innerHTML="";
			document.getElementById('wid').innerHTML='<a href="'+lnk[i]+'"><img src="'+img[i]+'" id="banner" style="position:relative;width:100%;height:100%;left:0;top:0;"></a>';
		}
		else
		{
			i=0;
			document.getElementById('wid').innerHTML="";
			document.getElementById('wid').innerHTML='<a href="'+lnk[i]+'"><img src="'+img[i]+'" id="banner" style="position:relative;width:100%;height:100%;left:0;top:0;"></a>';
		}
	}
	window.setInterval("next()",4000);
	
		
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
				margin-top:4%;
				margin-left:-5%;
				padding: 0 0 0 10px;
				list-style-type: none;
				font-size: 13px;
				background:#eee;
				height: 40px;
				width:110%;
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
   				background-color:#FFC082;
			    font-size:16px;
				z-index:10;}
			#menu li a {
				text-decoration: none;
				display: block;
				padding: 0 20px;
				line-height: 40px;
				
				
			}
			#menu li:hover li, #menu li.hover li { float: none; }
			#menu li a:hover, #menu li.active a {
				background-color:#333;
				
				
			}
			
			#menu li:hover ul, #menu li.hover ul {
   				display: block;
   				position: absolute;
   				margin: 0;
   				padding: 0; }
			
			#menu li:hover li, #navbar li.hover li {
   				float: none; }
			
			#menu.black {
				
				border-bottom: 1px solid #DF7000;
				border-right: 1px solid #DF7000;
				background-color:#000;
				}
			#menu.black a {color:#FFF;}
			#menu.black li a:hover, #menu.black li.active a {color:#FFAD5B;
			background-color:#000;
			
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
				opacity: 0.4;
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
	font-family:"Comic Sans MS", cursive
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
	border-style:solid;
	border-width:thin;
	border-color:#333;
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
	top: 25%;
	 
	color:#FFF;
}
#apDiv27
{
	position:absolute;
	width:15%;
	height:71%;
	z-index:1;
	left: 2%;
	top: 25%;
	
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
	top: 100%;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#F4F4F4;
}
#apDiv30 {
	position:absolute;
	width:100%;
	height:37px;
	z-index:1;
	background-color:#F6F6F6;
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
	border-color:#F4F4F4;
}
#apDiv32 {
	position:absolute;
	width:100%;
	height:37px;
	z-index:1;
	background-color:#F6F6F6;
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
	border-color:#F4F4F4;
}
#apDiv34 {
	position:absolute;
	width:100%;
	height:37px;
	z-index:1;
	background-color:#F6F6F6;
}
#apDiv35 {
	position:absolute;
	width:16%;
	height:72%;
	z-index:14;
	left: 2%;
	top: 292%;
	border-color:#EBEBEB;
	border-style:solid;
	border-width:thin;
	
}
#apDiv36 {
	position:absolute;
	width:62%;
	height:72%;
	z-index:15;
	left: 19%;
	top: 292%;
	border-style:solid;
	border-width:thin;
	border-color:#EBEBEB;
}
#apDiv37 {
	position:absolute;
	width:15%;
	height:72%;
	z-index:14;
	right:2%;
	top: 292%;
	border-style:solid;
	border-width:thin;
	border-color:#EBEBEB;
}
#apDiv38 {
	position:absolute;
	width:50%;
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
	position:absolute;
	width:96%;
	height:47%;
	z-index:13;
	left:2%;
	top: 243.5%;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#F4F4F4;
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
	top:50%;
	left:50%;
	width:55%;
	height:70%;
	margin-top:-35%;
	margin-left:-25%;
	visibility:hidden;
	z-index:10000;
	background-color:#FFF;
	border:thin;
	border-style:solid;
	border-color:#666;
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
	position:absolute;
	left:17.5%;
	top:25%;
	width:65%;
	height:73%;
	z-index:1;
}

#wid
{
	position:absolute;
	left:0;
	top:0;
	width:100%;
	height:100%;
}	
</style>

</head>

<body onload="preload()">
<div id="widget">
<a href="#"><img src="img/prev.png" style="position:absolute;left:0;top:50%;width:3%;height:10%;z-index:150;margin-top:-5%;" onclick="prev()"  onmousedown="this.src='img/prev1.png'" onmouseup="this.src='img/prev.png'"/></a>
<a href="#"><img src="img/next.png" style="position:absolute;right:0;top:50%;width:3%;height:10%;z-index:150;margin-top:-5%;" onclick="next()" onmousedown="this.src='img/next1.png'" onmouseup="this.src='img/next.png'"/></a>
<div id="wid">
<a href="#"><img src="images/slider-1.png" id="banner" style="position:relative;width:100%;height:100%;left:0;top:0;opacity:1"></a>
</div>
</div>

<div name="transdiv" id="logdiv">
<a href="#"><img src="close.png" alt="Close" style="height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10" onclick="ilogtr()" /> </a>

<div id="logdiv1" onmouseover="login()">
<h3 align="center"><font face="Georgia, Times New Roman, Times, serif" color="#666666">Login</font></h3>

<form method="POST" action="http://localhost/check.php" onsubmit="return validateForm1()" name="login123">
  <table align="left" border="0" cols=2 cellspacing="3" style="position:absolute; left:2%; top:15%">
  <tr>
  <td height="25"><font color="#666666">Username:</font></td>
  <td><input type="text" name="Username" id="Username"></td>
  </tr>
  <tr>
  <td><label for="Password"><font color="#666666">Password:</font></label></td>
  <td><input type="password" name="pwd123" id="pwd123" /></td>
  </tr>
  </table>
  <input type="hidden" name="flag" value="0" />
 <input type="submit" name="submit" id="submit" value="LOG-IN" style=" position:absolute; left:60%; top:33%;"/>
</form>
</div>

<div id="logdiv2" onmouseover="reg()">
<h3 align="center"><font face="Georgia, Times New Roman, Times, serif" color="#666666">Register</font></h3>
<form method="POST" action="http://localhost/Divert.php" name="register" onsubmit="return validateForm()">
  <table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:2%; top:15%">
  <tr>
  <td height="25"><font color="#666666">Username:</font></td>
  <td><input type="text" name="Username" ></td>
  </tr>
  <tr>
  <td><label for="Password"><font color="#666666">Password: </font></label></td>
  <td><input type="password" name="pwd" id="pwd" /></td>
  </tr>
  <tr>
  <td><label for="Full Name"><font color="#666666">Full Name:</font></label></td>
  <td><input type="text" name="Name" id="Name" /></td>
  </tr>
  <tr>
  <td><label><font color="#666666">Address</font></label></td>
  <td><textarea rows="4" cols="16" name="address" id="address"></textarea></td>
  
  </tr>
  <tr>
  <td><label for="Telephone"><font color="#666666">Contact:</font></label></td>
  <td><input type="text" name="Telephone" id="Telephone" /></td>
  </tr>
  <tr>
  <td><label for="E-mail"><font color="#666666">E-mail:</font></label></td>
  <td><input type="text" name="email" id="email" /></td>
  </tr>
  </table>

<p>&nbsp;</p>
  
<input type="submit" name="submit" id="submit" value="Submit" style=" position:absolute; left:50%; top:85%;"/>

</form>

</div>
</div>

<div id="apDiv42">
<p style="position:absolute; left:0%; top:-20%;"><img src="prodimg/Title.png" height="115%" width="40%" />	</p>



  <form id="form1" name="form1" method="post" action="">
    <label>
      <input type="text" name="textfield" id="textfield"  value="search for your favourite brand and products" style="position:absolute;  width: 32.2%; height: 33%; color:#979797; left:40%; top:55%; font-family:'Comic Sans MS', cursive"  onfocus="if (this.value == 'search for your favourite brand and products') this.value = '';" onblur="if (this.value == '') this.value = 'search for your favourite brand and products';">
    </label>
  </form>
  <img src="prodimg/Search2.png" width="10%" height="54%" style="position:absolute; left:72%; top:50%;" onmouseover="this.src='prodimg/Search1.png'" onmouseout="this.src='prodimg/Search2.png'" onmousedown="this.src='prodimg/Search2.png'" onmouseup="this.src='prodimg/Search1.png'"/>


<form method="get" action="http://localhost/mytrolley2.php" id="trol" name="trol">
<?php
echo "<input type=\"hidden\" name=\"uname\" value=\"\" >";
?>
</form>
<a href="#" onclick="mytrol()"><img src="img/Trolley11.png" style="position:absolute; left:83%; top:40%;width:6%;height:60%" onmousedown="this.src='img/Trolley12.png'" onmouseup="this.src='img/Trolley11.png'"></a>

<a href="#" onclick="logtr()"><img src="img/Account11.png" style="position:absolute; left:94.5%; top:39%;width:6%;height:60%" onmousedown="this.src='img/Account12.png'" onmouseup="this.src='img/Account11.png'"></a>

<a href="#"><img src="img/Home1.png" style="position:absolute; left:89.5%; top:40%;width:4.5%;height:60%" onmousedown="this.src='img/Home2.png'" onmouseup="this.src='img/Home1.png'"></a>

<p style="position:absolute; left:50%; top:-16%; font-size:80%; color:#717171; font-family:'Comic Sans MS', cursive">Hi,Guest    | </p>


<p style="position:absolute; left:61%; top:-16%; font-size:73%; color:#717171; font-family:'Comic Sans MS', cursive">9773436955(24x7)&nbsp;&nbsp;&nbsp;|
</p>  
 <img src="Fullscreen capture 7182012 14722 PM.gif"  style="position:absolute; left:58%; top:1%; height:15%; width:2%;"/>


<p style="position:absolute; left:80%; top:-16%; font-size:70%; color:#717171; font-family:'Comic Sans MS', cursive">amit.rajula@gmail.com |</p>
<img src="Email-Lists-Canada-11.jpg" style="position:absolute; height:15%; width:2%; left:77%; top:1%;"/>

<p style="position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive"><a href="#" onmouseover="this.style.color = '#8C4600'" onmouseout="this.style.color = '#717171'" onclick="logtr()" style="text-decoration:none; color:#717171;">SignIn</a></p>
</div>



</div>


<form method="post" action="http://localhost/formalshirts.php" id="sss" name="sss">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/trousers.php" id="trousers" name="trousers">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/cs.php" id="cs" name="cs">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/jeans.php" id="jeans" name="jeans">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/t-shirts.php" id="t-shirts" name="t-shirts">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/sportsshoes.php" id="ss" name="ss">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/casualshoes.php" id="casualshoes" name="casualshoes">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/formalshoes.php" id="formalshoes" name="formalshoes">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/sf.php" id="sf" name="sf">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<ul id="menu" class="black">
			<li><a href="#" style="font-family:'Comic Sans MS', cursive"><b>Men</b></a>
           <ul>
           		
                
                <a href="#" onclick="aaa('sss')" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Formal Shirts</a>
                <a href="#" onclick="aaa('trousers')" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Trousers</a>
                <a href="#" onclick="aaa('cs')" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Casual Shirts</a>
                <a href="#" onclick="aaa('jeans')" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Jeans</a>
                <a href="#" onclick="aaa('t-shirts')" style="font-size:12px; font-family:'Comic Sans MS', cursive;">T-shirts</a>
           
                </li>
                </ul>
                </li>
              <li><a href="#" style="font-family:'Comic Sans MS', cursive"><b>FootWear</b></a>
              <ul>  
                
                <a href="#" onclick="aaa('ss')" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Sports Shoes</a>
                <a href="#" onclick="aaa('casualshoes')" style="font-size:12px;font-family:'Comic Sans MS', cursive;">Casual Shoes</a>
                <a href="#" onclick="aaa('formalshoes')" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Formal Shoes</a>
                <a href="#" onclick="aaa('sf')" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Slippers and Flip Flop's</a>
              </ul>
          </li>
                
                <li><a href="www.google.com" style="font-family:'Comic Sans MS', cursive"><b>Accessories</b></a>
                <ul>
                 <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Wallets</a>
                 <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Goggles</a>
                 <a href="www.google" style="font-size:12px;font-family:'Comic Sans MS', cursive;">Caps</a>
                 <a href="www.google" style="font-size:12px;font-family:'Comic Sans MS', cursive;">Ties & Couplings</a>         </ul>
  </li>
         
			<li><a href="#" style="font-family:'Comic Sans MS', cursive"><b>HomeWare</b></a>
            <ul>
            <a href="www.google" style="font-size:12px;font-family:'Comic Sans MS', cursive; ">Aquasafe</a>
            <a href="www.google" style="font-size:12px;font-family:'Comic Sans MS', cursive; ">Canisters</a>
            <a href="www.google" style="font-size:12px;font-family:'Comic Sans MS', cursive; ">dry storage </a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Food Preparation</a>            <a href="www.google" style="font-size:12px; ">Freezer</a>
            <a href="www.google" style="font-size:12px;font-family:'Comic Sans MS', cursive; ">refridgerator</a>
            <a href="www.google" style="font-size:12px;font-family:'Comic Sans MS', cursive; ">lunch 'n' outdoor</a>
            <a href="www.google" style="font-size:12px;font-family:'Comic Sans MS', cursive; ">Microwave</a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Serving</a>
            </ul>
            </li>
            
			<li><a href="#" style="font-family:'Comic Sans MS', cursive">Brands</a>
            <ul>
            <a href="www.google" style="font-size:12px;" font-family:'Comic Sans MS', cursive;>Arrow</a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Blackbeers</a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Spykar</a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Pepe</a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Levis</a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Jack n Jones</a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Tommy</a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Espirit</a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Buckarro</a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">Provogue</a>
            <a href="www.google" style="font-size:12px; font-family:'Comic Sans MS', cursive;">nike</a>
            </ul>
			</li>
            
</ul>
<div id="apDiv29">
 <div id="apDiv30">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#333; font-variant:small-caps;">Apparels</p>
  </div>
  
  <div  style="position:absolute; left:3%; top:15%;width:17%; height:80%; background-color:#FAFAFA;">
  <img src="prodimg/p4.jpg" width="96%" height="60%" style="position:absolute; top:1%; left:2%;" />
  <p style="position:absolute; top:63%; left:2%; font-family:'Comic Sans MS', cursive; color:#03C; font-size:80%;">Spykar Casual Shirt</p>
  <p style="position:absolute; left:5%; top:75%; font-family:Verdana, Geneva, sans-serif;  color:#F00; font-size:0.7em; text-decoration:line-through;">Rs.800 </p>
  <p style="position:absolute; left:46%; top:75%; font-family:Verdana, Geneva, sans-serif;  color:#F00; font-size:60%;">Rs.600 </p>
  </div>
    <div  style="position:absolute; left:21%; top:15%;width:17%; height:80%; background-color:#FAFAFA;">
  <img src="prodimg/p4.jpg" width="96%" height="60%" style="position:absolute; top:1%; left:2%;" />
  <p style="position:absolute; top:63%; left:10%; font-family:'Comic Sans MS', cursive;  color:#03C; font-size:80%;">Pepe Jeans</p>
  <p style="position:absolute; left:38%; top:75%; font-family:Verdana, Geneva, sans-serif;  color:#F00; font-size:80%;">Rs.800 </p>
  </div>
</div>

<div id="apDiv31">
  <div id="apDiv32">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#333; font-variant:small-caps;">Accessories</p>
  </div>
</div>

<div id="apDiv33">
  <div id="apDiv34">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#333; font-variant:small-caps;">Home-Kitchen</p>
</div>
</div>
<p>&nbsp;</p>
<p>
  <!--<ul id="navbar">
  <li><a href="#" onmouseover="this.style.background = '#7A991A'" onmouseout="this.style.background = '#333'">&nbsp;Brands</a>
  		<ul>
            <li><a href="#">Subitem One</a></li>
            <li><a href="www.google.com">Second Subitem</a></li>
            <li><a href="#">Numero Tres</a></li>
        </ul>
  </li>
  <li>  <a href="#Contact Us" onmouseover="this.style.background = '#7A991A'" onmouseout="this.style.background = '#333'">WOMEN</a></li>
  <li><a href="#Accessories" onmouseover="this.style.background = '#7A991A'" onmouseout="this.style.background = '#333'">Accessories</a></li>
  <li><a href="#Brands" onmouseover="this.style.background = '#7A991A'" onmouseout="this.style.background = '#333'">&nbsp;&nbsp;Home-Kitchen</a></li>
  <li><a href="#Brands" onmouseover="this.style.background = '#7A991A'" onmouseout="this.style.background = '#333'">&nbsp;Brands</a></li>
</ul>
-->
</p>
<div id="apDiv27" style="border-style:solid; border-width:thin; border-color:#EBEBEB;">

 </div>
           
<div id="apDiv24" style="border-style:solid; border-width:thin; border-color:#EBEBEB;">
<img src="prodimg/tupp.png" width="100%" height="33%" style="position:absolute; left:0%; top:0%;" />
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

 
<div id="apDiv37" style="border-style:solid; border-width:thin; border-color:#333; background-color:#333;">
<p style="text-align:center; position:relative; top:-16px; color:#999;font-weight:bold; font-family:'Comic Sans MS', cursive;">Feedback</p>
<div style=" width:100%; height:93%;background-color:#FCFCFC; position:absolute; left:-0.5%; top:8%; border-style:double; border-top:thin; border-top-color:#75AEE8;border-width:thin; border-color:#EAEAEA" >
 
 <marquee width="100%"; height="93%" scrollamount="3" bgcolor="" direction="up"  ONMOUSEOVER="this.stop();" ONMOUSEOUT="this.start();"> 
            <?php
/*$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from feedback");
while($row =mysql_fetch_array($qry))
{
	$res=$row['response'];
	$user=$row['username'];
	echo "$user:$res ";
	echo "<hr/>";
}*/
?>
        </marquee>
</div>
</div>

<div id="apDiv19">
  <div id="apDiv41">
  <p style="font-size:230%; position:relative; left:1%; top:-120%; font-family:'Comic Sans MS', cursive; color:#333; font-variant:small-caps;">Footwear</p>
</div>
</div>

<div id="apDiv35">
<img src="prodimg/Picture1.png" width="110%" height="30%" style="position:absolute; top:0%; left:0%;"/>
<img src="prodimg/Picture2.png" width="110%" height="30%" style="position:absolute; top:25%; left:0%;"/>
<img src="prodimg/Picture4.png" width="110%" height="30%" style="position:absolute; top:50%; left:0%;"/>
<img src="prodimg/Picture3.png" width="115%" height="30%" style="position:absolute; top:75%; left:-10%;"/>
</div>

<div id="apDiv36">
<img src="prodimg/Pepe-Jeans.jpg" width="65%" height="50%" />
<img src="prodimg/tupperware (1).jpg" width="34%" height="50%" />
<img src="prodimg/Hilfiger-Friends-and-Family-2011.jpg" width="33%" height="48%" />
  <img src="prodimg/nov272008_nike_sale.jpg" width="31%" height="48%" />
  <img src="prodimg/SaleHeader.jpg" width="34%" height="48%" />
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="apDiv18">
  <p class="shopmanaic"><u>Shopmanaic</u></p>
<p class="myaccount"><u>My Acccount<u></p>
<p class="policies"><u>Policies<u></p>
<p class="help"><u>Help<u></p>
<p class="products"><u>Products<u></p><br />
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="home">Home</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="account">MyAccount</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="returnpolicy">Return Policy</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="placeorder">Place Order</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="formal">Formal
Shirts</p></a>
<br />
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="aboutus">About Us</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="mytrolly">My Trolley</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="privacypol">Privacy Policy</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="trackorder">Track Order</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="trousers">Trousers</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="contactus">Contact Us</p></a>

<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="login">LogIn/</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="login">SignUp</p>
</a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="shipping">Shipping Policy</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="returnp">Return Product</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="casual">Casual Shirt</p></a><br/>

<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="tc">Terms & Conditions</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="jeans">Jeans</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="footwear">FootWear</p></a>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="faq">FAQ's</p></a>

<br/>
<a href="www.google.com" onmouseover="this.style.color = '#7A991A'" onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="kitchen">Kitchen Accessories</p></a>
<p class="follow"><u>Follow Us<u></p>
<div id="apDiv21"><a href="www.facebook.com"><img src="facebook-logo1.jpg" width="36" height="34" /></a></div>
<div id="apDiv25"><a href="www.twitter.com"><img src="twitter_logo.jpg" width="36" height="34" /></a></div>
<div id="apDiv23"><a href="www.google.com"><img src="google_plus_logo1.jpg" width="36" height="34" /></a></div> 
<div id="apDiv26"><a href="www.blog.com"><img src="blogger_logo.jpg.png" width="36" height="34" /></a></div>
<p class="stay"><u>Stay Connected for Daily Updates</u></p>
<form id="form2" name="form2" method="post" action="">

<input type="text" name="contact" id="contact" style="position:absolute; top:59%; left:75%; color:#CCC; width: 153px; border:#F60"  value="Enter your Email-Id" onfocus="if (this.value == 'Enter your Email-Id') this.value = '';" onblur="if (this.value == '') this.value = 'Enter your Email-Id';"  />
<input type="submit" name= "connected"  value=" Submit"  style="position:absolute; top:58%; left:94%; color:#CCC; width: 50px;"  />

</form>
<div id="apDiv40"></div>
</div>

<div id="trans">
</div>



</body>
</html>
