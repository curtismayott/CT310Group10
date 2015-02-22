<?php
$page = 'Home Page';
include 'header.php';
?>

<style type="text/css">
@import '/styles/homepage.css';	
</style>

<div class="body-wrap">
	<div class="left-wrap">
		<!-- site information - temp info -->
		<h3>Site Information</h>
			<div class="left-body">
				<li>thing</li>
				<li>thing</li>
				<li>thing</li>
				<li>thing</li>
				<li>thing</li>
				<li>thing</li>
				<li>thing</li>
				<li>thing</li>
				<li>thing</li>
			</div>
		</div>
		<div class="right-wrap">
			<!-- list of users - temp info-->
			<h3>List of Users</h>
				<div class="right-body">
					<ul id="home-user-list">
						<li><a href="user1.php"><img src="./img/user1.png" alt="A picture of Mario"></a>Mario<br><br></li>
						<li><a href="user2.php"><img src="./img/user2.png" alt="A picture of Luigi"></a>Luigi<br></li>
						<li>thing</li>
						<li>thing</li>
						<li>thing</li>
						<li>thing</li>
						<li>thing</li>
						<li>thing</li>
						<li>thing</li>
					</ul>
				</div>
			</div>
		</div>

		<?php
		include 'footer.html';
		?>
