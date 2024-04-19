<?php
include 'Lluitador.php';
include 'Batalla.php';

$lluitador1 = new Lluitador("Pepe bàrbar", 7, 5);           //($nom, $forsa, $defensa)
$lluitador2 = new Lluitador("Lola aniquiladora", 9, 4);

echo "Els contrincants són: \n" .  $lluitador1->getNom() . " i \n" .  $lluitador2->getNom() . "\n";

echo "Que comenci la batalla!!! \n \n";

$batalla = new Batalla($lluitador1, $lluitador2);
$batalla->lluitar();