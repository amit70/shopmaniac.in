<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="prodimg/title123.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="navbar.css" rel="stylesheet" type="text/css" />
<?php
//$id=$_POST['pid1'];

//if($id=="")
//{
	$id=$_GET['pid1'];
//}
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from products where pid=$id");
	while($row = mysql_fetch_array($qry))
	{
		$name= $row['pname'];
	}

echo "<title>$name : Buy $name online in India | Shopmaniac.in</title>";
?>
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
			document.getElementById('pic').innerHTML='<center><img src="'+document.getElementById('mn').src+'"></center>';
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
			document.getElementById('pic').innerHTML='<center><img src="'+img[i]+'"></center>';
			i--;
		}
		else
		{
			i=4;
			document.getElementById('pic').innerHTML="";
			document.getElementById('pic').innerHTML='<center><img src="'+img[i]+'"></center>'
		}
	}
	function next()
	{
		if(i!=4)
		{
			document.getElementById('pic').innerHTML="";
			document.getElementById('pic').innerHTML='<center><img src="'+img[i]+'"></center>'
			i++;
		}
		else
		{
			i=0;
			document.getElementById('pic').innerHTML="";
			document.getElementById('pic').innerHTML='<center><img src="'+img[i]+'"></center>'
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
    document.getElementById('main').innerHTML='<center><img src='+thisImg+' id="mn" class="resize" onclick="logtr1()"></center>';


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

function navi(a,b,c,d,e,f)
{
	
	document.getElementById(a).style.visibility='visible';
	document.getElementById(b).style.visibility='hidden';
	document.getElementById(c).src=e;
	document.getElementById(d).src=f;
///document.getElementById(c).value=
	
	//document.getElementById(d).innerHTML='<a href="#" onclick="navi(brandinfo,prodinfo,brandinfo123,prodinfo123,prodimg/brandinfo1.png,prodimg/prodinfo.png)"><img src="'+f+'" style="position:relative;width:100%;height:100%;left:0;top:0;"></a>';
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
function quickbuy(a)
{
	document.getElementById(a).style.visibility='visible';
}
function quickbuy1(a)
{
	document.getElementById(a).style.visibility='hidden';
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
				opacity: 0.9;
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
	top: -750px;
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
	width:58%;
	height:400px;
	z-index:15;
	left:430px;
	top:-355px;
	border-style:solid;
	border-width:thin;
	border-color:#fdfdfd;
		}

#prodinfo {
	position:relative;
	width:196%;
	height:170px;
	z-index:15;
	left:-200px;
	top:-120px;
	background-color:#FCFCFC;
	font-family:"Comic Sans MS", cursive;
	color:#555555;
	overflow:scroll;
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
#zoom
{
		position:fixed;
	top:10%;
	left:11%;
	width:70%;
	height:85%;
	visibility:hidden;
	z-index:10000;
	background-color:#f6f6f6;
	border-style:solid;
	border-color:#979797;

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
	
	width:198%;
	height:400px;
	z-index:12;
	left: -200px;
	
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
img.resize
{
	height:200px;
	width:auto;
	text-align:center;
}
img.resize
{
	height:auto;
	width:200px;
	text-align:center;
}
img.resize1
{
	height:40px;
	width:auto;
	text-align:center;
}
img.resize1
{
	height:auto;
	width:40px;
	text-align:center;
}
img.resize3
{
	height:80px;
	width:auto;
	text-align:center;
}
img.resize3
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
$trolley1="";
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

<?php
include("header.php");
?>


<?php
include("menu.php");
?>


<div id="apDiv401">
<?php
$flag=0;

//$id=$_POST['pid1'];

//if($id=="")
//{
	$id=$_GET['pid1'];
//}
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from products where pid=$id");
	while($row = mysql_fetch_array($qry))
	{
		$id=$row['pid'];
		$name= $row['pname'];
		$size= $row['size'];
		$price= $row['price'];
		$price1=$row['discprice'];
		$discount=$row['discountpercent'];
		$info=$row['info'];
		$img1=$row['img1'];
		$img2=$row['img2'];
		$img3=$row['img3'];
		$img4=$row['img4'];
		$img5=$row['img5'];
		$brand=$row['brand'];
		$dept=$row['dept'];
		$stock=$row['stock'];
		$delivery=$row['delivery'];
		$subname=$row['subname'];
		$specification=$row['specification'];
	}
	if($price==$price1)
	{
		$flag=1;
	}
	echo "<div style=\"position:absolute;left:85%;width:15%;height:100%;border-color:#666;border-width:thin; border-left-style:solid;\">";
	echo "<center><img src=\"prodimg/$img1\" id=\"img1\" class=\"resize1\" onmouseover=\"image('prodimg/$img1','img1')\" onmouseout=\"nbrdr('img1')\"></center>";
	echo "<hr> <center><img src=\"prodimg/$img2\" id=\"img2\" class=\"resize1\" onmouseover=\"image('prodimg/$img2','img2')\" onmouseout=\"nbrdr('img2')\"></center>";
    echo "<hr> <center><img src=\"prodimg/$img3\" id=\"img3\" class=\"resize1\" onmouseover=\"image('prodimg/$img3','img3')\" onmouseout=\"nbrdr('img3')\"></center>";
	echo "<hr> <center> <img src=\"prodimg/$img4\" id=\"img4\" class=\"resize1\" onmouseover=\"image('prodimg/$img4','img4')\" onmouseout=\"nbrdr('img4')\"></center>";
	echo "<hr> <center> <img src=\"prodimg/$img5\" id=\"img5\" class=\"resize1\" onmouseover=\"image('prodimg/$img5','img5')\" onmouseout=\"nbrdr('img5')\"></center>";
	echo "</div>";


echo "<div name=\"main\" id=\"main\" onclick=\"logtr1('prodimg/$img1','prodimg/$img2','prodimg/$img3','prodimg/$img4','prodimg/$img5')\">
	<center><img src=\"prodimg/$img1\" id=\"mn\" class=\"resize\"></center>";
	
?>
</div>

<div id="apdiv41" >
<?php
echo "<form method=\"post\" action=\"trolley.php\" id=\"prod123\" name=\"prod123\">";
echo "<input type=\"hidden\" name=\"prodid\" value=\"$id\" />";
echo "<input type=\"hidden\" name=\"cost\" value=\"$price\" />";
echo "<input type=\"hidden\" name=\"name1\" value=\"$name\" />";
echo "<input type=\"hidden\" name=\"cost1\" value=\"$price1\" />";
echo "<input type=\"hidden\" name=\"disc\" value=\"$discount\" />";
echo "<input type=\"hidden\" name=\"subname\" value=\"$subname\" />";

echo "<table border=\"0\" style=\"position:absolute; left:0%; top:0%; width:100%; height:90%;\">";
echo "<tr><td><center><font face=\"'Comic Sans MS', cursive\" size=\"+1\" color=\"#333333\"><b>$name</b></font></center></td></th>";
if($flag==1)
{
	echo "<tr><td><center><font face=\"Comic Sans MS, cursive\" size=\"+2\" color=\"#990000\"><b>Rs.$price</b></font></center></td></tr>";	
}
else
{
echo "<tr><td ><p><font style=\"text-decoration:line-through\" face=\"Comic Sans MS, cursive\" size=\"+2\" color=\"#979797\"><b>Rs.$price</b></font><font face=\"Comic Sans MS, cursive\" size=\"+2\" color=\"#990000\"><b>Rs.$price1</b></font></td></tr>";
echo "<tr><td style=\"text-align:center; color:#555;\">($discount)</td></tr>";
}

if($subname!=="mobiles" && $subname!=="tablets")
{
echo "<tr><td><p><font face=\"'Comic Sans MS', cursive	\" size=\"4\" color=\"#333333\">Select your Size:</font>";
echo "<p style=\"position:absolute;left:25%; top:45%; width:50%;\"><select name=\"size\" id=\"size\">";

$qry1=mysql_query("select * from products where pname='$name'");
while($row1 = mysql_fetch_array($qry1))
{
	$size1234=$row1['size'];
	$stock123=$row1['stock'];
	if($stock123=="In Stock")
	{
	echo "<option style:\"align:center\">$size1234</option>";
	}
	else
	{
		echo "<option style:\"align:center\" disabled=\"disabled\">$size1234 (out of stock)</option>";
	}
}
echo "</select></td></tr>";
}
echo "</form> ";

echo "<tr><td><p style=\"text-decoration:none;\"><font face=\"'Comic Sans MS', cursive	\"  color=\"#333333\">$delivery</font></td></tr>";

if($_SESSION['uname']=="")
{
	if($stock=="In Stock")
	{
echo "<tr><td height=\"1\"><p><a href=\"#\"><img src=\"prodimg/addtotrolley.png\" width=\"60%\" height=\"40%\" onclick=\"logtr()\" onmousedown=\"this.src='prodimg/addtotrolley1.png'\" onmouseup=\"this.src='prodimg/addtotrolley.png'\"></a><img src=\"prodimg/rigthtick.jpg\" width=\"11%\" height=\"45%\" /><p style=\"position:absolute; left:72%; top:83%;text-decoration:none;\"><font face=\"'Comic Sans MS', cursive	\"  color=\"#333333\">$stock</font></p></td></tr>";
	}
	else
	{
		echo "<tr><td><p><img src=\"prodimg/addtotrolley2.png\" width=\"55%\" height=\"12%\"></td></tr>";
	}
}
else
{
	if($stock=="In Stock")
	{
echo "<tr><td><p><a href=\"#\"><img src=\"prodimg/addtotrolley.png\" width=\"60%\" height=\"40%\" onclick=\"prod1()\" onmousedown=\"this.src='prodimg/addtotrolley1.png'\" onmouseup=\"this.src='prodimg/addtotrolley.png'\"></a><img src=\"prodimg/rigthtick.jpg\" width=\"11%\" height=\"45%\" /><p style=\"position:absolute;left:76%; top:75%; text-decoration:none;\"><font face=\"'Comic Sans MS', cursive	\"  color=\"#333333\">$stock</font></p></td></tr>";
	}
	else
	{
	echo "<tr><td><p><img src=\"prodimg/addtotrolley2.png\" width=\"55%\" height=\"12%\"></td></tr>";
	}
}
if($price1<200)
{
echo "<tr><td><p style=\"position:absolute; left:5%; top:83%; font-family:'Comic Sans MS', cursive; color:#333; font-size:90%;\">Note:- For total order amount less than 200 add SHIPPING CHARGE Rs 30</p></td></tr>";
}
echo "</table>";
?>

</div>	

<div id="apDiv35" >
<img src="prodimg/Picture1.png" width="100%" height="30%" style="position:absolute; top:0%; left:8%; "/>
<img src="prodimg/Picture2.png" width="105%" height="30%" style="position:absolute; top:25%; left:3%;"/>
<img src="prodimg/Picture4.png" width="102%" height="30%" style="position:absolute; top:50%; left:8%;"/>
<img src="prodimg/Picture3.png" width="108%" height="30%" style="position:absolute; top:75%; left:-2%;"/>
</div>

<form method="post" action="review.php" id="review1" name="review1">
<?php
echo "<input type=\"hidden\" name=\"prodid\" value=\"$id\" />";
echo "<input type=\"hidden\" name=\"pname\" value=\"$name\" />";
?>
</form>

<?php
if($_SESSION['uname']=="")
{
echo "<a href=\"#\" onclick=\"logtr()\" onmouseover=\"this.style.color='#DF7000'\" onmouseout=\"this.style.color='#555555'\" style=\"position:absolute; left:20%; top:105%; text-decoration:none; color:#555555;\"><b>Comment On This Product</b></a>";
}
else
{
echo "<a href=\"#\" onclick=\"review()\" onmouseover=\"this.style.color='#DF7000'\" onmouseout=\"this.style.color='#555555'\" style=\"position:absolute; left:20%; top:105%; text-decoration:none; color:#555555;\"><b>Comment On This Product</b></a>";
	
}
?>
</div>

<div id="navigation" style="position:relative; top:-130px; left:-200px; width:196%; height:35px; ">
<a href="#" onclick="navi('brandinfo','prodinfo','brandinfo123','prodinfo123','prodimg/brandinfo1.png','prodimg/prodinfo.png')" ><img id="brandinfo123" src="prodimg/brandinfo1.png" width="20%" height="100%" /></a>
<a href="#" onclick="navi('prodinfo','brandinfo','prodinfo123','brandinfo123','prodimg/prodinfo1.png','prodimg/brandinfo.png')" ><img id="prodinfo123" src="prodimg/prodinfo.png" width="20%" height="100%" style="position:absolute; left:18.5%;"/></a>
</div>


<div id="prodinfo" style="visibility:hidden; height:250px;">
<?php
$arr=spliti("-",$info);
for($i=0;$i<count($arr);$i++)
{
	$arrin=spliti(":",$arr[$i]);
	echo "<table border=\"0\" style=\"margin-left:10%;\">";
	echo "<tr>";
	echo "<td width=100 height=10 style=\"font-family:'Comic Sans MS', cursive; font-size:90%;\"><b>$arrin[0]:</b></td>";
	echo "<td width=150 height=10 style=\"font-family:'Comic Sans MS', cursive; font-size:90%;\">$arrin[1]</td>";
	echo "<br/></tr>";
	echo "</table>";
}

	
?>
</div>

<div id="brandinfo" style="position:relative;left:-200px;top:-370px;width:196%;height:200px; background-color:#fcfcfc; ">
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
		$img1234=$row['brandimg'];
	}
	echo "<img src=\"prodimg/$img1234\" style=\"position:absolute;width:90%;height:92%;top:5%;z-index=1;left:3%;\">";
	echo "</div>";
	echo "<div style=\"position:absolute;left:26%;top:5%;width:73%;height:84%;\">";
	echo "<font face=\"'Comic Sans MS', cursive\" color=\"#666666\"><span style=\"position:absolute; float:left;left:2%;top:0%; font-size:75%;\">$binfo</span></font>";
	echo "</div>";
?>
</div>

<div id="specification" style="position:relative; left:-200px; top:-320px; width:196%; height:35px; background-color:#ebebeb;">
<font face="Comic Sans MS, cursive" color="#000"><h2 style="position:absolute;top:-70%;left:40%">Specification</h2></font>
</div>
<div style="position:relative;left:-200px;top:-315px;width:196%;height:700px; background-color:#FCFCFC;">
<table border="0" style="position:absolute; left:0%; top:0%; width:100%; height:95%;">
<?php
$specs123=spliti("-",$specification);
for($i=0;$i<count($specs123);$i++)
{
	$specs456=spliti(":",$specs123[$i]);
	if($specs456[1]=="")
	{
		echo "<tr>";
		echo "<th colspan=\"2\" width=100 height=10 style=\"font-family:'Comic Sans MS', cursive; font-size:90%; text-align:left; background-color:#ACACAC;\"><b>$specs456[0]</b></th>";

		echo "</tr>";
	}
	else
	{
	echo "<tr>";
	echo "<td width=100 height=10 style=\"font-family:'Comic Sans MS', cursive; font-size:90%; background-color:#dedede;\">$specs456[0]</td>";
	echo "<td width=150 height=10 style=\"font-family:'Comic Sans MS', cursive; font-size:90%; background-color:#dedede;\">$specs456[1]</td>";
	echo "</tr>";
	}
}
?>
</table>
</div>


<div style="position:relative;left:-200px;top:-300px;width:196%;height:35px; background-color:#EBEBEB; z-index:100;  ">
<font face="Comic Sans MS, cursive" color="#000"><h2 style="position:absolute;top:-70%;left:40%">Suggested Products</h2></font>
</div>
<div style="position:relative;left:-200px;top:-295px;width:196%;height:330px; background-color:#FCFCFC; overflow:scroll; ">

<?php
$prodname1234=array();
$l=2;
$t=1;
$i=0;
$flag=0;
	$fetch=mysql_query("select * from products where brand='$brand' and dept='$dept' ");
	$count=mysql_num_rows($fetch);
	for($i=0;$i<$count;$i++)
	{
	while($row = mysql_fetch_array($fetch))
	{
		$id2=$row['pid'];
		$name2=$row['pname'];
		if($name==$name2)
		{
			continue;
		}
		else
		{
		$stock1234=$row['stock'];
		if($stock1234=="Out Of Stock")
		{
			continue;
		}
		else
		{
			if(in_array($name2,$prodname1234))
			{
				continue;
			}
			else
			{
			$prodname1234[$i]=$name2;
		$size2= $row['size'];
		$prize2= $row['price'];
		$discprice=$row['discprice'];
		$discountpercent=$row['discountpercent'];
		$image1=$row['img1'];
		
		$qry1=mysql_query("select * from products where pname='$name2'");
		$g1=0;
		$gg1="";
		$sizy1=array();
		while($row1 = mysql_fetch_array($qry1))
		{
			$sizeaaa=$row1['size'];
			$stock123=$row1['stock'];
			if($stock123=="In Stock")
			{
			$sizy1[$g1]=$sizeaaa;
			}
			else
			{
				continue;
			}
			$g1=$g1+1;
		}
		if($prize2==$discprice)
		{
			$flag=1;
		}
		else
		{
			$flag=0;
		}
		echo "<form method=\"get\" action=\"prodinfo.php\" id=\"suggested\" name=\"suggested".$i."\">";
        echo "<input type=\"hidden\" name=\"pid1\" value=\"$id2\" >";
echo "</form> ";
		
		echo "<div style=\" width:20%;height:97%; background-color:#fff; position:absolute; top:".$t."%; left:".$l."%;\" onMouseOver=\"quickbuy('quickbuy".$i."') \" onMouseOut=\"quickbuy1('quickbuy".$i."')\">";
		echo "<a href=\"#\" onclick=\"go('suggested".$i."')\">";
		echo "<div id=\"image_container\" style=\"position:absolute; top:0%; left:0%;width:100%; height:50%;\">";
	 echo "<center><img src=\"prodimg/$image1\" class=\"resize3\"></center>";
	 echo "</div>";
if($flag==1)
{
	echo "<table border=\"0\" style=\"position:absolute; left:0%; top:62%; width:100%; \">";
	echo "<tr><td height=\"1\" style=\"text-align:center; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;\">$name2</td></tr>";
	echo "<tr><td style=\"font-family:'Comic Sans MS', cursive; color:#F00;font-size:90%;\"><center>$prize2 </center></td>
		</tr>";
	echo "</table>";
}
else
{
	echo "<table border=\"0\" style=\"position:absolute; left:0%; top:62%; width:100%; \">";
	echo "<tr><td height=\"1\" style=\"text-align:center; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;\">$name2 </td></tr>";
	echo "<tr><td style=\"font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;\"><center>$discprice &nbsp;<strong style=\"text-decoration:line-through; color:#555;font-weight:lighter;\">$prize2</strong></center></td>
		</tr>";
	echo "<tr><td style=\"font-family:'Comic Sans MS', cursive;   color:#F00; font-size:60%;\"><center>($discountpercent)</center></td></tr>";
	echo "</table>";
}
if($subname!=="mobiles" && $subname!=="tablets")
{
	echo "<div id=\"quickbuy".$i."\" style=\"position:absolute; left:22%; top:90%; width:55%; height:7%; visibility:hidden;\">";
	echo "<p style=\"position:absolute; left:0%; top:-80%; color:#999;\">Size:-</p>";
	$y=50;
$x=68;
for($r=0;$r<count($sizy1);$r++)
{
	echo "<p style=\"position:absolute; left:$y%; top:-80%; color:#555;\">$sizy1[$r]</p>";
	if($r==count($sizy1)-1)
	{
		continue;
	}
	else
	{
		echo "<p style=\"position:absolute; left:$x%; top:-80%; color:#555;\">,</p>";
	}
	$y=$y+25;
	$x=$x+25;
}
	echo "</div>";	
}
	echo "</a>";
	echo "</div>";
	$l=$l+25;
	$i=$i+1;
	}
	}
	}
	}
	}
?>

</div>
<p>&nbsp;</p>

<div style="position:relative; left:-200px; top:-310px; width:196%; height:35px; background-color:#EBEBEB;">
<?php
echo "<font face=\"Comic Sans MS, cursive\" color=\"#000\"><h3 style=\"position:absolute;top:-50%;left:10%\">Review's & Comments for '$name'</h2></font>";
?>
</div>
<div style="position:relative;width:196%;height:400px;z-index:12;left:-200px;top:-300px;background-color:#F5F5F5;">
<?php
$i=1;
$l=0;
$t=0;
$q=0;
$a=0;
$z=0;
$top=0;
$rev="select * from review where pid='$id' ORDER BY DOReview DESC";
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
			//$top=$top+15;
			echo "<hr style=\"position:absolute; left:0%; top:".$z."%; width:100%; border-style:dotted;\"/>";
		}
		
	$name1=$row1['username'];
	$title1=$row1['title'];
	$desc1=$row1['desciption'];
	$rate1=$row1['rating'];
	
	
	echo "<div style=\" width:100%;height:75%; background-color:#fcfcfc; position:absolute; top:".$t."%; left:".$l."%; \">";
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
		echo "<p style=\"position:absolute; left:30%; top:25%; font:'Comic Sans MS', cursive; font-size:150%; color:#111; font-family:'Comic Sans MS', cursive;\">SORRY NO REVIEW'S FOUND</p>";
if($_SESSION['uname']=="")
{
echo "<a href=\"#\" onclick=\"logtr()\" onmouseover=\"this.style.color='#DF7000'\" onmouseout=\"this.style.color='#555555'\" style=\"position:absolute; left:40%; top:40%; text-decoration:none; color:#555555;\"><b>Be the first to review</b></a>";
}
else
{
echo "<a href=\"#\" onclick=\"review()\" onmouseover=\"this.style.color='#DF7000'\" onmouseout=\"this.style.color='#555555'\" style=\"position:absolute; left:40%; top:40%; text-decoration:none; color:#555555;\"><b>Comment On This Product</b></a>";
	
}
}
	$a=$t;
?>
</div>


<?php
echo "<div id=\"apDiv18\" style=\"position:relative;top:$a%;\">";
?>
<?php
include("footer.php");
?>
</div>


<div id="zoom">
<a href="#"><img src="prodimg/wrongtick.jpg"  alt="Close" style="height:4.5%;width:2.5%;position:relative;left:0%;top:0;z-index:150" onclick="zoomclose()" /> </a>
<a href="#"><img src="img/prev.png" style="position:absolute;left:0;top:50%;width:3%;height:10%;z-index:150;margin-top:-5%;" onclick="prev()"  onmousedown="this.src='img/prev1.png'" onmouseup="this.src='img/prev.png'"/></a>
<a href="#"><img src="img/next.png" style="position:absolute;right:0;top:50%;width:3%;height:10%;z-index:150;margin-top:-5%;" onclick="next()" onmousedown="this.src='img/next1.png'" onmouseup="this.src='img/next.png'"/></a>
<div id="pic" style="position:absolute;left:0;top:0;width:100%;height:100%;z-index:100; overflow:scroll;">
</div>
</div>


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
  echo "<input type=\"hidden\" name=\"flag\" value=\"100\" />";
    echo "<input type=\"hidden\" name=\"pid\" value=\"$id\" />";
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
  echo "<input type=\"hidden\" name=\"flag\" value=\"100\" />";
  echo "<input type=\"hidden\" name=\"pid\" value=\"$id\" />";
  ?>
<a href="#" onclick="reg1()"><img src="prodimg/Register1.png" width="38%" height="15%" style="position:absolute; left:25%; top:82%;" onmousedown="this.src='prodimg/Register2.png'" onmouseup="this.src='prodimg/Register1.png'"/></a>
</form>
</div>
</div>


<div id="trans">
</div>
</div>
</body>
</html>
