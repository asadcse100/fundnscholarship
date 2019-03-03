<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateStd_class_yearRequest;
use App\Http\Requests\Backend\UpdateStd_class_yearRequest;
use App\Repositories\Backend\Std_class_yearRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class Std_class_yearController extends AppBaseController
{
    /** @var  Std_class_yearRepository */
    private $stdClassYearRepository;

    public function __construct(Std_class_yearRepository $stdClassYearRepo)
    {
        $this->stdClassYearRepository = $stdClassYearRepo;

        //For Authentication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the Std_class_year.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->stdClassYearRepository->pushCriteria(new RequestCriteria($request));
        $stdClassYears = $this->stdClassYearRepository->all();

        return view('backend.std_class_years.index')
            ->with('stdClassYears', $stdClassYears);
    }

    /**
     * Show the form for creating a new Std_class_year.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.std_class_years.create');
    }

    /**
     * Store a newly created Std_class_year in storage.
     *
     * @param CreateStd_class_yearRequest $request
     *
     * @return Response
     */
    public function store(CreateStd_class_yearRequest $request)
    {
        $input = $request->all();

        $stdClassYear = $this->stdClassYearRepository->create($input);

        Flash::success('Std Class Year saved successfully.');

        return redirect(route('backend.stdClassYears.index'));
    }

    /**
     * Display the specified Std_class_year.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stdClassYear = $this->stdClassYearRepository->findWithoutFail($id);

        if (empty($stdClassYear)) {
            Flash::error('Std Class Year not found');

            return redirect(route('backend.stdClassYears.index'));
        }

        return view('backend.std_class_years.show')->with('stdClassYear', $stdClassYear);
    }

    /**
     * Show the form for editing the specified Std_class_year.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stdClassYear = $this->stdClassYearRepository->findWithoutFail($id);

        if (empty($stdClassYear)) {
            Flash::error('Std Class Year not found');

            return redirect(route('backend.stdClassYears.index'));
        }

        return view('backend.std_class_years.edit')->with('stdClassYear', $stdClassYear);
    }

    /**
     * Update the specified Std_class_year in storage.
     *
     * @param  int              $id
     * @param UpdateStd_class_yearRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStd_class_yearRequest $request)
    {
        $stdClassYear = $this->stdClassYearRepository->findWithoutFail($id);

        if (empty($stdClassYear)) {
            Flash::error('Std Class Year not found');

            return redirect(route('backend.stdClassYears.index'));
        }

        $stdClassYear = $this->stdClassYearRepository->update($request->all(), $id);

        Flash::success('Std Class Year updated successfully.');

        return redirect(route('backend.stdClassYears.index'));
    }

    /**
     * Remove the specified Std_class_year from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stdClassYear = $this->stdClassYearRepository->findWithoutFail($id);

        if (empty($stdClassYear)) {
            Flash::error('Std Class Year not found');

            return redirect(route('backend.stdClassYears.index'));
        }

        $this->stdClassYearRepository->delete($id);

        Flash::success('Std Class Year deleted successfully.');

        return redirect(route('backend.stdClassYears.index'));
    }
}
