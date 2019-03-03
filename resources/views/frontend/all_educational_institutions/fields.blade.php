<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Eiin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('eiin', 'Eiin:') !!}
    {!! Form::number('eiin', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Division Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('division_id', 'Division Id:') !!}
    {!! Form::number('division_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Division Field -->
<div class="form-group col-sm-6">
    {!! Form::label('division', 'Division:') !!}
    {!! Form::text('division', null, ['class' => 'form-control']) !!}
</div>

<!-- District Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('district_id', 'District Id:') !!}
    {!! Form::number('district_id', null, ['class' => 'form-control']) !!}
</div>

<!-- District Field -->
<div class="form-group col-sm-6">
    {!! Form::label('district', 'District:') !!}
    {!! Form::text('district', null, ['class' => 'form-control']) !!}
</div>

<!-- Thana Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thana', 'Thana:') !!}
    {!! Form::text('thana', null, ['class' => 'form-control']) !!}
</div>

<!-- Unon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unon', 'Unon:') !!}
    {!! Form::text('unon', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post', 'Post:') !!}
    {!! Form::text('post', null, ['class' => 'form-control']) !!}
</div>

<!-- Management Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('management_type', 'Management Type:') !!}
    {!! Form::text('management_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Student Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_type', 'Student Type:') !!}
    {!! Form::text('student_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Edu Lavel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edu_lavel', 'Edu Lavel:') !!}
    {!! Form::text('edu_lavel', null, ['class' => 'form-control']) !!}
</div>

<!-- Mpo Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mpo_status', 'Mpo Status:') !!}
    {!! Form::text('mpo_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('frontend.allEducationalInstitutions.index') !!}" class="btn btn-default">Cancel</a>
</div>
