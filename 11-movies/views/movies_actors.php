<?php

require_once __DIR__ . '/header.php'; ?>

<h1>Ajouter un acteur dans un film</h1>

<form method="post">
    <select name="movie" id="movie"></select>
    <select name="actor" id="actor"></select>
    <button class="btn btn-primary btn-block">Ajouter</button>
</form>

<?php

/**
 * Etape 1: Récupérer tous les films en base de données et générer les options du select#movie avec la bonne value.
 * Etape 2: Faire la même chose avec les acteurs
 * Etape 3: On sélectionne un film, on sélectionne un acteur, on exécute le formulaire et à ce moment là on ajoute un lien entre l'id du film sélectionné et l'id de l'acteur sélectionné dans la table movie_has_actor.
 */

require_once __DIR__ . '/footer.php';
