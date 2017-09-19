<?php
session_start();
if (isset($_SESSION['user'])) {

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

//ar bandoma prideti irasa
if (isset($_POST['submit'])) {


    if (isset($_FILES['image'])) {
        move_uploaded_file($_FILES['image']['tmp_name'], "../images/" . $_FILES['image']['name']);
    }
    $sql = "INSERT INTO products (pavadinimas, kaina, kiekis, image) VALUES ('" . $_POST['pavadinimas'] ."', '" . $_POST['kaina'] ."', '" . $_POST['kiekis'] ."', '" . $_FILES['image']['name'] ."')";
    $result = mysqli_query($conn, $sql);
}

//ar bandoma pasalinti irasa
if (isset($_GET['delete'])) {
    //$_GET['delete'] reiksme gaunama is nuorodos
    $sql = "DELETE FROM products WHERE id =" . $_GET['delete'];
    $result = mysqli_query($conn, $sql);
}

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
} else {
    header('Location: login.php');
}