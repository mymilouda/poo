<?php

require_once __DIR__ . '/header.php';

/**
 * Récupérer tous les acteurs
 */

$movieManager = new Manager\MovieManager();
$movies = $movieManager->findAll();

?>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Synopsis</th>
            <th>Released_at</th>
            <th>Category</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($movies as $movie) { ?>
            <tr>
                <td><?= $movie->getTitle(); ?></td>
                <td><?= $movie->getSynopsis(); ?></td>
                <td><?= $movie->getReleased_at(); ?></td>
                <td><?= $movie->getCategory(); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>



<?php require_once __DIR__ . '/footer.php';
