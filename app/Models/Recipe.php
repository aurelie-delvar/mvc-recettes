<?php

class Recipe
{
    private $id;
    private $name;
    private $description;
    private $image;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }


    public function getImage()
    {
        return $this->image;
    }

    public function findAll()
    {
        $pdo = Database::getPDO();
        $query = $pdo->query('
        SELECT * 
        FROM recipe
        ');
        $recipes = $query->fetchAll(PDO::FETCH_CLASS, 'Recipe');

        return $recipes;
    }

    public function find($id)
    {
        $pdo = Database::getPDO();
        $query = $pdo->query('
        SELECT *
        FROM recipe
        WHERE id = ' . $id);
        $recipe = $query->fetchObject('Recipe');

        return $recipe;
    }

}