<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentApplyProjectRequest;
use App\Http\Requests\UpdateStudentApplyProjectRequest;
use App\Repositories\StudentApplyProjectRepository;
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

class StudentApplyProjectController extends AppBaseController
{
    /** @var  StudentApplyProjectRepository */
    private $studentApplyProjectRepository;

    public function __construct(StudentApplyProjectRepository $studentApplyProjectRepo)
    {
        $this->studentApplyProjectRepository = $studentApplyProjectRepo;
        //For Authtication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the StudentApplyProject.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->studentApplyProjectRepository->pushCriteria(new RequestCriteria($request));
        $studentApplyProjects = $this->studentApplyProjectRepository->all();

        return view('student_apply_projects.index')
            ->with('studentApplyProjects', $studentApplyProjects);
    }

    /**
     * Show the form for creating a new StudentApplyProject.
     *
     * @return Response
     */
    public function create()
    {
        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();
        return view('student_apply_projects.create', compact('std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Store a newly created StudentApplyProject in storage.
     *
     * @param CreateStudentApplyProjectRequest $request
     *
     * @return Response
     */
    public function store(CreateStudentApplyProjectRequest $request)
    {
        $input = $request->all();

        $studentApplyProject = $this->studentApplyProjectRepository->create($input);

        Flash::success('Student Apply Project saved successfully.');

        return redirect(route('studentApplyProjects.index'));
    }

    /**
     * Display the specified StudentApplyProject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $studentApplyProject = $this->studentApplyProjectRepository->findWithoutFail($id);

        if (empty($studentApplyProject)) {
            Flash::error('Student Apply Project not found');

            return redirect(route('studentApplyProjects.index'));
        }

        return view('student_apply_projects.show')->with('studentApplyProject', $studentApplyProject);
    }

    /**
     * Show the form for editing the specified StudentApplyProject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $studentApplyProject = $this->studentApplyProjectRepository->findWithoutFail($id);

        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();

        if (empty($studentApplyProject)) {
            Flash::error('Student Apply Project not found');

            return redirect(route('studentApplyProjects.index'));
        }

        return view('student_apply_projects.edit', compact('studentApplyProject','std_classes', 'std_years', 'division', 'district' ));
    }

    /**
     * Update the specified StudentApplyProject in storage.
     *
     * @param  int              $id
     * @param UpdateStudentApplyProjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStudentApplyProjectRequest $request)
    {
        $studentApplyProject = $this->studentApplyProjectRepository->findWithoutFail($id);

        if (empty($studentApplyProject)) {
            Flash::error('Student Apply Project not found');

            return redirect(route('studentApplyProjects.index'));
        }

        $studentApplyProject = $this->studentApplyProjectRepository->update($request->all(), $id);

        Flash::success('Student Apply Project updated successfully.');

        return redirect(route('studentApplyProjects.index'));
    }

    /**
     * Remove the specified StudentApplyProject from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $studentApplyProject = $this->studentApplyProjectRepository->findWithoutFail($id);

        if (empty($studentApplyProject)) {
            Flash::error('Student Apply Project not found');

            return redirect(route('studentApplyProjects.index'));
        }

        $this->studentApplyProjectRepository->delete($id);

        Flash::success('Student Apply Project deleted successfully.');

        return redirect(route('studentApplyProjects.index'));
    }
}
