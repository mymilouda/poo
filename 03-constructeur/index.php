<?php
require_once 'Car.php';

/**
 * Une voiture posséde 4 roues, une coleur, une marque et un modèle. (4 attributs)
 * Une voiture peut rouler et klaxonner.
 */

$car = new Car('Renault', 'Clio');

$car->setColor('rouge');

 echo $car->drive(); // Affiche "La Renault Clio roule."
 echo $car->klaxon(); // Affiche "La voiture rouge klaxonne."

$car->color = 'rouge';
$car->marque = 'Renault';
$car->modele = 'clio';

// On peut afficher la valeur d'une propriété
echo 'La Renault  ' . $car->modele . ' ' . $car->roule();




 var_dump($car);
 
//  Utilisation de this 
echo $car->klaxon();
echo $car->drive();
