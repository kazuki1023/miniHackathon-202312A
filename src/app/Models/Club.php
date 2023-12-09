<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = 'club';

    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'club_id');
    }
}