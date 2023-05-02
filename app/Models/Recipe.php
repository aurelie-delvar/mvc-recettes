<?php

namespace App\Models;

use PDO;
use App\Models\Database;

class Recipe
{
    private $id;
    private $name;
    private $description;
    private $image;
    private $items;
    private $instructions;

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


    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    public function getInstructions()
    {
        return $this->instructions;
    }

    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }

    public function findAll()
    {
        $pdo = Database::getPDO();
        $query = $pdo->query('
        SELECT * 
        FROM recipe
        ');
        $recipes = $query->fetchAll(\PDO::FETCH_CLASS, 'App\Models\Recipe');

        return $recipes;
    }

    public function find($id)
    {
        $pdo = Database::getPDO();
        $query = $pdo->query('
        SELECT *
        FROM recipe
        WHERE id = ' . $id);
        $recipe = $query->fetchObject('App\Models\Recipe');

        return $recipe;
    }

    public static function findAllEntrances()
    {
        $pdo = Database::getPDO();
        $query = $pdo->query("
        SELECT * FROM recipe
        WHERE type = 'entrée'
        ");
        $entrances = $query->fetchAll(\PDO::FETCH_CLASS, 'App\\Models\\Recipe');

        return $entrances;
    }

    public static function findAllMaindishes()
    {
        $pdo = Database::getPDO();
        $query = $pdo->query("
        SELECT * FROM recipe
        WHERE type = 'plat'
        ");
        $maindishes = $query->fetchAll(\PDO::FETCH_CLASS, 'App\\Models\\Recipe');

        return $maindishes;
    }

    public static function findAllDeserts()
    {
        $pdo = Database::getPDO();
        $query = $pdo->query("
        SELECT * FROM recipe
        WHERE type = 'dessert'
        ");
        $deserts = $query->fetchAll(\PDO::FETCH_CLASS, 'App\\Models\\Recipe');

        return $deserts;
    }
}