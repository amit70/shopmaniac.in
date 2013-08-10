<?php
session_start();
?>
<HTML>
<HEAD>
<TITLE>Sub-merchant checkout page</TITLE>
</HEAD>
<BODY>
<?php
	require("libfuncs.php");

	$Merchant_Id = "M_ami35342_35342" ;//This id(also User Id)  available at "Generate Working Key" of "Settings & Options" 
	$Amount = $_SESSION['finalamt'] ;//your script should substitute the amount in the quotes provided here
	$Order_Id = $_SESSION['orderid'];
	//your script should substitute the order description in the quotes provided here
	$Redirect_Url = "http://www.shopmaniac.in/transactioncomplete.php" ;//your redirect URL where your customer will be redirected after authorisation from CCAvenue

	$WorkingKey = "7kwvkkepx8o39ufs68"  ;//put in the 32 bit alphanumeric key in the quotes provided here.Please note that get this key ,login to your CCAvenue merchant account and visit the "Generate Working Key" section at the "Settings & Options" page. 
	$Checksum = getCheckSum($Merchant_Id,$Amount,$Order_Id ,$Redirect_Url,$WorkingKey);

	$billing_cust_name=$_SESSION['namebill'];
	$billing_cust_address=$_SESSION['addbill'];
	$billing_city = $_SESSION['citybill'];
	$billing_zip =  $_SESSION['pincodebill'];
	$billing_cust_state=$_SESSION['statebill'];
	$billing_cust_country="India";
	$billing_cust_tel= $_SESSION['contactbill'];
	$billing_cust_email=$_SESSION['emailbill'];
	
	$delivery_cust_name=$_SESSION['nameship'];
	$delivery_cust_address=$_SESSION['addship'];
	$delivery_city =$_SESSION['cityship'];
	$delivery_zip = $_SESSION['pincodeship'];
	$delivery_cust_state = $_SESSION['stateship'];
	$delivery_cust_country = "India";
	$delivery_cust_tel=$_SESSION['contactbill'];
	$delivery_cust_notes="";
	$Merchant_Param="" ;
	

?>
	<form method="post" action="https://www.ccavenue.com/shopzone/cc_details.jsp">
	<input type=hidden name=Merchant_Id value="<?php echo $Merchant_Id; ?>">
	<input type=hidden name=Amount value="<?php echo $Amount; ?>">
	<input type=hidden name=Order_Id value="<?php echo $Order_Id; ?>">
	<input type=hidden name=Redirect_Url value="<?php echo $Redirect_Url; ?>">
	<input type=hidden name=Checksum value="<?php echo $Checksum; ?>">
	<input type="hidden" name="billing_cust_name" value="<?php echo $billing_cust_name; ?>"> 
	<input type="hidden" name="billing_cust_address" value="<?php echo $billing_cust_address; ?>"> 
	<input type="hidden" name="billing_cust_country" value="<?php echo $billing_cust_country; ?>"> 
	<input type="hidden" name="billing_cust_state" value="<?php echo $billing_cust_state; ?>"> 
	<input type="hidden" name="billing_zip" value="<?php echo $billing_zip; ?>"> 
	<input type="hidden" name="billing_cust_tel" value="<?php echo $billing_cust_tel; ?>"> 
	<input type="hidden" name="billing_cust_email" value="<?php echo $billing_cust_email; ?>"> 
	<input type="hidden" name="delivery_cust_name" value="<?php echo $delivery_cust_name; ?>"> 
	<input type="hidden" name="delivery_cust_address" value="<?php echo $delivery_cust_address; ?>"> 
	<input type="hidden" name="delivery_cust_country" value="<?php echo $delivery_cust_country; ?>"> 
	<input type="hidden" name="delivery_cust_state" value="<?php echo $delivery_cust_state; ?>"> 
	<input type="hidden" name="delivery_cust_tel" value="<?php echo $delivery_cust_tel; ?>"> 
	<input type="hidden" name="delivery_cust_notes" value="<?php echo $delivery_cust_notes; ?>"> 
	<input type="hidden" name="Merchant_Param" value="<?php echo $Merchant_Param; ?>"> 
	<input type="hidden" name="billing_cust_city" value="<?php echo $billing_city; ?>"> 
	<input type="hidden" name="billing_zip_code" value="<?php echo $billing_zip; ?>"> 
	<input type="hidden" name="delivery_cust_city" value="<?php echo $delivery_city; ?>"> 
	<input type="hidden" name="delivery_zip_code" value="<?php echo $delivery_zip; ?>"> 
	<INPUT TYPE="submit" value="submit">
	</form>
</BODY>
</HTML>
