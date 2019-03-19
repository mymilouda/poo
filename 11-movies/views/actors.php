<?php

require_once __DIR__ . '/header.php';

/**
 * Récupérer tous les acteurs
 */

$actorManager = new Manager\ActorManager();
$actors = $actorManager->findAll();

?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Âge</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($actors as $actor) { ?>
            <tr>
                <td><?= $actor->getId(); ?></td>
                <td><?= $actor->getFullName(); ?></td>
                <td><?= $actor->getAge(); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>



<?php require_once __DIR__ . '/footer.php';
