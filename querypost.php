<?php
session_start();
?>

<?php
$email=$_POST['email'];
$cat=$_POST['category'];
$specify=$_POST['specify'];
$flag=1;
try
{
	$sql=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$sql);

	$qry="INSERT INTO `query` VALUES ('".$_SESSION['uname']."','$email','$cat','$specify')";
	$result=mysql_query($qry);
	
	mysql_close($sql);
}
catch(Exception $e)
{
	echo $e->getmessage();
}

header("Location: contactus.php?flag=$flag");
?>