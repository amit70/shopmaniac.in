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
$size="$_POST[size]";
$cost="$_POST[cost]";
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from User where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$trolley=$row['trolley'];
}
if(strcmp($trolley,"NULL")==0)
{
	$entdb="update User set trolley='$id,' where username='".$_SESSION['uname']."'";
}
else
{
	$entdb="update User set trolley='$trolley"."$id,' where username='".$_SESSION['uname']."'";
}
mysql_query($entdb);
$qry=mysql_query("select * from User where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$trolley1=$row['trolley'];
}
$arr=spliti(",",$trolley1);
$no=count($arr);

header("Location: http://localhost/shopmaniac/mytrolley2.php");
?>
</body>
</html>