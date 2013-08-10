<?php
session_start();
include("conn.php");
$result=0;
$f1=$f2=$f3=$f4=$f5=$f6=0;
$f7=$f8=$f9=$f10=$f11=$f12="";
$divsel=0;
$str1=$_POST['sortur'];
$str2=$_POST['sortpr'];
$str3=$_POST['sortbr'];
$str4=$_POST['sortor'];
$str5=$_POST['sortrt'];
$str6=$_POST['sortlk'];
$str7=$_GET['srchprod'];
$str8=$_GET['srchuser'];
$str9=$_GET['srchbrand'];
$str10=$_GET['srchorder'];
$str11=$_GET['srchret'];
$str12=$_GET['srchlk'];
//echo $str7;

if($str1!="")
{
	$arr=spliti(",",$str1);
	$divsel=$arr[0];
	$f1=$arr[1];	
	echo $divsel;
	echo $f1;
}
else if($str2!="")
{
	$arr=spliti(",",$str2);
	$divsel=$arr[0];
	$f2=$arr[1];	
	echo $divsel;
	echo $f2;
}
else if($str3!="")
{
	$arr=spliti(",",$str3);
	$divsel=$arr[0];
	$f3=$arr[1];	
	echo $divsel;
	echo $f3;
}
else if($str4!="")
{
	$arr=spliti(",",$str4);
	$divsel=$arr[0];
	$f4=$arr[1];	
	echo $divsel;
	echo $f4;
}
else if($str5!="")
{
	$arr=spliti(",",$str5);
	$divsel=$arr[0];
	$f5=$arr[1];	
	echo $divsel;
	echo $f5;
}
else if($str6!="")
{
	$arr=spliti(",",$str6);
	$divsel=$arr[0];
	$f6=$arr[1];	
	echo $divsel;
	echo $f6;
}
else if($str7!="")
{
	$arr=spliti(",",$str7);
	$divsel=$arr[1];
	$f7=$arr[0];	
	//echo $divsel;
	echo $f7;
}
else if($str8!="")
{
	$arr=spliti(",",$str8);
	$divsel=$arr[1];
	$f8=$arr[0];	
	//echo $divsel;
	echo $f8;
}
else if($str9!="")
{
	$arr=spliti(",",$str9);
	$divsel=$arr[1];
	$f9=$arr[0];	
	//echo $divsel;
	echo $f9;
}
else if($str10!="")
{
	$arr=spliti(",",$str10);
	$divsel=$arr[1];
	$f10=$arr[0];	
	//echo $divsel;
	echo $f10;
}
else if($str11!="")
{
	$arr=spliti(",",$str11);
	$divsel=$arr[1];
	$f11=$arr[0];	
	//echo $divsel;
	echo $f11;
}
else if($str12!="")
{
	$arr=spliti(",",$str12);
	$divsel=$arr[1];
	$f12=$arr[0];	
	//echo $divsel;
	echo $f12;
}
?>
<html>
<head>
<title>Shopmaniac Inventory</title>
<style type="text/css">
.datadiv  {
width:90%;
height:90%;
position:relative;
top:2%;
border: 1px solid #54879d; 
visibility:hidden;
}

.datadiv1  {
width:99%;
overflow:scroll;
height:93%;
position:relative;
top:0.5%;
border: 1px solid #54879d; 
}

#container  {
width: 1000px;
            margin: 0px auto;
            padding: 200px;
    height:0px;
}
 
#wrap	{
	width: 100%; /* Spans the width of the page */
	height: 50px; 
	margin: 0; /* Ensures there is no space between sides of the screen and the menu */
	z-index: 99; /* Makes sure that your menu remains on top of other page elements */
	position: relative; 
	background-color: #366b82;
	}

.navbar	{
	height: 50px;
        padding: 0;
	margin: 0;
	position: absolute; /* Ensures that the menu doesn't affect other elements */
	border-right: 1px solid #54879d; 
	}

.navbar li 	{
			height: auto;
			width: 120px;  /* Each menu item is 150px wide */
			float: left;  /* This lines up the menu items horizontally */
			text-align: center;  /* All text is placed in the center of the box */
			list-style: none;  /* Removes the default styling (bullets) for the list */
			font: normal bold 12px/1.2em Arial, Verdana, Helvetica;  
			padding: 0;
			margin: 0;
			background-color: #366b82;
                        }
.navbar a	{							
		padding: 18px 0;  /* Adds a padding on the top and bottom so the text appears centered vertically */
		border-left: 1px solid #54879d; /* Creates a border in a slightly lighter shade of blue than the background.  Combined with the right border, this creates a nice effect. */
		border-right: 1px solid #1f5065; /* Creates a border in a slightly darker shade of blue than the background.  Combined with the left border, this creates a nice effect. */
		text-decoration: none;  /* Removes the default hyperlink styling. */
		color: white; /* Text color is white */
		display: block;
		}

