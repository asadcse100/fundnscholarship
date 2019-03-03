<!-- Id Field -->
<div class="col-md-6">
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $complain->id !!}</p>
</div>

<!-- Userid Field -->
<div class="form-group">
    {!! Form::label('userId', 'Userid:') !!}
    <p>{!! $complain->userId !!}</p>
</div>

<!-- Username Field -->
<div class="form-group">
    {!! Form::label('userName', 'Username:') !!}
    <p>{!! $complain->userName !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $complain->email !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{!! $complain->phone !!}</p>
</div>

<!-- Issu Field -->
<div class="form-group">
    {!! Form::label('issu', 'Issu:') !!}
    <p>{!! $complain->issu !!}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    <p>{!! $complain->details !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $complain->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $complain->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $complain->deleted_at !!}</p>
</div>

</div>