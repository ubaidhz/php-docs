<!DOCTYPE html>
<html>
	<head>
		<title>About</title>
		<style type="text/css">
			* {
				font-family: Arial, Verdana, sans-serif;
				color: #665544;
				text-align: center;}
			body {
				width: 90%;
				margin: 0 auto;}
			#content {
				overflow: auto;}
			#nav, #feature, #footer {
				margin: 1%;}
			.column1, .column2, .column3 {
				width: 31.3%;
				float: left;
				margin: 1%;}
			.column3 {
				margin-right: 0%;}
			li {
				display: inline;
				padding: 0.5em;}
			#nav, #footer {
				background-color: #efefef;
				padding: 0.5em 0;}
			#feature, .article {
				height: 10em;
				margin-bottom: 1em;
				background-color: #efefef;}
		</style>
	</head>
	<body>
		<div id="header">
			<h1>About</h1>
			<?php 
			include 'inc/nav.inc.php';?>
		</div>
		<!-- Content will go here -->
			<?php 
			include 'inc/content.inc.php';?>
		<!-- Footer will go here -->
			<?php 
			include 'inc/footer.inc.php';?>
	</body>
</html>
