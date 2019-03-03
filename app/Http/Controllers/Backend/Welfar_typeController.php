<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateWelfar_typeRequest;
use App\Http\Requests\Backend\UpdateWelfar_typeRequest;
use App\Repositories\Backend\Welfar_typeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class Welfar_typeController extends AppBaseController
{
    /** @var  Welfar_typeRepository */
    private $welfarTypeRepository;

    public function __construct(Welfar_typeRepository $welfarTypeRepo)
    {
        $this->welfarTypeRepository = $welfarTypeRepo;
        //For Authtication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the Welfar_type.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->welfarTypeRepository->pushCriteria(new RequestCriteria($request));
        $welfarTypes = $this->welfarTypeRepository->all();

        return view('backend.welfar_types.index')
            ->with('welfarTypes', $welfarTypes);
    }

    /**
     * Show the form for creating a new Welfar_type.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.welfar_types.create');
    }

    /**
     * Store a newly created Welfar_type in storage.
     *
     * @param CreateWelfar_typeRequest $request
     *
     * @return Response
     */
    public function store(CreateWelfar_typeRequest $request)
    {
        $input = $request->all();

        $welfarType = $this->welfarTypeRepository->create($input);

        Flash::success('Welfar Type saved successfully.');

        return redirect(route('backend.welfarTypes.index'));
    }

    /**
     * Display the specified Welfar_type.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $welfarType = $this->welfarTypeRepository->findWithoutFail($id);

        if (empty($welfarType)) {
            Flash::error('Welfar Type not found');

            return redirect(route('backend.welfarTypes.index'));
        }

        return view('backend.welfar_types.show')->with('welfarType', $welfarType);
    }

    /**
     * Show the form for editing the specified Welfar_type.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $welfarType = $this->welfarTypeRepository->findWithoutFail($id);

        if (empty($welfarType)) {
            Flash::error('Welfar Type not found');

            return redirect(route('backend.welfarTypes.index'));
        }

        return view('backend.welfar_types.edit')->with('welfarType', $welfarType);
    }

    /**
     * Update the specified Welfar_type in storage.
     *
     * @param  int              $id
     * @param UpdateWelfar_typeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWelfar_typeRequest $request)
    {
        $welfarType = $this->welfarTypeRepository->findWithoutFail($id);

        if (empty($welfarType)) {
            Flash::error('Welfar Type not found');

            return redirect(route('backend.welfarTypes.index'));
        }

        $welfarType = $this->welfarTypeRepository->update($request->all(), $id);

        Flash::success('Welfar Type updated successfully.');

        return redirect(route('backend.welfarTypes.index'));
    }

    /**
     * Remove the specified Welfar_type from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $welfarType = $this->welfarTypeRepository->findWithoutFail($id);

        if (empty($welfarType)) {
            Flash::error('Welfar Type not found');

            return redirect(route('backend.welfarTypes.index'));
        }

        $this->welfarTypeRepository->delete($id);

        Flash::success('Welfar Type deleted successfully.');

        return redirect(route('backend.welfarTypes.index'));
    }
}
