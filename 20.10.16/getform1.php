<?php
$name=$_GET['name'];
$pas=$_GET['pas'];
$name=trim($name);
$pas=trim($pas);
if($name=='ivan'and$pas==7778){
	echo "welcome";

}
else{
	echo "error!";
}