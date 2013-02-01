<html>
<head>
<title>Untitled Document</title>
<script type="text/javascript">
function website()
{
	document.forms["website1"].submit();
}

function aaa(amit)
{
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
function login1()
{
	var x=document.forms["login123"]["Username"].value;
if (x==null || x=="")
  {
  alert("Please enter Username");
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

</script>
<style type="text/css">
<!--
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
	h1
	{
		color:#636;
	}
	
#apDiv1 {
	
	position:absolute;
	width:96%;
	height:200%;
	z-index:14;
	left:2%;
	top:77%;	

	background-color:fff;
}

#apDiv42 {
	position:absolute;
	width:96%;
	height:15%;
	left:2%;
	z-index:1;
	top: 0%;
	
	
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
	
	#apDiv48 {
	position:absolute;
	z-index:13;
	left:2%;
	top:25%;
	width:96%;
	height:32%;
	background-color:#fff;
	border-style:solid;
	border-width:thin;
	border-color:#F4F4F4;
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
#apDiv18 {
	position:absolute;
	width:96%;
	height:65%;
	z-index:12;
	left: 2%;
	top: 278%;
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

<?php
$user="$_POST[user]";
?>

<?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
if($user!="")
{
$qry=mysql_query("select * from User where username='$user'");
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
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">Username:</font></td>
  <td><?php 
  echo "<input type=\"text\" name=\"Username\" id=\"Username\">";
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
</form>
</div>

<div id="logdiv2" onMouseOver="reg()">
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
  
<a href="#" onClick="reg1()"><img src="prodimg/Register1.png" width="50%" height="15%" style="position:absolute; left:25%; top:85%;" onMouseDown="this.src='prodimg/Register2.png'" onMouseUp="this.src='prodimg/Register1.png'"/></a>
</form>
</div>
</div>

<div id="apDiv42">
<form method="get" action="http://localhost/shopmaniac/home.php?uname=$user" id="website1" name="website1">
<?php
echo "<input type=\"hidden\" name=\"uname\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{
echo "<a href=\"http://localhost/shopmaniac/index.php\" ><img src=\"prodimg/Title.png\" width=\"38%\" height=\"100%\" style=\"position:absolute; left:-2%; top:5%;\" /></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"website()\"><img src=\"prodimg/Title.png\" width=\"38%\" height=\"100%\" style=\"position:absolute; left:-2%; top:5%;\" /></a>";
}
?>
   <div style="position:absolute; left:38.8%; top:50%; width:44%; height:49%; background-color:#DCDCDC; "></div>
<form id="form1" name="src1" method="post" action="http://localhost/shopmaniac/search.php">
    <label>
      <input type="text" name="srch" id="srch"  value="search for your favourite brand and products" style="position:absolute;  width: 33.3%; height: 33%; color:#979797; left:39.4%; top:55.2%; font-family:'Comic Sans MS', cursive"  onfocus="if (this.value == 'search for your favourite brand and products') this.value = '';" onBlur="if (this.value == '') this.value = 'search for your favourite brand and products';">
    </label>
    <?php
    echo "<input type=\"hidden\" name=\"user\" value=\"$user\">";
	?>
  </form>
 <img src="prodimg/Search2.png" width="10%" height="54%" style="position:absolute; left:73%; top:51.2%;"  onmousedown="this.src='prodimg/Search1.png'" onMouseUp="this.src='prodimg/Search2.png'" onClick="aaa('src1')"/>

<form method="get" action="http://localhost/shopmaniac/mytrolley2.php?uname=$user" id="trol" name="trol">
<?php
echo "<input type=\"hidden\" name=\"uname\" value=\"$user\" >";
?>
</form>
<a href="#" onClick="mytrol()"> <img src="prodimg/Trolley11.png" style="position:absolute; left:83%; top:40%;width:6%;height:60%" onMouseDown="this.src='prodimg/Trolley12.png'" onMouseUp="this.src='prodimg/Trolley11.png'">
<?php
if($user!="")
{
echo "<p style=\"position:absolute; left:85%; top:75%; color:#555; font-size:75%;\">(".($no-1).")</p>";
}
else
{
	echo "<p style=\"position:absolute; left:85%; top:75%; color:#555; font-size:75%;\">(0)</p>";
}
?></a>


<?php
if($user=="")
echo "<p style=\"position:absolute; left:50%; top:-16%; font-size:80%; color:#717171; font-family:'Comic Sans MS', cursive\">Hi,Guest|</p>";
else
echo "<p style=\"position:absolute; left:50%; top:-16%; font-size:80%; color:#717171; font-family:'Comic Sans MS', cursive\">Hi,$user|</p>";
?>

<p style="position:absolute; left:61%; top:-16%; font-size:73%; color:#717171; font-family:'Comic Sans MS', cursive">9773436955(24x7)&nbsp;&nbsp;&nbsp;|
</p>  
 <img src="Fullscreen capture 7182012 14722 PM.gif"  style="position:absolute; left:58%; top:1%; height:15%; width:2%;"/> 
 
<p style="position:absolute; left:80%; top:-16%; font-size:70%; color:#717171; font-family:'Comic Sans MS', cursive">amit.rajula@gmail.com |</p>
<img src="Email-Lists-Canada-11.jpg" style="position:absolute; height:15%; width:2%; left:77%; top:1%;"/>


<form method="post" action="http://localhost/shopmaniac/myaccount.php" id="acc" name="acc">
<?php
echo "<input type=\"hidden\" name=\"name\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"logtr()\"><img src=\"prodimg/Account11.png\" style=\"position:absolute; left:94.5%; top:39%;width:6%;height:60%\" onmousedown=\"this.src='prodimg/Account12.png'\" onmouseup=\"this.src='prodimg/Account11.png'\"></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"myaccount()\"><img src=\"prodimg/Account11.png\" style=\"position:absolute; left:94.5%; top:39%;width:6%;height:60%\" onmousedown=\"this.src='prodimg/Account12.png'\" onmouseup=\"this.src='prodimg/Account11.png'\"></a>";
}
?>



<?php
if($user=="")
{
echo "<p style=\"position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive\"><a href=\"#\" onmouseover=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#717171'\" onclick=\"logtr()\" style=\"text-decoration:none; color:#717171;\">SignIn</a></p>";
}
else
{
echo "<p style=\"position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive\"><a href=\"http://localhost/shopmaniac/index.php\" onmouseover=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#717171'\" style=\"text-decoration:none; color:#717171;\">SignOut</a></p>";
}
?>

<form method="get" action="http://localhost/shopmaniac/home.php?uname=$user" id="home" name="home">
<?php
echo "<input type=\"hidden\" name=\"uname\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{
	echo "<a href=\"http://localhost/shopmaniac/index.php\"><img src=\"prodimg/Home1.png\" style=\"position:absolute; left:89.5%; top:40%;width:4.5%;height:60%\" onmousedown=\"this.src='prodimg/Home2.png'\" onmouseup=\"this.src='prodimg/Home1.png'\"></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"homes()\"><img src=\"prodimg/Home1.png\" style=\"position:absolute; left:89.5%; top:40%;width:4.5%;height:60%\" onmousedown=\"this.src='prodimg/Home2.png'\" onmouseup=\"this.src='prodimg/Home1.png'\"></a>";
}
?>
</div>
</div>

