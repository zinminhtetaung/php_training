<?php
$myfile = fopen("Sample.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Sample.txt"));
fclose($myfile);
?>