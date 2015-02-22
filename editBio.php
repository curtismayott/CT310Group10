<?php
$page = 'Bio Editing';
include 'header.php';
?>
<style type="text/css">
@import '/styles/edit.css';	
</style>

<?php
session_start();
$fn = $_SESSION['bio'];
$file = fopen($fn, "r");
$size = filesize($fn);
$text = fread($file, $size);
fclose($file);
$file = fopen($fn, "w");

if($_POST["bio"]) {
	fwrite($file, strip_tags($_POST["bio"]));
	$page = $_SESSION['user'].".php";
	if(isset($_POST['submit']))
	{
		header("Location: $page");
		exit;
	}
}

fclose($file);
?>
<div class="body-wrap">
<div class="block">
	<form action="<?=$PHP_SELF?>" method="post">
		<textarea name='bio' id="styled"><?=$text?></textarea><br/>
		<div class="button">
			<input type="submit" name="submit" value='Submit'>
		</div>
	</form>
	<h3>Warning: Using back button will result in deleted information.</h3>
</div>
</div>

<?php
include 'footer.html';
?>
