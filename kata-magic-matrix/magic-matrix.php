<?php
echo 'Introduce los números de la matriz 3x3. La matriz se rellena de izquierda a derecha y de arriba a abajo.';
for ($i=0; $i<3; $i++){
    for ($j=0; $j<3; $j++){
       $num = readline('número:');
        $matriz[$i][$j]= $num;
    }
};

$matriz[0][0]= 2;
$matriz[0][1]= 7;
$matriz[0][2]= 6;
$matriz[1][0]= 9;
$matriz[1][1]= 5;
$matriz[1][2]= 1;
$matriz[2][0]= 4;
$matriz[2][1]= 3;
$matriz[2][2]= 8;

print_r($matriz);


$b = array_map("array_sum", $matriz);
print_r($b);





