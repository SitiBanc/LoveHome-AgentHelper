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
	<script type="text/javascript">
		var strUrl = location.search;
		var getPara, ParaVal;
		var aryPara = [];

		if (strUrl.indexOf("?") != -1) {
			var getSearch = strUrl.split("?");
			getPara = getSearch[1].split("&");
			for (i = 0; i < getPara.length; i++) {
			  ParaVal = getPara[i].split("=");
			  aryPara.push(ParaVal[0]);
			  aryPara[ParaVal[0]] = ParaVal[1];
			}
		}
	</script>
	<div data-role="page">
	<div data-role="header" themes="b" style="background-color:#127765;" id="header1">
		<img src= "20160321/20160321/image/search2.png" onclick="self.location.href='searchtaichung2.html'" style="float:right;width:50px;height:50px;margin-top:4px;" >
		<div style="margin-top:68px;height:55px;">
		<img src= "20160321/20160321/image/back.png" onclick="history.back()" style="float:left;width:70px;height:50px;margin-left:8px;" >
		</div>
	</div>

		<div>
		<button onclick="self.location.href=''"style="width:37px;height:37px;float:right;margin-top:-4px;margin-right:5px;background-image:url(20160321/20160321/image/favorite1.png);border=5px;border-color:white;"></button>
		<button onclick="self.location.href=''"style="width:37px;height:37px;float:right;margin-top:-4px;margin-right:5px;background-image:url(20160321/20160321/image/call1.png);border=5px;border-color:white;"></button>
			<h2 style="color:#127765;margin-top:14px;margin-left:90px;"><?php echo  $_GET['value']?></h2>
			
		</div>
		<div style="margin-top:17px;width:100%">
			<center><img src="<?php echo  $_GET['img']?>" width="375px" height="300"></center>
			
		
		<table style=width:100% class=MsoTable15Grid5DarkAccent6 border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid white .5pt;
 mso-border-themecolor:background1;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:1.5pt double #A5A5A5;mso-border-insideh-themecolor:accent3;
 mso-border-insidev:1.5pt double #A5A5A5;mso-border-insidev-themecolor:accent3'>
 <tr style='mso-yfti-irow:-1;mso-yfti-firstrow:yes;mso-yfti-lastfirstrow:yes'>
  <td width=208 colspan=2 valign=top style='width:100%;border:solid white 1.0pt;
  mso-border-themecolor:background1;border-bottom:solid #A5A5A5 1.0pt;
  mso-border-bottom-themecolor:accent3;mso-border-alt:solid white .5pt;
  mso-border-themecolor:background1;mso-border-bottom-alt:solid #A5A5A5 .5pt;
  mso-border-bottom-themecolor:accent3;background:#117664;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='mso-yfti-cnfc:5'><b><span style='font-size:15.0pt;
  mso-bidi-font-size:11.0pt;font-family:"微軟正黑體 Light","sans-serif";color:white;
  mso-themecolor:background1'><span style='mso-spacerun:yes'>&nbsp;</span>物件編號  <?php	echo  $_GET['id']?></span></b><b><span
  lang=EN-US style='font-family:"微軟正黑體 Light","sans-serif";color:white;
  mso-themecolor:background1'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:0'>
  <td width=66 valign=top style='width:49.4pt;border-top:none;border-left:solid white 1.0pt;
  mso-border-left-themecolor:background1;border-bottom:solid #A5A5A5 1.0pt;
  mso-border-bottom-themecolor:accent3;border-right:solid #A5A5A5 1.0pt;
  mso-border-right-themecolor:accent3;mso-border-top-alt:solid #A5A5A5 .5pt;
  mso-border-top-themecolor:accent3;mso-border-alt:solid #A5A5A5 .5pt;
  mso-border-themecolor:accent3;mso-border-left-alt:solid white .5pt;
  mso-border-left-themecolor:background1;background:#707070;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-yfti-cnfc:68'><b><span
  style='font-size:15.0pt;mso-bidi-font-size:11.0pt;font-family:"微軟正黑體 Light","sans-serif";
  color:white;mso-themecolor:background1'>總<span lang=EN-US><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span>價<span lang=EN-US><o:p></o:p></span></span></b></p>
  </td>
  <td width=142 valign=top style='width:106.3pt;border-top:none;border-left:
  none;border-bottom:solid #A5A5A5 1.0pt;mso-border-bottom-themecolor:accent3;
  border-right:solid white 1.0pt;mso-border-right-themecolor:background1;
  mso-border-top-alt:solid #A5A5A5 .5pt;mso-border-top-themecolor:accent3;
  mso-border-left-alt:solid #A5A5A5 .5pt;mso-border-left-themecolor:accent3;
  mso-border-alt:solid #A5A5A5 .5pt;mso-border-themecolor:accent3;mso-border-right-alt:
  solid white .5pt;mso-border-right-themecolor:background1;background:#FCF6EA;
  padding:0cm 5.4pt 0cm 5.4pt'>
 <center><h2 style="color:red;"><?php	echo  $_GET['money']?>萬</h1></center>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=66 valign=top style='width:49.4pt;border-top:none;border-left:solid white 1.0pt;
  mso-border-left-themecolor:background1;border-bottom:solid #A5A5A5 1.0pt;
  mso-border-bottom-themecolor:accent3;border-right:solid #A5A5A5 1.0pt;
  mso-border-right-themecolor:accent3;mso-border-top-alt:solid #A5A5A5 .5pt;
  mso-border-top-themecolor:accent3;mso-border-alt:solid #A5A5A5 .5pt;
  mso-border-themecolor:accent3;mso-border-left-alt:solid white .5pt;
  mso-border-left-themecolor:background1;background:#707070;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-yfti-cnfc:4'><b><span
  style='font-size:15.0pt;mso-bidi-font-size:11.0pt;font-family:"微軟正黑體 Light","sans-serif";
  color:white;mso-themecolor:background1'>建物登記<span lang=EN-US><o:p></o:p></span></span></b></p>
  </td>
  <td width=142 valign=top style='width:106.3pt;border-top:none;border-left:
  none;border-bottom:solid #A5A5A5 1.0pt;mso-border-bottom-themecolor:accent3;
  border-right:solid white 1.0pt;mso-border-right-themecolor:background1;
  mso-border-top-alt:solid #A5A5A5 .5pt;mso-border-top-themecolor:accent3;
  mso-border-left-alt:solid #A5A5A5 .5pt;mso-border-left-themecolor:accent3;
  mso-border-alt:solid #A5A5A5 .5pt;mso-border-themecolor:accent3;mso-border-right-alt:
  solid white .5pt;mso-border-right-themecolor:background1;background:#FCF6EA;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <center><h3 style="color:black"><?php	echo  $_GET['sqr']?>坪</h3></center>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=66 valign=top style='width:49.4pt;border-top:none;border-left:solid white 1.0pt;
  mso-border-left-themecolor:background1;border-bottom:solid #A5A5A5 1.0pt;
  mso-border-bottom-themecolor:accent3;border-right:solid #A5A5A5 1.0pt;
  mso-border-right-themecolor:accent3;mso-border-top-alt:solid #A5A5A5 .5pt;
  mso-border-top-themecolor:accent3;mso-border-alt:solid #A5A5A5 .5pt;
  mso-border-themecolor:accent3;mso-border-left-alt:solid white .5pt;
  mso-border-left-themecolor:background1;background:#707070;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-yfti-cnfc:68'><b><span
  style='font-size:15.0pt;mso-bidi-font-size:11.0pt;font-family:"微軟正黑體 Light","sans-serif";
  color:white;mso-themecolor:background1'>土地登記<span lang=EN-US><o:p></o:p></span></span></b></p>
  </td>
  <td width=142 valign=top style='width:106.3pt;border-top:none;border-left:
  none;border-bottom:solid #A5A5A5 1.0pt;mso-border-bottom-themecolor:accent3;
  border-right:solid white 1.0pt;mso-border-right-themecolor:background1;
  mso-border-top-alt:solid #A5A5A5 .5pt;mso-border-top-themecolor:accent3;
  mso-border-left-alt:solid #A5A5A5 .5pt;mso-border-left-themecolor:accent3;
  mso-border-alt:solid #A5A5A5 .5pt;mso-border-themecolor:accent3;mso-border-right-alt:
  solid white .5pt;mso-border-right-themecolor:background1;background:#FCF6EA;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <center><h3 style="color:black"><?php	echo  $_GET['groundarea']?>坪</h3></center>
  </td>
 </tr>
 
 <tr style='mso-yfti-irow:3'>
  <td width=66 valign=top style='width:49.4pt;border-top:none;border-left:solid white 1.0pt;
  mso-border-left-themecolor:background1;border-bottom:solid #A5A5A5 1.0pt;
  mso-border-bottom-themecolor:accent3;border-right:solid #A5A5A5 1.0pt;
  mso-border-right-themecolor:accent3;mso-border-top-alt:solid #A5A5A5 .5pt;
  mso-border-top-themecolor:accent3;mso-border-alt:solid #A5A5A5 .5pt;
  mso-border-themecolor:accent3;mso-border-left-alt:solid white .5pt;
  mso-border-left-themecolor:background1;background:#707070;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-yfti-cnfc:68'><b><span
  style='font-size:15.0pt;mso-bidi-font-size:11.0pt;font-family:"微軟正黑體 Light","sans-serif";
  color:white;mso-themecolor:background1'>用<span lang=EN-US><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span>途<span lang=EN-US><o:p></o:p></span></span></b></p>
  </td>
  <td width=142 valign=top style='width:106.3pt;border-top:none;border-left:
  none;border-bottom:solid #A5A5A5 1.0pt;mso-border-bottom-themecolor:accent3;
  border-right:solid white 1.0pt;mso-border-right-themecolor:background1;
  mso-border-top-alt:solid #A5A5A5 .5pt;mso-border-top-themecolor:accent3;
  mso-border-left-alt:solid #A5A5A5 .5pt;mso-border-left-themecolor:accent3;
  mso-border-alt:solid #A5A5A5 .5pt;mso-border-themecolor:accent3;mso-border-right-alt:
  solid white .5pt;mso-border-right-themecolor:background1;background:#FCF6EA;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <center><h3 style="color:black"><?php	echo  $_GET['objectfunction']?></h3></center>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=66 valign=top style='width:49.4pt;border-top:none;border-left:solid white 1.0pt;
  mso-border-left-themecolor:background1;border-bottom:solid #A5A5A5 1.0pt;
  mso-border-bottom-themecolor:accent3;border-right:solid #A5A5A5 1.0pt;
  mso-border-right-themecolor:accent3;mso-border-top-alt:solid #A5A5A5 .5pt;
  mso-border-top-themecolor:accent3;mso-border-alt:solid #A5A5A5 .5pt;
  mso-border-themecolor:accent3;mso-border-left-alt:solid white .5pt;
  mso-border-left-themecolor:background1;background:#707070;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-yfti-cnfc:4'><b><span
  style='font-size:15.0pt;mso-bidi-font-size:11.0pt;font-family:"微軟正黑體 Light","sans-serif";
  color:white;mso-themecolor:background1'>格<span lang=EN-US><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span>局<span lang=EN-US><o:p></o:p></span></span></b></p>
  </td>
  <td width=142 valign=top style='width:106.3pt;border-top:none;border-left:
  none;border-bottom:solid #A5A5A5 1.0pt;mso-border-bottom-themecolor:accent3;
  border-right:solid white 1.0pt;mso-border-right-themecolor:background1;
  mso-border-top-alt:solid #A5A5A5 .5pt;mso-border-top-themecolor:accent3;
  mso-border-left-alt:solid #A5A5A5 .5pt;mso-border-left-themecolor:accent3;
  mso-border-alt:solid #A5A5A5 .5pt;mso-border-themecolor:accent3;mso-border-right-alt:
  solid white .5pt;mso-border-right-themecolor:background1;background:#FCF6EA;
  padding:0cm 5.4pt 0cm 5.4pt'>
 <center><h3 style="color:black"><?php	echo  $_GET['partitionroom']?>/<?php	echo  $_GET['partitionlivingroom']?>/<?php	echo  $_GET['partitionrestroom']?>/<?php	echo  $_GET['partitionchamber']?></h3></center>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=66 valign=top style='width:49.4pt;border-top:none;border-left:solid white 1.0pt;
  mso-border-left-themecolor:background1;border-bottom:solid #A5A5A5 1.0pt;
  mso-border-bottom-themecolor:accent3;border-right:solid #A5A5A5 1.0pt;
  mso-border-right-themecolor:accent3;mso-border-top-alt:solid #A5A5A5 .5pt;
  mso-border-top-themecolor:accent3;mso-border-alt:solid #A5A5A5 .5pt;
  mso-border-themecolor:accent3;mso-border-left-alt:solid white .5pt;
  mso-border-left-themecolor:background1;background:#707070;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-yfti-cnfc:68'><b><span
  style='font-size:15.0pt;mso-bidi-font-size:11.0pt;font-family:"微軟正黑體 Light","sans-serif";
  color:white;mso-themecolor:background1'>樓<span lang=EN-US><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span>層<span lang=EN-US><o:p></o:p></span></span></b></p>
  </td>
  <td width=142 valign=top style='width:106.3pt;border-top:none;border-left:
  none;border-bottom:solid #A5A5A5 1.0pt;mso-border-bottom-themecolor:accent3;
  border-right:solid white 1.0pt;mso-border-right-themecolor:background1;
  mso-border-top-alt:solid #A5A5A5 .5pt;mso-border-top-themecolor:accent3;
  mso-border-left-alt:solid #A5A5A5 .5pt;mso-border-left-themecolor:accent3;
  mso-border-alt:solid #A5A5A5 .5pt;mso-border-themecolor:accent3;mso-border-right-alt:
  solid white .5pt;mso-border-right-themecolor:background1;background:#FCF6EA;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <center><h3 style="color:black"><?php	echo  $_GET['floor']?></h3></center>
  
  </td>
 </tr>
 
 <tr style='mso-yfti-irow:7'>
  <td width=66 valign=top style='width:49.4pt;border-top:none;border-left:solid white 1.0pt;
  mso-border-left-themecolor:background1;border-bottom:solid #A5A5A5 1.0pt;
  mso-border-bottom-themecolor:accent3;border-right:solid #A5A5A5 1.0pt;
  mso-border-right-themecolor:accent3;mso-border-top-alt:solid #A5A5A5 .5pt;
  mso-border-top-themecolor:accent3;mso-border-alt:solid #A5A5A5 .5pt;
  mso-border-themecolor:accent3;mso-border-left-alt:solid white .5pt;
  mso-border-left-themecolor:background1;background:#707070;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-yfti-cnfc:68'><b><span
  style='font-size:15.0pt;mso-bidi-font-size:11.0pt;font-family:"微軟正黑體 Light","sans-serif";
  color:white;mso-themecolor:background1'>地<span lang=EN-US><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span>址<span lang=EN-US><o:p></o:p></span></span></b></p>
  </td>
  <td width=142 valign=top style='width:106.3pt;border-top:none;border-left:
  none;border-bottom:solid #A5A5A5 1.0pt;mso-border-bottom-themecolor:accent3;
  border-right:solid white 1.0pt;mso-border-right-themecolor:background1;
  mso-border-top-alt:solid #A5A5A5 .5pt;mso-border-top-themecolor:accent3;
  mso-border-left-alt:solid #A5A5A5 .5pt;mso-border-left-themecolor:accent3;
  mso-border-alt:solid #A5A5A5 .5pt;mso-border-themecolor:accent3;mso-border-right-alt:
  solid white .5pt;mso-border-right-themecolor:background1;background:#FCF6EA;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <center><h3 style="color:black"><?php	echo  $_GET['address_1']?><?php	echo  $_GET['address_2']?><?php	echo  $_GET['address']?></h3></center>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=208 colspan=2 valign=top style='width:155.7pt;border-top:none;
  border-left:solid white 1.0pt;mso-border-left-themecolor:background1;
  border-bottom:solid #A5A5A5 1.0pt;mso-border-bottom-themecolor:accent3;
  border-right:solid white 1.0pt;mso-border-right-themecolor:background1;
  mso-border-top-alt:solid #A5A5A5 .5pt;mso-border-top-themecolor:accent3;
  mso-border-top-alt:#A5A5A5;mso-border-top-themecolor:accent3;mso-border-left-alt:
  white;mso-border-left-themecolor:background1;mso-border-bottom-alt:#A5A5A5;
  mso-border-bottom-themecolor:accent3;mso-border-right-alt:white;mso-border-right-themecolor:
  background1;mso-border-style-alt:solid;mso-border-width-alt:.5pt;background:
  #127765;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-yfti-cnfc:4'><b><span
  style='font-size:15.0pt;mso-bidi-font-size:11.0pt;font-family:"微軟正黑體 Light","sans-serif";
  color:white;mso-themecolor:background1'>特 <span
  style='mso-spacerun:yes'>&nbsp;</span><span
  style='mso-spacerun:yes'>&nbsp;</span>色</span><span lang=EN-US
  style='color:white;mso-themecolor:background1'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:32.95pt'>
  <td width=208 colspan=2 valign=top style='width:155.7pt;border-top:none;
  border-left:solid white 1.0pt;mso-border-left-themecolor:background1;
  border-bottom:solid #A5A5A5 1.0pt;mso-border-bottom-themecolor:accent3;
  border-right:solid white 1.0pt;mso-border-right-themecolor:background1;
  mso-border-top-alt:solid #A5A5A5 .5pt;mso-border-top-themecolor:accent3;
  mso-border-top-alt:#A5A5A5;mso-border-top-themecolor:accent3;mso-border-left-alt:
  white;mso-border-left-themecolor:background1;mso-border-bottom-alt:#A5A5A5;
  mso-border-bottom-themecolor:accent3;mso-border-right-alt:white;mso-border-right-themecolor:
  background1;mso-border-style-alt:solid;mso-border-width-alt:.5pt;background:
  #FCF6EA;padding:0cm 5.4pt 0cm 5.4pt;height:32.95pt'>
  <center><h3 style="color:black"><?php	echo  $_GET['claim']?></h3></center>
  </td>
 </tr>
</table>

	</div>
			
</body>
</html>
