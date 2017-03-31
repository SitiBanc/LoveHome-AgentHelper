<html>
<head>
<meta charset="utf-8">
<title>Add_Data</title>
</head>
<body>

<form id= "form1" name= "form1" method= "post" action= "add_request_action.php" >  
 <!–用一個表單將變數用post傳遞至『新增』的PHP網頁–>

<?php
	$conn=mysql_connect("140.120.55.53", "ic2111", "iclin2111");
	mysql_select_db("lovehome") or die("無法連接資料庫時顯示的訊息");


mysql_query("set names utf8");
mysql_query("SET CHARACTER SET 'utf8';");
mysql_query('SET CHARACTER_SET_CLIENT=utf8;');
mysql_query('SET CHARACTER_SET_RESULTS=utf8;');
  	//設定編碼以免亂碼

	echo $_GET[id];

 ?>


姓名<input type="text"  size="10" name="contact_name" id="textfield" value="讀值用" /><br><br>


聯絡電話<input type="text"  size="10" name="contact_phone" id="textfield" value="讀手機值用"/><br><br>


聯絡時間<select name='contact_time'>
  <option value="" style="font-weight:bold" disabled selected>請選擇時段</option>
  <option value="1">早上9:00~12:00</option>
  <option value="2">中午12:00~13:00</option>
  <option value="3">下午13:00~18:00</option>
  <option value="4">晚上18:00~24:00</option>
</select><br><br>


備註<input type="text"  size="10" name="memo" id="textfield" placeholder="請輸入詳細需求"/ onfocus="cleartext(this)" onblur="resettext(this)"/><br><br>







<input type="submit" name="button" id="button" value="新增" />

 
</html>
