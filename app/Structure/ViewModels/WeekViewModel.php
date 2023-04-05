<?php

namespace App\Structure\ViewModels;

class WeekViewModel
{
    public $id;
    public $name;
    public $startDate;
    public $endDate;
    public $state;
    public $rounds;

    public function __construct(array $properties = array())
    {
        $this->id = 0;
        foreach ($properties as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
