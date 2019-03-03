<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateInsti_welfareRequest;
use App\Http\Requests\Backend\UpdateInsti_welfareRequest;
use App\Repositories\Backend\Insti_welfareRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Division;
use App\Models\District;
use App\Models\Backend\Welfar_type;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class Insti_welfareController extends AppBaseController
{
    /** @var  Insti_welfareRepository */
    private $instiWelfareRepository;

    public function __construct(Insti_welfareRepository $instiWelfareRepo)
    {
        $this->instiWelfareRepository = $instiWelfareRepo;
        //For Authentication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the Insti_welfare.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->instiWelfareRepository->pushCriteria(new RequestCriteria($request));
        $instiWelfares = $this->instiWelfareRepository->all();

        return view('backend.insti_welfares.index')
            ->with('instiWelfares', $instiWelfares);
    }

    /**
     * Show the form for creating a new Insti_welfare.
     *
     * @return Response
     */
    public function create()
    {
        $division     = Division::all();
        $district     = District::all();
        $welfar_type  = Welfar_type::all();
        return view('backend.insti_welfares.create', compact( 'division', 'district', 'welfar_type'));
    }

    /**
     * Store a newly created Insti_welfare in storage.
     *
     * @param CreateInsti_welfareRequest $request
     *
     * @return Response
     */
    public function store(CreateInsti_welfareRequest $request)
    {
        $input = $request->all();

        $instiWelfare = $this->instiWelfareRepository->create($input);

        Flash::success('Insti Welfare saved successfully.');

        return redirect(route('backend.instiWelfares.index'));
    }

    /**
     * Display the specified Insti_welfare.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $instiWelfare = $this->instiWelfareRepository->findWithoutFail($id);

        if (empty($instiWelfare)) {
            Flash::error('Insti Welfare not found');

            return redirect(route('backend.instiWelfares.index'));
        }

        return view('backend.insti_welfares.show')->with('instiWelfare', $instiWelfare);
    }

    /**
     * Show the form for editing the specified Insti_welfare.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $instiWelfare = $this->instiWelfareRepository->findWithoutFail($id);

        $division     = Division::all();
        $district     = District::all();
        $welfar_type  = Welfar_type::all();

        if (empty($instiWelfare)) {
            Flash::error('Insti Welfare not found');

            return redirect(route('backend.instiWelfares.index'));
        }

        return view('backend.insti_welfares.edit', compact('instiWelfare', 'division', 'district', 'welfar_type'));
    }

    /**
     * Update the specified Insti_welfare in storage.
     *
     * @param  int              $id
     * @param UpdateInsti_welfareRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInsti_welfareRequest $request)
    {
        $instiWelfare = $this->instiWelfareRepository->findWithoutFail($id);

        if (empty($instiWelfare)) {
            Flash::error('Insti Welfare not found');

            return redirect(route('backend.instiWelfares.index'));
        }

        $instiWelfare = $this->instiWelfareRepository->update($request->all(), $id);

        Flash::success('Insti Welfare updated successfully.');

        return redirect(route('backend.instiWelfares.index'));
    }

    /**
     * Remove the specified Insti_welfare from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $instiWelfare = $this->instiWelfareRepository->findWithoutFail($id);

        if (empty($instiWelfare)) {
            Flash::error('Insti Welfare not found');

            return redirect(route('backend.instiWelfares.index'));
        }

        $this->instiWelfareRepository->delete($id);

        Flash::success('Insti Welfare deleted successfully.');

        return redirect(route('backend.instiWelfares.index'));
    }
}
