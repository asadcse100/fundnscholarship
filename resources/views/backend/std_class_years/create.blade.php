@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classes/Year/Semester of the Students
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'backend.stdClassYears.store']) !!}

                        @include('backend.std_class_years.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
