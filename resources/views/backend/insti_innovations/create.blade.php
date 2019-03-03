@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Institution Innovation
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'backend.instiInnovations.store']) !!}

                        @include('backend.insti_innovations.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
