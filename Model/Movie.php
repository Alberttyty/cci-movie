<?php

class Movie
{
    public $id;
    public $title;
    public $description;
    public $image;

    function __construct($id, $title, $description, $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
    }
}
