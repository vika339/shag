<?php
$num=$_POST['num'];
if($num>0){
for($i=0; $i<$num; $i++){
echo $i." ";
}
}



else{
	echo "error!";
}