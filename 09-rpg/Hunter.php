<?php

namespace Webforce\RPG\Character;

use  Webforce\RPG\utils\Character;

class Hunter extends Character
{
    public function rangedAttack($character)
    {
        // Le chasseur enlève 30 de vie
        $character->health -= $this->strenght * 3;
    }
}
