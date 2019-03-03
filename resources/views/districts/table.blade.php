<table class="table table-responsive" id="districts-table">
    <thead>
        <tr>
            <th>Division Id</th>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($districts as $district)
        <tr>
            <td>{!! $district->division_id !!}</td>
            <td>{!! $district->name !!}</td>
            <td>
                {!! Form::open(['route' => ['districts.destroy', $district->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('districts.show', [$district->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('districts.edit', [$district->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>