<?php
$carro = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto_solar' => true,
    'cambio' => 'Manual',
    'portas' => 4
];
$keys = array_keys($carro);
print_r($keys);

echo "<br>";


$values = array_values($carro);
print_r($values);
echo "<br>";
