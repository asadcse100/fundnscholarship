@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classes of the Students
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'backend.stdClasses.store']) !!}

                        @include('backend.std_classes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
