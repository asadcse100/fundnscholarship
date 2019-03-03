<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentApplyPoorFundRequest;
use App\Http\Requests\UpdateStudentApplyPoorFundRequest;
use App\Repositories\StudentApplyPoorFundRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Backend\Std_class;
use App\Models\Backend\Std_class_year;
use App\Models\Division;
use App\Models\District;

//For Authentication
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;

class StudentApplyPoorFundController extends AppBaseController
{
    /** @var  StudentApplyPoorFundRepository */
    private $studentApplyPoorFundRepository;

    public function __construct(StudentApplyPoorFundRepository $studentApplyPoorFundRepo)
    {
        $this->studentApplyPoorFundRepository = $studentApplyPoorFundRepo;
        //For Authtication
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    /**
     * Display a listing of the StudentApplyPoorFund.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->studentApplyPoorFundRepository->pushCriteria(new RequestCriteria($request));
        $studentApplyPoorFunds = $this->studentApplyPoorFundRepository->all();

        return view('student_apply_poor_funds.index')
            ->with('studentApplyPoorFunds', $studentApplyPoorFunds);
    }

    /**
     * Show the form for creating a new StudentApplyPoorFund.
     *
     * @return Response
     */
    public function create()
    {
        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();
        return view('student_apply_poor_funds.create', compact('std_classes', 'std_years', 'division', 'district'));
    }

    /**
     * Store a newly created StudentApplyPoorFund in storage.
     *
     * @param CreateStudentApplyPoorFundRequest $request
     *
     * @return Response
     */
    public function store(CreateStudentApplyPoorFundRequest $request)
    {
        $input = $request->all();

        $studentApplyPoorFund = $this->studentApplyPoorFundRepository->create($input);

        Flash::success('Student Apply Poor Fund saved successfully.');

        return redirect(route('studentApplyPoorFunds.index'));
    }

    /**
     * Display the specified StudentApplyPoorFund.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $studentApplyPoorFund = $this->studentApplyPoorFundRepository->findWithoutFail($id);

        if (empty($studentApplyPoorFund)) {
            Flash::error('Student Apply Poor Fund not found');

            return redirect(route('studentApplyPoorFunds.index'));
        }

        return view('student_apply_poor_funds.show')->with('studentApplyPoorFund', $studentApplyPoorFund);
    }

    /**
     * Show the form for editing the specified StudentApplyPoorFund.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $studentApplyPoorFund = $this->studentApplyPoorFundRepository->findWithoutFail($id);

        $std_classes  = Std_class::all();
        $std_years    = Std_class_year::all();
        $division     = Division::all();
        $district     = District::all();

        if (empty($studentApplyPoorFund)) {
            Flash::error('Student Apply Poor Fund not found');

            return redirect(route('studentApplyPoorFunds.index'));
        }

        return view('student_apply_poor_funds.edit', compact('studentApplyPoorFund','std_classes', 'std_years', 'division', 'district' ));
    }

    /**
     * Update the specified StudentApplyPoorFund in storage.
     *
     * @param  int              $id
     * @param UpdateStudentApplyPoorFundRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStudentApplyPoorFundRequest $request)
    {
        $studentApplyPoorFund = $this->studentApplyPoorFundRepository->findWithoutFail($id);

        if (empty($studentApplyPoorFund)) {
            Flash::error('Student Apply Poor Fund not found');

            return redirect(route('studentApplyPoorFunds.index'));
        }

        $studentApplyPoorFund = $this->studentApplyPoorFundRepository->update($request->all(), $id);

        Flash::success('Student Apply Poor Fund updated successfully.');

        return redirect(route('studentApplyPoorFunds.index'));
    }

    /**
     * Remove the specified StudentApplyPoorFund from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $studentApplyPoorFund = $this->studentApplyPoorFundRepository->findWithoutFail($id);

        if (empty($studentApplyPoorFund)) {
            Flash::error('Student Apply Poor Fund not found');

            return redirect(route('studentApplyPoorFunds.index'));
        }

        $this->studentApplyPoorFundRepository->delete($id);

        Flash::success('Student Apply Poor Fund deleted successfully.');

        return redirect(route('studentApplyPoorFunds.index'));
    }
}
