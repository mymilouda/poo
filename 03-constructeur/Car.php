<?php

class Car 
{
    var $color;
    var $marque;
    var $modele;

    function roule()
    {
        return 'roule';
    }

    function klaxon()
    {
        return   ' La Voiture' . ' ' . $this->color  . '  klaxonne <br><br>';
    }

    function drive()
    {
        return   ' La Renault' . ' ' . $this->modele  . '  roule <br><br>';
    }

    public function setColor($color)
    {
        if(!is_string($color)) {
            throw new Exception('');
        }
        $this->coleur = $color;
    }
}
