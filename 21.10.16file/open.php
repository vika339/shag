<?php 

$file="test.txt";
$data="Lorem Ipsum";
$sf=filesize($file);
echo $sf;
if(is_writable($file)){

$of=fopen($file, 'a+');
$wf=fwrite($of, $data);
echo $sf;
fclose($of);
 }
 else{
 	echo "ERROR!";
 }
 ?>
