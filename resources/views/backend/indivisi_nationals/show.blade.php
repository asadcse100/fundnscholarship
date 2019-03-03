@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Individual National Issues Work
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('backend.indivisi_nationals.show_fields')
                    <a href="{!! route('backend.indivisiNationals.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
