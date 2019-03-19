<?php

require_once __DIR__ . '/../config/autoload.php';

$uri = $_SERVER['PATH_INFO'] ?? '/';

// On teste si on est sur la page d'accueil
if ($uri === '/') {
    require_once __DIR__ . '/../views/home.php';
} else if ($uri === '/acteurs') {
    require_once __DIR__ . '/../views/actors.php';
} else if ($uri === '/acteurs/ajouter') {
    require_once __DIR__ . '/../views/actors_add.php';
} else if ($uri === '/films/ajouter') {
    require_once __DIR__ . '/../views/movies_add.php';
} else if ($uri === '/films/acteurs') {
    require_once __DIR__ . '/../views/movies_actors.php';
}

/**
 * Ajouter la partie Acteur :
 *
 * Etape 1: Si la route est "/acteurs" on inclue un fichier "actors.php" dans "views/"
 * Etape 2: Créer la classe Actor avec les bons attributs
 *          Ajouter une méthode getFullName() qui renvoie le nom complet de l'acteur
 *          Ajouter une méthode getAge() qui renvoie l'âge de l'acteur
 * Etape 3: Ajouter des acteurs dans la base de données
 * Etape 4: Créer la classe ActorManager avec une méthode findAll() qui renvoie un tableau d'instance de Actor.
 */
