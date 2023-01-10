<?php

require_once __DIR__ . '/../Controllers/CoreController.php';
require_once __DIR__ . '/../Controllers/ErrorController.php';

class MainController extends CoreController
{
    public function home()
    {
        $recipeModel = new Recipe();
        $recipes = $recipeModel->findAll();

        $this->show('home', [
            'recipes' => $recipes,
        ]);
    }

    public function recette($params)
    {

        $recipeModel = new Recipe();
        $recipe = $recipeModel->find($params['id']);

        // si la recette indiquée en url n'existe pas
        if (!$recipe) {
            $error = new ErrorController();
            $error->error404();
            return;
        }

        $this->show('recipe', [
            'recipe' => $recipe,
        ]);

    }

}