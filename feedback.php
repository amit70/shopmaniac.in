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
$feed="$_POST[fd]";

$period=date("Y/m/d");

try
{
	$sql=mysql_connect("localhost","root","system");
	mysql_select_db("eshop",$sql);
	$qry="INSERT INTO `feedback` VALUES ('$_SESSION[uname]','$feed','$period')";
	$result=mysql_query($qry);
	mysql_close($sql);

}
catch(Exception $e)
{
	echo $e->getmessage();
}
echo "<form action=\"http://localhost/shopmaniac/myaccount.php\" method=\"POST\" name=\"fd\">
<input type=\"hidden\" name=\"name\" value=\"$user\">
			</form>";
			echo "<script>feed('fd')</script>";
?>

</body>
</html>