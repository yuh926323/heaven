<?php

$full_filename = $argv[1];
$file = fopen($full_filename, 'r');
$utf8 = fread($file, filesize($full_filename));
fclose($file);

echo 'Convert ' . $full_filename. ' ... ' . PHP_EOL;

$big5 = mb_convert_encoding($utf8, 'utf8', 'big5');
$file = fopen($full_filename, 'w');
fwrite($file, $big5);
fclose($file);
