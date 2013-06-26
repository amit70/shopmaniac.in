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
$size=array();
$pname=array();
$prodid=array();
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from look");
while($row = mysql_fetch_array($qry))
{
	$pid=$row['pid'];
}
$arr=spliti(",",$pid);
$no=0;
$no=count($arr);

for($i=0;$i<$no-1;$i++)
{
$size[$i]=$_POST['size'.$i];
}
$pname=$_SESSION['pname'];

$matches1 = implode(',', $pname);
$matches2 = implode(',', $size);
//for($i=0;$i<$no-1;$i++)
//{
$qry1=mysql_query("select * from products where pname IN (matches1)");
	while($row1 = mysql_fetch_array($qry1))
	{
		$pid1=$row1['pid'];
	}
	echo $matches2;
	//$prodid[0]=$pid
//}
//echo var_export($prodid,true);
/*for($i=0;$i<$no-1;$i++)
{
$qry1=mysql_query("select * from User where username='".$_SESSION['uname']."'");
while($row1 = mysql_fetch_array($qry1))
{
	$trolley=$row1['trolley'];
}
	
	if(strcmp($trolley,"NULL")==0)
	{
		$entdb="update User set trolley='$arr[$i],' where username='".$_SESSION['uname']."'";
	}
	else
	{
		$entdb="update User set trolley='$trolley"."$arr[$i],' where username='".$_SESSION['uname']."'";
	}
	mysql_query($entdb);
}
*/
//header("Location: http://localhost/shopmaniac/mytrolley2.php");
?>
</body>
</html>