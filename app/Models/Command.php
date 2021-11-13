<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;

    protected $table = 'commands';

    protected $fillable = [
        'name', 'meta'
    ];

    protected $casts = [
        'meta' => 'array'
    ];

    public $timestamps = true;


    public function members()
    {
        return $this->belongsToMany(User::class, 'user_commands', 'command_id', 'user_id');
    }

    public function curator()
    {
        return $this->members()->where('role', User::ROLE_CURATOR);
    }

    public function volunteers()
    {
        return $this->members()->where('role', User::ROLE_VOLUNTEER);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
