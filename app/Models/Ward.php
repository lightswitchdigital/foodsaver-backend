<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    public const ALLERGY_TYPE_GLUTEN = 'all_gluten';

    protected $table = 'wards';

    protected $fillable = [
        'volunteer_id', 'name', 'last_name', 'phone', 'age', 'disabled', 'allergy', 'address', 'meta'
    ];

    protected $casts = [
        'meta' => 'array'
    ];

    public static function allergiesList()
    {
        return [
            self::ALLERGY_TYPE_GLUTEN => 'Глютен',
        ];
    }

}
