 @extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Student Apply for Project
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'studentApplyProjects.store']) !!}

                        @include('student_apply_projects.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
