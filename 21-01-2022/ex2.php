<?php
    $soma = 0;
    for($i = 1; $i <= 100; $i++){
        $soma += $i;
    }

    echo "O resultado da soma de 1 a 100 é: " . $soma . "<br>";
    echo "E sua média é: " . $soma/100;