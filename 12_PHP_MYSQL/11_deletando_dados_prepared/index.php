<?php
$host = "localhost";
$user = "root";
$pass = "password";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA
$id = 4;
$stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");
$stmt->bind_param("i",$id);
$stmt->execute();
$conn->close();