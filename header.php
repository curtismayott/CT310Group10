<?php  echo '<?xml version="1.0" encoding="utf-8"?>' ?>
<?php  echo "\n"?>
<?php  echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" 
         content="text/html; charset=utf-8" />
		<title><?php echo "$page"; ?></title>
		<link rel="stylesheet" type="text/css" href="./styles/headfoot.css" />
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
<body>