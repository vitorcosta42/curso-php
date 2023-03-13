<?php
class Humano
{
}
class Animal
{
}

$marcos = new Humano;
$tucano = new Animal;

if ($marcos instanceof Humano) {
    echo "Marcos é um Humano <br>";
} else {
    echo "Marcos não é um Humano <br>";
}

if ($tucano instanceof Humano) {
    echo "O tucano é um humano <br>";
} else {
    echo "O tucano não é um humano <br>";
}
