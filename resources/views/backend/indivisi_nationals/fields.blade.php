
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name|Title:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<!-- Criteria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('criteria', 'Criteria:') !!}
    {!! Form::text('criteria', null, ['class' => 'form-control']) !!}
</div>

<!-- Division Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Division', 'Division:') !!}
    <select class="from-control" name="division" >
    @foreach($division as $div)
    <option value="{{ $div->id }}">{{ $div->name }}</option>
    @endforeach
    </select>
</div>

<!-- District Field -->
<div class="form-group col-sm-6">
    {!! Form::label('District', 'District:') !!}
    <select class="from-control" name="district" >
    @foreach($district as $var)
    <option value="{{ $var->id }}">{{ $var->name }}</option>
    @endforeach
    </select>
</div>
<!--  Hidden Field -->
<div class="form-group col-sm-6">
         {{ Form::hidden('userId', '1') }}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Advantages Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('advantages', 'Advantages:') !!}
    {!! Form::textarea('advantages', null, ['class' => 'form-control']) !!}
</div>

<!-- Implemention Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('implemention', 'Implemention:') !!}
    {!! Form::textarea('implemention', null, ['class' => 'form-control']) !!}
</div>

<!-- Improvement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('improvement', 'Improvement:') !!}
    {!! Form::number('improvement', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.indivisiNationals.index') !!}" class="btn btn-default">Cancel</a>
</div>
