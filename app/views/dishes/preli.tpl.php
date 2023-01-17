<h1>Commencer en douceur</h1>

<?php foreach ($prelis as $entree) : ?>

    <h2><?= $entree->getName() ?></h2>
    <img src="<?= $baseURI . $entree->getImage() ?>" />
    <p><?= $entree->getDescription() ?></p>

<?php endforeach; ?>