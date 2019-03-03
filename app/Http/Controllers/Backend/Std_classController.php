<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateStd_classRequest;
use App\Http\Requests\Backend\UpdateStd_classRequest;
use App\Repositories\Backend\Std_classRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class Std_classController extends AppBaseController
{
    /** @var  Std_classRepository */
    private $stdClassRepository;

    public function __construct(Std_classRepository $stdClassRepo)
    {
        $this->stdClassRepository = $stdClassRepo;
        //For Authtication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the Std_class.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->stdClassRepository->pushCriteria(new RequestCriteria($request));
        $stdClasses = $this->stdClassRepository->all();

        return view('backend.std_classes.index')
            ->with('stdClasses', $stdClasses);
    }

    /**
     * Show the form for creating a new Std_class.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.std_classes.create');
    }

    /**
     * Store a newly created Std_class in storage.
     *
     * @param CreateStd_classRequest $request
     *
     * @return Response
     */
    public function store(CreateStd_classRequest $request)
    {
        $input = $request->all();

        $stdClass = $this->stdClassRepository->create($input);

        Flash::success('Std Class saved successfully.');

        return redirect(route('backend.stdClasses.index'));
    }

    /**
     * Display the specified Std_class.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stdClass = $this->stdClassRepository->findWithoutFail($id);

        if (empty($stdClass)) {
            Flash::error('Std Class not found');

            return redirect(route('backend.stdClasses.index'));
        }

        return view('backend.std_classes.show')->with('stdClass', $stdClass);
    }

    /**
     * Show the form for editing the specified Std_class.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stdClass = $this->stdClassRepository->findWithoutFail($id);

        if (empty($stdClass)) {
            Flash::error('Std Class not found');

            return redirect(route('backend.stdClasses.index'));
        }

        return view('backend.std_classes.edit')->with('stdClass', $stdClass);
    }

    /**
     * Update the specified Std_class in storage.
     *
     * @param  int              $id
     * @param UpdateStd_classRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStd_classRequest $request)
    {
        $stdClass = $this->stdClassRepository->findWithoutFail($id);

        if (empty($stdClass)) {
            Flash::error('Std Class not found');

            return redirect(route('backend.stdClasses.index'));
        }

        $stdClass = $this->stdClassRepository->update($request->all(), $id);

        Flash::success('Std Class updated successfully.');

        return redirect(route('backend.stdClasses.index'));
    }

    /**
     * Remove the specified Std_class from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stdClass = $this->stdClassRepository->findWithoutFail($id);

        if (empty($stdClass)) {
            Flash::error('Std Class not found');

            return redirect(route('backend.stdClasses.index'));
        }

        $this->stdClassRepository->delete($id);

        Flash::success('Std Class deleted successfully.');

        return redirect(route('backend.stdClasses.index'));
    }
}
