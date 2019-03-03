<table class="table table-responsive" id="stdClasses-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stdClasses as $stdClass)
        <tr>
            <td>{!! $stdClass->name !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.stdClasses.destroy', $stdClass->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.stdClasses.show', [$stdClass->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.stdClasses.edit', [$stdClass->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>