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
		<h1 align="center">刪除預約</h1>
		<ul class="nav nav-pills">
			<li role="presentation"><a href="appointment.php">預約紀錄</a></li>
			<li role="presentation"><a href="add.php">新增預約</a></li>
			<li role="presentation"><a href="search.html">搜尋房屋</a></li>
			<li role="presentation"><a href="object.xml">瀏覽房屋</a></li>
		</ul>
		<br/>
		<?php
			//GET預約資料
			$id = $_GET['id'];
			
			$xml = new DOMDocument();
			$xml->load("appointment.xml");
			$rootdoc = $xml->documentElement;
			$applist = $rootdoc->getElementsByTagName('appointment');
			
			$nodeToRemove = null;
			foreach ($applist as $domElement){
				$attrValue = $domElement->getAttribute('id');
				if ($attrValue == $id) {
					$nodeToRemove = $domElement; //will only remember last one- but this is just an example :)
				}
			}
			if ($nodeToRemove != null)
				$rootdoc->removeChild($nodeToRemove);
			$xml->save('appointment.xml'); // This saves the XML to a file
			header("Location:appointment.php");
			exit;
		?>
		<form name="add">
		</form>
	</body>
</html>
