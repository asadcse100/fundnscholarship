<table class="table table-responsive" id="stdClassYears-table">
    <thead>
        <tr>
            <th>Classes</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stdClassYears as $stdClassYear)
        <tr>
            <td>{!! $stdClassYear->year !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.stdClassYears.destroy', $stdClassYear->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.stdClassYears.show', [$stdClassYear->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.stdClassYears.edit', [$stdClassYear->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>