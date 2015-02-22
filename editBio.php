<?php
$page = 'Bio Editing';
include 'header.php';
?>
<?php
//my ip aka localhost
$allowedip = '127.0.0.1';
$ip = $_SERVER['REMOTE_ADDR'];
if ($ip == $allowedip);
//need to check if is correct with school ips
elseif (!preg_match('/^10.84/', $ip))  
{
    header('Location: notallowed.php');
    exit;
}
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
