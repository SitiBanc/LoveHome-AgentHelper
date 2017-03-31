<%@ page language="java" contentType="text/html;charset=Big5" %>
<html>
<head>
<title>Greetings</title>
</head>

<body>
<% String s =    new String(request.getParameter("data").getBytes("ISO-8859-1"), "Big5");%>

<h1>Hello <%=s%>~~~</h1>

<%   
       out.println("<h1>試試看 out 物件</h1>");
       //  可以加上 
	   System.out.println("Standard Output");
%>
</body>
</html>
