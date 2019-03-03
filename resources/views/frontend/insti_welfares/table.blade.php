<table class="table table-responsive" id="instiWelfares-table">
    <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Institute Name</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Type</th>
        <th>Cost</th>
        <th>Work Field</th>
        <th>Uno Certificate</th>
        <th>Documentory</th>
        <th>Description</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($instiWelfares as $instiWelfare)
        <tr>
            
            <td>{!! $instiWelfare->first_name !!}</td>
            <td>{!! $instiWelfare->last_name !!}</td>
            <td>{!! $instiWelfare->insti_name !!}</td>
            <td>{!! $instiWelfare->adress !!}</td>
            <td>{!! $instiWelfare->phone !!}</td>
            <td>{!! $instiWelfare->type !!}</td>
            <td>{!! $instiWelfare->cost !!}</td>
            <td>{!! $instiWelfare->work_field !!}</td>
            <td>{!! $instiWelfare->uno_certificate !!}</td>
            <td>{!! $instiWelfare->documentory !!}</td>
            <td>{!! $instiWelfare->description !!}</td>
            <td>
                {!! Form::open(['route' => ['frontend.instiWelfares.destroy', $instiWelfare->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('frontend.instiWelfares.show', [$instiWelfare->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('frontend.instiWelfares.edit', [$instiWelfare->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>