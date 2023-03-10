<?php
$arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
];

// o extract cria variáveis com as chaves e os valores do array
extract($arr);
echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";
