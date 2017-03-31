<?php
$conn = mysql_connect("140.120.55.53", "ic2111", "iclin2111");
mysql_select_db("lovehome") or die("無法連接資料庫時顯示的訊息");

mysql_query("set names utf8");
mysql_query("SET CHARACTER SET 'utf8';");
mysql_query('SET CHARACTER_SET_CLIENT=utf8;');
mysql_query('SET CHARACTER_SET_RESULTS=utf8;');
$CustomerNR = "0914141414";
  	//設定編碼以免亂碼


if(isset($_GET['delete_nr']))
{
$sql_query="SELECT * FROM object WHERE nr=".$_GET['delete_nr'];	
$str1=mysql_query($sql_query);
$row_del=mysql_fetch_array($str1); 
$str5="delete from bookmark where NR='$CustomerNR'&&ID = '$row_del[1]' ";
mysql_query($str5);
 
echo "<script type='text/javascript'>";
echo "window.location.href='bookmark.php'";
echo "</script>"; 

}

?>



<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="jquerymobile/themes/chyi.min.css"/>
		<link rel="stylesheet" href="jquerymobile/themes/jquery.mobile.icons.min.css"/>
		<link rel="stylesheet" href="jquerymobile/jquery.mobile.structure-1.4.5.min.css"/>
		<link rel="stylesheet" href="jquerymobile/themes/my.css"/> 
		<link rel="stylesheet" href="jquerymobile/themes/jquery.mobile.icons.min.css"/>
		<script src="jquerymobile/jquery-1.12.3.min.js"></script> 
		<script src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
    <title>我的書籤</title>




<script type="text/javascript">
function delete_nr(nr)
{
 if(confirm('確認刪除此書籤嗎?'))
 {
  window.location.href='bookmark.php?delete_nr='+nr;
 }
}
</script>
</head>

<body>
		<div data-role="page">
			<div data-role="header" style="background-color:#127765" class="title">
				<img src="jquerymobile/images/icons-png/search2.png" class="search" onclick="javascript:location.href='../searchtaichung2.html'"/></a>
		</div><!-- /header -->
 
 			<div data-role="main" class="ui-content">
				<h2><img src="jquerymobile/images/icons-png/back.png" onclick="history.back()" class="back"/>我的書籤</h2>
				<br/>
				
				<?php
					function show_bookmark($db_data,$stage){
						for($i=0;$i<mysql_num_rows($db_data);$i++){ 
							$rs=mysql_fetch_row($db_data);
							echo '<li data-role="list-divider" data-iconpos="right" data-inset="false">';
							$object_data=mysql_query("SELECT * FROM `object` WHERE id = '$rs[2]'");
							$row = mysql_fetch_array($object_data);

							if ($stage == 0){
								echo "<a href='javascript:delete_nr(",$row[0],")'rel='external'><img src='jquerymobile/images/icons-png/delete.png' alt='Delete' class='small_icon'/></a>";
								echo "<a href='tel:' rel='external'><img src='jquerymobile/images/icons-png/call.png' class='small_icon'/></a>";
								echo "<a href='add_request.php?id=",$rs[2],"' rel='external'><img src='jquerymobile/images/icons-png/change.png' class='small_icon'/></a>";
								
							echo $row[4],"</li>";
								echo "<li><a href='http://140.120.55.53:8080/detail.php?value=",$row[4],"&img=",$row[234],"&sqr=",$row[65],"&claim=",$row[40],"&money=",$row[42],"&id=",$row[1],"&groundarea=",$row[66],"&partitionroom=",$row[30],"&partitionlivingroom=",$row[31],"&partitionrestroom=",$row[32],"&partitionchamber=",$row[33],"&floor=",$row[72],"&address=",$row[107],"&address_1=",$row[109],"&address_2=",$row[110],"&objectfunction=",$row[24],"&stage=",$stage,"' rel='external'>";
							}
							
							$object_data=mysql_query("SELECT * FROM `object` WHERE id = '$rs[2]'");
							while($row = mysql_fetch_array($object_data)){
								echo "<img src='",$row[234],"' class='object-img_small'/>";
								echo "<h5>總價 ",$row[42],"萬<br/>";
								echo "坪數 ",$row[65],"坪  格局 ",$row[30],"/",$row[31],"/",$row[32],"/",$row[33],"<br/>";
								echo "地址 ",$row[109],"",$row[110],"",$row[107],"</h5>";
							}
							echo "</a></li>";
						}
					}
				?>				
				
				<ul data-role="listview" data-theme="b">
					<?php
						$data3=mysql_query("SELECT * FROM bookmark WHERE NR = '$CustomerNR'");
						show_bookmark($data3,0);
					?>
				</ul>
				
<div data-role="footer" data-position="fixed">
			<div data-role="navbar">
				<ul>
					<li><a href="http://140.120.55.53:8080/map.php"  rel="external"><img src="jquerymobile/images/icons-png/map.png" style="width:70px;height:70px;"/></a></li>
					<li><a href="http://140.120.55.53:8080/groupA/bookmark.php" class="ui-btn-active"><img src="jquerymobile/images/icons-png/bookmark.png" style="width:70px;height:70px;"/></a></li>
					<li><a href="http://140.120.55.53:8080/groupA/my_order.php"><img src="jquerymobile/images/icons-png/schedule.png" style="width:70px;height:70px;"/></a></li>
					<li><a href="#"><img src="jquerymobile/images/icons-png/reservation1.png" style="width:60px;height:70px;"/></a></li>
				</ul>
			</div>
		</div><!-- /footer -->
    </div>
</body>
</html>
