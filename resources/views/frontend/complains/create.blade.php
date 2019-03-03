@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Complain
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'frontend.complains.store']) !!}

                        @include('frontend.complains.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
