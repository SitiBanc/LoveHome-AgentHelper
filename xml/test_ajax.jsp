<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf8">
		<title>AJAX 入門：第三個範例</title>
		<style type="text/css">
		  .off { display: none }
		  .on  { display: inline }
		</style>
	</head>

	<body>
		<h2 align=center>AJAX 入門：第三個範例-練習題</h2>
		<hr>

		<%
			function display(str) {
				if(str == '--') {
					document.getElementById('label').className = "off";
					document.myform.brand.className = "off";
				} else {
				// insert AJAX code here
				var http_request = false;
				if(window.XMLHttpRequest) { // Mozilla, Safari, ....
					http_request = new XMLHttpRequest();
				} else if(window.ActiveXObject) { // IE
					try {
						http_request = new ActiveXObject("Msxml2.XMLHTTP");
					} catch (e) {
						try {
							http_request = new ActiveXObject("Microsoft.XMLHTTP");
						} catch (e) {}
					}
				}

				if (!http_request) {
					alert('Giving up :( Cannot create an XMLHTTP instance');
					return false;
				}
				// 定義事件處理函數為 alterContents()
				http_request.onreadystatechange = function() { 
					alertContents(http_request); };
				if(str == 'NB') {
					url = 'NB.xml';
				} else {
					url = 'intel_cpu.xml';
				}
				http_request.open('GET', url, true);
				http_request.send(null);
			}
		 }

			function alertContents(http_request) {
				if (http_request.readyState == 4) {
					if (http_request.status == 200) { 
						var xmldoc = http_request.responseXML;
						var nodes = xmldoc.getElementsByTagName('product');
						var current = document.myform.brand;
						var anode, tnode;
						while(current.hasChildNodes()) {
							anode = current.firstChild;
							current.removeChild(anode);
						}

					for(var i=0; i<nodes.length; i++) {
						anode = document.createElement("option");
						anode.setAttribute("value", i);
						if(i == 0) 
							anode.setAttribute("selected", "1");
						current.appendChild(anode);
						tnode = document.createTextNode(nodes[i].firstChild.data);
						anode.appendChild(tnode);
					}

					document.getElementById('label').className = "on";
					document.myform.brand.className = "on";
				  } else {
					alert('There was a problem with the request.');
				  }
				}
			}
		%>
		<p/>
		<form name="myform">
			商品：
			<select name="products" onChange="display(document.myform.products.options[selectedIndex].text);">
				<option value="none" selected="1">--</option>
				<option value="NB">NB</option>
				<option value="cpu">CPU</option>
			</select><br/>
			<div id="label" class="off">品牌：</div>
			<select name="brand" class="off" onChange="display(document.myform.brand.options[selectedIndex].text);">
				<option value="none" selected="1">--</option>
			</select>
		</form>


		<p/>
		<hr>

	</body>
</html>
