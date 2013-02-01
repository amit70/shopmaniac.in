<html>
<head>
<title>Untitled Document</title>
<script type="text/javascript">
function submitform()
{
    document.forms["filter"].submit();
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
	border:solid;
	border-width:thin;
	border-color:#AFAFAF;
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
</style>
</head>

<body>

<?php
$user="$_POST[user]";
?>
<div name="transdiv" id="logdiv">
<a href="#"><img src="close.png" alt="Close" style="height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10" onClick="ilogtr()" /> </a>

<div id="logdiv1" onMouseOver="login()">
<h3 align="center"><font face="Georgia, Times New Roman, Times, serif" color="#666666">Login</font></h3>

<form method="POST" action="http://localhost/shopmaniac/check.php" onSubmit="return validateForm1()" name="login123">
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
  <input type="hidden" name="flag" value="1" />
 <input type="submit" name="submit" id="submit" value="LOG-IN" style=" position:absolute; left:60%; top:33%;"/>
</form>
</div>

<div id="logdiv2" onMouseOver="reg()">
<h3 align="center"><font face="Georgia, Times New Roman, Times, serif" color="#666666">Register</font></h3>
<form method="POST" action="http://localhost/shopmaniac/Divert.php" name="register" onSubmit="return validateForm()">
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
<h1>Shopmanaic</h1>

<div id="apDiv38">
  <form id="form1" name="form1" method="post" action="">
    <label>
      <input type="text" name="textfield" id="textfield"  value="search for your favourite brand and products" style="position:absolute; left:1%; top:18%; width: 80%; height: 60%; color:#979797"  onfocus="if (this.value == 'search for your favourite brand and products') this.value = '';" onBlur="if (this.value == '') this.value = 'search for your favourite brand and products';">
    </label>
  </form>
  <img src="../../../../Documents and Settings/user/Desktop/project final/search.png" width="89" height="33" style="position:absolute; left:81%; top:8px;"/>
</div>

<a href="Nike Soes.html.html" onMouseOver="this.style.color = '#7A991A'" onMouseOut="this.style.color = '#999'" style="text-decoration:none; color:#999;height:0px; " ><p class="aaa"><img src="e-commerce.jpg" height="22" width="24" />MyTrolley</p></a>


<div id="apDiv43">
<?php
if($user=="")
echo "<p class=\"guest\">Hi,Guest</p>";
else
echo "<p class=\"guest\">Hi,$user</p>";
?>
<p class="call"><img src="../../../../Documents and Settings/user/Desktop/project final/Fullscreen capture 7182012 14722 PM.gif"  style="position:absolute; height:100%; width:15%;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9773436955(24 x 7) 
</p>  
 
<div style="position:absolute; left: 33%; top:10%; width:0.5%; z-index:20; height:100%; background-color:#6D6D6D;">
</div>

<p class="mail"><img src="Email-Lists-Canada-11.jpg" style="position:absolute; height:100%; width:18%;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amit.rajula@gmail.com</p>

<div style="position:absolute; left:71%; top:10%; width:0.5%; z-index:20; height:100%; background-color:#6D6D6D;">
</div>


<p class="acc"><a href="register.html" onMouseOver="this.style.color = '#7A991A'" onMouseOut="this.style.color = '#999'" style="text-decoration:none; color:#999;">MyAccount</a></p>

<div style="position:absolute; left: 89%; top:10%; width:0.5%; z-index:20; height:100%; background-color:#6D6D6D;">
</div>

<?php
if($user=="")
echo "<p class=\"sign\"><a href=\"#\" onMouseOver=\"this.style.color = '#7A991A'\" onMouseOut=\"this.style.color ='#999'\" onclick=\"logtr()\" style=\"text-decoration:none; color:#999;\">SignIn</a></p>";
else
echo "<p class=\"sign\"><a href=\"http://localhost/shopmaniac/index.php\" onMouseOver=\"this.style.color = '#7A991A'\" onMouseOut=\"this.style.color ='#999'\" style=\"text-decoration:none; color:#999;\">SignOut</a></p>";

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
<form action="http://localhost/shopmaniac/wresponse.php" method="POST" name="filter" id="filter">

<div style="position:absolute; left:1%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%;"><b>Category</b></p>
  
  <select name="category" id="category" style="position:absolute; left:2%; top:30%; width:90%;" onChange="javascript: submitform()" disabled= "true" >
  <option>Choose Category</option>
  <option value="Half Sleeves">Half Sleeves</option>
  <option value="Full Sleeves">Full Sleeves</option>
  <option value="Checks">Checks</option>
 
   </select>
 
</div>
<div style="position:absolute; left:19.5%; top:2%; height:96%; width:0.3%; background-color:#AAA;">
</div>

<div style="position:absolute; left:19.5%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%;"><b>Size</b></p>
  
  <select name="size1" id="size1" style="position:absolute; left:10%; top:30%; width:80%;" onChange="javascript: submitform()" disabled= "true" >
  <option>Choose Size</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
 
</div>
<div style="position:absolute; left:39.5%; top:2%; height:96%; width:0.3%; background-color:#AAA;">
</div>

<div style="position:absolute; left:39.5%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%;"><b>Brand</b></p>
  
  <select name="brand1" id="brand1" style="position:absolute; left:10%; top:30%; width:80%;" onChange="javascript: submitform()">
  <option>Choose Brand</option>
  <option value="arrow">ARROW</option>
  <option value="bulchee">BULCHEE</option>
</select>
 
</div>
<div style="position:absolute; left:58.5%; top:2%; height:96%; width:0.3%; background-color:#AAA;">
</div>


<div style="position:absolute; left:58.5%; top:2%; width:19.5%; height:96%; ">
<p style="position:absolute; left:10%; top:3%;"><b>Price</b></p>
  
  <select name="range" id="range" style="position:absolute; left:10%; top:30%; width:80%;" onChange="javascript: submitform()">
  <option>Price Range</option>
  <option value="300-600">300-600</option>
  <option value="601-1000">601-1000</option>
</select>
 
</div>
<div style="position:absolute; left:78.5%; top:2%; height:96%; width:0.3%; background-color:#AAA;">
</div>


<div style="position:absolute; left:79.5%; top:2%; width:19.5%; height:96%; ;">
<p style="position:absolute; left:10%; top:3%;"><b>Color</b></p>
  
  <select name="color" id="color" style="position:absolute; left:10%; top:30%; width:80%;" onChange="javascript: submitform()">
  <option>Choose Color</option>
  <option value="brown">Brown</option>
  <option value="black">Black</option>
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
$qry=mysql_query("select count(*) from products where subname='wallets'");
while($row = mysql_fetch_array($qry))
{
	$count=$row['count(*)'];
}
echo "<p style=\"position:absolute; left:2%; top:60%; font-family:Verdana, Geneva, sans-serif; font-weight:bold; font-size:24px;\">MEN'S WALLETS($count)</p><hr style=\"position:absolute; left:2%; top:70%; width:96%;\"/>";
?>

<div id="apDiv1">
<?php
$l=0;
$t=0;
$i=0;	
	$fetch=mysql_query("select * from products where subname='wallets'");
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
		echo "<div style=\" width:19.2%;height:20%; background-color:#D0D0D0; position:absolute; top:".$t."%; left:
	".$l."%; \">";
	echo "<form action=\"http://localhost/shopmaniac/prodinfo.php\" method=\"post\">";
		echo "<img src=\"$img\" style=\"position:relative;left:5%;margin-top:5%;height:60%;width:90%\">";
	echo "<input type=\"hidden\" value=\"$id\" name=\"pid1\">";
	echo "<p style=\"position:relative;top=60%;left:5%;font-family:Verdana, Geneva, sans-serif; font-size:12px;\">Name: $name</p>";
	echo "<p style=\"position:relative;top=70%;left:5%;font-family:Verdana, Geneva, sans-serif; font-size:12px;\">Cost: $prize</p>";
	echo "<input type=\"hidden\" name=\"uname\" value=\"$user\">";
	echo "<input type=\"submit\" name=\"BUY\" value=\"BUY \" style=\" position:absolute; top:70%; left:70%\">";
	echo "</form>";
	echo "</div>";	
	$l=$l+20.2;
	$i=$i+1;
	}
mysql_close($aaa);
?>
</div>

<div id="trans">
</div>
</body>
</html>