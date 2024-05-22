<?php

class Warrior extends Player
{

   private string $weapon;
   protected const STEP = 2;

   public function __construct($name, $posX, $posY, $weapon)
   {
      parent::__construct($name, $posX, $posY);
      $this->weapon = $weapon;
   }

   public function attackWithWeapon()
   {
      return "The warrior $this->name attacks with the $this->weapon!";
   }

   public function run($direction)
   {    
      return $this->move($direction, self::STEP);
   }
}
