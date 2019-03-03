<table class="table table-responsive" id="indivisiNationals-table">
    <thead>
        <tr>
        <th>Title/Name</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Criteria</th>
        <th>Division</th>
        <th>Description</th>
        <th>Advantages</th>
        <th>Implemention</th>
        <th>Improvement</th>
        <th>Status</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($indivisiNationals as $indivisiNational)
        <tr>
            <td>{!! $indivisiNational->name !!}</td>
            <td>{!! $indivisiNational->first_name !!}</td>
            <td>{!! $indivisiNational->last_name !!}</td>
            <td>{!! $indivisiNational->address !!}</td>
            <td>{!! $indivisiNational->phone !!}</td>
            <td>{!! $indivisiNational->criteria !!}</td>
            <td>{!! $indivisiNational->division !!}</td>
            <td>{!! $indivisiNational->description !!}</td>
            <td>{!! $indivisiNational->advantages !!}</td>
            <td>{!! $indivisiNational->implemention !!}</td>
            <td>{!! $indivisiNational->improvement !!}</td>
            @if($indivisiNationals->status == 0)
            <td>Pending</td>
            @elseif($indivisiNationals->status == 1)
            <td>Approved</td>
            @elseif($indivisiNationals->status == 2)
            <td>Reviewing</td>
            @endif
            <td>
                {!! Form::open(['route' => ['backend.indivisiNationals.destroy', $indivisiNational->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.indivisiNationals.show', [$indivisiNational->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.indivisiNationals.edit', [$indivisiNational->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>