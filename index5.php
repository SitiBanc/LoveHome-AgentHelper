<?php
$conn = mysql_connect("140.120.55.53", "ic2111", "iclin2111");
mysql_select_db("lovehome") or die("無法連接資料庫時顯示的訊息");

mysql_query("set names utf8");
mysql_query("SET CHARACTER SET 'utf8';");
mysql_query('SET CHARACTER_SET_CLIENT=utf8;');
mysql_query('SET CHARACTER_SET_RESULTS=utf8;');
  	//設定編碼以免亂碼


if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM bookmark WHERE NR='8'&&id=".$_GET['delete_id'];
 mysql_query($sql_query);
echo "<script type='text/javascript'>";
echo "window.location.href='index5.php'";
echo "</script>"; 
}

?>



<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="jquerymobile/themes/chyi.css"/>
	<link rel="stylesheet" href="jquerymobile/themes/chyi.min.css"/>
	<link rel="stylesheet" href="jquerymobile/jquery.mobile.structure-1.4.5.min.css"/> 
	<link rel="stylesheet" href="jquerymobile/themes/my.css"/> 
	<script src="jquerymobile/jquery-1.12.3.min.js"></script> 
	<script src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
    <title>我的書籤</title>




<script type="text/javascript">
function delete_id(id)
{
 if(confirm('確認刪除此書籤嗎?'))
 {
  window.location.href='index5.php?delete_id='+id;
 }
}
</script>
</head>

<body>
    <div data-role="page">
		<div data-role="header" style="background-color:#127765" class="title">
			<img src="jquerymobile/images/icons-png/search2.png" style="float:right;width:50px;height:50px;margin-top:4px;"/>
		</div><!-- /header -->
 
        <div data-role="main" class="ui-content">
			<h2><a href=""><img src="jquerymobile/images/icons-png/back.png" style="width:20%;height:20%;" onclick="history.back()"/>我的書籤</a></h2>

<?php

	$str3 = "SELECT * FROM object INNER JOIN bookmark ON bookmark.id = object.id where bookmark.NR = '0914141414' ";
	$data3 = mysql_query($str3);



?><br><br>


<?php
  for($i=0;$i<mysql_num_rows($data3);$i++)
  { 
    $rs=mysql_fetch_row($data3);
?>  
<a href="javascript:delete_id(<?php echo $rs[1]; ?>)"><img src="jquerymobile/images/icons-png/刪除按鈕.png" alt="Delete" align = right style="width:29px;height:26px;"/></a>
<a href="#"><img src="jquerymobile/images/icons-png/打電話按鈕.png" align = right style="width:29px;height:26px;"/></a>
<a href="add_request.php?id=<? echo $rs[1]; ?>"><img src="jquerymobile/images/icons-png/我要預約.png" align = right style="width:29px;height:26px;"/></a>


ID : <?php echo $rs[1]//資料庫的第一欄 ?><br>
name : <?php echo $rs[4]//資料庫的第二欄 ?><br>
object_function : <?php echo $rs[24]//資料庫的第三欄 ?><br>
<br>



<?php 
  }
?>
<div data-role="footer" data-position="fixed">
			<div data-role="navbar">
				<ul>
					<li><a href="#"><img src="jquerymobile/images/icons-png/map.png" style="width:70px;height:70px;"/></a></li>
					<li><a href="#" class="ui-btn-active"><img src="jquerymobile/images/icons-png/bookmark.png" style="width:70px;height:70px;"/></a></li>
					<li><a href="http://140.120.55.53:8080/groupA/my_order.php"><img src="jquerymobile/images/icons-png/schedule.png" style="width:70px;height:70px;"/></a></li>
					<li><a href="#"><img src="jquerymobile/images/icons-png/reservation2.png" style="width:50px;height:70px;"/></a></li>
				</ul>
			</div>
		</div><!-- /footer -->
    </div>
</body>
</html>
