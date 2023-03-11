<!-- Page Top Recipe Section Begin -->
<section class="page-top-recipe">
    <div class="container">
        <div class="row">

<!-- Grande image centrale -->
    <div class="col-lg-6 order-lg-2">
        <div class="pt-recipe-item large-item">

        <?php foreach (array_slice($recipes, 0, 1) as $recipe) { ?>
            <a href="<?= $router->generate('recipe', ['id' => $recipe->getId()]) ?>">
            <div class="pt-recipe-img set-bg" data-setbg="<?= $baseURI . $recipe->getImage() ?>">
                <i class="fa fa-plus"></i>
            </div>
            <div class="pt-recipe-text">
                <span>March 10, 2019</span>
                <h3><?= $recipe->getName() ?></h3>
            </div>
            </a>
        <?php } ?>

        </div>
    </div>
<!-- Fin grande image centrale -->

<!-- Images de gauche -->
    <div class="col-lg-3 col-md-6 order-lg-1">

    <?php foreach (array_slice($recipes, 1, 2) as $recipe) { ?>
        <a href="<?= $router->generate('recipe', ['id' => $recipe->getId()]) ?>">
        <div class="pt-recipe-item">
            <div class="pt-recipe-img set-bg" data-setbg="<?= $baseURI . $recipe->getImage() ?>">
                <i class="fa fa-plus"></i>
            </div>
            <div class="pt-recipe-text">
                <h4><?= $recipe->getName() ?></h4>
            </div>
        </div>
        </a>
    <?php } ?>

    </div>
<!-- Fin images gauche -->

<!-- Images de droite -->
<div class="col-lg-3 col-md-6 order-lg-3">

<?php foreach (array_slice($recipes, 3, 2) as $key => $recipe) { ?>
    <a href="<?= $router->generate('recipe', ['id' => $recipe->getId()]) ?>">
    <div class="pt-recipe-item">
        <div class="pt-recipe-img set-bg" data-setbg="<?= $baseURI . $recipe->getImage() ?>">
            <i class="fa fa-plus"></i>
        </div>
        <div class="pt-recipe-text">
            <h4><?= $recipe->getName() ?></h4>
        </div>
    </div>
    </a>
<?php } ?>

</div>
<!-- Fin images de droite -->

        </div>
    </div>
</section>
<!-- Page Top Recipe Section End -->
