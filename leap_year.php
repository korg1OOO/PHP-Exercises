<?php

for($ano_inicio = 1980; $ano_inicio <= 2024; $ano_inicio++) {
    if($ano_inicio % 4 == 0 && $ano_inicio % 100 != 0 or $ano_inicio % 4 == 0 && $ano_inicio % 400 == 0) {
        echo "$ano_inicio ";
    }
}
