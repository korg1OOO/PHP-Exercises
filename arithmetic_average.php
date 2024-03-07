<?php
$array = array();
$soma = 0;

for ($i = 0; $i < 10; $i++) {
    $array[] = readline("Escolha um número\n");
}

for ($j = 0; $j < 10; $j++) {
    $soma = $soma + $array[$j];
}
$media = $soma / count($array);

echo "Soma: " . $media;
