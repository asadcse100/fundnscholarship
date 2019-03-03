<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateMinistyRequest;
use App\Http\Requests\Backend\UpdateMinistyRequest;
use App\Repositories\Backend\MinistyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class MinistyController extends AppBaseController
{
    /** @var  MinistyRepository */
    private $ministyRepository;

    public function __construct(MinistyRepository $ministyRepo)
    {
        $this->ministyRepository = $ministyRepo;
        //For Authentication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the Ministy.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ministyRepository->pushCriteria(new RequestCriteria($request));
        $ministies = $this->ministyRepository->all();

        return view('backend.ministies.index')
            ->with('ministies', $ministies);
    }

    /**
     * Show the form for creating a new Ministy.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.ministies.create');
    }

    /**
     * Store a newly created Ministy in storage.
     *
     * @param CreateMinistyRequest $request
     *
     * @return Response
     */
    public function store(CreateMinistyRequest $request)
    {
        $input = $request->all();

        $ministy = $this->ministyRepository->create($input);

        Flash::success('Ministy saved successfully.');

        return redirect(route('backend.ministies.index'));
    }

    /**
     * Display the specified Ministy.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ministy = $this->ministyRepository->findWithoutFail($id);

        if (empty($ministy)) {
            Flash::error('Ministy not found');

            return redirect(route('backend.ministies.index'));
        }

        return view('backend.ministies.show')->with('ministy', $ministy);
    }

    /**
     * Show the form for editing the specified Ministy.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ministy = $this->ministyRepository->findWithoutFail($id);

        if (empty($ministy)) {
            Flash::error('Ministy not found');

            return redirect(route('backend.ministies.index'));
        }

        return view('backend.ministies.edit')->with('ministy', $ministy);
    }

    /**
     * Update the specified Ministy in storage.
     *
     * @param  int              $id
     * @param UpdateMinistyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMinistyRequest $request)
    {
        $ministy = $this->ministyRepository->findWithoutFail($id);

        if (empty($ministy)) {
            Flash::error('Ministy not found');

            return redirect(route('backend.ministies.index'));
        }

        $ministy = $this->ministyRepository->update($request->all(), $id);

        Flash::success('Ministy updated successfully.');

        return redirect(route('backend.ministies.index'));
    }

    /**
     * Remove the specified Ministy from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ministy = $this->ministyRepository->findWithoutFail($id);

        if (empty($ministy)) {
            Flash::error('Ministy not found');

            return redirect(route('backend.ministies.index'));
        }

        $this->ministyRepository->delete($id);

        Flash::success('Ministy deleted successfully.');

        return redirect(route('backend.ministies.index'));
    }
}
