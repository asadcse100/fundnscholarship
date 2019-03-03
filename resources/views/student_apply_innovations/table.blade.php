<table class="table table-responsive" id="studentApplyInnovations-table">
    <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Organize</th>
        <th>Class</th>
        <th>Year</th> 
        <th>Innovation Name</th>
        <th>Innovation Type</th>
        <th>Description</th>
        <th>Video Link</th>
        <th>Remarks</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($studentApplyInnovations as $studentApplyInnovation)
        <tr>
            <td>{!! $studentApplyResult->first_name !!}</td>
            <td>{!! $studentApplyResult->last_name !!}</td>
            <td>{!! $studentApplyResult->adress !!}</td>
            <td>{!! $studentApplyResult->organize !!}</td>
            <td>{!! $studentApplyInnovation->class !!}</td>
            <td>{!! $studentApplyInnovation->year !!}</td>
            <td>{!! $studentApplyInnovation->innovation_name !!}</td>
            <td>{!! $studentApplyInnovation->innovation_type !!}</td>
            <td>{!! $studentApplyInnovation->description !!}</td>
            <td>{!! $studentApplyInnovation->video_link !!}</td>
            <td>{!! $studentApplyInnovation->remarks !!}</td>
            @if($studentApplyInnovations->status == 0)
            <td>Pending</td>
            @elseif($studentApplyInnovations->status == 1)
            <td>Approved</td>
            @elseif($studentApplyInnovations->status == 2)
            <td>Reviewing</td>
            @endif
            <td>
                {!! Form::open(['route' => ['studentApplyInnovations.destroy', $studentApplyInnovation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('studentApplyInnovations.show', [$studentApplyInnovation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('studentApplyInnovations.edit', [$studentApplyInnovation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>