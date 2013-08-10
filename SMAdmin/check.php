<?php
session_start();
include("conn.php");
?>
<html>
<head>
</script>
<?php
$uname="$_POST[admin]";
$pwd="$_POST[pwd]";
$pwd=md5($pwd);
$user="";
try
{
	
	$result = mysql_query("SELECT * FROM admin WHERE uname='$uname'");
	while($row = mysql_fetch_array($result))
	{
		$user= $row['name'];
		$pass= $row['pwd'];
	}
	$_SESSION['name']=$user;

	if($pwd==$pass)
	{
		header("Location: home.php");
	}
        	else if($pwd!=$pass || $pwd=="" )
	{
		header("Location:index1.php");
		
	}
}
catch(Exception $e)
{
	echo $e->getmessage(); 
}
?>

