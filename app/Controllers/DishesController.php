<?php

namespace App\Controllers;

use App\Models\Recipe;

// require_once __DIR__ . '/../Controllers/CoreController.php';
// require_once __DIR__ . '/../Controllers/ErrorController.php';

class DishesController extends CoreController
{

    public function categories()
    {
        $entrances = Recipe::findAllEntrances();
        $maindishes = Recipe::findAllMaindishes();
        $deserts = Recipe::findAllDeserts();

        $this->show('dishes/categories', [
            'entrances' => $entrances,
            'maindishes' => $maindishes,
            'deserts' => $deserts,
        ]);
    }

    // public function maindish()
    // {
        

    //     $this->show('dishes/maindish', [
            
    //     ]);
    // }

    // public function desert()
    // {
        

    //     $this->show('dishes/desert', [
            
    //     ]);
    // }

}