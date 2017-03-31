<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<body>

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$conn = mysql_connect("localhost", "root", "iclin2111") or die("無法連接伺服器!");
mysql_select_db("chyi1") or die("無法連接資料!");

mysql_query("set names utf8");
mysql_query("SET CHARACTER SET 'UTF8';");
mysql_query('SET CHARACTER_SET_CLIENT=UTF8;');
mysql_query('SET CHARACTER_SET_RESULTS=UTF8;');
//設定編碼以免亂碼


					$data=mysql_query("SELECT * FROM `order`");//visited=0
					echo mysql_num_rows($data),"</br></br>";

					for($i=0;$i<mysql_num_rows($data);$i++)
					{ 
						$rs=mysql_fetch_row($data);
						echo "OID:",$rs[0],"</br>";
						echo "Customer NR:",$rs[1],"</br>";
						echo "Object ID:",$rs[2],"</br>";
						echo "Saler ID:",$rs[3],"</br>";
						echo "Visit Date:",$rs[4],"</br>";
					}
				?>
</body>
</html>
