<!DOCTYPE html>
<html>
<!-- 設定網頁編碼為UTF-8 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="jquerymobile/themes/chyi.css" />
		<link rel="stylesheet" href="jquerymobile/themes/chyi.min.css" />
		<link rel="stylesheet" href="jquerymobile/jquery.mobile.structure-1.4.5.min.css" /> 
		<script src="jquerymobile/jquery-1.12.3.min.js"></script> 
		<script src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<title>登入</title>
	</head>
	
	  <div data-role="page">
		<div data-role="header">
			<img src="jquerymobile/images/icons-png/logo.jpg" style="height:60px;" />
		</div><!-- /header -->
<div class="modal-body" style="padding:40px 50px;">
	<form name="form" method="post" action="connect.php">
		<div class="form-group">
              <label for="NR"><span class="glyphicon glyphicon-user"></span>手機：</label>
              <input type="text" class="form-control" name="NR" placeholder="請輸入手機號碼">
		</div>
		<div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span>密碼：</label>
              <input type="password" class="form-control" name="password" placeholder="請輸入密碼">
		</div>
		<center><input type="submit" data-inline="true" value="登入"><center>
		
	</form>
	<p>還沒註冊嗎? <a href="register.php">申請帳號</a></p>

</html> 