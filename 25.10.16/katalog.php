<?
$dir=opendir('1');
while ($a=readdir($dir)) {
	echo $a.'<br>';
}

closedir($dir);


?>