<ul id="menu" class="black">
			<li><a href="#"><b>Men</b></a>
           <ul>
           		<li style="color:#FFF; background-color:#111; font-family:Verdana, Geneva, sans-serif;"><b>Clothing</b>
                
                <a href="www.google" style="font-size:12px;">formal</a>
                <a href="www.google.com" style="font-size:12px;">Trousers</a>
                <a href="casual shirt/casualshirts.html" style="font-size:12px;">Casual Shirts</a>
                <a href="www.google.com" style="font-size:12px;">Jeans</a>
                <a href="www.google.com" style="font-size:12px;">T-shirts</a>
                <a href="www.google.com" style="font-size:12px;">Shorts</a>
                </li>
                </ul>
                </li>
              <li><a href="#"><b>FootWear</b></a>
              <ul>  
                
                <a href="www.google" style="font-size:12px;">Sports</a>
                <a href="www.google.com" style="font-size:12px;">Formal wear</a>
                <a href="www.google" style="font-size:12px;">Casual wear</a>
                <a href="www.google" style="font-size:12px;">Slippers</a>
              </ul>
          </li>
                
                <li><a href="www.google.com"><b>Accessories</b></a>
                <ul>
                 <a href="www.google" style="font-size:12px;">Wallets</a>
                 <a href="www.google" style="font-size:12px;">Goggles</a>
                 <a href="www.google" style="font-size:12px;">Caps</a>
                 <a href="www.google" style="font-size:12px;">Ties & Couplings</a>         </ul>
  </li>
         
			<li><a href="#"><b>Home-Kitchen</b></a>
            <ul>
            <a href="www.google" style="font-size:12px; ">Aquasafe</a>
            <a href="www.google" style="font-size:12px; ">Canisters</a>
            <a href="www.google" style="font-size:12px; ">dry storage </a>
            <a href="www.google" style="font-size:12px; ">Food Preparation</a>            <a href="www.google" style="font-size:12px; ">Freezer</a>
            <a href="www.google" style="font-size:12px; ">refridgerator</a>
            <a href="www.google" style="font-size:12px; ">lunch 'n' outdoor</a>
            <a href="www.google" style="font-size:12px; ">Microwave</a>
            <a href="www.google" style="font-size:12px; ">Serving</a>
            </ul>
            </li>
            
			<li><a href="#">Brands</a>
            <ul>
            <a href="www.google" style="font-size:12px; background-color:#111;">Arrow</a>
            <a href="www.google" style="font-size:12px; background-color:#111;">Blackbeers</a>
            <a href="www.google" style="font-size:12px; background-color:#111;">Spykar</a>
            <a href="www.google" style="font-size:12px; background-color:#111;">Pepe</a>
            <a href="www.google" style="font-size:12px; background-color:#111;">Levis</a>
            <a href="www.google" style="font-size:12px; background-color:#111;">Jack n Jones</a>
            <a href="www.google" style="font-size:12px; background-color:#111;">Tommy</a>
            <a href="www.google" style="font-size:12px; background-color:#111;">Espirit</a>
            <a href="www.google" style="font-size:12px; background-color:#111;">Buckarro</a>
            <a href="www.google" style="font-size:12px; background-color:#111;">Provogue</a>
            <a href="www.google" style="font-size:12px; background-color:#111;">nike</a>
            </ul>
			</li>
            
