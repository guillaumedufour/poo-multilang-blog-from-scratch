<?php

class Authors
{
    public $id;
    public $firstname;
    public $lastname;

    public function __construct($id)
    {
        global $db;
        $reqAuthor = $db->prepare('SELECT * FROM authors WHERE id = ?');
        $reqAuthor->execute([str_secur($id)]);
        $data = $reqAuthor->fetch();

        $this->id = $id;
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
    }


    static function getAllAuthors()
    {
        global $db;

        $reqAuthors = $db->prepare('SELECT * FROM authors');
        $reqAuthors->execute([]);

        return $reqAuthors->fetchAll();
    }


}