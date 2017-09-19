<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "products";
$err = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");

//echo "Connected successfully<br >";
$sql = "SELECT * FROM products ORDER BY id";
$result = mysqli_query($conn, $sql);
$products = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        array_push($products, $row);
    }

} else {
    $err = "Prekiu nerasta";
}
mysqli_close($conn);
include "view.php";
