<?php

namespace App\Structure\Mappers;

use App\Models\Singer;
use App\Structure\ViewModels\SingerViewModel;

class SingerMapper
{
    public static function modelToViewModel(Singer $model): SingerViewModel
    {
        $viewModel = new SingerViewModel();
        $viewModel->id = $model->id;
        $viewModel->document = $model->document;
        $viewModel->name = $model->name;
        $viewModel->lastname = $model->lastname;
        $viewModel->picture = $model->picture;
        $viewModel->facebook = $model->facebook;
        $viewModel->instagram = $model->instagram;
        $viewModel->description = $model->description;
        $viewModel->state = $model->state;
        $viewModel->idRound = $model->idRound;
        return $viewModel;
    }

    public static function viewModelToModel(SingerViewModel $viewModel, Singer $model): Singer
    {
        $model->id = $viewModel->id;
        $model->document = $viewModel->document;
        $model->name = $viewModel->name;
        $model->lastname = $viewModel->lastname;
        $model->picture = $viewModel->picture;
        $model->facebook = $viewModel->facebook;
        $model->instagram = $viewModel->instagram;
        $model->description = $viewModel->description;
        $model->state = $viewModel->state;
        $model->idRound = $viewModel->idRound;
        return $model;
    }

    public static function listModelToListViewModel($list)
    {
        $data = [];
        foreach ($list as $item) array_push($data, self::modelToViewModel($item));
        return $data;
    }
}
