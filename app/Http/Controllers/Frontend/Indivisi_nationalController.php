<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\CreateIndivisi_nationalRequest;
use App\Http\Requests\Frontend\UpdateIndivisi_nationalRequest;
use App\Repositories\Frontend\Indivisi_nationalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Division;
use App\Models\District;

class Indivisi_nationalController extends AppBaseController
{
    /** @var  Indivisi_nationalRepository */
    private $indivisiNationalRepository;

    public function __construct(Indivisi_nationalRepository $indivisiNationalRepo)
    {
        $this->indivisiNationalRepository = $indivisiNationalRepo;
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

        return view('frontend.indivisi_nationals.index')
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
        return view('frontend.indivisi_nationals.create', compact( 'division', 'district'));
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

        return redirect(route('frontend.indivisiNationals.show', [$indivisiNational->id]));
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

            return redirect(route('frontend.indivisiNationals.show'));
        }

        return view('frontend.indivisi_nationals.show')->with('indivisiNational', $indivisiNational);
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

        $division     = Division::all();
        $district     = District::all();

        if (empty($indivisiNational)) {
            Flash::error('Indivisi National not found');

            return redirect(route('frontend.indivisiNationals.show'));
        }

        return view('frontend.indivisi_nationals.edit', compact('indivisiNational', 'division', 'district'));
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

            return redirect(route('frontend.indivisiNationals.show'));
        }

        $indivisiNational = $this->indivisiNationalRepository->update($request->all(), $id);

        Flash::success('Indivisi National updated successfully.');

        return redirect(route('frontend.indivisiNationals.show', [$indivisiNational->id]));
    }

   
}
