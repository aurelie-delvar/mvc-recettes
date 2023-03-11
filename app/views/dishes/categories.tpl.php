<!-- Recipe Section Begin -->
<section class="recipe-section spad">
    <div class="container">
        <div class="row">

<?php 
    $url = $_SERVER['REQUEST_URI'];

    if($url == ($baseURI . '/entrees')) {
        $entries = $entrances;
    } elseif ($url == ($baseURI . '/plats-principaux')) {
        $entries = $maindishes;
    } else {
        $entries = $deserts;
    }
    
    foreach ($entries as $entrie) : ?>

            <div class="col-lg-4 col-sm-6">
                <div class="recipe-item">
                    <a href="#"><img src="<?= $baseURI . $entrie->getImage() ?>" alt="<?= $entrie->getName() ?>"></a>
                    <div class="ri-text">
                        <div class="cat-name">Desert</div>
                        <a href="#">
                            <h4><?= $entrie->getName() ?></h4>
                        </a>
                        <p><?= $entrie->getDescription() ?></p>
                    </div>
                </div>
            </div>

    <?php endforeach; ?>
            
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="recipe-pagination">
                    <a href="#" class="active">01</a>
                    <a href="#">02</a>
                    <a href="#">03</a>
                    <a href="#">04</a>
                    <a href="#">Next</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Recipe Section End -->