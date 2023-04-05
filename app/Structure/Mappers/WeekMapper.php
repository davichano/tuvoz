<?php

namespace App\Structure\Mappers;

use App\Models\Week;
use App\Structure\ViewModels\WeekViewModel;

class WeekMapper
{
    public static function modelToViewModel(Week $model)
    {
        $answer = new WeekViewModel();
        $answer->id = $model->id;
        $answer->name = $model->name;
        $answer->startDate = $model->startDate;
        $answer->endDate = $model->endDate;
        $answer->state = $model->state;
        $answer->rounds = RoundMapper::listModelToListViewModel($model->rounds);
        return $answer;
    }

    public static function viewModelToModel(WeekViewModel $viewModel, Week $model)
    {
        $model->id = $viewModel->id;
        $model->name = $viewModel->name;
        $model->startDate = $viewModel->startDate;
        $model->endDate = $viewModel->endDate;
        $model->state = $viewModel->state ;
        return $model;
    }

    public static function listModelToListViewModel($list)
    {
        $data = [];
        foreach ($list as $item) array_push($data, self::modelToViewModel($item));
        return $data;
    }
}

