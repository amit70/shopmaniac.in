<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" language="javascript">
function website()
{
	document.forms["website1"].submit();
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

function reg1()
{
  var x=document.forms["register"]["name123"].value;
  if (x==null || x=="")
  {
  	alert("Name must be filled out");
  	return false;
  }
var z=document.forms["register"]["add"].value;
if (z==null || z=="")
  {
  	alert("Address must be filled out");
 	return false;
  }


var x=document.forms["register"]["contact"].value;
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

function mytrol()
{
	document.forms["trol"].submit();
}

		function myaccount()
{
    document.forms["acc"].submit();
}
function homes()
{ 
    document.forms["home"].submit();
}
function aaa(amit)
{
    document.forms[amit].submit();
}	
function confirm()
{
	     if(document.getElementById('pay1').checked || document.getElementById('pay2').checked || document.getElementById('pay3').checked || document.getElementById('pay4').checked)
		 {
			 document.forms["confirm1"].submit();

		 }
		 else
		 {
			 alert("Select any one payment option");
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
			
			#container {
            background-color: #fff;
            width: 420px;
            margin: 0px auto;
            padding: 200px;
			
    height:0px;
        }
p.guest
{
	position:absolute;

	right:95%;
	top:-50%;
	font-size:90%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.call
{
	position:absolute;
	right:63%;
	top:-50%;
	font-size:85%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.mail
{
	position:absolute;
	right:20%;
	top:-50%;
	font-size:93%;
	font-family:Verdana, Geneva, sans-serif;
	color:#999;
}
p.acc
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
	width: 45%;
	height: 18%;
	font:Verdana, Geneva, sans-serif;
	font-size:11px;
	color:#666;
	
}
#apDiv1 {
	position:relative;
	width:66%;
	height:300px;
	z-index:2;
	left: -200px;
	top: -165px;
	background-color:#f6f6f6;
	overflow:scroll;
}

#apDiv2 {
	position:relative;
	width:66%;
	height:300px;
	z-index:2;
	left: 85px;
	top: -465px;
	background-color:#f6f6f6;
}
#apDiv3 {
	position:relative;
	width:63%;
	height:300px;
	z-index:2;
	right:-370px;
	top: -765px;
	background-color:#f6f6f6;
}
#logdiv
{
	position:fixed;
	top:50%;
	left:50%;
	width:45%;
	height:70%;
	margin-top:-35%;
	margin-left:-25%;
	visibility:hidden;
	z-index:10000;
	background-color:#f6f6f6;
	border:thin;
	border-style:solid;
	border-color:#fff;
}

#logdiv2
{
	position:absolute;
	left:2%;
	top:3%;
	width:60%;
	height:98%;
	opacity:100;
}
p.edit
{
	position:absolute;
	left:30%;
	top:85%;
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
				#bill
				{
					position:relative;
					left:-200px;
					top:-175px;
					width:198%;
					height:40px;
					background-color:#f6f6f6;
				}
				#confirm
				{
					position:relative;
					left:100px;
					top:-640px;
					width:70%;
					height:50px;
					
				}
				#payment
				{
					position:relative;
					left:230px;
					top:-747px;
					width:96%;
					height:35px;
					background-color:#f6f6f6;

				}
				
</style>
</head>

<body>
<div id="container">
<?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from User where username='$_SESSION[uname]'");
while($row = mysql_fetch_array($qry))
{
	$trolley1=$row['trolley'];
}
$arr=spliti(",",$trolley1);
$no=0;
$no=count($arr);
?>



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
      <input type="text" name="srch" id="srch"  value="search for your favourite brand and products" style="position:absolute;  width: 33.3%; height: 33%; color:#979797; left:39.4%; top:55.2%; font-family:'Comic Sans MS', cursive"  onfocus="if (this.value == 'search for your favourite brand and products') this.value = '';" onblur="if (this.value == '') this.value = 'search for your favourite brand and products';">
    </label>
  
  </form>
 <img src="prodimg/Search2.png" width="10%" height="54%" style="position:absolute; left:73%; top:51.2%;"  onmousedown="this.src='prodimg/Search1.png'" onmouseup="this.src='prodimg/Search2.png'" onclick="aaa('src1')"/>


<a href="mytrolley2.php"><img src="prodimg/Trolley11.png" style="position:absolute; left:83%; top:40%;width:6%;height:60%" onmousedown="this.src='prodimg/Trolley12.png'" onmouseup="this.src='prodimg/Trolley11.png'">
<?php
echo "<p style=\"position:absolute; left:85%; top:75%; color:#555; font-size:75%;\">(".($no-1).")</p>";
?>
</a>

<p style="position:absolute; left:50%; top:-16%; font-size:80%; color:#717171; font-family:'Comic Sans MS', cursive">Hi,<?php
echo "$_SESSION[uname]";
?>   |</p>


<p style="position:absolute; left:61%; top:-16%; font-size:73%; color:#717171; font-family:'Comic Sans MS', cursive">9773436955(24x7)&nbsp;&nbsp;&nbsp;|
</p>  
 <img src="Fullscreen capture 7182012 14722 PM.gif"  style="position:absolute; left:58%; top:1%; height:15%; width:2%;"/> 
 
<p style="position:absolute; left:80%; top:-16%; font-size:70%; color:#717171; font-family:'Comic Sans MS', cursive">amit.rajula@gmail.com |</p>
<img src="Email-Lists-Canada-11.jpg" style="position:absolute; height:15%; width:2%; left:77%; top:1%;"/>


<a href="myaccount.php"><img src="prodimg/Account11.png" style="position:absolute; left:94.5%; top:39%;width:6%;height:60%" onmousedown="this.src='prodimg/Account12.png'" onmouseup="this.src='prodimg/Account11.png'"></a>

<p style="position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive"><a href="http://localhost/shopmaniac/index.php" onmouseover="this.style.color = '#DF7000'" onmouseout="this.style.color = '#717171'" style="text-decoration:none; color:#717171;">SignOut</a></p>


<a href="home.php"><img src="prodimg/Home1.png" style="position:absolute; left:89.5%; top:40%;width:4.5%;height:60%" onmousedown="this.src='prodimg/Home2.png'" onmouseup="this.src='prodimg/Home1.png'"></a>
</div>


<div id="bill">
<p style="position:absolute;top:-50%; left:35%;font-family:'Comic Sans MS', cursive; font-size:150%; font-variant:small-caps;">Billing Counter</p>
</div>


<div id="apDiv1">
<p style="position:absolute;top:-4%;left:20%; font-family:'Comic Sans MS', cursive; color:#111; font-weight:bold;">Order Details</p>
<table align="left" border="0" cols=2 cellspacing="3" style="position:absolute; left:2%; top:10%">
  <tr>
  <th height="40" width="140" ><font color="#666666" face="Comic Sans MS, cursive">Name</font></th>
  <th height="40" width="45"><font color="#666666" face="Comic Sans MS, cursive">Size</font></th>
  <th height="40" width="45"><font color="#666666" face="Comic Sans MS, cursive">Price</font></th>
  </tr>
  
  <?php
  $total=0;
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from User where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$trolley1=$row['trolley'];
}
$arr=spliti(",",$trolley1);
$no=count($arr);
for($i=0;$i<$no-1;$i++)
{
$temp=(int)$arr[$i];
	$qry=mysql_query("select * from products where pid=$temp");
	while($row = mysql_fetch_array($qry))
	{
		$id=$row['pid'];
		$pname= $row['pname'];
		$size= $row['size'];
		$price= $row['discprice'];
		$img1=$row['img1'];
		$brand=$row['brand'];
	}


  echo "<tr>";
  echo "<td align=\"center\"><font face=\"Comic Sans MS, cursive\">";
  echo "$pname";
  echo "</font>";
  echo "</td>";
  

  echo "<td align=\"center\"><font face=\"Comic Sans MS, cursive\">";
  echo "$size";
   echo "</font>";
  echo "</td>";
  
  
  echo "<td align=\"center\"> <font face=\"Comic Sans MS, cursive\">";
  echo "$price";
   echo "</font>";
  echo "</td>";
  
  echo "<tr>";
    $total+=$price;
  }

  ?>
  </table>
</div>



<div id="apDiv2">
  <?php
  $aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from User where username='$_SESSION[uname]'");
while($row = mysql_fetch_array($qry))
{
	$name=$row['name'];
	$add=$row['address'];
	$contact=$row['contact'];
	$email=$row['email'];
}
  ?>
<p style="position:absolute; left:30%; top:-4%; font-family:'Comic Sans MS', cursive; color:#111; font-weight:bold;">Billing Details</p>

<table align="left" border="0" cols=2 cellspacing="3" style="position:absolute;left:2%; top:8%">
  <tr>
  <td height="50" width="100"><font color="#666666" face="Comic Sans MS, cursive">Name:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "$name";
?></font>
 </td>
  </tr>
  
  
  <tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">Address:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "$add";
?></font>
 </td>
  </tr>
  
   <tr>
  <td height="70"><font color="#666666" face="Comic Sans MS, cursive">Contact Number:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "$contact";
?></font>
 </td>
  </tr>
  
   
<tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">Email Id:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "$email";
?></font>
 </td>
  </tr>
  </table>
</div>

<div id="apDiv3">
<?php
  $aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from User where username='".$_SESSION[uname]."'");
while($row = mysql_fetch_array($qry))
{
	$name=$row['name'];
	$add=$row['address'];
	$contact=$row['contact'];
	$email=$row['email'];
	$mypoints=$row['mypoints'];
}
  ?>

<p style="position:absolute; left:30%; top:-4%; font-family:'Comic Sans MS', cursive; font-weight:bold;">Shipping Details</p>

<table align="left" border="0" cols=2 cellspacing="3" style="position:absolute;left:2%; top:10%">
  <tr>
  <td height="50" width="100"><font color="#666666" face="Comic Sans MS, cursive">Name:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "$name";
?></font>
 </td>
  </tr>
  
  
  <tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">Address:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "$add";
?></font>
 </td>
  </tr>
  
   
  
  <tr>
  <td height="70"><font color="#666666" face="Comic Sans MS, cursive">Contact Number:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "$contact";
?></font>
 </td>
  </tr>
  
   
<tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">Email Id:- </font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "$email";
?></font>
 </td>
  </tr>
  </table>

<p class="edit"><a href="#" onmouseover="this.style.color = '#DF7000'" onmouseout="this.style.color = '#F00'" onclick="logtr()" style="text-decoration:none; color:#F00; text-decoration:underline;">EDIT</a></p>

</div>  


<table align="left" border="5" cols=2 cellspacing="2" style="position:relative; left:-200px; top:-750px;">
 <tr>
  <th height="40" width="80"><font color="#666666" face="Comic Sans MS, cursive">Total</font></th>

  <th height="40" width="80"><font color="#666666" face="Comic Sans MS, cursive">MyPoints Discount</font></th>
      <th height="40" width="80"><font color="#666666" face="Comic Sans MS, cursive">Total</font></th>

  <th height="40" width="80"><font color="#666666" face="Comic Sans MS, cursive">Credit</font></th>

  <th height="40" width="80"><font color="#666666" face="Comic Sans MS, cursive">You Pay</font></th>
  </tr>
  
  <tr>
  <td><font face="Comic Sans MS, cursive"><?php
  $full=0;
  if($total<200)
  {
  $full=$total+30;
  echo "$total+30=$full";
  }
  else
  {
	  echo "$total";
  }
  ?></font></td> 
  
   <td><font face="Comic Sans MS, cursive"><?php
  if($mypoints<=4999)
  {
	  echo "0%";
  }
   else if($mypoints>=5000 && $mypoints<=7999)
   {
   echo "3%";
   }
  else if($mypoints>=8000 && $mypoints<=9999)
  {
   echo "5%";
  }
  else if($mypoints>=10000 && $mypoints<=14999)
  {
	  echo "7%";
  }
  else if($mypoints>=15000)
  {
	  echo "10%";
  }
   ?>
 </font></td>
 
  <td><font face="Comic Sans MS, cursive"><?php
  $final=0;
  if($total<200)
  {
	  if($mypoints<=4999)
  {
	  $final=$full-0;
	  echo "$final";
  }
  else if($mypoints>=5000 && $mypoints<=7999)
  {
	  $discount=($full*3)/100;
	  $final=$full-$discount;
	  echo "$final";
  }
  else if($mypoints>=8000 && $mypoints<=9999)
  {
	  $discount=($full*5)/100;
	  $final=$full-$discount;
	  echo "$final";
  }
  else if($mypoints>=10000 && $mypoints<=14999)
  {
	  $discount=($full*7)/100;
	  $final=$full-$discount;
	  echo "$final";
  }
  else if($mypoints>=15000)
  {
	  $discount=($full*10)/100;
	  $final=$full-$discount;
	  echo "$final";
  }
  }
  else
  {
   if($mypoints<=4999)
  {
	  $final=$total-0;
	  echo "$final";
  }
  else if($mypoints>=5000 && $mypoints<=7999)
  {
	  $discount=($total*3)/100;
	  $final=$total-$discount;
	  echo "$final";
  }
  else if($mypoints>=8000 && $mypoints<=9999)
  {
	  $discount=($total*5)/100;
	  $final=$total-$discount;
	  echo "$final";
  }
  else if($mypoints>=10000 && $mypoints<=14999)
  {
	  $discount=($total*7)/100;
	  $final=$total-$discount;
	  echo "$final";
  }
  else if($mypoints>=15000)
  {
	  $discount=($total*10)/100;
	  $final=$total-$discount;
	  echo "$final";
  }
  }
   ?>
   </font>
   </td>
   
   
  <td><font face="Comic Sans MS, cursive"><?php
  $qry5="select credits from user where username='".$_SESSION['uname']."'";
  $result5=mysql_query($qry5);
  while($row5=mysql_fetch_array($result5))
  {
	  $credits=$row5['credits'];
  }
echo $credits;
    ?></font></td>
    
  <td><font face="Comic Sans MS, cursive"><?php
  $total1=0;
  $total1=$final-$credits;
  if($total1<0)
  {
	  $total1=0;
  }
  echo "$total1";
  ?>
  </font></td>
  
 
 
 
  </table>
  
   <form action="confirmation.php" method="post" name="confirm1" id="confirm1"> 
 <?php
 echo "<input type=\"hidden\" name=\"id\" value=\"$id\" />";
 echo "<input type=\"hidden\" name=\"name123\" value=\"$name\" />";
 echo "<input type=\"hidden\" name=\"add\" value=\"$add\" />";
 echo "<input type=\"hidden\" name=\"contact\" value=\"$contact\" />";
 echo "<input type=\"hidden\" name=\"email\" value=\"$email\" />";
 echo "<input type=\"hidden\" name=\"final123\" value=\"$total1\" />";
 ?>
 </form>
 
 <div id="payment">
<p style="position:absolute;top:-70%; left:35%;font-family:'Comic Sans MS', cursive; font-size:150%; font-variant:small-caps;">Payment Options	</p>

<form name="payment">
<input type="radio" name="pay" id="pay1" value="nb" style="font-family:'Comic Sans MS', cursive; position:relative; left:20px; top:-30px;"><p style="position:relative; left:45px; top:-63px; font-family:'Comic Sans MS', cursive;">Net Banking</p>
<input type="radio" name="pay" id="pay2" value="db" style="font-family:'Comic Sans MS', cursive; position:relative; left:20px; top:-50px; font-family:'Comic Sans MS', cursive;"><p style="position:relative; left:45px; top:-85px">Debit Card</p>

<input type="radio" name="pay" id="pay3" value="cc" style="font-family:'Comic Sans MS', cursive; position:relative; left:220px; top:-160px; font-family:'Comic Sans MS', cursive;"><p style="position:relative; left:250px; top:-195px">Credit Card</p>

<input type="radio" name="pay" id="pay4" value="cod"  style="font-family:'Comic Sans MS', cursive; position:relative; left:220px; top:-185px; font-family:'Comic Sans MS', cursive;"><p style="position:relative; left:250px; top:-218px">Cash On Delivery</p>

</form>
</div>


 <div id="confirm">
<a href="#" onclick="confirm()"> <img src="prodimg/confirm.png" width=75%" height="90%" style="position:absolute; left:20%; top:-5%;" onmousedown="this.src='prodimg/confirm1.png'" onmouseup="this.src='prodimg/confirm.png'"/></a>
</div>



<div name="transdiv" id="logdiv">
<a href="#"><img src="close.png" alt="Close" style="height:4.5%;width:3.5%;position:relative;left:96.4%;top:0.3%;z-index:10" onclick="ilogtr()" /> </a>

<h3 align="center"><font face="Comic Sans MS, cursive" color="#666666">Shipping Details</font></h3>

<form method="POST" action="http://localhost/shopmaniac/confirmation.php" name="register" >
  <table align="left" border="0" cols=2 cellspacing="5" style="position:absolute; left:8%; top:16%">
  
  <td height="60"><label for="Full Name"><font color="#666666" face="Comic Sans MS, cursive">Full Name:</font></label></td>
  <td height="60"><?php
  echo "<input type=\"text\" name=\"name123\" id=\"name123\" />";
  ?></td>
  </tr>
  <tr>
  <td height="60"><label><font color="#666666">Address:</font face="Comic Sans MS, cursive"></label></td>
  <td height="60"><?php
  echo "<textarea rows=\"4\" cols=\"16\" name=\"add\" id=\"add\"></textarea>";
  ?></td>
  </tr>
  <tr>
  <td height="60"><label for="Telephone"><font color="#666666" face="Comic Sans MS, cursive">Contact No:</font></label></td>
  <td height="60"><?php
  echo "<input type=\"text\" name=\"contact\" id=\"contact\" />";
  ?></td>
  </tr>
  <tr>
  <td height="60"><label for="E-mail"><font color="#666666" face="Comic Sans MS, cursive">E-mail:</font></label></td>
  <td height="60"><?php
  echo "<input type=\"text\" name=\"email\" id=\"email\" />";
  ?></td>
  </tr>
  </table>
  <?php
   echo "<input type=\"hidden\" name=\"id\" value=\"$id\" />";
echo "<input type=\"hidden\" name=\"final123\" value=\"$final\" />";
?>



<a href="#" onclick="reg1()"><img src="prodimg/confirm.png" width="43%" height="12%" style="position:absolute; left:25%; top:87%;" onmousedown="this.src='prodimg/confrim1.png'" onmouseup="this.src='prodimg/confirm.png'"/></a>
</form>
</div>



<div id="trans">
</div>

</div>
</body>
</html>
