<html>
	<head>
		<meta charset="utf-8">
		<?php
			error_reporting(E_ALL ^ E_DEPRECATED);
			$conn = mysql_connect("140.120.55.53", "ic2111", "iclin2111") or die("無法連接伺服器!");
			//設定編碼以免亂碼
			mysql_select_db("lovehome") or die("無法連接資料庫!");
			mysql_query("set names utf8");
			mysql_query("SET CHARACTER SET 'UTF8';");
			mysql_query('SET CHARACTER_SET_CLIENT=UTF8;');
			mysql_query('SET CHARACTER_SET_RESULTS=UTF8;');
			
			mysql_query("UPDATE `my_order` SET rate_saler = '".$_POST['saler_rating']."' WHERE OID = '".$_POST['OID']."'");
			mysql_query("UPDATE `my_order` SET rate_object = '".$_POST['object_rating']."' WHERE OID = '".$_POST['OID']."'");
			mysql_query("UPDATE `my_order` SET suggestion = '".mysql_real_escape_string($_POST['comment'])."' WHERE OID = '".$_POST['OID']."'");
			
			//echo "<script type='text/javascript'/>alert('評論已送出！');";
			header("Location:my_order.php");
		?>
	</head>
</html>