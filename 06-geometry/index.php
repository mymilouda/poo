<?php

require_once 'Form2D.php';
require_once 'Rectangle.php';
require_once 'Square.php';
require_once 'Circle.php';
require_once 'Form.php';

$rectangle = new Rectangle(5, 10);
$square = new Square(5); // Un carré étend la classe rectangle
$circle = new Circle(5); // L'argument est le rayon du cercle

echo $rectangle->area() . ' cm2<br />'; // Affiche 50
echo $rectangle->perimeter() . ' cm2<br />'; // Affiche 30

echo $square->area() . '<br />'; // Affiche 25
echo $square->perimeter() . '<br />'; // Affiche 20

echo $circle->area() . '<br />'; // Affiche 78.54
echo $circle->perimeter() . '<br />'; // Affiche 31.42

// On veut créer une forme (polygone) quelconque
$form = new Form();
$form
    ->add($rectangle) // On ajoute le rectange dans la forme
    ->add($square) // On ajoute le carré dans la forme
    ->add($circle) // On ajoute le cercle dans la forme
    ->add(new Circle(6)) // On ajoute un autre cercle dans la forme
;

echo $form->area() . '<br />'; // Affiche 153.54 (Aire totale de toutes les formes)
echo $form->perimeter() . '<br />'; // Affiche 81.42 (Périmètre de toutes les formes)
