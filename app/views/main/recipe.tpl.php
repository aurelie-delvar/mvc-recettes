<!-- Single Recipe Section Begin -->
    <section class="single-page-recipe spad">
        <div class="recipe-top">
            <div class="container-fluid">
                <div class="recipe-title">
                    <!-- <span>~ 5 ingredients / 20 minutes / easy / japanese/ recipe</span> -->
                    <h2><?= $recipe->getName() ?></h2>
                    <!-- <ul class="tags">
                        <li>Desert</li>
                        <li>Asian</li>
                        <li>Spicy</li>
                    </ul> -->
                </div>
                <img src="<?= $baseURI . $recipe->getImage() ?>" alt="<?= $recipe->getName() ?>" style="display:block; margin: auto;">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ingredients-item">
                        <div class="intro-item">
                            <img src="<?= $baseURI . $recipe->getImage() ?>" alt="">
                            <h2><?= $recipe->getName() ?></h2>
                            <!-- TODO: gérer le rating -->
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <!-- <div class="reviews">4.9 from 25 reviews</div> -->
                            <div class="recipe-time">
                                <ul>
                                    <li>Préparation : <span>10 min</span></li>
                                    <li>Cuisson : <span>10 min</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ingredient-list">
                            <div class="list-item">
                                <h5>Ingredients</h5>
                                <div class="salad-list">
                                    <p><?= $recipe->getItems() ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Description</h3>
                            <p><?= $recipe->getDescription() ?></p>
                        </div>
                        <div class="instruction-list">
                            <h3>Instructions</h3>
                            <ul>
                                <li>
                                    <span>01.</span>
                                    <?= explode("ÉTAPE 1", $recipe->getInstructions())[1] ?>
                                </li>
                            </ul>
                        </div>
                        <div class="notes">
                            <h3>Notes</h3>
                            <div class="notes-item">
                                <span>i</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in
                                    sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin neque
                                    sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultricies
                                    volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at elit
                                    condimentum viverra.</p>
                            </div>
                            <div class="notes-item">
                                <span>i</span>
                                <p>Donec in sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin
                                    neque sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non,
                                    ultricies volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at
                                    elit condimentum viverra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Recipe Section End -->
