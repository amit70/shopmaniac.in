<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" language="javascript">
function feed(aaa)
{
	document.forms[aaa].submit();
}
</script>
</head>

<body>
<?php

$pid=$_POST['pidaaa'];
$pname=$_POST['pnameaaa'];
$size=$_POST['sizeaaa'];
$price=$_POST['priceaaa'];
$image=$_POST['imageaaa'];
$rid=$_POST['ridaaa'];
$oid=$_POST['oidaaa'];
try
{
	
	$sql=mysql_connect("localhost","root","system");
	mysql_select_db("eshop",$sql);
		
	$qry="INSERT INTO `returns` VALUES ($pid, '$pname', '$size', $price, '".$_SESSION['uname']."','$image',$rid,'pending',$oid)";
	
	$qry1="update orders set flag=1 where username='".$_SESSION['uname']."' and returnid=$rid";
	
	$result=mysql_query($qry);
	$result1=mysql_query($qry1);
   
  
   
	mysql_close($sql);
	

}
catch(Exception $e)
{
	echo $e->getmessage();
}
echo "<form action=\"http://localhost/shopmaniac/myaccount.php\" method=\"POST\" name=\"fd\">
			</form>";
			echo "<script>feed('fd')</script>";

?>
</body>
</html>