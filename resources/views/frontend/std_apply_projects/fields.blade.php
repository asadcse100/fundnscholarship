
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
<div class="form-group col-sm-6 col-lg-6 ">
    {!! Form::label('adress', 'Adress:') !!}
    {!! Form::textarea('adress', null, ['class' => 'form-control' ,'rows'=>'3']) !!}
</div>
<div class="col-sm-8">
    <div class="row">
<!-- Organiztion Field -->
<div class="form-group col-sm-3 ">
    {!! Form::label('organize', 'School/College/University:') !!}
    <select class="from-control btn btn-info" name="organize" >
    <option value="School">School</option>
    <option value="College">College</option>
    <option value="University">University</option>
    </select>
</div>

<!-- Class Field -->
<div class="form-group col-sm-3">
    {!! Form::label('class', 'Class:') !!}
    <select class="from-control btn btn-info" name="class" >
    @foreach($std_classes as $class)
    <option value="{{ $class->id }}">{{ $class->name }}</option>
    @endforeach
    </select>
</div>


<!-- Year Field -->
<div class="form-group col-sm-3 ">
    {!! Form::label('year', 'Year:') !!}
    <select class="from-control btn btn-info" name="year" >
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
    <select class="from-control btn btn-info" name="division" >
    @foreach($division as $div)
    <option value="{{ $div->id }}">{{ $div->name }}</option>
    @endforeach
    </select>
</div>

<!-- District Field -->
<div class="form-group col-sm-6">
    {!! Form::label('District', 'District:') !!}
    <select class="from-control btn btn-info" name="district" >
    @foreach($district as $var)
    <option value="{{ $var->id }}">{{ $var->name }}</option>
    @endforeach
    </select>
</div>


<!-- Project Name Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('project_name', 'Project Name:') !!}
    {!! Form::text('project_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Project Rank Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('project_rank', 'Project Rank:') !!}
    {!! Form::text('project_rank', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>'3']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-6 ">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('frontend.stdApplyProjects.index') !!}" class="btn btn-default">Cancel</a>
</div>
</div></div>