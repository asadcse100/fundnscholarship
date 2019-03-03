<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\CreateStd_apply_resultRequest;
use App\Http\Requests\Frontend\UpdateStd_apply_resultRequest;
use App\Repositories\Frontend\Std_apply_resultRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Backend\Std_class;
use App\Models\Backend\Std_class_year;
use App\Models\Division;
use App\Models\District;

//For Auth
use App\Http\Controllers\Controller;

class Std_apply_resultController extends AppBaseController
{
    /** @var  Std_apply_resultRepository */
    private $stdApplyResultRepository;

    public function __construct(Std_apply_resultRepository $stdApplyResultRepo)
    {
        $this->stdApplyResultRepository = $stdApplyResultRepo;

        //For Auth
        $this->middleware('student.auth:student');
    }

    /**
     * Display a listing of the Std_apply_result.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->stdApplyResultRepository->pushCriteria(new RequestCriteria($request));
        $stdApplyResults = $this->stdApplyResultRepository->all();

        return view('frontend.std_apply_results.index')
            ->with('stdApplyResults', $stdApplyResults);
    }

    /**
     * Show the form for creating a new Std_apply_result.
     *
     * @return Response
     */
    public function create()
    {
        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();
        return view('frontend.std_apply_results.create', compact('std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Store a newly created Std_apply_result in storage.
     *
     * @param CreateStd_apply_resultRequest $request
     *
     * @return Response
     */
    public function store(CreateStd_apply_resultRequest $request)
    {
        $input = $request->all();

        $stdApplyResult = $this->stdApplyResultRepository->create($input);

        Flash::success('Std Apply Result saved successfully.');

        return redirect(route('frontend.stdApplyResults.show', [$stdApplyResult->id]));
    }

    /**
     * Display the specified Std_apply_result.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stdApplyResult = $this->stdApplyResultRepository->findWithoutFail($id);

        if (empty($stdApplyResult)) {
            Flash::error('Std Apply Result not found');

            return redirect(route('frontend.stdApplyResults.index'));
        }

        return view('frontend.std_apply_results.show')->with('stdApplyResult', $stdApplyResult);
    }

    /**
     * Show the form for editing the specified Std_apply_result.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stdApplyResult = $this->stdApplyResultRepository->findWithoutFail($id);

        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();

        if (empty($stdApplyResult)) {
            Flash::error('Std Apply Result not found');

            return redirect(route('frontend.stdApplyResults.index'));
        }

        return view('frontend.std_apply_results.edit', compact('stdApplyResult','std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Update the specified Std_apply_result in storage.
     *
     * @param  int              $id
     * @param UpdateStd_apply_resultRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStd_apply_resultRequest $request)
    {
        $stdApplyResult = $this->stdApplyResultRepository->findWithoutFail($id);

        if (empty($stdApplyResult)) {
            Flash::error('Std Apply Result not found');

            return redirect(route('frontend.stdApplyResults.show'));
        }

        $stdApplyResult = $this->stdApplyResultRepository->update($request->all(), $id);

        Flash::success('Std Apply Result updated successfully.');

        return redirect(route('frontend.std_apply_results.show', [$stdApplyResult->id]));
    }

   
}
