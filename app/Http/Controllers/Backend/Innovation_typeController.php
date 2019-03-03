<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateInnovation_typeRequest;
use App\Http\Requests\Backend\UpdateInnovation_typeRequest;
use App\Repositories\Backend\Innovation_typeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class Innovation_typeController extends AppBaseController
{
    /** @var  Innovation_typeRepository */
    private $innovationTypeRepository;

    public function __construct(Innovation_typeRepository $innovationTypeRepo)
    {
        $this->innovationTypeRepository = $innovationTypeRepo;
        //For Authentication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the Innovation_type.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->innovationTypeRepository->pushCriteria(new RequestCriteria($request));
        $innovationTypes = $this->innovationTypeRepository->all();

        return view('backend.innovation_types.index')
            ->with('innovationTypes', $innovationTypes);
    }

    /**
     * Show the form for creating a new Innovation_type.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.innovation_types.create');
    }

    /**
     * Store a newly created Innovation_type in storage.
     *
     * @param CreateInnovation_typeRequest $request
     *
     * @return Response
     */
    public function store(CreateInnovation_typeRequest $request)
    {
        $input = $request->all();

        $innovationType = $this->innovationTypeRepository->create($input);

        Flash::success('Innovation Type saved successfully.');

        return redirect(route('backend.innovationTypes.index'));
    }

    /**
     * Display the specified Innovation_type.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $innovationType = $this->innovationTypeRepository->findWithoutFail($id);

        if (empty($innovationType)) {
            Flash::error('Innovation Type not found');

            return redirect(route('backend.innovationTypes.index'));
        }

        return view('backend.innovation_types.show')->with('innovationType', $innovationType);
    }

    /**
     * Show the form for editing the specified Innovation_type.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $innovationType = $this->innovationTypeRepository->findWithoutFail($id);

        if (empty($innovationType)) {
            Flash::error('Innovation Type not found');

            return redirect(route('backend.innovationTypes.index'));
        }

        return view('backend.innovation_types.edit')->with('innovationType', $innovationType);
    }

    /**
     * Update the specified Innovation_type in storage.
     *
     * @param  int              $id
     * @param UpdateInnovation_typeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInnovation_typeRequest $request)
    {
        $innovationType = $this->innovationTypeRepository->findWithoutFail($id);

        if (empty($innovationType)) {
            Flash::error('Innovation Type not found');

            return redirect(route('backend.innovationTypes.index'));
        }

        $innovationType = $this->innovationTypeRepository->update($request->all(), $id);

        Flash::success('Innovation Type updated successfully.');

        return redirect(route('backend.innovationTypes.index'));
    }

    /**
     * Remove the specified Innovation_type from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $innovationType = $this->innovationTypeRepository->findWithoutFail($id);

        if (empty($innovationType)) {
            Flash::error('Innovation Type not found');

            return redirect(route('backend.innovationTypes.index'));
        }

        $this->innovationTypeRepository->delete($id);

        Flash::success('Innovation Type deleted successfully.');

        return redirect(route('backend.innovationTypes.index'));
    }
}
