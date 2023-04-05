<?php

namespace App\Structure\ViewModels;

class RoundViewModel
{
    public $id;
    public $name;
    public $startDate;
    public $endDate;
    public $idWeek;
    public $singers;

    public function __construct(array $properties = array())
    {
        $this->id = 0;
        foreach ($properties as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
