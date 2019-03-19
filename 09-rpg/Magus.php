<?php

namespace Webforce\RPG\Character;

use  Webforce\RPG\utils\Character;

class Magus extends Character
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->mana *= 2;
    }

    public function castSpell($character)
    {
        $character->health -= $this->mana;
    }
}
