<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vote extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'vote';
    protected $dates = ['created_at', 'updated_at ', 'deleted_at'];
    protected $fillable = [
        'id',
        'document',
        'name',
        'lastname',
        'ip',
        'date',
        'idRound',
        'idSinger',
    ];
}
