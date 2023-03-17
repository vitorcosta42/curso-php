<?php 
    $host = "localhost";
    $user = "root";
    $pass = "password";
    $db = "cursophp";

    $conn = new mysqli($host,$user,$pass,$db);
   
    // Assunto da aula
    $sql = "SELECT * FROM itens";
    $result = $conn->query($sql);
    print_r($result);
    $conn->close();
?> 
