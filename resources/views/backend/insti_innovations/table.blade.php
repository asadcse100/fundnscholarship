<table class="table table-responsive" id="instiInnovations-table">
    <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Innovation Name</th>
        <th>Adress</th>
        <th>phone</th>
        <th>Innovation Type</th>
        <th>Description</th>
        <th>Video Link</th>
        <th>Remarks</th>
        <th>Status</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($instiInnovations as $instiInnovation)
        <tr>
            <td>{!! $instiInnovation->first_name !!}</td>
            <td>{!! $instiInnovation->last_name !!}</td>
            <td>{!! $instiInnovation->innovation_name !!}</td>
            <td>{!! $instiInnovation->adress !!}</td>
            <td>{!! $instiInnovation->phone !!}</td>
            <td>{!! $instiInnovation->innovation_type !!}</td>
            <td>{!! $instiInnovation->description !!}</td>
            <td>{!! $instiInnovation->video_link !!}</td>
            <td>{!! $instiInnovation->remarks !!}</td>
            @if($instiInnovations->status == 0)
            <td>Pending</td>
            @elseif($instiInnovations->status == 1)
            <td>Approved</td>
            @elseif($instiInnovations->status == 2)
            <td>Reviewing</td>
            @endif
            <td>
                {!! Form::open(['route' => ['backend.instiInnovations.destroy', $instiInnovation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.instiInnovations.show', [$instiInnovation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.instiInnovations.edit', [$instiInnovation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>