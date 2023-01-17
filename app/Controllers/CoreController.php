<?php

namespace App\Controllers;

class CoreController
{
    public function show($viewName, $viewData = [])
    {

        extract($viewData);

        global $router;
        
         // $_SERVER['BASE_URI'] est récupéré grâce à notre .htaccess
         $baseURI = $_SERVER['BASE_URI'] ?? '';
        
        require_once __DIR__ . '/../views/useful/header.tpl.php';
        require_once __DIR__ . "/../views/$viewName.tpl.php";
        require_once __DIR__ . '/../views/useful/footer.tpl.php';

    }
}