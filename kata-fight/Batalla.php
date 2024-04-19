<?php
class Batalla{
    private Lluitador $lluitador1;
    private Lluitador $lluitador2;

    public function __construct($lluitador1, $lluitador2){
        $this -> lluitador1 = $lluitador1;
        $this -> lluitador2 = $lluitador2;
    }

    public function lluitar(): void{
        $nomAtacant = "";

        while ($this->lluitador1->getVida() > 0 && $this->lluitador2->getVida() > 0) {
            $atacant = $this->establirAtacant();   
            $atacant === $this->lluitador1 ? $defensor = $this->lluitador2 : $defensor = $this->lluitador1; //establecemos $defensor

            $atacantForsa = $atacant->getForsa();
            $defensorDefensa = $defensor->getDefensa();
            $dany = $atacantForsa - $defensorDefensa;
            $defensorVida = $defensor->getVida() - $dany;
            $defensor->setVida($defensorVida);

            $nomAtacant = $atacant->getNom();
            $nomDefensor = $defensor->getNom();

            echo "$nomAtacant ataca a $nomDefensor causant un dany $dany \n";
        }

        $this->lluitador1->getVida() <= 0 ? $guanyador = $this->lluitador2 : $guanyador = $this->lluitador1;

        $nomGuanyador = $guanyador->getNom();
        
        echo "\n El guanyador final de la batalla és: $nomGuanyador";
    }

    public function establirAtacant(){
        $probab = rand(0,100);
        $forsa1 = $this -> lluitador1 -> getForsa();
        $forsa2 = $this -> lluitador2 -> getForsa();

        if ($forsa1 > $forsa2 && ($probab >= 0 && $probab <= 70)){
            return $this->lluitador1;
        } elseif ($forsa1 > $forsa2 && ($probab >= 71 && $probab <= 100)){
            return $this->lluitador2;
        } elseif ($forsa2 > $forsa1 && ($probab >= 0 && $probab <= 70)) {
            return $this->lluitador2;
        } elseif ($forsa2 > $forsa1 && ($probab >= 71 && $probab <= 100)) {
            return $this->lluitador1;
        } else {
            return rand(0, 1) === 0 ? $this->lluitador1 : $this->lluitador2; // empate en fuerza: se elige uno al azar
        }       
    } 
}

