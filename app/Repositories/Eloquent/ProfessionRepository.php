<?php
/**
 *  app/Repositories/Eloquent/ProjectRepository.php
 *
 * Date-Time: 30.07.21
 * Time: 10:36
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\Profession;
use App\Models\Project;
use App\Models\Team;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\ProfessionRepositoryInterface;
use App\Repositories\ProjectRepositoryInterface;
use App\Repositories\TeamRepositoryInterface;

/**
 * Class TeamRepository
 * @package App\Repositories\Eloquent
 */
class ProfessionRepository extends BaseRepository implements ProfessionRepositoryInterface
{
    /**
     * @param \App\Models\Profession $model
     */
    public function __construct(Profession $model)
    {
        parent::__construct($model);
    }

}
