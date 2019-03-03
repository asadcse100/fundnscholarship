

<table class="table table-responsive" id="allEducationalInstitutions-table">
    <thead>
        <tr>
            <th>Id</th>
        <th>Name</th>
        <th>Eiin</th>
        <th>Type</th>

        <th>Division</th>

        <th>District</th>
        <th>Thana</th>
        <th>Union</th>
        <th>Address</th>
        <th>Post</th>
        <th>Management Type</th>
        <th>Phone</th>
        <th>Student Type</th>
        <th>Education Lavel</th>
        <th>MPO Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($allEducationalInstitutions as $allEducationalInstitution)
        <tr>
            <td>{!! $allEducationalInstitution->id !!}</td>
            <td>{!! $allEducationalInstitution->name !!}</td>
            <td>{!! $allEducationalInstitution->eiin !!}</td>
            <td>{!! $allEducationalInstitution->type !!}</td>

            <td>{!! $allEducationalInstitution->division !!}</td>

            <td>{!! $allEducationalInstitution->district !!}</td>
            <td>{!! $allEducationalInstitution->thana !!}</td>
            <td>{!! $allEducationalInstitution->unon !!}</td>
            <td>{!! $allEducationalInstitution->address !!}</td>
            <td>{!! $allEducationalInstitution->post !!}</td>
            <td>{!! $allEducationalInstitution->management_type !!}</td>
            <td>{!! $allEducationalInstitution->phone !!}</td>
            <td>{!! $allEducationalInstitution->student_type !!}</td>
            <td>{!! $allEducationalInstitution->edu_lavel !!}</td>
            <td>{!! $allEducationalInstitution->mpo_status !!}</td>
            <td>
                {!! Form::open(['route' => ['frontend.allEducationalInstitutions.destroy', $allEducationalInstitution->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('frontend.allEducationalInstitutions.show', [$allEducationalInstitution->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('frontend.allEducationalInstitutions.edit', [$allEducationalInstitution->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>