<?php
include("jugador.php");

$jugador1 = new Jugador("Alba", 3, 1, 2, 1, 1); 
//($nom, $fusta, $llana, $cereal, $metall)
echo $jugador1 -> comprarCarretera();
echo "</br>";
echo $jugador1 -> comprarPoblat(3,1,2,1);

?>