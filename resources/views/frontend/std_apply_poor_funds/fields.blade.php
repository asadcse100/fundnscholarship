<div class="col-sm-6">
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

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Adress Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('adress', 'Adress:') !!}
    {!! Form::textarea('adress', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class', 'Class:') !!}
    <select class="from-control" name="class" >
    @foreach($std_classes as $class)
    <option value="{{ $class->id }}">{{ $class->name }}</option>
    @endforeach
    </select>
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', 'Year:') !!}
    <select class="from-control" name="year" >
    @foreach($std_years as $year)
    <option value="{{ $year->id }}">{{ $year->year }}</option>
    @endforeach
    </select>
</div>

<!--  Hidden Field -->
<div class="form-group col-sm-6">
         {{ Form::hidden('userId', Auth::guard('student')->id()) }}
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


<!-- Organiztion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('organize', 'School/College/University:') !!}
    <select class="from-control" name="organize" >
    <option value="School">School</option>
    <option value="College">College</option>
    <option value="University">University</option>
    </select>
</div>  
<!-- Gpa Cgpa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gpa_cgpa', 'Gpa Cgpa:') !!}
    {!! Form::text('gpa_cgpa', null, ['class' => 'form-control']) !!}
</div>

<!-- Father Occupation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_occupation', 'Father Occupation:') !!}
    {!! Form::text('father_occupation', null, ['class' => 'form-control']) !!}
</div>

<!-- Monthly Income Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monthly_income', 'Monthly Income:') !!}
    {!! Form::number('monthly_income', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Chirman Certificate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chirman_certificate', 'Chirman Certificate:') !!}
    {!! Form::text('chirman_certificate', null, ['class' => 'form-control']) !!}
</div>

<!-- Remarks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarks', 'Remarks:') !!}
    {!! Form::text('remarks', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('frontend.stdApplyPoorFunds.index') !!}" class="btn btn-default">Cancel</a>
</div>
</div>