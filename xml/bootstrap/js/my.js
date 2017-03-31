function displayList(str) {
	if(str == '--') {
		document.getElementById('district').className = "off";
		document.myform.dist.className = "off";
	} else {
		// insert AJAX code here
		var http_request = false;
		if(window.XMLHttpRequest) { // Mozilla, Safari, ....
			http_request = new XMLHttpRequest();
		}else if(window.ActiveXObject) { // IE
			try {
				http_request = new ActiveXObject("Msxml2.XMLHTTP");
				}catch (e) {
					try {
						http_request = new ActiveXObject("Microsoft.XMLHTTP");
					} catch (e) {}
				}
		}

		if (!http_request) {
			alert('Giving up :( Cannot create an XMLHTTP instance');
			return false;
		}
		http_request.onreadystatechange = function(){alertContents(http_request); };
		if(str == 'TC') {
			url = 'Taichung.xml';
		} else {
			url = 'Taipei.xml';
		}
		http_request.open('GET', url, true);
		http_request.send(null);
	}
}
// 定義事件處理函數為 alterContents()
function alertContents(http_request) {
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			var xmldoc = http_request.responseXML;
			var nodes = xmldoc.getElementsByTagName('dist');
			var current = document.myform.dist;
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

			document.getElementById('district').className = "on";
			document.myform.dist.className = "on";
		}else {
			alert('There was a problem with the request.');
		}
	}
}