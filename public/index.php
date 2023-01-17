<?php

// ici les requires ou l'autoload
require_once __DIR__.'/../vendor/autoload.php';
// require_once __DIR__ . '/../app/Models/Database.php';
// require_once __DIR__ . '/../app/Models/Recipe.php';

// initialisation d'altorouter
$router = new AltoRouter();

// chemin de base, base URI ou RIEN
$router->setBasePath($_SERVER['BASE_URI']) ?? '';

// création des routes avec map

// la page d'accueil
$router->map(
    'GET',
    '/', // l'index
    [
        'controller' => 'MainController',
        "methode" => "home",
    ],
    'home', // pour réécrire l'url
);

// les autres pages recettes variables

$router->map(
    'GET',
    '/recette/[i:id]',
    [
        'controller' => 'MainController',
        'methode' => 'recette',
    ],
    'recipe',
);

// page des entrées
$router->map(
    'GET',
    '/preliminaires',
    [
        'controller' => 'DishesController',
        'methode' => 'preli',
    ],
    'preli',
);

// page des plats
$router->map(
    'GET',
    '/intercourse',
    [
        'controller' => 'DishesController',
        'methode' => 'intercourse',
    ],
    'intercourse',
);

// page des desserts
$router->map(
    'GET',
    '/orgasme',
    [
        'controller' => 'DishesController',
        'methode' => 'orgasm',
    ],
    'orgasme',
);

// dispatch sur un controller avec match
$match = $router->match();

if($match){

    $controllerName = $match['target']['controller'];

    // require_once __DIR__."/../app/Controllers/$controllerName.php";

    $controllerFQCN = 'App\\Controllers\\' . $controllerName;
    $controller = new $controllerFQCN();

    $method = $match['target']['methode'];

    // require_once __DIR__ . "/../app/Controllers/$controllerName.php";

    $controller->$method($match['params']);

} else {

    // require_once __DIR__ . '/../app/Controllers/ErrorController.php';

    // (new ErrorController())->error404();

    $controller = new App\Controllers\ErrorController();
    $controller->error404();

}