</ul>


<div id="apDiv48">
<form action="http://localhost/shopmaniac/arrowresponse.php" method="POST" name="filter" id="filter">

<div style="position:absolute; left:1%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%; font-family:'Comic Sans MS', cursive; color:#111;"><b>Category</b></p>
  
  <select name="category" id="category" style="position:absolute; left:2%; top:30%; width:90%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()" >
  <option>Choose Category</option>
<?php 
   $aaaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaaa);
$misc=array();
$fl=0;

$qry1111="select * from products where brand='arrow'";
$fetch1111=mysql_query($qry1111);
while($row1111 = mysql_fetch_array($fetch1111))
{
		$cat=$row1111['category'];
		
			for($g=0;$g<count($misc);$g++)
			{
				if(soundex($cat)==soundex($misc[$g]))
				{
					$fl=1;
					break;
				}
				else
				{
					$fl=0;
				}
			}
	
		if($fl==0)
		{
			$pos=count($misc);
			$misc[$pos]=$cat;
	}
			
}


for($i=0;$i<count($misc);$i++)
	{
	echo "<option value=\"cat,$misc[$i]\">";
		echo "<p style=\"position:absolute; left:50%; top:50%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:100%;\">$misc[$i]
		</p>";
		echo "</option>";
	}
	


mysql_close($aaaa);

