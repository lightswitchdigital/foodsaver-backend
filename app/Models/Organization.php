<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $table = 'organizations';

    protected $fillable = [
        'name', 'address', 'phone'
    ];

    public $timestamps = true;

    public function commands()
    {
        return $this->hasMany(Command::class);
    }
}
