<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	
	position:absolute;
	width:96%;
	height:50%;
	z-index:14;
	left:2%;
	top:50%;	
	background-color:#000;
	overflow:scroll;
}
</style>
</head>

<body>
<div id="apDiv1">
<?php
$aaa=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$aaa);

$l=0;
$t=0;
$i=0;	
	$fetch=mysql_query("select * from products ");
	$count = @mysql_num_rows($fetch);
	for($i=0;$i<$count;$i++)
	{
	while($row = mysql_fetch_array($fetch))
	{
		$id=$row['pid'];
		$name= $row['pname'];
		$size= $row['size'];
		$prize= $row['price'];
		$img=$row['img1'];
		
		echo "<form method=\"post\" action=\"http://localhost/shopmaniac/prodinfo.php\" id=\"prod123\" name=\"prod123".$i."\">";
		echo "<input type=\"hidden\" name=\"uname\" value=\"$user\">";
        echo "<input type=\"hidden\" name=\"pid1\" value=\"$id\" >";
echo "</form> ";
		
		echo "<a href=\"#\" onclick=\"prod1('prod123".$i."')\">";
		echo "<div style=\" width:19.2%;height:22%; background-color:#fafafa; position:absolute; top:".$t."%; left:".$l."%; \">";
	echo "<img src=\"prodimg/p4.jpg\" width=\"96%\" height=\"60%\" style=\"position:absolute; top:1%; left:2%;\">";
	echo "<p style=\"position:absolute; top:56%; left:2%; font-family:'Comic Sans MS', cursive; color:#555; font-size:94%;\"> $name</p>";
	echo "<p style=\"position:absolute; left:2%; top:72%; font-family:'Comic Sans MS', cursive; color:#555;  color:#F00; font-size:100%;\"> $prize</p>";
	
	echo "<a href=\"#\"><img src=\"prodimg/Buy1.png\" width=\"35%\" height=\"15%\" style=\"position:absolute; left:2%; top:87%; \" onclick=\"prod1('prod123".$i."')\" onmousedown=\"this.src='prodimg/Buy2.png'\" onmouseup=\"this.src='prodimg/Buy1.png'\"></a>";
	echo "</div>";	
	echo "</a>";
	$l=$l+20.2;
	$i=$i+1;
	}
	}
	
mysql_close($aaa);
?>
</div>
</body>
</html>