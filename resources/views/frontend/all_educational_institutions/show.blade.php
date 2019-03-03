@extends('Front/layouts/master')
@section('content')
    <section class="content-header">
        <h1>
            All Educational Institution
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('frontend.all_educational_institutions.show_fields')
                    <a href="{!! route('frontend.allEducationalInstitutions.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
