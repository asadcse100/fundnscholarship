<table class="table table-responsive" id="studentApplyProjects-table">
<table class="table table-responsive" id="studentApplyProjects-table">
    <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Organize</th>
        <th>Class</th>
        <th>Year</th>
        <th>Project Name</th>
        <th>Project Rank</th>
        <th>Description</th>
        <th>Remarks</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($studentApplyProjects as $studentApplyProject)
        <tr>
            <td>{!! $studentApplyResult->first_name !!}</td>
            <td>{!! $studentApplyResult->last_name !!}</td>
            <td>{!! $studentApplyResult->adress !!}</td>
            <td>{!! $studentApplyResult->organize !!}</td>
            <td>{!! $studentApplyProject->class !!}</td>
            <td>{!! $studentApplyProject->year !!}</td>
            <td>{!! $studentApplyProject->project_name !!}</td>
            <td>{!! $studentApplyProject->project_rank !!}</td>
            <td>{!! $studentApplyProject->description !!}</td>
            <td>{!! $studentApplyProject->remarks !!}</td>
            @if($studentApplyProject->status == 0)
            <td>Pending</td>
            @elseif($studentApplyProject->status == 1)
            <td>Approved</td>
            @elseif($studentApplyProject->status == 2)
            <td>Reviewing</td>
            @endif
            <td>
                {!! Form::open(['route' => ['studentApplyProjects.destroy', $studentApplyProject->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('studentApplyProjects.show', [$studentApplyProject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('studentApplyProjects.edit', [$studentApplyProject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>