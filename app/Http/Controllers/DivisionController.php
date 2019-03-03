<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDivisionRequest;
use App\Http\Requests\UpdateDivisionRequest;
use App\Repositories\DivisionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class DivisionController extends AppBaseController
{
    /** @var  DivisionRepository */
    private $divisionRepository;

    public function __construct(DivisionRepository $divisionRepo)
    {
        $this->divisionRepository = $divisionRepo;
        //For Authtication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the Division.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->divisionRepository->pushCriteria(new RequestCriteria($request));
        $divisions = $this->divisionRepository->all();

        return view('divisions.index')
            ->with('divisions', $divisions);
    }

    /**
     * Show the form for creating a new Division.
     *
     * @return Response
     */
    public function create()
    {
        return view('divisions.create');
    }

    /**
     * Store a newly created Division in storage.
     *
     * @param CreateDivisionRequest $request
     *
     * @return Response
     */
    public function store(CreateDivisionRequest $request)
    {
        $input = $request->all();

        $division = $this->divisionRepository->create($input);

        Flash::success('Division saved successfully.');

        return redirect(route('divisions.index'));
    }

    /**
     * Display the specified Division.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $division = $this->divisionRepository->findWithoutFail($id);

        if (empty($division)) {
            Flash::error('Division not found');

            return redirect(route('divisions.index'));
        }

        return view('divisions.show')->with('division', $division);
    }

    /**
     * Show the form for editing the specified Division.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $division = $this->divisionRepository->findWithoutFail($id);

        if (empty($division)) {
            Flash::error('Division not found');

            return redirect(route('divisions.index'));
        }

        return view('divisions.edit')->with('division', $division);
    }

    /**
     * Update the specified Division in storage.
     *
     * @param  int              $id
     * @param UpdateDivisionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDivisionRequest $request)
    {
        $division = $this->divisionRepository->findWithoutFail($id);

        if (empty($division)) {
            Flash::error('Division not found');

            return redirect(route('divisions.index'));
        }

        $division = $this->divisionRepository->update($request->all(), $id);

        Flash::success('Division updated successfully.');

        return redirect(route('divisions.index'));
    }

    /**
     * Remove the specified Division from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $division = $this->divisionRepository->findWithoutFail($id);

        if (empty($division)) {
            Flash::error('Division not found');

            return redirect(route('divisions.index'));
        }

        $this->divisionRepository->delete($id);

        Flash::success('Division deleted successfully.');

        return redirect(route('divisions.index'));
    }
}
