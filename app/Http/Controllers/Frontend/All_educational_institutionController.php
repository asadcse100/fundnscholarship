<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\CreateAll_educational_institutionRequest;
use App\Http\Requests\Frontend\UpdateAll_educational_institutionRequest;
use App\Repositories\Frontend\All_educational_institutionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class All_educational_institutionController extends AppBaseController
{
    /** @var  All_educational_institutionRepository */
    private $allEducationalInstitutionRepository;

    public function __construct(All_educational_institutionRepository $allEducationalInstitutionRepo)
    {
        $this->allEducationalInstitutionRepository = $allEducationalInstitutionRepo;
    }

    /**
     * Display a listing of the All_educational_institution.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->allEducationalInstitutionRepository->pushCriteria(new RequestCriteria($request));
        $allEducationalInstitutions = $this->allEducationalInstitutionRepository->all();

        return view('frontend.all_educational_institutions.index')
            ->with('allEducationalInstitutions', $allEducationalInstitutions);
    }

    /**
     * Show the form for creating a new All_educational_institution.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontend.all_educational_institutions.create');
    }

    /**
     * Store a newly created All_educational_institution in storage.
     *
     * @param CreateAll_educational_institutionRequest $request
     *
     * @return Response
     */
    public function store(CreateAll_educational_institutionRequest $request)
    {
        $input = $request->all();

        $allEducationalInstitution = $this->allEducationalInstitutionRepository->create($input);

        Flash::success('All Educational Institution saved successfully.');

        return redirect(route('frontend.allEducationalInstitutions.index'));
    }

    /**
     * Display the specified All_educational_institution.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $allEducationalInstitution = $this->allEducationalInstitutionRepository->findWithoutFail($id);

        if (empty($allEducationalInstitution)) {
            Flash::error('All Educational Institution not found');

            return redirect(route('frontend.allEducationalInstitutions.index'));
        }

        return view('frontend.all_educational_institutions.show')->with('allEducationalInstitution', $allEducationalInstitution);
    }

    /**
     * Show the form for editing the specified All_educational_institution.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $allEducationalInstitution = $this->allEducationalInstitutionRepository->findWithoutFail($id);

        if (empty($allEducationalInstitution)) {
            Flash::error('All Educational Institution not found');

            return redirect(route('frontend.allEducationalInstitutions.index'));
        }

        return view('frontend.all_educational_institutions.edit')->with('allEducationalInstitution', $allEducationalInstitution);
    }

    /**
     * Update the specified All_educational_institution in storage.
     *
     * @param  int              $id
     * @param UpdateAll_educational_institutionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAll_educational_institutionRequest $request)
    {
        $allEducationalInstitution = $this->allEducationalInstitutionRepository->findWithoutFail($id);

        if (empty($allEducationalInstitution)) {
            Flash::error('All Educational Institution not found');

            return redirect(route('frontend.allEducationalInstitutions.index'));
        }

        $allEducationalInstitution = $this->allEducationalInstitutionRepository->update($request->all(), $id);

        Flash::success('All Educational Institution updated successfully.');

        return redirect(route('frontend.allEducationalInstitutions.index'));
    }

    /**
     * Remove the specified All_educational_institution from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $allEducationalInstitution = $this->allEducationalInstitutionRepository->findWithoutFail($id);

        if (empty($allEducationalInstitution)) {
            Flash::error('All Educational Institution not found');

            return redirect(route('frontend.allEducationalInstitutions.index'));
        }

        $this->allEducationalInstitutionRepository->delete($id);

        Flash::success('All Educational Institution deleted successfully.');

        return redirect(route('frontend.allEducationalInstitutions.index'));
    }
}
