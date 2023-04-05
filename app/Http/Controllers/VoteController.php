<?php

namespace App\Http\Controllers;

use App\Structure\Services\VoteService;
use App\Structure\Services\WeekService;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    protected $weekService;
    protected $voteService;

    /**
     * @param WeekService $weekService
     * @param VoteService $voteService
     */
    public function __construct(WeekService $weekService, VoteService $voteService)
    {
        date_default_timezone_set('America/Lima');
        $this->weekService = $weekService;
        $this->voteService = $voteService;
    }

    public function welcome()
    {
        $data = $this->weekService->getAll();
        return view('welcome')->with([
            'weeks' => $data
        ]);
    }

    public function index()
    {
        return view('vote.index');
    }

    public function jsonGetActive(Request $request)
    {
        $data = [
            'week' => $this->weekService->getActive(),
            'vote' => $this->voteService->getById(0)
        ];
        return response()->json($data);
    }

    public function jsonSaveVote(Request $request)
    {
        $data = $request->get('vote');
        $vote = $this->voteService->save($data);
        $count = $this->voteService->getCountByRound($vote->idRound);
        return response()->json([
            'vote' => $vote,
            'count' => $count
        ]);
    }
}
