<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionTranslation extends BaseTranslationModel
{
    use HasFactory;
    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
    ];
}
