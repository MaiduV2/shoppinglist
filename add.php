<?php
/*
a - append
w - write
r - read
*/ 
$file = fopen('list.txt', 'a');
fwrite($file, $_POST['newitem'] . "\n");
fclose($file);
header('Location: /index.php');
die();