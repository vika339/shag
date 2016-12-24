<?php
require_once 'config.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");

$sql = "SELECT * FROM u1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo '<pre>';
    while($row = mysqli_fetch_assoc($result)) {
       print_r($row);
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>