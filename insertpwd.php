<?php
session_start();
?>

<?php
$email=$_POST['email'];
$newpwd=$_POST['newpwd'];
$confirmpwd=$_POST['confirmpwd'];
$flag=0;
$newpwd=md5($newpwd);
try
{
	$sql=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$sql);
	
	$qry123="select * from user";
	$fetch123=mysql_query($qry123);
	while($row=mysql_fetch_array($fetch123))
	{
		$mail=$row['email'];
		if($mail==$email)
		{
			$qry="Update user set password='$newpwd' where email='$email'";
			$result=mysql_query($qry);
			$flag=1;
		}
		else
		{
			continue;
		}
	}
	
	
	mysql_close($sql);
}
catch(Exception $e)
{
	echo $e->getmessage();
}
//echo $flag;
header("Location:resetpwd.php?email=$email&flag=$flag");
?>