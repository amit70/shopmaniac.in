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
$id=(int)$_POST["hid"];

$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);
$qry=mysql_query("select * from user where username='".$_SESSION['uname']."'");
while($row = mysql_fetch_array($qry))
{
	$trolley1=$row['trolley'];
}
$arr=spliti(",",$trolley1);
$no=count($arr);
for($i=0;$i<$no;$i++)
{
	if($id==(int)$arr[$i])
	{
		while($i<$no-1)
		{
			$arr[$i]=$arr[$i+1];
			$i++;
		}
	}
	if($i==$no-1)
		break;
}
$str="";
for($i=0;$i<$no-2;$i++)
{
	$str=$str."$arr[$i],";
}
$qry=mysql_query("update user set trolley='$str' where username='".$_SESSION['uname']."'");

header("Location: mytrolley2.php");
?>


</body>
</html>