?>
   </select>
 
</div>
<div style="position:absolute; left:19.5%; top:2%; height:96%; width:0.3%; background-color:#F1F1F1;">
</div>

<div style="position:absolute; left:19.5%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%; font-family:'Comic Sans MS', cursive;"><b>Size</b></p>
  
  <select name="size1" id="size1" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Choose Size</option>
 <?php 
   $aaaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaaa);
$misc=array();
$fl=0;

$qry1111="select * from products where brand='arrow'";
$fetch1111=mysql_query($qry1111);
while($row1111 = mysql_fetch_array($fetch1111))
{
		$size=$row1111['size'];
		
			for($g=0;$g<count($misc);$g++)
			{
				if(soundex($size)==soundex($misc[$g]))
				{
					$fl=1;
					break;
				}
				else
				{
					$fl=0;
				}
			}
	
		if($fl==0)
		{
			$pos=count($misc);
			$misc[$pos]=$size;
	}
			
}


for($i=0;$i<count($misc);$i++)
	{
	echo "<option value=\"size,$misc[$i]\">";
		echo "<p style=\"position:absolute; left:50%; top:50%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:100%;\">$misc[$i]
		</p>";
		echo "</option>";
	}
	


mysql_close($aaaa);

?>
</select>
 
</div>
<div style="position:absolute; left:39.5%; top:2%; height:96%; width:0.3%; background-color:#F1F1F1;">
</div>

<div style="position:absolute; left:39.5%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%;font-family:'Comic Sans MS', cursive;"><b>Brand</b></p>
  
  <select name="brand1" id="brand1" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Choose Brand</option>
<?php 
   $aaaaaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaaaaa);
$misc=array();
$fl=0;

   $qry1111="select * from products where brand='arrow'";
$fetch1111=mysql_query($qry1111);
while($row1111 = mysql_fetch_array($fetch1111))
{
		$brand=$row1111['brand'];
		
			for($g=0;$g<count($misc);$g++)
			{
				if(soundex($brand)==soundex($misc[$g]))
				{
					$fl=1;
					break;
				}
				else
				{
					$fl=0;
				}
			}
		
		if($fl==0)
		{
			$pos=count($misc);
			$misc[$pos]=$brand;
		}
}


for($i=0;$i<count($misc);$i++)
{
	echo "<option value=\"brand,$misc[$i]\">";
		echo "<p style=\"position:absolute; left:50%; top:50%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:100%;\">$misc[$i]</p>";
		echo "</option>";
}
mysql_close($aaaaaa);
?>
</select>
 
</div>
<div style="position:absolute; left:58.5%; top:2%; height:96%; width:0.3%; background-color:#F1F1F1;">
</div>


<div style="position:absolute; left:58.5%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%; font-family:'Comic Sans MS', cursive;"><b>Price</b></p>
  
  <select name="range" id="range" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Price Range</option>
  <option value="300-600">300-600</option>
  <option value="601-1000">601-1000</option>
</select>
 
</div>
<div style="position:absolute; left:78.5%; top:2%; height:96%; width:0.3%; background-color:#F1F1F1;">
</div>


<div style="position:absolute; left:79.5%; top:2%; width:19.5%; height:96%; ;">
<p style="position:absolute; left:10%; top:3%; font-family:'Comic Sans MS', cursive;"><b>Color</b></p>
  
  <select name="color" id="color" style="position:absolute; left:10%; top:30%; width:80%; font-family:'Comic Sans MS', cursive;" onChange="javascript: submitform()">
  <option>Choose Color</option>
   <?php 
   $aaaaaaa=mysql_connect("localhost","root","system");
   mysql_select_db("eshop",$aaaaaaa);
$misc=array();
$fl=0;

   $qry1111="select * from products where brand='arrow'";
