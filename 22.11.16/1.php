<?php
class user{
	public $name="name";
	public $lastname="lastname";
	public $sername="sername";
	function __construct($name, $lastname, $sername){
		$this->name=$name;
		$this->lastname=$lastname;
		$this->sername=$sername;

	}
	function one(){
	echo $this->sername." ".$this->name." ".$this->lastname.'<br>';
}}


    $user1=new user('Иванов', 'Иван', 'Иванович');
    $user1->one();

//задание2
class file{
      public $namefile="";
      private $hadler;
      function open(){

        if (file_exists($this->namefile)) {
          $this->handler=fopen($this->namefile, 'r');
       echo fread(($this->handler), filesize($this->namefile));

        fclose($this->handler);
      }
      else {
        echo"Файл $this->namefile; не существует!";
        }
      }
      function __construct($namefile) {
          $this->namefile=$namefile;
         // $this->handler=$hadler;
          
        }
}

    $zadanie2= new file("patan.doc");
    echo $zadanie2->open();
  
  class file2 extends file{
  
        public $newline= " ";
        function __construct($namefile, $newline ) {
          $this->newline=$newline;
        }
        function write(){
       
         if ( is_writeable($this->namefile) ) {
            $hadlers = fopen($this->namefile, "a+");
            $success = fwrite($hadlers, $this->newline);
            echo $success;
        fclose($hadlers); 
      }
         else {
          echo "Error";
      }
      }
      }
       
     function newlines(){
 $fs = filesize($this->newline);
 if (empty($newline)){
 echo "Добавьте данные для ввода";

}
else{
echo "Размер файла составляет $fs байт";
}
}
$zadanie22 = new file2("patan.doc","hello, hello, hi");
       echo $zadanie22->write();
       echo $zadanie22->newlines();
?>