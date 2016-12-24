<?php
	$fio=$_POST['fio'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
//удаляем пробелы до и после
	$fio = trim($fio);
	$email = trim($email);
	$phone = trim($phone);

	if ($fio=='' or $email=='' or $phone=='') {
		echo 'Заполните поля';
	}
	else {
		//если правильно - отправляю себе емейл с его контактами
		$mes = $fio.'<br>'.$email.'<br>'.$phone;
		$res = mail('vika@mail.ru', 'письмо с лендинга', $mes);
		//true - отправлено
		//false - ошибка
		if($res) {
			echo 'Письмо отправлено';
		}
		else {
			echo 'Повторите отправку письма!';
		}
	}
?>