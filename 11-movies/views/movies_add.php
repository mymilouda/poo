<?php

require_once __DIR__ . '/header.php';

/**
 * Ajouter un movie
 */

// On instancie un objet Movie
$movie = new Entity\Movie();
// On remplit l'objet avec les données de la requête POST
$movie->hydrate($_POST);

// On vérifie si les données sont valides
if ($movie->isValid()) {
    $movieManager = new Manager\MovieManager();
    // On ajoute les données en base de données
    $movieManager->add($movie);
}

?>

<form method="post" action="">
    <div class="form-group">
        <label for="title">Title :</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="synopsis">Synopsis :</label>
        <input type="text" name="synopsis" id="synopsis" class="form-control">
    </div>
    <div class="form-group">
        <label for="released_at">Date de réalisation :</label>
        <input type="date" name="released_at" id="released_at" class="form-control">
    </div>
    <div class="form-group">
        <label for="category">Category :</label>
        <input type="text" name="category" id="category" class="form-control">
    </div>

    <button class="btn btn-primary btn-block">Ajouter</button>
</form>

<?php require_once __DIR__ . '/footer.php';