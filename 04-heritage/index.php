<?php

require_once 'Character.php';
require_once 'Warrior.php';
require_once 'Hunter.php';
require_once 'Magus.php';

$aragorn = new Warrior('Aragorn');
$legolas = new Hunter('Legolas');
$gandalf = new Magus('Gandalf');

var_dump($aragorn);
var_dump($legolas);
var_dump($gandalf);

$aragorn->attack($legolas); // Enlève X points de vie en fonction de la force
$legolas->rangedAttack($gandalf); // Enlève X points de vie
$gandalf->castSpell($aragorn); // Enlève X points de vie en fonction du mana
$legolas->attack($gandalf);
$gandalf->attack($aragorn);
$aragorn->attack($legolas);
$aragorn->attack($legolas);
$aragorn->attack($legolas);

var_dump($aragorn);
var_dump($legolas);
var_dump($gandalf);
