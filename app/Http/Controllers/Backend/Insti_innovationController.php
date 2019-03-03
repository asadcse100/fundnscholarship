<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateInsti_innovationRequest;
use App\Http\Requests\Backend\UpdateInsti_innovationRequest;
use App\Repositories\Backend\Insti_innovationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Division;
use App\Models\District;
use App\Models\Backend\Innovation_type;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class Insti_innovationController extends AppBaseController
{
    /** @var  Insti_innovationRepository */
    private $instiInnovationRepository;

    public function __construct(Insti_innovationRepository $instiInnovationRepo)
    {
        $this->instiInnovationRepository = $instiInnovationRepo;
        //For Authentication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the Insti_innovation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->instiInnovationRepository->pushCriteria(new RequestCriteria($request));
        $instiInnovations = $this->instiInnovationRepository->all();

        return view('backend.insti_innovations.index')
            ->with('instiInnovations', $instiInnovations);
    }

    /**
     * Show the form for creating a new Insti_innovation.
     *
     * @return Response
     */
    public function create()
    {
        $division     = Division::all();
        $district     = District::all();
        $innovation_type  = Innovation_type::all();
        return view('backend.insti_innovations.create', compact( 'division', 'district', 'innovation_type'));
    }

    /**
     * Store a newly created Insti_innovation in storage.
     *
     * @param CreateInsti_innovationRequest $request
     *
     * @return Response
     */
    public function store(CreateInsti_innovationRequest $request)
    {
        $input = $request->all();

        $instiInnovation = $this->instiInnovationRepository->create($input);

        Flash::success('Insti Innovation saved successfully.');

        return redirect(route('backend.instiInnovations.index'));
    }

    /**
     * Display the specified Insti_innovation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $instiInnovation = $this->instiInnovationRepository->findWithoutFail($id);

        if (empty($instiInnovation)) {
            Flash::error('Insti Innovation not found');

            return redirect(route('backend.instiInnovations.index'));
        }

        return view('backend.insti_innovations.show')->with('instiInnovation', $instiInnovation);
    }

    /**
     * Show the form for editing the specified Insti_innovation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $instiInnovation = $this->instiInnovationRepository->findWithoutFail($id);

        $division     = Division::all();
        $district     = District::all();
        $innovation_type  = Innovation_type::all();

        if (empty($instiInnovation)) {
            Flash::error('Insti Innovation not found');

            return redirect(route('backend.instiInnovations.index'));
        }

        return view('backend.insti_innovations.edit', compact('instiInnovation', 'division', 'district', 'innovation_type'));
    }

    /**
     * Update the specified Insti_innovation in storage.
     *
     * @param  int              $id
     * @param UpdateInsti_innovationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInsti_innovationRequest $request)
    {
        $instiInnovation = $this->instiInnovationRepository->findWithoutFail($id);

        if (empty($instiInnovation)) {
            Flash::error('Insti Innovation not found');

            return redirect(route('backend.instiInnovations.index'));
        }

        $instiInnovation = $this->instiInnovationRepository->update($request->all(), $id);

        Flash::success('Insti Innovation updated successfully.');

        return redirect(route('backend.instiInnovations.index'));
    }

    /**
     * Remove the specified Insti_innovation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $instiInnovation = $this->instiInnovationRepository->findWithoutFail($id);

        if (empty($instiInnovation)) {
            Flash::error('Insti Innovation not found');

            return redirect(route('backend.instiInnovations.index'));
        }

        $this->instiInnovationRepository->delete($id);

        Flash::success('Insti Innovation deleted successfully.');

        return redirect(route('backend.instiInnovations.index'));
    }
}
