<?php

$full_filename = $argv[1];
$file = fopen($full_filename, 'r');
$utf8 = fread($file, filesize($full_filename));
fclose($file);

echo "Convert filename: \033[0;37m{$full_filename}\033[0m ... \033[1;92mSuccessfully!\e[0m\n";

$big5 = mb_convert_encoding($utf8, 'big5', 'utf8');
$file = fopen($full_filename, 'w');
fwrite($file, $big5);
fclose($file);
