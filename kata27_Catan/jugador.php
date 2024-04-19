<?php
class Jugador{
   public $nom="";
   public $fusta= 0;
   public $llana= 0;
   public $cereals= 0;
   public $argila= 0;
   public $metall= 0;

   public function __construct($nom, $fusta, $llana, $cereal, $metall){
    $this->nom=$nom;
    $this->fusta=$fusta;
    $this->llana=$llana;
    $this->cereal=$cereal;
    $this->metall=$metall;
   }


    public function comprarCarretera(){
        if ($this->fusta < 1 || $this->argila <1) {
            return "No tens recursos per fer una carretera";
        }else{
            $this->fusta --;
            $this->argila --;
            return "Fet! Ha costat 1 fusta i 1 argila!";
        }
    }

    function comprarPoblat($fusta, $argila, $cereal, $llana){
        if ($fusta < 1 || $argila < 1 || $cereal < 1 || $llana) {
            return "No tens recursos per fer un poblat";
        }else{
            $fusta --;
            $argila --;
            $cereal --;
            $llana --;
            return "Fet! Ha costat 1 fusta, 1 argila, 1 cereal i 1 llana!";
        }
    }
}


?>