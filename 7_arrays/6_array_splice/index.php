<?php 
 //Resgatar elementos de array
 //Remover elementos
 $arr = [1,2,3,4,5,6];
 $removidos = array_splice($arr,1,2);
 print_r($arr);
 echo "<br>";
 print_r($removidos);