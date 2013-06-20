<?php
session_start();
?>
<html>
<head>
<link href="navbar.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<script type="text/javascript">
function website()
{
	document.forms["website1"].submit();
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
function submitform()
{
    document.forms["filter"].submit();
}

function mytrol()
{
	document.forms["trol"].submit();
}

function homes()
{ 
    document.forms["home"].submit();
}

function myaccount()
{
    document.forms["acc"].submit();
}
function prod1(a)
{
	document.forms[a].submit();
}
function go(q)
{
    document.forms[q].submit();
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
function quickbuy(a)
{
	document.getElementById(a).style.visibility='visible';
}
function quickbuy1(a)
{
	document.getElementById(a).style.visibility='hidden';
}
function quick(a)
{
	        document.getElementById(a).style.visibility='visible';
			//document.getElementById('trans').style.visibility='visible';
			document.getElementById(a).style.opacity=100;
}
function iquick(b) 
{
			document.getElementById(b).style.visibility='hidden';
			document.getElementById('trans').style.visibility='hidden';
}
function image(thisImg,ob) 
{
	document.getElementById('main').innerHTML="";
    document.getElementById('main').innerHTML='<img src='+thisImg+' id="mn" style="position:relative;width:100%;height:100%">';

document.getElementById(ob).style.borderBottom="medium inset #090";
}
function nbrdr(ob)
{
	document.getElementById(ob).style.border="none";
}
function prod1xxx(a)
{
	document.forms[a].submit();
}
</script>
<style type="text/css">
<!--
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
			
		#count
{
	position:relative;
	left:-200px;
	top:-160px;
	width:196%;
	height:70px;
	
}
#apDiv42 {
position:relative;
	width:194%;
	height:80px;
	left:-200px;
	z-index:1;
	top: -215px;
}
#apDiv1 {
	
	position:relative;
	width:196%;
	height:400px;
	z-index:14;
	left:-200px;
	top:-150px;
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

#apDiv18 {
	position:relative;
	width:195%;
	height:400px;
	z-index:12;
	left: -200px;
	top: -100px;
	background-color:#333;
	border-style:solid;
	border-width:thin;
	border-color:#333;
}
/* Some stylesheet reset */

	
	h1
	{
		color:#636;
	}
	



