<?php
    $atual = 10000000000000;

    for($i = 1; $i <= 3; $i++){
        $num = readline("Escreva o número $i: ");
        if($num < $atual){
            $atual = $num;
        }
    }
    echo "O menor número é $atual\n";
