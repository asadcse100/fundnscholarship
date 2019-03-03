@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Student Application for Result
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($stdApplyResult, ['route' => ['frontend.stdApplyResults.update', $stdApplyResult->id], 'method' => 'patch']) !!}

                        @include('frontend.std_apply_results.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection