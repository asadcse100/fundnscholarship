<table class="table table-responsive" id="studentApplyResults-table">
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
        <th>Merit List</th>
        <th>Result Image</th>
        <th>Status</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($studentApplyResults as $studentApplyResult)
        <tr>
            <td>{!! $studentApplyResult->first_name !!}</td>
            <td>{!! $studentApplyResult->last_name !!}</td>
            <td>{!! $studentApplyResult->adress !!}</td>
            <td>{!! $studentApplyResult->phone !!}</td>
            <td>{!! $studentApplyResult->organize !!}</td>
            <td>{!! $studentApplyResult->class !!}</td>
            <td>{!! $studentApplyResult->year !!}</td>
            <td>{!! $studentApplyResult->gpa_cgpa !!}</td>
            <td>{!! $studentApplyResult->merit_list !!}</td>
            <td>{!! $studentApplyResult->result_image !!}</td>
            @if($studentApplyResult->status == 0)
            <td>Pending</td>
            @elseif($studentApplyResult->status == 1)
            <td>Approved</td>
            @elseif($studentApplyResult->status == 2)
            <td>Reviewing</td>
            @endif
            <td>
                {!! Form::open(['route' => ['studentApplyResults.destroy', $studentApplyResult->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('studentApplyResults.show', [$studentApplyResult->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('studentApplyResults.edit', [$studentApplyResult->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>