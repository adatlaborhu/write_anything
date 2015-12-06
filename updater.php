<?php
$myfile = fopen("content.txt", "r") or die("Woops, we have an issue and all our files are broken!");
echo fread($myfile,filesize("content.txt"));
fclose($myfile);
?>

