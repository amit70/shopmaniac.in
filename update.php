<?php
session_start();
?>
<html>
<head>
<script language="javascript">
function mytrol()
{
		document.forms["trol"].submit();
}
</script>
</head>
<body>
<?php

$flag="$_POST[flag]";
$sql=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$sql);
if($flag==0)
{
$addr="$_POST[Addr]";
$cont="$_POST[Telephone]";
$email="$_POST[email]";
try
{
	$qry="update user set address='$addr',contact='$cont',email='$email' where username='".$_SESSION['uname']."'";
	$result=mysql_query($qry);
	mysql_close($sql);
	//echo "Data has been successfully updated.$flag";

}
catch(Exception $e)
{
	echo $e->getmessage();
}
}
else if($flag==1)
{
	$pass="$_POST[pass1]";
	$pass=md5($pass);
	
try
{
	$qry="update user set password='$pass' where username='".$_SESSION['uname']."'";
	$result=mysql_query($qry);
	mysql_close($sql);
}
catch(Exception $e)
{
	echo $e->getmessage();
}
}
header("Location: myaccount.php");
?>
</body>
</html>