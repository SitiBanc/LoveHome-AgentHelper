<!DOCTYPE html>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<form name="form" method="post" action="register_finish.php">
		 <head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="jquerymobile/themes/chyi.css" />
			<link rel="stylesheet" href="jquerymobile/themes/chyi.min.css" />
			<link rel="stylesheet" href="jquerymobile/jquery.mobile.structure-1.4.5.min.css" /> 
			<script src="jquerymobile/jquery-1.12.3.min.js"></script> 
			<script src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
			<title>註冊帳號</title>
		 </head>
		 <div data-role="page">
			<div data-role="header">
				<img src="jquerymobile/images/icons-png/logo.jpg" style="height:60px;" />
			</div><!-- /header -->
		<div class="modal-body" style="padding:40px 50px;">	
			姓名：<br />
			<input type="text" name="name"  placeholder="請輸入姓名"/> 
			密碼：<br />
			<input type="password" name="password" placeholder="請輸入密碼"/>
			手機號碼：<br />
			<input type="text" name="NR" maxlength="10" size="10"placeholder="請輸入手機號碼"/>
			信箱：<br />
			<input type="text" name="email" placeholder="請輸入信箱"/>
			性別：
			<input type="radio" name="SEX" value="male">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;男性
			<input type="radio" name="SEX" value="female">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;女性
			<center><input type="submit" data-inline="true" value="確定！"><center>
		</div>
	</form>
</html> 
