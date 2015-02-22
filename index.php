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
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
Vestibulum at consectetur ligula. Cras sodales nibh turpis, tristique viverra mi consectetur 
sit amet. Donec sapien urna, convallis vel laoreet sit amet, rutrum eu nisi. Sed quis blandit 
leo. Etiam accumsan id leo at malesuada. Proin porttitor sapien neque, in scelerisque sapien 
congue sed. Suspendisse rhoncus odio quis sem laoreet, quis interdum leo consectetur. Duis 
tristique sapien augue, sit amet commodo lacus tempus quis. Pellentesque eget maximus est, 
vitae volutpat turpis. Sed ultrices augue eget ante elementum euismod. Vestibulum mollis arcu 
pharetra, fermentum lorem feugiat, tristique felis.</p><br>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
Vestibulum at consectetur ligula. Cras sodales nibh turpis, tristique viverra mi consectetur 
sit amet. Donec sapien urna, convallis vel laoreet sit amet, rutrum eu nisi. Sed quis blandit 
leo. Etiam accumsan id leo at malesuada. Proin porttitor sapien neque, in scelerisque sapien 
congue sed. Suspendisse rhoncus odio quis sem laoreet, quis interdum leo consectetur. Duis 
tristique sapien augue, sit amet commodo lacus tempus quis. Pellentesque eget maximus est, 
vitae volutpat turpis. Sed ultrices augue eget ante elementum euismod. Vestibulum mollis arcu 
pharetra, fermentum lorem feugiat, tristique felis.</p><br>



			</div>
		</div>
		<div class="right-wrap">
			<!-- list of users - temp info-->
			<h3>List of Users</h>
				<div class="right-body">
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
