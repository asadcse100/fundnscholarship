<table class="table table-responsive" id="studentApplyPoorFunds-table">
    <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Organize</th>
        <th>Class</th>
        <th>Year</th>
        <th>Gpa Cgpa</th>
        <th>Father Occupation</th>
        <th>Monthly Income</th>
        <th>Description</th>
        <th>Chirman Certificate</th>
        <th>Remarks</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($studentApplyPoorFunds as $studentApplyPoorFund)
        <tr>
            <td>{!! $studentApplyResult->first_name !!}</td>
            <td>{!! $studentApplyResult->last_name !!}</td>
            <td>{!! $studentApplyResult->adress !!}</td>
            <td>{!! $studentApplyResult->organize !!}</td>
            <td>{!! $studentApplyPoorFund->class !!}</td>
            <td>{!! $studentApplyPoorFund->year !!}</td>
            <td>{!! $studentApplyPoorFund->gpa_cgpa !!}</td>
            <td>{!! $studentApplyPoorFund->father_occupation !!}</td>
            <td>{!! $studentApplyPoorFund->monthly_income !!}</td>
            <td>{!! $studentApplyPoorFund->description !!}</td>
            <td>{!! $studentApplyPoorFund->chirman_certificate !!}</td>
            <td>{!! $studentApplyPoorFund->remarks !!}</td>
            @if($studentApplyPoorFunds->status == 0)
            <td>Pending</td>
            @elseif($studentApplyPoorFunds->status == 1)
            <td>Approved</td>
            @elseif($studentApplyPoorFunds->status == 2)
            <td>Reviewing</td>
            @endif
            <td>
            <td>
                {!! Form::open(['route' => ['studentApplyPoorFunds.destroy', $studentApplyPoorFund->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('studentApplyPoorFunds.show', [$studentApplyPoorFund->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('studentApplyPoorFunds.edit', [$studentApplyPoorFund->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>