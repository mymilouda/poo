<?php

/**
 * L'interface permet d'obliger une classe à devenir une forme 2D car elle doit
 * implémenter les méthodes area et perimeter.
 */
interface Form2D
{
    public function area();
    public function perimeter();
}