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
			/*$('#submit_rating').click(function(){
				var saler_ratings = $('#rating_form:input[name=saler_rating]').val();
				var object_ratings = $('#rating_form:input[name=object_rating]').val();
			if (saler_ratings == "" || object_ratings == ""){
				alert("評價不可為0");
				return false;
			}else
				$('#rating_form').submit();
			});*/
			//檢查form的值，確認無誤後submit()
			function check_form(){
				if (document.forms["rating_form"]["object_rating"].value == "" || document.forms["rating_form"]["saler_rating"].value == ""){
					alert("評價不可為0");
				}else
					alert('評論已送出！');
					document.rating_form.submit();
			}
		</script>
		<title>預約的看屋資訊</title>
	</head>
	<body>
		<!-- 連結資料庫 -->
		<?php
			error_reporting(E_ALL ^ E_DEPRECATED);
			$conn = mysql_connect("140.120.55.53", "ic2111", "iclin2111") or die("無法連接伺服器!");
			//設定編碼以免亂碼
			mysql_select_db("lovehome") or die("無法連接資料庫!");
			mysql_query("set names utf8");
			mysql_query("SET CHARACTER SET 'UTF8';");
			mysql_query('SET CHARACTER_SET_CLIENT=UTF8;');
			mysql_query('SET CHARACTER_SET_RESULTS=UTF8;');
			//GET預約紀錄ID及$stage變數來判斷是否要顯示評論欄位
			$OID = $_GET["OID"];
			$stage = $_GET["stage"];
		?>
		<?php
			//按下"送出評價"按鈕跳轉到
			/*if(isset($_POST['submit_btn']))
				header("Refresh:0; url=order_rating.php");*/
		?>
		<div data-role="page">
			<div data-role="header" style="background-color:#127765" class="title">
				<img src="jquerymobile/images/icons-png/search2.png" style="float:right;width:50px;height:50px;margin-top:4px;"/>
			</div><!-- /header -->
	 
			<div data-role="main" class="ui-content">
				<h2>
					<img src="jquerymobile/images/icons-png/back.png" class="back" onclick="history.back()"/>
					<?php
						//檢查$stage的值來決定要顯示的文字
						if ($stage == 0){
							echo "預約的看屋資訊";
						}
						else {
							echo "保留的已看屋資訊";
						}
					?>
				</h2>
				<?php
					//讀取預約資訊
					$order_data=mysql_query("SELECT * FROM `my_order` WHERE OID = '$OID'");
					for($i=0;$i<mysql_num_rows($order_data);$i++){
						$order=mysql_fetch_array($order_data);
						$object_data=mysql_query("SELECT * FROM `object` WHERE ID = '$order[2]'");
						$object=mysql_fetch_array($object_data);
						$saler_data=mysql_query("SELECT * FROM `saler` WHERE saler_id = '$order[3]'");
						$saler=mysql_fetch_array($saler_data);
						echo "<h2 class='object_title'>",$object['name'],"(",$order['ID'],")</h2>";
						echo "<p><img src='jquerymobile/images/icons-png/facebook-user.jpeg' class='saler-pic'/>";
						echo "預約時間：",substr($order[4],0,4),"/",substr($order[4],4,2),"/",substr($order[4],6),"  ",substr($order[5],0,2),"：",substr($order[5],2,2),"<br/>";
						echo "負責業務：",$saler['NAME'],"<br/>";
						echo "聯絡電話：",$saler['CELL_PHONE'],"<br/>";
						echo "預約地點：",$order['visit_place'],"</p>";
					}
				?>
				<?php
					//檢查從資料庫讀出來的房屋資訊欄位，若為空值則顯示為"---"
					function checkstr($str){
						if ($str == '')
							echo '---';
						else
							echo $str;
					}
				?>
				<!--由於圖片還不完全，先統一使用這個圖片來DEMO-->
				<div>
					<img src="CY058_1_m.jpg" class="object-img_large"/>
				</div>
				<!--房屋詳細資訊table-->
				<table data-role="table" data-mode="columntoggle" class="ui-responsive" ="basic_info">
					<thead>
						<tr>
							<th colspan="2">基本資料</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="tbtitle">地址</td>
							<td><?php echo $object['address_1'].$object['address_2'].$object['address']; ?></td>
						</tr>
						<tr>
							<td class="tbtitle">土地登記</td>
							<td><?php echo $object['ground_area'],"坪";?></td>
						</tr>
						<tr>
							<td class="tbtitle">建物登記</td>
							<td><?php echo $object['total_area'],"坪";?></td>
						</tr>
						<tr>
							<td class="tbtitle">主建物坪數</td>
							<td><?php echo $object['main_area'],"坪";?></td>
						</tr>
						<tr>
							<td class="tbtitle">附屬建物坪數</td>
							<td><?php echo $object['accessory_area'],"坪";?></td>
						</tr>
						<tr>
							<td class="tbtitle">格局</td>
							<td><?php echo $object['partition_room'],"房/",$object['partition_living_room'],"廳/",$object['partition_restroom'],"/衛",$object['partition_chamber'],"/室"; ?></td>
						</tr>
						<tr>
							<td class="tbtitle">加蓋格局</td>
							<td><?php echo $object['add_partition_room'],"房/",$object['add_partition_living_room'],"廳/",$object['add_partition_restroom'],"/衛",$object['add_partition_chamber'],"/室"; ?></td>
						</tr>
						<tr>
							<td class="tbtitle">建物結構</td>
							<td><?php checkstr($object['right_structure']); ?></td>
						</tr>
						<tr>
							<td class="tbtitle">總樓高/所在樓層</td>
							<td><?php echo $object['floor_ground'],"/",$object['floor']; ?></td>
						</tr>
						<tr>
							<td class="tbtitle">車位資料</td>
							<td>
								<?php
									if ($object['garage_nr'] != "")
										echo $object['garage_nr'],"位/";
									if ($object['garage_method'] != "")
										echo $object['garage_method'];
									if ($object['garage_info'] != "")
										echo "/",$object['garage_info'];
								?>
							</td>
						</tr>
						<tr>
							<td class="tbtitle">土地分區</td>
							<td><?php checkstr($object['land_section']); ?></td>
						</tr>
						<tr>
							<td class="tbtitle">總價</td>
							<td><?php echo $object['post_price'],"萬";?></td>
						</tr>
						<tr>
							<td class="tbtitle">現況</td>
							<td><?php checkstr($object['use_status']); ?></td>
						</tr>
						<tr>
							<td class="tbtitle">管理方式</td>
							<td><?php checkstr($object['is_management']); ?></td>
						</tr>
						<tr>
							<td class="tbtitle">管理費用</td>
							<td><?php checkstr($object['management_fee']); ?></td>
						</tr>
						<tr>
							<td class="tbtitle">單層梯數/戶數</td>
							<td>
								<?php
									checkstr($object['elevator_nr']);
									echo "/",checkstr($object['house_nr']);
								?>
							</td>
						</tr>
						<tr>
							<td class="tbtitle">朝向</td>
							<td>
								<?php
									if ($object['direction'] != ''){
										echo "社區",$object['direction'];
										if ($object['direction2'] != '無')
											echo "/陽台",$object['direction2'];
										if ($object['direction3'] != '' )
											echo "/入門",$object['direction3'];
									}else
										echo "---";
								?>
							</td>
						</tr>
						<tr>
							<td class="tbtitle">臨路路寬</td>
							<td>
								<?php
									if ($object['road_m'] != '')
										echo $object['road_m'],"米";
									else
										echo "---";
								?>
							</td>
						</tr>
						<tr>
							<td class="tbtitle">建築完成日</td>
							<td>
								<?php
									$year = (int) substr($object['date_completed'],0,3);
									$month = (int) substr($object['date_completed'],3,2);
									echo $year,"年",$month,"月";
								?>
							</td>
						</tr>
					</tbody>
				</table>
				<table data-role="table" data-mode="columntoggle" class="ui-responsive" id="environment_info">
					<thead>
						<tr>
							<th colspan="2">環境介紹</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="tbtitle">鄰近國小</td>
							<td><?php checkstr($object['primary_school']); ?></td>
						</tr>
						<tr>
							<td class="tbtitle">鄰近國中</td>
							<td><?php checkstr($object['high_school']); ?></td>
						</tr>
						<tr>
							<td class="tbtitle">鄰近市(賣)場</td>
							<td><?php checkstr($object['life_market']); ?></td>
						</tr>
						<tr>
							<td class="tbtitle">鄰近捷運站</td>
							<td><?php checkstr($object['subway']); ?></td>
						</tr>
						<tr>
							<td class="tbtitle">鄰近綠地</td>
							<td><?php checkstr($object['life_garden']); ?></td>
						</tr>
						<tr>
							<td class="tbtitle">無障礙空間</td>
							<td><?php checkstr($object['partition_disabled']); ?></td>
						</tr>
					</tbody>
				</table>
				<table data-role="table" data-mode="columntoggle" class="ui-responsive" id="features">
					<thead>
						<tr>
							<th colspan="2">物件特色</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $object['claim_points']; ?></td>
						</tr>
					</tbody>
				</table>
				
				<?php
					//若$stage為1(已看未評)則顯示評論欄位
					if ($stage == 1){
						echo '<h3 class="ui-bar ui-bar-a">評論</h3>';
						echo '<form name="rating_form" method="post" action="order_rating.php">
						<span class="rating">
							<input data-role="none" id="rating5" type="radio" name="object_rating" value="5">
							<label for="rating5" style="margin-right:20%;"></label>
							<input data-role="none" id="rating4" type="radio" name="object_rating" value="4">
							<label for="rating4"></label>
							<input data-role="none" id="rating3" type="radio" name="object_rating" value="3">
							<label for="rating3"></label>
							<input data-role="none" id="rating2" type="radio" name="object_rating" value="2">
							<label for="rating2"></label>
							<input data-role="none" id="rating1" type="radio" name="object_rating" value="1">
							<label for="rating1"></label>
						</span>
						<p>房屋評價:</p>
						<span class="rating">
							<input data-role="none" id="ratings5" type="radio" name="saler_rating" value="5">
							<label data-role="none" for="ratings5" style="margin-right:20%;"></label>
							<input data-role="none" id="ratings4" type="radio" name="saler_rating" value="4">
							<label data-role="none" for="ratings4"></label>
							<input data-role="none" id="ratings3" type="radio" name="saler_rating" value="3">
							<label data-role="none" for="ratings3"></label>
							<input data-role="none" id="ratings2" type="radio" name="saler_rating" value="2">
							<label data-role="none" for="ratings2"></label>
							<input data-role="none" id="ratings1" type="radio" name="saler_rating" value="1">
							<label data-role="none" for="ratings1"></label>
						</span>
						<p>業務評價:</p>
						<br/>
						<label for="comment">其他建議:</label>
						<textarea name="comment" id="comment"></textarea>
						<input id="submit_rating" name="submit_btn" type="image" src="jquerymobile/images/icons-png/submit_rating.png" style="width:100%;" onclick="check_form()" data-position="fixed"/>
						<input type="text" name="OID" value="',$OID,'" style="display:none;"/>
					</form>';
					}
				?>
			</div><!-- /content -->
			
		</div>
	</body>
</html> 