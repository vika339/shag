<?php
    session_start();
    if ($_SESSION['userin']==1){
        echo 'Hello '.$_SESSION['name'];
        echo '<br>ЭТо третья страница сайта';
        echo '<form action="4.php">
    <button>Выйти</button>
</form>';
    }
    else {
        echo 'Войдите с верным логином и паролем <a href="1.php">Войти</a>';
    }
?>

