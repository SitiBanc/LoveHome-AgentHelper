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
		<h1 align="center">房屋資訊</h1>
		<ul class="nav nav-pills">
			<li role="presentation"><a href="appointment.php">預約紀錄</a></li>
			<li role="presentation" class="active"><a href="search.html">搜尋房屋</a></li>
			<li role="presentation"><a href="object.xml">瀏覽房屋</a></li>
		</ul>
		<!--get將房屋名稱、地址、ID傳送到addForm.php-->
		<?php
			$xml = simplexml_load_file("object.xml");
			$xpath = "//object[@id=".$_GET['id']."]";
			$object = $xml->xpath($xpath);
			echo "<h2>".$object->children."</h2>"
		?>
	</body>
</html>
