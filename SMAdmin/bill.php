<?php
$pname=$_POST['pname'];
$psize=$_POST['psize'];
$pprice=$_POST['pprice'];
$username=$_POST['uname'];
$rid=$_POST['rid'];
$famt=$_POST['famt'];
$doo=$_POST['doo'];
$baddress=$_POST['baddress'];
$bemail=$_POST['bemail'];
$bcontact=$_POST['bcontact'];
$saddress=$_POST['saddress'];
$semail=$_POST['semail'];
$scontact=$_POST['scontact'];
$suname=$_POST['suname'];
$paymode=$_POST['paymode'];  
$myptsdis=$_POST['myptsdis'];
$oid=$_POST['oid'];
$baddr=spliti(",",$baddress);
$saddr=spliti(",",$saddress);
?>
<html>
<head>
<title>Shopmaniac Bill</title>
<style type="text/css">
#bill
{
	width:90%;
	height:50%;
	position:relative;
	top:2%;
	border: 1px solid #54879d;
}
body {font-size:100%;}
p {font-size:0.5em;}
</style>
</head>
<body>
<center><div id="bill">
<table cellspacing=0 style="top:0;width:70%">
<tr><td align="center"><p><b>Billing Address</b></p></td><td align="center"><p style="font-size:1em"><b>www.shopmaniac.in</b></p></td><td align="center"><p><b>Shipping Address</b><p></td></tr>
<tr><td style="border-bottom:1px solid" align="center"><p><?php for($i=0;$i<count($baddr);$i++){echo $baddr[$i]."<br>";} echo $bcontact; ?></p></td><td style="border-bottom:1px solid" align="center"><p>E-mail: support@shopmaniac.in<br>Contact: 9773436955</p></td><td style="border-bottom:1px solid" align="center"><p><?php for($i=0;$i<count($saddr);$i++){echo $saddr[$i]."<br>";} echo $scontact; ?></p></td></tr>
<tr><td align="center"><p><br><b>Invoice: </b><?php echo $oid;?></p></td><td align="center"><p><br><b>VAT TIN No:</b>2770335756V</p></td><td align="center"><p><br><b>Date: </b><?php echo $doo;?><p></td></tr>
</table>
<hr style="border:1px dashed; width:70%">
<table cellspacing=0 style="top:0;width:70%">
<tr style="font-size:0.7em"><th style="border-bottom:1px dashed">Sr No.</th><th style="border-bottom:1px dashed">Product</th><th style="border-bottom:1px dashed">Size</th><th style="border-bottom:1px dashed">Quantity</th><th style="border-bottom:1px dashed">Price</th><th style="border-bottom:1px dashed">Discount</th><th style="border-bottom:1px dashed">Discount Price</th></tr>
</table>
</div></center>
</body>
</html>