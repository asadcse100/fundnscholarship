@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Complain
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('frontend.complains.show_fields')
                    <a href="{!! route('frontend.complains.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
