<h1>Blog de recettes</h1>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= $router->generate('home') ?>">Accueil</a></li>
        <li class="breadcrumb-item"><a href="#">Recettes de saison</a></li>
        <li class="breadcrumb-item active" aria-current="page">Autre-rubrique</li>
    </ol>
</nav>

<div class="container-fluid">
<div class="row">

<?php foreach ($recipes as $recipe) { ?>

    <div class="col-sm-3 mb-3 mb-sm-0">
        <div class="card h-100" style="max-width: 400px;">
            <a href="<?= $router->generate('recipe', ['id' => $recipe->getId()]) ?>">
            <img src="<?= $baseURI . $recipe->getImage() ?>" class="card-img-top" style="height: 300px;" alt="Photo de <?= $recipe->getName() ?>">
            </a>
                <div class="card-body">
                <a href="<?= $router->generate('recipe', ['id' => $recipe->getId()]) ?>">
                <h5 class="card-title">Recette de : <?= $recipe->getName() ?></h5>
                </a>
                <p class="card-text"><?= $recipe->getDescription() ?></p>
                </div>
        </div>
    </div>

<?php } ?>

</div>
</div>