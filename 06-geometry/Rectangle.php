<?php

class Rectangle implements Form2D
{
    protected $width;
    protected $height;

    /**
     * On construit le rectangle avec une longueur et une largeur.
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }

    public function perimeter()
    {
        return $this->width * 2 + $this->height * 2;
    }
}
