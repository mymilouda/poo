<?php

class Cat 
{
    private $name;
    private $type;
    private $fur;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if(!is_string($name)) {
            throw new Exception('Le nom n\'est pas valide');
        }
        $this->name = $name;
    }
}