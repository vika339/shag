<?php 
$fname='test.txt';
if(! file_exists($fname)){
	print "ERROR!<br>";
 }
else {print "ФАЙЛ СУЩЕСТВУЕТ!<br>"; }

if(! is_file($fname)){
	print "ERROR!<br>";
 }
else {print "ФАЙЛ СУЩЕСТВУЕТ!<br>"; }
$sf=filesize('test.txt');
echo "Размер файла составляет $sf байт<br>";
echo "<a href=$fname title=$sf >Текстовый файл</a>";


 ?>


