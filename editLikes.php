<?php
$page = 'Interests Editing';
include 'header.php';
?>
<?php
//ip checking
//my ip aka localhost
$allowedip = '127.0.0.1';
$ip = $_SERVER['REMOTE_ADDR'];
if ($ip == $allowedip);
//need to check if is correct with school ips
elseif (!preg_match('/^129.82/', $ip))   
{
    header('Location: notallowed.php');
    exit;
}
?>

<?php
session_start();
$fn = $_SESSION['interest'];
$file = fopen($fn, "r");
$size = filesize($fn);
$text = fread($file, $size);
fclose($file);

if($_POST["interests"]) {
	if(isset($_POST['submit']))
	{
		$file = fopen($fn, "w");
		fwrite($file, strip_tags($_POST["interests"]));
		fclose($file);
		$page = $_SESSION['user'].".php";
		header("Location: $page");
		exit;
	}
}
?>
<div class="body-wrap">
	<style scoped>
@import './styles/edit.css';	
</style>
<div class="block">
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<textarea name='interests' id="styled"><?php echo strip_tags($text)?></textarea><br/>
		<div class="button">
			<input type="submit" name="submit" value='Submit'>
		</div>
	</form>
	
</div>
</div>

<?php
include 'footer.html';
?>
