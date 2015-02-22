<?php
session_start();
$_SESSION['user']='user1';
$page = 'Mario';
include 'header.php';
?>
<style type="text/css">
@import '/styles/userpage.css';	
</style>
<div class="body-wrap">
	<div class="summary">
		<h3>About Me</h3>
		<div class="summary-body">
			<!-- site information - temp info -->
			<img src="./img/user1.png" alt="A picture of Mario">
			<?php
			$file = "UserOneBio.txt";
			include 'read.php';
			?>
			<?php
			$_SESSION['bio']='UserOneBio.txt';
			$editing = "Bio";
			include 'write.php';
			?>
		</div>
	</div>
	<div class="interest">
		<h3>Interests</h3>
		<div class="interest-body">
			<?php
			$file = "user1likes.txt";
			include 'read.php';
			?>
			<?php
			$_SESSION['interest']='user1likes.txt';
			$editing = "Likes";
			include 'write.php';
			?>
		</div>
	</div>
</div>
<?php
include 'footer.html';
?>