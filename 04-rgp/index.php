<?php

include_once 'Personnage.php';

$perssonage = new Personnage('');

$aragorn = new Warrior('Aragorn');
$legolas = new Hunter('Legolas');
$gandalf = new Magus('Gandalf');



$aragorn->attack($legolas); // Enlève X points de vie en fonction de la force
$legolas->rangedAttack($gandalf); // Enlève X points de vie
$gandalf->castSpell($aragorn); // Enlève X points de vie en fonction du mana

