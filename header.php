<!DOCTYPE html>

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" 
         content="text/html; charset=utf-8" />
		<title><?php echo "$page"; ?></title>
		<link href="./styles/headfoot.css" rel="stylesheet" type="text/css"  />
	</head>
	<body>
	<div class="border">
		<div class="top-wrap">
			<h1 id="header-label">1-UP</h1>
			<?php 
			echo "<h3>$page</h3>"."\n"; ?>
			<nav>
				<ul>
					<li><a href="./index.php" id="home-nav">Home</a></li>
					<li><a href="./search.php" id="search-nav">Search</a></li>
					<li><a href="" id="your-page-nav">Your Page</a></li>
					<li><a href="" id="sign-in-nav">Sign In</a></li>
				</ul>
			</nav>
		</div>
			
			<img src="./img/mario border.png" alt="page divider of mario mushrooms">
	</div>