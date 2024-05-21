<?php
$mostrarSumaParcial = false;

$sumaTotal = introduirNumeros(true);
comprovarSumaDigits($sumaTotal, 67);

$sumaTotal = introduirNumeros(false);
comprovarSumaDigits($sumaTotal, 81);

function introduirNumeros($mostrarSumaParcial)
{
    $num = 0;
    $numeros = [];
    $sumaParcial = 0;

    echo "Per salvar la vida has d'intentar frenar aquest tren introduint 10 números! \n";
    for ($i = 0; $i < 10; $i++) {
        echo "Introdueix un número: ";
        $num = (int)readline();
        $numeros[] = $num;

        if ($mostrarSumaParcial) {
            $sumaParcial += $num;
            echo "Per ara la suma és: $sumaParcial \n";
        }
    }
    $sumaTotal = array_sum($numeros);
    return $sumaTotal;
}

function comprovarSumaDigits($sumaTotal, $numObjectiu)
{
    echo "La suma dels 10 dígits que has introduït és $sumaTotal \n ";
    if ($sumaTotal == $numObjectiu) {
        echo "Has aconseguit activar el fre d'emergència. T'has salvat! \n";
    } else {
        echo "No has aconseguit frenar el tren \n";
    }
}
