<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\CreateStd_apply_poor_fundRequest;
use App\Http\Requests\Frontend\UpdateStd_apply_poor_fundRequest;
use App\Repositories\Frontend\Std_apply_poor_fundRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Backend\Std_class;
use App\Models\Backend\Std_class_year;
use App\Models\Division;
use App\Models\District;
//For Auth
use App\Http\Controllers\Controller;

class Std_apply_poor_fundController extends AppBaseController
{
    /** @var  Std_apply_poor_fundRepository */
    private $stdApplyPoorFundRepository;

    public function __construct(Std_apply_poor_fundRepository $stdApplyPoorFundRepo)
    {
        $this->stdApplyPoorFundRepository = $stdApplyPoorFundRepo;
        //For Auth
        $this->middleware('student.auth:student');
    }

    /**
     * Display a listing of the Std_apply_poor_fund.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->stdApplyPoorFundRepository->pushCriteria(new RequestCriteria($request));
        $stdApplyPoorFunds = $this->stdApplyPoorFundRepository->all();

        return view('frontend.std_apply_poor_funds.index')
            ->with('stdApplyPoorFunds', $stdApplyPoorFunds);
    }

    /**
     * Show the form for creating a new Std_apply_poor_fund.
     *
     * @return Response
     */
    public function create()
    {
        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();
        return view('frontend.std_apply_poor_funds.create', compact('std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Store a newly created Std_apply_poor_fund in storage.
     *
     * @param CreateStd_apply_poor_fundRequest $request
     *
     * @return Response
     */
    public function store(CreateStd_apply_poor_fundRequest $request)
    {
        $input = $request->all();

        $stdApplyPoorFund = $this->stdApplyPoorFundRepository->create($input);

        Flash::success('Std Apply Poor Fund saved successfully.');

        return redirect(route('frontend.stdApplyPoorFunds.show', [$stdApplyPoorFund->id]));
    }

    /**
     * Display the specified Std_apply_poor_fund.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stdApplyPoorFund = $this->stdApplyPoorFundRepository->findWithoutFail($id);

        if (empty($stdApplyPoorFund)) {
            Flash::error('Std Apply Poor Fund not found');

            return redirect(route('frontend.stdApplyPoorFunds.index'));
        }

        return view('frontend.std_apply_poor_funds.show')->with('stdApplyPoorFund', $stdApplyPoorFund);
    }

    /**
     * Show the form for editing the specified Std_apply_poor_fund.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stdApplyPoorFund = $this->stdApplyPoorFundRepository->findWithoutFail($id);

        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();

        if (empty($stdApplyPoorFund)) {
            Flash::error('Std Apply Poor Fund not found');

            return redirect(route('frontend.stdApplyPoorFunds.index'));
        }

        return view('frontend.std_apply_poor_funds.edit', compact('stdApplyPoorFund','std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Update the specified Std_apply_poor_fund in storage.
     *
     * @param  int              $id
     * @param UpdateStd_apply_poor_fundRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStd_apply_poor_fundRequest $request)
    {
        $stdApplyPoorFund = $this->stdApplyPoorFundRepository->findWithoutFail($id);

        if (empty($stdApplyPoorFund)) {
            Flash::error('Std Apply Poor Fund not found');

            return redirect(route('frontend.stdApplyPoorFunds.index'));
        }

        $stdApplyPoorFund = $this->stdApplyPoorFundRepository->update($request->all(), $id);

        Flash::success('Std Apply Poor Fund updated successfully.');

        return redirect(route('frontend.stdApplyPoorFunds.show', [$stdApplyPoorFund->id]));
    }

   
}
