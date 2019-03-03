<div class="box-body" class="col-md-6">
<!-- Username Field -->
<div class="form-group col-sm-8">
<div class="form-group col-sm-6">
    {!! Form::label('userName', 'Username:') !!}
    {!! Form::text('userName', null, ['class' => 'form-control']) !!}
</div>
<!--  Hidden Field -->
<div class="form-group col-sm-6">
         {{ Form::hidden('userId', '1') }}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Issu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issu', 'Issu:') !!}
    {!! Form::text('issu', null, ['class' => 'form-control']) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Send', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('frontend.complains.index') !!}" class="btn btn-default">Cancel</a>
</div>
</div>
</div>