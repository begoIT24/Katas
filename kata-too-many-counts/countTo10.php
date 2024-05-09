<?php
//MÉTODO 1
echo 'primer método'. "\n";

for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
};

//MÉTODO 2
echo 'segundo método'. "\n";

$i=0;

while ($i<10){
   $i++;
   echo $i . "\n";
};

//MÉTODO 3
echo 'tercer método'. "\n";

$i = 1;
do{
    echo $i . "\n";
    $i++;    
}while($i <= 10);

//MÉTODO 4
echo 'cuarto método'. "\n";

function contar($i){
    $i++;
    echo $i . "\n";
}

for ($i = 0; $i < 10; $i++) {
    contar($i);
};


//MÉTODO 5
echo 'quinto método'. "\n";

$numeros = [1, 2, 3, 4, 5, 6 ,7 ,8 ,9, 10];

foreach ($numeros as $num){
    echo $num . "\n";
}

//MÉTODO 6
echo 'sexto método'. "\n";

for ($i = 1; $i <= 10; $i++) {
    $numeros[]= $i;
}

foreach ($numeros as $num){
    echo $num . "\n";
}



 /*   if ($i <= 10){
        echo $i . "\n";
        $i++;
    }*/

