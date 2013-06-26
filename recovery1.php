<?php
session_start();
?>

  <?php
  $flag=1;
  $email=$_POST['email'];
  
  $to = $email;
$subject = "Shopmaniac.in";
$message = "Dear Customer As Per Your Request,Please click the link below to reset your Password
	www.shopmaniac.in/resetpwd.php?email=$email
	
	Regards
	Shopmaniac Support Team";
$from = "support@shopmaniac.in";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);

header("Location: recovery.php?email=$email&flag=$flag");
  ?>

