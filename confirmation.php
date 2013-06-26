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
function confirm()
{
	document.forms["confirm1"].submit();
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
#apDiv1 {
	position:relative;
	width:90%;
	height:450px;
	z-index:2;
	left: -42px;
	top: -615px;
	background-color:#f6f6f6;
}
#apDiv35 {
	position:relative;
	width:35%;
	height:450px;
	z-index:14;
	left: -200px;
	top: -170px;
	border-color:#fff;
	border-style:solid;
	border-width:thin;
}
#apDiv2 {
	position:relative;
	width:70%;
	height:450px;
	z-index:3;
	top: -1065px;
	right:-340px;
	background-color:#f6f6f6;
	overflow:scroll;
}
#apDiv42 {
position:relative;
	width:194%;
	height:80px;
	left:-200px;
	z-index:1;
	top: -200px;
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
					top:-1050px;
					width:70%;
					height:50px;
				
					
				}
				#navigation
				{
					position:relative;
					top:-185px;
					left:-200px;
					height:35px;
					width:100%;
					border-style:solid;
					border-color:#fff;
				}
-->
</style>
</head>

<body>
<div id="container">
<?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from user where username='$_SESSION[uname]'");
while($row = mysql_fetch_array($qry))
{
	$trolley1=$row['trolley'];
}
$arr=spliti(",",$trolley1);
$no=0;
$no=count($arr);
?>

<div id="apDiv42">
<form method="post" action="home.php" id="website1" name="website1">

</form>
<?php
if($_SESSION['uname']=="")
{
echo "<a href=\"index.php\" ><img src=\"prodimg/Title.png\" width=\"38%\" height=\"100%\" style=\"position:absolute; left:-2%; top:5%;\" /></a>";
}
else
{
	echo "<a href=\"#\" onclick=\"website()\"><img src=\"prodimg/Title.png\" width=\"38%\" height=\"100%\" style=\"position:absolute; left:-2%; top:5%;\" /></a>";
}
?>

<div style="position:absolute; left:38.8%; top:50%; width:44%; height:49%; background-color:#DCDCDC; "></div>
<form id="form1" name="src1" method="post" action="search.php">
   <label>
      <input type="text" name="srch" id="srch"  value="search for your favourite brand and products" style="position:absolute;  width: 33.3%; height: 33%; color:#D6D6D6; left:39.4%; top:55.2%; font-family:'Comic Sans MS', cursive"  onfocus="if (this.value == 'search for your favourite brand and products') this.value = 'search for your favourite brand and products';"
      onkeydown="if(this.value=='search for your favourite brand and products') this.value=''; this.style.color='#000'"  onblur="if (this.value == '') this.value = 'search for your favourite brand and products'; this.style.color='#D6D6D6'">
    </label>
    
  </form>
 <img src="prodimg/Search2.png" width="10%" height="54%" style="position:absolute; left:73%; top:51.2%;"  onmousedown="this.src='prodimg/Search1.png'" onmouseup="this.src='prodimg/Search2.png'" onclick="aaa('src1')"/>


<form method="post" action="mytrolley2.php" id="trol" name="trol">

</form>
<a href="#" onclick="mytrol()"><img src="prodimg/Trolley11.png" style="position:absolute; left:83%; top:40%;width:6%;height:60%" onmousedown="this.src='prodimg/Trolley12.png'" onmouseup="this.src='prodimg/Trolley11.png'">
<?php
echo "<p style=\"position:absolute; left:85%; top:75%; color:#555; font-size:75%;\">(".($no-1).")</p>";
?>
</a>
<span style=" float:left; position:absolute; left:57.5%; top:1%; font-size:75%; color:#717171; font-family:'Comic Sans MS', cursive">9773436955(24x7)&nbsp;&nbsp;&nbsp;|
</span>  
 <img src="prodimg/Fullscreen capture 7182012 14722 PM.gif"  style="position:absolute; left:54.5%; top:5%; height:15%; width:2%;"/>
 
<span style=" float:left; position:absolute; left:77.5%; top:1%; font-size:75%; color:#717171; font-family:'Comic Sans MS', cursive">support@shopmaniac.in |</span>
<img src="prodimg/Email-Lists-Canada-11.jpg" style="position:absolute; height:18%; width:3%; left:74%; top:3%;"/>

<form method="post" action="myaccount.php" id="acc" name="acc">

</form>
<a href="#" onclick="myaccount()"><img src="prodimg/Account11.png" style="position:absolute; left:94.5%; top:39%;width:6%;height:60%" onmousedown="this.src='prodimg/Account12.png'" onmouseup="this.src='prodimg/Account11.png'"></a>

