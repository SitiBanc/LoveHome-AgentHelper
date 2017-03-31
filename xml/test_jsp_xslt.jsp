<%@page contentType="text/html" pageEncoding="Big5" import="java.lang.*,java.util.*,javax.xml.parsers.*,org.xml.sax.*,org.w3c.dom.*,java.io.*, javax.xml.transform.stream.*,javax.xml.transform.*" %>

<%
   String xsltData = "Books.xslt";
   String xmlFile = "Books.xml";
   File xml = new File(getServletContext().getRealPath("/")+"/"+xmlFile);
   File xslt = new File(getServletContext().getRealPath("/")+"/"+xsltData);
      // 建立TransformerFactory物件
      TransformerFactory tff = TransformerFactory.newInstance();
      // 建立Transformer物件
      Transformer tf = tff.newTransformer(new StreamSource(xsltData));
      // 轉換XML
	  tf.transform(new StreamSource(xmlFile),new StreamResult(out));
%>