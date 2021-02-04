<?php

class Author
{
    public $id;
    public $firstname;
    public $lastname;

    function __construct($id, $firstname, $lastname)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}
