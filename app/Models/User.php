<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public const ROLE_VOLUNTEER = 'volunteer';
    public const ROLE_CURATOR = 'curator';
    public const ROLE_ADMIN = 'admin';

    protected $fillable = [
        'name',
        'email',
        'sub',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = true;


    public static function rolesList()
    {
        return [
            self::ROLE_VOLUNTEER => 'Волонтер',
            self::ROLE_CURATOR => 'Куратор',
            self::ROLE_ADMIN => 'Админ',
        ];
    }

    public function command()
    {
        return $this->belongsTo(Command::class);
    }

    public function achievements()
    {
        return $this->belongsToMany(Achievement::class, 'user_achievements', 'user_id', 'achievement_id');
    }
}
