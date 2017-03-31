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
			//GET房屋資料
			$id = $_GET['id'];
			$name = $_GET['name'];
			$city = $_GET['city'];
			$district = $_GET['district'];
			$road = $_GET['road'];
		?>
		<form name="addform" method="post" onSubmit="check()" action="add.php">
			<?php 
				echo '<input type="text" name="id" value="'.$id.'" class="off"/>';
				echo '<input type="text" name="name" value="'.$name.'" class="off"/>';
				echo '<input type="text" name="city" value="'.$city.'" class="off"/>';
				echo '<input type="text" name="district" value="'.$district.'" class="off"/>';
				echo '<input type="text" name="road" value="'.$road.'" class="off"/>';
				echo '<div>年</div>';
				echo '<input type="text" name="year"/>';
				echo '<div>月份：</div>'
				echo '<selection name="month">
						<option value="1">一月</option>
						<option value="2">二月</option>
						<option value="3">三月</option>
						<option value="4">四月</option>
						<option value="5">五月</option>
						<option value="6">六月</option>
						<option value="7">七月</option>
						<option value="8">八月</option>
						<option value="9">九月</option>
						<option value="10">十月</option>
						<option value="11">十一月</option>
						<option value="12">十二月</option>
					</selection>';
				echo '<div>日期：</div>';
				echo '<selection name="date">';
				for($i=1;$i<=31;i++){
					echo '<option value="'.$i.'">'.$i.'</option>';
				}
					echo '</selection>';
			?>
		</form>
	</body>
</html>
