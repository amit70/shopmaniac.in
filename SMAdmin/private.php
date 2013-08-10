<?php
$sql=mysql_connect("localhost","root","system");
mysql_select_db("eshop",$sql);
$result = mysql_query("insert into admin values('vmhapsekar','".md5("vmilindmhapsekar")."')", $sql) or die(mysql_error());
echo "$result";
$result = mysql_query("insert into admin values('arajula','".md5("abalkrishnarajula")."')", $sql) or die(mysql_error());
echo "$result";
$result = mysql_query("insert into admin values('asalvi','".md5("achandrakantsalvi")."')", $sql) or die(mysql_error());
echo "$result";
echo "DONE";

?> 