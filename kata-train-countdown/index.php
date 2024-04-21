<?php
echo "Per salvar la visa has d'intentar frenar aquest tren introduint 10 números! \n";
for ($i = 0; $i < 10; $i++) {
    echo "Introdueix un número: " ;
    $num = (int)readline();
    $numeros[] = $num;          //mejor que array_push() porque así no llamas a una función
}
$sumaTotal = array_sum($numeros);

if ($sumaTotal == 67) {
    echo "Has aconseguit activar el fre d'emergència. T'has salvat! \n";
} else {
    echo "No has aconseguit frenar el tren \n";
}


