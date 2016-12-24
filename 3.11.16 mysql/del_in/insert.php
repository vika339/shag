<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$un = "Александр";
$up="1234";
$ue = "ss33s@sss.ua";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
	echo 'connect <br>';
}

mysqli_set_charset($conn, "utf8");

$sql = "INSERT INTO u1 (user, pass, email) VALUES ('$un', '$up', '$ue')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>