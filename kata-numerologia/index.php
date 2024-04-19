<?php
echo "Aquest programa et diu el significat en numerologia d'un número donat. \n";
echo 'Si us plau, introdueix un número: '; // 123, 542
$num = readline();                   // trim(fgets(STDIN));

echo "El número ". $num. " significa: ". calcularSignificat($num);

 function calcularSignificat($num): string{
    $resposta = "";
  
    $numeros = str_split($num);   

    $suma = array_sum($numeros);

    while ($suma >=10) {
        $suma2 = str_split($suma);  
        $suma = array_sum($suma2);  
    }  
    switch ($suma){
        case 0:
            $resposta = "el tot";
            break;
        case 1:
            $resposta = "individualitat";
        case 2:
            $resposta = "dualitat";
            break;
        case 3:
            $resposta = "raó";
            break;
         case 4:
            $resposta = "estabilitat";
            break;
        case 5:
            $resposta = "amor";
            break;
        case 6:
            $resposta = "destrucció";
            break;
        case 7:
            $resposta = "saviesa";
            break;
        case 8:
            $resposta = "poder";
            break;
        case 9:
            $resposta = "generositat";
            break;                
    }
    return $resposta;
}
   



