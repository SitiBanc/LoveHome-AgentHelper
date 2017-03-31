<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="jquerymobile/themes/chyi.min.css"/>
		<link rel="stylesheet" href="jquerymobile/themes/jquery.mobile.icons.min.css"/>
		<link rel="stylesheet" href="jquerymobile/jquery.mobile.structure-1.4.5.min.css"/>
		<link rel="stylesheet" href="jquerymobile/themes/my.css"/>
		<script src="jquerymobile/jquery-1.12.3.min.js"></script>
		<script src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
		<title>保留的已看屋資訊</title>
		<!-- 連結資料庫 -->
		<?php
			error_reporting(E_ALL ^ E_DEPRECATED);
			$conn = mysql_connect("140.120.55.53", "ic2111", "iclin2111") or die("無法連接伺服器!");
			mysql_select_db("lovehome") or die("無法連接資料庫!");
			mysql_query("set names utf8");
			mysql_query("SET CHARACTER SET 'UTF8';");
			mysql_query('SET CHARACTER_SET_CLIENT=UTF8;');
			mysql_query('SET CHARACTER_SET_RESULTS=UTF8;');
			//設定編碼以免亂碼
			$order_id = "8";
			
			if(isset($_POST['submit_btn'])){
				echo "saler_rating=".$_POST['saler_rating'];
				mysql_query("UPDATE `my_order` SET rate_saler = '".$_POST['saler_rating']."' WHERE OID = '$order_id'");
				mysql_query("UPDATE `my_order` SET rate_object = '".$_POST['object_rating']."' WHERE OID = '$order_id'");
				mysql_query("UPDATE `my_order` SET suggestion = '".mysql_real_escape_string($_POST['comment'])."' WHERE OID = '$order_id'");
				$msg = "評價已送出！";
				echo $msg;
			}
		?>
		
	</head>
	<body>
		<div data-role="page">
			<div data-role="header">
				<img src="jquerymobile/images/icons-png/logo.jpg" style="height:60px;" />
			</div><!-- /header -->
			<div role="main" class="ui-content">
				<form data-ajax="false" action="" method="post">
					<span class="rating">
						<input data-role="none" id="rating5" type="radio" name="object_rating" value="5">
						<label for="rating5" style="margin-right:20%;"></label>
						<input data-role="none" id="rating4" type="radio" name="object_rating" value="4">
						<label for="rating4"></label>
						<input data-role="none" id="rating3" type="radio" name="object_rating" value="3">
						<label for="rating3"></label>
						<input data-role="none" id="rating2" type="radio" name="object_rating" value="2">
						<label for="rating2"></label>
						<input data-role="none" id="rating1" type="radio" name="object_rating" value="1">
						<label for="rating1"></label>
					</span>
					<br/><br/>
					<p>房屋評價:</p>
					<span class="rating">
						<input data-role="none" id="ratings5" type="radio" name="saler_rating" value="5">
						<label data-role="none" for="ratings5" style="margin-right:20%;"></label>
						<input data-role="none" id="ratings4" type="radio" name="saler_rating" value="4">
						<label data-role="none" for="ratings4"></label>
						<input data-role="none" id="ratings3" type="radio" name="saler_rating" value="3">
						<label data-role="none" for="ratings3"></label>
						<input data-role="none" id="ratings2" type="radio" name="saler_rating" value="2">
						<label data-role="none" for="ratings2"></label>
						<input data-role="none" id="ratings1" type="radio" name="saler_rating" value="1">
						<label data-role="none" for="ratings1"></label>
					</span>
					<label for="saler_rating">業務評價:</label>
					<br/>
					<label for="comment">其他建議:</label>
					<textarea name="comment" id="comment"></textarea>
					<input value="送出評價" name="submit_btn" type="submit"/>
				</form>
			</div><!-- /content -->
			<div data-role="footer" data-position="fixed">
				test
			</div><!-- /footer -->
		</div><!-- /page -->
	</body>
</html> 