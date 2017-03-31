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
		<?php
			//POST房屋資料
			$object_id = $_POST['id'];
			$name = $_POST['name'];
			$city = $_POST['city'];
			$district = $_POST['district'];
			$road = $_POST['road'];
			$date = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
			$time = $_POST['hour'].":".$_POST['min'].":00";
			//SimpleXML
			$xml = simplexml_load_file("appointment.xml");
			//自動給appointment id
			$app = $xml->xpath("//appointment");
			foreach($app as $apps){
				$appids = $apps->getAttribute('id');
			}
			// intval:change objects to int, turn to array array_map(), get max(), + 1
			$appid = max(array_map("intval", $appids)) + 1;
			
			$dom = new DOMDocument();
			$dom->loadXML($xml->asXML());
			$rootdoc = $dom->documentElement;
			//createElement(), appendChild():Adds new child at the 'end; of the children
			$new_appointment = $dom->createElement('appointment');
			$new_object = $dom->createElement('object');
			$new_name = $dom->createElement('name',$name);
			$new_object->appendChild($new_name);
			$new_address = $dom->createElement('address');
			$new_city = $dom->createElement('city',$city);
			$new_address->appendChild($new_city);
			$new_district = $dom->createElement('district',$district);
			$new_address->appendChild($new_district);
			$new_road = $dom->createElement('road',$road);
			$new_address->appendChild($new_road);
			$new_object->appendChild($new_address);
			$new_objectid = $dom->createAttribute('id');
			$new_objectid->value = $object_id;
			$new_object->appendChild($new_objectid);
			$new_appointment->appendChild($new_object);
			//以上object node完成
			$new_date = $dom->createElement('date',$date);
			$new_appointment->appendChild($date);
			$new_time = $dom->createElement('time',$time);
			$new_appointment->appendChild($time);
			$new_appid = $dom->createAttribute('id');
			$new_appid->value = $appid;
			$new_appointment->appendChild($new_appid);
			//以上appointment node完成
			$dom->appendChild($new_appointment);
			
			$dom->save('appointment.xml');
			header("Location:appointment.php");
			exit;
		?>
	</body>
</html>
