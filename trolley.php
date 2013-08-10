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
//$nam="$_POST[name1]";
$id="$_POST[prodid]";
$subname="$_POST[subname]";
if($subname!=="mobiles" && $subname!=="tablets")
{
$size1="$_POST[size]";
}
$cost="$_POST[cost]";
$cost1="$_POST[cost1]";
$discount="$_POST[disc]";

$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry1=mysql_query("select * from products where pid='$id'");
while($row111 = mysql_fetch_array($qry1))
{
	$size=$row111['size'];
	$pname=$row111['pname'];
	$subname=$row111['subname'];
}
if($subname!=="mobiles" && $subname!=="tablets")
{
if($size==$size1)
{
	$flag=0;
}
else
{
$qry2=mysql_query("select * from products where pname='$pname' and size=$size1");
while($row222 = mysql_fetch_array($qry2))
{
	$pid=$row222['pid'];
}
	$flag=1;
}

$qry=mysql_query("select * from user where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$trolley=$row['trolley'];
}
if($flag==0)
{
if(strcmp($trolley,"NULL")==0)
{
	$entdb="update user set trolley='$id,' where username='".$_SESSION['uname']."'";
}
else
{
	$entdb="update user set trolley='$trolley"."$id,' where username='".$_SESSION['uname']."'";
}
}
else
{
	if(strcmp($trolley,"NULL")==0)
{
	$entdb="update user set trolley='$pid,' where username='".$_SESSION['uname']."'";
}
else
{
 $entdb="update user set trolley='$trolley"."$pid,' where username='".$_SESSION['uname']."'";
}
}
}
else
{
$qry=mysql_query("select * from user where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$trolley=$row['trolley'];
}
if(strcmp($trolley,"NULL")==0)
{
	$entdb="update user set trolley='$id,' where username='".$_SESSION['uname']."'";
}
else
{
	$entdb="update user set trolley='$trolley"."$id,' where username='".$_SESSION['uname']."'";
}
}
mysql_query($entdb);



//$qry=mysql_query("select * from user where username='".$_SESSION['uname']."'");
//while($row = mysql_fetch_array($qry))
//{
//	$trolley1=$row['trolley'];
//}
//$arr=spliti(",",$trolley1);
//$no=count($arr);

header("Location:mytrolley2.php");
?>
</body>
</html>