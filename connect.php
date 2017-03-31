<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />ta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="jquerymobile/themes/chyi.css" />
			<link rel="stylesheet" href="jquerymobile/themes/chyi.min.css" />
			<link rel="stylesheet" href="jquerymobile/jquery.mobile.structure-1.4.5.min.css" /> 
			<script src="jquerymobile/jquery-1.12.3.min.js"></script> 
			<script src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
			<title>登入</title>
		 </head>
		 <div data-role="page">
			<div data-role="header">
				<img src="jquerymobile/images/icons-png/logo.jpg" style="height:60px;" />
			</div><!-- /header -->
<?php
	//連接資料庫
	include("mysql_connect.inc.php");
	$NR = $_POST['NR'];
	$password = $_POST['password'];

	//搜尋資料庫資料
	$sql = "SELECT * FROM new_customer where NR = '$NR'";
	$result = mysql_query($sql);
	$row = @mysql_fetch_row($result);

	//以及MySQL資料庫裡是否有這個會員
	if( $row[0] == $NR && $row[2] == $password)
	{
			$_SESSION['NR'] = $NR;
			echo '登入成功!';
			echo '<meta http-equiv="Refresh" content="5;url=my_order.php">';
		}else
			{
			echo '登入失敗!';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=index0.php>';
			}
?>

