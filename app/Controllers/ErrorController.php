<?php

require_once __DIR__ . '/../Controllers/CoreController.php';

class ErrorController extends CoreController
{
    public function error404()
    {
        http_response_code(404);
        
        $this->show('404');   
    }

}