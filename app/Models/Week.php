<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Week extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'week';

    protected $dates = ['created_at', 'updated_at ', 'deleted_at'];

    protected $fillable = [
        'id',
        'name',
        'startDate',
        'endDate',
        'state',
    ];

    public function rounds()
    {
        return $this->hasMany(Round::class, 'idWeek', 'id');
    }

}
