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
<a href="#" onclick="onclick="returnsaaa(w)"<img src="prodimg/confirmreturn.png" width="10%;" height="5%;" onmousedown="this.src='prodimg/confirmreturn1.png'" onmouseup="this.src='prodimg/confirmreturn.png'" style="position:absolute; left:70%; top:73%;" />
<?php
$value="$_POST[oid]";
$flag=0;
try
{
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from track");
while($row=mysql_fetch_array($qry))
{
	$oid1=$row['oid'];
	$status=$row['status'];	
	if($value==$oid1)
	{
		$flag=1;
		break;
	}
	else
	{
		$flag=12;
	}
	
}
if($flag==12)
{
	$_SESSION['status']="Sorry Its an Invalid Order Id";
	header("Location: http://localhost/shopmaniac/trackorder.php");
}
else
{
	$_SESSION['status']=$status;
	header("Location: http://localhost/shopmaniac/trackorder.php");
}
}
catch(Exception $e)
{
	echo $e->getmessage();
}
?>
</body>
</html>