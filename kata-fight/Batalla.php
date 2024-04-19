<?php
class Batalla{
    private Lluitador $lluitador1;
    private Lluitador $lluitador2;

    public function __construct($lluitador1, $lluitador2){
        $this -> lluitador1 = $lluitador1;
        $this -> lluitador2 = $lluitador2;
    }
    public function establirAtacant(){
        $probab = rand(0,100);
        $forsa1 = $this -> lluitador1 -> getForsa();
        $forsa2 = $this -> lluitador2 -> getForsa();

        if ($forsa1 > $forsa2 && ($probab >= 0 && $probab <= 70)){
            return $this -> lluitador1;
        }else if ($forsa1 > $forsa2 && ($probab >= 71 && $probab <= 100)){
            return $this -> lluitador2;
        }
        }

        public function lluitar(){
            $vidaPerdedor = 0;
            
            $this -> establirAtacant();


        }
    

   /* public function lluitar(){  // falta tenir en compte probabilitat i completar llavors la condició d'empat en forsa
        $vidaPerdedor = 0;
        while ($this -> lluitador1 -> getVida() != 0 && $this -> lluitador2 -> getVida() != 0 ){
            if ($this -> lluitador1 -> getForsa() > $this -> lluitador2 -> getForsa()) {
                $vidaPerdedor = $this -> lluitador2 -> getVida() - ($this -> lluitador1 -> getForsa() - $this -> lluitador2 -> getDefensa());
                $this -> lluitador2 -> setVida($vidaPerdedor);
            } else if ($this -> lluitador2 -> getForsa() > $this -> lluitador1 -> getForsa()) {
                $vidaPerdedor = $this -> lluitador1 -> getVida() - ($this -> lluitador2 -> getForsa() - $this -> lluitador1 -> getDefensa());
                $this -> lluitador1 -> setVida($vidaPerdedor);
            } else if ($this -> lluitador2 -> getForsa() == $this -> lluitador1 -> getForsa()){

            }
        }
    } */

    public function establirGuanyador(){
        $nomGuanyador = "";
        if ($this -> lluitador1 -> getVida() == 0) { 
            $nomGuanyador = $this -> lluitador2 -> getNom();
         } else if ($this -> lluitador2 -> getVida() == 0) {
            $nomGuanyador =  $this -> lluitador1 -> getNom();
         }
         echo 'El guanyador del combat és: '. $nomGuanyador;
    }
}

