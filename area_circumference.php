<?php
    function areaCirculo($raio, $pi){
        $area = $pi * ($raio * $raio);
        print("Área: $area\n");
    }
    function circunferenciaCirculo($raio, $pi){
        $circunferencia = 2 * $pi * $raio;
        print("Circunferencia: $circunferencia\n");
    }

    $pi = 3.14;
    for($i = 1; $i <= 3; $i++) {
        $raio = readline("Digite o tamanho do raio em centímetros: ");
        areaCirculo($raio, $pi);
        circunferenciaCirculo($raio, $pi);
    }
