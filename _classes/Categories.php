<?php

class Categories
{

    public $id;
    public $name;

    public function __construct($id)
    {
        global $db;

        $reqCategory = $db->prepare('SELECT * FROM categories WHERE id = ?');
        $reqCategory->execute([str_secur($id)]);
        $data = $reqCategory->fetch();

        $this->id = $id;
        $this->name = $data['name'];

    }


    static function getAllCategories()
    {
        global $db;

        $reqCategories = $db->prepare('SELECT * FROM categories');
        $reqCategories->execute([]);

        return $reqCategories->fetchAll();
    }

}