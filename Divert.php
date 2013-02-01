<?php
session_start();
?>
<?php
$uname="$_POST[Username]";
$addr="$_POST[address]";
$cont="$_POST[Telephone]";
$name="$_POST[Name]";
$email="$_POST[email]";
$pwd="$_POST[pwd]";
$pwd=md5($pwd);
$flag=0;
try
{
	$sql=mysql_connect("localhost","root","system");
	mysql_select_db("eshop",$sql);
	$qry1="select * from user "; 
	$result1=mysql_query($qry1);
	while($row1=mysql_fetch_array($result1))
	{
		$user=$row1['username'];
		if($uname==$user)
		{
			$flag=1;
			break;
		}
		else 
		{
			$flag=0;
		}

	}
	if($flag==0)
	{
	$qry="insert into user values('$uname', '$pwd', '$name', '$addr', '$cont', '$email',NULL,NULL,500,'".session_id()."',0)";
	$result=mysql_query($qry,$sql);
	$_SESSION['uname']=$uname;
	header("Location: http://localhost/shopmaniac/home.php");
	}
	else
	{
		echo "already exist";
		header("Location: http://localhost/shopmaniac/Reg1.php?flag=$flag");
	}
	
	
	mysql_close($sql);

}
catch(Exception $e)
{
	echo $e->getmessage();
}
?>