#apDiv38 {
	position:absolute;
	width:50%;
	height:50%;
	z-index:1;
	right:10%;
	top: 35%;
	background-color:#D6D6D6;
	border-style:double;
	border-width:medium;
	border-color:#A0A0A0;
}
#apDiv43 
{
	position:absolute;
	top:0%;
	right:0%;
	width: 45%;
	height: 18%;
	font:Verdana, Geneva, sans-serif;
	font-size:11px;
	color:#666;
	
}
p.call
{
	position:absolute;
	left:0%;
	top:-50%;
	font-size:85%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.mail
{
	position:absolute;
	left:34%;
	top:-50%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.acc
{
	position:absolute;
	left:73%;
	top:-50%;
	font-size:100%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}

p.sign
{
	position:absolute;
	right:0%;
	top:-50%;
	font-size:100%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.aaa
{
	position:absolute;
	top:40%;
	right:0%;
	font:Verdana, Geneva, sans-serif;
	font-size:13px;
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
				opacity: 0.4;
				/* For IE 5-7 */
				filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
				/* For IE 8 (and 9, 10, 11?). Don't miss the added quotes */
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";
				}
-->
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
#main
{
	position:absolute;width:50%;height:80%;left:0%;top:0%;
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
<a href="#"><img src="prodimg/close.png" alt="Close" style="height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10" onClick="ilogtr()" /> </a>

<div id="logdiv1" onMouseOver="login()">
<h3 align="center"><font face="Comic Sans MS, cursive" color="#666666">LOGIN</font></h3>
<h4 align="center"><font face="Comic Sans MS, cursive" color="#666666">For Existing Users</font></h4>
<form method="POST" action="check.php"  name="login123">
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
  echo "<input type=\"hidden\" name=\"flag\" value=\"1\" />";
  ?>
 <a href="#" onClick="login1()"><img src="prodimg/Login1.png" width="50%" height="15%" style="position:absolute; left:25%; top:88%;" onMouseDown="this.src='prodimg/Login2.png'" onMouseUp="this.src='prodimg/Login1.png'"/></a>
 <a href="#" onClick="emailcheck()" style="text-decoration:none; position:absolute; left:33%; top:39%; font-size:13px; color:#6D6D6D;" onMouseOver="this.style.color='#DF7000'" onMouseOut="this.style.color='#6D6D6D'">Forgot your Password?</a>

</form>

</div>

<div id="logdiv2" onMouseOver="reg()">
<h3 align="center"><font face="Comic Sans MS, cursive" color="#666666">Register</font></h3>
<h4 align="center"><font face="Comic Sans MS, cursive" color="#666666">For New Users</font></h4>
<form method="POST" action="Divert.php" name="register" >
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
  echo "<input type=\"hidden\" name=\"flag\" value=\"1\" />";
  ?>
<a href="#" onClick="reg1()"><img src="prodimg/Register1.png" width="50%" height="15%" style="position:absolute; left:25%; top:85%;" onMouseDown="this.src='prodimg/Register2.png'" onMouseUp="this.src='prodimg/Register1.png'"/></a>
</form>
</div>
</div>

<div id="apDiv42">

<?php
if($_SESSION['uname']=="")
{
echo "<a href=\"index.php\" ><img src=\"prodimg/Title.png\" width=\"38%\" height=\"100%\" style=\"position:absolute; left:-2%; top:5%;\" /></a>";
}
else
{
	echo "<a href=\"home.php\"><img src=\"prodimg/Title.png\" width=\"38%\" height=\"100%\" style=\"position:absolute; left:-2%; top:5%;\" /></a>";
}
?>
   <div style="position:absolute; left:38.8%; top:50%; width:44%; height:49%; background-color:#DCDCDC; "></div>
<form id="form1" name="src1" method="post" action="search.php">
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
echo "<p style=\"position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive\"><a href=\"index.php\" onmouseover=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#717171'\"  style=\"text-decoration:none; color:#717171;\">SignOut</a></p>";
}
?>

<?php
if($_SESSION['uname']=="")
{
	echo "<a href=\"index.php\"><img src=\"prodimg/Home1.png\" style=\"position:absolute; left:89.5%; top:40%;width:4.5%;height:60%\" onmousedown=\"this.src='prodimg/Home2.png'\" onmouseup=\"this.src='prodimg/Home1.png'\"></a>";
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

<div id="apDiv48">
<form action="fsresponse.php" method="POST" name="filter" id="filter">

<div style="position:absolute; left:1%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%; font-family:'Comic Sans MS', cursive; color:#111;"><b>Category</b></p>
   <?php
   $prodname1=array();
   $prodname2=array();
   $i1=0;
   $i2=0;
  $qry1=mysql_query("select * from products where subname='formal shirts' and category='half sleeves'");
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
  $qry2=mysql_query("select * from products where subname='formal shirts' and category='full sleeves'");
 while($row = mysql_fetch_array($qry2))
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
			$prodname2[$i2]=$name;
			$i2=$i2+1;
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

  <option >Choose Category</option> 
 <?php 
 echo "<option value=\"half sleeves\" >Half Sleeves($count1)</option>
  <option value=\"full sleeves\">Full Sleeves($count2)</option>";
  ?>
 
   </select>
 
</div>
<div style="position:absolute; left:19.5%; top:2%; height:96%; width:0.3%; background-color:#F1F1F1;">
</div>

<div style="position:absolute; left:19.5%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%; font-family:'Comic Sans MS', cursive;"><b>Size</b></p>
   <?php
   $prodname1=array();
 $prodname2=array();
 $prodname3=array();
 $i1=0;
  $i2=0;
   $i3=0;
  $qry4=mysql_query("select * from products where subname='formal shirts' and size='38'");
  while($row = mysql_fetch_array($qry4))
{
	//$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
			$prodname1[$i1]=$name;
			$i1=$i1+1;
	}
	else
	{
		continue;
	}
}
 $count4=count($prodname1);
 
   $qry5=mysql_query("select * from products where subname='formal shirts' and size='40'");
   while($row = mysql_fetch_array($qry5))
{
	//$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
			$prodname2[$i2]=$name;
			$i2=$i2+1;
	}
	else
	{
		continue;
	}
}
 $count5=count($prodname2);

  $qry55=mysql_query("select * from products where subname='formal shirts' and size='36'");
  while($row = mysql_fetch_array($qry55))
{
	//$name= $row['pname'];
	$stock=$row['stock'];
	if($stock=="In Stock")
	{
			$prodname3[$i3]=$name;
			$i3=$i3+1;
	}
	else
	{
		continue;
	}
}
 $count55=count($prodname3);

  ?>
  <select name="size1" id="size1" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Choose Size</option>
 <?php
 echo "<option value=\"36\">36($count55)</option>
 <option value=\"38\">38($count4)</option>
  <option value=\"40\">40($count5)</option>";
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
  $qry6=mysql_query("select * from products where subname='formal shirts' and brand='arrow'");
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
 
   $qry7=mysql_query("select * from products where subname='formal shirts' and brand='black berry'");
   while($row = mysql_fetch_array($qry7))
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
			$prodname2[$i2]=$name;
			$i2=$i2+1;
		}
	}
	else
	{
		continue;
	}
	
}
 $count7=count($prodname2);

 $qrye=mysql_query("select * from products where subname='formal shirts' and brand='hollister'");
 while($row = mysql_fetch_array($qrye))
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
			$prodname3[$i3]=$name;
			$i3=$i3+1;
		}
	}
	else
	{
		continue;
	}
}
 $counte=count($prodname3);
 
  ?>
