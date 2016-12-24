<?php
$text=$_POST["name"];
$oper=$_POST["oper"];

if($oper=="sozd"){
mkdir($text);

print "Папка $text создана";	
}

if($oper=="del"){
rmdir($text);

print "Папка $text удалена";	
}
