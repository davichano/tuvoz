<?php

namespace App\Structure\ViewModels;

class SingerViewModel
{
    public $id;
    public $document;
    public $name;
    public $lastname;
    public $picture;
    public $facebook;
    public $instagram;
    public $description;
    public $state;
    public $idRound;

    public function __construct(array $properties = array())
    {
        $this->id = 0;
        foreach ($properties as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
