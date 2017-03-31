<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="Content-Type" content="text/html;charset=utf8">
		<title>線上預約看屋系統</title>
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="bootstrap/css/my.css"/>
	</head>

	<body>
		<h1 align="center">新增預約</h1>
		<ul class="nav nav-pills">
			<li role="presentation"><a href="appointment.php">預約紀錄</a></li>
			<li role="presentation"><a href="search.html">搜尋房屋</a></li>
			<li role="presentation"><a href="object.xml">瀏覽房屋</a></li>
		</ul>
		<br/>
		<form name="addform" method="post" action="add.php">
			<h3>房屋資訊</h3>
			房屋ID:
			<input type="text" name="id" value=""/>
			房屋名稱:
			<input type="text" name="name" value=""/><br/>
			城市:
			<input type="text" name="city" value=""/>
			行政區:
			<input type="text" name="district" value=""/>
			路段:
			<input type="text" name="road" value=""/>
			<h3>預約資訊</h3>
			西元
			<input type="text" name="year" value=""/>
			年
			<input type="text" name="month" value=""/>
			月
			<input type="text" name="day" value=""/>
			日<br/>
			<input type="text" name="hour" value=""/>點(24HR)
			<input type="text" name="min" value=""/>分
			<br/>
			<hr/>
			<center><input type="submit" value="新增"></center>
		</form>
	</body>
</html>
