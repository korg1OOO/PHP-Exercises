<?php
    $num = readline("Escolha um número: ");
    $array = array();

    while($num != 0){
        for($i=2;$i<$num;$i++){
            $result = 0;
            if($num % $i == 0){
                $result = 1;
                break;
            }
        
        if($result != 1){
            $array[] = $num;
        }
        $num = readline("Escolha outro número: ");
        }
        
        foreach($array as $primo){
            print($primo . " ");
        }
