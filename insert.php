<?php
session_start();
date_default_timezone_set('Asia/Calcutta');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id="$_POST[id]";
$nameship="$_POST[nameship]";
$namebill="$_POST[namebill]";
$shippingaddress="$_POST[address2]";
$billingaddress="$_POST[address1]";
$contactship="$_POST[contact2]";
$contactbill="$_POST[contact1]";
$emailship="$_POST[emailship]";
$emailbill="$_POST[emailbill]";
$pname="$_POST[pname]";
$size="$_POST[size]";
$price="$_POST[price]";
$image="$_POST[image]";
$final1="$_POST[final123]";
$trolley1="$_POST[tr]";
$arr=spliti(",",$trolley1);
$no=count($arr);
$period=date("Y/m/d H:i");
$leftcredits="$_POST[leftcredits]";
$payment="$_POST[payment]";
$orderid=rand(10000,99999);
$quant=$_SESSION['quant'];
$credits= $_SESSION['credits'];
$finalaaa=0;
$flag=0;
try
{ 
$mypoints=0;
	$sql=mysql_connect("localhost","root","system");
	mysql_select_db("eshop",$sql);
	
	$disc=0;
	$qrymypoints=mysql_query("select mypoints from user where username='".$_SESSION['uname']."'");
	while($rowmypoints=mysql_fetch_array($qrymypoints))
	{
		$mypoints1=$rowmypoints['mypoints'];
	}
	if($mypoints1<=4999)
  {
	  $disc=0;
  }
   else if($mypoints1>=5000 && $mypoints1<=7999)
   {
   	  $disc=3;
   }
  else if($mypoints1>=8000 && $mypoints1<=9999)
  {
   $disc=5;
   }
  else if($mypoints1>=10000 && $mypoints1<=14999)
  {
	  $disc=7;
  }
  else if($mypoints1>=15000)
  {
	 $disc=10;
  }
  
  if($_SESSION['total']<200)
  {
	  $shipping=30;
  }
  else
  {
	  $shipping="Free";
  }
  
  if($credits=="" || $credits==NULL)
  {
	  $credits=0;
  }
  else
  {
	  $credits=$_SESSION['credits'];
  }
	for($i=0;$i<$no-1;$i++)
	{
		if($quant[$i]=="" || $quant[$i]==NULL)
  		{
	 		 $quant[$i]=1;
  		}
		//if($i>=1 && $credits>0)
		//{
			//$credits="-";
		//}
		$returnid=rand(10000,99999);
		$temp=(int)$arr[$i];
		$qryaaa=mysql_query("select * from products where pid=$temp");
		while($rowaaa = mysql_fetch_array($qryaaa))
		{
			$id=$rowaaa['pid'];
			$pname= $rowaaa['pname'];
			$size= $rowaaa['size'];
			$price1= $rowaaa['discprice'];
			$image=$rowaaa['img1'];
			$subname=$rowaaa['subname'];
		}
		if($no==2)
		{
			if($price1<200)
			{
				$price123=$price1*$quant[$i];
				$prize=$price123+30;
				$b=($prize*$disc)/100;
				$discprice=$prize-$b;
				$discprice=round($discprice);
			}
			else
			{
				$price123=$price1*$quant[$i];
				$b=($price123*$disc)/100;
				$discprice=$price123-$b;
				$discprice=round($discprice);
			}
		}
		else
		{
			$price123=$price1*$quant[$i];
			$b=($price123*$disc)/100;
			$discprice=$price123-$b;
			$discprice=round($discprice);
		}
		$qry="INSERT INTO `orders` VALUES ($id, '$pname', '$size', $price1, 							'$namebill','$image',0,'$final1','$period','$trolley1','$billingaddress','$emailbill',$contactbill,'$shippingaddress','$emailship',$contactship,'$nameship','$payment','$disc%','$discprice','$orderid','$returnid','WIll Be Delivered in 3-4 Business Days','$quant[$i]','$shipping','$credits','pending')";
		if($subname=="mobiles" || $subname=="tablets")
		{
			$flag=1;
			$finalaaa=$finalaaa+$discprice;
		}
		$result=mysql_query($qry);		
		}
				
		$qry2="select mypoints from user where username='".$_SESSION['uname']."'";
		$result2=mysql_query($qry2);
		while($row3=mysql_fetch_array($result2))
		{
			$aaa=$row3['mypoints'];
		}
		if($flag==1)
		{
			$finalaaa=$final1-$finalaaa;
			$mypoints=$aaa+$finalaaa;
		}
		else
		{
			$mypoints=$aaa+$final1;
		}
		$qry3="update user set mypoints=$mypoints where username='".$_SESSION['uname']."'";
		$result5=mysql_query($qry3);
		
		
	$qry1="update user set trolley=NULL where username='".$_SESSION[uname]."'";
	$result1=mysql_query($qry1);
	
	$qry444="update user set credits='$leftcredits' where username='".$_SESSION[uname]."'";
	$result1=mysql_query($qry444);
		
	$qrybill=mysql_query("select * from user where username='".$_SESSION[uname]."'");	
	while($rowbill=mysql_fetch_array($qrybill))
	{
		$add=$rowbill['address'];
		$cont=$rowbill['contact'];
	}
	if($add=="" || $add=="NULL")
	{
		$qryadd="update user set address='$billingaddress' where username='".$_SESSION[uname]."'";
		$resultadd=mysql_query($qryadd);
	}
	if($cont=="" || $cont=="NULL")
	{
    $qrycont="update user set contact='$contactbill' where username='".$_SESSION[uname]."'";
		$resultcont=mysql_query($qrycont);
	}
	mysql_close($sql);

	$_SESSION['orderid']=$orderid;
	$_SESSION['finalamt']=$final1;
	
	if($payment!=="cod")
	{
		header("Location: checkout.php");
	}
	else
	{
		header("Location: transactioncomplete.php");
	}

}
catch(Exception $e)
{
	echo $e->getmessage();
}

?>
</body>
</html>