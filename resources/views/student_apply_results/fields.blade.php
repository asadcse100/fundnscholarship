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
    {!! Form::textarea('adress', null, ['class' => 'form-control']) !!}
</div>
<!-- Organiztion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('School', 'School/College/University:') !!}
    <select class="from-control" name="organize" >
    <option value="School">School</option>
    <option value="College">College</option>
    <option value="University">University</option>
    </select>
</div>
<!-- Class Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class', 'Class:') !!}
    <select class="from-control" name="class" >
    @foreach($std_classes as $class)
    <option value="{{ $class->name }}">{{ $class->name }}</option>
    @endforeach
    </select>
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', 'Year:') !!}
    <select class="from-control" name="year" >
    @foreach($std_years as $year)
    <option value="{{ $year->year }}">{{ $year->year }}</option>
    @endforeach
    </select>
</div>

<!-- Division Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Division', 'Division:') !!}
    <select class="from-control" name="division" >
    @foreach($division as $div)
    <option value="{{ $div->name }}">{{ $div->name }}</option>
    @endforeach
    </select>
</div>

<!-- District Field -->
<div class="form-group col-sm-6">
    {!! Form::label('District', 'District:') !!}
    <select class="from-control" name="district" >
    @foreach($district as $var)
    <option value="{{ $var->name }}">{{ $var->name }}</option>
    @endforeach
    </select>
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



<!-- Result Image Field -->
<div class="form-group col-sm-6">
         {{ Form::hidden('userId', '1') }}
</div>

<!-- Result Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Status', 'Status:') !!}
    <select class="from-control" name="status" >
    <option value="0">Pending</option>
    <option value="2">Reviewing</option>
    <option value="1">Apporved</option>
    </select>
</div>

<!-- Submit Field -->

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('studentApplyResults.index') !!}" class="btn btn-default">Cancel</a>
</div>

