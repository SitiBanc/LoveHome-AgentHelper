<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv "Content-Type" content="text/html;charset=utf8">
		<script	src="http://maps.googleapis.com/maps/api/js"></script>
		<link href="//cdnjs.cloudflare.com/ajax/libs/alertify.js/0.3.10/alertify.core.css" rel="stylesheet">  
		<link href="//cdnjs.cloudflare.com/ajax/libs/alertify.js/0.3.10/alertify.default.css" rel="stylesheet">  
		<script src="//cdnjs.cloudflare.com/ajax/libs/alertify.js/0.3.10/alertify.min.js"></script>  
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <link rel="stylesheet" href="jquery-mobile-theme-232118-0/themes/app.min.css" />
		<link rel="stylesheet" href="jquery-mobile-theme-232118-0/themes/jquery.mobile.icons.min.css" />
		<style type="text/css">
	
		#header1 {
	background-image: url(20160321/20160321/image/logo1.jpg);
	background-repeat: no-repeat;
	background-position: center center;
	width: auto;
  height : 60px;
 
}

        </style>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<title>Map</title>
		<?php	
		$link = mysqli_connect("140.120.55.53", "ic2111", "iclin2111","lovehome");
		mysqli_set_charset($link,"utf8");
		$data = mysqli_query($link,"select * from object");
		?>
		<!--房屋物件資料庫連結-->
		<script>
		
		
		<!--產生地圖-->
			function getLocation()
			  {
			  if (navigator.geolocation)
				{
				navigator.geolocation.getCurrentPosition(showPosition,showError);
				}
			  else{x.innerHTML="Geolocation is not supported by this browser.";}
			  }

			function showPosition(position)
			  {
			  lat=position.coords.latitude;
			  lon=position.coords.longitude;
			  latlon=new google.maps.LatLng(lat, lon)
			  mapholder=document.getElementById('mapholder')
			  mapholder.style.height='600px';
			  mapholder.style.width='100%';

			  var myOptions={
			  center:latlon,zoom:14,
			  mapTypeId:google.maps.MapTypeId.ROADMAP,
			  mapTypeControl:false,
			  disableDefaultUI:true,    
			  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
			  };
				function HomeControl(controlDiv, map) {
				  controlDiv.style.padding = '5px';
				  var controlUI = document.createElement('div');
				  controlUI.style.backgroundColor = 'yellow';
				  controlUI.style.border='1px solid';
				  controlUI.style.cursor = 'pointer';
				  controlUI.style.textAlign = 'center';
				  controlUI.title = 'Set map to your position';
				  controlDiv.appendChild(controlUI);
				  var controlText = document.createElement('div');
				  controlText.style.fontFamily='Arial,sans-serif';
				  controlText.style.fontSize='12px';
				  controlText.style.paddingLeft = '4px';
				  controlText.style.paddingRight = '4px';
				  controlText.innerHTML = '<img src= "20160321/20160321/image/backtoinitail.png" style="float:left;width:60px;height:60px;">'
				  controlUI.appendChild(controlText);
				  google.maps.event.addDomListener(controlUI, 'click', function() {
					map.setCenter(latlon)
					});
					<!--回到所在地功能鍵-->
				}
				
					var temp=new Array();
					var t1=new Array();
					var t2=new Array();
					
					var i=0;
					var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
					var marker=new google.maps.Marker({position:latlon, icon:'dot.png',map:map,title:"Hi!"});
					var homeControlDiv = document.createElement('div');
					var homeControl = new HomeControl(homeControlDiv, map);
					map.controls[google.maps.ControlPosition.TOP_RIGHT].push(homeControlDiv);
					<?php  for($i=0;$i<mysqli_num_rows($data);$i++)
					{     $rs=mysqli_fetch_row($data);
					?>
						
						t1[i]=new google.maps.LatLng(<?php echo $rs[227]?>, <?php echo $rs[226]?>)
						t2[i]=new String('http://140.120.55.53:8080/detail.php?value=<?php echo $rs[4]?>&img=<?php echo $rs[234]?>&sqr=<?php echo $rs[65]?>&claim=<?php echo urlencode($rs[40])?>&money=<?php echo $rs[42]?>&id=<?php echo $rs[1]?>&groundarea=<?php echo $rs[66]?>&partitionroom=<?php echo $rs[30]?>&partitionlivingroom=<?php echo $rs[31]?>&partitionrestroom=<?php echo $rs[32]?>&partitionchamber=<?php echo $rs[33]?>&floor=<?php echo $rs[72]?>&address=<?php echo $rs[107]?>&address_1=<?php echo $rs[109]?>&address_2=<?php echo $rs[110]?>&objectfunction=<?php echo $rs[24]?>&address_4=<?php echo $rs[112]?>')
						temp[i]=new google.maps.Marker({position:t1[i],url:t2[i],icon:'green1.png',map:map,title:"<?php echo $rs[109]?><?php echo $rs[110]?><?php echo $rs[112]?>"})
						var infowindow = new google.maps.InfoWindow({
							content:"<?php echo $rs[109]?><?php echo $rs[110]?><?php echo $rs[112]?>"
						});
			 
						google.maps.event.addListener(temp[i], 'click', function() {
							window.location.href=this.url;
						});		
						
					<?php   
					}
					?>
					<!--標示地圖物件-->
				}
			function showError(error)
			{
				switch(error.code) 
				{
					case error.PERMISSION_DENIED:
						  x.innerHTML="User denied the request for Geolocation."
						  break;
					case error.POSITION_UNAVAILABLE:
						  x.innerHTML="Location information is unavailable."
						  break;
					case error.TIMEOUT:
						  x.innerHTML="The request to get user location timed out."
						  break;
					case error.UNKNOWN_ERROR:
						  x.innerHTML="An unknown error occurred."
						  break;
				}
			}
		</script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"> </script>
	</head>
	<body onload="getLocation()">
		<div data-role="header" themes="b" style="background-color:#127765;" id="header1">
		<img src= "20160321/20160321/image/search2.png" onclick="self.location.href='searchtaichung2.html'" style="float:right;width:50px;height:50px;margin-top:4px;" >
		<!--價格區分testmap2.php-->
		<script>
			function myFunction() {
				var message = "<h3><font color='black'>請輸入價格(萬元)：</font></h3>";
				alertify.prompt(message, function (e,person) {  
					if (e) {  
					window.open("http://140.120.55.53:8080/testmap2.php?budget="+person,'_self' );
					} 
					else
					{
					alertfy.alert('請輸入金額');
					}
				}, "0");  
			}
		</script>
		<!--物件列表map1.php-->
        <script>
			function glo() {
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(lalo);
					} else { 
					x.innerHTML = "Geolocation is not supported by this browser.";
					}
				}
			function lalo(position) {
				var lat=position.coords.latitude;
				var lon=position.coords.longitude;
				
				window.open("http://140.120.55.53:8080/map1.php?lat="+lat+"&lon="+lon,'_self' );
				}
				<!--實價登錄geocoding.php-->
			function glo2() {
			
				
				window.open("http://140.120.55.53:8080/geocoding.php",'_self' );
				}

		</script>
		</div>

		
		<center><div id="mapholder"  height='100%'></div></center>
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar">
				<ul>
					<li><a href="javascript:this.glo()"><img src="20160321/20160321/image/object.png" style="width:70px;height:70px;"/></a></li>
					<li><a href="javascript:this.glo2()"><img src="20160321/20160321/image/real1.png" style="width:70px;height:70px;"/></a></li>
					<li><a href="http://140.120.55.53:8080/groupA/bookmark.php"rel="external"> <img src="20160321/20160321/image/house1.png" style="width:70px;height:70px;"/></a></li>
					<li><a href="javascript: myFunction()"><img src="20160321/20160321/image/price1.png" style="width:70px;height:70px;"/></a></li>
				</ul>
			</div>
		</div><!-- /footer -->
	</body>
</html>
