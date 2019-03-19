<?php

namespace Webforce\RPG\Character;

use  Webforce\RPG\utils\Character;

class Warrior extends Character
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->strenght *= 2;
    }
}
