<h1>Plats principaux</h1>

<?php foreach ($inters as $inter) : ?>

<h2><?= $inter->getName() ?></h2>
<img src="<?= $baseURI . $inter->getImage() ?>" />
<p><?= $inter->getDescription() ?></p>

<?php endforeach; ?>