<?php
function showNumber($number){
    if ($number==0){
        echo $number;
    }else{
        echo $number.' ';
        showNumber($number - 1);
    }
}
showNumber(5);

function calculFactorial($number){
    if ($number==0){
        return;
    }else{
        return $number*calculFactorial($number - 1);
    }
}
calculFactorial(5);

?>