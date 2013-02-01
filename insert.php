<?php
session_start();
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
$name="$_POST[name123]";

$add="$_POST[add]";
$contact="$_POST[contact]";
$email="$_POST[email]";
$pname="$_POST[pname]";
$size="$_POST[size]";
$price="$_POST[price]";
$image="$_POST[image]";
$final1="$_POST[final123]";
$trolley1="$_POST[tr]";
$arr=spliti(",",$trolley1);
$no=count($arr);
$period=date("Y/m/d");


try
{ 
$mypoints=0;
	$sql=mysql_connect("localhost","root","system");
	mysql_select_db("eshop",$sql);
	
	for($i=0;$i<$no-1;$i++)
	{
		$temp=(int)$arr[$i];
		$qryaaa=mysql_query("select * from products where pid=$temp");
	while($rowaaa = mysql_fetch_array($qryaaa))
	{
		$id=$rowaaa['pid'];
		$pname= $rowaaa['pname'];
		$size= $rowaaa['size'];
		$price= $rowaaa['price'];
		$image=$rowaaa['img1'];
	}
	$qry="INSERT INTO `orders` VALUES ($id, '$pname', '$size', $price, '".$_SESSION['uname']."', '$add',$contact,'$email','$image',NULL,0,'$name',$final1,'$period','$trolley1')";
	
	$qry123="insert into track values(NULL,'WIll Be Delivered in 24 hours','".$_SESSION['uname']."')";
	$result=mysql_query($qry);
	$result123=mysql_query($qry123);
	
	$qry2="select mypoints from user where username='".$_SESSION['uname']."'";
	$result2=mysql_query($qry2);

	while($row3=mysql_fetch_array($result2))
	{
		$aaa=$row3['mypoints'];
	}
	$mypoints=$aaa+$price;
	$qry3="update user set mypoints=$mypoints where username='".$_SESSION['uname']."'";
	$result5=mysql_query($qry3);
	}
	$qry1="update user set trolley=NULL where username='".$_SESSION[uname]."'";
	
	
	$result1=mysql_query($qry1);
	
	
	mysql_close($sql);
	header("Location: http://localhost/shopmaniac/home.php");

}
catch(Exception $e)
{
	echo $e->getmessage();
}

?>
</body>
</html>