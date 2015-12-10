<?php
$file = '../../../home/tomi/email.txt';
$ip = $_SERVER['REMOTE_ADDR'];
$content = date("Y-m-d H:i:s") . "\t" . $_POST['xxxxx']  . "\t" . $ip . "\r\n";
file_put_contents($file, $content, FILE_APPEND | LOCK_EX);
?>

