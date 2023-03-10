<?php
$marca = "BMW";
$motor = "3.0";
$tetoSolar = true;
$portas = 4;
//compact cria um array com as variaveis
$carro = compact("marca", "motor", "tetoSolar", "portas");
print_r($carro);
