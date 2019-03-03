<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateIndivisi_innovationRequest;
use App\Http\Requests\Backend\UpdateIndivisi_innovationRequest;
use App\Repositories\Backend\Indivisi_innovationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Division;
use App\Models\District;
use App\Models\Backend\Ministy;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class Indivisi_innovationController extends AppBaseController
{
    /** @var  Indivisi_innovationRepository */
    private $indivisiInnovationRepository;

    public function __construct(Indivisi_innovationRepository $indivisiInnovationRepo)
    {
        $this->indivisiInnovationRepository = $indivisiInnovationRepo;

        //For Authentication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the Indivisi_innovation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->indivisiInnovationRepository->pushCriteria(new RequestCriteria($request));
        $indivisiInnovations = $this->indivisiInnovationRepository->all();

        return view('backend.indivisi_innovations.index')
            ->with('indivisiInnovations', $indivisiInnovations);
    }

    /**
     * Show the form for creating a new Indivisi_innovation.
     *
     * @return Response
     */
    public function create()
    {
        $division     = Division::all();
        $district     = District::all();
        $related_ministy  = Ministy::all();
        return view('backend.indivisi_innovations.create', compact( 'division', 'district', 'related_ministy'));
    }

    /**
     * Store a newly created Indivisi_innovation in storage.
     *
     * @param CreateIndivisi_innovationRequest $request
     *
     * @return Response
     */
    public function store(CreateIndivisi_innovationRequest $request)
    {
        $input = $request->all();

        $indivisiInnovation = $this->indivisiInnovationRepository->create($input);

        Flash::success('Indivisi Innovation saved successfully.');

        return redirect(route('backend.indivisiInnovations.index'));
    }

    /**
     * Display the specified Indivisi_innovation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $indivisiInnovation = $this->indivisiInnovationRepository->findWithoutFail($id);

        if (empty($indivisiInnovation)) {
            Flash::error('Indivisi Innovation not found');

            return redirect(route('backend.indivisiInnovations.index'));
        }

        return view('backend.indivisi_innovations.show')->with('indivisiInnovation', $indivisiInnovation);
    }

    /**
     * Show the form for editing the specified Indivisi_innovation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $indivisiInnovation = $this->indivisiInnovationRepository->findWithoutFail($id);

        if (empty($indivisiInnovation)) {
            Flash::error('Indivisi Innovation not found');

            return redirect(route('backend.indivisiInnovations.index'));
        }

        return view('backend.indivisi_innovations.edit')->with('indivisiInnovation', $indivisiInnovation);
    }

    /**
     * Update the specified Indivisi_innovation in storage.
     *
     * @param  int              $id
     * @param UpdateIndivisi_innovationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIndivisi_innovationRequest $request)
    {
        $indivisiInnovation = $this->indivisiInnovationRepository->findWithoutFail($id);

        if (empty($indivisiInnovation)) {
            Flash::error('Indivisi Innovation not found');

            return redirect(route('backend.indivisiInnovations.index'));
        }

        $indivisiInnovation = $this->indivisiInnovationRepository->update($request->all(), $id);

        Flash::success('Indivisi Innovation updated successfully.');

        return redirect(route('backend.indivisiInnovations.index'));
    }

    /**
     * Remove the specified Indivisi_innovation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $indivisiInnovation = $this->indivisiInnovationRepository->findWithoutFail($id);

        if (empty($indivisiInnovation)) {
            Flash::error('Indivisi Innovation not found');

            return redirect(route('backend.indivisiInnovations.index'));
        }

        $this->indivisiInnovationRepository->delete($id);

        Flash::success('Indivisi Innovation deleted successfully.');

        return redirect(route('backend.indivisiInnovations.index'));
    }
}
