<?php

require_once __DIR__ . '/header.php';

/**
 * Ajouter un acteur
 */

// On instancie un objet Actor
$actor = new Entity\Actor();
// On remplit l'objet avec les données de la requête POST
$actor->hydrate($_POST);

// On vérifie si les données sont valides
if ($actor->isValid()) {
    $actorManager = new Manager\ActorManager();
    // On ajoute les données en base de données
    $actorManager->add($actor);
}

?>

<form method="post" action="">
    <div class="form-group">
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" id="firstname" class="form-control">
    </div>
    <div class="form-group">
        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" id="lastname" class="form-control">
    </div>
    <div class="form-group">
        <label for="birthday">Date de naissance :</label>
        <input type="date" name="birthday" id="birthday" class="form-control">
    </div>

    <button class="btn btn-primary btn-block">Ajouter</button>
</form>

<?php require_once __DIR__ . '/footer.php';