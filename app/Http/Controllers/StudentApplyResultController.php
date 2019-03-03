<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentApplyResultRequest;
use App\Http\Requests\UpdateStudentApplyResultRequest;
use App\Repositories\StudentApplyResultRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Backend\Std_class;
use App\Models\Backend\Std_class_year;
use App\Models\Division;
use App\Models\District;

use Illuminate\Support\Facades\Auth;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class StudentApplyResultController extends AppBaseController
{
    /** @var  StudentApplyResultRepository */
    private $studentApplyResultRepository;

    public function __construct(StudentApplyResultRepository $studentApplyResultRepo)
    {
        $this->studentApplyResultRepository = $studentApplyResultRepo;
        //For Authtication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the StudentApplyResult.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->studentApplyResultRepository->pushCriteria(new RequestCriteria($request));
        $studentApplyResults = $this->studentApplyResultRepository->all();

        return view('student_apply_results.index')
            ->with('studentApplyResults', $studentApplyResults);
    }

    /**
     * Show the form for creating a new StudentApplyResult.
     *
     * @return Response
     */
    public function create()
    {
        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();

        return view('student_apply_results.create', compact('std_classes', 'std_years', 'division', 'district'));

    }

    /**
     * Store a newly created StudentApplyResult in storage.
     *
     * @param CreateStudentApplyResultRequest $request
     *
     * @return Response
     */
    public function store(CreateStudentApplyResultRequest $request)
    {
        $input = $request->all();

        $studentApplyResult = $this->studentApplyResultRepository->create($input);

        Flash::success('Student Apply Result saved successfully.');

        return redirect(route('studentApplyResults.index'));
    }

    /**
     * Display the specified StudentApplyResult.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $studentApplyResult = $this->studentApplyResultRepository->findWithoutFail($id);

        if (empty($studentApplyResult)) {
            Flash::error('Student Apply Result not found');

            return redirect(route('studentApplyResults.index'));
        }

        return view('student_apply_results.show')->with('studentApplyResult', $studentApplyResult);
    }

    /**
     * Show the form for editing the specified StudentApplyResult.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $studentApplyResult = $this->studentApplyResultRepository->findWithoutFail($id);


        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();


        if (empty($studentApplyResult)) {
            Flash::error('Student Apply Result not found');

            return redirect(route('studentApplyResults.index'));
        }

        return view('student_apply_results.edit', compact('studentApplyResult','std_classes', 'std_years', 'division', 'district' ));
    }

    /**
     * Update the specified StudentApplyResult in storage.
     *
     * @param  int              $id
     * @param UpdateStudentApplyResultRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStudentApplyResultRequest $request)
    {
        $studentApplyResult = $this->studentApplyResultRepository->findWithoutFail($id);

        if (empty($studentApplyResult)) {
            Flash::error('Student Apply Result not found');

            return redirect(route('studentApplyResults.index'));
        }

        $studentApplyResult = $this->studentApplyResultRepository->update($request->all(), $id);

        Flash::success('Student Apply Result updated successfully.');

        return redirect(route('studentApplyResults.index'));
    }

    /**
     * Remove the specified StudentApplyResult from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $studentApplyResult = $this->studentApplyResultRepository->findWithoutFail($id);

        if (empty($studentApplyResult)) {
            Flash::error('Student Apply Result not found');

            return redirect(route('studentApplyResults.index'));
        }

        $this->studentApplyResultRepository->delete($id);

        Flash::success('Student Apply Result deleted successfully.');

        return redirect(route('studentApplyResults.index'));
    }
}
