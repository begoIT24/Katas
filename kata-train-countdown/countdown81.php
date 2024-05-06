<?php

echo "Per salvar la vida has d'intentar frenar aquest tren introduint 10 números! \n";
for ($i = 0; $i < 10; $i++) {
    echo "Introdueix un número:  " ;
    $num = (int)readline();  
    $numeros[] = $num;
}
$sumaTotal = array_sum($numeros);

if ($sumaTotal == 81) {
    echo "Has aconseguit activar el fre d'emergència. T'has salvat! \n";
} else {
    echo "No has aconseguit frenar el tren \n";
}


