<?php

require_once 'Circle.php';
require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle(5, 10);
$square = new Square(5); // Un carré étend la classe rectangle
$circle = new Circle(5); // L'argument est le rayon du cercle

echo $rectangle->area() . '<br />'; // Affiche 50
echo $rectangle->perimeter() . '<br /><br>'; // Affiche 30

echo $square->area() . '<br />'; // Affiche 25
echo $square->perimeter() . '<br /><br>'; // Affiche 20

echo $circle->area() . '<br />'; // Affiche 78.54
echo $circle->perimeter() . '<br />'; // Affiche 31.42

$form = new Form();
$form
    ->add($rectangle)
    ->add($square)
    ->add($circle)
;

echo $form->area() . '<br />'; // Affiche 153.54
echo $form->perimeter() . '<br />'; // Affiche 81.42