<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\CreateStd_apply_national_issuRequest;
use App\Http\Requests\Frontend\UpdateStd_apply_national_issuRequest;
use App\Repositories\Frontend\Std_apply_national_issuRepository;
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

class Std_apply_national_issuController extends AppBaseController
{
    /** @var  Std_apply_national_issuRepository */
    private $stdApplyNationalIssuRepository;

    public function __construct(Std_apply_national_issuRepository $stdApplyNationalIssuRepo)
    {
        $this->stdApplyNationalIssuRepository = $stdApplyNationalIssuRepo;
                //For Auth
        $this->middleware('student.auth:student');
    }

    /**
     * Display a listing of the Std_apply_national_issu.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->stdApplyNationalIssuRepository->pushCriteria(new RequestCriteria($request));
        $stdApplyNationalIssus = $this->stdApplyNationalIssuRepository->all();

        return view('frontend.std_apply_national_issus.index')
            ->with('stdApplyNationalIssus', $stdApplyNationalIssus);
    }

    /**
     * Show the form for creating a new Std_apply_national_issu.
     *
     * @return Response
     */
    public function create()
    {
        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();
        return view('frontend.std_apply_national_issus.create', compact('std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Store a newly created Std_apply_national_issu in storage.
     *
     * @param CreateStd_apply_national_issuRequest $request
     *
     * @return Response
     */
    public function store(CreateStd_apply_national_issuRequest $request)
    {
        $input = $request->all();

        $stdApplyNationalIssu = $this->stdApplyNationalIssuRepository->create($input);

        Flash::success('Std Apply National Issu saved successfully.');

        return redirect(route('frontend.stdApplyNationalIssus.show', [$stdApplyNationalIssu->id]));
    }

    /**
     * Display the specified Std_apply_national_issu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stdApplyNationalIssu = $this->stdApplyNationalIssuRepository->findWithoutFail($id);

        if (empty($stdApplyNationalIssu)) {
            Flash::error('Std Apply National Issu not found');

            return redirect(route('frontend.stdApplyNationalIssus.index'));
        }

        return view('frontend.std_apply_national_issus.show')->with('stdApplyNationalIssu', $stdApplyNationalIssu);
    }

    /**
     * Show the form for editing the specified Std_apply_national_issu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stdApplyNationalIssu = $this->stdApplyNationalIssuRepository->findWithoutFail($id);

        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();

        if (empty($stdApplyNationalIssu)) {
            Flash::error('Std Apply National Issu not found');

            return redirect(route('frontend.stdApplyNationalIssus.index'));
        }

        return view('frontend.std_apply_national_issus.edit', compact('stdApplyNationalIssu','std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Update the specified Std_apply_national_issu in storage.
     *
     * @param  int              $id
     * @param UpdateStd_apply_national_issuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStd_apply_national_issuRequest $request)
    {
        $stdApplyNationalIssu = $this->stdApplyNationalIssuRepository->findWithoutFail($id);

        if (empty($stdApplyNationalIssu)) {
            Flash::error('Std Apply National Issu not found');

            return redirect(route('frontend.stdApplyNationalIssus.index'));
        }

        $stdApplyNationalIssu = $this->stdApplyNationalIssuRepository->update($request->all(), $id);

        Flash::success('Std Apply National Issu updated successfully.');

        return redirect(route('frontend.stdApplyNationalIssus.show', [$stdApplyNationalIssu->id]));
    }

    
}
