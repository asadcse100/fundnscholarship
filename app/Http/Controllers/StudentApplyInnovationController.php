<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentApplyInnovationRequest;
use App\Http\Requests\UpdateStudentApplyInnovationRequest;
use App\Repositories\StudentApplyInnovationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Backend\Std_class;
use App\Models\Backend\Std_class_year;
use App\Models\Division;
use App\Models\District;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class StudentApplyInnovationController extends AppBaseController
{
    /** @var  StudentApplyInnovationRepository */
    private $studentApplyInnovationRepository;

    public function __construct(StudentApplyInnovationRepository $studentApplyInnovationRepo)
    {
        $this->studentApplyInnovationRepository = $studentApplyInnovationRepo;
        //For Authtication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the StudentApplyInnovation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->studentApplyInnovationRepository->pushCriteria(new RequestCriteria($request));
        $studentApplyInnovations = $this->studentApplyInnovationRepository->all();

        return view('student_apply_innovations.index')
            ->with('studentApplyInnovations', $studentApplyInnovations);
    }

    /**
     * Show the form for creating a new StudentApplyInnovation.
     *
     * @return Response
     */
    public function create()
    {
        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();
        return view('student_apply_innovations.create', compact('std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Store a newly created StudentApplyInnovation in storage.
     *
     * @param CreateStudentApplyInnovationRequest $request
     *
     * @return Response
     */
    public function store(CreateStudentApplyInnovationRequest $request)
    {
        $input = $request->all();

        $studentApplyInnovation = $this->studentApplyInnovationRepository->create($input);

        Flash::success('Student Apply Innovation saved successfully.');

        return redirect(route('studentApplyInnovations.index'));
    }

    /**
     * Display the specified StudentApplyInnovation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $studentApplyInnovation = $this->studentApplyInnovationRepository->findWithoutFail($id);

        if (empty($studentApplyInnovation)) {
            Flash::error('Student Apply Innovation not found');

            return redirect(route('studentApplyInnovations.index'));
        }

        return view('student_apply_innovations.show')->with('studentApplyInnovation', $studentApplyInnovation);
    }

    /**
     * Show the form for editing the specified StudentApplyInnovation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $studentApplyInnovation = $this->studentApplyInnovationRepository->findWithoutFail($id);

        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();

        if (empty($studentApplyInnovation)) {
            Flash::error('Student Apply Innovation not found');

            return redirect(route('studentApplyInnovations.index'));
        }

        return view('student_apply_innovations.edit', compact('studentApplyInnovation','std_classes', 'std_years', 'division', 'district' ));
    }

    /**
     * Update the specified StudentApplyInnovation in storage.
     *
     * @param  int              $id
     * @param UpdateStudentApplyInnovationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStudentApplyInnovationRequest $request)
    {
        $studentApplyInnovation = $this->studentApplyInnovationRepository->findWithoutFail($id);

        if (empty($studentApplyInnovation)) {
            Flash::error('Student Apply Innovation not found');

            return redirect(route('studentApplyInnovations.index'));
        }

        $studentApplyInnovation = $this->studentApplyInnovationRepository->update($request->all(), $id);

        Flash::success('Student Apply Innovation updated successfully.');

        return redirect(route('studentApplyInnovations.index'));
    }

    /**
     * Remove the specified StudentApplyInnovation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $studentApplyInnovation = $this->studentApplyInnovationRepository->findWithoutFail($id);

        if (empty($studentApplyInnovation)) {
            Flash::error('Student Apply Innovation not found');

            return redirect(route('studentApplyInnovations.index'));
        }

        $this->studentApplyInnovationRepository->delete($id);

        Flash::success('Student Apply Innovation deleted successfully.');

        return redirect(route('studentApplyInnovations.index'));
    }
}