$fetch1111=mysql_query($qry1111);
while($row1111 = mysql_fetch_array($fetch1111))
{
		$cl=$row1111['color'];
		
			for($g=0;$g<count($misc);$g++)
			{
				if(soundex($cl)==soundex($misc[$g]))
				{
					$fl=1;
					break;
				}
				else
				{
					$fl=0;
				}
			}
		
		if($fl==0)
		{
			$pos=count($misc);
			$misc[$pos]=$cl;
		}
}


for($i=0;$i<count($misc);$i++)
{
	echo "<option value=\"cl,$misc[$i]\">";
		echo "<p style=\"position:absolute; left:50%; top:50%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:100%;\">$misc[$i]</p>";
		echo "</option>";
}
mysql_close($aaaaaaa);
?>
</select>
</div>
<?php
echo "<input type=\"hidden\" name=\"uname\" value=\"$user\">";
?>
</form>
</div>

<?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select count(*) from products where brand='arrow'");
while($row = mysql_fetch_array($qry))
{
	$count=$row['count(*)'];
}
echo "<p style=\"position:absolute; left:2%; top:60%; font-family:'Comic Sans MS', cursive; font-weight:bold; font-size:150%;\">ARROW($count)</p><hr style=\"position:absolute; left:2%; top:70%; width:96%;\"/>";
?>

<div id="apDiv1">

<?php
$l=0;
$t=0;
$i=0;	
	$fetch=mysql_query("select * from products where brand='arrow'");
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
			$t=$t+22;
			$l=0;
		}
		$id=$row['pid'];
		$name= $row['pname'];
		$size= $row['size'];
		$prize= $row['price'];
		$img=$row['img1'];
		
		echo "<form method=\"post\" action=\"http://localhost/shopmaniac/prodinfo.php\" id=\"prod123\" name=\"prod123".$i."\">";
		echo "<input type=\"hidden\" name=\"uname\" value=\"$user\">";
        echo "<input type=\"hidden\" name=\"pid1\" value=\"$id\" >";
echo "</form> ";
		
		echo "<a href=\"#\" onclick=\"prod1('prod123".$i."')\">";
		echo "<div style=\" width:19.2%;height:22%; background-color:#fafafa; position:absolute; top:".$t."%; left:".$l."%; \">";
	echo "<img src=\"prodimg/p4.jpg\" width=\"96%\" height=\"60%\" style=\"position:absolute; top:1%; left:2%;\">";
	echo "<p style=\"position:absolute; top:56%; left:2%; font-family:'Comic Sans MS', cursive; color:#555; font-size:94%;\"> $name</p>";
	echo "<p style=\"position:absolute; left:2%; top:72%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:100%;\"> $prize</p>";
	
	echo "<a href=\"#\"><img src=\"prodimg/Buy1.png\" width=\"35%\" height=\"15%\" style=\"position:absolute; left:2%; top:87%; \" onclick=\"prod1('prod123".$i."')\" onmousedown=\"this.src='prodimg/Buy2.png'\" onmouseup=\"this.src='prodimg/Buy1.png'\"></a>";
	echo "</div>";	
	echo "</a>";
	$l=$l+20.2;
	$i=$i+1;
	}
	}
	else
	{
		echo "<p style=\"position:absolute; left:35%; top:0%; font:'Comic Sans MS', cursive; font-size:150%; color:#111; font-family:'Comic Sans MS', cursive;\">SORRY NO PRODUCT FOUND</p>";
	}
mysql_close($aaa);
?>
</div>



