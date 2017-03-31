<html>
<body>

<?php
	$conn=mysql_connect("140.120.55.53", "ic2111", "iclin2111");
	mysql_select_db("lovehome") or die("無法連接資料庫時顯示的訊息");


	mysql_query(" set names utf8 ");
  	mysql_query(" SET CHARACTER SET  'UTF8 '; ");
  	mysql_query('SET CHARACTER_SET_CLIENT=UTF8; ');
  	mysql_query('SET CHARACTER_SET_RESULTS=UTF8; ');
  	//設定編碼以免亂碼

	$data_request=mysql_query("select * from request");
	$request_nr=mysql_num_rows($data_request)+1;

       mysql_query(" INSERT INTO request(request_nr,request_type,NR,id,saler_id,OID,contact_name,contact_phone,contact_time,memo)VALUES ('$request_nr','1','111','$_POST[id]','11111','111111','$_POST[contact_name] ', '$_POST[contact_phone] ', '$_POST[contact_time] ', '$_POST[memo] '); ");




 ?>

新增成功!!<br><br>

<input type= " button " value= "回主畫面"
 onclick= "location.href= 'http://localhost/add_request.html'">

</body>
</html>
