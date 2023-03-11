<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recettes</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= $baseURI ?>/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $baseURI ?>/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $baseURI ?>/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= $baseURI ?>/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $baseURI ?>/assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="<?= $router->generate('home') ?>"><img src="<?= $baseURI ?>/assets/img/logo.png" alt="logo du site Yummy"></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="<?= $router->generate('home') ?>">Accueil</a></li>
                        <li><a href="<?= $router->generate('entrance') ?>">Entrées</a></li>
                        <li><a href="<?= $router->generate('maindish') ?>">Plats</a></li>
                        <li><a href="<?= $router->generate('desert') ?>">Desserts</a></li>
                        <li><a href="<?= $router->generate('contact') ?>">Contact</a></li>
                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
<!-- Header End -->

<?php if($viewName !== 'main/index') { ?>
<!-- Hero Search Section Begin -->
<div class="hero-search set-bg" data-setbg="<?= $baseURI ?>/assets/img/search-bg.jpg">
    <div class="container">
        <div class="filter-table">
            <form action="#" class="filter-search">
                <input type="text" placeholder="Search recipe">
                <select id="category">
                    <option value="">Category</option>
                </select>
                <select id="tag">
                    <option value="">Tags</option>
                </select>
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
</div>
<!-- Hero Search Section End -->
<?php } ?>