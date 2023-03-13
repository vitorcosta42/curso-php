<?php 
class Pessoa { 
    function falar(){
        echo "Olá, eu sou um objeto !<br>";
    }
    function somar($x,$y){
        echo $x + $y . "<br>";
    }
}

$matheus = new Pessoa;
$matheus->falar();