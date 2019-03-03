<table class="table table-responsive" id="welfarTypes-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($welfarTypes as $welfarType)
        <tr>
            <td>{!! $welfarType->name !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.welfarTypes.destroy', $welfarType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.welfarTypes.show', [$welfarType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.welfarTypes.edit', [$welfarType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>