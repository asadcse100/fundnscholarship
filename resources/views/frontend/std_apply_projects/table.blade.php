<table class="table table-responsive" id="stdApplyProjects-table">
    <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Adress</th>
        <th>Organize</th>
        <th>Class</th>
        <th>Year</th>
        <th>Division</th>
        <th>District</th>
        <th>Project Name</th>
        <th>Project Rank</th>
        <th>Description</th>
        <th>Status</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stdApplyProjects as $stdApplyProject)
        <tr>
            <td>{!! $stdApplyProject->first_name !!}</td>
            <td>{!! $stdApplyProject->last_name !!}</td>
            <td>{!! $stdApplyProject->phone !!}</td>
            <td>{!! $stdApplyProject->adress !!}</td>
            <td>{!! $stdApplyProject->organize !!}</td>
            <td>{!! $stdApplyProject->class !!}</td>
            <td>{!! $stdApplyProject->year !!}</td>
            <td>{!! $stdApplyProject->division !!}</td>
            <td>{!! $stdApplyProject->district !!}</td>
            <td>{!! $stdApplyProject->project_name !!}</td>
            <td>{!! $stdApplyProject->project_rank !!}</td>
            <td>{!! $stdApplyProject->description !!}</td>
            <td>{!! $stdApplyProject->status !!}</td>
            <td>
                {!! Form::open(['route' => ['frontend.stdApplyProjects.destroy', $stdApplyProject->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('frontend.stdApplyProjects.show', [$stdApplyProject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('frontend.stdApplyProjects.edit', [$stdApplyProject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>