<p style="position:absolute; left:95.5%; top:-16%; font-size:80%; font-family:'Comic Sans MS', cursive"><a href="index.php" onmouseover="this.style.color = '#DF7000'" onmouseout="this.style.color = '#717171'"  style="text-decoration:none; color:#717171;">SignOut</a></p>

<form method="post" action="home.php" id="home" name="home">

</form>
<a href="#" onclick="homes()"><img src="prodimg/Home1.png" style="position:absolute; left:89.5%; top:40%;width:4.5%;height:60%" onmousedown="this.src='prodimg/Home2.png'" onmouseup="this.src='prodimg/Home1.png'"></a>
</div>


<?php
$id="$_POST[id]";
$namebill="$_POST[namebill]";
$addbill="$_POST[address1]";
$landbill="$_POST[landbill]";
$citybill="$_POST[citybill]";
$statebill="$_POST[statebill]";
$pincodebill="$_POST[pinbill]";
$contactbill="$_POST[contact1]";
$emailbill="$_POST[emailbill]";
$nameship="$_POST[nameship]";
$addship="$_POST[address2]";
$landship="$_POST[landship]";
$cityship="$_POST[cityship]";
$stateship="$_POST[stateship]";
$pincodeship="$_POST[pinship]";
$contactship="$_POST[contact2]";
$emailship="$_POST[emailship]";
$address="$_POST[addressbill]";
$final1="$_POST[final123]";
$leftcredits="$_POST[leftcredits]";
$payment="$_POST[radio]";

$shippingaddress="$addship,$landship,$cityship,$stateship,$pincodeship";
if($address=="")
{
	$billingaddress="$addbill,$landbill,$citybill,$statebill,$pincodebill";
}
else
{
	$billingaddress=$address;
}
$quant=$_SESSION['quant'];
?>

<div id="navigation">
<a href="mytrolley2.php"><img src="prodimg/trolley.png" width="32%" height="100%" style="position:absolute; left:0%; top:0%" /></a>
<a href="payment.php"><img src="prodimg/payment.png" width="35%" height="100%" style="position:absolute; left:29.5%; top:0%" /></a>
<a href="#"><img src="prodimg/confirmation.png" width="32%" height="100%" style="position:absolute; left:62%; top:0%" /></a>
<img src="prodimg/forward.png" width="7%" height="90%" style="position:absolute; left:92%; top:5%" />
</div>

<div id="bill">
<p style="position:absolute; top:-25%; left:2%; font-family:'Comic Sans MS', cursive; font-size:120%;">PM:-<?php
if($payment=="cod")
{
echo "Cash On Delivery";
}
else if($payment=="nb")
{
	echo "Net Banking";
}
else if($payment=="cc")
{
	echo "Credit Card";
}
else
{
	echo "Debit Card";
}

?></p>
<p style="position:absolute;top:-50%; left:35%;font-family:'Comic Sans MS', cursive; font-size:150%; font-variant:small-caps;">Confirm Order</p>

<p style="position:absolute;top:-25%; left:80%;font-family:'Comic Sans MS', cursive; font-size:120%; ">You Pay:-<?php
echo $final1;
?></p>
</div>

<div id="apDiv35">
<img src="prodimg/Picture1.png" width="110%" height="30%" style="position:absolute; top:0%; left:0%;"/>
<img src="prodimg/Picture2.png" width="111%" height="30%" style="position:absolute; top:25%; left:-2%;"/>
<img src="prodimg/Picture4.png" width="110%" height="30%" style="position:absolute; top:50%; left:0%;"/>
<img src="prodimg/Picture3.png" width="116%" height="30%" style="position:absolute; top:75%; left:-10%;"/> </div>

<div id="apDiv1">
<p style="position:absolute; left:25%; top:0%; font-family:'Comic Sans MS', cursive; size:100%; font-weight:bold;">Confirm Shipping Details</p>
<table align="left" border="0" cols=2 cellspacing="3" style="position:absolute; left:5%; top:10%">

<tr>
  <td height="50" width="120"><font color="#666666" face="Comic Sans MS, cursive">Name:-</font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "$nameship";
?></font>
  </td>
  </tr>
  
  <tr>
  <td height="50"><font color="#666666" face="Comic Sans MS, cursive">Address:-</font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "$shippingaddress";
?></font>
  </td>
  </tr>
  <tr>
  <td height="90"><font color="#666666"face="Comic Sans MS, cursive">Contact No:-</font></td>
<td><?php
echo "$contactship";
?>
  </td>
  </tr>
  
  <tr>
  <td height="30"><font color="#666666" face="Comic Sans MS, cursive">Email:-</font></td>
