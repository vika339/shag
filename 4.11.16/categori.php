<?php
require_once 'config.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");
$name=$_POST['name'];
$sql = "SELECT * FROM u2 WERE fio='$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
  while($row = mysqli_fetch_assoc($result)) {
       print_r($row);
    }
  
} else {
    echo "Такого нет";
}

mysqli_close($conn);