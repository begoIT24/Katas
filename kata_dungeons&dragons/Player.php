<?php

class Player
{
   protected string $name;
   protected int $posX;
   protected int $posY;
   protected const MAX_POS = 9;
   protected const MIN_POS = 0;

   public function __construct($name, $posX, $posY)
   {
      $this->name = $name;
      $this->posX = $posX;
      $this->posY = $posY;
   }

   public function move($direction, int $step = 1)
   {
      switch ($direction) {
         case 'up':
            if ($this->posY < self::MAX_POS) {
               $this->posY += $step;
            } else {
               return "You can't move up";
            }
            break;
         case 'down':
            if ($this->posY > self::MIN_POS) {
               $this->posY -= $step;
            } else {
               return "You can't move down";
            }
            break;
         case 'left':
            if ($this->posX > self::MIN_POS) {
               $this->posX -= $step;
            } else {
               return "You can't move to the left";
            }
            break;
         case 'right':
            if ($this->posX < self::MAX_POS) {
               $this->posX += $step;
            } else {
               return "You can't move to the right";
            }
            break;
      }
      return "You moved to the position ($this->posX, $this->posY)";
   }
}
