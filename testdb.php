﻿<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<body>

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$conn = mysql_connect("140.120.55.53", "ic2111", "iclin2111") or die("無法連接伺服器!");
mysql_select_db("chyi1") or die("無法連接資料!");

mysql_query("set names utf8");
mysql_query("SET CHARACTER SET 'UTF8';");
mysql_query('SET CHARACTER_SET_CLIENT=UTF8;');
mysql_query('SET CHARACTER_SET_RESULTS=UTF8;');
  	//設定編碼以免亂碼

 $data=mysql_query("select * from customer");
 //echo mysql_num_rows($data);

  for($i=0;$i<mysql_num_rows($data);$i++)
  { 
    $rs=mysql_fetch_row($data);
	echo "NR:",$rs[0],"&nbsp;";
	echo "Name:",$rs[1],"&nbsp;";
	echo "SID:",$rs[2],"&nbsp;";

  }
?>
</body>
</html>
