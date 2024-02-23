<?php
    function fatorial($num){
        while($num != 0){
            for($i = $num; $i > 1; $i--){
                $num = $num * ($i-1);
            }
            print("$num");
            $num = readline("Escolha um número: ");
        }
    }

    $num = readline("Escolha um número: ");
    fatorial($num);
