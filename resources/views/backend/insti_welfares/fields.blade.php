<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('insti_name', null, ['class' => 'form-control']) !!}
</div>
<!-- Insti Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insti_name', 'Insti Name:') !!}
    {!! Form::text('insti_name', null, ['class' => 'form-control']) !!}
</div>
<!-- Insti Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adress', 'Adress:') !!}
    {!! Form::textarea('adress', null, ['class' => 'form-control']) !!}
</div>
<!-- Insti Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('welfar_type', 'Welfar Type:') !!}
    <select class="from-control" name="type" >
    @foreach($welfar_type as $type)
    <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endforeach
    </select>
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
<!-- Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:') !!}
    {!! Form::number('cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Work Field Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('work_field', 'Work Field:') !!}
    {!! Form::textarea('work_field', null, ['class' => 'form-control']) !!}
</div>

<!-- Uno Certificate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uno_certificate', 'Uno Certificate:') !!}
    {!! Form::text('uno_certificate', null, ['class' => 'form-control']) !!}
</div>

<!-- Documentory Field -->
<div class="form-group col-sm-6">
    {!! Form::label('documentory', 'Documentory:') !!}
    {!! Form::text('documentory', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.instiWelfares.index') !!}" class="btn btn-default">Cancel</a>
</div>
