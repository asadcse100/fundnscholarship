<table class="table table-responsive" id="complains-table">
    <thead>
        <tr>
        <th>User ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Issue</th>
        <th>Details</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($complains as $complain)
        <tr>
            <td>{!! $complain->userId !!}</td>
            <td>{!! $complain->userName !!}</td>
            <td>{!! $complain->email !!}</td>
            <td>{!! $complain->phone !!}</td>
            <td>{!! $complain->issu !!}</td>
            <td>{!! $complain->details !!}</td>
            @if($complain->status == 0)
            <td>Pending</td>
            @elseif($complain->status == 1)
            <td>Soleved</td>
            @elseif($complain->status == 2)
            <td>Deleted</td>
            @endif
            <td>
                {!! Form::open(['route' => ['backend.complains.destroy', $complain->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.complains.show', [$complain->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.complains.edit', [$complain->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>