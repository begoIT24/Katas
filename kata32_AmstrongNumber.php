<?php
echo "Aquest programa et diu si un nombre és d'Amstrong o no. \n";

//$number = readline('Si us plau, introdueix un nombre: '); 
//No funciona l'extensió readline (php 8.3). No hi ha la dll a la carpeta ext i no està a https://pecl.php.net/ per descarregar.
 
echo 'Si us plau, introdueix un nombre: '; // 153, 204
$number = trim(fgets(STDIN));   //Agafem valor sense espais en blanc

esNombreAmstrong($number);

function esNombreAmstrong($number) {
    $nombreDigits = strlen((string)$number);
    $suma = 0;
    $digitTemporal = $number;
    $digit = 0;

    while ($digitTemporal != 0) {  //bucle de suma de termes elevats a la potencia del nombre de dígits
        $digit = $digitTemporal % 10;
        $suma += pow($digit, $nombreDigits);
        $digitTemporal = intval($digitTemporal / 10); //agafem la part sencera amb intval
    }
    if ($suma == $number) {
        $resposta = $number. " SI és un nombre d'Amstrong";
    }else{
        $resposta = $number. " NO és un nombre d'Amstrong"; 
    }
    echo $resposta;
}
?>