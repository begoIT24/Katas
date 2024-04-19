<?php

$num1 = 1453; // 3
$num2 = 1443; // 7
$num3 = 3772341; // 7;

for ($i = 1; $i < 4; $i++) {
    $div = 10;
    $resultat = $num1 % $div;
    echo $resultat;
    if ($resultat == 3) {
        $resposta = "El 3 està en $num1";
    }else $resposta = "El 3 no està en $num1 ";
    
    $div = $div*10;
}
echo $resposta;

for ($i = 0; $i < 4; $i++) {
    $div = 10;
    $resultat = $num2 % $div;
    if ($resultat == 7) {
        $resposta = "El 7 està en $num2";
    }else $resposta = "El 7 no està en $num2 ";
    
    $div = $div*10;
}
echo $resposta;

for ($i = 0; $i < 7; $i++) {
    $div = 10;
    $resultat = $num3 % $div;
    
    if ($resultat == 7) {
        $resposta = "El 7 està en $num3";
    }else $resposta = "El 7 no està en $num3 ";
    
    $div = $div*10;
    
}
echo $resposta;
