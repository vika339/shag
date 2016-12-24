<?php
require_once 'config.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
//----------------------

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE u1 SET user='$name', pass='$pass', email='$email' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Yes";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>