<?php

class Jugador{

    private string $name;
    private int $posX;
    private int $posY;

     public function __construct($name, $posX, $posY){
        $this->name = $name;
        $this->posX = $posX;
        $this->posY = $posY;
     }

     public function moveUp ($posY) {
        $posY++;
     }

     public function moveDown ($posY) {
        $posY--;
     }

     public function moveRight ($posX) {
        $posX++;
     }

     public function moveLeft ($posX) {
        $posX--;
     }

}