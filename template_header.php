<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>May Miller-Ricci</title>
		<link rel="stylesheet" href="assets/css/may.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ribeye|Donegal One">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				//highlights the link of the active page
				var path = window.location.pathname.split('/').pop();
				console.log(path);
				if(path == 'index.php') {
					$('#home').addClass('active');
				} else if(path == 'about.php') {
					$('#about').addClass('active');
				} else if(path == 'portfolio.php') {
					$('#portfolio').addClass('active');
				}
			});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div class="section" id="header">
				<a href="index.php">
					<img id="wizard" src="assets/images/wizard.png" alt="wizard icon">
				</a>
				<h1><a href="index.php">May Miller-Ricci</a></h1>
			</div> <!-- close header div -->
			
			<div class="section" id="sidebar">
				<ul>
					<div id="home"class="main_link"><li><a href="index.php">Home</a></li></div>
					<div id="about"class="main_link"><li><a id="about" class="main_link" href="about.php">About</a></li></div>
					<div id="blog"class="main_link"><li><a href="http://www.maymillerricci.wordpress.com">Blog</a></li></div>
					<div id="portfolio"class="main_link"><li><a id="portfolio" class="main_link" href="portfolio.php">Portfolio</a></li></div>
				</ul>
			</div> <!-- close sidebar div -->

			<div class="section" id="main_content">