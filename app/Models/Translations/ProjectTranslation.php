<?php
/**
 *  app/Models/Translations/ProjectTranslation.php
 *
 * Date-Time: 30.07.21
 * Time: 10:34
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTranslation extends BaseTranslationModel
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'content',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];
}
