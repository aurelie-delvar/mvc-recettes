<h1>Page des desserts pour atteindre l'orgasme</h1>

<?php foreach ($orgasms as $orgasm) : ?>

<h2><?= $orgasm->getName() ?></h2>
<img src="<?= $baseURI . $orgasm->getImage() ?>" />
<p><?= $orgasm->getDescription() ?></p>

<?php endforeach; ?>