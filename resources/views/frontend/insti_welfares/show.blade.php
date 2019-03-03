@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Institutional Application for Welfare Task
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('frontend.insti_welfares.show_fields')
                    <a href="{!! route('frontend.instiWelfares.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
