<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Round extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'round';
    protected $dates = ['created_at', 'updated_at ', 'deleted_at'];
    protected $fillable = ['id', 'name', 'startDate', 'endDate', 'idWeek'];

    public function singers()
    {
        return $this->hasMany(Singer::class, 'idRound', 'id');
    }
}