<div style="position:absolute; left:39.5%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%;font-family:'Comic Sans MS', cursive;"><b>Brand</b></p>
  
  <select name="brand1" id="brand1" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Choose Brand</option>
  <?php
  echo "<option value=\"arrow\">Arrow ($count6)</option>
      <option value=\"black berry\">Black Berry ($count7)</option>
	  <option value=\"Hollister\">Hollister ($counte)</option>";
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
  $qry300=mysql_query("select * from products where subname='formal shirts' and discprice between 300 and 600");
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
  
 $qry601=mysql_query("select * from products where subname='formal shirts' and discprice between 601 and 1500");
    while($row = mysql_fetch_array($qry601))
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
			$prodname2[$i2]=$name;
			$i2=$i2+1;
		}
	}
	else
	{
		continue;
	}
}
 $count601=count($prodname2);
 
  ?>
  <select name="range" id="range" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Price Range</option>
  <?php
  echo "<option value=\"300-600\">300-600($count300)</option>";
  echo "<option value=\"601-1000\">601-1000($count601)</option>";
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
   $i1=0;
   $i2=0;
      $i3=0;
  $qry8=mysql_query("select * from products where subname='formal shirts' and color='red'");
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

 
 $qry9=mysql_query("select * from products where subname='formal shirts' and color='blue'");
  while($row = mysql_fetch_array($qry9))
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
			$prodname2[$i2]=$name;
			$i2=$i2+1;
		}
	}
	else
	{
		continue;
	}
}
 $count9=count($prodname2);

$qry10=mysql_query("select * from products where subname='formal shirts' and color='green'");
 while($row = mysql_fetch_array($qry10))
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
			$prodname3[$i3]=$name;
			$i3=$i3+1;
		}
	}
	else
	{
		continue;
	}
}
 $count10=count($prodname3);

  ?>
  <select name="color" id="color" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Choose Color</option>
  <?php
  echo "<option value=\"red\">Red ($count8)</option>
  <option value=\"blue\">Blue ($count9)</option>
  <option value=\"green\">Green ($count10)</option>";
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
$qry=mysql_query("select * from products where subname='formal shirts'");
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
echo "<p style=\"position:absolute; left:0%; top:1%; font-family:'Comic Sans MS', cursive; font-weight:bold; font-size:150%;\">MEN'S FORMAL SHIRTS($count)</p><hr style=\"position:absolute; left:0%; top:85%; width:96%;\"/>";
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
	$fetch=mysql_query("select * from products where subname='formal shirts'");
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
			$t=$t+90;
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

		echo "<div style=\" width:19.2%;height:85%; background-color:#fff; position:absolute; top:".$t."%; left:".$l."%;\" onMouseOver=\"quickbuy('quickbuy".$i."')\" onMouseOut=\"quickbuy1('quickbuy".$i."')\">";
		echo "<a href=\"#\" onclick=\"prod1('prod123".$i."')\">";
		
	 echo "<img src=\"prodimg/p4.jpg\" width=\"96%\" height=\"68%\" style=\"position:absolute; top:0%; left:0%; \">";
	if($flag==1)
	{
	echo "<table border=\"0\" style=\"position:absolute; left:0%; top:70%; width:100%; \">";
	echo "<tr><td height=\"1\" style=\"text-align:center; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;\">$name </td></tr>";
	echo "<tr><td style=\"font-family:'Comic Sans MS', cursive; color:#F00;font-size:90%;\"><center>$prize </center></td>
		</tr>";
	echo "</table>";
	}
	else
	{
	echo "<table border=\"0\" style=\"position:absolute; left:0%; top:70%; width:100%; \">";
	echo "<tr><td height=\"1\" style=\"text-align:center; font-size:80%; font-family:'Comic Sans MS', cursive; color:#555;\">$name </td></tr>";
	echo "<tr><td style=\"font-family:'Comic Sans MS', cursive; color:#F00; font-size:90%;\"><center>$prize1 &nbsp;<strong style=\"text-decoration:line-through; color:#555;font-weight:lighter;\">$prize</strong></center></td>
		</tr>";
	echo "<tr><td style=\"font-family:'Comic Sans MS', cursive;   color:#F00; font-size:60%;\"><center>($discount)</center></td></tr>";
	echo "</table>";
	}
		echo "</a>";
		
