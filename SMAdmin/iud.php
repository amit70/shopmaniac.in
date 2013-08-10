<html>
<head>
<title>Data Manipulation</title>
</head>
<body>
<?php
include("conn.php");
$flag=$_POST['flag'];
if($flag==1)
{
	$qry=mysql_query("insert into products values(".$_POST['prid'].",'".$_POST['prname']."','".$_POST['prsz']."',".$_POST['prpr'].",".$_POST['prqt'].",'".$_POST['prbr']."','".$_POST['prcat']."','".$_POST['prclr']."','".$_POST['prinfo']."','".$_POST['prdept']."','".$_POST['prim1']."','".$_POST['prim2']."','".$_POST['prim3']."','".$_POST['prim4']."','".$_POST['prim5']."','".$_POST['prsname']."',".$_POST['prdspr'].",'".$_POST['prdsc']."','".$_POST['prst']."','".$_POST['prdel']."','".$_POST['specs']."')");
	echo "1 Product Inserted";
}
else if($flag==2)
{
	if($_POST['prname']!="")
	{
		mysql_query("update products set pname='".$_POST['prname']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prsz']!="")
	{
		mysql_query("update products set size='".$_POST['prsz']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prpr']!="")
	{
		mysql_query("update products set price=".$_POST['prpr']." where pid=".$_POST['prid']."");
	}
	if($_POST['prqt']!="")
	{
		mysql_query("update products set quant=".$_POST['prqt']." where pid=".$_POST['prid']."");
	}
	if($_POST['prbr']!="")
	{
		mysql_query("update products set brand='".$_POST['prbr']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prcat']!="")
	{
		mysql_query("update products set category='".$_POST['prcat']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prclr']!="")
	{
		mysql_query("update products set color='".$_POST['prclr']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prinfo']!="")
	{
		mysql_query("update products set info='".$_POST['prinfo']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prdept']!="")
	{
		mysql_query("update products set dept='".$_POST['prdept']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prim1']!="")
	{
		mysql_query("update products set img1='".$_POST['prim1']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prim2']!="")
	{
		mysql_query("update products set img2='".$_POST['prim2']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prim3']!="")
	{
		mysql_query("update products set img3='".$_POST['prim3']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prim4']!="")
	{
		mysql_query("update products set img4='".$_POST['prim4']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prim5']!="")
	{
		mysql_query("update products set img5='".$_POST['prim5']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prsname']!="")
	{
		mysql_query("update products set subname='".$_POST['prsname']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prdspr']!="")
	{
		mysql_query("update products set discprice=".$_POST['prdspr']." where pid=".$_POST['prid']."");
	}
	if($_POST['prdsc']!="")
	{
		mysql_query("update products set discountpercent='".$_POST['prdsc']."' where pid=".$_POST['prid']."");
	}
	if($_POST['prst']!="")
	{
		mysql_query("update products set stock='".$_POST['prst']."' where pid=".$_POST['prid']."");
	}
	if($_POST['specs']!="")
	{
		mysql_query("update products set specification='".$_POST['specs']."' where pid=".$_POST['prid']."");
	}
	echo "1 Product Updated";
}
else if($flag==3)
{
	mysql_query("delete from products where pid=".$_POST['prid']."");
	echo "1 Product Deleted";
}
else if($flag==4)
{
	mysql_query("insert into brand values('".$_POST['brname']."','".$_POST['brinfo']."','".$_POST['brimg']."')");
	echo "1 Brand Inserted";
}
else if($flag==5)
{
	if($_POST['brinfo']!="")
	{
		$result=mysql_query("update brand set brandinfo='".$_POST['brinfo']."' where brandname='".$_POST['brname']."'");
		echo $result;
	}
	if($_POST['brimg']!="")
	{
		mysql_query("update brand set brandimg='".$_POST['brimg']."' where brandname='".$_POST['brname']."'");
	}
	echo "1 Brand Updated";
}
else if($flag==6)
{
	mysql_query("delete from brand where brandname='".$_POST['brname']."'");
	echo "1 Product Deleted";
}
else if($flag==7)
{
	mysql_query("insert into look values(".$_POST['lkid'].",'".$_POST['lkname']."','".$_POST['prids']."')");
	echo "1 Look Inserted";
}
else if($flag==8)
{
	if($_POST['lkname']!="")
	{
		mysql_query("update look set lookname='".$_POST['lkname']."' where lookid=".$_POST['lkid']."");
	}
	if($_POST['prids']!="")
	{
		mysql_query("update look set pid='".$_POST['prids']."' where lookid=".$_POST['lkid']."");
	}
	echo "1 Look Updated";
}
else if($flag==9)
{
	mysql_query("delete from look where lookid=".$_POST['lkid']."");
	echo "1 Look Deleted";
}
?>
<a href="home.php"><h5 align="center">HOME</h5></a>
</body>
</html>