<?php
function teste()
{
    $a = 0;
    $a++;

    echo "$a <br>";
}

teste();
teste();
teste();

function testeStatic()
{
    // com static, o valor é mantido para a proxima chamada 
    static $a = 0;
    $a++;

    echo "Static: $a <br>";
}
testeStatic();
testeStatic();
testeStatic();
