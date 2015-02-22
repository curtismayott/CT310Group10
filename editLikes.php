<?php
$page = 'Interests Editing';
include 'header.php';
?>
<style type="text/css">
@import '/styles/edit.css';	
</style>

<?php
session_start();
$fn = $_SESSION['interest'];
$file = fopen($fn, "r");
$size = filesize($fn);
$text = fread($file, $size);
fclose($file);
$file = fopen($fn, "w");

if($_POST["interests"]) {
	fwrite($file, strip_tags($_POST["interests"]));
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
		<textarea name='interests' id="styled"><?=$text?></textarea><br/>
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
