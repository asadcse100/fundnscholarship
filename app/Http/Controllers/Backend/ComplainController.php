<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateComplainRequest;
use App\Http\Requests\Backend\UpdateComplainRequest;
use App\Repositories\Backend\ComplainRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ComplainController extends AppBaseController
{
    /** @var  ComplainRepository */
    private $complainRepository;

    public function __construct(ComplainRepository $complainRepo)
    {
        $this->complainRepository = $complainRepo;
    }

    /**
     * Display a listing of the Complain.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->complainRepository->pushCriteria(new RequestCriteria($request));
        $complains = $this->complainRepository->all();

        return view('backend.complains.index')
            ->with('complains', $complains);
    }

    /**
     * Show the form for creating a new Complain.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.complains.create');
    }

    /**
     * Store a newly created Complain in storage.
     *
     * @param CreateComplainRequest $request
     *
     * @return Response
     */
    public function store(CreateComplainRequest $request)
    {
        $input = $request->all();

        $complain = $this->complainRepository->create($input);

        Flash::success('Complain saved successfully.');

        return redirect(route('backend.complains.index'));
    }

    /**
     * Display the specified Complain.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $complain = $this->complainRepository->findWithoutFail($id);

        if (empty($complain)) {
            Flash::error('Complain not found');

            return redirect(route('backend.complains.index'));
        }

        return view('backend.complains.show')->with('complain', $complain);
    }

    /**
     * Show the form for editing the specified Complain.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $complain = $this->complainRepository->findWithoutFail($id);

        if (empty($complain)) {
            Flash::error('Complain not found');

            return redirect(route('backend.complains.index'));
        }

        return view('backend.complains.edit')->with('complain', $complain);
    }

    /**
     * Update the specified Complain in storage.
     *
     * @param  int              $id
     * @param UpdateComplainRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComplainRequest $request)
    {
        $complain = $this->complainRepository->findWithoutFail($id);

        if (empty($complain)) {
            Flash::error('Complain not found');

            return redirect(route('backend.complains.index'));
        }

        $complain = $this->complainRepository->update($request->all(), $id);

        Flash::success('Complain updated successfully.');

        return redirect(route('backend.complains.index'));
    }

    /**
     * Remove the specified Complain from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $complain = $this->complainRepository->findWithoutFail($id);

        if (empty($complain)) {
            Flash::error('Complain not found');

            return redirect(route('backend.complains.index'));
        }

        $this->complainRepository->delete($id);

        Flash::success('Complain deleted successfully.');

        return redirect(route('backend.complains.index'));
    }
}
