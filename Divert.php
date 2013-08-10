<?php
session_start();
?>
<script language="javascript">
function myaccount(nam)
{
    document.forms[nam].submit();
}
</script>
<?php
$uname="$_POST[Username]";
//$addr="$_POST[address]";
//$cont="$_POST[Telephone]";
//$name="$_POST[Name]";
$email="$_POST[email]";
$gender="$_POST[radio]";
$pwd="$_POST[pwd]";
$pwd=md5($pwd);
$value=0;
$flag="$_POST[flag]";
$pid="$_POST[pid]";
try
{
	$sql=mysql_connect("localhost","root","system");
	mysql_select_db("eshop",$sql);
	$qry1="select * from user"; 
	$result1=mysql_query($qry1);
	while($row1=mysql_fetch_array($result1))
	{
		$user=$row1['username'];
		$email123=$row1['email'];
	
		if($uname==$user)
		{
			$value=1;
			break;
		}
		if($email==$email123)
		{
			$value=2;
			break;
		}
		else 
		{
			$value=0;
		}

	}
	
	if($value==0)
	{
	$qry="insert into user values('$uname', '$pwd',NULL, '$email', NULL,NULL,500,'".session_id()."',0,'$gender',NULL)";
	$result=mysql_query($qry,$sql);
	$_SESSION['uname']=$uname;
	
	$to = $email;
$subject = "Shopmaniac.in";
$message = "Dear $uname Thank You for Registering at Shopmaniac.in.
	
	Regards
	Shopmaniac Support Team";
$from = "support@shopmaniac.in";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
	
	    if($flag==0) 
		{ 		
	
			header("Location: home.php");
		}
		else if($flag==1)
		{
			header("Location: formalshirts.php");
		}
		else if($flag==2)
		{
			header("Location: cs.php");
		}
		
		else if($flag==3)
		{
			header("Location: trousers.php");
		}
		else if($flag==4)
		{
			header("Location: jeans.php");
		}
		else if($flag==5)
		{
			header("Location: t-shirts.php");
		}
		else if($flag==6)
		{
		header("Location: sportsshoes.php");
		}
		else if($flag==7)
		{
		header("Location: casualshoes.php");
		}
		else if($flag==8)
		{
			header("Location: formalshoes.php");
		}
		else if($flag==9)
		{
			header("Location: sf.php");
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
			
			echo "<form action=\"prodinfo.php\" method=\"get\" name=\"pf\">
			<input type=\"hidden\" name=\"pid1\" value=\"$pid\">
			</form>";
			echo "<script>myaccount('pf')</script>";
		}
       else if($flag==101)
		{
			header("Location: mytrolley2.php");
		}
		else if($flag==102)
		{
			header("Location: search.php");
		}
		else if($flag==1001)
		{
			header("Location: returnpolicy.php");
		}
		else if($flag==1002)
		{
		header("Location: privacypolicy.php");
		}
		else if($flag==1003)
		{
			header("Location: shippingpolicy.php");
		}
		else if($flag==1004)
		{
			header("Location: t&c.php");
		}
		else if($flag==1005)
		{
		header("Location: faq.php");
		}
		else if($flag==1006)
		{
			header("Location: trackorder.php");
		}
		else if($flag==1007)
		{
		header("Location: placeorder.php");
		}
		else if($flag==1008)
		{
	header("Location: returnproduct.php");
		}
		else if($flag==1009)
		{
			header("Location: mypoints.php");
		}
		else if($flag==1010)
		{
		header("Location: contactus.php");
		}
		else if($flag==1011)
		{
		header("Location: aboutus.php");
		}
		else if($flag==1012)
		{
			header("Location: mycredits.php");
		}
		else if($flag==1013)
		{
			header("Location: cancelorder.php");
		}
		else if($flag==1014)
		{
			header("Location: buylook.php");
		}
		else if($flag==10001)
		{
		header("Location: mens.php");
		}

		else if($flag==10002)
		{
			header("Location: footwear.php");
		}
		else if($flag==10003)
		{
			header("Location: homeware.php");
		}
	}
	elseif($value==1 && $flag==100)
	{
	header("Location:reg.php?value=$value&flag=$flag&pid1=$pid");
	}
	elseif($value==1)
	{	
	header("Location:reg.php?value=$value&flag=$flag");
	}
	
	elseif($value==2 && $flag==100)
	{
	header("Location:reg.php?value=$value&flag=$flag&pid1=$pid");
	}
	elseif($value==2)
	{
	header("Location:reg.php?value=$value&flag=$flag");
	}
	
	mysql_close($sql);

}
catch(Exception $e)
{
	echo $e->getmessage();
}
?>