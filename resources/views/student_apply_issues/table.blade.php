<table class="table table-responsive" id="studentApplyIssues-table">
    <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Organize</th>
        <th>Class</th>
        <th>Year</th>
        <th>Issue Name</th>
        <th>Issue Type</th>
        <th>Description</th>
        <th>Issue Image</th>
        <th>Video Link</th>
        <th>Remarks</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($studentApplyIssues as $studentApplyIssue)
        <tr>
            <td>{!! $studentApplyResult->first_name !!}</td>
            <td>{!! $studentApplyResult->last_name !!}</td>
            <td>{!! $studentApplyResult->adress !!}</td>
            <td>{!! $studentApplyResult->organize !!}</td>
            <td>{!! $studentApplyIssue->class !!}</td>
            <td>{!! $studentApplyIssue->year !!}</td>
            <td>{!! $studentApplyIssue->issue_name !!}</td>
            <td>{!! $studentApplyIssue->issue_type !!}</td>
            <td>{!! $studentApplyIssue->description !!}</td>
            <td>{!! $studentApplyIssue->issue_image !!}</td>
            <td>{!! $studentApplyIssue->video_link !!}</td>
            <td>{!! $studentApplyIssue->remarks !!}</td>
            @if($studentApplyIssues->status == 0)
            <td>Pending</td>
            @elseif($studentApplyIssues->status == 1)
            <td>Approved</td>
            @elseif($studentApplyIssues->status == 2)
            <td>Reviewing</td>
            @endif
            <td>
                {!! Form::open(['route' => ['studentApplyIssues.destroy', $studentApplyIssue->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('studentApplyIssues.show', [$studentApplyIssue->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('studentApplyIssues.edit', [$studentApplyIssue->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>