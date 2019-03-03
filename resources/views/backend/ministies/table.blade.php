<table class="table table-responsive" id="ministies-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ministies as $ministy)
        <tr>
            <td>{!! $ministy->name !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.ministies.destroy', $ministy->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.ministies.show', [$ministy->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.ministies.edit', [$ministy->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>