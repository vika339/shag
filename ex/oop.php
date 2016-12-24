<?php
/**
* 
*/
class User{
public $login;
public $password;
public $rei='0';
public $name;
public $haircolor='black';
public $isLogget;
public function logget(){
	
}
public function hi(){
	echo "hi<br>";
}
public function slep($hours){
	echo 'Slept for '.$hours.' hours<br>';
}
public function hello(){
	echo $this->name;
$this->test();
}
public function test(){
	echo "test<br>";
}
}
$mike = new User;
$nik = new User;
$mike->name='Mike';
$mike->haircolor='red';
$nik->name='Nik';
echo $mike->name.'<br>';
echo $mike->haircolor.'<br>';
echo $nik->haircolor.'<br>';
echo $nik->name .'<br>';
class Car{
	public $brand;
	public $model;
	public $year;
	public $driver;
	public function showBrand(){
	echo $this->brand.'<br>';
}
public function showModel(){
	echo $this->model.'<br>';
}
}
$toyota=new Car;
$toyota->brand='Toyota';
$toyota->model='Corolla';
$toyota->year='2000';
$mazda=new Car;
$mazda->brand='Mazda';
$mazda->model='6';
$mazda->year='2015';
$ford=new Car;
$ford->brand='Ford';
$ford->model='Taurus';
$ford->year='1995';

$ford->driver=$mike->name;
$mazda->driver=$nik->name;
$toyota->driver=$nik->name;
print_r($toyota->brand.'<br>'.$toyota->model.'<br>'.$toyota->year.'<br>'.$toyota->driver.'<br>');
var_dump($mazda->brand.'<br>'.$mazda->model.'<br>'.$mazda->year.'<br>'.$mazda->driver.'<br>');
$nik->hi();
$mike->slep(6);
$a=array('name'=>'nana', 'email'=>'mmmmmm');
print_r ($a);
$obj=(object)$a;
echo "<br>";
var_dump($obj);
$nik->hello();
$nik->logget();
echo "<br>";
?>
<?php
// file_put_contents("comments.txt", "\n{$_POST['user']};{$_POST['comments']}", FILE_APPEND);
$v=file_get_contents('txt.txt', FILE_USE_INCLUDE_PATH, null, 0, 1000);
// $v=file('txt.txt');
echo "<br>";
print_r ($v);
$n=explode(";",$v);
echo "<br>";
print_r($n);
?>
задачка с коментариями и массивами
	//открываем файл для чтения
	// файл должен существовать
$fh = fopen("comments.txt", "a+");
// проверяем наличие конца файла
while (! feof($fh)) {
	// читаем и выводим файл построкам
	echo "Предыдущие коментарии:<br>";
	echo '<p class="comments">'.fgets($fh).'</p>';
}
//закрываем файл
fclose($fh);
}
function getComment2(){

	$v=file_get_contents('comments.txt', FILE_USE_INCLUDE_PATH, null, 0, 1000);
// $v=file('txt.txt'); $x=explode(";",$v[0]);echo{$x};
echo "<br>";
print_r ($v);
$n=explode(";",$v);
echo "<br>";
print_r($n);
