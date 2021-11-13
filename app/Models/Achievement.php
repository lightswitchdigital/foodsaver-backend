<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $table = 'achievements';

    protected $fillable = [
        'name', 'desc', 'max_value', 'min_value', 'reward'
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_achievements', 'achievement_id', 'user_id');
    }
}
