<?php
session_start();

    if ($_SESSION['userin']==1){
        echo 'Hello '.$_SESSION['name'];
        echo 'Вы в админ-панели';
    }
    else {
        $user = $_GET['name'];
        $pass = $_GET['pass'];

        if ($user =='ivan' and $pass=='3344') {

            $_SESSION['name']= 'ivan';
            $_SESSION['userin']=1;
            header("Location: 2.php");
        }
        else {
            echo 'Войдите с верным логином и паролем <a href="1.php">Войти</a>';
        }

    }

?>


