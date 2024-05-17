<?php

class Warrior extends Player
{

   private string $weapon;

   // limits that allow +2 / -2 movement
   protected const MAX_POS = 8;
   protected const MIN_POS = 1;

   public function __construct($name, $posX, $posY, $weapon)
   {
      parent::__construct($name, $posX, $posY);
      $this->weapon = $weapon;
   }

   public function attackWithWeapon()
   {
      return "The warrior $this->name attacks with the $this->weapon!";
   }

   public function move($direction, int $step = 2)
   {
      switch ($direction) {
         case 'up':
            if ($this->posY < self::MAX_POS) {
               $this->posY += $step;
            } else {
               return "You can't run up";
            }
            break;
         case 'down':
            if ($this->posY > self::MIN_POS) {
               $this->posY -= $step;
            } else {
               return "You can't run down";
            }
            break;
         case 'left':
            if ($this->posX > self::MIN_POS) {
               $this->posX -= $step;
            } else {
               return "You can't run to the left";
            }
            break;
         case 'right':
            if ($this->posX < self::MAX_POS) {
               $this->posX += $step;
            } else {
               return "You can't run to the right";
            }
            break;
      }
      return "You runned to the position ($this->posX, $this->posY)";
   }
}
