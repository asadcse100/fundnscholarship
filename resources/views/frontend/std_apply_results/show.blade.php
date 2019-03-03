@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Student Application for Result
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('frontend.std_apply_results.show_fields')
                    <a href="{!! route('frontend.stdApplyResults.edit', [$stdApplyResult->id]) !!}" class="btn btn-default">Edit</a>
                    <a href="{!! route('frontend.stdApplyResults.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
