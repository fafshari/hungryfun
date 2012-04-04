<!DOCTYPE html>
<html>
<head>
	<title>Hungryfun</title>
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="style.css" type="text/css"/>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/content-manager.js"></script>
	<meta charset="utf-8">
<meta name="description" content="Learn Programming and Development Free" />
<meta name="keywords" content="Development, Programming, Coding, Style, Design, Learn, Technology, Java, HTML, HTML5, CSS, Android, iPhone, Windows, Linux, Mac" />
</head>
<body onResize="ContentManager.fixSelectedScreen();">
	<?php require('header.php');?>
	<div id="content">
			<div id="content-portal-c">
				<a id="content-portal" class="index-content-button" onClick="ContentManager.expandPortal();">
				STUDENT<BR>PORTAL
				</a>
			</div>	
			<div id="content-learn-c" onClick="ContentManager.expandLearn();">
				<a id="content-learn" class="index-content-button">
				LEARNING<BR>CENTER
				</a>
			</div>
	</div>

	<?php require('footer.php');?>
</body>
</html>
