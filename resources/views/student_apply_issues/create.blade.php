@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Student Apply Issue
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'studentApplyIssues.store']) !!}

                        @include('student_apply_issues.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
