<?php

    $num = readline("Escreva um número: ");
    if($num < 0){
        for($i = 0; $num < $i; $num++){
            echo "$num ";
        }
    }
    else if($num > 0){
        for($i = 0; $num > $i; $num--){
            echo "$num ";
        }
    }
    else {
        echo "O número dado é igual a 0.";
    }
    
    echo "\n";
