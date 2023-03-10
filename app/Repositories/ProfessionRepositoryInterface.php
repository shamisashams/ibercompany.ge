<?php
/**
 *  app/Repositories/ProductRepositoryInterface.php
 *
 * Date-Time: 30.07.21
 * Time: 10:35
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Repositories;


use App\Http\Requests\Admin\TeamRequest;
use Illuminate\Http\Request;


interface ProfessionRepositoryInterface
{

    /**
     * @param Request $request
     * @param array $with
     * @return mixed
     */
    public function getData(Request $request, array $with = []);
}
