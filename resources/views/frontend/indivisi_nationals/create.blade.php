@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Individual Application for National Issues
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'frontend.indivisiNationals.store']) !!}

                        @include('frontend.indivisi_nationals.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
