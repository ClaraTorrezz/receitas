<?php
$servername = "localhost";     
$username = "root";            
$password = "";               
$dbname = "receitas_c&f";       

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ligação falhou: " . $conn->connect_error);
}

// Charset para acentos
$conn->set_charset("utf8");
?>