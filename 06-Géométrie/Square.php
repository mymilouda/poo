<?php

class Square extends Rectangle
{
    public function __construct($rectangle)
    {
        parent::__construct($rectangle);
        $this->square /= 2;
    }

    // function  area()
    // {
    //     return 25;
    // }

    // function  perimeter()
    // {
    //     return 20;
    // }
}