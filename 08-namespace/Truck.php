<?php

namespace Parking\Pro;

use \Parking\Car;

class Truck
{
    public function __construct()
    {
        $this->cars = [
            new \Parking\Car(),
            new Car()
        ];
    }
}
