@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Individual Application for National Issues
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('frontend.indivisi_nationals.show_fields')
                    <a href="{!! route('frontend.indivisiNationals.edit', [$indivisiNational->id]) !!}" class="btn btn-default">Edit</a>
                    <a href="{!! route('frontend.indivisiNationals.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
