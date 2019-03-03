<table class="table table-responsive" id="stdApplyPoorFunds-table">
    <thead>
        <tr>
        <th>Class</th>
        <th>Year</th>
        <th>Gpa Cgpa</th>
        <th>Father Occupation</th>
        <th>Monthly Income</th>
        <th>Description</th>
        <th>Chirman Certificate</th>
        <th>Remarks</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stdApplyPoorFunds as $stdApplyPoorFund)
        <tr>
            <td>{!! $stdApplyPoorFund->class !!}</td>
            <td>{!! $stdApplyPoorFund->year !!}</td>
            <td>{!! $stdApplyPoorFund->gpa_cgpa !!}</td>
            <td>{!! $stdApplyPoorFund->father_occupation !!}</td>
            <td>{!! $stdApplyPoorFund->monthly_income !!}</td>
            <td>{!! $stdApplyPoorFund->description !!}</td>
            <td>{!! $stdApplyPoorFund->chirman_certificate !!}</td>
            <td>{!! $stdApplyPoorFund->remarks !!}</td>
            <td>
                {!! Form::open(['route' => ['frontend.stdApplyPoorFunds.destroy', $stdApplyPoorFund->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('frontend.stdApplyPoorFunds.show', [$stdApplyPoorFund->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('frontend.stdApplyPoorFunds.edit', [$stdApplyPoorFund->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>