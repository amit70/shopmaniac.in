<?php
session_start();
?>

  <?php
  $flag=0;
  $email=$_POST['email'];
  
  $sql=mysql_connect("localhost","root","system");
	mysql_select_db("eshop",$sql);
	$qry1="select * from user"; 
	$result1=mysql_query($qry1);
	while($row1=mysql_fetch_array($result1))
	{
		$email123=$row1['email'];
		if($email==$email123)
		{
			$flag=1;
			break;
		}
		else 
		{
			$flag=2;
		}
	}
		
	if($flag==1)	
	{
  $to = $email;
$subject = "Shopmaniac.in";
$message = "Dear Customer As Per Your Request,Please click the link below to reset your Password
	www.shopmaniac.in/resetpwd.php?email=$email
	
	Regards
	Shopmaniac Support Team";
$from = "support@shopmaniac.in";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
	}
header("Location: recovery.php?email=$email&flag=$flag");
  ?>

