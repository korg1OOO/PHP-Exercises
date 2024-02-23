<?php
    function calc($x){
        $resultado = (5*$x) + (2*$x) + 3;
        print("O valor de y é: $resultado\n");
    }

    for($i = 0; $i < 5; $i++){
        $x = readline("Escolha um valor para x: ");
        calc($x);
    }
