<?php

class Guerrer extends Jugador {

    private string $arma;

    public function atacarArma ($arma){


    }



    public function moveUp ($posY) {
        $posY = $posY + 2;
     }

     public function moveDown ($posY) {
        $posY = $posY - 2;
     }

     public function moveRight ($posX) {
        $posX = $posX + 2;
     }

     public function moveLeft ($posX) {
        $posX= $posX - 2;
     }


}