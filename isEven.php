<?php
    function isPar($num){
        if($num % 2 == 0){
            print("O número é par\n");
        } else {
            print("O número é impar\n");
        }
    }
    $num = readline("Escreva um número: ");
    while($num != 0){
        isPar($num);
        $num = readline("Escreva outro número: ");
    }
