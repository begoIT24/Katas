<?php
class Lluitador{
    private string $nom;
    private int $vida = 10;
    private int $forsa;
    private int $defensa;

    public function __construct($nom, $forsa, $defensa){
        $this->nom = $nom;
        $this->forsa = $forsa;
        $this->defensa = $defensa;
    }

    public function getNom(): string{
        return $this -> nom;
    }
    public function getVida(): int{
        return $this -> vida;
    }
    public function getForsa(): int{
        return $this -> forsa;
    }
    public function getDefensa(): int{
        return $this -> defensa;
    }
    public function setVida($vida): void{
        $this -> vida = $vida;
    }
    
}