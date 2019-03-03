<table class="table table-responsive" id="stdApplyInnovations-table">
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
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stdApplyInnovations as $stdApplyInnovation)
        <tr>
            <td>{!! $studentApplyResult->first_name !!}</td>
            <td>{!! $studentApplyResult->last_name !!}</td>
            <td>{!! $studentApplyResult->adress !!}</td>
            <td>{!! $studentApplyResult->organize !!}</td>
            <td>{!! $stdApplyInnovation->class !!}</td>
            <td>{!! $stdApplyInnovation->year !!}</td>
            <td>{!! $stdApplyInnovation->innovation_name !!}</td>
            <td>{!! $stdApplyInnovation->innovation_type !!}</td>
            <td>{!! $stdApplyInnovation->description !!}</td>
            <td>{!! $stdApplyInnovation->video_link !!}</td>
            <td>{!! $stdApplyInnovation->remarks !!}</td>
            <td>
                {!! Form::open(['route' => ['frontend.stdApplyInnovations.destroy', $stdApplyInnovation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('frontend.stdApplyInnovations.show', [$stdApplyInnovation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('frontend.stdApplyInnovations.edit', [$stdApplyInnovation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
         
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>