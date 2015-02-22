
<?php
$myfile = fopen($file, "r") or die("Unable to open file!");
if(filesize($file) > 0){
echo fread($myfile,filesize($file));
}
fclose($myfile);
?>
