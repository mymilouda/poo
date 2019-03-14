<?php

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
