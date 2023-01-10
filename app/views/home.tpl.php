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