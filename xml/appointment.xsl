<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/appointments">
		<html>
			<head>
				<meta charset="utf-8"/>
				 <!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
				<!-- jQuery library -->
				<script src="bootstrap/js/jquery-1.12.3.min.js"/>
				<!-- Latest compiled JavaScript -->
				<script src="bootstrap/js/bootstrap.min.js"/>
				<link rel="stylesheet" href="bootstrap/css/my.css"/>
				<title>線上預約看屋系統</title>
			</head>
			<body>
				<h1 align="center">預約紀錄</h1>
				<ul class="nav nav-pills">
					<li role="presentation" class="active"><a href="appointment.php">預約紀錄</a></li>
					<li role="presentation"><a href="add.php">新增預約</a></li>
					<li role="presentation"><a href="search.html">搜尋房屋</a></li>
					<li role="presentation"><a href="object.xml">瀏覽房屋</a></li>
				</ul>
				<ul class="list-group">
					<xsl:for-each select="appointment">
						<li class="list-group-item">
							<h4 class="list-group-item-heading"><xsl:value-of select="object/name"/><br/></h4>
							<p class="list-group-item-text"><xsl:value-of select="date"/>@
							<xsl:value-of select="time"/></p>
							<a class="btn btn-info" role="button">
								<xsl:attribute name="href">modifyForm.php?id=<xsl:value-of select="@id"/></xsl:attribute>
								修改
							</a>
							<a class="btn btn-primary" role="button">
								<xsl:attribute name="href">delete.php?id=<xsl:value-of select="@id"/></xsl:attribute>
								刪除
							</a>
						</li>
					</xsl:for-each>
				</ul>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>