echo "<div id=\"quickbuy".$i."\" style=\"position:absolute; left:25%; top:90%; width:55%; height:20%; visibility:hidden;\">";
echo "<a href=\"#\" onclick=\"quick('quick".$i."')\"><img src=\"prodimg/quick buy.png\" width=\"70%\" height=\"50%\"></a>";
echo "<p style=\"position:absolute; left:0%; top:45%; color:#999;\">Size:-</p>";
$y=50;
$x=68;
for($r=0;$r<count($sizy);$r++)
{
	echo "<p style=\"position:absolute; left:$y%; top:45%;\">$sizy[$r]</p>";
	if($r==count($sizy)-1)
	{
		continue;
	}
	else
	{
		echo "<p style=\"position:absolute; left:$x%; top:45%;\">,</p>";
	}
	$y=$y+25;
	$x=$x+25;
}
echo "</div>";
echo "</div>";	
	
   echo	"<div id=\"quick".$i."\" style=\"position:fixed;top:65%;left:38%;width:70%;height:70%;	margin-top:-35%;margin-left:-25%;visibility:hidden;z-index:10000;background-color:#fff;border-style:solid;border-width:thick;border-color:#828282;\">";
   echo "<a href=\"#\" onclick=\"iquick('quick".$i."')\"><img src=\"prodimg/close.png\" style=\"height:3.5%;width:2.5%;position:relative;left:97.5%;top:0.3%;z-index:10\"></a>";
   echo "<div name=\"main\" id=\"main\"><img src=\"prodimg/$img1\" id=\"mn\" style=\"height:100%;width:100%\" />";
   echo "</div>";
   
   	echo "<div style=\"position:absolute;left:0%;width:50%;height:18%; top:81%; border-color:#666;border-width:thin; border-bottom-style:solid;border-top-style:solid;\">";
	echo "<img src=\"prodimg/$img1\" id=\"img1\" style=\"position:absolute;width:18%; height:100%; left:0%;top:0%\" onmouseover=\"image('prodimg/$img1','img1')\" onmouseout=\"nbrdr('img1')\">";
	echo "<img src=\"prodimg/$img2\" id=\"img2\" style=\"position:absolute;width:18%; height:100%; left:20%;top:0%\" onmouseover=\"image('prodimg/$img2','img2')\" onmouseout=\"nbrdr('img2')\">";
	echo "<img src=\"prodimg/$img3\" id=\"img3\" style=\"position:absolute;width:18%; height:100%; left:40%;top:0%\" onmouseover=\"image('prodimg/$img3','img3')\" onmouseout=\"nbrdr('img3')\">";
	echo "<img src=\"prodimg/$img4\" id=\"img4\" style=\"position:absolute;width:18%; height:100%; left:60%;top:0%\" onmouseover=\"image('prodimg/$img4','img4')\" onmouseout=\"nbrdr('img4')\">";
	echo "<img src=\"prodimg/$img5\" id=\"img5\" style=\"position:absolute;width:18%; height:100%; left:80%;top:0%\" onmouseover=\"image('prodimg/$img5','img5')\" onmouseout=\"nbrdr('img5')\">";
	echo "</div>";
	
	echo "<div style=\"position:absolute; left:50%; top:0%; width:47%; height:100%; background-color:#fff;\">";
	echo "<form method=\"post\" action=\"trolley.php\" id=\"prod123xxx".$i."\" name=\"prod123xxx".$i."\">";
