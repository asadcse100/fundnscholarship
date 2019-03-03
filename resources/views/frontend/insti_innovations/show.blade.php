@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Institutional Innovation
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('frontend.insti_innovations.show_fields')
                    <a href="{!! route('frontend.instiInnovations.edit', [$instiInnovation->id]) !!}" class="btn btn-default">Edit</a>
                    <a href="{!! route('frontend.instiInnovations.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
