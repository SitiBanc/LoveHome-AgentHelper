<html>
<head>
<meta charset="utf-8">
<title>Add_Data</title>
</head>
<body>

<form id= "form1" name= "form1" method= "post" action= "add_request_action.php" >  
 <!�V�Τ@�Ӫ��N�ܼƥ�post�ǻ��ܡy�s�W�z��PHP�����V>

<?php
	$conn=mysql_connect("140.120.55.53", "ic2111", "iclin2111");
	mysql_select_db("lovehome") or die("�L�k�s����Ʈw����ܪ��T��");


mysql_query("set names utf8");
mysql_query("SET CHARACTER SET 'utf8';");
mysql_query('SET CHARACTER_SET_CLIENT=utf8;');
mysql_query('SET CHARACTER_SET_RESULTS=utf8;');
  	//�]�w�s�X�H�K�ýX

	echo $_GET[id];

 ?>


�m�W<input type="text"  size="10" name="contact_name" id="textfield" value="Ū�ȥ�" /><br><br>


�p���q��<input type="text"  size="10" name="contact_phone" id="textfield" value="Ū����ȥ�"/><br><br>


�p���ɶ�<select name='contact_time'>
  <option value="" style="font-weight:bold" disabled selected>�п�ܮɬq</option>
  <option value="1">���W9:00~12:00</option>
  <option value="2">����12:00~13:00</option>
  <option value="3">�U��13:00~18:00</option>
  <option value="4">�ߤW18:00~24:00</option>
</select><br><br>


�Ƶ�<input type="text"  size="10" name="memo" id="textfield" placeholder="�п�J�ԲӻݨD"/ onfocus="cleartext(this)" onblur="resettext(this)"/><br><br>







<input type="submit" name="button" id="button" value="�s�W" />

 
</html>
