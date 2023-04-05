<?php

namespace App\Structure\Repositories;

use App\Models\Vote;
use Illuminate\Support\Facades\DB;

class VoteRepository
{
    public function getById($id)
    {
        $data = Vote::where('id', (int)$id)->first();
        if (!$data) $data = new Vote();
        return $data;
    }

    public function save(Vote $model): Vote
    {
        if ($model->id != 0) $model->Update();
        else $model->save();
        return $model;
    }

    public function countVotesBySinger($singerId, $roundId): int
    {
        return DB::table('vote')
            ->where([
                ['idRound', $roundId],
                ['idSinger', $singerId],
            ])
            ->groupBy('idSinger')
            ->count();
    }

    public function countVotes($roundId)
    {
        return DB::table('vote')
            ->select('idSinger', DB::raw('Count(idSinger) as total'))
            ->where('idRound', $roundId)
            ->groupBy('idSinger')
            ->get();
    }
}