<div id="apDiv18">
<p class="shopmanaic"><u>Shopmanaic</u></p>
<p class="myaccount"><u>My Account</u></p>
<p class="policies"><u>Policies</u></p>
<p class="help"><u>Help</u></p>
<p class="products"><u>Products</u></p><br />
<?php
if($user=="")
{
	echo "<a href=\"http://localhost/shopmaniac/index.php\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \" ><p class=\"home\">Home</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"homes()\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \" ><p class=\"home\">Home</p></a>";
}
?>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"logtr()\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"account\">MyAccount</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"myaccount()\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"account\">MyAccount</p></a>";
}
?>
<form method="post" action="http://localhost/shopmaniac/returnpolicy.php" id="rp" name="rp">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/returnpolicy.php" id="rp1" name="rp1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('rp')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"returnpolicy\">Return Policy</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('rp1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"returnpolicy\">Return Policy</p></a>";
}
?>
<form method="post" action="http://localhost/shopmaniac/placeorder.php" id="po" name="po">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/placeorder.php" id="po11" name="po11">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('po')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"placeorder\">Place Order</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('po11')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"placeorder\">Place Order</p></a>";
}
?>
<a href="#" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="formal">Formal
Shirts</p></a>
<br />
<form method="post" action="http://localhost/shopmaniac/aboutus.php" id="as" name="as">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/aboutus.php" id="as1" name="as1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('as')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"aboutus\">About us</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('as1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"aboutus\">About us</p></a>";
}
?>
<a href="#" onClick="mytrol()" onMouseOver="this.style.color = '#DF7000'"  onmouseout="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="mytrolly">My Trolley</p></a>
<form method="post" action="http://localhost/shopmaniac/privacypolicy.php" id="pp" name="pp">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/privacypolicy.php" id="pp1" name="pp1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('pp')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"privacypol\">Privacy Policy</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('pp1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"privacypol\">Privacy Policy</p></a>";
}
?>



<form method="post" action="http://localhost/shopmaniac/trousers.php" id="tr" name="tr">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/trousers.php" id="tr1" name="tr1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('tr')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"trousers\">Trousers</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('tr1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"trousers\">Trousers</p></a>";
}
?>


<form method="post" action="http://localhost/shopmaniac/shippingpolicy.php" id="sp" name="sp">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/shippingpolicy.php" id="sp1" name="sp1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('sp')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"shipping\">Shipping Policy</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('sp1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"shipping\">Shipping Policy</p></a>";
}
?>
<form method="post" action="http://localhost/shopmaniac/returnproduct.php" id="returnp" name="returnp">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/returnproduct.php" id="returnp1" name="returnp1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('returnp')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"returnp\">Return Product</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('returnp1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"returnp\">Return Product</p></a>";
}
?>

<form method="post" action="http://localhost/shopmaniac/cs.php" id="casual" name="casual">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/cs.php" id="casua11" name="casual1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('casual')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"casual\">Casual Shirts</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('casual1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"casual\">Casual Shirts</p></a>";
}
?>

<form method="post" action="http://localhost/shopmaniac/t&c.php" id="terms" name="terms">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/t&c.php" id="terms1" name="terms1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('terms')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"tc\">Terms & Conditions</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('terms1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"tc\">Terms & Conditions</p></a>";
}
?>

<form method="post" action="http://localhost/shopmaniac/jeans.php" id="j" name="j">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/jeans.php" id="j1" name="j1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('j')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"jeans\">Jeans</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('j1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"jeans\">Jeans</p></a>";
}
?>


<form method="post" action="http://localhost/shopmaniac/footwear.php" id="fw" name="fw">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/footwear.php" id="fw1" name="fw1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('fw')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"footwear\">Footwear</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('fw1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"footwear\">Footwear</p></a>";
}
?>
<form method="post" action="http://localhost/shopmaniac/faq.php" id="frequent" name="frequent">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/faq.php" id="frequent1" name="frequent1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('frequent')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"faq\">FAQ'S</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('frequent1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"faq\">FAQ'S</p></a>";
}
?>

<br/>
<form method="post" action="http://localhost/shopmaniac/trackorder.php" id="tc" name="tc">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/trackorder.php" id="tc1" name="tc1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('tc')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"trackorder\">Track Order</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('tc1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"trackorder\">Track Order</p></a>";
}
?>

