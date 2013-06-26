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
$uname1=$_POST['username'];
$title1=$_POST['title'];
$desc1=$_POST['desc'];
$rating1=$_POST['abc'];
$pid1=$_POST['prodid'];

try
{ 

	$sql=mysql_connect("localhost","root","system");
	mysql_select_db("eshop",$sql);
	

	$qry1="INSERT INTO `review` VALUES ($pid1,'$uname1','$title1','$desc1','$rating1')";
	
	$result=mysql_query($qry1);

	
	mysql_close($sql);
	header("Location: http://localhost/shopmaniac/prodinfo.php?pid1=$pid1");

}
catch(Exception $e)
{
	echo $e->getmessage();
}

?>
</body>
</html>