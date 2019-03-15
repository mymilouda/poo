<?php

require_once 'Character.php';
require_once 'Warrior.php';
require_once 'Hunter.php';
require_once 'Magus.php';
require_once 'Game.php';

// On crée une partie
$game = new Game();

// On crée les personnages
$aragorn = new Warrior('Aragorn');
$legolas = new Hunter('Legolas');
$gandalf = new Magus('Gandalf');

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
