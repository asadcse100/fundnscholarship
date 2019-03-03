
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
<!-- Innovation Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('innovation_name', 'Innovation Name:') !!}
    {!! Form::text('innovation_name', null, ['class' => 'form-control']) !!}
</div>
<!-- Adress Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>
<!-- Phone Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--  Hidden Field -->
<div class="form-group col-sm-6">
         {{ Form::hidden('userId', Auth::guard('institution')->id()) }}
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
<!-- Innovation Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('innovation_name', 'Innovation Name:') !!}
    {!! Form::text('innovation_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Innovation Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('innovation_type', 'Innovation Type:') !!}
    {!! Form::text('innovation_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Organiztion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('innovation_type', 'Innovation Type:') !!}
    <select class="from-control" name="innovation_type" >
    <option value="1">Type 1</option>
    <option value="2">Type 2</option>
    <option value="3">Type 3</option>
    </select>
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_link', 'Video Link:') !!}
    {!! Form::text('video_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Remarks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarks', 'Remarks:') !!}
    {!! Form::text('remarks', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('frontend.instiInnovations.index') !!}" class="btn btn-default">Cancel</a>
</div>
