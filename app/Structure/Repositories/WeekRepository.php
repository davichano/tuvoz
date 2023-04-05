<?php

namespace App\Structure\Repositories;

use App\Models\Week;

class WeekRepository
{
    public function getById($id)
    {
        $data = Week::where('id', (int)$id)->first();
        if (!$data) $data = new Week();
        return $data;
    }

    public function getActive()
    {
        $data = Week::first();
        if (!$data) $data = new Week();
        return $data;
    }

    public function getAll()
    {
        return Week::get();
    }
}
