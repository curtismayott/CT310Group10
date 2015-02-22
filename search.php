<?php
$page = 'Search';
include 'header.php';
?>

<style type="text/css">
@import '/styles/search.css';	
</style>

<div class="body-wrap">
	<div class="search">
		<div class="search-body">
			<form action="<?=$PHP_SELF?>" method="post">
				<input type="text" name="search">
				<div class="button">
					<input type="submit" name="submit" value='Submit'>
				</div>
			</form>
		</div>
	</div>
	<div class="results">
		<!-- list of users - temp info-->
		<h3>Results</h>
			<div class="results-body">
				<ul id="home-user-list">
					<li><a href="user1.php"><img src="./img/user1.png" alt="A picture of Mario"></a>Mario<br><br></li>
					<li><a href="user2.php"><img src="./img/user2.png" alt="A picture of Luigi"></a>Luigi<br></li>
				</ul>
			</div>
		</div>
	</div>

	<?php
	include 'footer.html';
	?>

