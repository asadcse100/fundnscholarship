<table class="table table-responsive" id="stdApplyResults-table">
    <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Adress</th>
        <th>Phone</th>
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
    @foreach($stdApplyResults as $stdApplyResult)
        <tr>
            <td>{!! $studentApplyResult->first_name !!}</td>
            <td>{!! $studentApplyResult->last_name !!}</td>
            <td>{!! $studentApplyResult->adress !!}</td>
            <td>{!! $studentApplyResult->phone !!}</td>
            <td>{!! $stdApplyResult->class !!}</td>
            <td>{!! $stdApplyResult->year !!}</td>
            <td>{!! $stdApplyResult->gpa_cgpa !!}</td>
            <td>{!! $stdApplyResult->merit_list !!}</td>
            <td>{!! $stdApplyResult->result_image !!}</td>
            @if($stdApplyResult->status == 0)
            <td>Pending</td>
            @elseif($stdApplyResult->status == 2)
            <td>Reviewing</td>
            @elseif($stdApplyResult->status == 1)
            <td>Approved</td>
            @endif

            <td>
                {!! Form::open(['route' => ['frontend.stdApplyResults.destroy', $stdApplyResult->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('frontend.stdApplyResults.show', [$stdApplyResult->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('frontend.stdApplyResults.edit', [$stdApplyResult->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>