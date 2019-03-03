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
    {!! Form::textarea('adress', null, ['class' => 'form-control','rows'=>2]) !!}
</div>

<!-- Organiztion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('organize', 'School/College/University:') !!}
    <select class="from-control  btn btn-primary" name="organize" >
    <option value="School">School</option>
    <option value="College">College</option>
    <option value="University">University</option>
    </select>
</div>
<!-- Class Field -->
<div class="form-group col-sm-6 ">
    {!! Form::label('class', 'Class:') !!}
    <select class="from-control  btn btn-primary" name="class" >
    @foreach($std_classes as $class)
    <option value="{{ $class->id }}">{{ $class->name }}</option>
    @endforeach
    </select>
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', 'Year:') !!}
    <select class="from-control  btn btn-primary" name="year" >
    @foreach($std_years as $year)
    <option value="{{ $year->id }}">{{ $year->year }}</option>
    @endforeach
    </select>
</div>

<!--  Hidden Field -->
<div class="form-group col-sm-6 ">
         {{ Form::hidden('userId', Auth::guard('student')->id()) }}
</div>

<!-- Division Field -->
<div class="form-group col-sm-6 ">
    {!! Form::label('Division', 'Division:') !!}
    <select class="from-control  btn btn-primary" name="division" >
    @foreach($division as $div)
    <option value="{{ $div->id }}">{{ $div->name }}</option>
    @endforeach
    </select>
</div>

<!-- District Field -->
<div class="form-group col-sm-6 col-md-offset-3">
    {!! Form::label('District', 'District:') !!}
    <select class="from-control btn btn-primary" name="district" >
    @foreach($district as $var)
    <option value="{{ $var->id }}">{{ $var->name }}</option>
    @endforeach
    </select>
</div>

<!-- Organiztion Field -->
<div class="form-group col-sm-6 col-md-offset-3">
    {!! Form::label('School', 'School/College/University:') !!}
    <select class="from-control btn btn-primary" name="district" >
    <option value="1">School</option>
    <option value="2">College</option>
    <option value="3">University</option>
    </select>
</div>
<!-- Innovation Name Field -->
<div class="form-group col-sm-6 col-md-offset-3">
    {!! Form::label('innovation_name', 'Innovation Name:') !!}
    {!! Form::text('innovation_name', null, ['class' => 'form-control','rows'=>3]) !!}
</div>

<!-- Innovation Type Field -->
<div class="form-group col-sm-6 col-md-offset-3">
    {!! Form::label('innovation_type', 'Innovation Type:') !!}
    {!! Form::text('innovation_type', null, ['class' => 'form-control','rows'=>3]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-6 col-md-offset-3">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>3]) !!}
</div>

<!-- Video Link Field -->
<div class="form-group col-sm-12 col-lg-6 col-md-offset-3">
    {!! Form::label('video_link', 'Video Link:') !!}
    {!! Form::textarea('video_link', null, ['class' => 'form-control','rows'=>3]) !!}
</div>

<!-- Remarks Field -->
<div class="form-group col-sm-6 col-md-offset-3">
    {!! Form::label('remarks', 'Remarks:') !!}
    {!! Form::text('remarks', null, ['class' => 'form-control','rows'=>'3']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-6 col-md-offset-3">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('frontend.stdApplyInnovations.index') !!}" class="btn btn-default">Cancel</a>
</div>
