<?php

namespace App\Structure\Services;

use App\Structure\Mappers\VoteMapper;
use App\Structure\Repositories\VoteRepository;
use App\Structure\ViewModels\VoteViewModel;
use Illuminate\Support\Facades\Date;

class VoteService
{
    protected $voteRepository;

    /**
     * @param VoteRepository $voteRepository
     */
    public function __construct(VoteRepository $voteRepository)
    {
        date_default_timezone_set('America/Lima');
        $this->voteRepository = $voteRepository;
    }

    public function getById($id)
    {
        return VoteMapper::modelToViewModel($this->voteRepository->getById($id));
    }

    public function save($data)
    {
        $vm = new VoteViewModel($data);
        $vm->date = date("Y-m-d h:i:s");
        return VoteMapper::modelToViewModel($this->voteRepository->save(VoteMapper::viewModelToModel($vm, $this->voteRepository->getById($vm->id))));
    }

    public function getCountByRound($idRound)
    {
        return $this->voteRepository->countVotes($idRound);
    }
}
