<?php

    for($i = 1; $i <= 10; $i++){
        $num = readline("Número $i - Escreva um número: ");
        if($num > 0){
            echo "$num é um número positivo.\n";
        } else if ($num == 0){
            echo "$num é igual a 0, ou seja, é neutro.\n";
        } else {
            echo "$num é um número negativo.\n";
        }
    }
