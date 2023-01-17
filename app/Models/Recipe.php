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

    public static function findAllPrelis()
    {
        $pdo = Database::getPDO();
        $query = $pdo->query("
        SELECT * FROM recipe
        WHERE type = 'entrée'
        ");
        $prelis = $query->fetchAll(\PDO::FETCH_CLASS, 'App\\Models\\Recipe');

        return $prelis;
    }

    public static function findAllIntercourses()
    {
        $pdo = Database::getPDO();
        $query = $pdo->query("
        SELECT * FROM recipe
        WHERE type = 'plat'
        ");
        $inters = $query->fetchAll(\PDO::FETCH_CLASS, 'App\\Models\\Recipe');

        return $inters;
    }

    public static function findAllOrgasms()
    {
        $pdo = Database::getPDO();
        $query = $pdo->query("
        SELECT * FROM recipe
        WHERE type = 'dessert'
        ");
        $orgasms = $query->fetchAll(\PDO::FETCH_CLASS, 'App\\Models\\Recipe');

        return $orgasms;
    }
}