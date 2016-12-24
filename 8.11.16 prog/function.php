<?php
    require_once 'config.php';

function connectToDb(){
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    mysqli_set_charset($conn, "utf8");
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function closeConnectionToDb($conn) {
    mysqli_close($conn);
}

function getArticle($route){
    //соединяюсь с базой
    $myconnect = connectToDb();
    if ($route=='') {
        $sql = "SELECT * FROM articles WHERE url='main' " ;
    }
    else {
        $sql = "SELECT * FROM articles WHERE url='$route' " ;
    }
    $result = mysqli_query($myconnect, $sql);
    //проверяю существование страницы. Если нет - загружаю 404
    if (mysqli_num_rows($result) == 0) {
         $sql = "SELECT * FROM articles WHERE url='404' " ;
         $result = mysqli_query($myconnect, $sql);
    }
    // результат в ассоциативный массив
    $row = mysqli_fetch_assoc($result);
    closeConnectionToDb($myconnect);
    return $row;
}

 function getMenu(){
    $myconnect = connectToDb();
   $sql = "SELECT * FROM articles  " ;
   $result = mysqli_query($myconnect, $sql);
   $out='';
     while($row = mysqli_fetch_assoc($result)) {
        $out.='<li><a href='.$row['url'].'>'.$row['title'].'</a></li>';
    }

    closeConnectionToDb($myconnect);
    return $out;
}

  // WERE url<>'404' and url<>'main'