<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetoCarona";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    header("Location: index.php?erro=Falha%20de%20conexão.");
    exit();
}
?>    