<?php

namespace App\Structure\Services;

use App\Structure\Mappers\WeekMapper;
use App\Structure\Repositories\WeekRepository;
use App\Structure\ViewModels\WeekViewModel;


class WeekService
{
    protected $weekRepository;

    /**
     * @param WeekRepository $weekRepository
     */
    public function __construct(WeekRepository $weekRepository)
    {
        $this->weekRepository = $weekRepository;
    }

    public function getActive(): WeekViewModel
    {
        return WeekMapper::modelToViewModel($this->weekRepository->getActive());
    }

    public function getAll(): array
    {
        return WeekMapper::listModelToListViewModel($this->weekRepository->getAll());
    }

}
