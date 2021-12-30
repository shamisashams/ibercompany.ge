<?php
/**
 *  app/Http/Controllers/Admin/TeamController.php
 *
 * Date-Time: 30.07.21
 * Time: 10:37
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfessionRequest;
//use App\Models\Team;
use App\Models\Profession;
use App\Repositories\ProfessionRepositoryInterface;
use App\Repositories\TeamRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Arr;
use ReflectionException;

class ProfessionController extends Controller
{
    /**
     * @var TeamRepositoryInterface
     */
    private $professionRepository;


    /**
     * @param TeamRepositoryInterface $professionRepository
     */
    public function __construct(ProfessionRepositoryInterface  $professionRepository)
    {
        $this->professionRepository = $professionRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(ProfessionRequest $request)
    {

        return view('admin.pages.profession.index', [
            'professions' => $this->professionRepository->getData($request, ['translations'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $profession = $this->professionRepository->model;

        $url = locale_route('profession.store', [], false);
        $method = 'POST';

        return view('admin.pages.profession.form', [
            'profession' => $profession,
            'url' => $url,
            'method' => $method,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TeamRequest $request
     *
     * @return Application|RedirectResponse|Redirector
     * @throws ReflectionException
     */
    public function store(ProfessionRequest $request)
    {
        $saveData = Arr::except($request->except('_token'), []);
        $saveData['status'] = isset($saveData['status']) && (bool)$saveData['status'];
//dd($saveData);
        $profession = $this->professionRepository->create($saveData);

        // Save Files
//        if ($request->hasFile('images')) {
//            $team = $this->teamRepository->saveFiles($team->id, $request);
//        }

        return redirect(locale_route('profession.show', $profession->id))->with('success', __('admin.create_successfully'));

    }

    /**
     * Display the specified resource.
     *
     * @param string $locale
     * @param Team $team
     *
     * @return Application|Factory|View
     */
    public function show(string $locale, Profession $profession)
    {
        return view('admin.pages.profession.show', [
            'profession' => $profession,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $locale
     * @param Team $team
     * @return Application|Factory|View
     */
    public function edit(string $locale, Profession $profession)
    {
        $url = locale_route('profession.update', $profession->id, false);
        $method = 'PUT';

        return view('admin.pages.profession.form', [
            'profession' => $profession,
            'url' => $url,
            'method' => $method,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TeamRequest $request
     * @param string $locale
     * @param Team $team
     * @return Application|RedirectResponse|Redirector
     * @throws ReflectionException
     */
    public function update(Request $request, string $locale, Profession $profession)
    {
        $saveData = Arr::except($request->except('_token'), []);
        $saveData['status'] = isset($saveData['status']) && (bool)$saveData['status'];

        $this->professionRepository->update($profession->id, $saveData);


//        $this->professionRepository->saveFiles($profession->id, $request);


        return redirect(locale_route('profession.show', $profession->id))->with('success', __('admin.update_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $locale
     * @param Team $team
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(string $locale, Profession $profession)
    {
        if (!$this->professionRepository->delete($profession->id)) {
            return redirect(locale_route('profession.show', $profession->id))->with('danger', __('admin.not_delete_message'));
        }
        return redirect(locale_route('profession.index'))->with('success', __('admin.delete_message'));
    }
}
