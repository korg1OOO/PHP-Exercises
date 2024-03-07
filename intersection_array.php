<?php
$a = array();
$b = array();
$c = array();
$d = array();

for ($i = 0; $i < 5; $i++) {
    $a[] = readline("Escolha um número para A\n");
}

for ($i = 0; $i < 5; $i++) {
    $b[] = readline("Escolha um número para B\n");
}

foreach($a as $num_a){
    foreach($b as $num_b){
        if($num_a == $num_b){
            $c[] = $num_a;
            break;
        }
    }
}

foreach ($a as $num_a) {
    if (!in_array($num_a, $d)) {
        $d[] = $num_a;
    }
}

foreach ($b as $num_b) {
    if (!in_array($num_b, $d)) {
        $d[] = $num_b;
    }
}

echo "Números de C:\n";
foreach ($c as $number) {
    echo $number . "\n";
}

echo "Números de D:\n";
foreach ($d as $number){
    echo $number . "\n";
}
