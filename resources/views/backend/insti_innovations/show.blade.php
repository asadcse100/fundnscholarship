@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Institution Innovation
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('backend.insti_innovations.show_fields')
                    <a href="{!! route('backend.instiInnovations.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
