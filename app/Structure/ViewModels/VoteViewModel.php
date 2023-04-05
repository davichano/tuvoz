<?php

namespace App\Structure\ViewModels;

class VoteViewModel
{
    public $id;
    public $document;
    public $name;
    public $lastname;
    public $ip;
    public $date;
    public $idRound;
    public $idSinger;

    public function __construct(array $properties = array())
    {
        $this->id = 0;
        foreach ($properties as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
