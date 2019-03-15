<?php

class Rectangle 
{
    protected $rectangle;
    protected $perimeter;
    protected $area;
    protected $square;

    public function __construct($rectangle)
    {
        $this->rectangle = $rectangle;
    }

    function  area()
    {
        return 50 . ' Surface ';
    }

    function  perimeter()
    {
        return 30 . ' Perimeter ';
    }
}