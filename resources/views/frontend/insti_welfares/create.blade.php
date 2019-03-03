@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Institutional Application for Welfare Task
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'frontend.instiWelfares.store']) !!}

                        @include('frontend.insti_welfares.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
