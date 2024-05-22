<?php

class Player
{
   protected string $name;
   protected int $posX;
   protected int $posY;
   protected const MAX_POS = 9;
   protected const MIN_POS = 0;
   protected const STEP = 1;


   public function __construct($name, $posX, $posY)
   {
      $this->name = $name;
      $this->posX = $posX;
      $this->posY = $posY;
   }

   public function walk($direction)
   {
      return $this->move($direction, self::STEP);
   }

   protected function move($direction, $step)
   {
      echo "$this->name is going to move. \n";
      switch ($direction) {
         case 'up':
            if (($this->posY + $step) <= self::MAX_POS) {
               $this->posY += $step;
            } else {
               return "You can't move up";
            }
            break;
         case 'down':
            if (($this->posY - $step) >= self::MIN_POS) {
               $this->posY -= $step;
            } else {
               return "You can't move down";
            }
            break;
         case 'left':
            if (($this->posX - $step) >= self::MIN_POS) {
               $this->posX -= $step;
            } else {
               return "You can't move to the left";
            }
            break;
         case 'right':
            if (($this->posX + $step) <= self::MAX_POS) {
               $this->posX += $step;
            } else {
               return "You can't move to the right";
            }
            break;
      }
      return "You moved to the position ($this->posX, $this->posY)";
   }
}