.navbar li:hover, a:hover {background-color: #54879d;} 
.navbar li ul 	{
		display: none;  /* Hides the drop-down menu */
		height: auto;									
		margin: 0; /* Aligns drop-down box underneath the menu item */
		padding: 0; /* Aligns drop-down box underneath the menu item */			
		}				

.navbar li:hover ul 	{
                        display: block; /* Displays the drop-down box when the menu item is hovered over */
                        }
						
.navbar li ul li {background-color: #54879d;}

.navbar li ul li a 	{
		border-left: 1px solid #1f5065; 
		border-right: 1px solid #1f5065; 
		border-top: 1px solid #74a3b7; 
		border-bottom: 1px solid #1f5065; 
		}
				
.navbar li ul li a:hover	{background-color: #366b82;}
td
{
	border:1px solid #54879d;
}
th
{
	border:1px solid #00F;
	background-color:#54879d;
	color:#FFF;
}
</style>

<script type="text/javascript">
function submitform(nam,f,a)
{
	var x=document.getElementById(a).value;
	document.getElementById(a).value=x+","+f;
	window.location="home.php?"+a+"="+document.getElementById(a).value;
//    document.forms[nam].submit();
}
function chdiv(a)
{
	var divs=["userdiv","prdisp","pradd","prdel","prupd","brdisp","bradd","brdel","brupd","orders","ret","lkdisp","lkadd","lkdel","lkupd"];
	document.getElementById(divs[a]).style.visibility='visible';	
	for(i=0;i<divs.length;i++)
	{
		if(i==a)
		{	
			continue;	
		}
		else
		{
			document.getElementById(divs[i]).style.visibility='hidden';
		}
	}

}
function createBill()
{
	document.forms['crBill'].submit();
}
</script>
</head>
<body>
<h6 align=right>Welcome, <?php echo $_SESSION['name'];?></h6>

<h1 align="center">Shopmaniac Inventory</h1>
<center>
<div style="width:900px;height:700px;border-style:solid;border-color:black;margin: 0px auto;">
<div id="wrap">
		  <ul class="navbar">
			 <li><a href="#" onClick="chdiv(0)">Users</a></li>
			 <li><a href="#">Products</a>
				<ul>
				   <li><a href="#" onClick="chdiv(1)">Display</a></li>
				   <li><a href="#" onClick="chdiv(2)">Add</a></li>
				   <li><a href="#" onClick="chdiv(3)">Delete</a></li>
                   <li><a href="#" onClick="chdiv(4)">Update</a></li>
				</ul>         
			 </li>
			 <li><a href="#">Brands</a>
				<ul>
				   <li><a href="#" onClick="chdiv(5)">Display</a></li>
				   <li><a href="#" onClick="chdiv(6)">Add</a></li>
				   <li><a href="#" onClick="chdiv(7)">Delete</a></li>
                   <li><a href="#" onClick="chdiv(8)">Update</a></li>
				</ul>         
			 </li>
			 <li><a href="#" onClick="chdiv(9)">Orders</a>
			 </li>
			 <li><a href="#" onClick="chdiv(10)">Returns</a>
			 </li>
			 <li><a href="#">Looks</a>
				<ul>
				   <li><a href="#" onClick="chdiv(11)">Display</a></li>
				   <li><a href="#" onClick="chdiv(12)">Add</a></li>
				   <li><a href="#" onClick="chdiv(13)">Delete</a></li>				   
                   <li><a href="#" onClick="chdiv(14)">Update</a></li>
				</ul>         
			 </li>
		  </ul>
</div>

<div id="userdiv" class="datadiv">
<center><form action="home.php" method="post" name="userform">
SORT: <select name="sortur" onChange="submit()">
<?php
	if($f1==1 || $f1==0)
	{
		$result = mysql_query("SELECT * FROM user");
		echo "<option value=\"0,1\" selected=\"selected\">Sr.No.</option>";
		echo "<option value=\"0,2\">My Points</option>";
		echo "<option value=\"0,3\">Credits</option>";
	}
	if($f8!="")
	{
		$result=mysql_query("select * from user where username LIKE '%$f8%' or contact LIKE '%$f8%' or email LIKE '%$f8%' or gender LIKE '%$f8%' or address LIKE '%$f8%'");
	}
	else if($f1==2)
	{
		$result = mysql_query("SELECT * FROM user order by mypoints DESC");
		echo "<option value=\"0,1\">Sr.No.</option>";
		echo "<option value=\"0,2\" selected=\"selected\">My Points</option>";
		echo "<option value=\"0,3\">Credits</option>";
	}
	else if($f1==3)
	{
		$result = mysql_query("SELECT * FROM user order by credits DESC");
		echo "<option value=\"0,1\">Sr.No.</option>";
		echo "<option value=\"0,2\">My Points</option>";
		echo "<option value=\"0,3\" selected=\"selected\">Credits</option>";
	}
?>
</select>
Search: <input type="text" name="srchuser" id="srchuser"><input type="button" value="Search" onClick="submitform('userform','0','srchuser');">
<input type="hidden" name="sortpr" value="">
<input type="hidden" name="sortbr" value="">
<input type="hidden" name="sortor" value="">
<input type="hidden" name="sortrt" value="">
<input type="hidden" name="sortlk" value="">
</form></center>
<div id="usersel" class="datadiv1">
<?php
		echo "<table cellspacing=\"3px\" style=\"border:1px solid #54879d\">";
		echo "<tr><th>SrNo.</th><th>Name</th><th>Contact</th><th>Email</th><th>History</th><th>Mypoints</th><th>Credits</th><th>Gender</th><th>Address</th></tr>";
		$ctr=0;
	while($row = mysql_fetch_array($result))
	{
		$ctr+=1;
		echo "<tr>";
		echo "<td>".($ctr)."</td>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['contact']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['history']."</td>";
		echo "<td>".$row['mypoints']."</td>";
		echo "<td>".$row['credits']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>        
</div>
</div>
<div id="prdisp" class="datadiv" style="top:-88%">
<center><form action="home.php" method="post" name="prodform">
SORT: <select name="sortpr" onChange="submit()">
<?php
$result1="";
if($f2==0 || $f2==1)
{
	$result1 = mysql_query("SELECT * FROM products");
	echo "<option value=\"1,1\" selected=\"selected\">Product ID</option>
			<option value=\"1,2\">Price</option>
			<option value=\"1,3\">Quantity</option>
			<option value=\"1,4\">Discount Price</option>";
}
if($f7!="")
{
	$result1=mysql_query("select * from products where pname LIKE '%$f7%' or brand LIKE '%$f7%' or category LIKE '%$f7%' or color LIKE '%$f7%' or info LIKE '%$f7%' or dept LIKE '%$f7%' or size LIKE '%$f7%' or subname LIKE '%$f7%'");
}
else if($f2==2)
{
	$result1 = mysql_query("SELECT * FROM products order by price DESC");
	echo "<option value=\"1,1\">Product ID</option>
			<option value=\"1,2\" selected=\"selected\">Price</option>
			<option value=\"1,3\">Quantity</option>
			<option value=\"1,4\">Discount Price</option>";
}
else if($f2==3)
{
		$result1 = mysql_query("SELECT * FROM products order by quant DESC");
	echo "<option value=\"1,1\">Product ID</option>
			<option value=\"1,2\">Price</option>
			<option value=\"1,3\" selected=\"selected\">Quantity</option>
			<option value=\"1,4\">Discount Price</option>";
}
else if($f2==4)
{
		$result1 = mysql_query("SELECT * FROM products order by discprice DESC");
	echo "<option value=\"1,1\">Product ID</option>
			<option value=\"1,2\">Price</option>
			<option value=\"1,3\">Quantity</option>
			<option value=\"1,4\" selected=\"selected\">Discount Price</option>";
}
?>
</select>
Search: <input type="text" name="srchprod" id="srchprod"><input type="button" value="Search" onClick="submitform('prodform','1','srchprod');">
<input type="hidden" name="sortur" value="">
<input type="hidden" name="sortbr" value="">
<input type="hidden" name="sortor" value="">
<input type="hidden" name="sortrt" value="">
<input type="hidden" name="sortlk" value="">
</center>
<div id="prsel" class="datadiv1">
<?php
		echo "<table cellspacing=\"3px\" style=\"border:1px solid #54879d; \" width=\"90%\">";
		echo "<tr><th>SrNo.</th><th>Prod ID</th><th>Name</th><th>Size</th><th>Price</th><th>Quantity</th><th>Brand</th><th>Category</th><th>Color</th><th>Info</th><th>Dept</th><th>img1</th><th>img2</th><th>img3</th><th>img4</th><th>img5</th><th>subname</th><th>discprice</th><th>Disc(%)</th><th>Stock</th><th>Delivery</th><th width=\"80%\">Specifation </th></tr>";
		$ctr=0;
	while($row = mysql_fetch_array($result1))
	{
		$ctr+=1;
		echo "<tr>";
		echo "<td>".($ctr)."</td>";
		echo "<td>".$row['pid']."</td>";
		echo "<td>".$row['pname']."</td>";
		echo "<td>".$row['size']."</td>";
		echo "<td>".$row['price']."</td>";
		echo "<td>".$row['quant']."</td>";
		echo "<td>".$row['brand']."</td>";
		echo "<td>".$row['category']."</td>";
		echo "<td>".$row['color']."</td>";
		echo "<td>".$row['info']."</td>";
		echo "<td>".$row['dept']."</td>";
		echo "<td><img src=\"prodimg/".$row['img1']."\" height=40 width=40></td>";
		echo "<td><img src=\"prodimg/".$row['img2']."\" height=40 width=40></td>";
		echo "<td><img src=\"prodimg/".$row['img3']."\" height=40 width=40></td>";
		echo "<td><img src=\"prodimg/".$row['img4']."\" height=40 width=40></td>";
		echo "<td><img src=\"prodimg/".$row['img5']."\" height=40 width=40></td>";
		echo "<td>".$row['subname']."</td>";
		echo "<td>".$row['discprice']."</td>";
		echo "<td>".$row['discountpercent']."</td>";
		echo "<td>".$row['stock']."</td>";	
		echo "<td>".$row['delivery']."</td>";
		echo "<td >".$row['specification']."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</div>
</div>
<div id="brdisp" class="datadiv" style="top:-180%;">
<form name="brform" method="GET" action="home.php">
Search: <input type="text" name="srchbrand" id="srchbrand"><input type="button" value="Search" onClick="submitform('brform','5','srchbrand');">
</form>
<div id="brsel" class="datadiv1">
<?php
		$result = mysql_query("SELECT * FROM brand");
		if($f9!="")
		{
			$result=mysql_query("select * from brand where brandname LIKE '%$f9%' or brandinfo LIKE '%$f9%'");
		}
		echo "<table cellspacing=\"3px\" style=\"border:1px solid #54879d\">";
		echo "<tr><th>SrNo.</th><th>Name</th><th>Info</th><th>Image</th></tr>";
		$ctr=0;
	while($row = mysql_fetch_array($result))
	{
		$ctr+=1;
		echo "<tr>";
		echo "<td>".($ctr)."</td>";
		echo "<td>".$row['brandname']."</td>";
		echo "<td>".$row['brandinfo']."</td>";
		echo "<td>".$row['brandimg']."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</div>
</div>
<div id="pradd" class="datadiv" style="top:-270%">
<div id="prvadh" class="datadiv1">
<form method="post" action="iud.php" name="padd" id="padd">
<input type="hidden" name="flag" value="1">
<table>
<tr><td>Product ID: </td><td><input type="text" name="prid"></td></tr>
<tr><td>Product Name: </td><td><input type="text" name="prname"></td></tr>
<tr><td>Size: </td><td><input type="text" name="prsz"></td></tr>
<tr><td>Price: </td><td><input type="text" name="prpr"></td></tr>
<tr><td>Quantity: </td><td><input type="text" name="prqt"></td></tr>
<tr><td>Brand: </td><td><input type="text" name="prbr"></td></tr>
<tr><td>Category: </td><td><input type="text" name="prcat"></td></tr>
<tr><td>Color: </td><td><input type="text" name="prclr"></td></tr>
<tr><td>Info: </td><td><input type="text" name="prinfo"></td></tr>
<tr><td>Department: </td><td><input type="text" name="prdept"></td></tr>
<tr><td>Img1: </td><td><input type="text" name="prim1"></td></tr>
<tr><td>Img2: </td><td><input type="text" name="prim2"></td></tr>
<tr><td>Img3: </td><td><input type="text" name="prim3"></td></tr>
<tr><td>Img4: </td><td><input type="text" name="prim4"></td></tr>
<tr><td>Img5: </td><td><input type="text" name="prim5"></td></tr>
<tr><td>Subname: </td><td><input type="text" name="prsname"></td></tr>
<tr><td>Discount Price: </td><td><input type="text" name="prdspr"></td></tr>
<tr><td>Discount(%): </td><td><input type="text" name="prdsc"></td></tr>
<tr><td>Stock: </td><td><input type="text" name="prst"></td></tr>
<tr><td>Delivery: </td><td><input type="text" name="prdel"></td></tr>
<tr><td>Specification: </td><td><input type="text" name="specs"></td></tr>
</table>
<center>
<input type="submit" value="Add Product"></center>
</form>
</div>
</div>

<div id="prupd" class="datadiv" style="top:-360%">
<div id="prchg" class="datadiv1">
<form method="post" action="iud.php" name="pupd" id="pupd">
<input type="hidden" name="flag" value="2">
<table>
<tr><td>Product ID: </td><td><input type="text" name="prid"></td></tr>
<tr><td>Product Name: </td><td><input type="text" name="prname"></td></tr>
<tr><td>Size: </td><td><input type="text" name="prsz"></td></tr>
<tr><td>Price: </td><td><input type="text" name="prpr"></td></tr>
<tr><td>Quantity: </td><td><input type="text" name="prqt"></td></tr>
<tr><td>Brand: </td><td><input type="text" name="prbr"></td></tr>
<tr><td>Category: </td><td><input type="text" name="prcat"></td></tr>
<tr><td>Color: </td><td><input type="text" name="prclr"></td></tr>
<tr><td>Info: </td><td><input type="text" name="prinfo"></td></tr>
<tr><td>Department: </td><td><input type="text" name="prdept"></td></tr>
<tr><td>Img1: </td><td><input type="text" name="prim1"></td></tr>
<tr><td>Img2: </td><td><input type="text" name="prim2"></td></tr>
<tr><td>Img3: </td><td><input type="text" name="prim3"></td></tr>
<tr><td>Img4: </td><td><input type="text" name="prim4"></td></tr>
<tr><td>Img5: </td><td><input type="text" name="prim5"></td></tr>
<tr><td>Subname: </td><td><input type="text" name="prsname"></td></tr>
<tr><td>Discount Price: </td><td><input type="text" name="prdspr"></td></tr>
<tr><td>Discount(%): </td><td><input type="text" name="prdsc"></td></tr>
<tr><td>Stock: </td><td><input type="text" name="prst"></td></tr>
<tr><td>Specs: </td><td><input type="text" name="specs"></td></tr>
</table>
<center><input type="submit" value="Update Product"></center>
</form>
</div>
</div>

<div id="prdel" class="datadiv" style="top:-450%">
<div id="prers" class="datadiv1">
<form method="post" action="iud.php" name="pdel" id="pdel">
<input type="hidden" name="flag" value="3">
<table>
<tr><td>Product ID: </td><td><input type="text" name="prid"></td></tr>
</table>
<center><input type="submit" value="Delete Product"></center>
</form>
</div>
</div>

<div id="bradd" class="datadiv" style="top:-540%">
<div id="brvad" class="datadiv1">
<form method="post" action="iud.php" name="badd" id="badd">
<input type="hidden" name="flag" value="4">
<table>
<tr><td>Brand Name: </td><td><input type="text" name="brname"></td></tr>
<tr><td>Brand Info: </td><td><textarea rows=5 cols=50 name="brinfo"></textarea></td></tr>
<tr><td>Brand Img: </td><td><input type="text" name="brimg"></td></tr>
</table>
<center><input type="submit" value="Add Brand"></center>
</form>
</div>
</div>

<div id="brupd" class="datadiv" style="top:-630%">
<div id="brchg" class="datadiv1">
<form method="post" action="iud.php" name="bupd" id="bupd">
<input type="hidden" name="flag" value="5">
<table>
<tr><td>Brand Name: </td><td><input type="text" name="brname"></td></tr>
<tr><td>Brand Info: </td><td><textarea rows=5 cols=50 name="brinfo"></textarea></td></tr>
<tr><td>Brand Img: </td><td><input type="text" name="brimg"></td></tr>
</table>
<center><input type="submit" value="Update Brand"></center>
</form>
</div>
</div>

<div id="brdel" class="datadiv" style="top:-720%">
<div id="brers" class="datadiv1">
<form method="post" action="iud.php" name="bdel" id="bdel">
<input type="hidden" name="flag" value="6">
<table>
<tr><td>Brand Name: </td><td><input type="text" name="brname"></td></tr>
</table>
<center><input type="submit" value="Delete Brand"></center>
</form>
</div>
</div>

<div id="orders" class="datadiv" style="top:-810%">
<center><form action="home.php" method="post" name="ordform">
SORT: <select name="sortor" onChange="submit()">
<?php
if($f4==0 || $f4==1)
{
			$result1 = mysql_query("SELECT * FROM orders ORDER BY DOO DESC");
	echo "<option value=\"9,1\" selected=\"selected\">Order Id</option>
			<option value=\"9,2\">Price</option>
			<option value=\"9,3\">Final Amount</option>
			<option value=\"9,4\">Discount Price</option>";
}
if($f10!="")
{
	$result1=mysql_query("select * from orders where pname LIKE '%$f10%' or username LIKE '%$f10%' or returnid LIKE '%$f10%' or DOO LIKE '%$f10%' or billaddress LIKE '%$f10%' or billemail LIKE '%$f10%' or billcontact LIKE '%$f10%' or shipaddress LIKE '%$f10%' or shipemail LIKE '%$f10%' or shipcontact LIKE '%$f10%' or shipusername LIKE '%$f10%' or paymentmode LIKE '%$f10%' or orderid LIKE '%$f10%'");
}
else if($f4==2)
{
			$result1 = mysql_query("SELECT * FROM orders order by price DESC");
	echo "<option value=\"9,1\">Order Id</option>
			<option value=\"9,2\" selected=\"selected\">Price</option>
			<option value=\"9,3\">Final Amount</option>
			<option value=\"9,4\">Discount Price</option>";
}
else if($f4==3)
{
			$result1 = mysql_query("SELECT * FROM orders order by finalAmt DESC");
	echo "<option value=\"9,1\"  selected=\"selected\">Order Id</option>
			<option value=\"9,2\">Price</option>
			<option value=\"9,3\"selected=\"selected\">Final Amount</option>
			<option value=\"9,4\">Discount Price</option>";
}
else if($f4==4)
{
			$result1 = mysql_query("SELECT * FROM orders order by discountprice DESC");
	echo "<option value=\"9,1\"  selected=\"selected\">Order Id</option>
			<option value=\"9,2\">Price</option>
			<option value=\"9,3\">Final Amount</option>
			<option value=\"9,4\" selected=\"selected\">Discount Price</option>";
}
?>
</select>
Search: <input type="text" name="srchorder" id="srchorder"><input type="button" value="Search" onClick="submitform('ordform','9','srchorder');">
<input type="hidden" name="sortpr" value="">
<input type="hidden" name="sortur" value="">
<input type="hidden" name="sortbr" value="">
<input type="hidden" name="sortrt" value="">
<input type="hidden" name="sortlk" value="">
</form></center>
<div id="order" class="datadiv1">
<?php
		echo "<form name=\"crbill\" method=\"post\" action=\"bill.php\">";
		echo "<table cellspacing=\"3px\" style=\"border:1px solid #54879d\">";
		echo "<tr><th>SrNo.</th><th>Image</th><th>Date Of Order</th><th>Order Id</th><th>Prod ID</th><th>Name</th><th>Size</th><th>Price</th><th>Quantity</th><th>Shipping</th><th>My Points Discount</th><th>Discount Price</th><th>Credits Used</th><th>Final Amount</th><th>Flag</th><th>Total Products</th><th>Customer Name</th><th>Bill Address</th><th>Bill Email</th><th>Bill Contact</th><th>Ship User Name</th><th>Ship Address</th><th>Ship Email</th><th>Ship Contact</th><th>Payment Mode</th><th>ReturnId</th><th>Status</th><th>Quantity</th><th>Shipping</th><th>Credits</th><th>Transaction</th><th>Bill</th></tr>";
		$ctr=0;
	while($row = mysql_fetch_array($result1))
	{
		$ctr+=1;
		echo "<tr>";
		echo "<td>".($ctr)."</td>";
		echo "<td><img src=\"prodimg/".$row['image']."\" height=40 width=40></td>";
		echo "<td>".$row['DOO']."</td><input type=\"hidden\" name=\"doo\" value=\"".$row['DOO']."\">";
		echo "<td>".$row['orderid']."</td><input type=\"hidden\" name=\"oid\" value=\"".$row['orderid']."\">";
		echo "<td>".$row['pid']."</td>";
		echo "<td>".$row['pname']."</td><input type=\"hidden\" name=\"pname\" value=\"".$row['pname']."\">";
		echo "<td>".$row['size']."</td><input type=\"hidden\" name=\"psize\" value=\"".$row['size']."\">";
		echo "<td>".$row['price']."</td><input type=\"hidden\" name=\"pprice\" value=\"".$row['price']."\">";
		echo "<td>".$row['quantity']."</td><input type=\"hidden\" name=\"pprice\" value=\"".$row['price']."\">";
		echo "<td>".$row['shipping']."</td><input type=\"hidden\" name=\"pprice\" value=\"".$row['price']."\">";
		echo "<td>".$row['mypointsdisc']."</td><input type=\"hidden\" name=\"myptsdis\" value=\"".$row['mypointsdisc']."\">";
		echo "<td>".$row['discountprice']."</td><input type=\"hidden\" name=\"disprice\" value=\"".$row['discountprice']."\">";
		echo "<td>".$row['credits']."</td><input type=\"hidden\" name=\"disprice\" value=\"".$row['discountprice']."\">";
		echo "<td>".$row['finalAmt']."</td><input type=\"hidden\" name=\"famt\" value=\"".$row['finalAmt']."\">";
		echo "<td>".$row['flag']."</td>";
		echo "<td>".$row['totalprod']."</td>";
		echo "<td>".$row['username']."</td><input type=\"hidden\" name=\"uname\" value=\"".$row['username']."\">";
		echo "<td>".$row['billaddress']."</td><input type=\"hidden\" name=\"baddress\" value=\"".$row['billaddress']."\">";
		echo "<td>".$row['billemail']."</td><input type=\"hidden\" name=\"bemail\" value=\"".$row['billemail']."\">";
		echo "<td>".$row['billcontact']."</td><input type=\"hidden\" name=\"bcontact\" value=\"".$row['billcontact']."\">";
		
		echo "<td>".$row['shipusername']."</td><input type=\"hidden\" name=\"suname\" value=\"".$row['shipusername']."\">";
		echo "<td>".$row['shipaddress']."</td><input type=\"hidden\" name=\"saddress\" value=\"".$row['shipaddress']."\">";
		echo "<td>".$row['shipemail']."</td><input type=\"hidden\" name=\"semail\" value=\"".$row['shipemail']."\">";
		echo "<td>".$row['shipcontact']."</td><input type=\"hidden\" name=\"scontact\" value=\"".$row['shipcontact']."\">";
		
		echo "<td>".$row['paymentmode']."</td><input type=\"hidden\" name=\"paymode\" value=\"".$row['paymentmode']."\">";
		
		echo "<td>".$row['returnid']."</td><input type=\"hidden\" name=\"rid\" value=\"".$row['returnid']."\">";
		echo "<td>".$row['status']."</td><input type=\"hidden\" name=\"rid\" value=\"".$row['returnid']."\">";
		echo "<td>".$row['quantity']."</td><input type=\"hidden\" name=\"rid\" value=\"".$row['returnid']."\">";
		echo "<td>".$row['shipping']."</td><input type=\"hidden\" name=\"rid\" value=\"".$row['returnid']."\">";
		echo "<td>".$row['credits']."</td><input type=\"hidden\" name=\"rid\" value=\"".$row['returnid']."\">";
		echo "<td>".$row['transaction']."</td><input type=\"hidden\" name=\"rid\" value=\"".$row['returnid']."\">";
		echo "<td><input type=\"submit\" name=\"submit\" value=\"Bill\"></td>";														
		echo "</tr>";
	}
	echo "</table>";
	echo "</form>";
?>
</div>
</div>

<div id="ret" class="datadiv" style="top:-902%">
<center><form action="home.php" method="post" name="retform">
SORT: <select name="sortrt" onChange="submit()">
<?php
	if($f5==0 || $f5==1)
	{
		$result1 = mysql_query("SELECT * FROM returns ORDER BY DOR DESC");
		echo "<option value=\"10,1\" selected=\"selected\">Return Id</option>
			<option value=\"10,2\">Status</option>
			<option value=\"10,3\">Order Id</option>
			<option value=\"10,4\">Price</option>";
	}
	if($f11!="")
	{
		$result1=mysql_query("select * from returns where pname LIKE '%$f11%' or username LIKE '%$f11%' or returnid LIKE '%$f11%' or status LIKE '%$f11%' or oid LIKE '%$f11%'");
	}
	else if($f5==2)
	{
		$result1 = mysql_query("SELECT * FROM returns order by status DESC");
		echo "<option value=\"10,1\">Return Id</option>
			<option value=\"10,2\" selected=\"selected\">Status</option>
			<option value=\"10,3\">Order Id</option>
			<option value=\"10,4\">Price</option>";
	}
	else if($f5==3)
	{
		$result1 = mysql_query("SELECT * FROM returns order by orderid DESC");
		echo "<option value=\"10,1\">Return Id</option>
			<option value=\"10,2\">Status</option>
			<option value=\"10,3\" selected=\"selected\">Order Id</option>
			<option value=\"10,4\">Price</option>";
	}
	else if($f5==4)
	{
		$result1 = mysql_query("SELECT * FROM returns order by price DESC");
		echo "<option value=\"10,1\">Return Id</option>
			<option value=\"10,2\">Status</option>
			<option value=\"10,3\">Order Id</option>
			<option value=\"10,4\" selected=\"selected\">Price</option>";
	}
?>
</select>
Search: <input type="text" name="srchret" id="srchret"><input type="button" value="Search" onClick="submitform('retform','10','srchret');">
<input type="hidden" name="sortpr" value="">
<input type="hidden" name="sortur" value="">
<input type="hidden" name="sortor" value="">
<input type="hidden" name="sortbr" value="">
<input type="hidden" name="sortlk" value="">
</form></center>
<div id="return" class="datadiv1">
<?php
		echo "<table cellspacing=\"3px\" style=\"border:1px solid #54879d\">";
		echo "<tr><th>SrNo.</th><th>Image</th><th>Date Of Return</th><th>ReturnId</th><th>Date Of Order</th><th>Order Id</th><th>Customer Name</th><th>Prod ID</th><th>Name</th><th>Size</th><th>Price</th><th>Quantity</th><th>Status</th></tr>";
		$ctr=0;
	while($row = mysql_fetch_array($result1))
	{
		$ctr+=1;
		echo "<tr>";
		echo "<td>".($ctr)."</td>";
		echo "<td><img src=\"prodimg/".$row['image']."\" height=40 width=40></td>";
		echo "<td>".$row['DOR']."</td>";
		echo "<td>".$row['returnid']."</td>";
		echo "<td>".$row['DOO']."</td>";
		echo "<td>".$row['oid']."</td>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['pid']."</td>";
		echo "<td>".$row['pname']."</td>";
		echo "<td>".$row['size']."</td>";
		echo "<td>".$row['price']."</td>";
		echo "<td>".$row['quantity']."</td>";
		echo "<td>".$row['status']."</td>";
															
		echo "</tr>";
	}
	echo "</table>";
?>
</div>
</div>

<div id="lkdisp" class="datadiv" style="top:-992%">
<center><form action="home.php" method="post" name="lookform">
SORT: <select name="sortlk" onChange="submit()">
<?php
if($f6==0 || $f6==1)
{
			$result1 = mysql_query("SELECT * FROM look");
	echo "<option value=\"11,1\" selected=\"selected\">Look Id</option>
			<option value=\"11,2\">Name</option>";
}
if($f12!="")
{
	$result1=mysql_query("select * from look where lookname LIKE '%$f12%' or lookid LIKE '%$f12%' or pid LIKE '%$f12%'");
}
else if($f6==2)
{
			$result1 = mysql_query("SELECT * FROM look order by lookname DESC");
	echo "<option value=\"11,1\">Look Id</option>
			<option value=\"11,2\" selected=\"selected\">Name</option>";
}
?>
</select>
Search: <input type="text" name="srchlk" id="srchlk"><input type="button" value="Search" onClick="submitform('lookform','11','srchlk');">
<input type="hidden" name="sortpr" value="">
<input type="hidden" name="sortur" value="">
<input type="hidden" name="sortor" value="">
<input type="hidden" name="sortrt" value="">
<input type="hidden" name="sortbr" value="">
</form></center>
<div id="lksel" class="datadiv1">
<?php

		echo "<table cellspacing=\"3px\" style=\"border:1px solid #54879d\">";
		echo "<tr><th>SrNo.</th><th>Look ID</th><th>Name</th><th>Product IDs</th></tr>";
		$ctr=0;
	while($row = mysql_fetch_array($result1))
	{
		$ctr+=1;
		echo "<tr>";
		echo "<td>".($ctr)."</td>";
		echo "<td>".$row['lookid']."</td>";
		echo "<td>".$row['lookname']."</td>";
		echo "<td>".$row['pid']."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</div>
</div>

<div id="lkadd" class="datadiv" style="top:-1082%">
<div id="lkvad" class="datadiv1">
<form method="post" action="iud.php" name="ladd" id="ladd">
<input type="hidden" name="flag" value="7">
<table>
<tr><td>Look Id: </td><td><input type="text" name="lkid"></td></tr>
<tr><td>Look Name: </td><td><input type="text" name="lkname"></td></tr>
<tr><td>Product Names: </td><td><input type="text" name="prids"></td></tr>
</table>
<center><input type="submit" value="Add Look"></center>
</form>
</div>
</div>

<div id="lkupd" class="datadiv" style="top:-1172%">
<div id="lkchg" class="datadiv1">
<form method="post" action="iud.php" name="lupd" id="lupd">
<input type="hidden" name="flag" value="8">
<table>
<tr><td>Look Id: </td><td><input type="text" name="lkid"></td></tr>
<tr><td>Look Name: </td><td><input type="text" name="lkname"></td></tr>
<tr><td>Product Names: </td><td><input type="text" name="prids"></td></tr>
</table>
<center><input type="submit" value="Update Look"></center>
</form>
</div>
</div>

<div id="lkdel" class="datadiv" style="top:-1262%">
<div id="prsel" class="datadiv1">
<form method="post" action="iud.php" name="ldel" id="ldel">
<input type="hidden" name="flag" value="9">
<table>
<tr><td>Look Id: </td><td><input type="text" name="lkid"></td></tr>
</table>
<center><input type="submit" value="Delete Look"></center>
</form>
</div>
</div>
</div>
</center>
<?php echo "<script type=\"text/javascript\">chdiv(".$divsel.");</script>"; ?>
</body>
</html>