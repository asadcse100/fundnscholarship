@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Student Application from Poor Fund
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('frontend.std_apply_poor_funds.show_fields')
                    <a href="{!! route('frontend.stdApplyPoorFunds.edit', [$stdApplyPoorFund->id]) !!}" class="btn btn-default">Edit</a>
                    <a href="{!! route('frontend.stdApplyPoorFunds.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