<td><font face="Comic Sans MS, cursive"><?php
echo "$emailship";
?></font>
  </td>
  </tr>
</table>
 
</div>
<div id="apDiv2">
<p style="position:absolute; left:20%; top:0%; font-family:'Comic Sans MS', cursive; font-weight:bold; font-size:100%;">Confirm Order Details</p>
<table align="left" border="0" cols=2 cellspacing="3" style="position:absolute; left:5%; top:12%">

<tr>
  <th height="50" width="90" ><font color="#666666" face="Comic Sans MS, cursive">Product Name</font></th>
  <th height="50" width="90"><font color="#666666"  face="Comic Sans MS, cursive">Size</font></th>
  <th height="50" width="90"><font color="#666666"  face="Comic Sans MS, cursive">Price</font></th>
   <th height="50" width="90"><font color="#666666"  face="Comic Sans MS, cursive">Quantity</font></th>
    <th height="50" width="90"><font color="#666666"  face="Comic Sans MS, cursive">Total</font></th>
  </tr>
  <?php
  $aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from user where username='".$_SESSION[uname]."'");
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
	if($quant[$i]=="" || $quant[$i]==NULL)
	{
		$finalprice1=$price*1;
	}
	else
	{
	$finalprice1=$price*$quant[$i];
	}
	echo "<tr>";
  
  echo "<td height=\"50\" width=\"90\" align=\"center\"><font face=\"Comic Sans MS, cursive\">";
  echo "$pname";
  echo "</font>";
  echo "</td>";
  

  echo "<td height=\"50\" width=\"90\" align=\"center\"><font face=\"Comic Sans MS, cursive\">";
  echo "$size";
  echo "</font>";
  echo "</td>";
  
  
  echo "<td height=\"50\" width=\"90\" align=\"center\"> <font face=\"Comic Sans MS, cursive\">";
  echo "$price";
  echo "</font>";
  echo "</td>";
  if($quant[$i]=="" || $quant[$i]==NULL)
  {
	   echo "<td height=\"50\" width=\"90\" align=\"center\"> <font face=\"Comic Sans MS, cursive\">";
  echo "1";
 echo "</font>";
  echo "</td>";
  }
  else
  {
    echo "<td height=\"50\" width=\"90\" align=\"center\"> <font face=\"Comic Sans MS, cursive\">";
  echo "$quant[$i]";
 echo "</font>";
  echo "</td>";
  }
  echo "<td height=\"50\" width=\"90\" align=\"center\"> <font face=\"Comic Sans MS, cursive\">";
  echo "$finalprice1";
 echo "</font>";
 echo "</td>";
  
  echo "<tr>";
}
	?>

  </table>
</div>



<form method="post" action="insert.php" name="confirm1" id="confirm1">
<?php
 echo "<input type=\"hidden\" name=\"id\" value=\"$id\" />";
 echo "<input type=\"hidden\" name=\"nameship\" value=\"$nameship\" />";
  echo "<input type=\"hidden\" name=\"namebill\" value=\"$namebill\" />";
 echo "<input type=\"hidden\" name=\"address2\" value=\"$shippingaddress\" />";
  echo "<input type=\"hidden\" name=\"address1\" value=\"$billingaddress\" />";
 echo "<input type=\"hidden\" name=\"contact2\" value=\"$contactship\" />";
 echo "<input type=\"hidden\" name=\"contact1\" value=\"$contactbill\" />";
 echo "<input type=\"hidden\" name=\"emailship\" value=\"$emailship\" />";
 echo "<input type=\"hidden\" name=\"emailbill\" value=\"$emailbill\" />";
 echo "<input type=\"hidden\" name=\"pname\" value=\"$pname\" />";
 echo "<input type=\"hidden\" name=\"size\" value=\"$size\" />";
  echo "<input type=\"hidden\" name=\"price\" value=\"$price\" />";
  echo "<input type=\"hidden\" name=\"image\" value=\"$img1\" />";
    echo "<input type=\"hidden\" name=\"final123\" value=\"$final1\" />";
	echo "<input type=\"hidden\" name=\"tr\" value=\"$trolley1\" />";
	 echo "<input type=\"hidden\" name=\"leftcredits\" value=\"$leftcredits\" />";
	 echo "<input type=\"hidden\" name=\"payment\" value=\"$payment\" />";
	?>
	</form>
    
<div id="confirm">
<a href="#" onclick="confirm()"> <img src="prodimg/confirm.png" width=75%" height="110%" style="position:absolute; left:20%; top:-5%;" onmousedown="this.src='prodimg/confirm1.png'" onmouseup="this.src='prodimg/confirm.png'"/></a>
</div>


</div>
</body>
</html>