<form method="post" action="http://localhost/shopmaniac/homeware.php" id="hw" name="hw">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/homeware.php" id="hw1" name="hw1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('hw')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"kitchen\">HomeWare</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('hw1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"kitchen\">HomeWare</p></a>";
}
?>
<p class="follow"><u>Follow Us</u></p>
<div id="apDiv21"><a href="www.facebook.com"><img src="prodimg/facebook-logo1.jpg" width="36" height="34" /></a></div>
<div id="apDiv25"><a href="www.twitter.com"><img src="prodimg/twitter_logo.jpg" width="36" height="34" /></a></div>
<div id="apDiv23"><a href="www.google.com"><img src="prodimg/google_plus_logo1.jpg" width="36" height="34" /></a></div> 
<div id="apDiv26"><a href="www.blog.com"><img src="prodimg/blogger_logo.jpg.png" width="36" height="34" /></a></div>
<p class="stay"><u>Stay Connected for Daily Updates</u></p>

<form id="contactaaa" name="contactaaa" method="post" action="contact.php" >
<?php 
echo "<input type=\"text\" name=\"contact1\" id=\"contact1\" style=\"position:absolute; top:59%; left:77%; color:#CCC; width:17%; height:5%; border:#F60\"  value=\"Enter your Email-Id\" onfocus=\"if (this.value == 'Enter your Email-Id') this.value = '';\" onblur=\"if (this.value == '') this.value = 'Enter your Email-Id';\"  />";


echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";

?>
</form>
<a href="#" onClick="contact()"><img src="prodimg/submit.png" width="10%" height="5%" onMouseDown="this.src='prodimg/submit1.png'" onMouseUp="this.src='prodimg/submit.png'" style="position:absolute; top:58.5%; left:94.5%; color:#CCC; width: 5%; height:6%;"  /></a>


<form method="post" action="http://localhost/shopmaniac/contactus.php" id="cus" name="cus">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/contactus.php" id="cus1" name="cus1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{

echo "<a href=\"#\" onclick=\"go('cus')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"contactus\">ContactUs</p></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"go('cus1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; \"><p class=\"contactus\">ContactUs</p></a>";
}
?>
<form method="post" action="http://localhost/shopmaniac/mypoints.php" id="mp" name="mp">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/mypoints.php" id="mp1" name="mp1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{
echo "<a href=\"#\"  onclick=\"go('mp')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; position:absolute; left:19%; top:33%; font-family:'Comic Sans MS', cursive\" >MyPoints</a>";

}
else
{
	echo "<a href=\"#\"  onclick=\"go('mp1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; position:absolute; left:19%; top:33%; font-family:'Comic Sans MS', cursive\" >MyPoints</a>";
}
?>
<form method="post" action="http://localhost/shopmaniac/t-shirts.php" id="tees" name="tees">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/t-shirts.php" id="tees1" name="tees1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{	
echo "<a href=\"#\"  onclick=\"go('tees')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; position:absolute; left:61%; top:48%; font-family:'Comic Sans MS', cursive\" >T-Shirts</a>";
}
else
{
echo "<a href=\"#\"  onclick=\"go('tees1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; position:absolute; left:61%; top:48%; font-family:'Comic Sans MS', cursive\" >T-Shirts</a>";
}
?>
<form method="post" action="http://localhost/shopmaniac/mycredits.php" id="myc" name="myc">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"\" >";
?>
</form>
<form method="post" action="http://localhost/shopmaniac/mycredits.php" id="myc1" name="myc1">
<?php
echo "<input type=\"hidden\" name=\"user\" value=\"$user\" >";
?>
</form>
<?php
if($user=="")
{
echo "<a href=\"#\"  onclick=\"go('myc')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; position:absolute; left:19%; top:39%; font-family:'Comic Sans MS', cursive\" >MyCredits</a>";

}
else
{
	echo "<a href=\"#\"  onclick=\"go('myc1')\" onmouseover=\"this.style.color = '#DF7000'\"  onmouseout=\"this.style.color = '#999'\" style=\"text-decoration:none; color:#999;height:0px; position:absolute; left:19%; top:39%; font-family:'Comic Sans MS', cursive\" >MyCredits</a>";
}
?>
<div id="apDiv40"></div>
</div>

<div id="trans">
</div>

</body>
</html>