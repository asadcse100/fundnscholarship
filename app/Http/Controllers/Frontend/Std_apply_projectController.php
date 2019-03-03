<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\CreateStd_apply_projectRequest;
use App\Http\Requests\Frontend\UpdateStd_apply_projectRequest;
use App\Repositories\Frontend\Std_apply_projectRepository;
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

class Std_apply_projectController extends AppBaseController
{
    /** @var  Std_apply_projectRepository */
    private $stdApplyProjectRepository;

    public function __construct(Std_apply_projectRepository $stdApplyProjectRepo)
    {
        $this->stdApplyProjectRepository = $stdApplyProjectRepo;

        //For Auth
        $this->middleware('student.auth:student');
    }

    /**
     * Display a listing of the Std_apply_project.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->stdApplyProjectRepository->pushCriteria(new RequestCriteria($request));
        $stdApplyProjects = $this->stdApplyProjectRepository->all();

        return view('frontend.std_apply_projects.index')
            ->with('stdApplyProjects', $stdApplyProjects);
    }

    /**
     * Show the form for creating a new Std_apply_project.
     *
     * @return Response
     */
    public function create()
    {
        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();
        return view('frontend.std_apply_projects.create', compact('std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Store a newly created Std_apply_project in storage.
     *
     * @param CreateStd_apply_projectRequest $request
     *
     * @return Response
     */
    public function store(CreateStd_apply_projectRequest $request)
    {
        $input = $request->all();

        $stdApplyProject = $this->stdApplyProjectRepository->create($input);

        Flash::success('Std Apply Project saved successfully.');

        return redirect(route('frontend.stdApplyProjects.index'));
    }

    /**
     * Display the specified Std_apply_project.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stdApplyProject = $this->stdApplyProjectRepository->findWithoutFail($id);

        if (empty($stdApplyProject)) {
            Flash::error('Std Apply Project not found');

            return redirect(route('frontend.stdApplyProjects.index'));
        }

        return view('frontend.std_apply_projects.show')->with('stdApplyProject', $stdApplyProject);
    }

    /**
     * Show the form for editing the specified Std_apply_project.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stdApplyProject = $this->stdApplyProjectRepository->findWithoutFail($id);

        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();

        if (empty($stdApplyProject)) {
            Flash::error('Std Apply Project not found');

            return redirect(route('frontend.stdApplyProjects.index'));
        }

        return view('frontend.std_apply_projects.edit', compact('stdApplyProject','std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Update the specified Std_apply_project in storage.
     *
     * @param  int              $id
     * @param UpdateStd_apply_projectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStd_apply_projectRequest $request)
    {
        $stdApplyProject = $this->stdApplyProjectRepository->findWithoutFail($id);

        if (empty($stdApplyProject)) {
            Flash::error('Std Apply Project not found');

            return redirect(route('frontend.stdApplyProjects.index'));
        }

        $stdApplyProject = $this->stdApplyProjectRepository->update($request->all(), $id);

        Flash::success('Std Apply Project updated successfully.');

        return redirect(route('frontend.stdApplyProjects.index'));
    }

    /**
     * Remove the specified Std_apply_project from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stdApplyProject = $this->stdApplyProjectRepository->findWithoutFail($id);

        if (empty($stdApplyProject)) {
            Flash::error('Std Apply Project not found');

            return redirect(route('frontend.stdApplyProjects.index'));
        }

        $this->stdApplyProjectRepository->delete($id);

        Flash::success('Std Apply Project deleted successfully.');

        return redirect(route('frontend.stdApplyProjects.index'));
    }
}