echo "<input type=\"hidden\" name=\"prodid\" value=\"$id\" />";
echo "<input type=\"hidden\" name=\"cost\" value=\"$price\" />";
echo "<input type=\"hidden\" name=\"name1\" value=\"$name\" />";
echo "<input type=\"hidden\" name=\"cost1\" value=\"$price1\" />";
echo "<input type=\"hidden\" name=\"disc\" value=\"$discount\" />";
	echo "<center><font face=\"'Comic Sans MS', cursive\" size=\"+2\" color=\"#333333\"><b>$name</b></font></center>";
	if($flag==1)
{
	echo "<p style=\"position:absolute;left:35%; top:15%;  \"><font face=\"Comic Sans MS, cursive\" size=\"+2\" color=\"#990000\"><b>Rs.$prize</b></font></p>";	
}
else
{
echo "<p style=\"position:absolute;left:25%; top:15%;  text-decoration:line-through;\"><font face=\"Comic Sans MS, cursive\" size=\"+2\" color=\"#979797\"><b>Rs.$prize</b></font></p>";	
echo "<p style=\"position:absolute;left:58%; top:15%;\"><font face=\"Comic Sans MS, cursive\" size=\"+2\" color=\"#990000\"><b>Rs.$prize1</b></font></p>";
echo "<p style=\"position:absolute; left:40%; top:22%;color:#979797;\">($discount)</p>";
}
echo "<p style=\"position:absolute;left:28%; top:35%;\"><font face=\"'Comic Sans MS', cursive	\" size=\"4\" color=\"#333333\">Select your Size:</font>";
echo "<p style=\"position:absolute;left:30%; top:43%; width:50%;\"><select name=\"size\" id=\"size\">";

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
echo "</select>";
echo "</form> ";
if($_SESSION['uname']=="")
{
	if($stock=="In Stock")
	{
	echo "<p style=\"position:absolute;left:30%; top:60%;\"><a href=\"#\"><img src=\"prodimg/addtotrolley.png\" width=\"55%\" height=\"12%\" onclick=\"logtr()\" onmousedown=\"this.src='prodimg/addtotrolley1.png'\" onmouseup=\"this.src='prodimg/addtotrolley.png'\"></a></center>";
	}
	else
	{
		echo "<p style=\"position:absolute;left:15%; top:70%;\"><img src=\"prodimg/addtotrolley2.png\" width=\"55%\" height=\"12%\">";
	}
}
else
{
	if($stock=="In Stock")
	{
echo "<p style=\"position:absolute;left:30%; top:55%;\"><a href=\"#\"><img src=\"prodimg/addtotrolley.png\" width=\"55%\" height=\"12%\" onclick=\"prod1xxx('prod123xxx".$i."')\" onmousedown=\"this.src='prodimg/addtotrolley1.png'\" onmouseup=\"this.src='prodimg/addtotrolley.png'\">";
	}
	else
	{
	echo "<p style=\"position:absolute;left:15%; top:70%;\"><img src=\"prodimg/addtotrolley2.png\" width=\"55%\" height=\"12%\">";
	}
}
if($stock=="In Stock")
{
echo "<img src=\"prodimg/rigthtick.jpg\" width=\"11%\" height=\"31%\" style=\"position:absolute;left:58%; top:10%;\" />";
echo "<p style=\"position:absolute;left:72%; top:65%; text-decoration:none;\"><font face=\"'Comic Sans MS', cursive	\"  color=\"#333333\">$stock</font>";
}
else
{
	echo "<img src=\"prodimg/wrongtick.jpg\" width=\"11%\" height=\"31%\" style=\"position:absolute;left:58%; top:10%;\" />";
echo "<p style=\"position:absolute;left:72%; top:65%; text-decoration:none;\"><font face=\"'Comic Sans MS', cursive	\" size=\"3\" color=\"#333333\">$stock</font>";
}
echo "<p style=\"position:absolute; left:27%; top:72%; color:#333;text-decoration:none;\">$delivery</p>";
if($prize1<200)
{
echo "<p style=\"position:absolute; left:27%; top:76%; font-family:'Comic Sans MS', cursive; color:#333; font-size:90%;\">Note:- For total order amount less than 200 add SHIPPING CHARGE Rs 30</p>";
}
echo "<a href=\"#\" onclick=\"prod1('prod123".$i."')\"><p style=\"position:absolute; left:32%; top:92%; coloe:#333;\">View full Product Info</p>";
	echo "</div>";
	
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
	$a=$q*$t;
mysql_close($aaa);
?>
</div>


<?php
echo "<div id=\"apDiv18\" style=\"top:$a%;\">";
?>
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
