<?php
    $result = 0;
    $num = readline("Escolha um número: ");
    verificarPrimo($num, $result);

    function verificarPrimo($num, $result){
        while($num > 2){
            for($i=2;$i<$num;$i++){
                if($num % $i == 0){
                    $result = 1;
                }
            }
            if($result == 1){
                print("$num não é primo!\n");
            } else {
                print("$num é primo!\n");
            }
            $num = readline("Escolha outro número: ");
        }
        print("$num não é primo!");
    }
