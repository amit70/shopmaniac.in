<?php
session_start();
?>
<html>
<head>
<script language="javascript">
function myaccount(nam)
{
    document.forms[nam].submit();
}
</script>

<?php
$flag="$_POST[flag]";
//$_SESSION['uname']="$_POST[Username]";

//$user="$_POST[Username]";
$email1="$_POST[email123]";
$pwd="$_POST[pwd123]";
$pwd=md5($pwd);


try
{
	$sql=mysql_connect("localhost","root","system");
	mysql_select_db("eshop",$sql);
	$result = mysql_query("SELECT * FROM user WHERE email='$email1'");
	while($row = mysql_fetch_array($result))
	{
		$user= $row['username'];
		$pass= $row['password'];
		$sesn=$row['sesid'];
	}
		
		

	if($pwd==$pass)
	{
		$_SESSION['uname']=$user;
	
        if($flag==0) 
		{ 		
			header("Location:home.php");
		}
		else if($flag==1)
		{
			header("Location:formalshirts.php");
		}
		else if($flag==2)
		{
			header("Location:cs.php");
		}
		
		else if($flag==3)
		{
			header("Location:trousers.php");
		}
		else if($flag==4)
		{
			header("Location:jeans.php");
		}
		else if($flag==5)
		{
			header("Location:t-shirts.php");
		}
		else if($flag==6)
		{
		header("Location:sportsshoes.php");
		}
		else if($flag==7)
		{
		header("Location:casualshoes.php");
		}
		else if($flag==8)
		{
			header("Location:formalshoes.php");
		}
		else if($flag==9)
		{
			header("Location:sf.php");
		}
		else if($flag==10)
		{
			header("Location:samsung.php");
		}
		else if($flag==11)
		{
			header("Location:nokia.php");
		}
		else if($flag==12)
		{
			header("Location:micromax.php");
		}
		else if($flag==13)
		{
			header("Location:sony.php");
		}
		else if($flag==14)
		{
			header("Location:htc.php");
		}
		else if($flag==15)
		{
			header("Location:bb.php");
		}
		else if($flag==16)
		{
			header("Location:apple.php");
		}
		else if($flag==20)
		{
			header("Location:samsungtablets.php");
		}
		else if($flag==21)
		{
			header("Location:appletablets.php");
		}
		else if($flag==22)
		{
			header("Location:mobilestablets.php");
		}
		else if($flag==100)
		{
			$pid="$_POST[pid]";
			echo "<form action=\"prodinfo.php\" method=\"Get\" name=\"pf\">
			<input type=\"hidden\" name=\"pid1\" value=\"$pid\">
			</form>";
			echo "<script>myaccount('pf')</script>";
		}
       else if($flag==101)
		{
			header("Location:mytrolley2.php");
		}
		else if($flag==102)
		{
			header("Location:search.php");
		}
		else if($flag==1001)
		{
			header("Location:returnpolicy.php");
		}
		else if($flag==1002)
		{
		header("Location:privacypolicy.php");
		}
		else if($flag==1003)
		{
			header("Location:shippingpolicy.php");
		}
		else if($flag==1004)
		{
			header("Location:t&c.php");
		}
		else if($flag==1005)
		{
		header("Location:faq.php");
		}
		else if($flag==1006)
		{
			header("Location:trackorder.php");
		}
		else if($flag==1007)
		{
		header("Location:placeorder.php");
		}
		else if($flag==1008)
		{
	header("Location:returnproduct.php");
		}
		else if($flag==1009)
		{
			header("Location:mypoints.php");
		}
		else if($flag==1010)
		{
		header("Location:contactus.php");
		}
		else if($flag==1011)
		{
		header("Location:aboutus.php");
		}
		else if($flag==1012)
		{
			header("Location:mycredits.php");
		}
		else if($flag==1013)
		{
			header("Location:cancelorder.php");
		}
		else if($flag==1014)
		{
			header("Location:buylook.php");
		}
		else if($flag==10001)
		{
		header("Location:mens.php");
		}

		else if($flag==10002)
		{
			header("Location:footwear.php");
		}
		else if($flag==10003)
		{
			header("Location:homeware.php");
		}
	}
	else if(($pwd!=$pass || $pwd=="") && $flag==100)
	{
		$pid="$_POST[pid]";
		header("Location:wrongpwd.php?flag=$flag&pid1=$pid");
	}
	else if($pwd!=$pass || $pwd=="" )
	{
		header("Location:wrongpwd.php?flag=$flag");
		
	}
}
catch(Exception $e)
{
	echo $e->getmessage();
}
?>

