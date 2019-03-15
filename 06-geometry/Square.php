<?php

class Square extends Rectangle
{
    /**
     * On construit un rectangle avec la même longueur et la même largeur.
     */
    public function __construct($width)
    {
        parent::__construct($width, $width);
    }
}
