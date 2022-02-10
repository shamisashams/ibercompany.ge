<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamTranslation extends BaseTranslationModel
{
    use HasFactory;
    protected $fillable = [
        'childhood',
        'name',
        'position',
        'hobby',
        'super_power',
        'favorite',
        'content',
    ];
}
