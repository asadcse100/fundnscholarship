<table class="table table-responsive" id="divisions-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($divisions as $division)
        <tr>
            <td>{!! $division->name !!}</td>
            <td>
                {!! Form::open(['route' => ['divisions.destroy', $division->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('divisions.show', [$division->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('divisions.edit', [$division->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>