@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Student Application from Poor Fund
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'frontend.stdApplyPoorFunds.store']) !!}

                        @include('frontend.std_apply_poor_funds.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
