<?php

class Warrior extends Character
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->strenght *= 2;
    }
}
