<?php

class Character
{
    private $name;
    protected $health = 100;
    protected $strenght = 10;
    protected $mana = 10;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attack($character)
    {
        // L'attaque dépend de la force du personnage
        // attaquant.
        $character->health -= $this->strenght;
    }
}
