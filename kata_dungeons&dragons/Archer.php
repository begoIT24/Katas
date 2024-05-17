<?php

class Archer extends Player
{
    private string $bow;
    private int $arrowNumber;

    public function __construct($name, $posX, $posY, $bow, $arrowNumber)
    {
        parent::__construct($name, $posX, $posY);
        $this->bow = $bow;
        $this->arrowNumber = $arrowNumber;
    }

    public function shootWithBow()
    {
        if ($this->arrowNumber > 0) {
            $this->arrowNumber--;
            return "The archer $this->name shoots an arrow with the $this->bow!. Remaining arrows: $this->arrowNumber";
        } else {
            return "You have run out of arrows";
        }
    }
}
