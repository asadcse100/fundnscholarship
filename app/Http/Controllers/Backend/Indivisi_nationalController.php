<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateIndivisi_nationalRequest;
use App\Http\Requests\Backend\UpdateIndivisi_nationalRequest;
use App\Repositories\Backend\Indivisi_nationalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Division;
use App\Models\District;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class Indivisi_nationalController extends AppBaseController
{
    /** @var  Indivisi_nationalRepository */
    private $indivisiNationalRepository;

    public function __construct(Indivisi_nationalRepository $indivisiNationalRepo)
    {
        $this->indivisiNationalRepository = $indivisiNationalRepo;
        //For Authentication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the Indivisi_national.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->indivisiNationalRepository->pushCriteria(new RequestCriteria($request));
        $indivisiNationals = $this->indivisiNationalRepository->all();

        return view('backend.indivisi_nationals.index')
            ->with('indivisiNationals', $indivisiNationals);
    }

    /**
     * Show the form for creating a new Indivisi_national.
     *
     * @return Response
     */
    public function create()
    {
        $division     = Division::all();
        $district     = District::all();
        return view('backend.indivisi_nationals.create', compact( 'division', 'district'));
    }

    /**
     * Store a newly created Indivisi_national in storage.
     *
     * @param CreateIndivisi_nationalRequest $request
     *
     * @return Response
     */
    public function store(CreateIndivisi_nationalRequest $request)
    {
        $input = $request->all();

        $indivisiNational = $this->indivisiNationalRepository->create($input);

        Flash::success('Indivisi National saved successfully.');

        return redirect(route('backend.indivisiNationals.index'));
    }

    /**
     * Display the specified Indivisi_national.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $indivisiNational = $this->indivisiNationalRepository->findWithoutFail($id);

        if (empty($indivisiNational)) {
            Flash::error('Indivisi National not found');

            return redirect(route('backend.indivisiNationals.index'));
        }

        return view('backend.indivisi_nationals.show')->with('indivisiNational', $indivisiNational);
    }

    /**
     * Show the form for editing the specified Indivisi_national.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $indivisiNational = $this->indivisiNationalRepository->findWithoutFail($id);

        if (empty($indivisiNational)) {
            Flash::error('Indivisi National not found');

            return redirect(route('backend.indivisiNationals.index'));
        }

        return view('backend.indivisi_nationals.edit')->with('indivisiNational', $indivisiNational);
    }

    /**
     * Update the specified Indivisi_national in storage.
     *
     * @param  int              $id
     * @param UpdateIndivisi_nationalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIndivisi_nationalRequest $request)
    {
        $indivisiNational = $this->indivisiNationalRepository->findWithoutFail($id);

        if (empty($indivisiNational)) {
            Flash::error('Indivisi National not found');

            return redirect(route('backend.indivisiNationals.index'));
        }

        $indivisiNational = $this->indivisiNationalRepository->update($request->all(), $id);

        Flash::success('Indivisi National updated successfully.');

        return redirect(route('backend.indivisiNationals.index'));
    }

    /**
     * Remove the specified Indivisi_national from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $indivisiNational = $this->indivisiNationalRepository->findWithoutFail($id);

        if (empty($indivisiNational)) {
            Flash::error('Indivisi National not found');

            return redirect(route('backend.indivisiNationals.index'));
        }

        $this->indivisiNationalRepository->delete($id);

        Flash::success('Indivisi National deleted successfully.');

        return redirect(route('backend.indivisiNationals.index'));
    }
}
