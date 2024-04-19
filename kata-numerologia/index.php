<?php
echo "Aquest programa et diu el significat en numerologia d'un número donat. \n";
echo 'Si us plau, introdueix un número: '; // 123, 542
// $num = trim(fgets(STDIN));
$num= 123;

echo "El número ". $num. " significa: ". calcularSignificat($num);

 function calcularSignificat($num): string{
    $resposta = "";
  
    $numeros = str_split($num);    //array de números

    $suma = array_sum($numeros);

    while ($suma >=10) {
        $suma2 = str_split($suma);  // la variable de la función tiene que ser $suma
        $suma = array_sum($suma2);  // la variable final no puede ser $suma
    }  // idea: separar en dos funciones el while y el switch
    switch ($suma){
        case 0:
            $resposta = "el tot";
        case 1:
            $resposta = "individualitat";
        case 2:
            $resposta = "dualitat";
        case 3:
            $resposta = "raó";
         case 4:
            $resposta = "estabilitat";
        case 5:
            $resposta = "amor";
        case 6:
            $resposta = "destrucció";
        case 7:
            $resposta = "saviesa";
        case 8:
            $resposta = "poder";
        case 9:
            $resposta = "generositat";
                
    }
    return $resposta;
}
   



