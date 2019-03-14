<?php

class Cat 
{
    var $name;
    var $type;
    var $fur;

    function cry()
    {
        return 'Miaou';
    }

    function eat()
    {
        return $this->name . ' mange';
    }
}

