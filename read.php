
<?php
$myfile = fopen($file, "r") or die("Unable to open file!");
if(filesize($file) > 0){
echo strip_tags(nl2br(fread($myfile,filesize($file))), '<br>');
}
fclose($myfile);
?>
