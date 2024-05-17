<?php
require 'Player.php';
require 'Archer.php';
require 'Warrior.php';
require 'Wizard.php';

/*
** Here we only prove the classes & functions. To play accordingly:
**   - Every player moves in turns
**   - When 2 players meet in the same position, they can make an action
**   - The Game Master decides who wins or what happens next
*/

$player1 = new Warrior('Aragorn', 0, 0, 'Andúril sword');
echo $player1->move('right') . "\n";
echo $player1->move('up') . "\n";
echo $player1->attackWithWeapon() . "\n";

$player2 = new Wizard('Gandalf', 5, 5, ['Destructive Blast', 'Shapeshifting', 'Healing', 'Fire']);
echo $player2->move('left') . "\n";
echo $player2->move('left') . "\n";
echo $player2->castSpell("Destructive Blast") . "\n";

$player3 = new Archer('Legolas', 9, 9, "Galadhrim bow", 5);
echo $player3->move('down') . "\n";
echo $player3->move('right') . "\n"; // He can't move to the right
echo $player3->shootWithBow() . "\n";
