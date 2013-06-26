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
$_SESSION['cat']=$_POST['category'];
$_SESSION['size']=$_POST['size1'];
$_SESSION['brand']=$_POST['brand1'];
$_SESSION['price']=$_POST['range'];
$_SESSION['clr']=$_POST['color'];

header("Location:searchresponse.php");
?>
</body>
</html>