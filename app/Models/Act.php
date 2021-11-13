<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Act extends Model
{
    use HasFactory;

    public const STATUS_WAIT = 'wait';
    public const STATUS_ACCEPTED = 'accepted';
    public const STATUS_REJECTED = 'rejected';

    protected $table = 'acts';

    protected $fillable = [
        'user_id', 'status'
    ];

    public $timestamps = true;

    public static function statusesList()
    {
        return [
            self::STATUS_WAIT => 'Проверка',
            self::STATUS_ACCEPTED => 'Проверка пройдена',
            self::STATUS_REJECTED => 'Проверка не пройдена',
        ];
    }
}
