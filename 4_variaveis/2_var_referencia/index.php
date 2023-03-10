<?php

$x = 2;
$y =& $x;

// x vai acompanhar o valor de y e vice-versa

echo $x;
echo "<br>";
echo $y;



$y = 15;

echo "<br>Atribuição após ref <br>";
echo $y;
echo "<br>";
echo $x;
