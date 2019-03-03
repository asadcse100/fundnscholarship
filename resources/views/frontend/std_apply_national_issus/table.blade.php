<table class="table table-responsive" id="stdApplyNationalIssus-table">
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
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stdApplyNationalIssus as $stdApplyNationalIssu)
        <tr>
            <td>{!! $studentApplyResult->first_name !!}</td>
            <td>{!! $studentApplyResult->last_name !!}</td>
            <td>{!! $studentApplyResult->adress !!}</td>
            <td>{!! $studentApplyResult->organize !!}</td>
            <td>{!! $stdApplyNationalIssu->class !!}</td>
            <td>{!! $stdApplyNationalIssu->year !!}</td>
            <td>{!! $stdApplyNationalIssu->issue_name !!}</td>
            <td>{!! $stdApplyNationalIssu->issue_type !!}</td>
            <td>{!! $stdApplyNationalIssu->description !!}</td>
            <td>{!! $stdApplyNationalIssu->issue_image !!}</td>
            <td>{!! $stdApplyNationalIssu->video_link !!}</td>
            <td>{!! $stdApplyNationalIssu->remarks !!}</td>
            <td>
                {!! Form::open(['route' => ['frontend.stdApplyNationalIssus.destroy', $stdApplyNationalIssu->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('frontend.stdApplyNationalIssus.show', [$stdApplyNationalIssu->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('frontend.stdApplyNationalIssus.edit', [$stdApplyNationalIssu->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>