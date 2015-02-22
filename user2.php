<?php
session_start();
$_SESSION['user']='user2';
$page = 'Luigi';
include 'header.php';
?>
<style type="text/css">
@import './styles/userpage.css';	
</style>
<div class="body-wrap">
	<div class="summary">
		<h3>About Me</h3>
		<div class="summary-body">
			<!-- site information - temp info -->
			<img src="./img/user2.png" alt="A picture of Mario">
			<?php
			$file = "UserTwoBio.txt";
			include 'read.php';
			?>
			<?php
			$_SESSION['bio']='UserTwoBio.txt';
			$editing = "Bio";
			include 'write.php';
			?>
		</div>
	</div>
	<div class="interest">
		<h3>Interests</h3>
		<div class="interest-body">
			<?php
			$file = "user2likes.txt";
			include 'read.php';
			?>
			<?php
			$_SESSION['interest']='user2likes.txt';
			$editing = "Likes";
			include 'write.php';
			?>
		</div>
	</div>
</div>
<?php
include 'footer.html';
?>