<?php

require_once 'Character.php';
require_once 'Warrior.php';
require_once 'Hunter.php';
require_once 'Magus.php';
require_once 'Game.php';

/**
 * On cherche à ranger nos classes dans le namespace Webforce\RPG.
 * Modifiez les classes pour que le code fonctionne à nouveau avec le système de namespace.
 */

// On crée une partie
$game = new Webforce\RPG\Game();

// On crée les personnages
// La classe Character aura le namespace Webforce\RPG\Utils
$aragorn = new Webforce\RPG\Character\Warrior('Aragorn');
$legolas = new Webforce\RPG\Character\Hunter('Legolas');
$gandalf = new Webforce\RPG\Character\Magus('Gandalf');

// On ajoute les personnages au jeu
$game
    ->addPlayer($aragorn)
    ->addPlayer($legolas)
    ->addPlayer($gandalf)
;
var_dump($game);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO</title>
</head>
<body>
    <?php
        $aragorn->attack($legolas); // Enlève X points de vie en fonction de la force
        $legolas->rangedAttack($gandalf); // Enlève X points de vie
        $gandalf->castSpell($aragorn); // Enlève X points de vie en fonction du mana
        $legolas->attack($gandalf);
        var_dump($game->getPlayers());
    ?>
</body>
</html>
