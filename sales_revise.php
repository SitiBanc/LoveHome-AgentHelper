<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Color theme for statusbar -->
    <meta name="theme-color" content="#2196f3">
    <!-- Your app title -->
    <title>修改預約</title>
    <!-- Path to Framework7 Library CSS, Material Theme -->
    <link rel="stylesheet" href="/Framework7/dist/css/framework7.material.css">
    <!-- Path to Framework7 color related styles, Material Theme -->
    <link rel="stylesheet" href="/Framework7/dist/css/framework7.material.colors.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="/Framework7/dist/css/my-app.css">
  </head>
  <body>
	<!-- 連結資料庫 -->
	<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		$conn = mysql_connect("140.120.55.53", "ic2111", "iclin2111") or die("無法連接伺服器!");
		mysql_select_db("chyi1") or die("無法連接客戶資料庫!");

		mysql_query("set names utf8");
		mysql_query("SET CHARACTER SET 'UTF8';");
		mysql_query('SET CHARACTER_SET_CLIENT=UTF8;');
		mysql_query('SET CHARACTER_SET_RESULTS=UTF8;');
		//設定編碼以免亂碼
		$CustomerNR = "8";
	?>
    <!-- Views -->
    <div class="views">
      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Pages container, because we use fixed navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-fixed toolbar-fixed theme-teal">
          <!-- Page, "data-page" contains page name -->
          <div data-page="index" class="page theme-teal">
 
            <!-- Top Navbar. In Material theme it should be inside of the page-->
            <div class="navbar theme-teal">
              <div class="navbar-inner">
                <div class="center">業務修改預約</div>
              </div>
            </div>
 
            <!-- Bottom Toolbar. In Material theme it should be inside of the page-->
            <div class="toolbar tabbar toolbar-bottom theme-teal">
              <div class="toolbar-inner">
                <!-- Toolbar links -->
                <a href="#" class="tab-link theme-teal">
					<i class="icon icon-bookmark"></i>
					<span class="tabbar-label">我的書籤</span>
				</a>
                <a href="#" class="tab-link active theme-teal">
					<i class="icon icon-event"></i>
					<span class="tabbar-label">我的預約</span>
				</a>
				<a href="#" class="tab-link theme-teal">
					<i class="icon icon-home"></i>
					<span class="tabbar-label">我的看房</span>
				</a>
              </div>
            </div>
 
            <!-- Scrollable page content -->
            <div class="page-content">
              <p>
				<?php
					$str1 = "update  order set Customer NR =  '$_POST[NR]' where OID = '$_POST[OID]'";
					$str2 = "update  order set Object ID =  '$_POST[ID]' where OID =  '$_POST[OID]'";
					$str3 = "update  order set Saler ID =  '$_POST[saler_id]' where OID = '$_POST[OID]'";
					$str4 = "update  order set Visit Date =  '$_POST[visit_date]' where OId =  '$_POST[OId]'";
       
				
					mysql_query($str1);
					mysql_query($str2);
					mysql_query($str3);
					mysql_query($str4);
				?>
			  </p>
              <!-- Link to another page -->
              <a href="test.php" rel="external" class="item-link item-content">Link Test</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="/Framework7/dist/js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="/Framework7/dist/js/my-app.js"></script>
  </body>
</html> 