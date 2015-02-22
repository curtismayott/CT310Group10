<?php
$page = 'Search';
include 'header.php';
?>

<div class="body-wrap">
	<style scoped>
@import './styles/search.css';	
</style>
	<div class="search">
		<div class="search-body">
			<form action="<?php echo $_POST['PHP_SELF'] ?>" method="post" id="searchForm">
				<input type="text" name="name">
				<div class="button">
					<input type="submit" name="submit" value='Submit'>
				</div>
			</form>
		</div>
	</div>
	
	<div class="results">
		<!-- list of users - temp info-->
		<h3>Results</h3>
			<div class="results-body">
				<ul id="home-user-list">
					<?php
						if(isset($_POST['submit'])){
							$name=strtolower($_POST['name']);
							if($name === 'mario'){
								?><li><a href="user1.php"><img src="./img/user1.png" alt="A picture of Mario"></a>Mario<br><br></li>
							<?php }
							 else if($name === 'luigi'){
								?><li><a href="user2.php"><img src="./img/user2.png" alt="A picture of Luigi"></a>Luigi<br></li>
							<?php }
							else{
								?><li><a href="user2.php"><img src="./img/user2.png" alt="A picture of Luigi"></a>Luigi<br></li>
								<li><a href="user1.php"><img src="./img/user1.png" alt="A picture of Mario"></a>Mario<br><br></li>
							<?php }
						}else{
							?> <li><a href="user2.php"><img src="./img/user2.png" alt="A picture of Luigi"></a>Luigi<br></li>
							<li><a href="user1.php"><img src="./img/user1.png" alt="A picture of Mario"></a>Mario<br><br></li>
						<?php }
					?>
				</ul>
			</div>
		</div>
	</div>

<?php
include 'footer.html';
?>

