@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Individual Application for Innovation
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('frontend.indivisi_innovations.show_fields')
                    <a href="{!! route('frontend.indivisiInnovations.edit', [$indivisiInnovation->id]) !!}" class="btn btn-default">Edit</a>
                    <a href="{!! route('frontend.indivisiInnovations.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
