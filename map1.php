<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv "Content-Type" content="text/html;charset=utf8">
		<script	src="http://maps.googleapis.com/maps/api/js">
		</script>
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
	<body>
		<?php	$link = mysqli_connect("140.120.55.53", "ic2111", "iclin2111","lovehome");
		mysqli_set_charset($link,"utf8");
		$data = mysqli_query($link,"select *,POW((latitude-'$_GET[lat]'),2)+POW((longitude-'$_GET[lon]'),2) AS dis from object where POW((latitude-'$_GET[lat]'),2)+POW((longitude-'$_GET[lon]'),2)<0.001 order by POW((latitude-'$_GET[lat]'),2)+POW((longitude-'$_GET[lon]'),2) ");
		?>
		<div data-role="header" themes="b" style="background-color:#127765" id="header1">
		<img src= "20160321/20160321/image/search2.png" onclick="self.location.href='searchtaichung2.html'" style="float:right;width:50px;height:50px;margin-top:4px;" >
        </div>
		<div style="margin-top:-10px;height:55px;">
       
        <img src= "20160321/20160321/image/back.png" onclick="self.location.href='map.php'" style="float:left;width:70px;height:50px;margin-top:17px;" >
		<img src= "20160321/20160321/image/listH.png"  style="float:left;width:100px;height:50px;margin-top:17px;margin-left:17px;" >
        <br></br> <br></br>
		</div>
			
		<?php  for($i=0;$i<mysqli_num_rows($data);$i++)
		{     $rs=mysqli_fetch_row($data);
		?>
			
			<div style="margin-left:-38px;" onclick=" location.href= 'http://140.120.55.53:8080/detail.php?value=<?php echo $rs[4]?>&img=<?php echo $rs[234]?>&sqr=<?php echo $rs[59]?>&claim=<?php echo urlencode($rs[40])?>&money=<?php echo $rs[42]?>&id=<?php echo $rs[1]?>&groundarea=<?php echo $rs[66]?>&partitionroom=<?php echo $rs[30]?>&partitionlivingroom=<?php echo $rs[31]?>&partitionrestroom=<?php echo $rs[32]?>&partitionchamber=<?php echo $rs[33]?>&floor=<?php echo $rs[72]?>&address=<?php echo $rs[107]?>&address_1=<?php echo $rs[109]?>&address_2=<?php echo $rs[110]?>&objectfunction=<?php echo $rs[24]?>'">
				<ul style="list-style-type:none;">
					<div style="background-color:white;color:black;">
					<div style="background-color:#127765"><li><h2 style="color:white"><?php echo $rs[4]?></h2></li></div>
					
						<div style="float:left;width:35%;margin-left:5px;margin-top:-15px;">
						<li><img src="<?php echo $rs[234]?>" width="100" height="100"></li>
						</div>
						<div style="width:100%;">
						<li>坪數:<?php echo $rs[65]?>坪</li>
						<li>售價:<?php echo $rs[42]?>萬  格局:<?php echo $rs[30]?>/<?php echo $rs[31]?>/<?php echo $rs[32]?>/<?php echo $rs[33]?></li>
						<li>地址:<?php echo $rs[107]?></li>
						</div>
						<div style="clear:both;"></div>
						</div>
					
				<ul>
			</div>
		<?php   
		}
		?>
		


		
		</div>
	</body>
	</head>
</html>