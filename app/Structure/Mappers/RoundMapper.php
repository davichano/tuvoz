<?php

namespace App\Structure\Mappers;

use App\Models\Round;
use App\Structure\ViewModels\RoundViewModel;

class RoundMapper
{
    public static function modelToViewModel(Round $model)
    {
        $answer = new RoundViewModel();
        $answer->id = $model->id;
        $answer->name = $model->name;
        $answer->startDate = $model->startDate;
        $answer->endDate = $model->endDate;
        $answer->idWeek = $model->idWeek;
        $answer->singers = SingerMapper::listModelToListViewModel($model->singers);
        return $answer;
    }

    public static function viewModelToModel(RoundViewModel $viewModel, Round $model)
    {
        $model->id = $viewModel->id;
        $model->name = $viewModel->name;
        $model->startDate = $viewModel->startDate;
        $model->endDate = $viewModel->endDate;
        $model->idWeek = $viewModel->idWeek;
        return $model;
    }

    public static function listModelToListViewModel($list)
    {
        $data = [];
        foreach ($list as $item) array_push($data, self::modelToViewModel($item));
        return $data;
    }
}
