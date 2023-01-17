<?php

namespace App\Controllers;

use App\Models\Recipe;

// require_once __DIR__ . '/../Controllers/CoreController.php';
// require_once __DIR__ . '/../Controllers/ErrorController.php';

class DishesController extends CoreController
{

    public function preli()
    {
        $prelis = Recipe::findAllPrelis();
        
        $this->show('dishes/preli', [
            'prelis' => $prelis,
        ]);
    }

    public function intercourse()
    {
        $inters = Recipe::findAllIntercourses();

        $this->show('dishes/intercourse', [
            'inters' => $inters,
        ]);
    }

    public function orgasm()
    {
        $orgasms = Recipe::findAllOrgasms();

        $this->show('dishes/orgasme', [
            'orgasms' => $orgasms,
        ]);
    }

}