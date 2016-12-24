<?php
require_once 'config.php';


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, user FROM u1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo '<select>'."\n";
    while($row = mysqli_fetch_assoc($result)) {
       echo '<option value="'.$row['id'].'">'.$row['user'].'</option>'."\n";
    }
    echo '</select>';
} else {
    echo "0 results";
}

mysqli_close($conn);