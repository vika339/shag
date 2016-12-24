<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];

function clean($value = "") {
	// trim - обрезает пробелы до и после значения 
    $value = trim($value);
    // stipslashes - удаляет экранирующие символы
    $value = stripslashes($value);
    //удаляет теги html
    $value = strip_tags($value);
    // конвертирует спецсимволы в коды
    $value = htmlspecialchars($value);
    return $value;
}

$name = clean($name);
$surname = clean($surname);
$email = clean($email);
$message = clean($message);
$phone = clean($phone);
//в переменных обработанная строка

function check_length($value = "", $min, $max) {
	//если строка вмещается в диапазон -> true
    $result = (mb_strlen($value) >= $min && mb_strlen($value) < $max);
    return $result;
}

if(!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {
    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 

    if(check_length($name, 2, 25) && check_length($surname, 2, 50) && check_length($message, 2, 1000)&& check_length($phone, 12, 13) && $email_validate) {
        echo 'спасибо! Ваш запрос - отправлен';
    }
    else {
    	echo 'Проверьте количество символов';
    }
}
else {
	echo 'Заполните поля';
}


?>