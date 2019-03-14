<?php

require_once 'Cat.php';

$bianca = new Cat();
$mina = new Cat();


// On peut affecter une valeur aux propriétés
$bianca->name = 'bianca';
$bianca->type = 'chat de gouttière';
$bianca->fur = 'blanc';

// On peut afficher la valeur d'une propriété
echo 'Mon chat s\'appelle ' . $bianca->name . ' et il fait' . $bianca->cry();

$mina->name = 'Mina';

echo 'Mon autre chat s\'appelle ' . $mina->name . ' et il fait ' . $mina->cry() 
 . ' aussi ';

 var_dump($bianca);
 var_dump($mina);

//  Utilisation de this 
echo $bianca->eat();
echo $mina->eat();