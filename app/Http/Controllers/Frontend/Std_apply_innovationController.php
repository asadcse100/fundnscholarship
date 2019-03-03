<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\CreateStd_apply_innovationRequest;
use App\Http\Requests\Frontend\UpdateStd_apply_innovationRequest;
use App\Repositories\Frontend\Std_apply_innovationRepository;
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
class Std_apply_innovationController extends AppBaseController
{
    /** @var  Std_apply_innovationRepository */
    private $stdApplyInnovationRepository;

    public function __construct(Std_apply_innovationRepository $stdApplyInnovationRepo)
    {
        $this->stdApplyInnovationRepository = $stdApplyInnovationRepo;

        //For Auth
        $this->middleware('student.auth:student');
    }

    /**
     * Display a listing of the Std_apply_innovation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->stdApplyInnovationRepository->pushCriteria(new RequestCriteria($request));
        $stdApplyInnovations = $this->stdApplyInnovationRepository->all();

        return view('frontend.std_apply_innovations.index')
            ->with('stdApplyInnovations', $stdApplyInnovations);
    }

    /**
     * Show the form for creating a new Std_apply_innovation.
     *
     * @return Response
     */
    public function create()
    {
        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();
        return view('frontend.std_apply_innovations.create', compact('std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Store a newly created Std_apply_innovation in storage.
     *
     * @param CreateStd_apply_innovationRequest $request
     *
     * @return Response
     */
    public function store(CreateStd_apply_innovationRequest $request)
    {
        $input = $request->all();

        $stdApplyInnovation = $this->stdApplyInnovationRepository->create($input);

        Flash::success('Std Apply Innovation saved successfully.');

        return redirect(route('frontend.stdApplyInnovations.show', [$stdApplyInnovation->id] ));
    }

    /**
     * Display the specified Std_apply_innovation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stdApplyInnovation = $this->stdApplyInnovationRepository->findWithoutFail($id);

        if (empty($stdApplyInnovation)) {
            Flash::error('Std Apply Innovation not found');

            return redirect(route('frontend.stdApplyInnovations.index'));
        }

        return view('frontend.std_apply_innovations.show')->with('stdApplyInnovation', $stdApplyInnovation);
    }

    /**
     * Show the form for editing the specified Std_apply_innovation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stdApplyInnovation = $this->stdApplyInnovationRepository->findWithoutFail($id);

        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();

        if (empty($stdApplyInnovation)) {
            Flash::error('Std Apply Innovation not found');

            return redirect(route('frontend.stdApplyInnovations.index'));
        }

        return view('frontend.std_apply_innovations.edit', compact('stdApplyInnovation','std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Update the specified Std_apply_innovation in storage.
     *
     * @param  int              $id
     * @param UpdateStd_apply_innovationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStd_apply_innovationRequest $request)
    {
        $stdApplyInnovation = $this->stdApplyInnovationRepository->findWithoutFail($id);

        if (empty($stdApplyInnovation)) {
            Flash::error('Std Apply Innovation not found');

            return redirect(route('frontend.stdApplyInnovations.index'));
        }

        $stdApplyInnovation = $this->stdApplyInnovationRepository->update($request->all(), $id);

        Flash::success('Std Apply Innovation updated successfully.');

        return redirect(route('frontend.stdApplyInnovations.show', [$stdApplyInnovation->id]));
    }

    
}
