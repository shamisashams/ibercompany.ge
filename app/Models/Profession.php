<?php

namespace App\Models;

use App\Models\Translations\ProfessionTranslation;
use App\Traits\ScopeFilter;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\MorphMany;
//use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profession extends Model
{
    use SoftDeletes, Translatable, HasFactory, ScopeFilter;

    /**
     * @var string
     */
    protected $table = 'professions';

    /**
     * @var string[]
     */
    protected $fillable = [
        'status'
    ];

    /** @var string */
    protected $translationModel = ProfessionTranslation::class;

    /** @var array */
    public $translatedAttributes = [
        'title',
        'description',
    ];


    public function getFilterScopes(): array
    {
        return [
            'id' => [
                'hasParam' => true,
                'scopeMethod' => 'id'
            ],
            'status' => [
                'hasParam' => true,
                'scopeMethod' => 'status'
            ],
            'title' => [
                'hasParam' => true,
                'scopeMethod' => 'titleTranslation'
            ]
        ];
    }

    public function team()
    {
        return $this->hasMany(Team::class, "profession_id");
    }


//    /**
//     * @return MorphMany
//     */
//    public function files(): MorphMany
//    {
//        return $this->morphMany(File::class, 'fileable');
//    }
//
//    /**
//     * @return MorphOne
//     */
//    public function file(): MorphOne
//    {
//        return $this->morphOne(File::class, 'fileable');
//    }
}
