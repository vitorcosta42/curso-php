<?php
    $data = new DateTime();
    echo $data->format('d/m/y') . "<br>";
    echo $data->format('D - M - Y') . "<br>";
    echo $data->format('1 . F . Y') . "<br>";
    $data->modify('+5 days');
    echo $data->format('d/m/y'). "<br>";