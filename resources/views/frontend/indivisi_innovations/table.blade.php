<table class="table table-responsive" id="indivisiInnovations-table">
    <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Innovation Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Gov Patent</th>
        <th>Related Ministy</th>
        <th>Criteria</th>
        <th>Description</th>
        <th>Advantages</th>
        <th>Implemention</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($indivisiInnovations as $indivisiInnovation)
        <tr>
            <td>{!! $indivisiInnovation->first_name !!}</td>
            <td>{!! $indivisiInnovation->last_name !!}</td>
            <td>{!! $indivisiInnovation->name !!}</td>
            <td>{!! $indivisiInnovation->address !!}</td>
            <td>{!! $indivisiInnovation->phone !!}</td>
            <td>{!! $indivisiInnovation->name !!}</td>
            <td>{!! $indivisiInnovation->gov_patent !!}</td>
            <td>{!! $indivisiInnovation->related_ministy !!}</td>
            <td>{!! $indivisiInnovation->criteria !!}</td>
            <td>{!! $indivisiInnovation->description !!}</td>
            <td>{!! $indivisiInnovation->advantages !!}</td>
            <td>{!! $indivisiInnovation->implemention !!}</td>
            <td>
                {!! Form::open(['route' => ['frontend.indivisiInnovations.destroy', $indivisiInnovation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('frontend.indivisiInnovations.show', [$indivisiInnovation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('frontend.indivisiInnovations.edit', [$indivisiInnovation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>