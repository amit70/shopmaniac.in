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
	$result = mysql_query("SELECT * FROM User WHERE email='$email1'");
	while($row = mysql_fetch_array($result))
	{
		$user= $row['username'];
		$pass= $row['password'];
		$sesn=$row['sesid'];
	}
		$_SESSION['uname']=$user;

	if($pwd==$pass)
	{
        if($flag==0) 
		{ 		
			header("Location: http://localhost/shopmaniac/home.php");
		}
		else if($flag==1)
		{
			header("Location: http://localhost/shopmaniac/formalshirts.php");
		}
		else if($flag==2)
		{
			header("Location: http://localhost/shopmaniac/cs.php");
		}
		
		else if($flag==3)
		{
			header("Location: http://localhost/shopmaniac/trousers.php");
		}
		else if($flag==4)
		{
			header("Location: http://localhost/shopmaniac/jeans.php");
		}
		else if($flag==5)
		{
			header("Location: http://localhost/shopmaniac/t-shirts.php");
		}
		else if($flag==6)
		{
		header("Location: http://localhost/shopmaniac/sportsshoes.php");
		}
		else if($flag==7)
		{
		header("Location: http://localhost/shopmaniac/casualshoes.php");
		}
		else if($flag==8)
		{
			header("Location: http://localhost/shopmaniac/formalshoes.php");
		}
		else if($flag==9)
		{
			header("Location: http://localhost/shopmaniac/sf.php");
		}
		else if($flag==100)
		{
			$pid="$_POST[pid]";
			echo "<form action=\"http://localhost/shopmaniac/prodinfo.php\" method=\"POST\" name=\"pf\">
			<input type=\"hidden\" name=\"pid1\" value=\"$pid\">
			</form>";
			echo "<script>myaccount('pf')</script>";
		}
       else if($flag==101)
		{
			header("Location: http://localhost/shopmaniac/mytrolley2.php");
		}
		else if($flag==102)
		{
			header("Location: http://localhost/shopmaniac/search.php");
		}
		else if($flag==1001)
		{
			header("Location: http://localhost/shopmaniac/returnpolicy.php");
		}
		else if($flag==1002)
		{
		header("Location: http://localhost/shopmaniac/privacypolicy.php");
		}
		else if($flag==1003)
		{
			header("Location: http://localhost/shopmaniac/shippingpolicy.php");
		}
		else if($flag==1004)
		{
			header("Location: http://localhost/shopmaniac/t&c.php");
		}
		else if($flag==1005)
		{
		header("Location: http://localhost/shopmaniac/faq.php");
		}
		else if($flag==1006)
		{
			header("Location: http://localhost/shopmaniac/trackorder.php");
		}
		else if($flag==1007)
		{
		header("Location: http://localhost/shopmaniac/placeorder.php");
		}
		else if($flag==1008)
		{
	header("Location: http://localhost/shopmaniac/returnproduct.php");
		}
		else if($flag==1009)
		{
			header("Location: http://localhost/shopmaniac/mypoints.php");
		}
		else if($flag==1010)
		{
		header("Location: http://localhost/shopmaniac/contactus.php");
		}
		else if($flag==1011)
		{
		header("Location: http://localhost/shopmaniac/aboutus.php");
		}
		else if($flag==1012)
		{
			header("Location: http://localhost/shopmaniac/mycredits.php");
		}
		else if($flag==10001)
		{
		header("Location: http://localhost/shopmaniac/mens.php");
		}

		else if($flag==10002)
		{
			header("Location: http://localhost/shopmaniac/footwear.php");
		}
		else if($flag==10003)
		{
			header("Location: http://localhost/shopmaniac/homeware.php");
		}
	}
	else if(($pwd!=$pass || $pwd=="") && $flag==100)
	{
		$pid="$_POST[pid]";
		header("Location: http://localhost/shopmaniac/index1.php?flag=$flag&pid1=$pid");
	}
	else if($pwd!=$pass || $pwd=="" )
	{
		header("Location: http://localhost/shopmaniac/index1.php?flag=$flag");
		
	}
}
catch(Exception $e)
{
	echo $e->getmessage();
}
?>

