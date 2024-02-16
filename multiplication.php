<?php

    $resultado = 0;
    $a = readline("Escolha um inteiro: ");
    $b = readline("Escolha o multiplicador: ");

    for($i = 0; $i < $b; $i++){
        $resultado = $resultado + $a;
    }

    echo "Resultado: $resultado\n";
