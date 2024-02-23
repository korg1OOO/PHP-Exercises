<?php

   $num = readline("Escreva um número: ");

   if($num > 0){
    $num = $num * 2;
   } else if($num < 0){
    $num = $num * 3;
   } else {
    $num = "Seu número é igual a 0";
   }
   echo "$num\n";
