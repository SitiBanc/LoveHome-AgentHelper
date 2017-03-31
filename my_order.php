<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="jquerymobile/themes/chyi.min.css"/>
		<link rel="stylesheet" href="jquerymobile/themes/jquery.mobile.icons.min.css"/>
		<link rel="stylesheet" href="jquerymobile/jquery.mobile.structure-1.4.5.min.css"/>
		<link rel="stylesheet" href="jquerymobile/themes/my.css"/> 
		<script src="jquerymobile/jquery-1.12.3.min.js"></script> 
		<script src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
		<script type="text/javascript">
			//點擊已看未評紀錄的刪除按鈕先拿到欲刪除預約的OID，回傳true再接下去執行PHP程式
			function getOID(OID){
				document.getElementById("delete1").value = OID;
				return true;
			}
		</script>
		<?php
			//從對話框中點擊"刪除"，將欲刪除的OID POST到同一個頁面
			if(isset($_POST['delete-btn1'])){
				mysql_query("DELETE FROM `my_order` WHERE OID = '",$_POST['delete_oid'],"'");
				echo '<script type="text/javascript">alert("It works.");</script>';
				header("Refresh:0");
			}
		?>
		<title>看屋行程</title>
	</head>
	<body>
		<!-- 連結資料庫 -->
		<?php
			session_start();
			error_reporting(E_ALL ^ E_DEPRECATED);
			$conn = mysql_connect("140.120.55.53", "ic2111", "iclin2111") or die("無法連接伺服器!");
			mysql_select_db("lovehome") or die("無法連接資料庫!");
			//設定編碼以免亂碼
			mysql_query("set names utf8");
			mysql_query("SET CHARACTER SET 'UTF8';");
			mysql_query('SET CHARACTER_SET_CLIENT=UTF8;');
			mysql_query('SET CHARACTER_SET_RESULTS=UTF8;');
			//判斷是否已經登入，已登入則由session取得客戶NR
			if(isset($_SESSION['NR'])){
				$CustomerNR = $_SESSION["NR"];
			}else{
			//未登入則指向登入頁面
				header("Location:index0.php");
			}
		?>
		<div data-role="page">
			<div data-role="header" style="background-color:#127765" class="title">
				<img src="jquerymobile/images/icons-png/search2.png" class="search" onclick="javascript:location.href='../searchtaichung2.html'"/></a>
			</div><!-- /header -->
	 
			<div data-role="main" class="ui-content">
				<h2><img src="jquerymobile/images/icons-png/back.png" onclick="history.back()" class="back"/>看屋行程</h2>
				<?php
					//得到資料庫資料$db_data及未看屋、已看未評、已看已評的$stage資料並顯示出來
					function show_order($db_data,$stage){
						for($i=0;$i<mysql_num_rows($db_data);$i++){ 
							$rs=mysql_fetch_row($db_data);
							//預約時間及3個icon用list-divider的方式呈現
							echo '<li data-role="list-divider" data-iconpos="right" data-inset="false">';
							
							//未看屋可送出修改、刪除預約請求，連接至預約的看屋資訊
							if ($stage == 0){
								//刪除icon
								echo "<a href ='del_request.php?OID=",$rs[0],"' rel='external'><img src='jquerymobile/images/icons-png/delete.png' class='small_icon'/></a>";
								//打電話icon
								$saler_data=mysql_query("SELECT * FROM `saler` WHERE saler_id = $rs[3]");
								$scno=mysql_fetch_array($saler_data);
								echo "<a href='tel:",$scno['CELL_PHONE'],"' rel='external'><img src='jquerymobile/images/icons-png/call.png' class='small_icon'/></a>";
								//修改icon
								echo "<a href='mod_request.php?OID=",$rs[0],"' rel='external'><img src='jquerymobile/images/icons-png/change.png' class='small_icon'/></a>";
								echo substr($rs[4],0,4),"年",(int)substr($rs[4],4,2),"月",(int)substr($rs[4],6),"日","  ",(int)substr($rs[5],0,2),"：",substr($rs[5],2,2),"</li>";
								//剩下的資訊用一個<li>呈現，並設定GET超連結的值
								echo "<li><a href='order_information.php?OID=",$rs[0],"&stage=",$stage,"'>";
							}
							//已看未評可直接刪除預約紀錄(尚未評論，是否真的要刪除)，連接至保留的看屋資訊
							else if ($stage == 1){
								//刪除icon(已看屋只剩刪除icon)，onclick時將OID傳到對話框
								echo "<a href='#deleteDialog1' data-rel='popup' class='delete1' data-position-to='window' data-transition='pop' onclick=getOID(",$rs[0],")><img src='jquerymobile/images/icons-png/delete.png' class='small_icon'/></a>";
								echo substr($rs[4],0,4),"年",(int)substr($rs[4],4,2),"月",(int)substr($rs[4],6),"日","  ",(int)substr($rs[5],0,2),"：",substr($rs[5],2,2),"</li>";
								//剩下的資訊用一個<li>呈現，並設定GET超連結的值
								echo "<li><a href='order_information.php?OID=",$rs[0],"&stage=",$stage,"'>";
							}
							//已看已評可直接刪除預約紀錄(是否真的要刪除)，連接至保留的看屋資訊
							else{
								//刪除icon(已看屋只剩刪除icon)
								echo "<a href='#deleteDialog2' data-rel='popup' class='delete2' data-position-to='window' data-transition='pop'><img src='jquerymobile/images/icons-png/delete.png' class='small_icon'/></a>";
								echo substr($rs[4],0,4),"年",(int)substr($rs[4],4,2),"月",(int)substr($rs[4],6),"日  ",(int)substr($rs[5],0,2),"：",substr($rs[5],2,2),"</li>";
								//剩下的資訊用一個<li>呈現，並設定GET超連結的值
								echo "<li><a href='order_information.php?OID=",$rs[0],"&stage=",$stage,"'>";
							}
							//剩下的預約資訊(圖片、名稱、總價、坪數及格局)
							$object_data=mysql_query("SELECT * FROM `object` WHERE id = '$rs[2]'");
							while($row = mysql_fetch_array($object_data)){
								echo "<img src='CY058_1_m.jpg' class='object-img_small'/>";
								echo "<h4>",$row[4],"</h4>";
								echo "<h5>總價",$row[42],"萬<br/>";
								echo "坪數",$row[65],"坪  格局",$row[30],"/",$row[31],"/",$row[32],"/",$row[33],"</h5>";
							}
							echo "</a></li>";
						}
					}
				?>
				<!--未看屋-->
				<div data-role="collapsible" data-theme="c" data-iconpos="right" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" class="collapsible_title" data-collapsed="false">
					<h2 style="text-align:center!important;font-weight:bold!important;">已預約</h2>
					<ul data-role="listview" data-theme="b">
						<?php
							//從資料庫query出已預約未看屋的預約紀錄資料，並傳送$stage=0表示為已預約
							$data=mysql_query("SELECT * FROM `my_order` WHERE NR = '$CustomerNR' AND visited = 0");
							show_order($data,0);
						?>
					</ul>
				</div>
				<!--已看未評-->
				<div data-role="collapsible" data-theme="d" data-iconpos="right" data-collapsed-icon="carat-d" data-expanded-icon="carat-u">
					<h2>已看屋   未評價</h2>
					<ul data-role="listview" data-theme="b">
						<?php
							//從資料庫query出已看屋未評價的預約紀錄資料，並傳送$stage=1表示為已看未評
							$data=mysql_query("SELECT * FROM `my_order` WHERE NR = '$CustomerNR' AND visited = 1 AND rate_saler IS NULL");
							show_order($data,1);
						?>
					</ul>
				</div>
				<!--已看已評-->
				<div data-role="collapsible" data-theme="e" data-iconpos="right" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" id="XDD">
						<h2>已看屋   已評價</h2>
						<ul data-role="listview" data-theme="b">
							<?php
								//從資料庫query出已看屋已評價的預約紀錄資料，並傳送$stage=2表示為已看已評
								$data=mysql_query("SELECT * FROM `my_order` WHERE NR = '$CustomerNR' AND visited = 1 AND rate_saler >0");
								show_order($data,2);
							?>
						</ul>
				</div>
				<!--已看未評預約紀錄刪除對話框-->
				<div data-role="popup" id="deleteDialog1" data-overlay-theme="a" data-theme="a" data-close-btn="right" style="max-width:400px;" class="ui-popup">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<div data-role="header" data-theme="a">
						<h1>刪除看屋紀錄</h1>
					</div>
					<div role="main" class="ui-content">
						<p>您尚未評論此次看屋，是否真的要刪除此紀錄？</p>
						<form method="post">
							<input value="" data-role="none" name="delete_oid" id="delete1" style="display:none;"/>
							<input value="刪除" name="delete-btn1" type="submit"/>
						</form>
					</div>
				</div>
				<!--已看已評預約紀錄刪除對話框-->
				<div data-role="popup" id="deleteDialog2" data-overlay-theme="b" data-theme="b" style="max-width:400px;" class="ui-popup">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<div data-role="header" data-theme="a">
						<h1>刪除看屋紀錄</h1>
					</div>
					<div role="main" class="ui-content">
						<p>您是否真的要刪除此紀錄？</p>
						<form method="post">
							<input value="" data-role="none" name="delete_oid" id="delete2" style="display:none;"/>
							<input value="刪除" name="delete-btn2" type="submit"/>
						</form>
					</div>
				</div>
			</div><!-- /content -->
			<!--下方的navbar-->
			<div data-role="footer" data-position="fixed">
				<div data-role="navbar">
					<ul>
						<li><a href="../map.php" rel="external"><img src="jquerymobile/images/icons-png/map.png" class="navbar-icon"/></a></li>
						<li><a href="bookmark.php"><img src="jquerymobile/images/icons-png/bookmark.png" class="navbar-icon"/></a></li>
						<li><a href="my_order.php" class="ui-btn-active"><img src="jquerymobile/images/icons-png/schedule.png" class="navbar-icon"/></a></li>
						<li><a href="new.php"><img src="jquerymobile/images/icons-png/reservation1.png" style="width:60px;height:70px;"/></a></li>
					</ul>
				</div>
			</div><!-- /footer -->
		</div>
	</body>
</html> 