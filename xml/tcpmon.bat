@echo off
set TEMP=%CLASSPATH%
set CLASSPATH=%CLASSPATH%;d:\tomcat\webapps\axis\WEB-INF\lib\axis.jar;d:\tomcat\webapps\axis\WEB-INF\lib\axis-ant.jar;d:\tomcat\webapps\axis\WEB-INF\lib\commons-discovery-0.2.jar;d:\tomcat\webapps\axis\WEB-INF\lib\commons-logging-1.0.4.jar;d:\tomcat\webapps\axis\WEB-INF\lib\jaxrpc.jar;d:\tomcat\webapps\axis\WEB-INF\lib\log4j-1.2.8.jar;d:\tomcat\webapps\axis\WEB-INF\lib\saaj.jar;d:\tomcat\webapps\axis\WEB-INF\lib\wsdl4j-1.5.1.jar
java org.apache.axis.utils.tcpmon
set CLASSPATH=%TEMP%