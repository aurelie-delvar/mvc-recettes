<?php

// ici les requires ou l'autoload
require_once __DIR__.'/../vendor/autoload.php';

// initialisation d'altorouter
$router = new AltoRouter();

// chemin de base, base URI ou RIEN
$router->setBasePath($_SERVER['BASE_URI']) ?? '';

// var_dump($_SERVER);

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
    '/entrees',
    [
        'controller' => 'DishesController',
        'methode' => 'categories',
    ],
    'entrance',
);

// page des plats
$router->map(
    'GET',
    '/plats-principaux',
    [
        'controller' => 'DishesController',
        'methode' => 'categories',
    ],
    'maindish',
);

// page des desserts
$router->map(
    'GET',
    '/desserts',
    [
        'controller' => 'DishesController',
        'methode' => 'categories',
    ],
    'desert',
);

// page contact
$router->map(
    'GET',
    '/contact',
    [
        'controller' => 'MainController',
        'methode' => 'contact',
    ],
    'contact',
);

// dispatch sur un controller avec match
$match = $router->match();

if($match){

    $controllerName = $match['target']['controller'];

    $controllerFQCN = 'App\\Controllers\\' . $controllerName;
    $controller = new $controllerFQCN();

    $method = $match['target']['methode'];

    $controller->$method($match['params']);

} else {

    $controller = new App\Controllers\ErrorController();
    $controller->error404();

}