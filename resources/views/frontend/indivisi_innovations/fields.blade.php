<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<!--  Hidden Field -->
<div class="form-group col-sm-6">
         {{ Form::hidden('userId', Auth::guard('individual')->id()) }}
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Innovation Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
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
<!-- Gov Patent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gov_patent', 'Gov Patent:') !!}
    {!! Form::text('gov_patent', null, ['class' => 'form-control']) !!}
</div>

<!-- Related Ministy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('related_ministy', 'Related Ministy:') !!}
    <select class="from-control" name="related_ministy" >
    @foreach($ministy as $var)
    <option value="{{ $var->id }}">{{ $var->name }}</option>
    @endforeach
    </select>
</div>

<!-- Criteria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('criteria', 'Criteria:') !!}
    {!! Form::textarea('criteria', null, ['class' => 'form-control']) !!}
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('frontend.indivisiInnovations.index') !!}" class="btn btn-default">Cancel</a>
</div>
