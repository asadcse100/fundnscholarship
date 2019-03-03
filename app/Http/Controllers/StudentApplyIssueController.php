<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentApplyIssueRequest;
use App\Http\Requests\UpdateStudentApplyIssueRequest;
use App\Repositories\StudentApplyIssueRepository;
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

class StudentApplyIssueController extends AppBaseController
{
    /** @var  StudentApplyIssueRepository */
    private $studentApplyIssueRepository;

    public function __construct(StudentApplyIssueRepository $studentApplyIssueRepo)
    {
        $this->studentApplyIssueRepository = $studentApplyIssueRepo;
        //For Authtication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the StudentApplyIssue.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->studentApplyIssueRepository->pushCriteria(new RequestCriteria($request));
        $studentApplyIssues = $this->studentApplyIssueRepository->all();

        return view('student_apply_issues.index')
            ->with('studentApplyIssues', $studentApplyIssues);
    }

    /**
     * Show the form for creating a new StudentApplyIssue.
     *
     * @return Response
     */
    public function create()
    {
        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();
        return view('student_apply_issues.create', compact('std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Store a newly created StudentApplyIssue in storage.
     *
     * @param CreateStudentApplyIssueRequest $request
     *
     * @return Response
     */
    public function store(CreateStudentApplyIssueRequest $request)
    {
        $input = $request->all();

        $studentApplyIssue = $this->studentApplyIssueRepository->create($input);

        Flash::success('Student Apply Issue saved successfully.');

        return redirect(route('studentApplyIssues.index'));
    }

    /**
     * Display the specified StudentApplyIssue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $studentApplyIssue = $this->studentApplyIssueRepository->findWithoutFail($id);

        if (empty($studentApplyIssue)) {
            Flash::error('Student Apply Issue not found');

            return redirect(route('studentApplyIssues.index'));
        }

        return view('student_apply_issues.show')->with('studentApplyIssue', $studentApplyIssue);
    }

    /**
     * Show the form for editing the specified StudentApplyIssue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $studentApplyIssue = $this->studentApplyIssueRepository->findWithoutFail($id);

        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();

        if (empty($studentApplyIssue)) {
            Flash::error('Student Apply Issue not found');

            return redirect(route('studentApplyIssues.index'));
        }

        return view('student_apply_issues.edit', compact('studentApplyIssue','std_classes', 'std_years', 'division', 'district' ));
    }

    /**
     * Update the specified StudentApplyIssue in storage.
     *
     * @param  int              $id
     * @param UpdateStudentApplyIssueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStudentApplyIssueRequest $request)
    {
        $studentApplyIssue = $this->studentApplyIssueRepository->findWithoutFail($id);

        if (empty($studentApplyIssue)) {
            Flash::error('Student Apply Issue not found');

            return redirect(route('studentApplyIssues.index'));
        }

        $studentApplyIssue = $this->studentApplyIssueRepository->update($request->all(), $id);

        Flash::success('Student Apply Issue updated successfully.');

        return redirect(route('studentApplyIssues.index'));
    }

    /**
     * Remove the specified StudentApplyIssue from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $studentApplyIssue = $this->studentApplyIssueRepository->findWithoutFail($id);

        if (empty($studentApplyIssue)) {
            Flash::error('Student Apply Issue not found');

            return redirect(route('studentApplyIssues.index'));
        }

        $this->studentApplyIssueRepository->delete($id);

        Flash::success('Student Apply Issue deleted successfully.');

        return redirect(route('studentApplyIssues.index'));
    }
}
