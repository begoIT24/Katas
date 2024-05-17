<?php

class Wizard extends Player
{

    protected array $spells = [];

    public function __construct($name, $posX, $posY, $spells)
    {
        parent::__construct($name, $posX, $posY);
        $this->spells = $spells;
    }

    public function castSpell($spell)
    {
        if (in_array($spell, $this->spells)) {
            return "The wizard $this->name casts the spell '$spell'!";
        } else {
            return "You haven't learnt how to use the spell '$spell'. Try another one";
        }
    }
}
