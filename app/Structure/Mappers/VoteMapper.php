<?php

namespace App\Structure\Mappers;

use App\Models\Vote;
use App\Structure\ViewModels\VoteViewModel;

class VoteMapper
{
    public static function modelToViewModel(Vote $model): VoteViewModel
    {
        $viewModel = new VoteViewModel();
        $viewModel->id = $model->id;
        $viewModel->document = $model->document;
        $viewModel->name = $model->name;
        $viewModel->lastname = $model->lastname;
        $viewModel->ip = $model->ip;
        $viewModel->date = $model->date;
        $viewModel->idRound = $model->idRound;
        $viewModel->idSinger = $model->idSinger;
        return $viewModel;
    }

    public static function viewModelToModel(VoteViewModel $viewModel, Vote $model): Vote
    {
        $model->id = $viewModel->id;
        $model->document = $viewModel->document;
        $model->name = $viewModel->name;
        $model->lastname = $viewModel->lastname;
        $model->ip = $viewModel->ip;
        $model->date = $viewModel->date;
        $model->idRound = $viewModel->idRound;
        $model->idSinger = $viewModel->idSinger;
        return $model;
    }

    public static function listModelToListViewModel($list)
    {
        $data = [];
        foreach ($list as $item) array_push($data, self::modelToViewModel($item));
        return $data;
    }
}
