<?php
$file = 'log.txt';
$ip = $_SERVER['REMOTE_ADDR'];
$content = date("Y-m-d H:i:s") . "\t" . $_POST['firstname']  . "\t" . $ip . "\r\n";
file_put_contents($file, $content, FILE_APPEND | LOCK_EX);

$file = 'content.txt';
if (strpos($_POST['firstname'],'<') !== false) {
    echo 'Nono!';
}
else
{$content = $_POST['firstname'] . "- --- -";
file_put_contents($file, $content, FILE_APPEND | LOCK_EX);

$myfile = fopen("content.txt", "r") or die("Woops, we have an issue and all our files are broken!");
echo fread($myfile,filesize("content.txt"));
fclose($myfile);}
?>

