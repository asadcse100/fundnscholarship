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
<!-- Adress  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<!-- Adress  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adress', 'Adress:') !!}
    {!! Form::textarea('adress', null, ['class' => 'form-control','rows'=>'3']) !!}
</div>

<div class="col-sm-6">

    <div class="row">
<!-- Class Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class', 'Class:') !!}
    <select class="from-control btn btn-primary dropdown-toggle" name="class" >
    @foreach($std_classes as $class)
    <option value="{{ $class->name }}">{{ $class->name }}</option>
    @endforeach
    </select>
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', 'Year:') !!}
    <select class="from-control btn btn-primary dropdown-toggle" name="year" >
    @foreach($std_years as $year)
    <option value="{{ $year->year }}">{{ $year->year }}</option>
    @endforeach
    </select>
</div>

<!-- Division Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Division', 'Division:') !!}
    <select class="from-control  btn btn-primary dropdown-toggl" name="division" >
    @foreach($division as $div)
    <option value="{{ $div->name }}">{{ $div->name }}</option>
    @endforeach
    </select>
</div>

<!-- District Field -->
<div class="form-group col-sm-6">
    {!! Form::label('District', 'District:') !!}
    <select class="from-control  btn btn-primary dropdown-toggl" name="district" >
    @foreach($district as $var)
    <option value="{{ $var->name }}">{{ $var->name }}</option>
    @endforeach
    </select>
</div>

<!-- Organiztion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('organize', 'School/College/University:') !!}
    <select class="from-control  btn btn-primary dropdown-toggl" name="organize" >
    <option value="School">School</option>
    <option value="College">College</option>
    <option value="University">University</option>
    </select>
</div>
<!--  Hidden Field -->
<div class="form-group col-sm-6">
         {{ Form::hidden('userId', Auth::guard('student')->id()) }}
</div>
<!-- Gpa Cgpa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gpa_cgpa', 'Gpa Cgpa:') !!}
    {!! Form::text('gpa_cgpa', null, ['class' => 'form-control']) !!}
</div>

<!-- Merit List Field -->
<div class="form-group col-sm-6">
    {!! Form::label('merit_list', 'Merit List:') !!}
    {!! Form::text('merit_list', null, ['class' => 'form-control']) !!}
</div>

<!-- Result Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('result_image', 'Result Image:') !!}
    {!! Form::text('result_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-6">
    {!! Form::submit('Save', ['class' => 'btn btn-info']) !!}
    <a href="{!! route('frontend.stdApplyResults.index') !!}" class="btn btn-default">Cancel</a>
</div>
</div></div>